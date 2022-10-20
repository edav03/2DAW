<?php

// session_start();
class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM gnr_post WHERE post_id=:id");
        $stmt->bindparam(":id",$id);
        $stmt->execute();
        return true;
    }

    public function dataview($query){
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount()>0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // $_SESSION["id"] = $row['post_id'];
                ?>
                <tr>
                    <td><?php echo "<a href='blog.php?id='" . $row['post_id'] . "'>". $row['post_title'] . "</a>";?></td>
                    <td><?php echo "<img src='../images/blog/" . $row['post_image'] . "' width='280' heigth='200'";?></td>
                    <td>Opciones</td>
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

    // public function paging($query)
	// {
	// 	if(isset($_GET["page_no"]))
	// 	{
	// 		$starting_position=($_GET["page_no"]);
	// 	}
	// 	$query2=$query." limit $starting_position";
	// 	return $query2;
	// }
}