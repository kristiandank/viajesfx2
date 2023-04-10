<?php

require '../modelo/empleadoModel.php';


class EmpleadoController extends EmpleadoModel
{

    public function verVistaInsert()
    {
        require '../vista/empleado/empleado.php';
    }

    public function insertarempleado($nombre, $edad,$telefono, $direccion)
    {        
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->direccion = $direccion; 
        $this->insert();
    }    
   
    public function redirectIndex()
    {
        header("location: ../");
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 'insert') {
    $instancia = new EmpleadoController();
    $instancia->insertarempleado($_POST['nombre'], $_POST['edad'], $_POST['telefono'], $_POST['direccion']);
}


