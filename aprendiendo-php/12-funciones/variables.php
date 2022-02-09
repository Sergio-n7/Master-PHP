<?php

/*
Variables locales:Son las que se definen dentro de una función y no pueden ser usadas fuera
de la función, solo estan disponibles dentro. A no ser que hagamos un return.

Variables Globales: Son las que se declaran fuera de una función y estan disponibles
dentro y fuera de las funciones.
 */

//Variables globales
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo()
{
    global $frase; // a diferencia de JS, hay que definir si la variable es global, si no no se puede usar
    echo "<h1>$frase</h1>";

    $year = 2022; // esta es una variable local y necesitamos hacer return para imprimirla
    echo "<h2>$year</h2>";
    return $year;
}
echo holaMundo();

echo '<hr>';

//Funciones variables -> hacemos que una función se combierta en variable

function buenasDias()
{
    return "Hola buenos días.";
}

function buenasTardes()
{
    return "Hey que tal la comida?";
}

function buenasNoches()
{
    return "Te vas a dormir ya? Buenas noches!";
}

$horario = "buenasNoches"; //ahora la variable $horario es la función buenasNoches
echo $horario();

echo '<hr>';
$horario = $_GET['horario']; //podemos pedir por consola la parte concadenada

$miFuncion = "buenas" . $horario; //si creamos una variable podemos concadenar la función
echo $miFuncion();