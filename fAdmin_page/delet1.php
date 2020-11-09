<?php
ob_start();

include('dbconnection.php');
if(isset($_GET['delete'])){
$eid=$_GET['delete'];
echo $eid;
$sq="delete from chef where CHEF_ID='$eid'";
mysqli_query($con,$sq);
echo "succes";
header("location:managechef.php");
}


?>