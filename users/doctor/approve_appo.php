<?php

include '../dbconfig.php';

$app_id= $_GET['id'];

$sql = "SELECT * FROM appointments LEFT JOIN patient_info ON appointments.pat_id=patient_info.pat_id WHERE appointments.app_id='$app_id'";

$rows = $con->query($sql);
$row = $rows->fetch_assoc();

if (isset($_POST['approve'])) {

$msg = $_POST['message'];
$sched = $_POST['sched'];
$app = $row['app_id'];
$pat = $row['pat_id'];

$sql_dec = "UPDATE `appointments` SET `status`= 1,`app_schedule`='$sched' WHERE `app_id`='$app_id'";

$sql2 = "INSERT INTO `app_messages`(`message`, `app_id`, `pat_id`) 
        VALUES ('$msg','$app', '$pat')";

$result2 = mysqli_query($con, $sql2);
echo "<script>window.location.assign('apo_approve.php?id=$app_id?asuccess=true');</script>";

$result = mysqli_query($con, $sql_dec);
echo "<script>window.location.assign('apo_approve.php?id=$app_id?asuccess=true');</script>";

}

if (isset($_POST['decline'])) {
$msg = $_POST['message'];
$app = $row['app_id'];
$pat = $row['pat_id'];

$sql_dec = "UPDATE `appointments` SET `status`= 3 WHERE `app_id`='$app_id'";

$sql2 = "INSERT INTO `app_messages`(`message`, `app_id`, `pat_id`) 
        VALUES ('$msg','$app', '$pat')";

$result2 = mysqli_query($con, $sql2);

$result = mysqli_query($con, $sql_dec);
echo "<script>window.location.assign('apo_approve.php?id=$app_id?asuccess=true');</script>";
}
 ?>