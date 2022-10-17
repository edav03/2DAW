<?php

    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM `gnr_post` WHERE `post_id`= $id;") or die ("Wrong query: $sql");
    
    mysqli_close($conn);

    header('Location: http://localhost/mysql/index.php');

?>