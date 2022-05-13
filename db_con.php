<?php

    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS' ,'');
    define('DB_NAME', 'procenterdb');
    class db_conn
    {
        function __construct()
        {
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        }
       
  
   }




?>