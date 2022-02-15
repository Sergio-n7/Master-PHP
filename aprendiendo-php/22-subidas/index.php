<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos PHP</title>
</head>

<body>
    <h1 style="color:cadetblue">Subir imagenes con PHP</h1>
    <form action="/aprendiendo-php/22-subidas/upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar" />
    </form>

    <h1>Listado de imagenes</h1>

    <?php
$gestor = opendir('./images'); # Abre el directorio y tenemos que hacer un loop

if ($gestor):
    while (($image = readdir($gestor)) != false): #leemos lo que hay dentro y si no es falso seguimos el loop
        if ($image != '.' && $image != '..'): # Si image no es el directorio actual o anterior
            echo "<img src='images/$image' width='200px' /><br>";
        endif;
    endwhile;
endif;
?>

</body>

</html>