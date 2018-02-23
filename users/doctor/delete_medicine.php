<?php
include '../dbconfig.php';

$id = $_GET['id'];

if (isset($id)) {

	$sql = "DELETE FROM medicines WHERE med_id = '$id'";
	$con->query($sql);
} 

?>