<?php

/*
COOKIE: es un fichero que se almacena en el ordenador del usuario que visita la web
con el fin de recordar datos o rastrear cierta informacion y comportamiento del mismo
en la web.
 */

//Crear cookie
# setcookie("nombre", "valor; que solo puede ser texto", caducidad, ruta, dominio);

//Cookie básica
setcookie("micookie", "valor de mi galleta");

//Cookie con experación
setcookie("ayear", "valor de mi cookie de 365 días", time() + (60 * 60 * 24 * 365)); # caducará en un año

header('Location:ver_cookies.php');