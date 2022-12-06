<?php

namespace App\Parent;

class Personne{
    protected string $nom;
    protected string $prenom;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}