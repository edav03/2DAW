<?php

$sexo = $_POST['sexo'];

echo "El valor del sexo es $sexo<br>";

if (empty($_POST['extras']))
    echo "<br>No Has seleccionado ninguno<br>";
else {

    $extras = $_POST['extras'];

    echo "<br>Has seleccionado lo siguiente:<br>";

    foreach ($extras as $extra) {
        echo $extra . "<br>";
    }
}

//print_r($extras);


$color = $_POST['color'];

echo "El color que has seleccionado es $color <br>";


if (empty($_POST['idiomas']))
    echo "<br>No Has seleccionado ningun idioma<br>";
else {

    $idiomas = $_POST['idiomas'];

    echo "<br>Has seleccionado lo siguiente:<br>";

    foreach ($idiomas as $idioma) {
        echo $idioma . "<br>";
    }
}

echo "-------- VISUALIZACIÓN DEL FICHERO -------------<br>";

//print_r($_FILES['fichero']);
$nombre = $_FILES['fichero']['name'];
$nombre_temp = $_FILES['fichero']['tmp_name'];

//Si se ha  subido correctamente al servidor
if (is_uploaded_file($nombre_temp)) {
    echo "Se ha subido el archivo correctamente<br>";

    $ruta_servidor = getcwd();
    //echo "Ruta Servidor = [$ruta_servidor] <br>";

    $nombre_archivo_en_servidor = $ruta_servidor . "/fotos/" . $nombre;
    echo "Nombre en el servidor :" . $nombre_archivo_en_servidor . "<br>";

    echo "renombrando ($nombre_temp,$nombre_archivo_en_servidor)<br>";
    move_uploaded_file($nombre_temp, $nombre_archivo_en_servidor);
} else {
    echo "El fichero no se ha subido correctamente<br>";
}