<?php   
 include 'login_db.php';  
 include_once("db_con.php");

 ?> 
<html>
<head>
<title>Educator Schedule</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
  //  session_start();
    if (!isset($_SESSION['college_id']))
    header("Location: login.php");
   ?>
 <!-- ----------------------------------------------------header part------------------------------------------------------ -->
 <?php 
 include("login_db.php");
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
  <h2>Educator Schedule</h2>
  <div class="w3-responsive w3-center">
  <table class="w3-table-all ">
    <thead>
      <tr class="w3-teal ">
        
        <th>Course</th>
        <th>Appointment Date</th>
        <th>Available Time</th>
        <th>Action</th>
      </tr>
    </thead>

    <tr>
      
    <?php
    include_once('Appointment.php');
    $appointment=new Appointments();
     if(isset($_POST['submit']))
     {
         $course=$_POST['course'];
         $date=$_POST['date'];
         $time=$_POST['time'];
        //  $sql="insert into eduschedule(edu_id,edu_name,course,date,time) values('$_SESSION[college_id]','$_SESSION[name]','$course','$date','$time')";
         $sql=$appointment->addAppointment("$_SESSION[college_id]","$_SESSION[name]","$course","$date","$time");
         if($sql){
           echo "<script>alert('New appointment is added');</script>";
          }
          else
          {
            echo "<script>alert('Appointment is not added');</script>";
          }
     }
    ?>
      <form method="post" action="">
      <td><input type="text" id="course" name="course" ></td>
      <td><input type="date" id="date" name="date"  ></td>
      <td><input type="time" id="time" name="time"  ></td>
      <td><button type="submit"  name="submit" class="w3-teal w3-border-teal w3-round-xlarge w3-padding" >
      <i class="fa fa-plus  Edit-out-logo-size add" ></i> Add new Appointment </button>
      </td>
    

    </tr>
      <?php   
        $result = $appointment->eduSchedule();
        if($result){
              if (( $result->num_rows >0)) {  
                    while ($row = $result->fetch_assoc()) {  
                        echo "  
                              <tr class='data'>   
                              <td>".$row['course']."</td>  
                              <td>".$row['date']."</td>  
                              <td>".$row['time']."</td> 
                              <td><a data-id=\"".$row['id']."\" class='w3-button w3-teal w3-border-teal w3-round-xlarge delete '><i class='fa fa-close  Edit-out-logo-size' ></i> Cancel</a></td> 
                              </tr>  
                        ";  
                    }  
                  }  
              }
          
      ?>   
    </form>
  </table>
</div>
</div>
<br>

  <!-- ---------------------------------------------- End of Educator Schedule part------------------------------------------------------ -->
<br><br>
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
<script>

  // for deleting new appointment
  $(document).ready(function(){
  $(".delete").click(function(){
    var del_id = $(this).data('id');
    var parent = $(this).parent().parent();
    $.ajax({
            type:"GET",
            url:"db_edudelete.php?id="+del_id,
            data:"id="+del_id,
            success:function(data) {
                if(data) { // Sucess
                  parent.slideUp(100,function() {
                  parent.remove();}); 
                } 
                else { // Error }
                }
            }
          });
        });
  });
</script>
  </body>
</html> 