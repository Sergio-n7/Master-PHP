<?php

class database
{

    public static function conectar()
    {
        $conexion = new mysqli("localhost", "sergi", "", "nota_master");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}