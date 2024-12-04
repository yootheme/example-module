<?php

// namespace

use YOOtheme\Config;
use YOOtheme\Path;

/**
 * Settings listener.
 *
 * @see https://yootheme.com/support/yootheme-pro/joomla/developers-modules#add-settings
 */
class SettingsListener
{
    public static function initCustomizer(Config $config)
    {
        // Add panel using a dynamic PHP configuration
        $config->set('customizer.panels.my-panel', [
            'title' => 'My Panel',
            'width' => 400,
            'fields' => [
                'option_b' => [
                    'label' => 'Option B',
                    'description' => 'A description text.',
                ],
            ],
        ]);
        $config->set('customizer.sections.settings.fields.settings.items.my-panel', 'My Panel');

        // Add section using a JSON config file
        $config->addFile('customizer', Path::get('../config/customizer.json'));
    }
}
