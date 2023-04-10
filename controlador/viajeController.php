<?php

require '../modelo/viajeModel.php';


class ViajeController extends ViajeModel

{

    public function verVistaInsert()
    {
        require '../vista/viajes/viajes.php';
    }
      public function insertar($lugar, $fecha, $hora, $precio)
    {
        $this->lugar = $lugar;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->precio = $precio;
 
        $this->insert();

    }
    public function verVistaList()
    {
        $objetoViaje = $this->select();
        require '../vista/viajes/lista.php';
        
    }

    public function verVistaV($id)
    {
        $this->id = $id;
        $objetoViaje = $this->select();
        require '../vista/viajes/ver.php';
        
    }

    public function eliminar($id)
    {
        $this->id = $id;
        $this->delete();
        $this->redirect();
    }

    public function verVistaUpdate($id)
    {
        $this->id = $id;
        $objetoViaje = $this->select();
        require '../vista/viajes/actualizar.php';
    }
    
    public function actualizar($id, $lugar, $fecha, $hora, $precio)
    {
        $this->id = $id;      
        $this->lugar = $lugar;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->precio = $precio;
        $this->update();
        $this->redirect();
    }


    public function redirect()
    {
        header("location: viajeController.php?accion=vista");
    }
}



if (isset($_GET['accion']) && $_GET['accion'] == 'insert') {
    $ic = new ViajeController();
    $ic->verVistaInsert();
}


if (isset($_POST['accion']) && $_POST['accion'] == 'insert') {
    $instancia = new ViajeController();
    $instancia->insertar($_POST['lugar'], $_POST['fecha'], $_POST['hora'], $_POST['precio']);
}


if (isset($_GET['accion']) && $_GET['accion'] == 'vista') {
    $ic = new ViajeController();
    $ic->verVistaList();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'vistaViaje') {
    $ic = new ViajeController();
    $ic->verVistaV($_GET['id']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'delete') {
    $ic = new ViajeController();
    $ic->eliminar($_GET['id']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'update') {
    $ic = new ViajeController();
    $ic->verVistaUpdate($_GET['id']);
}

if (isset($_POST['accion']) && $_POST['accion'] == 'update') {
    $ic = new ViajeController();
    $ic->actualizar($_POST['id'], $_POST['lugar'], $_POST['fecha'], $_POST['hora'], $_POST['precio']);
}