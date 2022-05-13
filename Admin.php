<?php

class Admin extends db_conn 
{
  
  
  public function view_contact()
  {
  $ret=mysqli_query($this->dbh,"SELECT * FROM contact");
  return $ret;
  }
  
  public function view_requests()
  {
  $ret=mysqli_query($this->dbh,"SELECT * FROM Requests");
  return $ret;
  }

  public function UpdateQuery($user_id)
  {
  $ret=mysqli_query($this->dbh,"UPDATE Requests SET status = '1' WHERE id='".$user_id."'");
  return $ret;
  }

  public function Edu()
  {
  $ret=mysqli_query($this->dbh,"select * from eduinformation");
  return $ret;
  }

  public function InEdu($Id,$sName,$subject)
  {
  $ret=mysqli_query($this->dbh,"INSERT into eduinformation(id,eduNAME,course) values('$Id','$sName','$subject')");
  return $ret;
  }

  public function ChEdu($user_id)
  {
  $ret=mysqli_query($this->dbh,"UPDATE login SET user_type = 'educator' WHERE college_id='".$user_id."'");
  return $ret;
  }

  public function UpdateQuery2($user_id)
  {
  $ret=mysqli_query($this->dbh,"UPDATE Requests SET status = '0' WHERE id='".$user_id."'");
  return $ret;
  }

  public function RejDelete($Id)
  {
  $ret=mysqli_query($this->dbh,"delete from eduinformation where id ='".$Id."'");
  return $ret;
  }

  public function LoginUpdate($user_id)
  {
  $ret=mysqli_query($this->dbh,"UPDATE login SET user_type = 'student' WHERE college_id='".$user_id."'");
  return $ret;
  }

}

?>