<?php include 'files_logic.php';?>
<!DOCTYPE html>
<html>
<title>Educator-My materials</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="main.js"></script>
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
 <div class="w3-container margin-top ">
  <h2> Materials </h2>
<table class = "w3-table-all w3-hoverable">
<thead>
    <tr class="w3-teal">
    <th>Student ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

  <?php 
  
  
  
  if ( isset($result->num_rows) && $result->num_rows >0):  
  foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['stu_id']; ?></td>
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
  <?php $result -> free_result(); ?>
<!-- ---------------------------------------------- End of Download ------------------------------------------------------ -->
<!-- ---------------------------------------------- Upload ------------------------------------------------------ -->
</tbody>
</table>
<div class="row">
        <form action="#" method="post" enctype="multipart/form-data" >
       
        Upload File <input type="file" name="myfile[]" id="file" multiple required> <br> 
        
      <?php 
      $obj= new materials();
      $result1=$obj->viewStudentID();
      ?>
      Student ID <select name="student" class="w3-input" required>
      <option value="" disabled selected hidden>Select </option>
        <?php while($row2 = $result1 -> fetch_array(MYSQLI_NUM)):;
        ?>
        <option  value="<?php echo $row2[1];?>"><?php echo $row2[1];?></option>
        <?php endwhile;?>
      </select>
      <br>
          <button class="w3-button w3-teal w3-border w3-border-teal w3-round-large w3-hover-white" type="submit" name="save"> Upload Material</button>    
        </form>
      </div>
  </div>
</div>
<br><br>
<!-- ---------------------------------------------- End of Upload ------------------------------------------------------ -->
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