<?php
    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
      echo 'Connection error: ' . mysqli_connect_error();
    }
    //Comprobar conexion.
    if (mysqli_connect_errno()){ 
        echo "Fallo al conectar a MYSQL". mysqli_connect_error();
    }
    $post_title = $_POST['post_title'];
    $post_slug = $_POST['post_slug'];
    $post_abstract = $_POST['post_abstract'];
    $post_body = $_POST['post_body'];
    $post_date = $_POST['post_date'];

    $post_image = $_POST['post_image'];
    $sql = "INSERT INTO gnr_post (post_title,post_slug,post_abstract,post_body,post_date,post_image) 
    VALUES ('$post_title','$post_slug','$post_abstract','$post_body','$post_date','$post_image')";   
    
    if (!mysqli_query($conn, $sql)) {
        die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
    }
    echo "registro añadido correctamente";      
    mysqli_close($con);
    header('Location: http://localhost/mysql/index.php');