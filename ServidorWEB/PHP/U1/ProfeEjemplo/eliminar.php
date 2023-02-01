<?php

$con = mysqli_connect("localhost", "root", "", "institut");

// Check connection
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

echo "Vamos a eliminar el registro Numero [$id]<br>";

$sql = "DELETE FROM alumnes WHERE alumne_id = $id ";

mysqli_query($con, $sql);

mysqli_close($con);

header("Location: http://localhost/listar.php");