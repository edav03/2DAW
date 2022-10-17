<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h2>BLOG DETALL</h2>
        <hr>
    </header>

    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'noticias_servidor');

    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $num = $_GET['id'];

    // $sql = "SELECT `post_abstract`, `post_body` FROM `gnr_post` WHERE `post_id`=$num;";

    $result = mysqli_query($conn, "SELECT `post_abstract`, `post_body` FROM `gnr_post` WHERE `post_id`=$num;");

    $row = mysqli_fetch_array($result);

    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th><h1>". $row['post_abstract'] . "</h1></th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>" . $row['post_body'] . "</td>";
    echo "</tr>";
    echo "</table>";

    ?>
</body>
</html>