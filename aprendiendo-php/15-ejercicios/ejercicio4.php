<?php

/*
Ejercicio 4. Crear un script en php que tenga 4 variable, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje
según el tipo de variable que sea.
 */

$string = "Hola soy string";
$int = 7;
$soyArray = [1, 2, 3, "Javier", 5];
$soyBool = true;

if (is_string($string)) {
    echo "<h1>Soy string</h1>";
}
if (is_int($int)) {
    echo "<h1>Soy int</h1>";
}
if (is_array($soyArray)) {
    echo "<h1>Soy array</h1>";
}
if (is_bool($soyBool)) {
    echo "<h1>Soy bool</h1>";
}