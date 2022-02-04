<?php

/*
TIPOS DE DATOS:
- Entero (int/integer) = 99
- Coma flotante / decimales (float/double) = 3.45
- Cadenas (string) = 'Hola yo soy un string'
- Boolean (bool) = true or false
- null (no lleva contenido)
- Array (coleccion de datos)
- Objects
 */

$numero = 100;
$decimal = 3.45;
$texto = 'Soy un texto';
//para concadenar una string con una variable usamos comillas dobles
$texto = "soy un numero $decimal";
$verdadero = true;

echo gettype($verdadero) . '<br>'; //este metodo indica que tipo es

echo $texto . '<br>';

//Debugging
$mi_nombre[] = 'Sergio Salguero';
$mi_nombre[] = 'Javier Giron';

var_dump($mi_nombre);