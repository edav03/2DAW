<?php

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
                ?>
                <tr>
                    <td><?php print($row['post_title']);?></td>
                    <td><?php print($row['post_slug']);?></td>
                    <td><?php print($row['post_image']);?></td>
                    
                </tr>
                <?php
            }
        }
        else{
            // echo "Row count" . rowCount();
            ?>
            <tr>
                <td>Nothing here</td>
            </tr>
            <?php
        }
    }

    public function paging($query)
	{
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]);
		}
		$query2=$query." limit $starting_position";
		return $query2;
	}
}