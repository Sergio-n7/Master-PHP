<?php

class Persona
{

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments)
    {
        $prefix_metodo = substr($name, 0, 3); #devolveria get

        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);

            if (!isset($this->$nombre_metodo)) {
                return "El método $nombre_metodo no existe";

            }
            return $this->$nombre_metodo;
        } else {
        }
    }

}

//De esta manera __call(sintaxis mostrada arriba) podemos llamar a métodos que no existen
$persona = new Persona("Javier", 36, "Frankfurt");
echo "<h1>" . $persona->getNombre() . "</h1>";
echo "<h1>" . $persona->getEdad() . "</h1>";
echo "<h1>" . $persona->getCiudad() . "</h1>";
echo "<h1>" . $persona->getApellidos() . "</h1>";