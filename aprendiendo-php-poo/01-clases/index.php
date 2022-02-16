<?php

//Programación orientada a objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con características parecidas)
class Coche
{

    //Atributos o propiedades (variables)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    //Métodos, son acciones que hace el objeto (antes funciones)
    public function getColor()
    {
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

} #Fin definición clase

//Crear un objeto / instanciar la clase

$coche = new Coche();

//Usar los métodos
echo $coche->getVelocidad();
echo '<br>';

$coche->setColor("Amarillo");
echo "El color del coche es: " . $coche->getColor() . '<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: " . $coche->getVelocidad();

$coche2 = new Coche();
$coche->setColor("Verde");
$coche2->setModelo("Avenger");

var_dump($coche);
var_dump($coche2);