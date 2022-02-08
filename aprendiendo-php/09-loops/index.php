<?php
/*
While loop -- Estructura de control que itera o repite la ejecución de una serie
de instrucciones tantas veces como sea necesario, en base a una condición.

while (condición){
bloque de instrucciones
}
 */

//ejemplo 1
$numero = 0;
while ($numero <= 50) {
    echo "$numero";
    if ($numero != 50) {
        echo ', ';
    }
    $numero++;
}

echo '<hr>';

//ejemplo 2 --> muestra la tabla de multiplicar del número que añadas por url en método GET
if (isset($_GET['numero'])) { //isset comprueba si existe el indice , en este caso 'numero'
    $numero = (int) $_GET['numero']; //necesito hacer un casting del dato si quiero que el get sea un numero, si no será por defecto string(get introducido directamente en el buscador)
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . '<br>';
    $contador++;
}

echo '<hr>';

/*
DO WHILE LOOP --> igual que el loop while pero la condición se evalua al final de las instrucciones, si no se
cumple solo se ejecuta 1 vez.

do{
//bloque de instrucciones
} while(condicion);
 */

//Ejemplo --> comprobar edad
$edad = 18;
$contador = 1;

do {
    echo "Tienes acceso al local privado $contador <br>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);