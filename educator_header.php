<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />   
<header class="w3-container">
      <a href="index.php" class="w3-bar-item w3-button w3-left"
        ><img src="images/ProCenter-logo.png" class="logo" alt="ProCenter logo"
      /></a>

      <div class="w3-dropdown-hover w3-mobile w3-right">
        <button class="w3-button w3-padding-16 ">
          <img src="images/profile.png" alt="profile logo" class="icons" />
        </button>
        <div class="w3-dropdown-content w3-bar-block  w3-teal progile-right">
          
          <a
            href="logout.php?logout"
            class="w3-bar-item w3-button  w3-mobile w3-hover-light-grey w3-hover-text-pink color"
            ><i class="fa fa-sign-out w3-margin-right Edit-out-logo-size" ></i>Log out</a
          >
        </div>
      </div>
      <nav class="w3-navbar w3-text-grey w3-display-topmiddle w3-margin-top">
        <a
          href="educator_home.php"
          class="w3-bar-item w3-button w3-hover-none w3-hover-text-pink w3-mobile color " 
          >Home</a
        >
       
        <div class="w3-dropdown-hover w3-mobile menu">
          <button class="w3-button w3-hover-text-pink w3-padding-16 w3-hover-none menu">
            Appointment <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content  w3-bar-block w3-teal menus-content">
            <a
              href="educator_appointment.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink color"
              >My Appointment</a
            >
            <a
              href="educator_schedule.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink color"
              >My Schedual</a
            >
            <a
            href="educator_materials.php"
            class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink color"
            >My Materials</a
          >
          </div>
        </div>

        <a
          href="about.php"
          class="w3-bar-item w3-button w3-hover-white w3-hover-text-pink w3-padding-32 color"
          >About</a
        >
        <a
          href="contact.php"
          class="w3-bar-item w3-button w3-hover-white w3-hover-text-pink w3-padding-32 color"
          >Contact</a
        >
      </nav>
    </header>
            <script>
              // $(document).ready(function(){
              //   $(".color").click(function(){
              //     $(this).addClass("w3-text-pink");
              //   // $(".color").css("color","pink");
              //   });
              // });
         
              $(document).ready(function(){
                $(".menu").click(function(){
                  // $('.menus-content').toggle();
                  $('.menus-content').toggle(800);
                });
              });

            </script>