<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>My Orders</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<style>

 @import" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
    

.wrap {
	  max-width: 100%;
      max-height: 100%;
      

}
.feedbackcon {
      width: 100%;
        margin-top:40px;
      max-width: 100%;
      max-height: 100%;
      font-family: "Times New Roman",Times, serif; 
     font-weight: bold;
      font-size: 26px;
	}
	table {

    width: 970px;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.2);
}

th,
td {
    padding: 15px;
    background-color: rgba(14, 19, 58, 1);
    color: #fff;
text-align: center;
font-family: "Times New Roman",Times, serif; 
    
} 
tr:hover {background-color:#C0C0C0;
} 
th {
    text-align: center;
}

thead {
    th {
        background-color: #55608f;
    }
}

tbody {
    tr {
        &:hover {
            background-color: rgba(255,255,255,0.3);
        }
    }
    td {
        position: relative;
        &:hover {
            &:before {
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                top: -9999px;
                bottom: -9999px;
                background-color: rgba(255,255,255,0.2);
                z-index: -1;
            }
        }
    }
}
.reset input[type='reset']{

        width: 140px;
        height: 40px;
        background: transparent;
        color:  black;
        border: 2px solid rgba(16, 48, 70, 1);
        border-radius: 20px;
        font-weight: bold;
        cursor: pointer;
        margin-left: 56%;
        margin-top: 1%;        
}

.reset input:hover[type='reset']{
background-color: white; }
</style>

<body>
<form method="post" action=>
<div class="wrap">
<div class="feedbackcon">
  		<h1 align="center"> STUDENT ORDERS </h1>
</div>

<div class="tb">
    <table align="center">
    <thead>
            <tr>
                <th>Student's Name</th>
                <th>Orders</th>
                <th>Quantity</th>
                <th>Clear Record</th>
                
            </tr>
</thead>
</div>

<tbody>
<?php
include("dbconnection.php");
$sq="select * from dues";
$result=mysqli_query($con,$sq);
while($rows=mysqli_fetch_array($result)){
    echo '<tr>
    <td>'.$rows["USERNAME"].'</td>
    <td>'.$rows["ORDER"].'</td>
    <td>'.$rows["QUANTITY"].'</td>
    <td><a href="delet4.php?delete='.$rows['ALLOTMENTNO'].'" class="btn btn-danger">Delete</a></td>
    </tr>';
}
?>



</tbody>
</table>
</div>
</form>
</body>
</html>