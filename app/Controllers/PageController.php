<?php

namespace App\Controllers;

use App\Models\Model;
use App\Services\Render;
use PDO;

class PageController{

    public function home($i){

        $db = (new Model())->getDb();
        $req = $db->prepare("SELECT * FROM users");
        $req->execute();
        var_dump($req->fetch(PDO::FETCH_OBJ));

        die();
        return Render::view("welcome");
    }

    public function contact(){
        return "Je suis la page de contact";
    }
}