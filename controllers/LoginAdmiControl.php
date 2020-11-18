<?php

namespace controllers;
use models\UsuarioModel as UsuarioModel;
require_once("../models/UsuarioModel.php");

class LoginAdmiControl
{
    public $rut;
    public $clave;

    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->clave = $_POST['clave'];
    }

    public function IniciarSeccion()
    {
        session_start();
        if($this->rut == "" || $this->clave == ""){
            $_SESSION['error']="Complete datos requeridos";
            header("Location: ../indexAdmi.php");
            return;
        }
        $modelo = new UsuarioModel();
        $data = ["rut"=>$this->rut,"clave"=>$this->clave];
        $array = $modelo->cargarUsuario($data);
        if(count($array) == 0){
            $_SESSION['error'] = "Rut o Clave no se encuentran";
            header("Location: ../indexAdmi.php");
            return;
        }

        $_SESSION['usuario'] = $array[0];
        header("Location: ../indexAdmi.php");
    }
}
$obj = new LoginAdmiControl();
$obj->IniciarSeccion();