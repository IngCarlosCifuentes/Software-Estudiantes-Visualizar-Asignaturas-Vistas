<?php 


class Conexion{
    public static function conectar()
    {
        $conectar = new PDO("mysql:host=localhost;dbname=practicas","root","");

        $conectar -> exec("set names utf8 ");
        return $conectar;
    }
}