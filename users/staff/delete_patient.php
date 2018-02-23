<?php
include '../dbconfig.php';

$id = $_GET['id'];

if (isset($id)) {

	$sql = "DELETE FROM patient_info WHERE pat_id = '$id'";
	$con->query($sql);
} 

?>