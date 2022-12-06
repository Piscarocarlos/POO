<?php

namespace App\Child;

use App\Parent\Personne;

class Etudiant extends Personne{
    private string $filiere;

    public function __construct(string $nom, string $prenom, string $filiere)
    {
        parent::__construct($nom, $prenom);
        $this->filiere = $filiere;
    }
}