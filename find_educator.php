<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CSE ProCenter </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
              function redirectStuAppointment(){// redirect to StuAppointment
                $(document).ready(function(){
                  $(location).attr('href', 'student_schedule.php');
                });
              }

    </script>
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

  <!--  ---------------------------------------------- Educator card part------------------------------------------------------ -->

     <section class="section-margin ">
      <div class="w3-container w3-center ">
        <h1>Our Educators</h1>
      </div>
    <div class="center">
      <div class="wrapper">
        <div class=" box">
          

          <?php
            include 'db_con.php';
            $query="select * from eduschedule"; // Fetch all the data
            // $result=mysqli_query($conn,$query);
            $result = $conn->query($query);//oop
            ?>
            <?php if( isset($result->num_rows) && $result->num_rows >0):?>
            <?php  while($array = $result -> fetch_row()): ?>
            <div class=" w3-card-2 w3-center w3-mobile w3-hover-shadow ">
                <header class="w3-container w3-pale-red w3-block">
                  <h3 class="w3-padding-4 w3-larg"><?php echo $array[2];?></h3>
                </header>

              <div class="w3-container w3-center">
                <p><?php echo $array[3];?></p>
                <hr />
                <ul>
                  <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red ">
                  <?php echo $array[4];?>
                  </li>
                  <li class="w3-button w3-hover-none w3-round-xlarge w3-pale-red ">
                  <?php echo $array[5];?>
                  </li>
                </ul>
              </div>
                <button class="w3-button w3-hover-teal w3-block w3-pale-red" onclick="redirectStuAppointment()"> Book an Appointment
                </button>
          </div>
            <?php endwhile; ?>
            <?php else: ?>
                  <h3 colspan="4" rowspan="1" headers="" class="w3-center">No Educator is Found</h3>
            <?php endif; ?>
            <?php $result -> free_result(); ?>


          
        </div>
      </div>
    </div>
    </section>
    <!--  ---------------------------------------------- End of Educator card part------------------------------------------------------ -->

    <!--  ------------------------------------------------ footrt part part------------------------------------------------------ -->
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
    <!--  ---------------------------------------------- End of footrt part part------------------------------------------------------ -->
  </body>
</html>