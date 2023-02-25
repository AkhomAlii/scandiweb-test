<?php

namespace Core;

class App{

    protected static array $registries = [];

    public static function bind($key, $registered_value){

        self::$registries[$key] = $registered_value;
    }


    public static function resolve($key){

        if(! array_key_exists($key, self::$registries)){
            Helper::didu("No {$key} found");
        }

        return self::$registries[$key];
    }
}