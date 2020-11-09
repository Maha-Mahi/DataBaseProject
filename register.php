<!DOCTYPE html>
<html>
    <head>
        <title> Registration </title>
    
        
            <?php
if(isset($_POST['registerBtn'])){
    
include("dbconnection.php");

        $fullname=$_POST["fname"];
        $fatname=$_POST["fathername"];
        $allotment=$_POST["allotment"];
        $email=$_POST["email"];
        $username=$_POST["username"];
        $pass=$_POST["password"];
        $phone=$_POST["phoneno"];
        $gender=$_POST["gender"];
        
         $sql="INSERT INTO registration (FULLNAME, FATHERS, EMAIL,USERNAME, PASSWORD,PHONE, GENDER,ALLOTMENTNO ) VALUES ('$fullname','$fatname','$email','$username','$pass','$phone','$gender','$allotment');";
            mysqli_query($con,$sql);
            echo "<script language=javscript>
                alert('succesfully registered')
                </script>";
            }


            /*$user=$_POST["username"];
            $pass=$_POST["password"];

            $sql="SELECT * FROM registration WHERE USERNAME='$user' and PASSWORD='$pass'";
            $result=mysqli_query($con,$sql);



            $count=mysqli_num_rows($result);

            if($count==1){

                // Register $myusername, $mypassword and redirect to file "login_success.php"
                //session_register("myusername");
                //session_register("mypassword");
                header("location:home.html");
                }
                else {
                echo "Wrong Username or Password";
                }
            

$sql="SELECT * FROM record where ALLOTMENT= value '?' ";




*/


            ?>   
            <script>

    function rg(){

        fname=document.forms["register"]["fname"].value
        if(fname==""){
            document.getElementById("a").innerHTML="*Required";
            return false;
        }

        

        fathername=document.forms["register"]["fathername"].value
        if(fathername==""){
            document.getElementById("c").innerHTML="*Required";
            return false;
        }

        allotment=document.forms["register"]["allotment"].value
        if(allotment==""){
            document.getElementById("h").innerHTML="*Required";
            return false;
        }

        username=document.forms["register"]["username"].value
        if(username==""){
            document.getElementById("i").innerHTML="*Required";
            return false;
        }

        phoneno=document.forms["register"]["phoneno"].value
        if(phoneno==""){
            document.getElementById("p").innerHTML="*Required";
            return false;
        }

        email=document.forms["register"]["email"].value
        if(email==""){
            document.getElementById("d").innerHTML="*Required";
            return false;
        }

        password=document.forms["register"]["password"].value
        if(password==""){
            document.getElementById("e").innerHTML="*Required";
            return false;
        }

        cpassword=document.forms["register"]["cpassword"].value
        if(cpassword==""){
            document.getElementById("f").innerHTML="*Required";
            return false;
        }

            if(password!=cpassword){
                alert("Password not matched");
                return false;
            }

        gender=document.forms["register"]["gender"].value
        if(gender==""){
            document.getElementById("g").innerHTML="*Required";
            return false;
        }

        
    }

                </script>

        <style>
            
            @import" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
    

        body{
            font-size: 20px;
        font-family: sans-serif;
        margin: 0%;
        padding : 0%;
        background: url(dembi4.png) no-repeat  ;
        background-size: cover;
    }

    .image{
       
        background: url(image.jpg) no-repeat ;
        opacity: 0.5;
        filter: blur(50%);
    }
    
    .btn {
        cursor: pointer;
        background-color:Transparent;
        overflow:hidden;
    }


    input[type='submit']{
        width: 110px;
        height: 30px;
        background: transparent;
        color: white;
        border: 3px solid white;
        border-radius: 20px;
        font-weight: bold;
        font-family: "Times New Roman",Times, serif; 
    }

    input[type='reset']{
        width: 110px;
        height: 30px;
        background: transparent;
        color: white;
        border: 3px solid white;
        border-radius: 20px;
        font-weight: bold;
        font-family: "Times New Roman",Times, serif;
    }
    
    </style> 

    </head>

<body>
<div class="image"></div>


<table border="0" width="400" align="center" style= "margin-top:270px;">
<form name="register" method="POST">

<tr>
<td width="120" length="30" ><font color="white"  size="4.5" face="Times Romans"> Full Name</font></td>
<td><input type="text" size="41" name="fname" placeholder="Full Name" maxlength="15" color="white" >
<span id="a" style="color:white;"></span></td>
</tr>


<tr>
<td width="120"><font color="white"  size="4.5" face="Times Romans" style="display:inline">Father_Name</font></td>
<td><input type="text" size="41" placeholder="Father's Name" maxlength="15" name="fathername">
<span id="c" style="color:white;"></span></td>
</tr>
    

    <tr>
    <td width="120"><font color="white"  size="4.5" face="Times Romans">Alloted No</font></td>
    <td><input type="text" size="41" placeholder="Allotment No" name="allotment" maxlength="15">
    <span id="h" style="color:yellow;"></span>
    </td>
    </tr>
    

<tr>
<td width="120"> <font color="white"  size="4.5" face="Times Romans">Email</font></td>
<td><input type="email" size="41" placeholder="email@gmail.com" name="email" maxlength="25">
<span id="d" style="color:yellow;"></span></td>
</tr>


<tr>
    <td width="120"><font color="white"  size="4.5" face="Times Romans">User Name</font></td>
    <td><input type="text" size="41" placeholder="Username" name="username" maxlength="15">
    <span id="i" style="color:yellow;"></span></td>
    </tr>
    


    <tr>
    <td width="120"><font color="white"  size="4.5" face="Times Romans">Phone No</font></td>
    <td><input type="text" size="41" placeholder="number" name="phoneno" maxlength="12">
    <span id="p" style="color:yellow;"></span></td>
    </tr>
    

<tr>
<td width="120"><font color="white"  size="4.5" face="Times Romans"> Passoword </font></td>
<td><input type="password" size="41" placeholder="************" name="password" maxlength="8">
<span id="e" style="color:yellow;"></span></td>
</tr>

<tr>
<td width="150"><font color="white"  size="4.5" face="Times Romans"> Confirm Password </font> </td>
<td><input type="password" size="41" placeholder="************" name="cpassword" maxlength="8">
<span id="f" style="color:yellow;"></span></td>
</tr>

<tr>
<td width="120"> <font color="white"  size="4.5" face="Times Romans">Gender </font></td>
<td>
<input type="radio" name="gender" value="male"  name="gender"><font color="white"  size="4.5" face="Times Romans"> Male</font>
<input type="radio" name="gender" value="female" > <font color="white"  size="4.5" face="Times Romans">Female</font>
<span id="g" style="color:yellow;"></span>
</td>
</tr>



<tr>
<td colspan="2" align="right">
<input class="btn" type="submit" value="Send Record"  name="registerBtn" onClick=" return rg();" style="" >
<input class="btn" type="Reset" value="Reset" style="">
</td>
</tr>


</form>
</table>


    </body>
</html> 