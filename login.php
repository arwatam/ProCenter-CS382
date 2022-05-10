<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log in</title>
</head>
<body>
<!-- logo of the website  -->
<div class="w3-container">
    <a href="login.html" class="w3-bar-item w3-button w3-hover-none w3-left">
      <img src="images/ProCenter-logo.png" class="logo" alt="ProCenter logo"/>
    </a>
</div>
<!-- end of the website -->
<!------------------------------------------------Start log in form--------------------------------------------->
<?php 
include "login_db.php";
?>
<div class="w3-container w3-display-topmiddle w3-padding-large" > <h1>
  Welcome to <b class="w3-text-teal">ProCenter</b> 
</h1></div>
<div class="w3-row">
  <div class="w3-col " >
    <form action="login_db.php" method="post" class=" w3-container w3-card-2 width-login w3-half w3-display-right  ">
    <br>
    <div>
      <h2 class="w3-center w3-text-teal "><i class="fa fa-sign-in w3-margin-right Edit-out-logo-size " ></i>Log in</h2>
    </div>
       <hr class="w3-gray ">
      <div class="w3-row w3-section">
        <div class="w3-col logo-width" ><i class="fa fa-user w3-xlarge w3-text-teal" ></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="college_id" type="text" placeholder="User name" required>
          </div>
      </div>
      <div class="w3-row w3-section">
          <div class="w3-col logo-width" ><i class="w3-xlarge fa fa-lock w3-text-teal"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border " name="password" type="password" placeholder="Password" required>
            </div>
        </div>      
      <div class=" w3-padding-16"> 
        <input class=" w3-center w3-round-large w3-padding-large w3-teal w3-input w3-hover-shadow" name="sub" type="submit" value="Log in">
       
      </div>
      </form>

    <!-- -------------------image part------------------- -->
  </div>
  <div class="w3-rest">
    <div class=" w3-half w3-margin ">
      <img src="images/ProCenter login.svg"  alt="ProCenter image" >
     </div>
  </div>
</div>
    <!-- -------------------end of image part------------------- -->


<!------------------------------------------------end of log in form---------------------------------------------> 
</body>
</html>