<?php

class StyleListener
{
    public static function config(array $config): array
    {
        if (false) {
            // Style needs to be re-compiled
            $config['update'] = true;
        }

        return $config;
    }
}
