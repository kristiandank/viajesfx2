<?php

use Database\Config\Conexion;

require '../config/Database.php';

class UserModel
{
    protected $id;
    protected $nombres;
    protected $telefono;
    protected $direccion;
    protected $origen;

    protected function insert()
    {
        $conn = new Conexion();
        $sql = "INSERT INTO clientes ( nombres, telefono, direccion, origen) VALUES (?,?,?,?)";
        $insertar = $conn->conn->prepare($sql);
        $insertar->bindParam(1, $this->nombres);
        $insertar->bindParam(2, $this->telefono);
        $insertar->bindParam(3, $this->direccion);
        $insertar->bindParam(4, $this->origen);
        $insertar->execute();
    }
    protected function search()
    {
        $conn = new Conexion();
        $sql = "SELECT * FROM clientes WHERE nombres= '$this->nombres'";
        $consulta = $conn->conn->prepare($sql);
        $consulta->execute();
        $objetoUsuario = $consulta->fetchAll(PDO::FETCH_OBJ);  //registros-> retornar en objetos
        foreach ($objetoUsuario as $nombres) {
        }
        if (empty($nombres)) {
            $nombres = "sindatos";
        }
        return $nombres;
    }
}