<?php

/*
SESIÓN: almacenar y persistir datos del usuario mientras navega en un sitio web
hasta que cierra sesión o navegador. Son muy seguras.
 */

//iniciar sesión
session_start();

//variable local
$variable_normal = "Soy una cadena de texto";

//variable de session
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";

echo $variable_normal . '<br>', $_SESSION['variable_persistente'];