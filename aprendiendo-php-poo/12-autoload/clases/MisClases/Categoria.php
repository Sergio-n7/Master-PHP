<?php

//Namespaces: hace un paquete de clases
namespace MisClases;

class Categoria
{

    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = "Acción";
        $this->descripcion = "Categoría enfocada a las reviews de vieojuegos de acción.";
    }
}