<?php

include("../dbconfig.php");

$aname = $asched = $adesc ="";

if(isset($_POST['submit'])) {

	if (empty($_POST['aname'])) {
		echo "<script>window.location.assign('appointments.php?upderr=true');</script>";
	} else {
		$aname = mysqli_real_escape_string($con, $_POST['aname']);
	} 

	if (empty($_POST['asched'])) {
		echo "<script>window.location.assign('appointments.php?upderr=true');</script>";
	} else {
		$asched = mysqli_real_escape_string($con, $_POST['asched']);
	}

	if (empty($_POST['adesc'])) {
		echo "<script>window.location.assign('appointments.php?upderr=true');</script>";
	} else {
		$adesc = mysqli_real_escape_string($con, $_POST['adesc']);
	}


	if ($aname && $asched && $adesc) {
		$sql = "INSERT INTO `appointments`(`pat_id`, `app_schedule`, `app_description`) 
        VALUES ('$aname','$asched','$adesc')";

        $result = $con->query($sql);
		$last_id = $con->insert_id;

		if($result == True ){
			echo "<script>window.location.assign('appointments.php?asuccess=true');</script>";
		}

	}
}

?>