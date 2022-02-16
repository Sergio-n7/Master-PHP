<?php

//Una excepción es un error o fallo
//try y catch sirven para capturar errores en códigos susceptible a errores

try {

    if (isset($_GET['id'])) {
        echo "<h1>El parámetro es: {$_GET['id']}</h1>";
    } else {
        throw new Exception("Faltan parámetros por la url");
    }

} catch (Exception $e) {
    echo "Ha habido un error: " . $e->getMessage();
}