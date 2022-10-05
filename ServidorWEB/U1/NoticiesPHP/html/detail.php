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

    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');

    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    echo "The id of the notice is = " . $_GET['id'];
    
    $nID = intval($_GET['id']);
    
    $sent = "SELECT post_abstact FROM gnr_post WHERE post_id=&nID";
    ini_set('display_errors', 1);

    $result = mysqli_query($conn, $sent);
    error_log($result);

    $final = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($final);

    ?>
</body>
</html>