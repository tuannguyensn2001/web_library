<?php

namespace App\Core\Routing;

class Router
{
    private static $routes = [];
    private static $callbackNotFound;


    public static function get($path,$array)
    {
        $route = new Route("GET",$path,$array);
        self::$routes[] = $route;
    }

    public static function post($path,$array)
    {
        $route = new Route("POST",$path,$array);
        self::$routes[] = $route;
    }

    public static function dispatch()
    {
        foreach(self::$routes as $route) {
           $valid =  $route->execute();
           if ($valid) {
               return;
           }
        }

        self::handleNotFound();
    }

    public static function addHandlerNotFound($callback)
    {
        self::$callbackNotFound = $callback;
    }

    private static function handleNotFound()
    {
        if (!!self::$callbackNotFound) {
            $method = self::$callbackNotFound;
            $method();
            return;
        }
        header("HTTP/1.0 404 NOT FOUND");
    }


}