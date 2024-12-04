<?php

// namespace

use YOOtheme\Config;
use YOOtheme\Path;
use YOOtheme\Translator;

/**
 * Translation listener.
 *
 * @see https://yootheme.com/support/yootheme-pro/joomla/translation#custom-language-files
 */
class TranslationListener
{
    static function initCustomizer(Config $config, Translator $translator)
    {
        $translator->addResource(Path::get("../languages/{$config('locale.code')}.json"));
    }
}
