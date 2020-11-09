<?php
ob_start();
include("dbconnection.php");
$userid= $_GET['user_id'];
$fisrt=$_GET['firstname'];
$last=$_GET['lastname'];
$phone=$_GET['phone'];
$mysql="UPDATE chef set FIRSTNAME='$fisrt' , LASTNAME='$last' , PHONE='$phone' where CHEF_ID='$userid'";
mysqli_query($con,$mysql);
header("location:managechef.php");
?>
