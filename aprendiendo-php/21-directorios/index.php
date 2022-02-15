<?php

//crear directorio o carpeta
if (!is_dir('mi_carpeta')) { #comprueba si existe la carpeta
mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta'); #0777 todos los permisos, mkdir crea una carpeta
} else {
        echo 'La carpeta ya existe';
    }

//Borrar carpeta
    rmdir('mi_carpeta');
    echo '<hr>';

//Ver el contenido de una carpeta
    echo '<h1>Contenido de la carpeta</h1>';
    if ($gestor = opendir('./mi_carpeta')) {
        while (false !== ($archivo == readdir($gestor))) {
            if ($archivo != '.' && $archivo != '..') {
                echo $archivo . '<br>';
            }
        }
    }