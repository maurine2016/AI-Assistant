<?php

/**
 * Plugin Name:       AIKit
 * Plugin URI:        https://getaikit.com
 * Description:       AIKit is your WordPress AI assistant, powered by OpenAI's GPT-3.
 * Version:           2.0.4
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Domain Path:       /languages
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includes/constants.php';
require __DIR__ . '/includes/openai/prompt-manager.php';
require __DIR__ . '/includes/openai/initial-prompts.php';
require __DIR__ . '/includes/admin.php';
require __DIR__ . '/includes/openai/requests.php';

function aikit_block_assets( $hook ) {

    $dependencies = require __DIR__ . '/fe/build/index.asset.php';

    $isOpenAIKeyValid = get_option( 'aikit_setting_openai_key_valid' );
    $selectedLanguage = get_option( 'aikit_setting_openai_language' );

    // Create any data in PHP that we may need to use in our JS file
    $nonce = wp_create_nonce('wp_rest' );
    $aiKitScriptVars = array(
        'nonce'  =>  $nonce,
        'siteUrl' => get_site_url(),
        'autocompletedTextBackgroundColor' => get_option('aikit_setting_autocompleted_text_background_color'),
        'isOpenAIKeyValid' => $isOpenAIKeyValid,
        'selectedLanguage' => $selectedLanguage,
        'prompts' => AIKit_Prompt_Manager::get_instance()->get_prompts_for_frontend($selectedLanguage),
    );

    wp_add_inline_script( 'aikit_index_js', 'var aikit =' . json_encode($aiKitScriptVars) );

    wp_enqueue_script( 'aikit_index_js');

    wp_register_style( 'aikit_index_css', plugin_dir_url( __FILE__ ) . 'fe/build/style-index.css', false, $dependencies['version'] );
    wp_enqueue_style ( 'aikit_index_css' );
}

add_action( 'enqueue_block_assets', 'aikit_block_assets' );


add_action( 'init', 'aikit_load_textdomain' );

function aikit_load_textdomain() {

    // get current language
    $currentLanguage = get_locale();

    if (strlen($currentLanguage) > 2) {
        $currentLanguage = explode('_', $currentLanguage)[0];
    }

    // load language regardless of locale
    load_textdomain( 'aikit', __DIR__ . "/languages/$currentLanguage.mo" );
}

/* Add admin notice */
add_action( 'admin_notices', 'aikit_admin_configure_notice' );


/**
 * Admin Notice on Activation.
 * @since 0.1.0
 */
function aikit_admin_configure_notice() {

    global $pagenow;

    if ($pagenow !== 'plugins.php') {
        return;
    }

    $openAiKey = get_option( 'aikit_setting_openai_key' );

    if (strlen($openAiKey) == 0) {
        ?>
        <div id="aikit-notice" class="updated notice is-dismissible">

            <div class="aikit-notice-txt">
                <p>
                    <?php echo esc_html__('Thank you for using AIKit! Please consider entering your OpenAI key in order to start leveraging AI content generation.', 'aikit')?>
                </p>
            </div>
            <div class="aikit-btn-container">
                <a href="<?php echo admin_url( 'admin.php?page=aikit' ); ?>" id="aikit-btn"><?php echo esc_html__('Configure AIKit', 'aikit')?></a>
            </div>
        </div>
        <?php
    }
}


function aikit_init() {
    // Register our script just like we would enqueue it - for WordPress references
    $dependencies = require __DIR__ . '/fe/build/index.asset.php';
    wp_register_script( 'aikit_index_js', plugin_dir_url( __FILE__ ) . 'fe/build/index.js', $dependencies['dependencies'], $dependencies['version'] );

    wp_set_script_translations( 'aikit_index_js', 'aikit', plugin_dir_path( __FILE__ ) . 'languages' );
}

add_action( 'init', 'aikit_init' );

// register an uninstall hook
register_uninstall_hook( __FILE__, 'aikit_uninstall' );

function aikit_uninstall() {
    delete_option( 'aikit_setting_openai_key' );
    delete_option( 'aikit_setting_openai_key_valid' );
    delete_option( 'aikit_setting_openai_language' );
    delete_option( 'aikit_setting_openai_model' );
    delete_option( 'aikit_setting_openai_available_models' );
    delete_option( 'aikit_setting_autocompleted_text_background_color' );
    delete_option( 'aikit_setting_openai_max_tokens_multiplier' );

    delete_option( 'aikit_prompts' );

	$languages = AIKit_Admin::instance(
		AIKit_Prompt_Manager::get_instance()
    )->get_languages();

    foreach ($languages as $language) {
        delete_option( 'aikit_prompts_' . $language );
    }
}
