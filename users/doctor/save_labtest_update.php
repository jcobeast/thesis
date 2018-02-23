<?php 
include '../dbconfig.php';

	$tname = $_POST['tname'];
	$tdesc = $_POST['tdesc'];
	$tprice = $_POST['tprice'];

    $con->query("UPDATE labtest_lists
        		SET test_name='$tname', 
        			test_desc='$tdesc', 
        			test_amount='$tprice'
        			
        		WHERE test_id='$_REQUEST[test_id]'");

       echo "<script>window.location.assign('lab_test_list.php?upderr=true');</script>";      


 ?>