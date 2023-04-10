<?php

use Database\Config\Conexion;

require '../config/Database.php';

class ViajeModel
{
    protected $id;
    protected $lugar;
    protected $fecha;
    protected $hora;
    protected $precio;


    protected function insert()
    {
        $conn = new Conexion();
        $sql = "INSERT INTO viajes ( lugar, fecha, hora, precio) VALUES (?,?,?,?)";
        $insertar = $conn->conn->prepare($sql);
        $insertar->bindParam(1, $this->lugar);
        $insertar->bindParam(2, $this->fecha);
        $insertar->bindParam(3, $this->hora);
        $insertar->bindParam(4, $this->precio);
 
        $insertar->execute();
    }
}