<?php

namespace src;

abstract class Task11
{

    protected static array $instance = array();

    protected function __construct()
    {
    }

    public static function getInstance()
    {

        $ClassName = get_called_class();

        if (!isset(static::$instance[ $ClassName ]))
            static::$instance[ $ClassName ] = new $ClassName();

        return static::$instance[ $ClassName ];
    }

}

class Example extends Task11
{
}


