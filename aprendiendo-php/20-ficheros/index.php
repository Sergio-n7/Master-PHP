<?php

//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+"); #r es el permiso de solo lectura, a+ te da permiso de leer y escribir

//Leer contenido
#Para poder mostrar todo el contenido y no solo una linea hay que hacer un while loop

while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
}

//Escribir en un archivo
fwrite($archivo, "Soy un texto metido desde php.");

//Cerrar archivo
fclose($archivo);

//Copiar un fichero
copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');

//Renombrar un fichero
rename('fichero_copiado.txt', 'este_nombre_ha_sido_cambiado.txt');

//Eliminar Archivo
unlink('este_nombre_ha_sido_cambiado.txt') or die('Error al borrar');

//Comprobar si existe el fichero
if (file_exists('fichero_texto1.txt')) {
    echo 'El archivo existe';
} else {
    echo 'El archivo no existe';
}