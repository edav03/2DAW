<?php include_once 'dbconfig.php';?>
<?php include_once 'header.php';?>
<?php
    
$id=$_GET['id'];
$crud->delete($id);
?>