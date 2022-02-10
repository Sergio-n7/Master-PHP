<?php

$cantantes = ['Sam Smith', 'Shakira', 'JL', 'Adele', 'Purple disco machine'];
$numeros = [5, 6, 3, 2, 1, 5, 6];

//ordenar
asort($cantantes); //Ordena alfabéticamente
arsort($cantantes); #Ordena de la z-a
sort($numeros); #Ordena también numéricamente
var_dump($numeros);
echo '<br>';

//Añadir elementos a la Array
$cantantes[] = 'Juanes'; #Añade el elemento al final del Array solo con corchetes
array_push($cantantes, 'Sergio Dalma'); #Añade el elemento al final, se indica la variable y el elemento

//Eleminar elementos Array
array_pop($cantantes); # Quita el último elemento de una array
unset($cantantes[2]); # Quita el indice indicado entre corchetes

//Aleatorio
$indice = array_rand($cantantes); # Si hicieramos un echo aquí tendríamos el índice random
echo $cantantes[$indice]; # imprime el elemento random
echo '<br>';

//Darle la vuelta a un Array
var_dump(array_reverse($numeros));
echo '<br>';

//Buscar dentro de un Array
$resultado = array_search('Sam Smith', $cantantes);
var_dump($resultado);
echo '<br>';

//Contar número de elementos
echo sizeof($cantantes);
echo '<br>';
print(count($cantantes)); # Print es igual que echo pero con echo podemos imprimir varias variables a la vez
echo '<br>';