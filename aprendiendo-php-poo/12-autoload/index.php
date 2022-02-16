<?php

//usamos el autoload

//autoload nos hace un includes automáticamente

//Así sería manual clase por clase
/*
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';

$usuario = new Usuario();
$categoria = new Categoria();
$entrada = new Entrada();
echo $usuario->nombre . '<br>';
echo $usuario->email . '<hr>';

echo $categoria->nombre . '<br>';
echo $categoria->descripcion . '<hr>';

echo $entrada->titulo . '<br>';
echo $entrada->fecha . '<hr>';

var_dump($usuario);
var_dump($categoria);
var_dump($entrada);

//Espacios de nombres y paquetes

//Use es la palabra reservada para espacios
 */

include 'autoload.php';

use MisClases\Categoria;
use MisClases\Entrada;
use MisClases\Usuario;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal
{

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();

    }

    public function informacio()
    {
        echo __FILE__; #con __hay muchas constantes que te dan información sobre las clases
    }
}

//Objeto principal
$principal = new Principal();
var_dump($principal->usuario);

//Objeto otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);

//Comprobar si existe una clase
$clase = class_exists('MisClases\Usuario');

if ($clase) {
    echo "<h1>La clase SI existe</h1>";
} else {
    echo "<h1>La clase NO existe</h1>";
}

//Como comprobar si existe un método
$metodos = get_class_methods($principal);