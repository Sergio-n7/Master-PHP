<?php

//Operadores aritméticos

$numero1 = 200;
$numero2 = 33;

echo 'Suma: ' . ($numero1 + $numero2) . '<br/>';
echo 'Resta: ' . ($numvero1 - $numvero2) . '<br>';
echo 'Multiplicación: ' . ($numero1 * $numero2) . '<br>';
echo 'División: ' . floor($numero1 / $numero2) . '<br>';
echo 'Resto o Módulo: ' . ($numero1 % $numero2) . '<br>';

//Operadores incremento y decremento

$year = 2022;
$year++; //Incrementa un año o $year = $year + 1;

$year--; //Decrementa un año o $year = $year - 1;

++$year; //Pre-incremento o $year = 1 + $year;

--$year; //Pre-decremento o $year = 1 - $year;

echo "<h1>$year</h1>";

//Operadores de asignación

$edad = 40;

echo $edad . '<br>';
echo ($edad += 5) . '<br>'; // $edad = $edad + 5;
var_dump($edad) . '<br/>'; //muestra el último valor de la variable
echo ($edad -= 5) . '<br>'; // $edad = $edad - 5;
echo ($edad /= 5) . '<br>'; // $edad = $edad / 5;