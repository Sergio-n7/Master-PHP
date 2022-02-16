<?php

//INTERFACES: Contrato en el que definimos que métodos y que orden van a tener las clases.

interface Ordenador
{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador#implements añade la inteface y obliga a crear los métodos

{
    public $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }
    public function encender()
    {
        ;
    }
    public function apagar()
    {
        ;
    }
    public function reiniciar()
    {
        ;
    }
    public function desfragmentar()
    {
        ;
    }
    public function detectarUSB()
    {
        ;
    }

}

$macOs = new iMac();
$macOs->setModelo('Macbook PRO 2022');
var_dump($macOs);