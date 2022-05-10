<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Educator-My Appointment</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">  
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
 <!-- ---------------------------------------------- Appointment part------------------------------------------------------ -->
<div class="w3-panel w3-padding-64">
  <h2>My Appointment</h2>
  <div class="w3-responsive">
  <table class="w3-table-all">
    <thead>
      <tr class="w3-teal">
        <th>Student id</th>
        <th>course</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
  <?php
  include 'db_con.php';
  $query="select * from StuSession where `eduName`='$_SESSION[name]'"; // Fetch all the data from the table
  $result = $conn->query($query);
  ?>
  <?php if ( isset($result->num_rows) && $result->num_rows >0): ?>
  <?php while($array = $result -> fetch_array(MYSQLI_NUM)): ?>
        <tr>
            <td scope="row"><?php echo $array[1];?></td>
            <td><?php echo $array[3];?></td>
            <td><?php echo $array[4];?></td>
            <td><?php echo $array[5];?></td>
        </tr>
  <?php endwhile; ?>
  <?php else: ?>
        <tr>
        <td colspan="4" rowspan="1" headers="" class="w3-center">No Appointment is Found</td>
        </tr>
  <?php endif; ?>
  <?php $result -> free_result(); ?>
    </tbody>
  </table>
</div>
</div>
<br>


<br><br>
 <!-- ----------------------------------------------End of Appointment part------------------------------------------------------ -->

    <!--  ------------------------------------------------ footer part part------------------------------------------------------ -->
    <footer class="w3-teal ">
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