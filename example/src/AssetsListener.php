<?php

use YOOtheme\Metadata;
use YOOtheme\Path;

class AssetsListener
{
    public static function initHead(Metadata $metadata)
    {
        // style file
        $metadata->set('style:my-css', ['href' => Path::get('../assets/css/custom.css')]);

        // inline style
        $metadata->set('style:my-inline-css', 'body {color: blue}');

        // script file
        $metadata->set('script:my-js', ['src' => Path::get('../assets/js/custom.js'), 'defer' => true]);

        // inline script
        $metadata->set('script:my-inline-js', 'var custom = 123;');
    }
}
