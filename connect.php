<?php @session_start();
     $servername = "";
     $username = "";
     $password = "";
     $database = "";
     
     $conn = mysqli_connect($servername,$username,$password,$database) or die (mysqli_error());
     mysqli_query($conn,"set character set utf8");
     error_reporting(E_ALL ^ E_NOTICE);
				
     date_default_timezone_set('Asia/Bangkok');

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
?>