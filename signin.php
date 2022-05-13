<?php
 class login extends db_conn
 {
    public function loginquery($userid,$pass)
    {
    $sql = $this->dbh->query("SELECT * FROM `login` WHERE `college_id`='$userid' AND `password`='$pass'");
    return $sql;
    }    

}
?>