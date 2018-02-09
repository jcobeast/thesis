<?php

include("../dbconfig.php");

$mname = $mdesc = $mquantity = $mamount ="";

if(isset($_POST['submit'])) {

	if (empty($_POST['mname'])) {
		echo "<script>window.location.assign('medicine_stocks.php?error=true');</script>";
	} else {
		$mname = $_POST['mname'];
	} 

	if (empty($_POST['mdesc'])) {
		echo "<script>window.location.assign('medicine_stocks.php?error=true');</script>";
	} else {
		$mdesc = $_POST['mdesc'];
	}

	if (empty($_POST['mquantity'])) {
		echo "<script>window.location.assign('medicine_stocks.php?error=true');</script>";
	} else {
		$mquantity = $_POST['mquantity'];
	}

	if (empty($_POST['mamount'])) {
		echo "<script>window.location.assign('medicine_stocks.php?error=true');</script>";
	} else {
		$mamount = $_POST['mamount'];
	}



	if ($mname && $mdesc && $mquantity && $mamount) {
		$sql = "INSERT INTO `medicines`(`med_name`, `med_desc`, `med_quantity`, `med_price`) 
        VALUES ('$mname','$mdesc','$mquantity','$mamount')";

        $result = $con->query($sql);
		$last_id = $con->insert_id;

		if($result == True ){
			echo "<script>window.location.assign('medicine_stocks.php?asuccess=true');</script>";
		}

	}
}

?>