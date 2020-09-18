<?php

class MyQueryType
{
    public static function config()
    {
        return [

            'fields' => [

                'custom_my_type' => [

                    'type' => 'MyType',

                    // Arguments passed to the resolver function
                    'args' => [

                        'id' => [
                            'type' => 'String'
                        ],

                    ],

                    'metadata' => [

                        // Label in dynamic content select box
                        'label' => 'Custom MyType',

                        // Option group in dynamic content select box
                        'group' => 'Custom',

                        // Fields to input arguments in the customizer
                        'fields' => [

                            // The array key corresponds to a key in the 'args' array above
                            'id' => [

                                // Field label
                                'label' => 'Type ID',

                                // Field description
                                'description' => 'Input a type ID.',

                                // Default or custom field types can be used
                                'type' => 'text'

                            ],

                        ]

                    ],

                    'extensions' => [
                        'call' => __CLASS__ . '::resolve',
                    ],

                ],

            ]

        ];
    }

    public static function resolve($item, $args, $context, $info)
    {
        return MyTypeProvider::get($args['id']);
    }
}
