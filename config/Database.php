<?php

namespace Database\Config;

use PDO;

use PDOException;

class Conexion{

    public $conn;

    public function __construct()
    {

        try {

            $this->conn = new PDO("mysql:host=localhost;dbname=viajes", "root", "");

            echo "conexión exitosa";

        } catch (PDOException $e) {

            echo "Error --> ", $e->getMessage();

        }
    }

}

$db = new Conexion();