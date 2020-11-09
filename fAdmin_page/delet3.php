<?php
ob_start();

include('dbconnection.php');
if(isset($_GET['delete'])){
$id=$_GET['delete'];
echo $id;
$sql="delete from feedback where ID=$id";
mysqli_query($con,$sql);
echo "succes";
header("location:feedbackcon.php");
}


?>