<?php

//una constante es un contenedor de información que no puede variar

define('nombre', 'Sergio Salguero');
define('web', 'portfolio.com');

echo nombre; //no hace falta poner el $ para llamarla
echo '<h1>' . web . nombre . '</h1>';

//Variables
$web = "victorrobleswe.es/academy";

echo '<h1>' . $web . '</h1>';

//Constantes predefinidas

echo PHP_VERSION . '<br>';
echo __FILE__;