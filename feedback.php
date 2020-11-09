<?php

if(isset($_POST['sbmit'])){
include("dbconnection.php");

$name=$_POST["firstname"];
$comment=$_POST["comments"];

 $sql="INSERT INTO feedback (FULL_NAME,COMMENTS ) VALUES ('$name','$comment');";
    mysqli_query($con,$sql);
header("location:html1.html");
    
echo '<script language="javascript">';
echo 'alert("Feedback inserted...")';
echo '</script>';
}
?>
