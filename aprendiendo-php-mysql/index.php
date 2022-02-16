<?php

//Conectar una base de datos
$conection = mysqli_connect("localhost", "sergi", '', "master_php");

//Comprobar si la conexión es correcta
if (mysqli_connect_errno()) {
    echo "La conexión a la base de datos MYSQL ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexión a la base de datos correctamente";
}

//Consulta para configurar la codificación de caracteres
mysqli_query($conection, "SET NAMES  'utf8'");

//Consulta SELECT desde PHP
$query = mysqli_query($conection, "SELECT * FROM gatos");

while ($gato = mysqli_fetch_assoc($query)) {
    // var_dump($nota);
    echo "<h2>" . $gato['titulo'] . "</h2>";
    echo $gato['descripcion'] . '<br>';

}

//Insertar en la base de datos desde PHP
$sql = "INSERT INTO gatos VALUES(null, 'Samuray desde PHP', 'Esto es una nota de Samuray de PHP', 'rosa')";
$insert = mysqli_query($conection, $sql);

echo '<hr>';
if ($insert) {
    echo "DATOS INSERTADOS CORRECTAMENTE";
} else {
    echo "Error: " . mysqli_error($conection);
}