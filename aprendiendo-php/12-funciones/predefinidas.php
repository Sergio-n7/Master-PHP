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
echo '<br>';

//Más funciones generales
echo gettype($nombre); //Te informa del tipo de la variable
echo '<br>';

if (is_string($nombre)) { //este tipo de funciones te dicen si la variable es de un tipo u otro
    echo "Esa variable es un String";
}
echo '<br>';

if (isset($edad)) { //Te informa si la variable existe
    echo "La variable existe";
} else {
    echo "La variable no existe";
}
echo '<br>';

$frase = "   mi contenido    ";
var_dump(trim($frase)); //trim limpia los espacios que hay por delante y detrás de una variable
echo '<br>';

$year = 2022;
unset($year); //elemina la variable o indice de array
var_dump($year);
echo '<br>';

$texto = "";
if (empty($texto)) { //Comprueba si la variable esta vacía
    echo "La variable esta vacía";
} else {
    echo "La variable tiene contenido";
}
echo '<br>';

$cadena = "12345";
echo strlen($cadena); //cuenta carácteres de un string
echo '<br>';

$frase = "La vida es bella";
echo strpos($frase, "vida"); //encontrar posición carácter, tiene dos parametros, la variable y la búsqueda
echo '<br>';

$frase = str_replace("vida", "moto", $frase); //Remplazar contenido de un string, 3 argumentos(busqueda, reemplazo, variable en la que se hace la busqueda)
echo $frase;
echo '<br>';

//combertir a mayúsculas o minúsculas
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);