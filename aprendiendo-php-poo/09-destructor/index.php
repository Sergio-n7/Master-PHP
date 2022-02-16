<?php

//El contrario del constructor

class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Sergio Salguero";
        $this->email = "test@mail.com";

        echo "Creando el objeto creada<br>"; #No se debe imprimir nunca desde el constructor
    }

    public function __toString()
    {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct()
    {
        echo "<br>Destruyendo el objeto";
    }

}
$usuario = new Usuario();

echo $usuario;

for ($i = 0; $i < 10; $i++) {
    echo "<br>" . $i . "<br>";
}