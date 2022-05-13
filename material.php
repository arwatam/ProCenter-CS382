<?php 

class materials  extends db_conn
{
   
     // function to retrive data in the database, to view student id 
     public function viewStudentID()
    {
        $query="SELECT * FROM `login` WHERE user_type='student'";
        // $result1 = mysqli_query($conn, $query);
        $result1=$this->dbh->query($query);
        return $result1;
     }

     // function to fetch educator id in table material
     public function  SelectEducatorID()
     {
        $s = "SELECT * FROM materials WHERE `id_user`='$_SESSION[college_id]'";
        $result = $this->dbh->query($s);
       return $result;
      }

      // function to fetch student id in table material
      public function SelectStudentID()
     {
        $l = "SELECT * FROM materials WHERE `stu_id`='$_SESSION[college_id]'";
        $result2 = $this->dbh->query($l);
        return $result2;

      }

      // function to fetch file number to download from database
      public function FetchFile($id)
     {
        
        $sq = "SELECT * FROM materials WHERE no=$id";
        $result3 = $this->dbh->query($sq);
        return $result3;
      }

      // function to increment download number 
      public function incrementDownload($id,$file)
     {
        // Now update downloads count
       $newCount = $file['downloads'] + 1;
       $updateQuery = "UPDATE materials SET downloads=$newCount WHERE no=$id";

       $result4=$this->dbh->query($updateQuery);
       return $result4;
      }

      // function to insert material data in database 
      public function StoreMaterial($studentID,$filename)
     {
        $insert = "INSERT into materials (id_user,stu_id,edu_name,name, size, downloads) VALUES ('$_SESSION[college_id]','$studentID','$_SESSION[name]','$filename',now(),1)";
        if($this->dbh->query($insert)){
            echo "<script> 
            alert('file has been uploaded successfully');
            window.location.href='educator_materials.php'; </script>";
            }
        else{
            echo 'Error: '.mysqli_error($this->dbh);
            }
            
      }
      
    
       
     
       
}


?>