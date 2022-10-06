<?php
    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
      echo 'Connection error: ' . mysqli_connect_error();
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM `gnr_post` WHERE `post_id`=$id";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>TITULO</th>";
    echo "<th>SLUG</th>";
    echo "<th>ABSTRACT</th>";
    echo "<th>DATE</th>";
    echo "<th>VISIBLE</th>";
    echo "<th>IMAGE</th>";
    echo "<tr>";
    echo "<td>". $row['post_id'] . "</td>";
    echo "<td>" . $row['post_title'] . "</td>";
    echo "<td>" . $row['post_slug'] . "</td>";
    echo "<td>" . $row['post_abstract'] . "</td>";
    echo "<td>" . $row['post_date'] . "</td>";
    echo "<td>" . $row['post_visible'] . "</td>";
    echo "<td><img src='../images/blog/" . $row['post_image'] . "' alt='no funciona' width='280' height='200'></td>";
    echo "<td>";
    echo "</table>";

    // // $target_dir = "uploads/";
    // // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // // $uploadOk = 1;
    // // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // //   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    // // } else {
    // //   echo "Sorry, there was an error uploading your file.";
    // // }

    // if(isset($_POST['submit'])){
    //   echo $_POST['newtitle'];
    //   echo $_POST['newslug'];
    //   echo $_POST['newabs'];
    //   echo $_POST['newdate'];
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition Page</title>
</head>
<body>
    <h2>EDICION</h2>

    <form action="subedit.php" method="POST">

      <label> Nuevo Titulo: </label>
      <input type="text" id="newtitle" name="NewTitle"><br>
      <label> Nuevo Slug: </label>
      <input type="text" id="newslug" name = "NewSlug"><br>
      <label> Nuevo Abstract </label>
      <input type="text" id="newabs" name = "NewAbstract"><br>
      <label> Nueva Fecha: </label>
      <input type="date" id="newdate" name="NewDate"><br>
      <label> Nueva imagen: </label>
      <input type="file" name="fileToUpload" id="fileToUpload"><br>
      <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>