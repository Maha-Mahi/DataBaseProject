<?php
session_start();
if(!isset($_SESSION['login'])){
    //header location login page
    header("location:/dbmaproject.com/index.php");
}
?>
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>



    <title>My admin Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="960_12_col.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="container_12">
        <div class="grid_4" style="height: 900px;">
            <p><strong>MESS <strong>ADMIN</strong></p>
            <ul>
                <li>
                    <a href="index.php"><i class="fa fa-th" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="managestd.php" target=""><i class="fa fa-user-o" aria-hidden="true"></i> Manage Student</a></li>
                <li><a href="managechef.php"><img src="chef2.png"> Manage chefs</a></li>
                <li><a href="menu.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Add Menu</a></li>
                <li><a href="dish.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Dishes/Prices</a></li>
            </ul>
        </div>
        <div class="grid_12">
            <h1><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></h1>
        </div>

        <div class="container">
            <!--    // Paste your code here for section    -->
<style>

.container {
        margin: 0;
        font-family: sans-serif;
       font-weight: 100;
       background: white;
       position: absolute;
    top: 48%;
    left: 48%;
    width: 80%;
        transform: translate(-43%, -31%);

   
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

.textarea2 input[type=text]{
    width: 90%;
    background: #f2f2f2;
    margin: 0 0 10px;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 5px;
    margin-left: 10px;
    border: 1px solid rgba(16, 48, 70, 1);

}


.textarea2 label {
font-weight: bold;
color: black;

}

input[type='submit']{

        width: 140px;
        height: 40px;
        background: transparent;
        color:  black;
        border: 2px solid rgba(16, 48, 70, 1);
        border-radius: 20px;
        font-weight: bold;
        cursor: pointer;
        
        
}
.textarea2 input:hover[type='submit']{
background-color: white; }

 

.h1 h1 {
font-family: courier new;
font-size: 30px;

}

  

.textarea2 .h1 h1 {

margin: 0px;

}
.textarea2 {
  margin-left: 20px;
}
.points3 input [type='text']{
    margin-left: -10%;
}
.buttons {
    margin-left: 60%;
    margin-top: 0.5%;

}

#scrolltable { margin-top: 20px; height: 310px; overflow: auto; width:119%;}


</style>
<?php
include("dbconnection.php");

if(isset($_REQUEST["edit"])){
  $eid=$_REQUEST["edit"];
 $mysq="select * from registration where RID='$eid'";
 $result=mysqli_query($con,$mysq); 
 $rows=mysqli_fetch_array($result);


}
?>


<body>

<form action="edit.php">

<div class="container">
    <div class="h1">
  <h1 style="text-align: left; font-size: 30px; text-decoration: underline; color: black;"><strong><i>Manage Students</i></strong></h1>
</div>

<div class="textarea2">
<div class="fullname">
<label color="white">Full Name:  </label> 
<input type="text" name="fullname" placeholder="Enter full Name" style="border" value="<?php echo $rows["FULLNAME"] ?>">
</div> 

<div class="fathername">
<label>Father's name:</label> 
<input type="text" name="fathername" placeholder="Enter father's name" value="<?php echo $rows["FATHERS"] ?>">
</div>

<div class="email">
<label>Email:</label> 
<br>
<input type="text" name="email" placeholder="Enter Email" value="<?php echo $rows["EMAIL"] ?>">
</div>

<div class="phone">
<label> Phone No::</label> 
<input type="text" name="phone" placeholder="Enter phone" value="<?php echo $rows["PHONE"] ?>">  
</div>

<div class="gender">
<label>Enter Gender:</label> 
<input type="text" name="gender" placeholder="gender" value="<?php echo $rows["GENDER"] ?>">  
</div>


 <div class="submit">
<input type="submit" name="discard-btn" value="Discard">
 
<input type="HIDDEN" name="user_id" value="<?php echo $rows["RID"]?>"/>
<a href="edit.php?ID=<?php echo $rows["RID"] ?>"> 
<input type="submit" name="save-btn" value="Save"> 
</div>
</div>
</form>



<h2 style="text-align: left; font-size: 30px; text-decoration: underline; color: black; font-family: courier new;"><strong><i>Students' Information</strong></i></h2>

<div id="scrolltable">
<div class="ok">
<form action="delet.php" method="POST"> 

    <table>
        <thead>
            <tr>
            <th>Full Name</th>
            <th>Fathers Name</th>
            <th>Email</th>
         <th>Phn-no</th>
         <th>Gender</th>
         <th>Update</th>
         <th>Delete</th>
  </tr>
        </thead>
    </div>
        <tbody>

            <?php


//for($i=1; $i<=2; $i++) {
  require_once "dbconnection.php";
  include("dbconnection.php");

  
  $sql="select * from registration";
  $result=mysqli_query($con,$sql);
  
  while ($rows=mysqli_fetch_array($result))
  { echo '<tr>
    <td>'.$rows['FULLNAME'].'</td>
    <td>'.$rows['FATHERS'].'</td>
    <td>'.$rows['EMAIL'].'</td>
    <td>'.$rows['PHONE'].'</td>
    <td>'.$rows['GENDER'].'</td>
    <td><a href="managestd.php?edit='.$rows['RID'].'" class="btn btn-danger">edit</a></td>
    <td><a href="delet.php?delete='.$rows['RID'].'" class="btn btn-danger">Delete</a></td>
    </tr>';
      
    
    }

     ?>
        </tbody>
    </table>
</div>
</form>
            <!--    // Paste your code here for section    -->
</div>