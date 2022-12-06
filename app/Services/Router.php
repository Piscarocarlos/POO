<?php

namespace App\Services;

class Router{
    private array $routes;

    public function register(string $url, callable | array $action)
    {
        $this->routes[$url] = $action;
    }

    public function resolve(string $uri)
    {
        $url = explode('?', $uri)[0];
        $params = explode('?', $uri)[1] ?? null;
        $action = $this->routes[$url] ?? null;
        if(is_callable($action)) {
            return $action();           
        }

        if(is_array($action)){
            $namespace = "App\Controllers\\";
            [$class, $method] = $action;
            $class = $namespace . $action[0];
            if(class_exists($class) && method_exists($class, $method)) {
                $obj = new $class();
                return call_user_func_array([$obj, $method], [$params]);
            }
        }

        return "404 Not Found";

    }

}