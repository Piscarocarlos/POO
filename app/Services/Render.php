<?php

namespace App\Services;

class Render{

    public static function view(string $page){
        require_once BASE_VIEW . $page . '.php';
    }
}