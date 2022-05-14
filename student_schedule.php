<html>
<title>Educator Schedule</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

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
 
<!-- ---------------------------------------------- Educator Schedule part------------------------------------------------------ -->

<br>
<div class="w3-container w3-padding-64 ">
  <h2>Choose Your Best Educator and book new session</h2>
  <div class="w3-responsive w3-center">
  <table class="w3-table-all ">
    <thead>
      <tr class="w3-teal  ">
        <th>#</th>
        <th>educator Name</th>
        <th>course</th>
        <th>session Date</th>
        <th>session Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tr>
    <?php 
      include "login_db.php";
    ?>
    <?php   

      include 'db_con.php';
      include 'Appointment.php';
      $educator=new Appointments();
      $result1 = $educator->eduSchedule();
      $i=1;  
      $id=$_SESSION['college_id'];
        while ($result = $result1->fetch_assoc()) {  
             echo "  
                  <tr class='data'>   
                  <td>".$i++."</td>
                  <td>".$edu=$result['edu_name']."</td> 
                  <td>".$course=$result['course']."</td>  
                  <td>".$date=$result['date']."</td>  
                  <td>".$time=$result['time']."</td> 
                  <td><a href='db_book.php?stuid=".$_SESSION['college_id']."&edu_name=".$result['edu_name']."&course=".$result['course']."&date=".$result['date']."&time=".$result['time']."' class='w3-button w3-teal w3-border-teal w3-round-xlarge '> <i class='fa fa-plus  Edit-out-logo-size' ></i> Book New Session</a></td> 
                   
                  
             ";  
        }?>
 
    </table>
  </div>
</div>

  <!-- ---------------------------------------------- End of Educator Schedule part------------------------------------------------------ -->
<br><br><br><br><br>
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