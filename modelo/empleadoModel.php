<?php

use Database\Config\Conexion;

require '../config/Database.php';

class EmpleadoModel
{
    protected $id;
    protected $nombre;
    protected $edad;
    protected $telefono;
    protected $direccion;

    protected function insert()
    {
        $conn = new Conexion();
        $sql = "INSERT INTO empleados ( nombre, edad, telefono, direccion) VALUES (?,?,?,?)";
        $insertar = $conn->conn->prepare($sql);
        $insertar->bindParam(1, $this->nombre);
        $insertar->bindParam(2, $this->edad);
        $insertar->bindParam(3, $this->telefono);
        $insertar->bindParam(4, $this->direccion);
        $insertar->execute();
    }
}