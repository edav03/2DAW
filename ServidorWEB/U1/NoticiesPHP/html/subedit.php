<?php
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // echo basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    // } else {
    //   echo "Sorry, there was an error uploading your file.";
    // }

    // if(isset($_FILES['fileToUpload'])){
    //     $file = $_FILES['fileToUpload'];
    // }
    // if(isset($_POST['submit'])){
    //   echo $_POST['NewTitle'];
    //   echo $_POST['NewSlug'];
    //   echo $_POST['NewAbstract'];
    //   echo $_POST['NewDate'];
    // }

    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
      echo 'Connection error: ' . mysqli_connect_error();
    }

    // $sql = "UPDATE `gnr_post`  SET `post_id`=$_POST['NewId'], `post_title`=$_POST['NewTitle'], `post_slug`=$_POST['NewSlug'], `post_abstract`=$_POST['NewAbstract'], `post_date`=$_POST['NewDate'] WHERE id=$_GET['id']";

    mysqli_query($conn, $sql);

?>