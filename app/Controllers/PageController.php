<?php

namespace App\Controllers;

use App\Services\Render;

class PageController{

    public function home($i){
        return Render::view("welcome");
    }

    public function contact(){
        return "Je suis la page de contact";
    }
}