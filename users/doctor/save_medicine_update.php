<?php 
include '../dbconfig.php';

	$medname = $_POST['medname'];
	$meddesc = $_POST['meddesc'];
	$mquantity = $_POST['mquantity'];
    $medprice = $_POST['medprice'];

    $con->query("UPDATE medicines
        		SET med_name='$medname', 
        			med_desc='$meddesc', 
        			med_quantity= med_quantity+'$mquantity',
                    med_price='$medprice'
        			
        		WHERE med_id='$_REQUEST[med_id]'");

       echo "<script>window.location.assign('medicine_stocks.php?upderr=true');</script>";    


 ?>