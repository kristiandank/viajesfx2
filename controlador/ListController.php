<?php

require '../modelo/ListModel.php';

class ListController extends ListModel
{
    public function verVistaInsert()
    {
        require '../vista/listas/nuevoCliente.php';
    }


    public function insertarCliente($nombres, $telefono, $direccion, $origen)
    {
        
        $this->nombres = $nombres;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->origen = $origen; 
        $this->insert();
        $this->redirect();

    }

    public function verVistaList()
    {
        $objetoCliente = $this->select();
        require '../vista/listas/listaClientes.php';
        
    }

    public function verVistaCliente($id)
    {
        $this->id = $id;
        $objetoCliente = $this->selectCliente();
        require '../vista/listas/verCliente.php';
        
    }

    public function eliminarCliente($id)
    {
        $this->id = $id;
        $this->delete();
        $this->redirect();
    }

    public function verVistaUpdate($id)
    {
        $this->id = $id;
        $objetoCliente = $this->selectCliente();
        require '../vista/listas/actualizarCliente.php';
    }
    
    public function actualizarCliente($id, $nombres, $telefono, $direccion, $origen)
    {
        $this->id = $id;      
        $this->nombres = $nombres;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->origen = $origen;
        $this->update();
        $this->redirect();
    }


    public function redirect()
    {
        header("location: ListController.php?accion=vista");
    }
}

if (isset($_GET['accion']) && $_GET['accion'] == 'insert') {
    $ic = new ListController();
    $ic->verVistaInsert();
}

if (isset($_POST['accion']) && $_POST['accion'] == 'insert') {
    $ic = new ListController();
    $ic->insertarCliente($_POST['nombres'], $_POST['telefono'], $_POST['direccion'], $_POST['origen']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'vista') {
    $ic = new ListController();
    $ic->verVistaList();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'vistaCliente') {
    $ic = new ListController();
    $ic->verVistaCliente($_GET['id']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'delete') {
    $ic = new ListController();
    $ic->eliminarCliente($_GET['id']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'update') {
    $ic = new ListController();
    $ic->verVistaUpdate($_GET['id']);
}

if (isset($_POST['accion']) && $_POST['accion'] == 'update') {
    $ic = new ListController();
    $ic->actualizarCliente($_POST['id'], $_POST['nombres'], $_POST['telefono'], $_POST['direccion'], $_POST['origen']);
}
