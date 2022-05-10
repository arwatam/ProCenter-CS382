<?php   
 include 'db_con.php';  
 if (isset($_POST['id'])) {  
      $id = $_POST['id'];  
      $query = "DELETE FROM `eduschedule` WHERE id = '$id'";  
      $run = $conn->query($query);  
        if ($run) {  
          header('location:educator_schedule.php'); 
        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 }  
?>
