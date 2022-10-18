<?php

$numero = $_POST['numero_tabla'];

echo "Hola, estoy en tabla.php y has introducido $numero <br>";



for ($i = 1; $i <= 10; $i++) {
    echo "$numero * $i = " . ($numero * $i);
    echo "<br>";
}