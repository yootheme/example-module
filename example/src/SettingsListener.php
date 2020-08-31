<?php

use YOOtheme\Config;
use YOOtheme\Metadata;
use YOOtheme\Path;

class SettingsListener
{
    public static function initCustomizer(Config $config)
    {
        // Get the registered panels for the customizer
        $config->get('customizer.panels');

        // Add a new panel called "My Panel" to the customizer
        $config->set('customizer.panels.my-panel', [
            'title'  => 'My Panel',
            'width'  => 400,
            'fields' => [
                'my-panel-field' => [
                    'label' => 'My Panel Field',
                    'description' => 'My Field\'s Description.',
                ],
            ],
        ]);

        // Add the panel to the menu in the "settings" section
        $config->set('customizer.sections.settings.fields.settings.items.my-panel', 'My Panel');

        // Add a new section to the customizer through a json config file
        $config->addFile('customizer', Path::get('../config/customizer.json'));
    }

    public static function initHead(Config $config, Metadata $metadata)
    {
        // Access theme config values through the `YOOtheme\Config` service
        $metadata->set('script:my-settings', "document.addEventListener('DOMContentLoaded', function (event) {
            document.body.insertAdjacentHTML('beforebegin', '<dl>'
                + '<dt>My Section Field</dt><dd>{$config->get('~theme.my-section-field')}</dd>'
                + '<dt>My Panel Field</dt><dd>{$config->get('~theme.my-panel-field')}</dd>'
            + '</dl>');
        })");
    }
}
