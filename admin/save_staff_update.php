<?php 
include '../dbconfig.php';

if(isset($_POST['submit'])) {
	$sid = $_POST['sid'];
	$suser = $_POST['suser'];
    $sfname = $_POST['sfname'];
    $slname = $_POST['slname'];
    $smname = $_POST['smname'];
    $scont = $_POST['scont'];
    $desc = $_POST['desc'];

    $sql = "SELECT * FROM staff_info WHERE staff_id='$sid'";
    $rows = $con->query($sql);
    $row = $rows->fetch_assoc();

        $update = "UPDATE staff_info
        		SET username='$suser', 
        			staff_firstname='$sfname', 
        			staff_lastname='$slname',
        			staff_middlename='$smname', 
        			staff_contnum='$scont', 
        			staff_desc='$desc'
        		WHERE staff_id='$sid'";

      	$con->query($update);
      	$sid = md5(rand(1,5));

        echo "<script>window.location.assign('list_of_staffs.php?updsucc=true?&&id=$sid');</script>";        
}

 ?>
