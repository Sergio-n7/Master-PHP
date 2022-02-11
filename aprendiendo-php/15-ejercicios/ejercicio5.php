<?php

/*
Ejercicio 5. Crear un Array con el contenido de la siguiente tabla:
ACCION    AVENTURA    DEPORTES
GTA       ASSASINS    FIFA
COD       CRASH       PES
PUG       PRINCE      MOTO GP

Cada columna debe ir en un fichero separado
 */

$tabla = array(
    "ACCION" => array("GTA", "COD", "PUG"),
    "AVENTURA" => array("ASSASINS", "CRASH", "PRINCE"),
    "DEPORTES" => array("FIFA", "PES", "MOTO GP"),
);
echo '<pre>', var_dump($tabla), '</pre>';

$categorias = array_keys($tabla); # esto crea un índice a acada categoría
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'?>
    <?php require_once 'ejercicio5/primera.php'?>
    <?php require_once 'ejercicio5/segunda.php'?>
    <?php require_once 'ejercicio5/tercera.php'?>
</table>