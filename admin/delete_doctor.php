<?php
include '../dbconfig.php';

$id = $_GET['id'];

if (isset($id)) {

	$sql = "DELETE FROM doctor_info WHERE doc_id = '$id'";
	$con->query($sql);
} 

?>