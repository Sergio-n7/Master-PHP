<?php

//Permite compartir características entre clases con el fin de no repetir código

require_once 'clases.php';

$persona = new Persona();
#$persona->setName('Sergi');

var_dump($persona);

echo '<hr>';

$informatico = new Informatico(); #Herada las propiedades de Persona
#$informatico->setAltura(1.90);
#echo $informatico->sabeLenguajes("HTML, CSS, JS, PHP");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);