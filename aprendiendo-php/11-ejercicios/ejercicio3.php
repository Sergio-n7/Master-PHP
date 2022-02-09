<?php
/*
Ejercicio 3. Escribir un programa  que imprima por pantalla los cuadrados(número multiplicado por si mismo)
de los 40 primeros número naturales.
PD: Utilizar bucle while y for.
 */

$contador = 0;
while ($contador <= 40) {
    $cuadrados = $contador * $contador;
    echo "El cuadrado de $contador es $cuadrados. <br>";
    $contador++;
}

echo '<hr>';

for ($i = 0; $i <= 40; $i++) {
    $numeros_cuadrados = $i * $i;
    echo "El cuadrado de $i es $numeros_cuadrados. <br>";
}