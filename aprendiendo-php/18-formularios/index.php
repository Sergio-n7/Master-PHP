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

        <label for="nombre">Apellido: </label>
        <p><input type="text" name="apellido" /></p>

        <label for="boton">Botón: </label>
        <p><input type="button" name="boton" value="Click Me" /></p>

        <label for="sexo">Sexo: </label>
        <p>
            Hombre<input type="checkbox" name="sexo" value="hombre" checked="checked" />
            Mujer<input type="checkbox" name="sexo" value="mujer" />
            No Binario<input type="checkbox" name="sexo" value="no binario" />
        </p>

        <label for="color">Color: </label>
        <p><input type="color" name="color" /></p>

        <label for="date">Date: </label>
        <p><input type="date" name="date" /></p>

        <label for="email">Email: </label>
        <p><input type="email" name="email" /></p>

        <label for="number">Número: </label>
        <p><input type="number" name="number" /></p>

        <label for="file">Archivo: </label>
        <p><input type="file" name="file" multiple="multiple" /></p>

        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass" /></p>

        <label for="web">Web: </label>
        <p><input type="url" name="url" /></p>

        <label for="color">Continente: </label>
        <p>
            América del Sur <input type="radio" name="continente" value="America del Sur" />
            Europa <input type="radio" name="continente" value="Europa" />
            Asia <input type="radio" name="continente" value="Asia" />

        </p>


        <label for="contraseña">Contraseña: </label>
        <p><input type="text" name="apellido" minlength="4" maxlength="10" pattern="[A-Z ]+" required="required" /></p>

        <textarea></textarea><br>

        Películas:
        <select name="peliculas">
            <option value="spiderman">Spiderman</option>
            <option value="batman">Batman</option>
            <option value="la jungla de cristal">La jungla de cristal</option>
            <option value="gran torino">Gran Torino</option>

        </select><br>
        <input type="submit" value="Enviar" />

    </form>
</body>

</html>