<?php
    session_start();	//Starting session here.
    extract($_REQUEST); // Extracting the Request.
    include("../dbconfig.php");

    $pwd = md5($_POST['pwd']);
   
    $sql = "SELECT * FROM multiusers_admin where (admin_email ='$email' OR admin_username='$email') and admin_password='$pwd'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    
   
   if(is_array($row)) {
        // setting the session variables.
        $_SESSION['start_time'] = time();
        $_SESSION["email"] = $row['admin_email'];
        $_SESSION["aid"] = $row['admin_id'];
        $_SESSION["username"] = $row['admin_username'];
    
    } else {      
	  echo "<script>window.location.assign('index.php?login=error')</script>"; 
    }
    
    if(isset($_SESSION["email"])) {
		echo "<script>window.location.assign('dashboard.php')</script>"; 
    }
 ?>