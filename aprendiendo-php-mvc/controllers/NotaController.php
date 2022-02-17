<?php

class NotaController
{

    public function listar()
    {
        //Modelo
        require_once 'models/nota.php';

        //Lógica
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');

        //Vista
        require_once 'views/nota/listar.php';
    }

    public function crear()
    {
//Modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde MVC");
        $nota->setDescripcion("Esta descripción esta escrita desde el MVC");
        $nota->guardar(); #Este método guarda la nota despues de crearla

        //echo $nota->db->error; Para comprobar que error me da
        //die();

        header("Location: index.php?controller=Nota&action=listar"); #cuando creas la nota te redirige a listar
    }

    public function borrar()
    {

    }
}