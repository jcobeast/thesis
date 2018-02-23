<?php 
include '../dbconfig.php';

	$puser = $_POST['puser'];
	$pfname = $_POST['pfname'];
	$plname = $_POST['plname'];
	$pmname = $_POST['pmname'];
	$pcont = $_POST['pcont'];
	$page = $_POST['page'];
	$pbdate = $_POST['pbdate'];
	$pgrd = $_POST['pgrd'];
	$paddress = $_POST['padd'];

    $con->query("UPDATE patient_info
        		SET username='$puser', 
        			pat_firstname='$pfname', 
        			pat_lastname='$plname',
        			pat_middlename='$pmname', 
        			pat_contnum='$pcont', 
        			pat_age='$page',
        			birthdate='$pbdate', 
        			pat_guardian='$pgrd', 
        			pat_address='$paddress'
        			
        		WHERE pat_id='$_REQUEST[pat_id]'");

       echo "<script>window.location.assign('list_of_patients.php?upderr=true');</script>";      


 ?>
