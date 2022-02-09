<?php

/*
FUNCIONES: Conjunto de intrucciones que se agrupan (bajo un nombre concreto) para realizar una tarea concreta.

function nombreDeMiFuncion($parametros){
bloque de instrucciones
}
nombreDeMiFuncion($mis_parametros) -->invocacion
 */

//Ejemplo 1 --> funcion que muestre nombres por pantalla

function muestraNombres()
{
    echo 'Sergio Salguero <br>';
    echo 'Javier Giron <br>';
    echo 'Andres Giron <br>';
    echo 'Javier Andres Giron <br>';

}
muestraNombres();

echo '<hr>';

// Ejemplo 2 -> mostrar tabla de multiplicar del parametro

function tabla($numero)
{
    echo "<h3>Tabla de multiplicar del número: $numero</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $tabla = $numero * $i;
        echo "$numero x $i = $tabla <br>";
    }
}
if (isset($_GET['numero'])) {
    tabla($_GET['numero']); // Si queremos recibir el numero por URL
} else {
    echo 'No hay numero para multiplicar, introducelo por la URL.';
}
tabla(4);
tabla(5);

//puedo impromir todas las tablas que quiera de una vez
for ($i = 1; $i <= 5; $i++) {
    tabla($i);
}

echo '<hr>';

//Ejemplo 3. crear calculadora

function calculadora($numero1, $numero2, $negrita = false)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $mult = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if ($negrita) {
        $cadena_texto .= "<h1>";
    }
    $cadena_texto .= "Mi calculadora con los numeros $numero1 y $numero2 es: <br> ";
    $cadena_texto .= "Suma: $suma. Resta: $resta. Multiplicación: $mult y división: $division. ";

    if ($negrita) {
        $cadena_texto .= "</h1>";
    }
    $cadena_texto .= '<hr>';
    return $cadena_texto;

}
echo calculadora(2, 2);
echo calculadora(7, 8);
echo calculadora(4, 5, true);

//Parámetros opcionales son aquellos que ya estan definidos en los argumentos.

//Para buena práctica no deben haber echo en una funcion , se usa return

//Ejemplo 4. -> pasar nombre y apellidos Inner functions

function getNombre($nombre)
{
    $texto = "El nombe es: $nombre";
    return $texto;
}

function getApellidos($apellidos)
{
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveNombre($nombre, $apellidos)
{
    $nombre_completo = getNombre($nombre) . '<br>' . getApellidos($apellidos);
    return $nombre_completo;
}
echo devuelveNombre('Javier', 'Salguero Flor');

//Una buena práctica es que cada funcion haga solo una funcion para que se puedan mantener mucho más faciles