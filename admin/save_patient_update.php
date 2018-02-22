<?php 
include '../dbconfig.php';

if(isset($_POST['submit'])) {
	$pid = $_POST['pid'];
	$puser = $_POST['puser'];
	$pfname = $_POST['pfname'];
	$plname = $_POST['plname'];
	$pmname = $_POST['pmname'];
	$pcont = $_POST['pcont'];
	$page = $_POST['page'];
	$pbdate = $_POST['pbdate'];
	$pgrd = $_POST['pgrd'];
	$paddress = $_POST['padd'];
	$pcity = $_POST['pcity'];
	$pprov = $_POST['pprov'];
	$padd = $paddress.' '.$pcity.' '.$pprov;

    $sql = "SELECT * FROM patient_info WHERE pat_id='$pid'";
    $rows = $con->query($sql);
    $row = $rows->fetch_assoc();

        $update = "UPDATE patient_info
        		SET username='$puser', 
        			pat_firstname='$pfname', 
        			pat_lastname='$plname',
        			pat_middlename='$pmname', 
        			pat_contnum='$pcont', 
        			pat_age='$page'
        			birthdate='$pbdate', 
        			pat_guardian='$pgrd', 
        			pat_address='$padd'
        			
        		WHERE pat_id='$pid'";

      	$con->query($update);
      	$sid = md5(rand(1,5));

       echo "<script>window.location.assign('list_of_patients.php?upderr=true');</script>";      
}

 ?>
