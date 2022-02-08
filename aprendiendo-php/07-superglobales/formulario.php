<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<!-- Los métodos GET y POST son los que tenemos para recoger información de un formulario-->

<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
        <!-- action indica donde se reciben los valores de method
    Si en vez de GET ponemos POST, el método de muestra de valores es mucho más seguro ya que solo se ve en pantalla
    y no en el buscador-->
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
        </p>
        <input type="submit" value="Enviar datos" />

    </form>
</body>

</html>