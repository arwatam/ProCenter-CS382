<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">
  <title>Be an Educator</title>
  <script src="main.js"></script>
</head>
<body>
<?php 
   session_start();
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

<h2 class=" w3-display-left margen-left"><pre><b>Share your knowledge and experience
  with your colleagues'</pre></b></h2>
<div id="Back-Ground-Circle-1">
 <div id="Back-Ground-Circle-3"></div>
</div>
<div id="Back-Ground-Circle-2"></div>
<div id="Back-Ground-Circle-4"></div>
<div class="w3-display-right" id="Back-Ground-Circle-2"></div>

<!-------------------------------------Start the Form to be an educator-------------------------------------------------->
<?php 
 include 'db_con.php';  
 $query = "select * from requests";  
 $conn->query($query)
 if(isset($_POST['submit']))
 {
     $fname=$_POST['FN'];
     $lname=$_POST['LN'];
     $id=$_POST['ID'];
     $level=$_POST['level'];
     $subject=$_POST['subject'];
     $GPA=$_POST['GPA'];
     $sql="insert into requests(fname,lname,id,subject,level,GPA) values('$fname','$lname','$id','$subject','$level','$GPA')";
     if( $conn->query($sql)){
       echo "<script>alert('Your Request has been sent.');</script>";
      }
      else
      {
        echo "<script>alert('Could not send the Request!');</script>";
      }
 }
?>
<div class="margin-form w3-text-white w3-panel w3-card-4 w3-round-xlarge ">

 

  <form action="#" class="w3-block" method="POST">
    <h1 class="w3-center"> Do You Want to Be an Educator ?</h1>
    <p class="w3-center"><b>Please fill this form </b></p>
    <hr>

    <p> <label class="w3-text-white w3-label" for="FN"><b>First name</b></label>
    <input class="w3-input w3-padding  w3-border w3-light-grey  w3-round w3-validate"  type="text" name="FN" placeholder="First name" required>
    </p>

    <p> <label class="w3-text-white w3-label" for="LN"><b>Last name</b></label>
    <input class=" w3-input w3-border w3-light-grey  w3-round w3-validate"  type="text" name="LN" placeholder="Last name" required>
    </p>

    <p><label class="w3-text-white w3-label" for="ID"><b>Student ID</b></label>
    <input class=" w3-input w3-border w3-light-grey  w3-round w3-validate" type="number" name="ID" placeholder="College ID" required>
    </p>

    <p><label class="w3-text-white w3-label" for="level"><b>Level</b></label>
      <select class=" w3-input w3-border w3-light-grey  w3-round w3-validate" name="level" required>
        <option value="" disabled selected hidden><b>Select level</b> </option>
        <option class=" w3-input">First-year</option>
        <option>Sophomore</option>
        <option>Junior</option>
        <option>Senior</option>
      </select>
    </p>

    <p> <label  class="w3-text-white" for="Subject"><b>Course</b></label><br>
    <input class="w3-input w3-border w3-light-grey w3-round w3-validate " type="text" name="subject" placeholder="Course name" required>
    </p>

    <p><label class="w3-text-white" for="GPA"><b>GPA</b></label><br>
    <input class=" w3-input w3-border w3-light-grey  w3-round " type="text" id="gpa" name="GPA" placeholder=" GPA" required>
    </p>

    <br>
    <button type="submit"  name="submit" onclick="verify()" class="w3-btn w3-white  w3-border-white w3-round-xlarge w3-padding w3-block">
    Register </button>


 </form>
</div>
<br>
<div id="Back-Ground-Circle-4"></div><br>
<!-- -----------------------------------End of the form----------------------------------------  -->
   <!--------------------------------Start the footer--------------------------------->
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
    <!--------------------------------End the footer--------------------------------->
  
</body>
</html>

