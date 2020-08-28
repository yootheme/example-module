<?php

include_once __DIR__ . '/src/MyListener.php';

return [

    'events' => [

        'customizer.init' => [
            MyListener::class => 'initCustomizer',
        ]

    ]

];
