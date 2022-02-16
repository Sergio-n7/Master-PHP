<?php

//Programación orientada a objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con características parecidas)

class Coche
{

    //Atributos o propiedades (variables) Una buena práctica es definirlas y asignar valores en el constructor

    //PUBLIC: Podemos acceder a el desde cualquie lugar.Dentro y fuera de la clase
    public $color;

    //PROTECTED: Podemos acceder desde la clase que loas define y desde clases que hereden
    protected $marca;

    //PRIVATE: únicamente se puede acceder desde esta clase
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;

    //Creamos constructor (una buena practica es asignar los valores en el constructor)
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
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

    public function mostrarInformacion(Coche $miObjeto) #Obligamos que sea solo el objeto Coche

    {
        if (is_object($miObjeto)) {
            $informacion = "<h1>Información del Coche</h1>";
            $informacion .= "Color: " . $miObjeto->color;
            $informacion .= "<br>Modelo: " . $miObjeto->modelo;
            $informacion .= "<br>Velocidad: " . $miObjeto->velocidad;
        } else {
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;

    }

} #Fin definición clase