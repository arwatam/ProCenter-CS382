<?php   
 include 'db_con.php';  
 $conn= new db_conn;
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `eduschedule` WHERE id = '$id'";  
      $run=mysqli_query($conn->dbh, $query);
        if ($run) {  
          header('location:educator_schedule.php'); 
        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 }  
?>
