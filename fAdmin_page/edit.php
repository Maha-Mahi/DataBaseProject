<?php
ob_start();
include("dbconnection.php");
$userid= $_GET['user_id'];
$user=$_GET['fullname'];
$fath=$_GET['fathername'];
$email=$_GET['email'];
$pho=$_GET['phone'];
$gen=$_GET['gender'];
$mysql="update registration set FULLNAME='$user',FATHERS='$fath' ,EMAIL='$email', PHONE='$pho',GENDER='$gen' where RID='$userid'";
mysqli_query($con,$mysql);
header("location:managestd.php");
?>
