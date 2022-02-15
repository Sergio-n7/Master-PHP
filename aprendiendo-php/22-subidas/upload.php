<?php

$archivo = $_FILES['archivo']; #es el nombre que hemos puesto en el input

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/git") {

    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre); #mueve el archivo subido el que indiques. tmp_name es el archivo temporal que se crea al subir
    header("Refresh: 5; URL=index.php"); # se espera 5 segundo y se redirecciona
    echo "<h1>Imagen subida correctamente</h1>";

} else {
    header("Refresh: 5; URL=index.php"); # se espera 5 segundo y se redirecciona
    echo "<h1>Sube una imagen con un formato correcto...</h1>";
}
/*
echo '<pre>';
var_dump($archivo);
echo '</pre>';
die();*/