<?php
if(!empty($_POST['checkbox'])){
// Loop to store and display values of individual checked checkbox.
include("dbconnection.php");
$sql="DELETE FROM currentmenu";
$result=mysqli_query($con,$sql);

foreach($_POST['checkbox'] as $selected){
//echo $selected;

//}

$sql="select * from mainmenu where DID='$selected'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
   // echo "test:".$_POST['qtn'];
	$ID=$row['DID'];
	$DISHES=$row['DISHES'];
	$PRICE=$row['PRICE'];
	$DATE = date('Y-m-l');
	$DAY = date("D",$x);
    // $QUANTITY=$row['qtn'];
	$QUANTITY = $_POST['quantity'];
	$mysqlinsert="insert into currentmenu (DID,DISHES,PRICE,DAY,DATE,quantity) values ('$ID','$DISHES',$PRICE,'$DAY','$DATE','$QUANTITY')";
mysqli_query($con,$mysqlinsert);

}
}
}
?>