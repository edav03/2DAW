<?php

class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
    public function delete($id)
    {
        $Thquery = "DELETE FROM gnr_post WHERE post_id=$id";
        $Thstmt = $this->db->prepare($Thquery);
        $Thstmt->execute();
        header('Location: http://localhost/ServidorWeb/U2/NoticiasPDO/html/');
        ?>
        <p>Succesfull</p>
        <?php
    }

    public function indexview($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount()>0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo "<a href='blog.php?id=" . $row['post_id'] . "'>". $row['post_title'] . "</a>";?></td>
                    <td><?php echo "<img src='../images/blog/" . $row['post_image'] . "' width='280' heigth='200'";?></td>
                    <td><?php echo "<a href='delete.php?id=" . $row['post_id'] . "'>Borrar </a><br>Editar </td>";?></td>
                </tr>
                <?php
            }
        }
        else{
            ?>
            <tr>
                <td>Nothing here</td>
            </tr>
            <?php
        }
    }

    public function blogview($id)
    {
        $Secquery = "SELECT post_title, post_body FROM gnr_post WHERE post_id=$id";
        $req = $this->db->prepare($Secquery);
        $req->execute();
        if($req->rowCount()>0){
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><h1><?php echo $row['post_title']?></h1></td>
                </tr>
                <tr>
                    <td><?php echo $row['post_body']?></td>
                </tr>
                <?php
            }
            
        }
        else{
            ?>
            <tr>
                <td>Nada sorry</td>
            </tr>
        <?php
        }
    }

}