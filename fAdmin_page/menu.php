<!DOCTYPE html>
<html>
<head>
	<title>Menu Table</title>
	<meta charset="utf-8">
	<style>
	body {
		background: url(img51.jpg) ;
	}
	table , h1 {
    
    border-collapse: collapse;
    width: 45%;
    background-color: white;
    border-radius: 10px;
    text-align: center;
    
    
}

.menuitem h1 ,.menu-tb{
margin-left: 27%;
}
.menuitem h1 {
	color: black;
	font-weight: bold;
	font-size: 36px;
}

.button3  {
float: right;
margin-top: 36%;
margin-right: 28%;


}
.button2 input[type='submit'] {
background: transparent;
border: 1px solid black;
color: black;
border-radius: 20px;
width: 140px;
height: 40px;
font-weight: bold;
margin-left:60%;
cursor:pointer;
font-size:20px;
font-family :"Times New Roman",Times,serif;

}

.button2 input:hover[type='submit']{
background-color: white; }
}



	
</style>
	</head>

<body>

<?php

//if(isset($_POST['submit'])){//to run PHP script on submit
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
	$DATE = date('YYYY-MM-DD');
	$DAY = date($x);
	$QUANTITY = $_POST[$ID];
	$mysqlinsert="insert into currentmenu (DID,DISHES,PRICE,DAY,DATE,quantity) values ('$ID','$DISHES',$PRICE,'$DAY','$DATE','$QUANTITY')";
mysqli_query($con,$mysqlinsert);
}
}
}

?>


<form method="post" action="menu.php">

<div class="wrap">
	<div class="menuitem">
	 <h1><strong>Menu Items</strong></h1>
	</div>

	<?php
	
	include("dbconnection.php");
$sql="select * from mainmenu";
$result=mysqli_query($con,$sql);



if($result>0){
	echo "<table align='center'>";
	echo "<tr>";
	echo "<th>D_id</th>";
	  echo "<th>Dishes</th>";
	  echo "<th>Price</th>";
	  echo "<th>Check Boxes</th>";
	  echo "<th>Quantity</th>";
	  echo "</tr>";
  


  while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	//echo"<form id="form1" name="form1" method="post" action="cart.php">"
	
	echo "<td>" . $row['DID'] . "</td>";
	echo "<td>" . $row['DISHES'] . "</td>";
	echo "<td>" . $row['PRICE'] . "</td>";
	
	$dynamiclist ="<input class ='' type='checkbox' name='checkbox[]' value='". $row['DID'] ."'>";
//echo "<td><input type='checkbox'  /></td>";
	echo "<td>".$dynamiclist."</td>";
	echo "<td><input type='text' name='".$row['DID']."' placeholder='Enter total quantity' style='border'></td>"; 
	?> 
	
	<?php 

  }
   
  echo "</table>";
  echo "<br>";
  //echo "<td><input type='button' value='set value' style='background: transparent; border: 1px solid black; color: black; border-radius: 20px; width: 140px; height: 40px; font-weight: bold; margin-left:62% '></td>";
  mysqli_free_result($result);
  }
  else{
	echo "no record matching";
  }
	
	?>


<div class="button2">

<?php
//include("dbconnection.php");
//$S="INSERT INTO currentmenu (DID,DISHES,PRICE) SELECT DID,DISHES,PRICE FROM mainmenu";
//mysqli_query($con,$S);
?>
<input type="submit" name="btn" value="Set Menu" href="stdmenu.php" />
</div>



	</div>
	</form>
</body>
</html>