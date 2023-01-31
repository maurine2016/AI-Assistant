<?php

const AIKIT_WORD_LENGTH_TYPE_FIXED = 'fixed';
const AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER = 'word_count_multiplier';

const AIKIT_INITIAL_PROMPTS = [
    'paragraph' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Write a paragraph on this',
                'prompt' => "Write a paragraph on this topic:\n\n[[text]]\n\n----\nWritten paragraph:\n",
            ],
            'de' => [
                'menuTitle' => 'Schreibe einen Absatz darüber',
                'prompt' => "Schreibe einen Absatz zu diesem Thema:\n\n[[text]]\n\n----\nGeschriebener Absatz:\n",
            ],
            'fr' => [
                'menuTitle' => 'Écrivez un paragraphe sur ceci',
                'prompt' => "Écrivez un paragraphe sur ce sujet en français:\n\n[[text]]\n\n----\nParagraphe écrit en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Escribe un párrafo sobre esto',
                'prompt' => "Escribe un párrafo sobre este tema:\n\n[[text]]\n\n----\nPárrafo escrito:\n",
            ],
            'it' => [
                'menuTitle' => 'Scrivi un paragrafo su questo',
                'prompt' => "Scrivi un paragrafo su questo argomento:\n\n[[text]]\n\n----\nParagrafo scritto:\n",
            ],
            'pt' => [
                'menuTitle' => 'Escreva um parágrafo sobre isso',
                'prompt' => "Escreva um parágrafo sobre este assunto:\n\n[[text]]\n\n----\nParágrafo escrito:\n",
            ],
            'nl' => [
                'menuTitle' => 'Schrijf een alinea over dit',
                'prompt' => "Schrijf een paragraaf over dit onderwerp:\n\n[[text]]\n\n----\nGeschreven paragraaf:\n",
            ],
            'pl' => [
                'menuTitle' => 'Napisz akapit na temat tego',
                'prompt' => "Napisz akapit na ten temat:\n\n[[text]]\n\n----\nNapisany akapit:\n",
            ],
            'ru' => [
                'menuTitle' => 'Напишите абзац на этом',
                'prompt' => "Напишите абзац по этой теме:\n\n[[text]]\n\n----\nНаписанный абзац:\n",
            ],
            'ja' => [
                'menuTitle' => 'この上に段落を書く',
                'prompt' => "このトピックについての段落を書きなさい:\n\n[[text]]\n\n----\n書かれた段落:\n",
            ],
            'zh' => [
                'menuTitle' => '在此上写一个段落',
                'prompt' => "写一段关于这个主题的文章:\n\n[[text]]\n\n----\n写的段落:\n",
            ],
            'br' => [
                'menuTitle' => 'Escreva um parágrafo sobre isso',
                'prompt' => "Escreva um parágrafo sobre este assunto:\n\n[[text]]\n\n----\nParágrafo escrito:\n",
            ],
            'tr' => [
                'menuTitle' => 'Bu üzerine bir paragraf yazın',
                'prompt' => "Bu konu hakkında bir paragraf yazın:\n\n[[text]]\n\n----\nYazılmış paragraf:\n",
            ],
            'ar' => [
                'menuTitle' => 'اكتب فقرة عن هذا',
                'prompt' => "اكتب فقرة عن هذا الموضوع:\n\n[[text]]\n\n----\nفقرة مكتوبة:\n",
            ],
            'ko' => [
                'menuTitle' => '이것에 대한 단락을 쓰십시오',
                'prompt' => "이 주제에 대한 단락을 작성하십시오:\n\n[[text]]\n\n----\n작성된 단락:\n",
            ],
            'hi' => [
                'menuTitle' => 'इस पर एक पैराग्राफ लिखें',
                'prompt' => "इस विषय पर एक पैराग्राफ लिखें:\n\n[[text]]\n\n----\nलिखा पैराग्राफ:\n",
            ],
            'id' => [
                'menuTitle' => 'Tulis paragraf tentang ini',
                'prompt' => "Tulis paragraf tentang topik ini:\n\n[[text]]\n\n----\nParagraf yang ditulis:\n",
            ],
            'sv' => [
                'menuTitle' => 'Skriv en stycke om detta',
                'prompt' => "Skriv en paragraf om detta ämne:\n\n[[text]]\n\n----\nSkriven paragraf:\n",
            ],
            'da' => [
                'menuTitle' => 'Skriv et afsnit om dette',
                'prompt' => "Skriv en paragraf om dette emne:\n\n[[text]]\n\n----\nSkriv paragraf:\n",
            ],
            'fi' => [
                'menuTitle' => 'Kirjoita kappale tästä',
                'prompt' => "Kirjoita kappale tästä aiheesta:\n\n[[text]]\n\n----\nKirjoitettu kappale:\n",
            ],
            'no' => [
                'menuTitle' => 'Skriv et avsnitt om dette',
                'prompt' => "Skriv en avsnitt om dette emnet:\n\n[[text]]\n\n----\nSkriv avsnitt:\n",
            ],
            'ro' => [
                'menuTitle' => 'Scrieți un paragraf despre asta',
                'prompt' => "Scrieți un paragraf despre acest subiect:\n\n[[text]]\n\n----\nParagraf scris:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 400,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'paragraph',
    ],

    'continue' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Continue this text',
                'prompt' => "Continue this text:\n\n[[text]]\n\n----\nContinued text:\n",
            ],
            'de' => [
                'menuTitle' => 'Text fortsetzen',
                'prompt' => "Fahre mit diesem Text fort:\n\n[[text]]\n\n----\nFortgesetzter Text:\n",
            ],
            'fr' => [
                'menuTitle' => 'Continuer ce texte',
                'prompt' => "Continuez ce texte en français:\n\n[[text]]\n\n----\nTexte continué en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Continuar este texto',
                'prompt' => "Continúa este texto:\n\n[[text]]\n\n----\nTexto continuado:\n",
            ],
            'it' => [
                'menuTitle' => 'Continua questo testo',
                "Continua questo testo:\n\n[[text]]\n\n----\nTesto continuato:\n",
            ],
            'pt' => [
                'menuTitle' => 'Continue este texto',
                'prompt' => "Continue este texto:\n\n[[text]]\n\n----\nTexto continuado:\n",
            ],
            'nl' => [
                'menuTitle' => 'Ga door met deze tekst',
                'prompt' => "Ga verder met deze tekst:\n\n[[text]]\n\n----\nVoortgezette tekst:\n",
            ],
            'pl' => [
                'menuTitle' => 'Kontynuuj ten tekst',
                'prompt' => "Kontynuuj ten tekst:\n\n[[text]]\n\n----\nKontynuowany tekst:\n",
            ],
            'ru' => [
                'menuTitle' => 'Продолжить этот текст',
                'prompt' => "Продолжите этот текст:\n\n[[text]]\n\n----\nПродолженный текст:\n",
            ],
            'ja' => [
                'menuTitle' => 'このテキストを続ける',
                'prompt' => "このテキストを続けてください:\n\n[[text]]\n\n----\n続けられたテキスト:\n",
            ],
            'zh' => [
                'menuTitle' => '继续这段文字',
                'prompt' => "继续这段文字:\n\n[[text]]\n\n----\n继续的文字:\n",
            ],
            'br' => [
                'menuTitle' => 'Continue este texto',
                'prompt' => "Continue este texto:\n\n[[text]]\n\n----\nTexto continuado:\n",
            ],
            'tr' => [
                'menuTitle' => 'Bu metni devam ettir',
                'prompt' => "Bu metni devam ettirin:\n\n[[text]]\n\n----\nDevam eden metin:\n",
            ],
            'ar' => [
                'menuTitle' => 'أكمل هذا النص',
                'prompt' => "أكمل هذا النص:\n\n[[text]]\n\n----\nالنص:\n",
            ],
            'ko' => [
                'menuTitle' => '이 텍스트를 계속하십시오',
                'prompt' => "이 텍스트를 계속하십시오:\n\n[[text]]\n\n----\n계속된 텍스트:\n",
            ],
            'hi' => [
                'menuTitle' => 'इस पाठ को जारी रखें',
                'prompt' => "इस पाठ को जारी रखें:\n\n[[text]]\n\n----\nजारी रखा गया पाठ:\n",
            ],
            'id' => [
                'menuTitle' => 'Lanjutkan teks ini',
                "Lanjutkan teks ini:\n\n[[text]]\n\n----\nTeks yang dilanjutkan:\n",
            ],
            'sv' => [
                'menuTitle' => 'Fortsätt denna text',
                'prompt' => "Fortsätt med denna text:\n\n[[text]]\n\n----\nFortsatt text:\n",
            ],
            'da' => [
                'menuTitle' => 'Fortsæt denne tekst',
                'prompt' => "Fortsæt med denne tekst:\n\n[[text]]\n\n----\nFortsat tekst:\n",
            ],
            'fi' => [
                'menuTitle' => 'Jatka tätä tekstiä',
                'prompt' => "Jatka tätä tekstiä:\n\n[[text]]\n\n----\nJatkuva teksti:\n",
            ],
            'no' => [
                'menuTitle' => 'Fortsett denne teksten',
                'prompt' => "Fortsett med denne teksten:\n\n[[text]]\n\n----\nFortsatt tekst:\n",
            ],
            'ro' => [
                'menuTitle' => 'Continua acest text',
                'prompt' => "Continuați acest text:\n\n[[text]]\n\n----\nText continuat:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 300,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'pencil',
    ],


    'ideas' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Generate ideas on this',
                'prompt' => "Generate a few ideas on that as bullet points:\n\n[[text]]\n\n----\nGenerated ideas in bullet points:\n",
            ],
            'de' => [
                'menuTitle' => 'Generiere Ideen zu diesem Thema',
                'prompt' => "Generiere ein paar Ideen dazu als Aufzählung:\n\n[[text]]\n\n----\nGenerierte Ideen in Aufzählung:\n",
            ],
            'fr' => [
                'menuTitle' => 'Générer des idées sur ce',
                'prompt' => "Générer quelques idées sur ce sujet sous forme de points en français:\n\n[[text]]\n\n----\nIdées générées en points en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Generar ideas sobre esto',
                'prompt' => "Genera algunas ideas sobre eso en forma de puntos:\n\n[[text]]\n\n----\nIdeas generadas en puntos:\n",
            ],
            'it' => [
                'menuTitle' => 'Generare idee su questo',
                'prompt' => "Genera alcune idee su questo come elenco puntato:\n\n[[text]]\n\n----\nIdee generate in elenco puntato:\n",
            ],
            'pt' => [
                'menuTitle' => 'Gerar ideias sobre isso',
                'prompt' => "Gere algumas ideias sobre isso como pontos:\n\n[[text]]\n\n----\nIdeias geradas em pontos:\n",
            ],
            'nl' => [
                'menuTitle' => 'Genereer ideeën over dit',
                'prompt' => "Genereer een paar ideeën over dat als opsomming:\n\n[[text]]\n\n----\nGegenereerde ideeën in opsomming:\n",
            ],
            'pl' => [
                'menuTitle' => 'Wygeneruj pomysły na to',
                'prompt' => "Wygeneruj kilka pomysłów na ten temat jako punkty:\n\n[[text]]\n\n----\nWygenerowane pomysły w punktach:\n",
            ],
            'ru' => [
                'menuTitle' => 'Сгенерировать идеи на эту тему',
                'prompt' => "Сгенерируйте несколько идей на эту тему в виде пунктов:\n\n[[text]]\n\n----\nСгенерированные идеи в виде пунктов:\n",
            ],
            'ja' => [
                'menuTitle' => 'このテーマに関するアイデアを生成する',
                'prompt' => "そのテーマについていくつかのアイデアをポイントとして生成します:\n\n[[text]]\n\n----\nポイントとして生成されたアイデア:\n",
            ],
            'zh' => [
                'menuTitle' => '生成有关这个的想法',
                'prompt' => "生成一些关于该主题的想法作为点:\n\n[[text]]\n\n----\n以点为单位生成的想法:\n",
            ],
            'br' => [
                'menuTitle' => 'Gerar ideias sobre isso',
                'prompt' => "Gere algumas ideias sobre isso como pontos:\n\n[[text]]\n\n----\nIdeias geradas em pontos:\n",
            ],
            'tr' => [
                'menuTitle' => 'Bu konu hakkında fikirler üretin',
                'prompt' => "Bazı fikirler üretin:\n\n[[text]]\n\n----\nÜretilen fikirler:\n",
            ],
            'ar' => [
                'menuTitle' => 'إنشاء فكرة حول هذا',
                'prompt' => "إنشاء بعض الأفكار حول ذلك كنقاط:\n\n[[text]]\n\n----\nالأفكار المنشأة بالنقاط:\n",
            ],
            'ko' => [
                'menuTitle' => '이에 대한 아이디어 생성',
                'prompt' => "그 주제에 대한 몇 가지 아이디어를 점으로 생성합니다:\n\n[[text]]\n\n----\n점으로 생성 된 아이디어:\n",
            ],
            'hi' => [
                'menuTitle' => 'इसके बारे में विचार उत्पन्न करें',
                'prompt' => "उस विषय पर कुछ विचार बनाएं:\n\n[[text]]\n\n----\nबनाए गए विचार:\n",
            ],
            'id' => [
                'menuTitle' => 'Menghasilkan ide tentang ini',
                'prompt' => "Buat beberapa ide tentang itu sebagai poin:\n\n[[text]]\n\n----\nIde yang dibuat sebagai poin:\n",
            ],
            'sv' => [
                'menuTitle' => 'Generera idéer om detta',
                'prompt' => "Generera några idéer om det som punkter:\n\n[[text]]\n\n----\nGenererade idéer i punkter:\n",
            ],
            'da' => [
                'menuTitle' => 'Generer ideer om dette',
                'prompt' => "Generer nogle idéer om det som punkter:\n\n[[text]]\n\n----\nGenererede idéer i punkter:\n",
            ],
            'fi' => [
                'menuTitle' => 'Luo ideoita tästä',
                'prompt' => "Luo muutamia ideoita siitä pisteinä:\n\n[[text]]\n\n----\nPisteinä luodut ideat:\n",
            ],
            'no' => [
                'menuTitle' => 'Generer ideer om dette',
                'prompt' => "Generer noen ideer om det som punkter:\n\n[[text]]\n\n----\nGenererte ideer i punkter:\n",
            ],
            'ro' => [
                'menuTitle' => 'Genera idei despre acesta',
                'prompt' => "Generați câteva idei despre asta ca puncte:\n\n[[text]]\n\n----\nIdei generate în puncte:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 400,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'idea',
    ],

    'article' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Write an article about this',
                'prompt' => "Write a complete article about this:\n\n[[text]]\n\n----\nWritten article:\n",
            ],
            'de' => [
                'menuTitle' => 'Schreibe einen Artikel über das',
                'prompt' => "Schreibe einen vollständigen Artikel über das:\n\n[[text]]\n\n----\nGeschriebener Artikel:\n",
            ],
            'fr' => [
                'menuTitle' => 'Écrire un article à propos de cela',
                'prompt' => "Écrivez un article complet à propos de cela:\n\n[[text]]\n\n----\nArticle écrit:\n",
            ],
            'es' => [
                'menuTitle' => 'Escribir un artículo sobre esto',
                'prompt' => "Escriba un artículo completo sobre esto:\n\n[[text]]\n\n----\nArtículo escrito:\n",
            ],
            'it' => [
                'menuTitle' => 'Scrivi un articolo su questo',
                'prompt' => "Scrivi un articolo completo su questo:\n\n[[text]]\n\n----\nArticolo scritto:\n",
            ],
            'pt' => [
                'menuTitle' => 'Escreva um artigo sobre isso',
                'prompt' => "Escreva um artigo completo sobre isso:\n\n[[text]]\n\n----\nArtigo escrito:\n",
            ],
            'nl' => [
                'menuTitle' => 'Schrijf een artikel over dit',
                'prompt' => "Schrijf een volledig artikel over dit:\n\n[[text]]\n\n----\nGeschreven artikel:\n",
            ],
            'pl' => [
                'menuTitle' => 'Napisz artykuł o tym',
                'prompt' => "Napisz pełny artykuł o tym:\n\n[[text]]\n\n----\nNapisany artykuł:\n",
            ],
            'ru' => [
                'menuTitle' => 'Написать статью об этом',
                'prompt' => "Напишите полную статью об этом:\n\n[[text]]\n\n----\nНаписанная статья:\n",
            ],
            'ja' => [
                'menuTitle' => 'このことについての記事を書く',
                'prompt' => "このことについて完全な記事を書く:\n\n[[text]]\n\n----\n書かれた記事:\n",
            ],
            'zh' => [
                'menuTitle' => '写一篇关于这个的文章',
                'prompt' => "写一篇关于这个的完整文章:\n\n[[text]]\n\n----\n写的文章:\n",
            ],
            'br' => [
                'menuTitle' => 'Escreva um artigo sobre isso',
                'prompt' => "Escreva um artigo completo sobre isso:\n\n[[text]]\n\n----\nArtigo escrito:\n",
            ],
            'tr' => [
                'menuTitle' => 'Bu hakkında bir makale yazın',
                'prompt' => "Bu hakkında tam bir makale yazın:\n\n[[text]]\n\n----\nYazılan makale:\n",
            ],
            'ar' => [
                'menuTitle' => 'اكتب مقالة عن هذا',
                'prompt' => "اكتب مقالة كاملة عن هذا:\n\n[[text]]\n\n----\nالمقالة المكتوبة:\n",
            ],
            'ko' => [
                'menuTitle' => '이에 대한 기사를 쓰다',
                'prompt' => "이에 대한 완전한 기사를 쓰십시오:\n\n[[text]]\n\n----\n작성 된 기사:\n",
            ],
            'hi' => [
                'menuTitle' => 'इसके बारे में एक लेख लिखें',
                'prompt' => "इसके बारे में पूरा लेख लिखें:\n\n[[text]]\n\n----\nलिखा गया लेख:\n",
            ],
            'id' => [
                'menuTitle' => 'Menulis artikel tentang ini',
                'prompt' => "Tulis artikel lengkap tentang ini:\n\n[[text]]\n\n----\nTeks yang ditulis:\n",
            ],
            'sv' => [
                'menuTitle' => 'Skriv en artikel om detta',
                'prompt' => "Skriv en fullständig artikel om detta:\n\n[[text]]\n\n----\nSkriven artikel:\n",
            ],
            'da' => [
                'menuTitle' => 'Skriv en artikel om dette',
                'prompt' => "Skriv en fuld artikel om dette:\n\n[[text]]\n\n----\nSkrivet artikel:\n",
            ],
            'fi' => [
                'menuTitle' => 'Kirjoita artikkeli tästä',
                'prompt' => "Kirjoita tästä täysi artikkeli:\n\n[[text]]\n\n----\nKirjoitettu artikkeli:\n",
            ],
            'no' => [
                'menuTitle' => 'Skriv en artikkel om dette',
                'prompt' => "Skriv en full artikkel om dette:\n\n[[text]]\n\n----\nSkrivet artikkel:\n",
            ],
            'ro' => [
                'menuTitle' => 'Scrieți un articol despre asta',
                'prompt' => "Scrieți un articol complet despre asta:\n\n[[text]]\n\n----\nArticol scris:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 1500,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'article',
    ],

    'tldr' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Generate a TL;DR',
                'prompt' => "Generate a TL;DR of this text:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'de' => [
                'menuTitle' => 'Erstelle einen TL;DR',
                'prompt' => "Generiere ein TL;DR dieses Textes:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'fr' => [
                'menuTitle' => 'Générer un TL;DR',
                'prompt' => "Générer un TL;DR de ce texte en français:\n\n[[text]]\n\n----\nTL;DR en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Generar un TL;DR',
                'prompt' => "Genere un TL;DR de este texto:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'it' => [
                'menuTitle' => 'Genera un TL;DR',
                'prompt' => "Genera un TL;DR di questo testo:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'pt' => [
                'menuTitle' => 'Gerar um TL;DR',
                'prompt' => "Gerar um TL;DR deste texto:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'nl' => [
                'menuTitle' => 'Genereer een TL;DR',
                'prompt' => "Genereer een TL;DR van deze tekst:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'pl' => [
                'menuTitle' => 'Wygeneruj TL;DR',
                'prompt' => "Wygeneruj TL;DR tego tekstu:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'ru' => [
                'menuTitle' => 'Создать TL;DR',
                'prompt' => "Сгенерируйте TL;DR этого текста:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'ja' => [
                'menuTitle' => 'TL;DRを生成する',
                'prompt' => "このテキストのTL;DRを生成します:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'zh' => [
                'menuTitle' => '生成TL;DR',
                'prompt' => "生成此文本的TL;DR:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'br' => [
                'menuTitle' => 'Gerar um TL;DR',
                'prompt' => "Gerar um TL;DR deste texto:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'tr' => [
                'menuTitle' => 'TL;DR oluştur',
                'prompt' => "Bu metnin TL;DR'sini oluşturun:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'ar' => [
                'menuTitle' => 'إنشاء TL;DR',
                'prompt' => "توليد TL;DR لهذا النص:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'ko' => [
                'menuTitle' => 'TL;DR 생성',
                'prompt' => "이 텍스트의 TL;DR을 생성하십시오:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'hi' => [
                'menuTitle' => 'TL;DR बनाएँ',
                'prompt' => "इस पाठ का TL;DR उत्पन्न करें:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'id' => [
                'menuTitle' => 'Buat TL;DR',
                'prompt' => "Hasilkan TL;DR teks ini:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'sv' => [
                'menuTitle' => 'Generera en TL;DR',
                'prompt' => "Generera en TL;DR för denna text:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'da' => [
                'menuTitle' => 'Generer en TL;DR',
                'prompt' => "Generer en TL;DR for denne tekst:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'fi' => [
                'menuTitle' => 'Luo TL;DR',
                'prompt' => "Luo TL;DR tästä tekstistä:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'no' => [
                'menuTitle' => 'Generer en TL;DR',
                'prompt' => "Generer en TL;DR for denne teksten:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
            'ro' => [
                'menuTitle' => 'Generează un TL;DR',
                'prompt' => "Generați un TL;DR pentru acest text:\n\n[[text]]\n\n----\nTL;DR:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 300,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'zip'
    ],

    'summarize' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Summarize',
                'prompt' => "Summarize this text:\n\n[[text]]\n\n----\nSummary:\n",
            ],
            'de' => [
                'menuTitle' => 'Zusammenfassen',
                'prompt' => "Zusammenfasse diesen Text:\n\n[[text]]\n\n----\nZusammenfassung:\n",
            ],
            'fr' => [
                'menuTitle' => 'Résumer',
                'prompt' => "Résumer ce texte en français:\n\n[[text]]\n\n----\nRésumé en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Resumen',
                'prompt' => "Resuma este texto:\n\n[[text]]\n\n----\nResumen:\n",
            ],
            'it' => [
                'menuTitle' => 'Riassunto',
                'prompt' => "Riassumere questo testo:\n\n[[text]]\n\n----\nRiassunto:\n",
            ],
            'pt' => [
                'menuTitle' => 'Resumo',
                'prompt' => "Resuma este texto:\n\n[[text]]\n\n----\nResumo:\n",
            ],
            'nl' => [
                'menuTitle' => 'Samenvatting',
                'prompt' => "Vat dit tekst samen:\n\n[[text]]\n\n----\nSamenvatting:\n",
            ],
            'pl' => [
                'menuTitle' => 'Streszczenie',
                'prompt' => "Zsumuj ten tekst:\n\n[[text]]\n\n----\nPodsumowanie:\n",
            ],
            'ru' => [
                'menuTitle' => 'Резюме',
                'prompt' => "Суммаризируйте этот текст:\n\n[[text]]\n\n----\nРезюме:\n",
            ],
            'ja' => [
                'menuTitle' => '要約',
                'prompt' => "このテキストを要約します:\n\n[[text]]\n\n----\n要約:\n",
            ],
            'zh' => [
                'menuTitle' => '摘要',
                'prompt' => "总结此文本:\n\n[[text]]\n\n----\n摘要:\n",
            ],
            'br' => [
                'menuTitle' => 'Resumo',
                'prompt' => "Resuma este texto:\n\n[[text]]\n\n----\nResumo:\n",
            ],
            'tr' => [
                'menuTitle' => 'Özet',
                'prompt' => "Bu metni özetleyin:\n\n[[text]]\n\n----\nÖzet:\n",
            ],
            'ar' => [
                'menuTitle' => 'ملخص',
                'prompt' => "أخذ ملخصا لهذا النص:\n\n[[text]]\n\n----\nملخص:\n",
            ],
            'ko' => [
                'menuTitle' => '요약',
                'prompt' => "이 텍스트를 요약하십시오:\n\n[[text]]\n\n----\n요약:\n",
            ],
            'hi' => [
                'menuTitle' => 'सारांश',
                'prompt' => "इस पाठ को सार करें:\n\n[[text]]\n\n----\nसार:\n",
            ],
            'id' => [
                'menuTitle' => 'Ringkasan',
                'prompt' => "Ringkas teks ini:\n\n[[text]]\n\n----\nRingkasan:\n",
            ],
            'sv' => [
                'menuTitle' => 'Sammanfatta',
                'prompt' => "Sammanfatta denna text:\n\n[[text]]\n\n----\nSammanfattning:\n",
            ],
            'da' => [
                'menuTitle' => 'Resumere',
                'prompt' => "Resumér denne tekst:\n\n[[text]]\n\n----\nResume:\n",
            ],
            'fi' => [
                'menuTitle' => 'Yhteenveto',
                'prompt' => "Tiivistä tämä teksti:\n\n[[text]]\n\n----\nTiivistelmä:\n",
            ],
            'no' => [
                'menuTitle' => 'Sammendrag',
                'prompt' => "Sammendrag denne teksten:\n\n[[text]]\n\n----\nSammendrag:\n",
            ],
            'ro' => [
                'menuTitle' => 'Rezumat',
                'prompt' => "Rezumați acest text:\n\n[[text]]\n\n----\nRezumat:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER,
            'value' => 1,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'summarize',
    ],

    'summarize-concise' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Summarize (concise)',
                'prompt' => "Summarize this text in a concise way:\n\n[[text]]\n\n----\nConcise Summary:\n",
            ],
            'de' => [
                'menuTitle' => 'Zusammenfassen (kompakt)',
                'prompt' => "Zusammenfasse diesen Text in einer knappen Form:\n\n[[text]]\n\n----\nKurze Zusammenfassung:\n",
            ],
            'fr' => [
                'menuTitle' => 'Résumer (concis)',
                'prompt' => "Résumer ce texte de manière concise en français:\n\n[[text]]\n\n----\nRésumé concis en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Resumen (conciso)',
                'prompt' => "Resuma este texto de manera concisa:\n\n[[text]]\n\n----\nResumen conciso:\n",
            ],
            'it' => [
                'menuTitle' => 'Riassumere (conciso)',
                'prompt' => "Riassumere questo testo in modo conciso:\n\n[[text]]\n\n----\nRiassunto conciso:\n",
            ],
            'pt' => [
                'menuTitle' => 'Resumir (conciso)',
                'prompt' => "Resuma este texto de maneira concisa:\n\n[[text]]\n\n----\nResumo conciso:\n",
            ],
            'nl' => [
                'menuTitle' => 'Samenvatten (concies)',
                'prompt' => "Vat dit tekst samen op een bondige manier:\n\n[[text]]\n\n----\nBondige samenvatting:\n",
            ],
            'pl' => [
                'menuTitle' => 'Streszczenie (zwięzłe)',
                'prompt' => "Zsumuj ten tekst w zwięzły sposób:\n\n[[text]]\n\n----\nZwięzły podsumowanie:\n",
            ],
            'ru' => [
                'menuTitle' => 'Резюме (кратко)',
                'prompt' => "Суммаризируйте этот текст кратко:\n\n[[text]]\n\n----\nКраткое резюме:\n",
            ],
            'ja' => [
                'menuTitle' => '要約（簡潔）',
                'prompt' => "このテキストを簡潔に要約します:\n\n[[text]]\n\n----\n簡潔な要約:\n",
            ],
            'zh' => [
                'menuTitle' => '总结（简洁）',
                'prompt' => "简洁地总结此文本:\n\n[[text]]\n\n----\n简洁的总结:\n",
            ],
            'br' => [
                'menuTitle' => 'Resumir (conciso)',
                'prompt' => "Resuma este texto de maneira concisa:\n\n[[text]]\n\n----\nResumo conciso:\n",
            ],
            'tr' => [
                'menuTitle' => 'Özet (kısa)',
                'prompt' => "Bu metni özetleyin:\n\n[[text]]\n\n----\nÖzet:\n",
            ],
            'ar' => [
                'menuTitle' => 'ملخص (موجز)',
                'prompt' => "أخذ ملخصا لهذا النص:\n\n[[text]]\n\n----\nملخص موجز:\n",
            ],
            'ko' => [
                'menuTitle' => '요약 (간결)',
                'prompt' => "이 텍스트를 간결하게 요약하십시오:\n\n[[text]]\n\n----\n간결한 요약:\n",
            ],
            'hi' => [
                'menuTitle' => 'सारांश (संक्षिप्त)',
                'prompt' => "इस पाठ को संक्षिप्त रूप में सार करें:\n\n[[text]]\n\n----\nसंक्षिप्त सार:\n",
            ],
            'id' => [
                'menuTitle' => 'Ringkasan (ringkas)',
                'prompt' => "Ringkaskan teks ini dengan cara yang singkat:\n\n[[text]]\n\n----\nRingkasan singkat:\n",
            ],
            'sv' => [
                'menuTitle' => 'Sammanfatta (koncis)',
                'prompt' => "Sammanfatta denna text på ett sammanfattande sätt:\n\n[[text]]\n\n----\nSammanfattning:\n",
            ],
            'da' => [
                'menuTitle' => 'Resumere (kortfattet)',
                'prompt' => "Resumér denne tekst på en kort måde:\n\n[[text]]\n\n----\nKort resume:\n",
            ],
            'fi' => [
                'menuTitle' => 'Yhteenveto (tiivistelmä)',
                'prompt' => "Tiivistä tämä teksti tiivistetysti:\n\n[[text]]\n\n----\nTiivistetty yhteenveto:\n",
            ],
            'no' => [
                'menuTitle' => 'Sammendrag (kortfattet)',
                'prompt' => "Sammendrag denne teksten på en kort måte:\n\n[[text]]\n\n----\nKort sammendrag:\n",
            ],
            'ro' => [
                'menuTitle' => 'Rezumat (concis)',
                'prompt' => "Rezumați acest text într-un mod concis:\n\n[[text]]\n\n----\nRezumat concis:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER,
            'value' => 1,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'summaryConcise',
    ],


    'summarize-bullet-points' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Summarize (bullet points)',
                'prompt' => "Summarize this text into bullet points:\n\n[[text]]\n\n----\nSummary:\n",
            ],
            'de' => [
                'menuTitle' => 'Zusammenfassen (Aufzählungszeichen)',
                'prompt' => "Fasse diesen Text in Stichpunkten zusammen:\n\n[[text]]\n\n----\nZusammenfassung:\n",
            ],
            'fr' => [
                'menuTitle' => 'Résumer (points à puces)',
                'prompt' => "Résumer ce texte en points en français:\n\n[[text]]\n\n----\nRésumé en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Resumen (puntos de bala)',
                'prompt' => "Resuma este texto en puntos:\n\n[[text]]\n\n----\nResumen:\n",
            ],
            'it' => [
                'menuTitle' => 'Riassunto (punti elenco)',
                'prompt' => "Riassumere questo testo in punti:\n\n[[text]]\n\n----\nRiassunto:\n",
            ],
            'pt' => [
                'menuTitle' => 'Resumo (pontos de bala)',
                'prompt' => "Resuma este texto em pontos:\n\n[[text]]\n\n----\nResumo:\n",
            ],
            'nl' => [
                'menuTitle' => 'Samenvatten (opsommingstekens)',
                'prompt' => "Resuméer deze tekst in punten:\n\n[[text]]\n\n----\nSamenvatting:\n",
            ],
            'pl' => [
                'menuTitle' => 'Streszczenie (punkty)',
                'prompt' => "Podsumuj ten tekst w punktach:\n\n[[text]]\n\n----\nPodsumowanie:\n",
            ],
            'ru' => [
                'menuTitle' => 'Резюме (маркеры)',
                'prompt' => "Резюмируйте этот текст в виде пунктов:\n\n[[text]]\n\n----\nРезюме:\n",
            ],
            'ja' => [
                'menuTitle' => '要約（箇条書き）',
                'prompt' => "このテキストを箇条書きにまとめます:\n\n[[text]]\n\n----\n要約:\n",
            ],
            'zh' => [
                'menuTitle' => '总结（项目符号）',
                'prompt' => "将此文本总结为要点:\n\n[[text]]\n\n----\n摘要:\n",
            ],
            'br' => [
                'menuTitle' => 'Resumo (pontos de bala)',
                'prompt' => "Resuma este texto em pontos:\n\n[[text]]\n\n----\nResumo:\n",
            ],
            'tr' => [
                'menuTitle' => 'Özet (madde işaretleri)',
                'prompt' => "Bu metni noktalara özetleyin:\n\n[[text]]\n\n----\nÖzet:\n",
            ],
            'ar' => [
                'menuTitle' => 'ملخص (نقاط)',
                'prompt' => "استخلاص هذا النص إلى نقاط:\n\n[[text]]\n\n----\nملخص:\n",
            ],
            'ko' => [
                'menuTitle' => '요약 (목록)',
                'prompt' => "이 텍스트를 점으로 요약하십시오:\n\n[[text]]\n\n----\n요약:\n",
            ],
            'hi' => [
                'menuTitle' => 'सारांश (बुलेट पॉइंट्स)',
                'prompt' => "इस पाठ को बुलेट पॉइंट में सारांश करें:\n\n[[text]]\n\n----\nसारांश:\n",
            ],
            'id' => [
                'menuTitle' => 'Ringkasan (poin-poin)',
                'prompt' => "Ringkas teks ini menjadi daftar poin:\n\n[[text]]\n\n----\nRingkasan:\n",
            ],
            'sv' => [
                'menuTitle' => 'Sammanfatta (punkter)',
                'prompt' => "Sammanfatta denna text till punkter:\n\n[[text]]\n\n----\nSammanfattning:\n",
            ],
            'da' => [
                'menuTitle' => 'Resumé (punktopstilling)',
                'prompt' => "Resumér denne tekst til punkter:\n\n[[text]]\n\n----\nResumé:\n",
            ],
            'fi' => [
                'menuTitle' => 'Yhteenveto (luettelomerkit)',
                'prompt' => "Yhteenvetää tämän tekstin pisteisiin:\n\n[[text]]\n\n----\nYhteenveto:\n",
            ],
            'no' => [
                'menuTitle' => 'Sammendrag (punkter)',
                'prompt' => "Sammendrag denne teksten til punkter:\n\n[[text]]\n\n----\nSammendrag:\n",
            ],
            'ro' => [
                'menuTitle' => 'Rezumat (puncte)',
                'prompt' => "Rezumați acest text în puncte:\n\n[[text]]\n\n----\nRezumat:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER,
            'value' => 1,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'bulletPoints',
    ],

    'paraphrase' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Paraphrase',
                'prompt' => "Paraphrase this text:\n\n[[text]]\n\n----\nParaphrased text:\n",
            ],
            'de' => [
                'menuTitle' => 'Paraphrasieren',
                'prompt' => "Paraphrasiere diesen Text:\n\n[[text]]\n\n----\nParaphrasiert:\n",
            ],
            'fr' => [
                'menuTitle' => 'Paraphrase',
                'prompt' => "Paraphraser ce texte en français:\n\n[[text]]\n\n----\nTexte paraphrasé en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Paráfrasis',
                'prompt' => "Paráfrase este texto:\n\n[[text]]\n\n----\nTexto paráfraseado:\n",
            ],
            'it' => [
                'menuTitle' => 'Parafraza',
                'prompt' => "Parafraza questo testo:\n\n[[text]]\n\n----\nTesto parafrazato:\n",
            ],
            'pt' => [
                'menuTitle' => 'Paráfrase',
                'prompt' => "Parafrase este texto:\n\n[[text]]\n\n----\nTexto paráfraseado:\n",
            ],
            'nl' => [
                'menuTitle' => 'Paraphrase',
                'prompt' => "Paraphraseer deze tekst:\n\n[[text]]\n\n----\nGeparaphraseerde tekst:\n",
            ],
            'pl' => [
                'menuTitle' => 'Parafraz',
                'prompt' => "Parafrazuj ten tekst:\n\n[[text]]\n\n----\nParafrazowany tekst:\n",
            ],
            'ru' => [
                'menuTitle' => 'Параграф',
                'prompt' => "Параграфируйте этот текст:\n\n[[text]]\n\n----\nПараграфированный текст:\n",
            ],
            'ja' => [
                'menuTitle' => 'パラフレーズ',
                'prompt' => "このテキストをパラフレーズしてください:\n\n[[text]]\n\n----\nパラフレーズされたテキスト:\n",
            ],
            'zh' => [
                'menuTitle' => '重述',
                'prompt' => "重述此文本:\n\n[[text]]\n\n----\n重述文本:\n",
            ],
            'br' => [
                'menuTitle' => 'Paráfrase',
                'prompt' => "Parafraze este texto:\n\n[[text]]\n\n----\nTexto paráfraseado:\n",
            ],
            'tr' => [
                'menuTitle' => 'Parafraze',
                'prompt' => "Bu metni parafrazlayın:\n\n[[text]]\n\n----\nParafrazlanmış metin:\n",
            ],
            'ar' => [
                'menuTitle' => 'إعادة صياغة النص',
                'prompt' => "إعادة صياغة هذا النص:\n\n[[text]]\n\n----\nالنص المعاد صياغته:\n",
            ],
            'ko' => [
                'menuTitle' => '파라프레이즈',
                'prompt' => "이 텍스트를 다시 작성하십시오:\n\n[[text]]\n\n----\n재작성된 텍스트:\n",
            ],
            'hi' => [
                'menuTitle' => 'वाक्य पुनरावलोकन',
                'prompt' => "इस पाठ को परारफ्रेज करें:\n\n[[text]]\n\n----\nपरारफ्रेज किया गया पाठ:\n",
            ],
            'id' => [
                'menuTitle' => 'Paraf',
                'prompt' => "Parafrase teks ini:\n\n[[text]]\n\n----\nTeks yang diparafrase:\n",
            ],
            'sv' => [
                'menuTitle' => 'Parafraza',
                'prompt' => "Parafraza denna text:\n\n[[text]]\n\n----\nParafrazerad text:\n",
            ],
            'da' => [
                'menuTitle' => 'Parafraze',
                'prompt' => "Parafrazer denne tekst:\n\n[[text]]\n\n----\nParafrazeret tekst:\n",
            ],
            'fi' => [
                'menuTitle' => 'Parafraasi',
                'prompt' => "Parafraasi tämä teksti:\n\n[[text]]\n\n----\nParafraasi:\n",
            ],
            'no' => [
                'menuTitle' => 'Parafraze',
                'prompt' => "Parafrazer denne teksten:\n\n[[text]]\n\n----\nParafrazeret tekst:\n",
            ],
            'ro' => [
                'menuTitle' => 'Parafrază',
                'prompt' => "Parafrazați acest text:\n\n[[text]]\n\n----\nText parafrazat:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER,
            'value' => 1,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'paraphrase',
    ],

    'paraphrase-sarcastic' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Paraphrase (sarcastic)',
                'prompt' => "Paraphrase this text in a sarcastic way:\n\n[[text]]\n\n----\nParaphrased sarcastic text:\n",
            ],
            'de' => [
                'menuTitle' => 'Paraphrasieren (sarkastisch)',
                'prompt' => "Paraphrasiere diesen Text auf ironische Weise:\n\n[[text]]\n\n----\nIronischer Paraphrasierter Text:\n",
            ],
            'fr' => [
                'menuTitle' => 'Paraphrase (sarcasme)',
                'prompt' => "Paraphraser ce texte de manière sarcastique en français:\n\n[[text]]\n\n----\nTexte sarcastique paraphrasé en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Paráfrasis (sarcástico)',
                'prompt' => "Paráfrase este texto de manera sarcástica:\n\n[[text]]\n\n----\nTexto sarcástico paráfraseado:\n",
            ],
            'it' => [
                'menuTitle' => 'Parafraza (sarcastico)',
                'prompt' => "Parafraza questo testo in modo sarcastico:\n\n[[text]]\n\n----\nTesto sarcastico parafrazato:\n",
            ],
            'pt' => [
                'menuTitle' => 'Paráfrase (sarcástico)',
                'prompt' => "Parafrase este texto de forma sarcástica:\n\n[[text]]\n\n----\nTexto sarcástico paráfraseado:\n",
            ],
            'nl' => [
                'menuTitle' => 'Paraphrase (sarcasme)',
                'prompt' => "Paraphraseer deze tekst op een sarcastische manier:\n\n[[text]]\n\n----\nSarcastische geparaphraseerde tekst:\n",
            ],
            'pl' => [
                'menuTitle' => 'Parafraz (sarkazm)',
                'prompt' => "Parafrazuj ten tekst w sposób sarkastyczny:\n\n[[text]]\n\n----\nSarkastyczny parafrazowany tekst:\n",
            ],
            'ru' => [
                'menuTitle' => 'Параграф (сарказм)',
                'prompt' => "Параграфируйте этот текст саркастическим образом:\n\n[[text]]\n\n----\nСаркастический параграфированный текст:\n",
            ],
            'ja' => [
                'menuTitle' => 'パラフレーズ（皮肉）',
                'prompt' => "このテキストを皮肉っぽくパラフレーズしてください:\n\n[[text]]\n\n----\n皮肉っぽいパラフレーズされたテキスト:\n",
            ],
            'zh' => [
                'menuTitle' => '段落（讽刺）',
                'prompt' => "以讽刺的方式重述此文本:\n\n[[text]]\n\n----\n讽刺性重述文本:\n",
            ],
            'br' => [
                'menuTitle' => 'Paráfrase (sarcástico)',
                'prompt' => "Parafraze este texto de forma sarcástica:\n\n[[text]]\n\n----\nTexto sarcástico paráfraseado:\n",
            ],
            'tr' => [
                'menuTitle' => 'Parafraze (sarcasm)',
                'prompt' => "Bu metni alaycı bir şekilde parafrazlayın:\n\n[[text]]\n\n----\nAlaycı parafrazlanmış metin:\n",
            ],
            'ar' => [
                'menuTitle' => 'إعادة صياغة النص (ساخر)',
                'prompt' => "إعادة صياغة النص بطريقة ساخرة:\n\n[[text]]\n\n----\nالنص الساخر:\n",
            ],
            'ko' => [
                'menuTitle' => '파라프레이즈 (조롱)',
                'prompt' => "이 텍스트를 농담으로 다시 작성하십시오:\n\n[[text]]\n\n----\n농담으로 재작성된 텍스트:\n",
            ],
            'hi' => [
                'menuTitle' => 'पराफ्रेज़ (उद्योग)',
                'prompt' => "इस पाठ को उद्देश्यपूर्ण रूप से परारफ्रेज करें:\n\n[[text]]\n\n----\nउद्देश्यपूर्ण रूप से परारफ्रेज किया गया पाठ:\n",
            ],
            'id' => [
                'menuTitle' => 'Parafrase (sarkastik)',
                'prompt' => "Parafrase teks ini dengan cara sarkastik:\n\n[[text]]\n\n----\nTeks yang diparafrase secara sarkastik:\n",
            ],
            'sv' => [
                'menuTitle' => 'Parafas (sarkastisk)',
                "Parafraza denna text på ett sarkastiskt sätt:\n\n[[text]]\n\n----\nSarkastiskt parafrazerad text:\n",
            ],
            'da' => [
                'menuTitle' => 'Parafre (sarkastisk)',
                'prompt' => "Parafrazer denne tekst på en sarkastisk måde:\n\n[[text]]\n\n----\nSarkastisk parafrazeret tekst:\n",
            ],
            'fi' => [
                'menuTitle' => 'Parafraasi (sarkastinen)',
                'prompt' => "Parafraasi tämä teksti ironisesti:\n\n[[text]]\n\n----\nIroninen parafraasi:\n",
            ],
            'no' => [
                'menuTitle' => 'Parafaser (sarkastisk)',
                'prompt' => "Parafrazer denne teksten på en sarkastisk måte:\n\n[[text]]\n\n----\nSarkastisk parafrazeret tekst:\n",
            ],
            'ro' => [
                'menuTitle' => 'Parafrazare (sarcasm)',
                'prompt' => "Parafrazați acest text într-un mod sarcastic:\n\n[[text]]\n\n----\nText parafrazat cu umor:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER,
            'value' => 1,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'tongue'
    ],

    'paraphrase-humorous' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Paraphrase (humorous)',
                'prompt' => "Paraphrase this text in a humorous way:\n\n[[text]]\n\n----\nParaphrased humorous text:\n",
            ],
            'de' => [
                'menuTitle' => 'Paraphrasieren (humorvoll)',
                'prompt' => "Paraphrasiere diesen Text auf humorvolle Weise:\n\n[[text]]\n\n----\nHumorvoll geparaphrasierter Text:\n",
            ],
            'fr' => [
                'menuTitle' => 'Paraphrase (humoristique)',
                'prompt' => "Paraphraser ce texte de manière humoristique en français:\n\n[[text]]\n\n----\nTexte humoristique paraphrasé en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Paráfrase (humorístico)',
                'prompt' => "Paráfrase este texto de manera humorística:\n\n[[text]]\n\n----\nTexto humorístico paráfraseado:\n",
            ],
            'it' => [
                'menuTitle' => 'Parafraza (umoristico)',
                'prompt' => "Parafraza questo testo in modo umoristico:\n\n[[text]]\n\n----\nTesto umoristico parafrazato:\n",
            ],
            'pt' => [
                'menuTitle' => 'Paráfrase (humorístico)',
                'prompt' => "Parafrase este texto de forma humorística:\n\n[[text]]\n\n----\nTexto humorístico paráfraseado:\n",
            ],
            'nl' => [
                'menuTitle' => 'Paraphraseren (humoristisch)',
                'prompt' => "Paraphraseer deze tekst op een humoristische manier:\n\n[[text]]\n\n----\nHumoristisch geparaphraseerde tekst:\n",
            ],
            'pl' => [
                'menuTitle' => 'Parafraz (humorystyczny)',
                'prompt' => "Parafrazuj ten tekst w sposób humorystyczny:\n\n[[text]]\n\n----\nHumorystyczny parafrazowany tekst:\n",
            ],
            'ru' => [
                'menuTitle' => 'Параграф (юмористический)',
                'prompt' => "Параграфируйте этот текст с юмором:\n\n[[text]]\n\n----\nЮмористический параграфированный текст:\n",
            ],
            'ja' => [
                'menuTitle' => 'パラフレーズ（ユーモア）',
                'prompt' => "このテキストをユーモアでパラフレーズしてください:\n\n[[text]]\n\n----\nユーモアでパラフレーズされたテキスト:\n",
            ],
            'zh' => [
                'menuTitle' => '段落（幽默）',
                'prompt' => "以幽默的方式重述此文本:\n\n[[text]]\n\n----\n幽默的重述文本:\n",
            ],
            'br' => [
                'menuTitle' => 'Paráfrase (humorístico)',
                'prompt' => "Parafraze este texto de forma humorística:\n\n[[text]]\n\n----\nTexto humorístico paráfraseado:\n",
            ],
            'tr' => [
                'menuTitle' => 'Parafraz (humorlu)',
                'prompt' => "Bu metni alaycı bir şekilde parafrazlayın:\n\n[[text]]\n\n----\nAlaycı parafrazlanmış metin:\n",
            ],
            'ar' => [
                'menuTitle' => 'ترجمة (مضحك)',
                'prompt' => "إعادة صياغة النص بطريقة مضحكة:\n\n[[text]]\n\n----\nالنص المضحك:\n",
            ],
            'ko' => [
                'menuTitle' => '파라프레이즈 (유머)',
                'prompt' => "이 텍스트를 유머로 다시 작성하십시오:\n\n[[text]]\n\n----\n유머로 재작성된 텍스트:\n",
            ],
            'hi' => [
                'menuTitle' => 'पराफ्रेज (जीवनी)',
                'prompt' => "इस पाठ को मजेदार रूप से परारफ्रेज करें:\n\n[[text]]\n\n----\nमजेदार रूप से परारफ्रेज किया गया पाठ:\n",
            ],
            'id' => [
                'menuTitle' => 'Parafrase (humor)',
                'prompt' => "Parafrase teks ini dengan cara humoris:\n\n[[text]]\n\n----\nTeks yang diparafrase secara humoris:\n",
            ],
            'sv' => [
                'menuTitle' => 'Parafraza (humoristisk)',
                'prompt' => "Parafraza denna text på ett humoristiskt sätt:\n\n[[text]]\n\n----\nHumoristisk parafrazerad text:\n",
            ],
            'da' => [
                'menuTitle' => 'Parafre (humoristisk)',
                'prompt' => "Parafrazer denne tekst på en humoristisk måde:\n\n[[text]]\n\n----\nHumoristisk parafrazeret tekst:\n",
            ],
            'fi' => [
                'menuTitle' => 'Parafraasi (huumori)',
                'prompt' => "Parafraasi tämä teksti ironisesti:\n\n[[text]]\n\n----\nIroninen parafraasi:\n",
            ],
            'no' => [
                'menuTitle' => 'Parafre (humoristisk)',
                'prompt' => "Parafrazer denne teksten på en humoristisk måte:\n\n[[text]]\n\n----\nHumoristisk parafrazeret tekst:\n",
            ],
            'ro' => [
                'menuTitle' => 'Parafrazare (umoristică)',
                'prompt' => "Parafrazați acest text într-un mod umoristic:\n\n[[text]]\n\n----\nText parafrazat cu umor:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_WORD_COUNT_MULTIPLIER,
            'value' => 1,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'laugh',
    ],

    'subtitle' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Generate subtitle',
                'prompt' => "Generate a title for this text:\n\n[[text]]\n\n----\nTitle:\n",
            ],
            'de' => [
                'menuTitle' => 'Untertitel generieren',
                'prompt' => "Generiere einen Titel für diesen Text:\n\n[[text]]\n\n----\nTitel:\n",
            ],
            'fr' => [
                'menuTitle' => 'Générer un sous-titre',
                'prompt' => "Générer un titre pour ce texte en français:\n\n[[text]]\n\n----\nTitre en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Generar subtítulo',
                'prompt' => "Genere un título para este texto:\n\n[[text]]\n\n----\nTítulo:\n",
            ],
            'it' => [
                'menuTitle' => 'Genera sottotitolo',
                'prompt' => "Genera un titolo per questo testo:\n\n[[text]]\n\n----\nTitolo:\n",
            ],
            'pt' => [
                'menuTitle' => 'Gerar subtítulo',
                'prompt' => "Gere um título para este texto:\n\n[[text]]\n\n----\nTítulo:\n",
            ],
            'nl' => [
                'menuTitle' => 'Ondertitel genereren',
                'prompt' => "Genereer een titel voor deze tekst:\n\n[[text]]\n\n----\nTitel:\n",
            ],
            'pl' => [
                'menuTitle' => 'Wygeneruj napisy',
                'prompt' => "Wygeneruj tytuł dla tego tekstu:\n\n[[text]]\n\n----\nTytuł:\n",
            ],
            'ru' => [
                'menuTitle' => 'Сгенерировать субтитры',
                'prompt' => "Сгенерируйте заголовок для этого текста:\n\n[[text]]\n\n----\nЗаголовок:\n",
            ],
            'ja' => [
                'menuTitle' => '字幕を生成する',
                'prompt' => "このテキストのタイトルを生成します:\n\n[[text]]\n\n----\nタイトル:\n",
            ],
            'zh' => [
                'menuTitle' => '生成字幕',
                'prompt' => "生成此文本的标题:\n\n[[text]]\n\n----\n标题:\n",
            ],
            'br' => [
                'menuTitle' => 'Gerar subtítulo',
                'prompt' => "Gere um título para este texto:\n\n[[text]]\n\n----\nTítulo:\n",
            ],
            'tr' => [
                'menuTitle' => 'Altyazı oluştur',
                'prompt' => "Bu metin için bir başlık oluşturun:\n\n[[text]]\n\n----\nBaşlık:\n",
            ],
            'ar' => [
                'menuTitle' => 'إنشاء عنوان',
                'prompt' => "إنشاء عنوان لهذا النص:\n\n[[text]]\n\n----\nعنوان:\n",
            ],
            'ko' => [
                'menuTitle' => '자막 생성',
                'prompt' => "이 텍스트에 대한 제목을 생성하십시오:\n\n[[text]]\n\n----\n제목:\n",
            ],
            'hi' => [
                'menuTitle' => 'उपशीर्षक उत्पन्न करें',
                'prompt' => "इस पाठ के लिए एक शीर्षक बनाएं:\n\n[[text]]\n\n----\nशीर्षक:\n",
            ],
            'id' => [
                'menuTitle' => 'Membuat subtitle',
                'prompt' => "Buat judul untuk teks ini:\n\n[[text]]\n\n----\nJudul:\n",
            ],
            'sv' => [
                'menuTitle' => 'Generera undertext',
                'prompt' => "Generera en titel för denna text:\n\n[[text]]\n\n----\nTitel:\n",
            ],
            'da' => [
                'menuTitle' => 'Generer undertekst',
                'prompt' => "Generer en titel til denne tekst:\n\n[[text]]\n\n----\nTitel:\n",
            ],
            'fi' => [
                'menuTitle' => 'Luo tekstitys',
                'prompt' => "Luo otsikko tälle tekstille:\n\n[[text]]\n\n----\nOtsikko:\n",
            ],
            'no' => [
                'menuTitle' => 'Generer undertekst',
                'prompt' => "Generer en tittel for denne teksten:\n\n[[text]]\n\n----\nTittel:\n",
            ],
            'ro' => [
                'menuTitle' => 'Generează subtitrare',
                'prompt' => "Generați un titlu pentru acest text:\n\n[[text]]\n\n----\nTitlu:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 50,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'above',
        'icon' => 'title',
    ],

    'ad' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Turn into advertisement',
                'prompt' => "Turn the following text into a creative advertisement:\n\n[[text]]\n\n----\nAdvertisement:\n",
            ],
            'de' => [
                'menuTitle' => 'In Werbung umwandeln',
                'prompt' => "Wandele den folgenden Text in eine kreative Werbung um:\n\n[[text]]\n\n----\nWerbung:\n",
            ],
            'fr' => [
                'menuTitle' => 'Transformer en publicité',
                'prompt' => "Transformez le texte suivant en une publicité créative en français:\n\n[[text]]\n\n----\nPublicité en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Convertir en anuncio',
                'prompt' => "Convierta el siguiente texto en un anuncio creativo:\n\n[[text]]\n\n----\nAnuncio:\n",
            ],
            'it' => [
                'menuTitle' => 'Trasformare in pubblicità',
                'prompt' => "Trasformare il seguente testo in un annuncio creativo:\n\n[[text]]\n\n----\nAnnuncio:\n",
            ],
            'pt' => [
                'menuTitle' => 'Transformar em anúncio',
                'prompt' => "Transforme o texto a seguir em um anúncio criativo:\n\n[[text]]\n\n----\nAnúncio:\n",
            ],
            'nl' => [
                'menuTitle' => 'Omzetten in advertentie',
                'prompt' => "Zet de volgende tekst om in een creatieve advertentie:\n\n[[text]]\n\n----\nAdvertentie:\n",
            ],
            'pl' => [
                'menuTitle' => 'Przekształć w reklamę',
                'prompt' => "Przekształć poniższy tekst w kreatywną reklamę:\n\n[[text]]\n\n----\nReklama:\n",
            ],
            'ru' => [
                'menuTitle' => 'Превратить в рекламу',
                'prompt' => "Преобразуйте следующий текст в креативную рекламу:\n\n[[text]]\n\n----\nРеклама:\n",
            ],
            'ja' => [
                'menuTitle' => '広告に変換',
                'prompt' => "次のテキストをクリエイティブな広告に変換します:\n\n[[text]]\n\n----\n広告:\n",
            ],
            'zh' => [
                'menuTitle' => '转换为广告',
                'prompt' => "将以下文本转换为创意广告:\n\n[[text]]\n\n----\n广告:\n",
            ],
            'br' => [
                'menuTitle' => 'Transformar em anúncio',
                'prompt' => "Transforme o texto a seguir em um anúncio criativo:\n\n[[text]]\n\n----\nAnúncio:\n",
            ],
            'tr' => [
                'menuTitle' => 'Reklam haline getir',
                'prompt' => "Aşağıdaki metni yaratıcı bir reklam haline getirin:\n\n[[text]]\n\n----\nReklam:\n",
            ],
            'ar' => [
                'menuTitle' => 'تحويل إلى إعلان',
                'prompt' => "تحويل النص التالي إلى إعلان إبداعي:\n\n[[text]]\n\n----\nإعلان:\n",
            ],
            'ko' => [
                'menuTitle' => '광고로 변환',
                'prompt' => "다음 텍스트를 창의적 광고로 변환하십시오:\n\n[[text]]\n\n----\n광고:\n",
            ],
            'hi' => [
                'menuTitle' => 'विज्ञापन में बदलें',
                'prompt' => "निम्नलिखित पाठ को क्रिएटिव विज्ञापन में बदलें:\n\n[[text]]\n\n----\nविज्ञापन:\n",
            ],
            'id' => [
                'menuTitle' => 'Ubah menjadi iklan',
                'prompt' => "Ubah teks berikut menjadi iklan kreatif:\n\n[[text]]\n\n----\nIklan:\n",
            ],
            'sv' => [
                'menuTitle' => 'Omvandla till annons',
                'prompt' => "Omvandla följande text till ett kreativt reklam:\n\n[[text]]\n\n----\nReklam:\n",
            ],
            'da' => [
                'menuTitle' => 'Omdanne til annonce',
                'prompt' => "Omdan følgende tekst til en kreativ annonce:\n\n[[text]]\n\n----\nAnnonce:\n",
            ],
            'fi' => [
                'menuTitle' => 'Muunna mainokseksi',
                'prompt' => "Muuta seuraava teksti luovaksi mainokseksi:\n\n[[text]]\n\n----\nMainos:\n",
            ],
            'no' => [
                'menuTitle' => 'Konverter til annonse',
                'prompt' => "Konverter følgende tekst til en kreativ annonse:\n\n[[text]]\n\n----\nAnnonse:\n",
            ],
            'ro' => [
                'menuTitle' => 'Transformă în reclamă',
                'prompt' => "Transformați următorul text într-un anunț creativ:\n\n[[text]]\n\n----\nAnunț:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 300,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'megaphone',
    ],

    'eli5' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Explain to a 5 years old kid',
                'prompt' => "Explain this to a 5 years old kid:\n\n[[text]]\n\n----\nExplanation:\n",
            ],
            'de' => [
                'menuTitle' => 'Erkläre einem 5-jährigen Kind',
                'prompt' => "Erkläre dies einem 5-jährigen Kind:\n\n[[text]]\n\n----\nErklärung:\n",
            ],
            'fr' => [
                'menuTitle' => 'Expliquez à un enfant de 5 ans',
                'prompt' => "Expliquez ceci à un enfant de 5 ans en français:\n\n[[text]]\n\n----\nExplication en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Explica a un niño de 5 años',
                'prompt' => "Explica esto a un niño de 5 años:\n\n[[text]]\n\n----\nExplicación:\n",
            ],
            'it' => [
                'menuTitle' => 'Spiegare a un bambino di 5 anni',
                'prompt' => "Spiega questo a un bambino di 5 anni:\n\n[[text]]\n\n----\nSpiegazione:\n",
            ],
            'pt' => [
                'menuTitle' => 'Explique a uma criança de 5 anos',
                'prompt' => "Explique isso a uma criança de 5 anos:\n\n[[text]]\n\n----\nExplicação:\n",
            ],
            'nl' => [
                'menuTitle' => 'Leg het uit aan een 5-jarig kind',
                'prompt' => "Leg dit uit aan een 5-jarig kind:\n\n[[text]]\n\n----\nVerklaring:\n",
            ],
            'pl' => [
                'menuTitle' => 'Wytłumacz to 5-letniemu dziecku',
                'prompt' => "Wyjaśnij to 5-letniemu dziecku:\n\n[[text]]\n\n----\nWyjaśnienie:\n",
            ],
            'ru' => [
                'menuTitle' => 'Объясните 5-летнему ребенку',
                'prompt' => "Объясните это 5-летнему ребенку:\n\n[[text]]\n\n----\nОбъяснение:\n",
            ],
            'ja' => [
                'menuTitle' => '5歳の子供に説明する',
                'prompt' => "5歳の子供に説明してください:\n\n[[text]]\n\n----\n説明:\n",
            ],
            'zh' => [
                'menuTitle' => '向5岁的孩子解释',
                'prompt' => "向5岁的孩子解释:\n\n[[text]]\n\n----\n解释:\n",
            ],
            'br' => [
                'menuTitle' => 'Explica a un nen de 5 anys',
                'prompt' => "Explique isso a uma criança de 5 anos:\n\n[[text]]\n\n----\nExplicação:\n",
            ],
            'tr' => [
                'menuTitle' => '5 yaşındaki bir çocuğa açıklayın',
                'prompt' => "Bunu 5 yaşındaki bir çocuğa açıklayın:\n\n[[text]]\n\n----\nAçıklama:\n",
            ],
            'ar' => [
                'menuTitle' => 'اشرح لطفل عمره 5 سنوات',
                'prompt' => "اشرح هذا لطفل عمره 5 سنوات:\n\n[[text]]\n\n----\nشرح:\n",
            ],
            'ko' => [
                'menuTitle' => '5살 아이에게 설명하십시오',
                'prompt' => "이것을 5 살 아이에게 설명하십시오:\n\n[[text]]\n\n----\n설명:\n",
            ],
            'hi' => [
                'menuTitle' => '5 साल के बच्चे को समझाएं',
                'prompt' => "इसे 5 साल के बच्चे को समझाएं:\n\n[[text]]\n\n----\nव्याख्या:\n",
            ],
            'id' => [
                'menuTitle' => 'Jelaskan kepada seorang anak berusia 5 tahun',
                'prompt' => "Jelaskan ini kepada seorang anak berusia 5 tahun:\n\n[[text]]\n\n----\nPenjelasan:\n",
            ],
            'sv' => [
                'menuTitle' => 'Förklara för en 5-åring',
                'prompt' => "Förklara detta för en 5-åring:\n\n[[text]]\n\n----\nFörklaring:\n",
            ],
            'da' => [
                'menuTitle' => 'Forklar til en 5-årig',
                'prompt' => "Forklar dette til en 5-årig:\n\n[[text]]\n\n----\nForklaring:\n",
            ],
            'fi' => [
                'menuTitle' => 'Selitä 5-vuotiaalle lapselle',
                'prompt' => "Selitä tämä 5-vuotiaalle lapselle:\n\n[[text]]\n\n----\nSelitys:\n",
            ],
            'no' => [
                'menuTitle' => 'Forklar til en 5-åring',
                'prompt' => "Forklar dette til en 5-åring:\n\n[[text]]\n\n----\nForklaring:\n",
            ],
            'ro' => [
                'menuTitle' => 'Explicați unui copil de 5 ani',
                'prompt' => "Explicați acest lucru unui copil de 5 ani:\n\n[[text]]\n\n----\nExplicație:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 400,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'baby',
    ],

    'quote' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Find a matching quote',
                'prompt' => "Find a matching quote for the following text:\n\n[[text]]\n\n----\nMatching quote:\n",
            ],
            'de' => [
                'menuTitle' => 'Finde einen passenden Zitat',
                'prompt' => "Finde ein passendes Zitat für den folgenden Text:\n\n[[text]]\n\n----\nPassendes Zitat:\n",
            ],
            'fr' => [
                'menuTitle' => 'Trouver une citation correspondante',
                'prompt' => "Trouvez une citation correspondante au texte suivant en français:\n\n[[text]]\n\n----\nCitation correspondante en français:\n",
            ],
            'es' => [
                'menuTitle' => 'Encuentra una cita que coincida',
                'prompt' => "Encuentra una cita que coincida con el siguiente texto:\n\n[[text]]\n\n----\nCita coincidente:\n",
            ],
            'it' => [
                'menuTitle' => 'Trova una citazione corrispondente',
                'prompt' => "Trova una citazione corrispondente al seguente testo:\n\n[[text]]\n\n----\nCitazione corrispondente:\n",
            ],
            'pt' => [
                'menuTitle' => 'Encontre uma citação correspondente',
                'prompt' => "Encontre uma citação correspondente ao texto a seguir:\n\n[[text]]\n\n----\nCitação correspondente:\n",
            ],
            'nl' => [
                'menuTitle' => 'Vind een overeenkomende citaat',
                'prompt' => "Vind een overeenkomende quote voor de volgende tekst:\n\n[[text]]\n\n----\nOvereenkomende quote:\n",
            ],
            'pl' => [
                'menuTitle' => 'Znajdź pasujący cytat',
                'prompt' => "Znajdź pasujący cytat do poniższego tekstu:\n\n[[text]]\n\n----\nPasujący cytat:\n",
            ],
            'ru' => [
                'menuTitle' => 'Найти соответствующую цитату',
                'prompt' => "Найдите соответствующую цитату для следующего текста:\n\n[[text]]\n\n----\nСоответствующая цитата:\n",
            ],
            'ja' => [
                'menuTitle' => '一致する引用を見つける',
                'prompt' => "次のテキストに一致する引用を見つけます:\n\n[[text]]\n\n----\n一致する引用:\n",
            ],
            'zh' => [
                'menuTitle' => '找到匹配的引用',
                'prompt' => "找到以下文本的匹配引用:\n\n[[text]]\n\n----\n匹配引用:\n",
            ],
            'br' => [
                'menuTitle' => 'Encontre uma citação correspondente',
                'prompt' => "Encontre uma citação correspondente ao texto a seguir:\n\n[[text]]\n\n----\nCitação correspondente:\n",
            ],
            'tr' => [
                'menuTitle' => 'Eşleşen bir alıntı bulun',
                'prompt' => "Aşağıdaki metin için eşleşen bir alıntı bulun:\n\n[[text]]\n\n----\nEşleşen alıntı:\n",
            ],
            'ar' => [
                'menuTitle' => 'العثور على اقتباس مطابق',
                'prompt' => "العثور على اقتباس مطابق للنص التالي:\n\n[[text]]\n\n----\nاقتباس مطابق:\n",
            ],
            'ko' => [
                'menuTitle' => '일치하는 인용문 찾기',
                'prompt' => "다음 텍스트에 일치하는 인용구를 찾으십시오:\n\n[[text]]\n\n----\n일치하는 인용구:\n",
            ],
            'hi' => [
                'menuTitle' => 'मिलान उद्धरण खोजें',
                'prompt' => "निम्नलिखित पाठ के लिए मिलान उद्धरण ढूंढें:\n\n[[text]]\n\n----\nमिलान उद्धरण:\n",
            ],
            'id' => [
                'menuTitle' => 'Temukan kutipan yang sesuai',
                'prompt' => "Temukan kutipan yang cocok untuk teks berikut:\n\n[[text]]\n\n----\nKutipan yang cocok:\n",
            ],
            'sv' => [
                'menuTitle' => 'Hitta en matchande citat',
                'prompt' => "Hitta ett matchande citat för följande text:\n\n[[text]]\n\n----\nMatchande citat:\n",
            ],
            'da' => [
                'menuTitle' => 'Find et matchende citat',
                'prompt' => "Find et matchende citat til følgende tekst:\n\n[[text]]\n\n----\nMatchende citat:\n",
            ],
            'fi' => [
                'menuTitle' => 'Etsi vastaava lainaus',
                'prompt' => "Etsi vastaava lainaus seuraavasta tekstistä:\n\n[[text]]\n\n----\nVastaava lainaus:\n",
            ],
            'no' => [
                'menuTitle' => 'Finn en matchende sitat',
                'prompt' => "Finn et matchende sitat for følgende tekst:\n\n[[text]]\n\n----\nMatchende sitat:\n",
            ],
            'ro' => [
                'menuTitle' => 'Găsiți o citare potrivită',
                'prompt' => "Găsiți o citare potrivită pentru textul următor:\n\n[[text]]\n\n----\nCitare potrivită:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 200,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'quote',
    ],

    'image-prompt' => [
        'languages' => [
            'en' => [
                'menuTitle' => 'Generate image idea',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'de' => [
                'menuTitle' => 'Generiere Bildidee',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'fr' => [
                'menuTitle' => "Générer une idée d'image",
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'es' => [
                'menuTitle' => 'Generar idea de imagen',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'it' => [
                'menuTitle' => 'Genera idea immagine',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'pt' => [
                'menuTitle' => 'Gerar ideia de imagem',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'nl' => [
                'menuTitle' => 'Genereer afbeeldingsidee',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'pl' => [
                'menuTitle' => 'Wygeneruj pomysł na obraz',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'ru' => [
                'menuTitle' => 'Сгенерировать идею изображения',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'ja' => [
                'menuTitle' => '画像のアイデアを生成する',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'zh' => [
                'menuTitle' => '生成图像想法',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'br' => [
                'menuTitle' => 'Générer une idée d\'image',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'tr' => [
                'menuTitle' => 'Resim fikri oluştur',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'ar' => [
                'menuTitle' => 'إنشاء فكرة صورة',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'ko' => [
                'menuTitle' => '이미지 아이디어 생성',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'hi' => [
                'menuTitle' => 'छवि विचार उत्पन्न करें',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'id' => [
                'menuTitle' => 'Hasilkan ide gambar',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'sv' => [
                'menuTitle' => 'Generera bildidé',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'da' => [
                'menuTitle' => 'Generer billedeide',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'fi' => [
                'menuTitle' => 'Luo kuvan idea',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'no' => [
                'menuTitle' => 'Generer bildeide',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
            'ro' => [
                'menuTitle' => 'Generați o idee de imagine',
                'prompt' => "Describe an image that would match this text:\n\n[[text]]\n\n----\nImage description:\n",
            ],
        ],
        'wordLength' => [
            'type' => AIKIT_WORD_LENGTH_TYPE_FIXED,
            'value' => 50,
        ],
        'requiresTextSelection' => true,
        'generatedTextPlacement' => 'below',
        'icon' => 'image',
    ],
];
