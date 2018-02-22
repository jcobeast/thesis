<?php 
include '../dbconfig.php';

if(isset($_POST['submit'])) {
	$did = $_POST['did'];
	$duser = $_POST['duser'];
    $dfname = $_POST['dfname'];
    $dlname = $_POST['dlname'];
    $dmname = $_POST['dmname'];
    $dcont = $_POST['dcont'];
    $desc = $_POST['desc'];

    $sql = "SELECT * FROM doctor_info WHERE doc_id='$did'";
    $rows = $con->query($sql);
    $row = $rows->fetch_assoc();

        $update = "UPDATE doctor_info
        		SET username='$duser', 
        			doc_firstname='$dfname', 
        			doc_lastname='$dlname',
        			doc_middlename='$dmname', 
        			doc_contnum='$dcont', 
        			doc_desc='$desc'
        		WHERE doc_id='$did'";

      	$con->query($update);
      	$did = md5(rand(1,5));

        echo "<script>window.location.assign('list_of_doctors.php?updsucc=true?&&id=$did');</script>";        
}

 ?>
