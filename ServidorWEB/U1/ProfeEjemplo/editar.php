<?php

$con = mysqli_connect("localhost", "root", "", "institut");
// Check connection
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
echo "Vamos a editar el registro Numero [$id]<br>";
$sql = "SELECT * FROM alumnes WHERE alumne_id = $id ";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['alumne_id'];
    $nom = $row['alumne_nom'];
    $cognom1 = $row['alumne_cognom1'];
    $cognom2 = $row['alumne_cognom2'];
}
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

    <h1>Edita Ficha alumne</h1>
    <form action="modificar.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        Nom: <input type="text" name="nom" id="" value="<?= $nom ?>"><br>
        Cognom1: <input type="text" name="cognom1" id="" value="<?= $cognom1 ?>"><br>
        Cognom2: <input type="text" name="cognom2" id="" value="<?= $cognom2 ?>"><br>
        <input type="submit" value="Modificar">
    </form>


</body>

</html>