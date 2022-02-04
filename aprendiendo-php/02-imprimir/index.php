<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>

<body>
    <h1>Master en PHP</h1>
    <?="Esto es un atajo de echo"?>
    <?php
//esto sirve para hacer un comentario
echo "<h3>Listado de videojuegos:</h3>";
/*
Esto es un
comentario
multilinea
 */
echo "<ul>"
    . "<li>GTA</li>"
    . "<li>Fifa</li>"
    . "<li>Mario Bros</li>"
    . "</ul>";
echo '<p>Esta es toda' . ' - ' . 'lista de juegos</p>';

?>
</body>

</html>