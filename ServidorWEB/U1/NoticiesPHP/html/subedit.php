<?php
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    echo basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    // } else {
    //   echo "Sorry, there was an error uploading your file.";
    // }

    // if(isset($_POST['submit'])){
    //   echo $_POST['NewTitle'];
    //   echo $_POST['NewSlug'];
    //   echo $_POST['NewAbstract'];
    //   echo $_POST['NewDate'];
    // }

?>