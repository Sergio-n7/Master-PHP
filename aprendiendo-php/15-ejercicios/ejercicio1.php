<?php

/*
Ejercicio 1. Hacer un programa PHP que tenga un array con 8 números enteros
y que haga lo siguiente:
- Recorrerlo y mostrartlo
- Ordenarlo y mostrarlo
- Buscar algún elemento
 */

//FUNCIONES
function mostrarArray($numeros)
{
    $resultado = "";
    foreach ($numeros as $numero) {
        $resultado .= $numero . '<br>';
    }
    return $resultado;
}

# Crear array
$numeros = [5, 63, 8, 9, 5, 4, 77];

# Recorrer y mostrar
echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);
echo '<hr>';

# Ordenar y mostrar
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
echo mostrarArray($numeros);
echo '<hr>';

# Numero total de elementos
echo "<h1>Número total de elementos</h1>";
echo count($numeros);
echo '<hr>';

# Buscar y mostrar un elemento
if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];
    echo "<h1>Buscar y mostrar el número $busqueda</h1>";

    $search = array_search($busqueda, $numeros);

    if (!empty($search)) {
        echo "<h4>El número buscado es $busqueda y existe en el array en el índice: $search</h4>";
    } else {
        echo "<h4>El número $busqueda no existe en el array</h4>";
    }
}