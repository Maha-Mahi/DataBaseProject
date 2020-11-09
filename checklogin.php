<?php
ob_start();
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

session_start();
 $_SESSION['name'] = "mahi";
 $_SESSION['allotnum'] = "001";


$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="messmanagement"; // Database name
$tbl_name="registration"; // Table name


// Connect to server and select databse.
$con=mysql_connect("localhost","root","","messmanagement");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form */
 $myusername=$_POST["username"];
 $mypassword=$_POST["password"];
 if($myusername == "admin" && $mypassword == "admin"){
   $_SESSION['login'] = true; 
   header("location:/openday/fAdmin_page/index.php");
 }
 else{
 echo $_POST["username"];
 
// To protect MySQL injection (more detail about MySQL injection)
/* $myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);  */
$sql="SELECT * FROM registration WHERE USERNAME='$myusername' and PASSWORD='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
  $_SESSION['login'] = true; 
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
//header("location:test.php");
echo " success";
//if ($_POST["username"]=="")
header("location:home.php");

while($test = mysql_fetch_array($result))
 {
  
 echo $test['password'];
 echo $test['username'];
 }
 mysql_close($con);
 
}
else {
    echo '<script language="javascript">';
echo 'alert("Wrong Username or Password")';
echo '</script>';

}
} 
?>
</body>
</html>
