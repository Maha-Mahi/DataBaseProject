<?php
ob_start();
include("dbconnection.php");
$userid= $_GET['user'];
$dish=$_GET['dishname'];
$price=$_GET['price'];

$mysql="UPDATE mainmenu set DISHES='$dish' , PRICE='$price' where DID='$userid'";
mysqli_query($con,$mysql);
header("location:dish.php");
?>
