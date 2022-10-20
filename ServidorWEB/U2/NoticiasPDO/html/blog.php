<?php
include_once 'dbconfig.php';
include_once 'header.php';
?>

<h1>BLOG DETALLE</h1>

<?php
$id = $_SESSION['id'];
$query = "SELECT post_title, post_body FROM gnr_post WHERE post_id=$id";
$stmt = prepare($query);
$stmt->execute();
?>