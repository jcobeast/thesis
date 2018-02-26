<?php

include("../dbconfig.php");

$patname = $pathistory = $medication = $desc = $date = "";

if(isset($_POST['submit'])) {

	if (empty($_POST['patname'])) {
		echo "<script>window.location.assign('manage_prescription.php?upderr=true');</script>";
	} else {
		$patname = mysqli_real_escape_string($con, $_POST['patname']);
	} 

	if (empty($_POST['pathistory'])) {
		echo "<script>window.location.assign('manage_prescription.php?upderr=true');</script>";
	} else {
		$pathistory = mysqli_real_escape_string($con, $_POST['pathistory']);
	}

	if (empty($_POST['medication'])) {
		echo "<script>window.location.assign('manage_prescription.php?upderr=true');</script>";
	} else {
		$medication = mysqli_real_escape_string($con, $_POST['medication']);
	}

	if (empty($_POST['desc'])) {
		echo "<script>window.location.assign('manage_prescription.php?upderr=true');</script>";
	} else {
		$desc = mysqli_real_escape_string($con, $_POST['desc']);
	}

	if (empty($_POST['date'])) {
		echo "<script>window.location.assign('manage_prescription.php?upderr=true');</script>";
	} else {
		$date = mysqli_real_escape_string($con, $_POST['date']);
	}



	if ($patname && $pathistory && $medication && $desc && $date) {
		$sql = "INSERT INTO `manage_prescriptions`(`date_of_prescription`, `case_history`, `medication`, `description`, `pat_id`) 
        VALUES ('$date','$pathistory','$medication','$desc','$patname')";

        $result = $con->query($sql);
		$last_id = $con->insert_id;

		if($result == True ){
			echo "<script>window.location.assign('manage_prescription.php?asuccess=true');</script>";
		}

	}
}

?>