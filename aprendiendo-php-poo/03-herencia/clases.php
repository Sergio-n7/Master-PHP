<?php

//HERENCIA: posibilidad de compartir atributos y métodos entre clases

class Persona
{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getName()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function geAltura()
    {
        return $this->altura;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setName($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function hablar()
    {
        return "Estoy hablando";
    }
    public function caminar()
    {
        return "Estoy caminando";
    }
}

class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML, CSS, PHP";
        $this->experienciaProgramador = 10;
    }

    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programar()
    {
        return "Soy programador";
    }

    public function repararOrdenadores()
    {
        return "Reparar Ordenadores";
    }

    public function hacerOfimatica()
    {
        return "Estoy escribiendo en word";
    }
}

class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent::__construct(); #Hereda los valores del constructor del parent
        $this->auditarRedes = "experto";
        $this->experienciaRedes = 5;
    }

    public function auditoria()
    {
        return "Estoy auditando una red";
    }
}