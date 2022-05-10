<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <title>About us</title>
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
      
<!--------------------------------------------- Start part About us------------------------------------------------->
<div class="margin-top w3-row w3-card-4">
  <div class="for-height-dark-green  w3-half w3-center w3-padding-64 w3-text-white">
   <h1 ><b>About Us</b></h1>
    <p class="w3-padding-16">CSE ProCenter provides a variety of services for the computer science and engineering department at Yanbu university college. </p>
  </div>
  <div class=" w3-half light-green">
    <img src="images/Lesson-img.svg" alt="lesson logo" width="600" height="350">
  </div>
</div>
  

  <!--------------------------------------------- Start Our Programming Center part------------------------------------------------->
  <div class="w3-row w3-padding-64">
    <div class="for-height-pink w3-center w3-card-4 ">
     <h1 ><b>Our Programming Center</b></h1>
      <b><p class="w3-padding-16">The programming center of the CSE department aimed to help the students in case they need extra help in some courses.<br>
        It provided a practical session delivered by excellent students and teachers. </p></b>
    </div>
  </div>
    <!--------------------------------------------- Start Our educator part------------------------------------------------->
  <div class="w3-row  ">
    <div class="for-height-dark-green w3-center  w3-card-4 w3-text-white">
     <h1 ><b>Book a session with our educator</b></h1>
      <b><pre class="w3-padding-16" >With our sessions, it is easier for students to reach to the right educators and <br>schedule an appointment at a convenient time to improve their knowledge and perform better in the exams. </pre></b>
    </div>
  </div><br><br><br>
      <!--------------------------------Start the footer--------------------------------->
     <br><br>
      <footer class="w3-teal ">
        <div class="w3-container ">
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
    <!--------------------------------End the footer--------------------------------->
</body>
</html>