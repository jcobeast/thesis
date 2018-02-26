<?php
include '../dbconfig.php';

$id = $_GET['id'];

if (isset($id)) {

	$sql = "DELETE FROM appointments WHERE app_id = '$id'";
	$con->query($sql);
} 

?>