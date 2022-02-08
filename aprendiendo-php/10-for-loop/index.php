<?php

/*
FOR LOOP

for(variable contador, condición, incremento contador){
bloque de instrucciones
}
 */

//Ejemplo 1 --> quiero que me sume todos los numeros que hay del 1 al 100 y mostrar resultado final
$resultado = 0;
for ($i = 0; $i <= 100; $i++) {
    $resultado += $i;
}
echo "<h1>El resultado es: $resultado</h1>";

echo '<hr>';

//Ejemplo 2 --> tabla de multiplicar. Muy parecido que el while pero mejor práctica.
if (isset($_GET['numero'])) {
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

for ($contador = 1; $contador <= 10; $contador++) {
    //La instrucción break nos permite salir de la ejecución de un bucle
    if ($numero == 45) { //Si el numero es 45 se mostrará el echo siguiente
        echo 'No se pueden mostrar estas operaciones prohibidas.';
        break;
    }
    echo "$numero x $contador = " . ($numero * $contador) . '<br>';
}