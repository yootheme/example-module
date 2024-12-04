<?php

// namespace

use YOOtheme\Theme\Styler\StylerConfig;

/**
 * Style listener.
 *
 * @see https://yootheme.com/support/yootheme-pro/joomla/developers-modules#compiling-the-less-sources
 */
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
