<?php

namespace App\Services;

class App{
    private Router $router;

    public function __construct($router)
    {
        $this->router = $router;
    }


    public function run(){
        echo $this->router->resolve($_SERVER['REQUEST_URI']);
    }
}