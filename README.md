# Example Module

This is the example module for the YOOtheme Pro. It demonstrates how to add asset files, builder elements and setting panels. For more information on how to create a custom module read the [modules](https://yootheme.com/support/yootheme-pro/joomla/developers-modules) documentation.

## Quick Installation

The example modules can be added using a child-theme or a Joomla or WordPress plugin. The easiest way to quickly try it out is by using a child theme. 

1. Create and activate a child theme in [Joomla](https://yootheme.com/support/yootheme-pro/joomla/developers-child-themes#create-a-child-theme) or [WordPress](https://yootheme.com/support/yootheme-pro/wordpress/developers-child-themes#create-a-child-theme) for YOOtheme Pro.
2. [Download](https://github.com/yootheme/example-module/archive/master.zip) and unzip the example module.
3. Create a `modules` directory in the child theme and copy the `example` directory into it.
4. Create a `config.php` file with the following code
```php
<?php

$app->load(__DIR__ . '/modules/*/bootstrap.php');

return [];
```
5. Open YOOtheme Pro and see the extended functionalities.
