<?php

include("../dbconfig.php");

$duser = $dfname = $dlname = $dmname = $demail = $dpass = $dcont = $desc ="";

if(isset($_POST['submit'])) {

	if (empty($_POST['duser'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$duser = mysqli_real_escape_string($con, $_POST['duser']);
	} 

	if (empty($_POST['dfname'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$dfname = mysqli_real_escape_string($con, $_POST['dfname']);
	}

	if (empty($_POST['dlname'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$dlname = mysqli_real_escape_string($con, $_POST['dlname']);
	}

	if (empty($_POST['dmname'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$dmname = mysqli_real_escape_string($con,$_POST['dmname']);
	}

	if (empty($_POST['demail'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$demail = mysqli_real_escape_string($con, $_POST['demail']);
	}

	if (empty($_POST['dpass'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$dpass = mysqli_real_escape_string($con, $_POST['dpass']);
	}

	if (empty($_POST['dcont'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$dcont = mysqli_real_escape_string($con, $_POST['dcont']);
	}

	if (empty($_POST['desc'])) {
		echo "<script>window.location.assign('add_doctor.php?error=true');</script>";
	} else {
		$desc = mysqli_real_escape_string($con, $_POST['desc']);
	}

	if ($duser && $dfname && $dlname && $dmname && $demail && $dpass && $dcont && $desc) {
		$sql = "INSERT INTO `doctor_info`(`username`, `doc_firstname`, `doc_lastname`, `doc_middlename`, `email`, `password`, `doc_contnum`, `doc_desc`, `acc_type`) 
        VALUES ('$duser','$dfname','$dlname','$dmname','$demail','$dpass','$dcont','$desc','2' )";

        $result = $con->query($sql);
		$last_id = $con->insert_id;

		if($result == True ){
			echo "<script>window.location.assign('list_of_doctors.php?asuccess=true');</script>";
		}

	}
}

?>