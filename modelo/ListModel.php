<?php

use Database\Config\Conexion;

require '../config/Database.php';

class ListModel
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
        $objetoCliente = $consulta->fetchAll(PDO::FETCH_OBJ);  //registros-> retornar en objetos
        foreach ($objetoCliente as $nombres) {
        }
        if (empty($nombres)) {
            $nombres = "sindatos";
        }
        return $nombres;
    }

    protected function select()
    {
        $conn = new Conexion();
        $sql = "SELECT * FROM clientes";
        $consulta = $conn->conn->prepare($sql);
        $consulta->execute();
        //transformar a objeto
        $objetoCliente = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoCliente;
    }

    protected function selectCliente()
    {
        $conn = new Conexion();
        $sql = "SELECT * FROM clientes WHERE id='$this->id'";
        $consulta = $conn->conn->prepare($sql);
        $consulta->execute();
        //transformar a objeto
        $objetoCliente = $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach ($objetoCliente as $cliente) {
        }
        return $cliente;
    }

    public function delete()
    {
        $conn = new Conexion();
        $sql = "DELETE FROM clientes WHERE id ='$this->id'";
        $eliminar = $conn->conn->prepare($sql);
        $eliminar->execute();
    }

    public function update()
    {
        $conn = new Conexion();
        $sql = "UPDATE clientes SET id='$this->id', nombres='$this->nombres', telefono='$this->telefono', direccion='$this->direccion', origen='$this->origen'  WHERE id='$this->id'";
        $actualizar = $conn->conn->prepare($sql);
        $actualizar->execute();
    }
}
