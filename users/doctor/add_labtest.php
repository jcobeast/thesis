<?php

include("../dbconfig.php");

$tname = $tdesc = $tamount = "";

if(isset($_POST['submit'])) {

	if (empty($_POST['tname'])) {
		echo "<script>window.location.assign('lab_test_list.php?error=true');</script>";
	} else {
		$tname = $_POST['tname'];
	} 

	if (empty($_POST['tdesc'])) {
		echo "<script>window.location.assign('lab_test_list.php?error=true');</script>";
	} else {
		$tdesc = $_POST['tdesc'];
	}

	if (empty($_POST['tamount'])) {
		echo "<script>window.location.assign('lab_test_list.php?error=true');</script>";
	} else {
		$tamount = $_POST['tamount'];
	}



	if ($tname && $tdesc && $tamount) {
		$sql = "INSERT INTO `labtest_lists`(`test_name`, `test_desc`, `test_amount`) 
        VALUES ('$tname','$tdesc','$tamount')";

        $result = $con->query($sql);
		$last_id = $con->insert_id;

		if($result == True ){
			echo "<script>window.location.assign('lab_test_list.php?asuccess=true');</script>";
		}

	}
}

?>