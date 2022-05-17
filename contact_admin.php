<html>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Requests.css">
<link  rel="stylesheet" href="style.css">

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
 <!-- ---------------------------------------------- Requests part------------------------------------------------------ -->
<div class="w3-container w3-padding">
  <h2>Contact Messages</h2>
  <div class="w3-responsive">
  <table class="w3-table-all">
    <thead>
      <tr class="w3-teal">
        <th>
          Name
        </th>
        <th>
          id
        </th>
        <th>
          subject
        </th>
        <th>
          Message
        </th>
      </tr>
<?php
include 'db_con.php';
include 'Admin.php';
$contact=new Admin();
$run = $contact->view_contact();

if (( isset($run->num_rows) && $run->num_rows >0)) {  
  while ($row = $run->fetch_assoc()) {  
?>
	<tr >
		<td>
			<?php echo $row['fname']; ?>
			<?php echo $row['lname']; ?>
		</td>
		<td>
			<?php echo $row['id']; ?>
		</td>
    <td>
			<?php echo $row['subject']; ?>
		</td>
    <td>
			<?php echo $row['message']; ?>
		</td>
	</tr>
<?php }}
else{
  ?>
  <tr>
  <td colspan="5" rowspan="1" headers="" class="w3-center">No message is found</td>
  </tr>
  <?php
} ?>
 
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