<?php

include_once __DIR__ . '/src/MyListener.php';

return [

    'events' => [

        'theme.head' => [
            MyAssets::class => 'initHead',
        ]

    ]

];
