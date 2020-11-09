<?php
ob_start();

include('dbconnection.php');
if(isset($_GET['delete'])){
$eid=$_GET['delete'];
echo $eid;
$sq="delete from MAINMENU where DID='$eid'";
mysqli_query($con,$sq);
echo "succes";
header("location:dish.php");
}


?>