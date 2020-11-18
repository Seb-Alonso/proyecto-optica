<?php

namespace models;

use PDOException;

class Conexion
{
    public static $user="u6duba2xflevr0a4";
    public static $pass="cjPmn260JYiYzg8UGOrS";
    public static $URL="mysql://u6duba2xflevr0a4:cjPmn260JYiYzg8UGOrS@bruxgwp3u4mqryubz2ic-mysql.services.clever-cloud.com:3306/bruxgwp3u4mqryubz2ic";

    public static function conector(){
        try{
            return new \PDO(Conexion::$URL,Conexion::$user,Conexion::$pass);
        }catch(PDOException $e){
            return null;
        }
    }
}