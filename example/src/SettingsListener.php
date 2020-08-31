<?php

use YOOtheme\Config;
use YOOtheme\Path;
use YOOtheme\View;

class SettingsListener
{
    public static function initCustomizer(Config $config)
    {
        // Add panel
        $config->set('customizer.panels.my-panel', [
            'title'  => 'My Panel',
            'width'  => 400,
            'fields' => [
                'option_b' => [
                    'label' => 'Option B',
                    'description' => 'A description text.',
                ],
            ],
        ]);
        $config->set('customizer.sections.settings.fields.settings.items.my-panel', 'My Panel');

        // Add section
        $config->addFile('customizer', Path::get('../config/customizer.json'));
    }
}
