<?php
// connect to the database

include 'login_db.php';
include "db_con.php";
include 'material.php';
  $st=new materials();
  $result = $st->SelectEducatorID();
  $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $result2 = $st->SelectStudentID();
  $f = mysqli_fetch_all($result2, MYSQLI_ASSOC);


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
     // Count total uploaded files
    $totalfiles = count($_FILES['myfile']['name']);

    $studentID=$_POST['student'];
    // Looping over all files
    for($i=0;$i<$totalfiles;$i++){
        $filename = $_FILES['myfile']['name'][$i];
        
        // Upload files and store in database
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],'uploads/'.$filename)){


         $st->StoreMaterial($studentID,$filename);
                
        }
        else{
                echo 'Error in uploading file - '.$_FILES['myfile']['name'][$i].'<br/>';
            }
   }
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    $result3 = $st->FetchFile($id);
    
    $file = $result3->fetch_assoc();
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        $download = $st->incrementDownload($id,$file);
        exit;
    }
}