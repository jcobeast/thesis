<?php
include("../dbconfig.php");

$puser = $pfname = $plname = $pmname = $pemail = $ppass = $pcont = $page = $pbdate = $pgrd = $padd = $pcity = $pprov = "";


if(isset($_POST['submit'])) {

	if (empty($_POST['puser'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$puser = $_POST['puser'];
	} 

	if (empty($_POST['pfname'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$pfname = $_POST['pfname'];
	}

	if (empty($_POST['plname'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$plname = $_POST['plname'];
	}

	if (empty($_POST['pmname'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$pmname = $_POST['pmname'];
	}

	if (empty($_POST['pemail'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$pemail = $_POST['pemail'];
	}

	if (empty($_POST['ppass'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$ppass = $_POST['ppass'];
	}

	if (empty($_POST['pbdate'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$pbdate = $_POST['pbdate'];
	}

	if (empty($_POST['pcont'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$pcont = $_POST['pcont'];
	}

	if (empty($_POST['page'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$page = $_POST['page'];
	}

	if (empty($_POST['pgrd'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$pgrd = $_POST['pgrd'];
	}

	if (empty($_POST['padd']) && empty($_POST['pcity']) && empty($_POST['pprov'])) {
		echo "<script>window.location.assign('add_patient.php?error=true');</script>";
	} else {
		$padd = $_POST['padd']. ',' .$_POST['pcity']. ',' .$_POST['pprov'];
	}


	if ($puser && $pfname && $plname && $pmname && $pemail && $ppass && $pbdate && $pcont && $page && $pgrd && $padd) {

		$sql_u = "SELECT * FROM patient_info WHERE username='$puser'";
  		$sql_e = "SELECT * FROM patient_info WHERE email='$pemail'";
  		$res_u = mysqli_query($con, $sql_u);
  		$res_e = mysqli_query($con, $sql_e);

  		if (mysqli_num_rows($res_u) > 0) {
	  	  	echo "<script>window.location.assign('add_patient.php?adderror=true');</script>";
	  	}else if(mysqli_num_rows($res_e) > 0){
	  	 	echo "<script>window.location.assign('add_patient.php?adderror=true');</script>";
	  	}else{

			$sql = "INSERT INTO `patient_info`(`username`, `email`, `password`, `pat_firstname`, `pat_lastname`, `pat_middlename`, `birthdate`, `pat_age`, `pat_guardian`, `pat_address`, `pat_contnum`, `acc_type`) 
	        VALUES ('$puser', '$pemail', '$ppass', '$pfname','$plname','$pmname','$pbdate','$page','$pgrd','$padd','$pcont','3')";

	        $result = $con->query($sql);
			$last_id = $con->insert_id;

			if($result == True ){
				echo "<script>window.location.assign('list_of_patients.php?asuccess=true');</script>";
			}
		}
	}
}

?>