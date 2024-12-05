<?php

// namespace

use YOOtheme\Builder;
use YOOtheme\Path;
use YOOtheme\Theme\Styler\StylerConfig;

include_once __DIR__ . '/src/AssetsListener.php';
include_once __DIR__ . '/src/SettingsListener.php';
include_once __DIR__ . '/src/SourceListener.php';
include_once __DIR__ . '/src/StyleListener.php';
include_once __DIR__ . '/src/MyTypeProvider.php';
include_once __DIR__ . '/src/Type/MyType.php';
include_once __DIR__ . '/src/Type/MyQueryType.php';
include_once __DIR__ . '/src/TranslationListener.php';

return [

    'theme' => [
        'styles' => [
            'components' => [
                'my-component' => Path::get('./assets/less/my-component.less'),
            ],
        ],
    ],

    'config' => [
        StylerConfig::class => __DIR__ . '/config/styler.json',
    ],

    'events' => [

        // Add asset files
        'theme.head' => [
            AssetsListener::class => 'initHead',
        ],

        // Add settings Panels
        // Add translation
        'customizer.init' => [
            SettingsListener::class => 'initCustomizer',
            TranslationListener::class => ['initCustomizer', -10],
        ],

        // Add custom demo source
        'source.init' => [
            SourceListener::class => 'initSource',
        ],

        // Add styler config listener
        StylerConfig::class => [
            StyleListener::class => 'config'
        ],

    ],

    // Add builder elements
    'extend' => [

        Builder::class => function (Builder $builder) {
            $builder->addTypePath(Path::get('./elements/*/element.json'));
        },
    ],

];
