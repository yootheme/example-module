<?php

use YOOtheme\Builder;
use YOOtheme\Path;

include_once __DIR__ . '/src/Assets.php';
include_once __DIR__ . '/src/Settings.php';

return [

    'events' => [

        // Add Asset Files
        'theme.head' => [
            MyAssets::class => 'initHead',
        ],

        // Add Settings Panel
        'customizer.init' => [
            MySettings::class => 'initCustomizer',
        ]

    ],

    // Add builder elements
    'extend' => [

        Builder::class => function (Builder $builder) {
            $builder->addTypePath(Path::get('./elements/*/element.json'));
        }

    ]

];
