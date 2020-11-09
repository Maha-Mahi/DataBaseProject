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
        <div class="grid_4" style="height: 990px;">
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
<style>

.container {
        margin: 0;
        font-family: sans-serif;
       font-weight: 100;
       background: white;
       position: absolute;
    top: 48%;
    left: 50%;
    width: 80%;
        transform: translate(-45%, -38%);

   
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
tr:hover { background-color: yellow;
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
background-color: #336589; }

 

.h1 h1 {
font-family: Comic Sans MS;
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
 $mysq="select * from mainmenu where DID='$eid'";
 $result=mysqli_query($con,$mysq); 
 $rows=mysqli_fetch_array($result);


}
?>


<body>
<form action="edit2.php">

<div class="container">
    <div class="extra">

    <div class="h1">
  <h1 style="text-align: left; font-size: 30px; text-decoration: underline; color: black;"><strong><i>Manage Dishes</i></strong></h1>
</div>

<div class="textarea2">

<div class="dishname">
<label>Dish Name:  </label> 
<input type="text" name="dishname" placeholder="Enter Dish" style="border" value="<?php echo $rows["DISHES"] ?>">
<br> 
</div> 
<div class="price">
<label>Dish Price:</label> 
<input type="text" name="price" placeholder="Enter price" value="<?php echo $rows["PRICE"] ?>">
<br>
</div>



 <div class="submit">
<input type="submit" name="discard-btn" value="Discard">
 
<input type="HIDDEN" name="user" value="<?php echo $rows["DID"]?>"/>
<a href="edit2.php?ID=<?php echo $rows["DID"] ?>">

<input type="submit" name="save-btn" value="Save"> 
</div>
</div>
</form>

<h2 style="text-align: left; font-size: 30px; text-decoration: underline; color: black; font-family: Comic Sans MS;"><strong><i>ITEMS iNFORMATION</strong></i></h2>
<div id="scrolltable">

<div class="ok">
<form action="delet2.php" method="POST">

    <table>
        <thead>
            <tr>
                <th>DISHES_NAME</th>
                <th>PRICE</th>
            
                <th>UPDATE</th>
                <th>DELET</th>
            </tr>
        </thead>
    </div>
        <tbody>

        <?php
            require_once "dbconnection.php";
            include("dbconnection.php");

            $sql="select * from mainmenu";
            $result=mysqli_query($con,$sql);

//for($i=1; $i<6; $i++) {
    while($rows=mysqli_fetch_array($result)){
echo '<tr>
<td>'.$rows['DISHES'].'</td>
<td>'.$rows['PRICE'].'</td>
<td><a href="dish.php?edit='.$rows['DID'].'" class="btn btn-danger">edit</a></td>
<td><a href="delet2.php?delete='.$rows['DID'].'" class="btn btn-danger">Delete</a></td>
 
    </tr>';
} 

     ?>
        </tbody>
    </table>
</form>
</div>
</div>

            <!--    // Paste your code here for section    -->
        </div>