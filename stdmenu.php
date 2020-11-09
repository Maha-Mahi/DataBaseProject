<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<style>
	body {
		background: url(32.jpg) no-repeat;
	}
	table , h1 {
    
    border-collapse: collapse;
    width: 45%;
    background-color: white;
    border-radius: 10px;
    text-align: center;
   }

.button2  {
float: right;
margin-right: 35%;


}
.button2 input[type='submit'] {
background: white;
border: 1px solid black;
color: black;
border-radius: 20px;
width: 140px;
font-weight: bold;	
cursor:pointer;
}
.button2 input:hover[type='submit']{
background-color: white; }
}
tr:hover {background-color:#f5f5f5;}
.menuitem h1 ,.menu-tb{
margin-left: 27.5%;
}
.menuitem h1 {
	color: black;
	font-weight: bold;
	font-size: 36px;
}
.container {
	width: 100%;
	
}
.grid {
float: right;
margin-left: -30%;

}


.grid img {
	width: 80%;
	height: 750px;
	margin-left: -9%;
	margin-top:  -135px;

}


 </style>
	</head>
<body>
<div class="wrap">
	<div class="menuitem">
	 <h1>TODAY MENU</h1>
	</div>

<tbody>
<form method="POST" action="stdmenu.php">
     
<?php


if(isset($_POST['submit'])){

include("dbconnection.php");
foreach($_POST['checkbox'] as $selected){

$sql="select * from mainmenu where DID='$selected'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){


   // echo "test:".$_POST['qtn'];
	$ID = $row['DID'];
	$DISHES=$row['DISHES'];
	$PRICE=$row['PRICE'];
	$QUANTITY = $_POST[$ID];
	$ALLOTMENTNO = $_SESSION['allotnum'];
	$Name = $_SESSION['name'];
	$updateQuery = mysqli_query($con, "UPDATE currentmenu SET QUANTITY = QUANTITY - $QUANTITY WHERE DISHES = '$DISHES'");
	$mysqlinsert="INSERT INTO `dues` (`ALLOTMENTNO`, `MONEY`, `USERNAME`, `QUANTITY`, `ORDER`) VALUES ('$ALLOTMENTNO', $PRICE*$QUANTITY , '$Name', $QUANTITY, '$DISHES');";
$res = mysqli_query($con,$mysqlinsert);

}
}
}


include("dbconnection.php");
$sql="select * from currentmenu";
$result=mysqli_query($con,$sql);

echo "<table align='center'>";
echo "<tr>";
echo "<th>Dishes</th>";
echo "<th>Prize</th>";
echo "<th>Available_Quantity</th>";

echo "<th>Checkboxes</th>";
echo "<th>Quantity</th>";


echo "</tr>";


if($result>0){
  
  while($row=mysqli_fetch_array($result)){
	
	echo "<tr>";
	echo "<td>" . $row['DISHES'] . "</td>";
  echo "<td>" . $row['PRICE'] . "</td>";
  echo "<td>" . $row['QUANTITY'] . "</td>";

  $dynamiclist ="<input type='checkbox' name='checkbox[]' value='". $row['DID'] ."'>";
	  echo "<td>".$dynamiclist."</td>";
	  if($row['QUANTITY'] != 0){
		echo "<td><input type='text' name='".$row['DID']."' placeholder='Enter quantity' style='border'></td>"; 
	  }else {
		echo "<td>Cannot order</td>"; 
	  }
  	

  
  }
   
  echo "</table>";
  echo "<br>";
  mysqli_free_result($result);
  }
  else{
	echo "no record matching";
  }
	?>

<div class="button2">
<input type="submit" name="submit" value="Confirm Order"/>
</div>

</div>
</form>

</body>
</html>