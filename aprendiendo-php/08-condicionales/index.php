<?php

/*
- OCNDICIONAL IF:

if(condicion) {
instrucciones
} else{
otras instrucciones
}

- OPERADORES DE COMPARACIÓN

== igual (valor)
=== identico (valor y tipo)
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

- OPERADORES LÓGICOS
&&  AND
||  OR
!   NOT
and, or  --> se puede utilizar pero es mejor usar && ||
 */

//Ejemplo 1
$color = "verde";

if ($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'El color no es rojo';
}
echo '<br>';

//Ejemplo 2
$year = 2023;

if ($year < 2022) {
    echo 'Es un año anterior a 2022';
} else {
    echo 'Es un año posterior 2022';
}
echo '<br>';

//Ejemplo 3
$nombre = 'Sergio Salguero';
$ciudad = 'Frankfurt';
$continente = 'Europa';
$edad = 40;
$moyoria_edad = 18;

if ($edad >= $moyoria_edad) {
    echo "<h1>$nombre es mayor de edad.</h1>";
    if ($continente == 'Europa') {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo 'No es de Europa';
    }
} else {
    echo "$nombre  no es mayor de edad.";
}

echo '<hr>';

//Ejemplo 4
$dia = 1;

if ($dia <= 1) {
    echo 'Es lunes';
} elseif ($dia <= 2) {
    echo 'Es martes';
} elseif ($dia == 3) {
    echo 'Es miercoles';
} else {
    echo 'No es ni lunes, ni martes ni miercoles.';
}

echo '<hr>';

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 17;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo 'Está en edad de trabajar.';
} else {
    echo 'No puede trabajar.';
}

echo '<hr>';

//Ejemplo 6
$pais = 'Mexico';

if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
    echo 'En este país se habla español';
} else {
    echo 'En este pais no se habla español.';
}

echo '<hr>';

//SWITCH
$dia = 4;

switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miércoles';
        break;
    default:
        echo 'Es jueves, viernes o fin de semana';
}

echo '<hr>';

//GOTO --> Sirve para saltar algún párrafo de código
goto marca;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

marca:
echo 'Me he saltado 4 echos';