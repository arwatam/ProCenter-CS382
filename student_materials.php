<?php include 'files_logic.php';?>
<html>
<title>Student-My materials</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
<?php 
   //session_start();
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
<!-- ---------------------------------------------- Materials part------------------------------------------------------ -->
<!-- ---------------------------------------------- Download ------------------------------------------------------ -->
<div class="w3-container w3-padding-64">
<h2> Materials </h2>
<table class =  "w3-table-all w3-hoverable">
<thead>
    <tr class="w3-teal">
    <th>Educator name</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Download no</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
  
  <?php 
  if ($result2->num_rows > 0):
  foreach ($f as $file):?>
    <tr>
    <td><?php echo $file['edu_name']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="student_materials.php?file_id=<?php echo $file['no'] ?>" class="w3-btn w3-round w3-teal ">Download</a></td>
    </tr>
  <?php endforeach;?>
  <?php else: ?>
        <tr>
        <td colspan="5" rowspan="1" headers="" class="w3-center">No materials is Found</td>
        </tr>
  <?php endif; ?>
  <?php $result2 -> free_result(); ?>
</tbody>
</table>
</div>
<!-- ---------------------------------------------- End of Download ------------------------------------------------------ -->

   <!-- ----------------------------------------------End of Materials part------------------------------------------------------ -->
   
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