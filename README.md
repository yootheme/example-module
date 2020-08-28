# Example Modules

This are the example modules for the YOOtheme Pro. They demonstrate how to add asset files, builder elements and setting panels. For more information on how to create a custom module read the [modules and events](https://yootheme.com/support/yootheme-pro/joomla/modules-and-events.md) documentation.

## Quick Installation

1. Create and activate a child theme in [Joomla](https://yootheme.com/support/yootheme-pro/joomla/child-themes#create-a-child-theme) or [WordPress](https://yootheme.com/support/yootheme-pro/wordpress/child-themes#create-a-child-theme) for YOOtheme Pro.
2. [Download](https://github.com/yootheme/example-modules/archive/master.zip) and unzip the example modules.
3. Create a `modules` directory in the child theme and copy all example module directories into it.
4. Create a `config.php` file with the following code
```php
<?php

$app->load(__DIR__ . '/modules/*/bootstrap.php');

return [];
```
5. Open YOOtheme Pro and see the extended functionalities.
