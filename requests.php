<html>
<head>
  <title>The Requestes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link  rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    session_start();
    if (!isset($_SESSION['college_id']))
    header("Location: login.php");
   ?>
  <!-- ----------------------------------------------------header part------------------------------------------------------ -->
  <?php include("login_db.php");
    if( $_SESSION["user_type"] == 'student') {
         include ("student_header.php");
      } 
    else if($_SESSION["user_type"] == 'admin') {
         include ("admin_header.php");
      }
    else if ($_SESSION["user_type"] == 'educator')
    {
        include ("educator_header.php");
    }
    ?>
   <!-- ---------------------------------------------- End of header part------------------------------------------------------ -->
 
<div class="w3-container w3-padding">
<h2>The Requestes</h2>
  <div class>
  <table class="w3-table-all">
    <thead>
      <tr class="w3-teal">
        <th>#</th>
        <th>Student Name</th>
        <th> ID</th>
        <th>Subject </th>
        <th>Level</th>
        <th>GPA</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <form method="post" action="">
        <?php
   

        include "db_con.php";
        include 'Admin.php';
        $requests=new Admin();
        $result = $requests->view_requests();

        $i = 1;
        while ($row = $result->fetch_assoc()) {  

            $sName = $row['fname'];
            $lName = $row['lname'];
            $Id = $row['id'];
            $subject = $row['subject'];
            $level = $row['level'];
            $GPA = $row['GPA'];
            $status = $row['status'];
            echo "<td>".$i."</td>";
            echo "<td>{$sName} ";
            echo "{$lName}</td>";
            echo "<td>{$Id}</td>";
            echo "<td>{$subject}</td>";
            echo "<td>{$level}</td>";
            echo "<td>{$GPA}</td>";
            if ($status==1){
              echo "<td>Allowed</td>";
            }
            else{
              echo "<td>Denied</td>";
            }  
            echo "<td><button class='w3-btn w3-teal w3-border' type='submit' name='sAcc' value='{$Id}'>Accept</button>  ";
            echo "  <button class='w3-btn w3-border w3-white' type='submit' name='sRej' value='{$Id}'>Reject</button></td>";
            echo "</tr>";

            $i++;
        }

    if (isset($_POST['sAcc']) && intval($_POST['sAcc'])) {
        $user_id = (int) $_POST['sAcc'];
        $Accept=new Admin();
        $appUpdateQuery = $Accept->UpdateQuery($user_id);
      
         $updateUserType = $Accept->updateUserType($user_id);

    }
    if (isset($_POST['sRej']) && intval($_POST['sRej'])) {
        $user_id = (int) $_POST['sRej'];
        $Reject=new Admin();

        $appUpdateQuery = $Reject->UpdateQuery2($user_id); 
        $querydelete = $Reject->RejDelete($Id);
        $TypeStudent = $Reject->TypeStudent($user_id);

    }
?>
</form>
  </table>
  </div>
  </div>
 <!-- ----------------------------------------------End of Requests part------------------------------------------------------ -->

    <!--  ------------------------------------------------ footer part part------------------------------------------------------ -->
    
    <footer class="w3-teal">
      <div class="w3-container">
        <br />
        <div class="w3-third w3-container w3-mobile w3-small">
          <img
            src="images/location.png"
            alt="location logo"
            class="social-icons"
          />
          <b>Our Address</b>
          <p>
            Yanbu University College (Female Campus)·<br />
            Department of Computer Science.
          </p>
        </div>
        <div class="w3-third w3-container w3-mobile w3-small">
          <img
            src="images/email.png"
            alt="location logo"
            class="social-icons"
          />
          <b>Email Us at</b>
          <p>ProCenter@gmail.com</p>
        </div>

        
      </div><br /><br />
      <div class="w3-display-bottom w3-container">
        <span>&#169;</span>2022 All Right Reserved by CSE ProCenter
      </div>
    </footer>
    <!--  ---------------------------------------------- End of footer part part------------------------------------------------------ -->
</body>
</html> 