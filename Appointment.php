<?php 

class Appointments  extends db_conn
{
    Protected $sql;
    // function to retrive data in the database, to veiw appointment
    public function veiwAppointments()
    {
     $this->sql="select * from StuSession where `eduname`='$_SESSION[name]'";
     $result=$this->dbh->query($this->sql);
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
     public function eduSchedule()
     {
     $ret=mysqli_query($this->dbh,"SELECT * FROM eduschedule ");
     return $ret;
     }


}


?>