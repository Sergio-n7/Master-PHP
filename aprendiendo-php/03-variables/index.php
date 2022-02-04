<?php

//las variables se definen con $
$mi_primera_variable = "Hola Mundo desde una variable";
$numero = 44;
$numero = 77;

echo "<h1>" . $mi_primera_variable . "</h1>";
echo $numero . '<br>';

$numero = 120;

//a diferencia de js en php no hay hoisting
echo $numero;