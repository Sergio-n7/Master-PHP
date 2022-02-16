<?php

//Estas líneas de texto hacen que el autoload busque todas las clases que hay en el directorio clases
function autoload_classes($class)
{
    include 'clases/' . $class . '.php';
}

spl_autoload_register('autoload_classes'); #Esta funcion busca todas las clases