<?php

$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad']; # Hay que catearlo a numero , si no devuelve string
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //Validaciones php backend
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) { #preg_match es como pattern en html
    $error = 'nombre';
    }
    if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
        $error = 'apellidos';
    }
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
    if (empty($pass) || strlen($pass) < 5) {
        $error = 'password';
    }

    /*
echo "<pre>";
var_dump($_POST);
echo "</pre>", "<hr>";
echo "<pre>";
var_dump($error);
echo "</pre>";
die();
 */

} else {
    $error = 'faltan_valores';
}
if ($error != 'ok') {
    header("Location:index.php?error=$error"); #hacemos redirección y ademas mostramos el error

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios PHP</title>
</head>

<body>

</body>
<?php if ($error == 'ok'): ?>
<h1>Datos validados correctamente</h1>
<p><?=$nombre?></p>
<p><?=$apellidos?></p>
<p><?=$edad?></p>
<p><?=$email?></p>
<?php endif;?>

</html>