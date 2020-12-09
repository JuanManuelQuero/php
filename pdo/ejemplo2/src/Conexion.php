<?php

namespace Clases;

use PDO;
use PDOException;

class Conexion
{
    protected static $conexion;

    public function __construct()
    {
        if (self::$conexion == null) {
            self::crearConexion();
        }
    }

    private static function crearConexion()
    {
        $para = parse_ini_file("../config.ini");
        $user = $para["usuario"];
        $pass = $para["pass"];
        $bbdd = $para["bbdd"];
        //Creamos le dsn
        $dsn = "mysql:host=localhost;dbname=$bbdd;charset=utf8mb4";
        try {
            self::$conexion = new PDO($dsn, $user, $pass);
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex) {
            die("Error al conectar a la BBDD" .$ex->getMessage());
        }
    }
}
