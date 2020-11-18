<?php

namespace models;
require_once("Conexion.php");

class UsuarioModel
{
    public function crearCliente($data)
    {
        $stm = Conexion::conector()->prepare("INSERT INTO cliente VALUES(:A,:B,:C,:D,:E,:F)");
        $stm->bindParam(":A",$data['rut']);
        $stm->bindParam(":B",$data['nombre']);
        $stm->bindParam(":C",$data['direccion']);
        $stm->bindParam(":D",$data['telefono']);
        $stm->bindParam(":E",$data['fecha']);
        $stm->bindParam(":F",$data['email']);
        return $stm->execute();
    }
    
    public function cargarUsuario($data)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE :A AND :B");
        $stm->bindParam(":A",$data['rut']);
        $stm->bindParam(":B",md5($data['clave']));
        return $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function buscarUsuario($data)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE :A");
        $stm->bindParam(":A",$data['rut']);
        return $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function editarUsuario($data)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE :A");
        $stm->bindParam(":A",$data['rut']);
        return $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}