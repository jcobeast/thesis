<?php 
include '../dbconfig.php';

	$appdesc = $_POST['appdesc'];
	$appsched = $_POST['appsched'];

    $con->query("UPDATE appointments
        		SET app_description='$appdesc'
        			
        		WHERE app_id='$_REQUEST[app_id]'");

       echo "<script>window.location.assign('appointments.php?upderr=true');</script>";    


 ?>