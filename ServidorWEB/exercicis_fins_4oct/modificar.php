<?php
$con = mysqli_connect("localhost", "root", "", "institut");

// Check connection
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
}

$id = $_POST['id'];
$nom = $_POST['nom'];
$cognom1 = $_POST['cognom1'];
$cognom2 = $_POST['cognom2'];

$sql = "UPDATE alumnes SET alumne_nom = '$nom',
alumne_cognom1 = '$cognom1',
alumne_cognom2 = '$cognom2'
WHERE alumne_id = $id ";

echo $sql;

mysqli_query($con, $sql);
mysqli_close($con);

header("Location: http://localhost/listar.php");