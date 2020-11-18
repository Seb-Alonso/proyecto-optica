<?php

namespace controllers;
use models\UsuarioModel as UsuarioModel;
require_once("../models/UsuarioModel.php");

class InsertarControl
{
    public $rut;
    public $nombre;
    public $direccion;
    public $telefono;
    public $fecha;
    public $email;

    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->nombre = $_POST['nombre'];
        $this->direccion = $_POST['direccion'];
        $this->telefono = $_POST['telefono'];
        $this->fecha = $_POST['fecha'];
        $this->email = $_POST['email'];
    }

    public function insertarCliente()
    {
        session_start();

        if($this->rut == "" || $this->nombre == "" ||$this->direccion == "" || $this->telefono == "" || $this->fecha == "" || $this->email == ""){
            $_SESSION['error'] = "campos vacios";
            header("Location:../index.php");
            return;
        }
        $modelo = new UsuarioModel();
        $data = ["rut"=>$this->rut,"nombre"=>$this->nombre,"direccion"=>$this->direccion,"telefono"=>$this->telefono,"fecha"=>$this->fecha,"email"=>$this->email];

        $count = $modelo->crearCliente($data);
        if(!$count == 1){
            $_SESSION['error'] = "error al crear nuevo cliente";
            header("Location:../index.php");
        }

    }
}
$obj = new InsertarControl;
$obj->insertarCliente();