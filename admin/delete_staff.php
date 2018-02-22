<?php
include '../dbconfig.php';

$id = $_GET['id'];

if (isset($id)) {

	$sql = "DELETE FROM staff_info WHERE staff_id = '$id'";
	$con->query($sql);
} 

?>