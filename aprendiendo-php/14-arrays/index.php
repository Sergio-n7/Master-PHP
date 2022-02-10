<?php

/*
ARRAYS
colección o conjunto de datos/valores, bajo un único nombre.
Para acceder a esos valores podemos usar un índice numérico o alfanumérico
 */

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
var_dump($peliculas);

//Array asociativo
$personas = [ //podemos hacer una array con índices de la siguiente manera. se definen con corchetes o con array()
    'nombre' => 'Sergio',
    'apellidos' => 'Salguero Flor',
    'profesión' => 'programador',
];
echo '<br>';
var_dump($personas['apellidos']); //Nos dará el índice apellidos solamente

echo '<br>';

echo $peliculas[1];
echo '<br>';

$cantantes = ['Sam Smith', 'Shakira', 'JL']; //tambien se puede definir una array con corchetes en vez de poner el nombre array
echo $cantantes[0];
echo '<br>';
var_dump($cantantes);
echo '<hr>';

//Recorrer Array con FOR
echo "<h1>Listado de películas</h1>";

echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) { //count funciona como el .length de JS
    echo '<li>' . $peliculas[$i] . '</li>';
}
echo '</ul>';

//Recorrer con Foreach (loop especial para recorrer arrays)
echo '<h1>Listado de cantantes</h1>';
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo '<li>' . $cantante . '</li>';
}
echo '</ul>';
echo '<hr>';

//Arrays multidimensionales (un array con array dentro)

$contactos = array(
    array(
        'nombre' => 'Javier',
        'apellidos' => 'Giron',
    ),
    array(
        'nombre' => 'Andrés',
        'apellidos' => 'Morgenthaler',
    ), array(
        'nombre' => 'Mari Carmen',
        'apellidos' => 'Flor',
    ),
);
var_dump($contactos);
echo '<br>';

echo strtoupper($contactos[1]['apellidos']); //asi accedemos a las inner arrays y además lo converitmos en mayúsculas
echo '<br>';

//para recorrer una array multidimensional usamos foreach
foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre'] . '<br>';
}