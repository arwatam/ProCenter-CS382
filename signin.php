<?php
 class login extends db_conn
 {
     Protected $sql;
     Protected $query;
    public function loginquery($userid,$pass)
    {
    $this->sql = $this->dbh->query("SELECT * FROM `login` WHERE `college_id`='$userid' AND `password`='$pass'");
    return $this->sql;
    }    

    public function contact($fname,$lname,$id,$subject,$message)
    {
        $this->query = "select * from contact";  
        $this->dbh->query($this->query); 
        $this->sql=mysqli_query($this->dbh,"insert into contact(fname,lname,id,subject,message)
         values('$fname','$lname','$id','$subject','$message')");
        return $this->sql;
     
    }

}
?>