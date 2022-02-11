<?php

if ($_COOKIE['micookie']) {
    unset($_COOKIE['micookie']); # A diferencia de las sesiones, para borrar una cookie hay que caducarla
    setcookie('micookie', '', time() - 100); #restando el tiempo caducamos la cookie y la borra por completo
}

header('Location:ver_cookies.php'); #Una vez borras la cookie te redirecciona al archivo Location:...