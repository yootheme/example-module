<?php

use YOOtheme\Theme\Styler\StylerConfig;

class StyleListener
{
    public static function config(StylerConfig $config): StylerConfig
    {
        if (false) {
            // Style needs to be re-compiled
            $config['update'] = true;
        }

        return $config;
    }
}
