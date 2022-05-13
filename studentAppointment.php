<?php 

class studentAppointment  extends db_conn
{
   
     // function to retrive data in the database, to add appointment
     public function veiwStuAppointments()
    {
     $sql="select * from `StuSession` WHERE `stuid`='$_SESSION[college_id]'";
     $result=$this->dbh->query($sql);
    //  $numRows=$result->num_rows;
     if($result->num_rows > 0){
      return $result; 
      }
      else{
        return false;
      }
     }

    //  public function bookAppointment($id,$name,$course,$date,$time)
    //  {
   
    //     $query = "insert into StuSession(stuid,eduName,course,date,time) values('$id','$name','$course','$date','$time')"; 
    //     $run=$this->dbh->query($query);
    //     if($run){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
            
    // }

    // function to retrive data from be an educator page. add new request 
    public function beEducatorRedquest($fname,$lname,$id,$subject,$level,$GPA)
    {
        $ret=mysqli_query($this->dbh,"insert into requests(fname,lname,id,subject,level,GPA) values('$fname','$lname','$id','$subject','$level','$GPA')");
        return $ret;
           
   } 
       
}


?>