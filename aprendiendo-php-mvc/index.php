<h1 style="color:darkslategray">Bienvenido a mi wep con MVC</h1>

<?php

require_once 'autoload.php';

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    echo "La página que buscas no existe por que no existe el controller";
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La página que buscas no existe por que no existe el action";
    }

} else {
    echo "La página que buscas no existe";

}