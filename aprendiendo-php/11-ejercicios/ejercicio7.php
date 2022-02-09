<?php

/*
Ejercicio 7. Hacer un programa que muestre todos los numeros IMPARES entre dos numeros que nos lleguen por la URL($_GET)
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1>Los numeros IMPARES que hay entre $numero1 y $numero2 son: <br>";

    for ($i = $numero1 + 1; $i < $numero2; $i++) {
        if ($i % 2 != 0) {
            echo "<h3>$i</h3><br>";
        }
    }
} else {
    echo '<h2>Introduce los numeros correctamente en la URL.</h2>';
}