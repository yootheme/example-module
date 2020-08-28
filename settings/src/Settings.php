<?php

use YOOtheme\Config;

class MySettings
{
    function initCustomizer(Config $config)
    {
        // Gets the registered panels for the customizer
        $config->get('customizer.panels');

        // Adds a new panel called "My Panel" to the customizer
        $config->set('customizer.panels.my-panel', [
            'title'  => 'My Panel',
            'width'  => 400,
            'fields' => [
                'my-field' => [
                    'label' => 'My Field',
                    'description' => 'My Field\'s Description.',
                ],
            ],
        ]);

        // Adds the panel to the menu in the "settings" section
        $config->set('customizer.sections.settings.fields.settings.items.my-panel', 'My Panel');
    }
}
