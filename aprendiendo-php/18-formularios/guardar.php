<?php

//El método post es siempre más seguro. En el formulario añades atributo action="y enlazas al documento.php" en el que obtendrás la info
if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    echo "<h1>" . $_POST['titulo'] . "<h1>";
    echo "<h2>" . $_POST['descripcion'] . "</h2>";
}