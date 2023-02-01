<?php
session_start();

$nombre = $_POST['usuario'];
$clave = $_POST['clave'];

$_SESSION['nom'] = $nombre;
$_SESSION['clau'] = $clave;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Se almacenaron dos variables de sessión</h1>
    <a href="page3.php">Ir a la página 3 donde se recuperarán las variables de sesión</a>
</body>

</html>