<?php

namespace Core\Http;

use Core\Helper;

class Route{
    protected static array $routes = [
        "GET" => [],
        "POST" => []
    ];



    public static function get(string $route, string|callable|array $action) :void
    {
        self::$routes["GET"][$route] = $action;
    }
    
    public static function post(string $route, string|callable|array $action) :void
    {
        self::$routes["POST"][$route] = $action;
    }

    public static function resolve(){


        if(! isset( self::$routes[Request::method()][Request::path()])){
           
            $routerHelper = new Helper();
            return $routerHelper->view('404', [
                'helper' => $routerHelper
            ]);
        }
        
        $action = self::$routes[Request::method()][Request::path()];

        
         call_user_func_array([new $action[0],$action[1]],[]);
        
    }
}