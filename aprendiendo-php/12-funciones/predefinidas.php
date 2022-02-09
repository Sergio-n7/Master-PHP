<?php

//Debugging
$nombre = 'Sergio Salguero';
var_dump($nombre); //Te da la información del tipo y longitud de una variable.

echo '<br>';

//Fechas
echo date('d-m-y'); //te muestra la fecha actual, puedes indicar el formato que quieras segun documentación
echo '<br>';

echo time(); //te indica el tiempo exacto
echo '<br>';

//Matemáticas
echo "Raiz cuadrada de 10: " . sqrt(10); //te calcula la raíz cuadrada
echo '<br>';

echo "Número aleatorio entre 10 y 40: " . rand(10, 40); //crea números aleatorios, puedes dar dos parametros(opcionales)
echo '<br>';

echo "Número pi: " . pi(); //Te da el valor del número pi
echo '<br>';

echo "Redondear: " . round(6.2154532558, 2); //puedes añadir un segundo parámetro para indicar los decimales que quieres