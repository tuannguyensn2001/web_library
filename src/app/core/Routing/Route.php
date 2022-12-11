<?php
namespace App\Core\Routing;
class Route
{
    private $path;
    private $controller;
    private $action;
    private $method;

    public function __construct($method, $path,$array)
    {
        $this->method = $method;
        $this->path = $path;
        $this->controller = $array[0];
        $this->action = $array[1];
    }

    public function execute()
    {
       try {
           if ($_SERVER['REQUEST_METHOD'] !== $this->method ) {
               return false;
           }
           $parse = parse_url($_SERVER["REQUEST_URI"]);
           $path = $parse["path"];
           if ($this->path !== $path) {
               return false;
           }

           $controller = new $this->controller();
           $method = $this->action;
           $controller->$method();
           return true;
       } catch (\Exception $exception) {
           return false;
       }
    }
}