<?php 

class studentAppointment  extends db_conn
{
   
  Protected $sql;
  Protected $ret;
     // function to retrive data in the database, to add appointment
     public function viewStuAppointments()
    {
     $this->sql="select * from `StuSession` WHERE `stuid`='$_SESSION[college_id]'";
     $result=$this->dbh->query($this->sql);
    //  $numRows=$result->num_rows;
     if($result->num_rows > 0){
      return $result; 
      }
      else{
        return false;
      }
     }

    // function to retrive data from be an educator page. add new request 
    public function beEducatorRedquest($fname,$lname,$id,$subject,$level,$GPA)
    {
        $this->ret=mysqli_query($this->dbh,"insert into requests(fname,lname,id,subject,level,GPA) values('$fname','$lname','$id','$subject','$level','$GPA')");
        return $this->ret;
           
   } 
       
}


?>