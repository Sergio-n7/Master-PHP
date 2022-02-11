<?php

/*
Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable
superglobal, es un array asociativo.

Puedes ver las cookies de la páginas web en inspeccionar => aplicación => cookies a la izquierda
 */

if (isset($_COOKIE['micookie'])) {
    echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
} else {
    echo 'No existe cookie.';
}

if (isset($_COOKIE['ayear'])) {
    echo "<h1>" . $_COOKIE['ayear'] . "</h1>";
} else {
    echo 'No existe cookie.';
}
?>
<a href="crear_cookies.php">crear las cookies</a>
<a href="borrar_cookies.php">Borrar cookies</a>