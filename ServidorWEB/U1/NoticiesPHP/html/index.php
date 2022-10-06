<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h2>NOTICIAS DEL BLOG</h2>

        <hr>

        <a href='insert.php'>Insertar</a><br>

    </header>
    <?php

    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
    
    $result = mysqli_query($conn, 'SELECT `post_id`, `post_image`, `post_title` FROM `gnr_post`;');
    
    echo "<table border = '1'>
    <tr>
    <th>Titulo</th>
    <th>Imagen</th>
    <th>Opciones</th>
    </tr>";
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td><a href='detail.php?id=" . $row['post_id'] . "'>" . $row['post_title'] . "</a></td>";
        echo "<td><img src='../images/blog/" . $row['post_image'] . "' alt='no funciona' width='280' height='200'></td>";
        echo "<td>";
        echo "<a href='edit.php?id=" . $row['post_id'] . "'>Editar</a><br>";
        echo "<a href='delete.php?id=" . $row['post_id'] . "&not=" . $row['post_title'] . "'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    
    mysqli_close($conn);
    ?>

</body>
</html>