<?php

//TRAIS: nos permite definir una serie de métodos para compartir entre clases

trait Utilidades
{
    public function mostrarNombre()
    {
        echo "<h1> El nombre es " . $this->nombre . "</h1>";
    }
}

class Coche
{
    public $nombre;
    public $marca;

    use Utilidades;
}
class Persona
{
    public $nombre;
    public $apellidos;

    use Utilidades;

}
class VideoJuego
{
    public $nombre;
    public $year;

    use Utilidades;

}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Javier";
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->nombre = "Zelda";
$videoJuego->mostrarNombre();