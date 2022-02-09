<?php

/*
Ejercicio 4. Recoger 2 números por la url(GET) y hacer todas las
operaciones básicas de una calculadora(suma, resta, mult., y división) de esos
dos numeros.
 */
if (isset($_GET['numero1']) && isset($_GET['numero2'])) { //isset comprueba si la variable esta definida
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $mult = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    echo "La suma es: $suma, la resta es: $resta, La multiplicación es: $mult y la división es: $division.";
} else {
    echo 'Introduce correctamente los valores en la URL';
}