<?php 

class Appointments  extends db_conn
{
    // function to retrive data in the database, to veiw appointment
    public function veiwAppointments()
    {
     $sql="select * from StuSession where `eduname`='$_SESSION[name]'";
     $result=$this->dbh->query($sql);
    //  $numRows=$result->num_rows;
     if($result->num_rows > 0){
      return $result; 
      }else{
          return false;
      }
     }
   
     // function to retrive data in the database, to add appointment
     public function addAppointment($edu_id,$edu_name,$course,$date,$time)
     {
     $ret=mysqli_query($this->dbh,"insert into eduschedule(edu_id,edu_name,course,date,time) values('$edu_id','$edu_name','$course','$date','$time')");
     return $ret;
     }

      // function to retrive data in the database, to veiw schedule
     public function eduscheule()
     {
     $ret=mysqli_query($this->dbh,"SELECT * FROM eduschedule");
     return $ret;
     }


}


?>