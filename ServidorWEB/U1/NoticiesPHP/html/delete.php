

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition Page</title>
</head>
<body>
    <header>
        <h2>EDICION</h2>
    </header>

    <?php

    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    echo "Vamos a eliminar la noticia: <strong>" . $_GET['not'] . "</strong><br><br>";
    $id = $_GET['id'];

    // $sql = "DELETE FROM `gnr_post` WHERE `post_id`= $id;";

    mysqli_query($conn, "DELETE FROM `gnr_post` WHERE `post_id`= $id;") or die ("Wrong query: $sql");

    echo "<tt>Noticia eliminada con exito</tt>";
    
    mysqli_close($conn);

    ?>
</body>
</html>