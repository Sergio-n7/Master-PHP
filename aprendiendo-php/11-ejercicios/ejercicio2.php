<?php

/*
Ejercicio 2. Escribir un script en PHP que nos muestre por pantalla todos los números pares que hay del 1 al 100.
 */

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0 && $i != 100) {
        echo "$i ,";
    } elseif ($i == 100) {
        echo $i;
    }
}