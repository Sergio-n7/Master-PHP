<?php
require_once 'coche.php'; #invocamos la clase coche

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Mini", "One", 150, 300, 5);
$coche2 = new Coche("Negro", "Mercedes", "Clase-A", 150, 300, 8);
$coche3 = new Coche("Blanco", "Audi", "A6", 200, 400, 5);

/*
var_dump($coche->getColor());
var_dump($coche1);
var_dump($coche2);
var_dump($coche3);
 */

echo '<hr>';

//Pruebas de comportamiento de los tipos public, protected y private
$coche->color = "Rosa"; #Funciona perfectamente porque es public
$coche->setMarca("Audi"); #Al ser protected solo funciona si tenemos una función pública como setMarca()
$coche->setModelo("A3"); #Al ser privada solo funciona si tenemos la función pública setModelo()

#var_dump($coche->getModelo()); #Al ser una función pública podemo ver un atributo private

//También funciona para los métodos

//Mostrar información
echo $coche->mostrarInformacion($coche2);