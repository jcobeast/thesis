<?php
include("../dbconfig.php");

$suser = $sfname = $slname = $smname = $semail = $spass = $scont = $sdesc ="";


if(isset($_POST['submit'])) {

	if (empty($_POST['suser'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$suser = $_POST['suser'];
	} 

	if (empty($_POST['semail'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$semail = $_POST['semail'];
	}

	if (empty($_POST['sfname'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$sfname = $_POST['sfname'];
	}

	if (empty($_POST['slname'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$slname = $_POST['slname'];
	}

	if (empty($_POST['smname'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$smname = $_POST['smname'];
	}

	if (empty($_POST['spass'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$spass = $_POST['spass'];
	}

	if (empty($_POST['scont'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$scont = $_POST['scont'];
	}

	if (empty($_POST['sdesc'])) {
		echo "<script>window.location.assign('add_staff.php?error=true');</script>";
	} else {
		$sdesc = $_POST['sdesc'];
	}

	if ($suser && $sfname && $slname && $smname && $semail && $spass && $scont && $sdesc) {
		$sql = "INSERT INTO `staff_info`(`staff_user`, `staff_email`, `staff_firstname`, `staff_lastname`, `staff_middlename`, `staff_password`, `staff_contnum`, `staff_desc`, `acc_type`) 
        VALUES ('$suser','$semail','$sfname','$slname','$smname','$spass','$scont','$sdesc','3')";

        $result = $con->query($sql);
		$last_id = $con->insert_id;

		if($result == True ){
			echo "<script>window.location.assign('list_of_staffs.php?asuccess=true');</script>";
		}

	}
}

?>