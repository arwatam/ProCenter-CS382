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
            //function to redirect user to Find an Educator
            function redirectFindEdu(){
              $(document).ready(function(){
                $(location).attr('href', 'find_educator.php');
              });
            }

             //function to redirect user to Be an Educator
            function redirectBeEdu(){
              $(document).ready(function(){
                $(location).attr('href', 'be_educator.php');
              });
            }
            //function to redirect user to student_schedule
            function redirectStuAppointment(){
              $(document).ready(function(){
                $(location).attr('href', 'student_schedule.php');
              });
            }

          </script>
        
          <!-- -----------------------   END OF JQUERY SCRIPT ------------------------- --> 
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

    <!-- ---------------------------------------------- intro home page part------------------------------------------------------ -->
    <br><br>
    <section class="section-margin ">
      <div class="w3-row">
        <div class="w3-col  w3-panel w3-mobile" style="width:40%">
        <br><br>
          <h1>
            Find your<br />
            best <b class="w3-text-teal">Educator</b> & Book a session
          </h1>
          <p>
            You can improve your performance by booking a session at the
            programming center!
          </p>
          <br />
          <button  onclick="redirectFindEdu()" class="w3-btn w3-teal w3-border w3-round-xlarge w3-padding ">
            Find an Educator
          </button>   
          <button  onclick="redirectBeEdu()" class="w3-btn w3-white w3-border w3-round-xlarge w3-margin">
            Be an Educator
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

    <!--  ---------------------------------------------- Educator card part------------------------------------------------------ -->
    <section class="section-margin ">
      <div class="w3-container w3-center">
        <h1>Our Educators</h1>
      </div>
      <div class="Card-Container  ">
        <div class="w3-row marg-container">
          <div class="w3-col s4 w3-card-2 w3-center w3-mobile marg-between w3-hover-shadow">
            <header class="w3-container w3-pale-red w3-block">
              <h4 class="w3-padding-4 w3-larg">Ms.siti Haris</h4>
            </header>

            <div class="w3-container w3-center">
              <p>I will assist you with the c/c++ language</p>
              <hr />
              <ul>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  c
                </li>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  C++
                </li>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  c#
                </li>
              </ul>
            </div>
            <button class="w3-button w3-hover-teal w3-block w3-pale-red" onclick="redirectStuAppointment()">
              Book an Appointment
            </button>
          </div>

          <div class="w3-col s4 w3-card-2 w3-center w3-mobile marg-between w3-hover-shadow">
            <header class="w3-container w3-pale-red w3-block">
              <h4 class="w3-padding-4 w3-larg">Ms.Ruba Darwish</h4>
            </header>

            <div class="w3-container w3-center">
              <p>I will assist you with the web development project</p>
              <hr />
              <ul>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  HTML
                </li>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  CSS
                </li>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  JS
                </li>
              </ul>
            </div>
            <button class="w3-button w3-hover-teal w3-block w3-pale-red" onclick="redirectStuAppointment()">
              Book an Appointment
            </button>
          </div>

          <div class="w3-col s4 w3-card-2 w3-center w3-mobile marg-between w3-hover-shadow">
            <header class="w3-container w3-pale-red w3-block">
              <h4 class="w3-padding-4 w3-larg">Dr. kajal Khan</h4>
            </header>

            <div class="w3-container w3-center">
              <p>I will assist you with the JavaScript</p>
              <hr />
              <ul>
                <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red">
                  JS
                </li>
              </ul>
            </div>
            <button class="w3-button w3-hover-teal w3-block w3-pale-red" onclick="redirectStuAppointment()">
              Book an Appointment
            </button>
          </div>
        </div>
      </div>
      <!-- -------------------------more button part------------------- -->
      <div class="w3-container w3-margin">
        <button onclick="redirectFindEdu()" class="w3-btn w3-white w3-border w3-round-xxlarge w3-padding">
          More<span>&#8594;</span>
        </button>
      </div>
    </section>
    <!-- -------------------------more button part------------------- -->

    <!--  ---------------------------------------------- End of Educator card part------------------------------------------------------ -->

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