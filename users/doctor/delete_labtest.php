<?php
include '../dbconfig.php';

$id = $_GET['id'];

if (isset($id)) {

	$sql = "DELETE FROM labtest_lists WHERE test_id = '$id'";
	$con->query($sql);
} 

?>