<?php

use YOOtheme\Builder\Source;

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
