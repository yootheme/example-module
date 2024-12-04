<?php

/**
 * Custom Type Provider
 *
 * @see https://yootheme.com/support/yootheme-pro/joomla/developers-sources#add-custom-sources
 */
class MyTypeProvider
{
    public static function get($id)
    {
        // Query objects
        return (object) ['my_field' => "The data for id: {$id}"];
    }
}
