<?php include_once 'dbconfig.php';?>
<?php include_once 'header.php';?>

<h1>BLOG DETALLE</h1>

<table border='1px'>

<?php
$id = $_GET['id'];
$crud->blogview($id);
?>

</table>