<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="id"> Numero de cliente: </label>
        <p><input type="text" name="id" disabled="disabled" placeholder="#1457-lk" /></p>
        <label for="nombre"> Nombre: </label>
        <p><input type="text" name="nombre" autofocus="autofocus" placeholder="Enter your name..." /></p>

        <label for="nombre">Apellido</label>
        <p><input type="text" name="apellido" /></p>
        <label for="contraseña">Contraseña</label>
        <p><input type="text" name="apellido" minlength="4" maxlength="10" pattern="[A-Z ]+" /></p>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>