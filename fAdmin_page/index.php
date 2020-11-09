<?php
session_start();
if(!isset($_SESSION['login'])){
    //header location login page
    header("location:index.php");
}
?>
<?php  include('dbconnection.php');
         $sql='select count(CHEF_ID) as number FROM chef';
         $query = mysqli_query($con,$sql);
         $result_array = mysqli_fetch_array($query);
         $result = $result_array['number'];

         $chef_sql='select count(ALLOTMENTNO) as number FROM registration';
         $query = mysqli_query($con,$chef_sql);
         $result_array = mysqli_fetch_array($query);
         $chef_result = $result_array['number'];
?>



<!DOCTYPE html>
<html>
<head>

    <title>My admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="960_12_col.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="container_12">
        <div class="grid_4" Style="height:750px;">
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
        
            <h1><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></h1>
        </div>
        
        <div class="container">
        <!--    // Paste your code here for section    -->
        <br><br>
        <img src="STD2.jpg"> 
    
        <img src = "TCHEFS.jpg"> 
        <br>
        <h4 style ="color:blue; margin-left:620px;margin-top:-35px;" ><?php echo $result; ?></h4>
        <h4 style ="color:blue; margin-right:330px;margin-top:-19px;"><?php echo $chef_result; ?></h4>
        <br>
        <a href="feedbackcon.php"><img src="order2.jpg" style = "cursor:pointer;"></a>
        <a href="orders.php"><img src="order.jpg" style = "cursor:pointer;"></a>
         
        <!--    // Paste your code here for section    -->
        </div>
        
    </div>
</body>
</html>
