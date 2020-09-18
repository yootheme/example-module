<?php

class MyTypeProvider
{
    public static function get($id)
    {
        // Query objects
        return (object) ['my_field' => "The data for id: {$id}"];
    }
}
