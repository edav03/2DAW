<?php
session_start();
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

    <h1>Nombre de usuario recuperado: <?= $_SESSION['nom'] ?></h1>
    <h1>Clave de usuario recuperado: <?= $_SESSION['clau'] ?></h1>

    <a href="cerrar_session.php">Cerrar Sessión</a>

</body>

</html>