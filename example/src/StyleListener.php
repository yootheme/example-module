<?php

class StyleListener
{
    /**
     * @param array $config
     */
    public static function config($config)
    {
        if (false) {
            // Style needs to be re-compiled
            $config['update'] = true;
        }

        return $config;
    }
}
