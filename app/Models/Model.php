<?php

namespace App\Models;

use Error;
use PDO;
use PDOException;

class Model{
    const DB_NAME = "events";
    const DB_HOST = "localhost";
    const DB_PASSWORD = "";
    const DB_USER = "root";
    const DB_PORT = 3306;

    protected PDO $db;

    public function __construct(){
        try {
            $this->db = new PDO("mysql:dbname=". self::DB_NAME . ";host=". self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            // $this->db->rollBack();
            echo "Impossible de se connecter à la base de données. Contactez l'admin";
        }
    }

    public function getDB(){      
       try {
        return $this->db;
       } catch (Error $e) {
        echo "";
       }
    }
}