<?php

namespace Core\Http;


class Request{

    public static function method() :string

    {
        return $_SERVER['REQUEST_METHOD'];
    }

    
    public static function path() : string
    {

        return parse_url($_SERVER['REQUEST_URI'])["path"] ?? '/';
    }
}
