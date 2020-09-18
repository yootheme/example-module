<?php

class MyType
{
    public static function config()
    {
        return [

            'fields' => [

                'my_field' => [
                    'type' => 'String',
                    'metadata' => [
                        'label' => 'My Field'
                    ],
                    'extensions' => [
                        'call' => __CLASS__ . '::resolve'
                    ]
                ]

            ],

            'metadata' => [
                'type' => true,
                'label' => 'My Type'
            ]

        ];
    }

    public static function resolve($obj, $args, $context, $info)
    {
        // Query the data …
        return $obj->my_field;
    }
}
