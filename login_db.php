<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }  //start the session

// $conn=new Users();

if(isset($_POST['sub']))//check wheather the user click on log in button
{   
            $userid= $_POST["college_id"];
            $pass= $_POST["password"];
            

            //create new object from logIn class
            include("db_con.php");
            include_once("signin.php");
            $conn=new logIn();
            
            $sql=$conn->loginquery("$userid","$pass"); //send the id and pass to the method for logging in
            $row = $sql -> fetch_array(MYSQLI_ASSOC);
            if(is_array($row))//The is_array() function checks whether a variable is an array or not.
            {
                $_SESSION["college_id"] = $row['college_id'];//Session variables are set with the PHP global variable: $_SESSION.
                $_SESSION["password"]=$row['password'];
                $_SESSION["name"]=$row['name'];
                $_SESSION["user_type"]=$row['user_type']; 
              
                    if( $_SESSION["user_type"] == 'student')
                    {
                        header("location: index.php");
                    } 
                    if( $_SESSION["user_type"] == 'educator')  
                    {
                        header("location: educator_home.php");
                    }
                    if( $_SESSION["user_type"] == 'admin')  
                    {
                        header("location: requests.php");
                    }

            }
               
            else
            {

                echo "<script> 
                window.alert('Invalid Username or Password!');
                window.location.href='login.php'; </script>";
               
            }
}


   
?>