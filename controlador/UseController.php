<?php

require '../modelo/UserModel.php';


class UserController extends UserModel
{

    public function verVistaInsert()
    {
        require '../vista/cliente/cliente.php';
    }
      public function insertarUsuario($nombres, $telefono, $direccion, $origen)
    {
        $this->nombres = $nombres;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->origen = $origen; 
        $this->insert();

    }
    
    
    public function redirectLogin()
    {
        header("location: UserController.php?accion=loginRegister");
    }

    public function redirectIndex()
    {
        header("location: ../");
    }
}


if (isset($_POST['accion']) && $_POST['accion'] == 'insert') {
    $instancia = new UserController();
    $instancia->insertarUsuario($_POST['nombres'], $_POST['telefono'], $_POST['direccion'], $_POST['origen']);
}

