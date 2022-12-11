<?php

if (!function_exists("redirect")) {
    function redirect($url) {
        header("Location: {$url}");
    }
}

if (!function_exists("dd")) {
    function dd($data)
    {
        var_dump($data);
        die;
    }
}

if (!function_exists("view")) {
    function view($view,$data=[])
    {
        extract($data);
        include(__DIR__."/../../../resources/views/{$view}.php");
        return;
    }
}

if (!function_exists("assets")) {
    function assets($data)
    {
        return "assets/{$data}";
    }
}

if (!function_exists("env")) {
    function env($key) {
        return getenv($key);
    }
}