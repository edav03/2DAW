<html lang="en">
<head>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'edison', 'edison2005', 'noticias_servidor');
    
    if (!$conn) {
      echo 'Connection error: ' . mysqli_connect_error();
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM `gnr_post` WHERE `post_id`=$id";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // echo "<table border = '1'>";
    // echo "<tr>";
    // echo "<th>ID</th>";
    // echo "<th>TITULO</th>";
    // echo "<th>SLUG</th>";
    // echo "<th>ABSTRACT</th>";
    // echo "<th>DATE</th>";
    // echo "<th>VISIBLE</th>";
    // echo "<th>IMAGE</th>";
    // echo "<tr>";
    // echo "<td>". $row['post_id'] . "</td>";
    // echo "<td>" . $row['post_title'] . "</td>";
    // echo "<td>" . $row['post_slug'] . "</td>";
    // echo "<td>" . $row['post_abstract'] . "</td>";
    // echo "<td>" . $row['post_date'] . "</td>";
    // echo "<td>" . $row['post_visible'] . "</td>";
    // echo "<td><img src='../images/blog/" . $row['post_image'] . "' alt='no funciona' width='280' height='200'></td>";
    // echo "<td>";
    // echo "</table>";

    if (isset($_POST['submit'])) {
      // $newId = $_POST['NewId'];
      // $newTitle = $_POST['NewTitle'];
      // $newSlug = $_POST['NewSlug'];
      // $newAbs = $_POST['NewAbstract'];
      // $newDate = $_POST['NewDate'];

      // $up = "UPDATE gnr_post SET `post_id`=$newId, `post_title`=$newTitle, `post_slug`=$newSlug, `post_abstract`=$newAbs, `post_date`=$newDate WHERE `post_id`=$id";

      // if(mysqli_query($conn, $up)){
      //   echo "Record updated succesfully";
      // }else{
      //   echo "Error updating record: " . mysqli_error($conn);
      // }

      echo "Page working";

    }else{
      echo "page not working";
    }
?>
    <h2>EDICION</h2>

    <form action="edit.php" method="GET">

      <label>ID:</label>
      <input type="number" name="NewId"><br>
      <label> Nuevo Titulo: </label>
      <input type="text" name="NewTitle"><br>
      <label> Nuevo Slug: </label>
      <input type="text" name = "NewSlug"><br>
      <label> Nuevo Abstract </label>
      <input type="text" name = "NewAbstract"><br>
      <label> Nueva Fecha: </label>
      <input type="date" id="newdate" name="NewDate"><br>
      <!-- <label> Nueva imagen: </label>
      <input type="file" name="fileToUpload" id="fileToUpload"><br> -->
      <input type="submit" name="submit" value="GO">

    </form>
</body>
</html>