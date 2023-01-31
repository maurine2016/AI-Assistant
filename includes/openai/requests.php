<?php

add_action( 'rest_api_init', function () {
    register_rest_route( 'aikit/openai/v1', '/autocomplete', array(
        'methods' => 'POST',
        'callback' => 'aikit_rest_openai_autocomplete',
        'permission_callback' => function () {
            return is_user_logged_in() && current_user_can( 'edit_posts' );
        }
    ));
} );

function aikit_rest_openai_autocomplete( $data ) {
    $type = $data['type'] ?? '';

    $language = $data['language'] ?? 'en';

    return aikit_rest_openai_do_request( $data, $type, $language);
}

function aikit_get_max_tokens_for_model($model) {
    if ($model == 'text-davinci-002' || $model == 'text-davinci-003') {
        return 4000;
    }

    return 2000;
}

function aikit_rest_openai_get_available_models($api_key) {
    $client = new \AIKit\Dependencies\GuzzleHttp\Client();

    try {
        $res = $client->request('GET', 'https://api.openai.com/v1/models', [
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
                'Content-Type' => 'application/json',
            ],
        ]);
    } catch (\AIKit\Dependencies\GuzzleHttp\Exception\ClientException $e) {
        return false;
    }

    if ( $res->getStatusCode() !== 200 ) {
        return false;
    }

    $body = json_decode( $res->getBody(), true );

    if ( ! isset( $body['data'] ) ) {
        return false;
    }

    $models = [];
    foreach ( $body['data'] as $model ) {
        $models[] = $model['id'];
    }

    return $models;
}

function aikit_add_selected_text_to_prompt ($prompt, $selected_text) {
    return str_replace('[[text]]', $selected_text, $prompt);
}


function aikit_rest_openai_do_request ( $data, $type, $language ) {

    $prompt_manager = new AIKit_Prompt_Manager();
    $promptsObject = $prompt_manager->get_prompts_by_language($language);

    if ( ! isset( $promptsObject[$type] ) ) {
        return new WP_Error( 'invalid_type', 'Invalid type', array( 'status' => 400 ) );
    }

    if ( ! isset( $data['text'] ) ) {
        return new WP_Error( 'missing_param', 'Missing text parameter', array( 'status' => 400 ) );
    }

    $prompt = $promptsObject[$type]['prompt'];

    if ($promptsObject[$type]['requiresTextSelection']) {
        $prompt = aikit_add_selected_text_to_prompt($prompt, $data['text']);
    }

    $text = $data['text'];
    $client = new \AIKit\Dependencies\GuzzleHttp\Client();

    $maxTokenMultiplier = intval(1 + intval(get_option( 'aikit_setting_openai_max_tokens_multiplier' ) ?? 0) / 10);

    $promptWordLengthType = $promptsObject[$type]['wordLength']['type'];
    $promptWordLength = $promptsObject[$type]['wordLength']['value'];

    if ($promptWordLengthType == AIKIT_WORD_LENGTH_TYPE_FIXED) {
        $maxTokensToGenerate = intval($promptWordLength * 1.33);
    } else {
        $maxTokensToGenerate = intval(str_word_count($text) * $promptWordLength * 1.33);
    }

    $maxTokensToGenerate *= $maxTokenMultiplier;

    $maxTokensToGenerateIncludingPrompt = $maxTokensToGenerate + intval(str_word_count($prompt) * 1.33);

//    $maxTokensToGenerateIncludingPrompt = max($maxTokensToGenerateIncludingPrompt, 256); // minimum tokens as per OpenAI best practices

    try {
        $model = get_option('aikit_setting_openai_model');
        $res = $client->request('POST', 'https://api.openai.com/v1/completions', [
            'body' => json_encode([
                'model' => $model,
                'prompt' => $prompt,
                "temperature" => 0.7,
                'max_tokens' => min(
                    $maxTokensToGenerateIncludingPrompt,
                    aikit_get_max_tokens_for_model($model)
                ),
            ]),
            'headers' => [
                'Authorization' => 'Bearer ' . get_option('aikit_setting_openai_key'),
                'Content-Type' => 'application/json',
            ],
        ]);
    } catch (\AIKit\Dependencies\GuzzleHttp\Exception\ClientException $e) {
        return new WP_Error( 'openai_error', json_encode([
            'message' => 'error while calling openai',
            'responseBody' => $e->getResponse()->getBody()->getContents(),
        ]), array( 'status' => 500 ) );
    } catch (\AIKit\Dependencies\GuzzleHttp\Exception\GuzzleException $e) {
        return new WP_Error( 'openai_error', json_encode([
            'message' => 'error while calling openai',
            'responseBody' => $e->getMessage(),
        ]), array( 'status' => 500 ) );
    }

    $body = $res->getBody();
    $json = json_decode($body, true);

    $choices = $json['choices'];

    if ( count( $choices ) == 0 ) {
        return new WP_Error( 'no_choices', 'No completions found, please try again using different text.', array( 'status' => 400 ) );
    }

    $resultText = trim($choices[0]['text']);

    return new WP_REST_Response([
        'text' => $resultText,
    ], 200);
}

function aikit_get_language_used() {
    // get language from the saved settings
    return get_option('aikit_setting_openai_language', 'en');
}
