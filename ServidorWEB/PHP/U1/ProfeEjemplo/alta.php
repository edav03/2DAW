<?php
$con = mysqli_connect("localhost", "root", "", "institut");

// Check connection
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
} else {
    echo "Conexión OK<br>";

    $nom = $_POST['nom'];
    $cognom1 = $_POST['cognom1'];
    $cognom2 = $_POST['cognom2'];

    echo "$nom, $cognom1, $cognom2 <br>";

    $sql =  "INSERT INTO alumnes (alumne_nom,alumne_cognom1,alumne_cognom2) 
    VALUES ('$nom','$cognom1','$cognom2')";

    echo "$sql<br>";

    mysqli_query($con, $sql);
    echo "<br>Registro grabado correctamente<br>";
    header("Location: http://localhost/listar.php");
}
mysqli_close($con);