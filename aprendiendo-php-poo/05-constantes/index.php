<?php

class Usuario
{
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

}

//La constante se puede llamar sin instancia de objeto (estatica)
echo Usuario::URL_COMPLETA;
echo '<hr>';
$usuario = new Usuario();
echo $usuario::URL_COMPLETA; #las constantes las llamas :: no con -> (son estaticas)
var_dump($usuario);