<?php

use YOOtheme\Metadata;

class MyAssets
{
    function initHead(Metadata $metadata)
    {
        // style file
        $metadata->set('style:my-css', ['href' => 'assets/css/custom.css']);

        // inline style
        $metadata->set('style:my-inline-css', 'body {color: blue}');

        // script file
        $metadata->set('script:my-js', ['src' => 'assets/js/custom.js', 'defer' => true]);

        // inline script
        $metadata->set('script:my-inline-js', 'var custom = 123;');
    }
}
