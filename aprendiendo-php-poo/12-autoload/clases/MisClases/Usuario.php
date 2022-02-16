<?php

//Namespaces: hace un paquete de clases
namespace PanelAdministrador;

class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Sergio Salguero";
        $this->email = "test@mail.com";
    }
}