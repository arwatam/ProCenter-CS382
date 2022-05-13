<?php
 class login extends db_conn
 {
    public function loginquery($userid,$pass)
    {
    $sql = $this->dbh->query("SELECT * FROM `login` WHERE `college_id`='$userid' AND `password`='$pass'");
    return $sql;
    }    

    public function contact($fname,$lname,$id,$subject,$message)
    {
        $query = "select * from contact";  
        $this->dbh->query($query); 
        $sql=mysqli_query($this->dbh,"insert into contact(fname,lname,id,subject,message)
         values('$fname','$lname','$id','$subject','$message')");
        return $sql;
     
    }

}
?>