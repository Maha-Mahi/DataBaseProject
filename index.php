<!doctype html>
<html>
<head>
    
    <title>Login</title>
       
       
       <script>
            var attempt=3;
            function validate(){
                var username=document.getElementById("username").value;
                var password=document.getElementById("password").value;
               
                if(username=="mahi"  && password=="1234"){
                    alert("login successfully");
                    window.location="home.html";
                    return false;
                }

                else{
                    attempt--;
                    alert("you have left"+attempt+"attempt;");
                    if(attempt==0){
                        document.getElementById("username").disabled=true;
                        document.getElementById("password").disabled=true;
                        document.getElementById("LOG IN").disabled=true;

                       // document.getElementById("username").disabled="";
                       // document.getElementById("password").disabled="";
                       // document.getElementById("LOG IN").disabled="";

                        

                        return false;
                    }
                }
            }

            function registerform(){
                    window.location="register.php"
            }
            </script>
       <style>

     @import" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
    
    *{
        box-sizing: border-box;
    }
    .loginbox{
        height: 300px;
        width : 280px;
    
       margin-left: auto;
       margin-right: auto;
       margin-top: 180px;
       color :white;  

        
    }
    .loginbox h1 {
       margin-top : 250px;
        text-align: center;
        font-size: 50px;
        border-bottom: 6px solid white ;

    }
    .textbox{
        width: 170px;
        overflow: hidden;
        font-size:  25px;
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid white ;
    }
    body{
        font-family: sans-serif;
        margin: 0%;
        padding : 0%;
        background: url(pp.png) no-repeat;
        background-size: cover;
        
    }
    
    .TextBox {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    input {
        margin:10px;
    }

    .Textbox i {
        color: white;
        width: 20px !important;
        height: 20px !important;
    }

    input[type='text'], input[type='password'] {
        width:300px !important;
        padding: 10px;
        border-radius: 10px;
        height: 30px;
        background: transparent;
        border: none;
        color: white !important;
        font-size: 18px;
    }

    input[type='button']{
        width: 150px;
        height: 40px;
        background: transparent;
        color: white;
        border: 3px solid white;
        border-radius: 20px;
        font-weight: bold;
    }


    input[type='submit']{
        width: 150px;
        height: 40px;
        background: transparent;
        color: white;
        border: 3px solid white;
        border-radius: 20px;
        font-weight: bold;
    }

    .btn {
        cursor: pointer;
        background-color:Transparent;
        overflow:hidden;
    }


</style>
<
</head>

<body>


<form name="form1" method="post" action="checklogin.php">
    
    <div class = "loginbox">
        <h1> LOGIN </h1>
        <div class = "TextBox">
            <i class="fa fa-user-circle-o" aria-hidden="true"  ></i>    
            <input name="username" placeholder="username" type="text" id="username">
             
        </div>
        
        <div class = "TextBox">
            <i class="fa fa-lock" aria-hidden="true"></i> 
            <input name="password" placeholder="******" type="password" id="password">
        </div>
         <div class = "TextBox" style="border-bottom: none">
                <input class = "btn" type="button" name="" value="REGISTER " onclick="registerform()">
               <!-- <input class = "btn" type="submit" name="" value="LOG IN" onclick="validate()"> -->
                 <input class = "btn" type="submit" name="" value="LOG IN">
                    
                 </div>
                 <label align="center"> <h3><link rel="stylesheet" href="#"> Forgot Password?</h3></label> 
        
        </div>
</form>
        
</body>
</html>