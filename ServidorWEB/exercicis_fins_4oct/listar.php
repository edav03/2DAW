<?php
$con = mysqli_connect("localhost", "root", "", "institut");

// Check connection
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM alumnes ORDER BY alumne_cognom1";

$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Alumnos</title>
</head>

<body>
    <a href="alta.html">
        <h2>alta de Alumnos</h2>
    </a>
    <h1>Listado Alumnos</h1>
    <table border="1">
        <th>Nom</th>
        <th>Cognom1</th>
        <th>Cognom2</th>



        <?php

        while ($row = mysqli_fetch_array($result)) {

            $id = $row['alumne_id'];

            echo "<tr><td>" . $row['alumne_nom'] . "</td>";
            echo "<td>" . $row['alumne_cognom1'] . "</td>";
            echo "<td>" . $row['alumne_cognom2'] . "</td>";
            echo "<td><a href='eliminar.php?id=$id'>Eliminar</td>";
            echo "<td><a href='editar.php?id=$id'>Editar</td>";
            echo "</tr>";
        }

        mysqli_close($con);
        ?>
    </table>
</body>

</html>