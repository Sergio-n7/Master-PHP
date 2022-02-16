<?php

//Namespaces: hace un paquete de clases
namespace MisClases;

class Entrada
{

    public $titulo;
    public $fecha;

    public function __construct()
    {
        $this->titulo = "Review de Zelda";
        $this->fecha = "16 de febrero de 2022";
    }
}