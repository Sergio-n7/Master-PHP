<?php

//Una clase abstracta es una clase que no se puede instanciar (crear objetos) pero si utilizar para heredar
abstract class Ordenador
{

    public $encendido;

    abstract public function encender(); #el método abstracto no se define solo se anuncia

    public function apagar()
    {
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador
{
    public $software;

    public function arrancarSoftware()
    {
        $this->software = true;
    }
    public function encender() #Hay que definir el metodo en el child obligatoriamente

    {
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->apagar();
var_dump($ordenador);

//Clase abstracte obliga que todos los childs tengan ese método