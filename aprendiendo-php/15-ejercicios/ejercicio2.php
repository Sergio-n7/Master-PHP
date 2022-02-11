<?php

/*
Ejercicio 2. Escribir un programacon PHP que añada valores a un array
mientras que su longitud sea menor de 120 y luego mostrarlo por pantalla.
 */

$colleccion = [];

for ($i = 0; $i < 120; $i++) {
    array_push($colleccion, "elemento-" . $i);
}
echo '<pre>';
var_dump($colleccion);
echo '</pre>', '<hr>', $colleccion[45];