<?php

#redirige a al primer parámetro, hay que implementar las rutas tambien
public function redirigir()
{
    return $this->redirectToRoute('index');
}

#para mejorar el seo 
public function redirigir()
{
    return $this->redirectToRoute('index', array(), 301);
}

#redirigir con data por defecto
public function redirigir()
{
    return $this->redirectToRoute('animales', [
        'nombre' => 'Javier Andres',
        'apellidos' => 'Giron'
    ]);
}
#redirigir a una url externa
public function redirigir(){

    return $this->redirect('www.google.com',200);
}