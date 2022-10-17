<?php

class Info extends Dbh{

    public function getAllInfo(){
        $stmt = $this->connect()->query("SELECT * FROM gnr_post");
        while ($row = $stmt->fetch()) {
            $uid = $row['post_title'];
            return $uid;
        }
    }
}