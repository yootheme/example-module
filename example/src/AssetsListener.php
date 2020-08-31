<?php

use YOOtheme\Metadata;
use YOOtheme\Path;

class AssetsListener
{
    public static function initHead(Metadata $metadata)
    {
        // Style file
        $metadata->set('style:my-css', ['href' => Path::get('../assets/css/custom.css')]);

        // Inline style
        $metadata->set('style:my-inline-css', 'body {color: blue}');

        // Script file
        $metadata->set('script:my-js', ['src' => Path::get('../assets/js/custom.js'), 'defer' => true]);

        // Inline script
        $metadata->set('script:my-inline-js', 'var custom = 123;');
    }
}
