<?php
include_once 'dbconfig.php';
include_once 'header.php';
?>

<h1>BLOG DETALLE</h1>

<?php
$id = $_GET['id'];
$Secquery = "SELECT post_title, post_body FROM gnr_post WHERE post_id=$id";
$req = $this->db->prepare($Secquery);
$req->execute();
?>
<table border="1px solid black">
    <tr>
        <td><?php echo $row['post_title']?></td>
        <td><?php echo $row['post_body']?></td>
    </tr>
</table>
<?php
?>