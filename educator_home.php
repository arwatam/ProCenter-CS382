<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CSE ProCenter</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <!-- -----------------------   START OF JQUERY SCRIPT ----------------------- -->
          <script>
            function redirectCreateSch(){
            $(document).ready(function(){
                $(location).attr('href', 'educator_schedule.php');
              });
            }

            function redirectViewApp(){
            $(document).ready(function(){
                $(location).attr('href', 'educator_appointment.php');
              });
            }
          </script>
          <!-- -----------------------   END OF JQUERY SCRIPT ------------------------- --> 
  </head>
  <body>
    <?php  
    include "db_con.php"
     ?>
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

    <!-- ---------------------------------------------- intro home page part------------------------------------------------------ -->
    <br><br>
    <section class="section-margin ">
      <div class="w3-row">
        <div class="w3-col  w3-panel w3-mobile" style="width:40%">
        <br><br> <h1>
            Find your<br />
            best <b class="w3-text-teal">Educator</b> & Book a session
          </h1>
          <p>
            You can improve your performance by booking a session at the
            programming center!
          </p>
          <br />
          <button  onclick="redirectCreateSch()" class="w3-teal w3-border w3-round-xlarge w3-padding">
            Create Schedule
          </button>   
          <button  onclick="redirectViewApp()" class="w3-white w3-border w3-round-xlarge w3-padding">
            View Appointment
          </button>
       
        </div>
        <div class="w3-rest  w3-mobile">
          <img
            src="images/ProCenter home.png"
            alt="proCenter home"
            class=" w3-image"
          />
        </div>
      </div>
      
    </section>
    <!-- ---------------------------------------------- end of intro home page part------------------------------------------------------ -->
    <!-- ---------------------------------------------- website info  part------------------------------------------------------   -->
    <div class="w3-center w3-container"> <h1>What We Offer</h1></div>
   
    <section class="section-margin marg-container  ">
     
      <div class="w3-panel w3-center marg-container  ">
        
        <br />
        <div class="w3-third w3-panel w3-mobile w3-card-2 w3-round-large marg-between ">
          <img
            src="images/poweful.png"
            alt="powerful program image"
            class="w3-image icons w3-margin-top "
          />
          <h4><b>Better Performance</b></h4>
          <p>
            effective session to gain valuable knowledge from
            teachers and our best students
          </p>
        </div>
        <div class="w3-third w3-panel w3-mobile w3-card-2 w3-round-large marg-between ">
          <img
            src="images/teacher.png"
            alt="teacher image"
            class="w3-image icons w3-margin-top"
          />
          <h4><b>Personal Teacher</b></h4>
          <p>You can choose your best teacher to improve your performance</p>
          
        </div>
        <div class="w3-third w3-panel w3-mobile w3-card-2 w3-round-large marg-between ">
          <img
            src="images/graduation-cap.png"
            alt="teacher image"
            class="w3-image icons w3-margin-top"
          />
          <h4><b>CSE Courses</b></h4>
          <p>We offer wide range of courses for all CSE students</p>
          
        </div>
      </div>
      <br />
    </section>
    <br><br><br>
    <!-- ---------------------------------------------- End of website info  part------------------------------------------------------   -->


    <!--  ------------------------------------------------ footet part part------------------------------------------------------ -->
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

    <!--  ---------------------------------------------- End of footet part part------------------------------------------------------ -->
  </body>
</html>