<?php   
 include 'db_con.php';  
 $conn= new db_conn;
 if (isset($_GET['no'])) {  
      $id = $_GET['no'];  
      $query = "DELETE FROM `materials` WHERE no = '$id'";  
      $run=mysqli_query($conn->dbh, $query);
        if ($run) {  
          header('location:educator_materials.php'); 
        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 }  
?>
