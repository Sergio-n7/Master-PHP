<?php

/*
Ejercicio 3. Programa que compruebe si una variable esta vacía y si está vacía rellenarla con texto en
minúsculas y mostrarlo en mayúsculas y negrita.
 */

$texto = "";
if (empty($texto)) {
    $texto = "Hola yo soy el relleno de la variable texto";
    $textoMayus = strtoupper($texto);
    echo "<strong>$textoMayus</strong>";
} else {
    echo "La variable tiene este contenido dentro: " . $texto;
}