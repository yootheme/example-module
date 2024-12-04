<?php

/**
 * Custom Query Type
 *
 * @see https://yootheme.com/support/yootheme-pro/joomla/developers-sources#add-custom-sources
 */
class MyQueryType
{
    public static function config()
    {
        return [
            'fields' => [
                'custom_my_type' => [
                    'type' => 'MyType',

                    'args' => [
                        'id' => [
                            'type' => 'String',
                        ],
                    ],

                    'metadata' => [
                        'label' => 'Custom MyType',
                        'group' => 'Custom',

                        'fields' => [
                            'id' => [
                                'label' => 'Type ID',
                                'description' => 'Input a type ID.',
                            ],
                        ],
                    ],

                    'extensions' => [
                        'call' => __CLASS__ . '::resolve',
                    ],
                ],
            ],
        ];
    }

    public static function resolve($item, $args, $context, $info)
    {
        return MyTypeProvider::get($args['id']);
    }
}
