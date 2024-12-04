<?php

// namespace

use YOOtheme\Builder\Source;

/**
 * Source listener.
 *
 * @see https://yootheme.com/support/yootheme-pro/joomla/developers-sources#add-custom-sources
 */
class SourceListener
{
    /**
     * @param Source $source
     */
    public static function initSource($source)
    {
        $source->objectType('MyType', MyType::config());
        $source->queryType(MyQueryType::config());
    }
}
