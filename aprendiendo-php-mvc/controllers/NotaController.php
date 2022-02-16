<?php

class NotaController
{

    public function listar()
    {
        //Modelo
        require_once 'models/nota.php';

        //Lógica
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Yo soy contenido de nota");

        //Vista
        require_once 'views/nota/listar.php';
    }

    public function crear()
    {

    }

    public function borrar()
    {

    }
}