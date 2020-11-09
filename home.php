<?php
session_start();
if(!isset($_SESSION['login'])){
    //header location login page
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    
    
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    
</head>



<style>

@import" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
.Main{
    width : 1190px;
    height:  2000px;
    margin: auto;
    
}

.slider{
    width  :  1160px;
    height :  600px;
    border: 1px solid black;
    margin-top: 10px;
    margin-left: auto;
    margin-right:auto;
    
    background-size: 1160px 600px;

}


.Menu{

    width:594px;
    height: 600px;
    border: 1px solid black;
    margin-top: 40px; 
    margin-left: 15px;
    background: url(menu.gif) ;
    background-size: 540px 600px;
    cursor:pointer;
   
    


}

.team{
    width: 540px;
    height: 600px;
    border: 1px solid black;
 
margin-top: -600.5px;
float:right;

margin-right:15px;
background: url(REDCHEFF.jpg) no-repeat;
background-size: 540PX 600px;
cursor:pointer;
}

.contactus{
    width: 594px;
    height:600px;
    margin-top: 35px;
    border: 1px solid brown;
    margin-left: 15px;
    background-color: #FFCB0C;
    cursor:pointer;


}
.ourtext 
{
    background-color: #FFCB0C;
    margin-left:15%;
    
    width : 200;
    height: 200px;
    margin-top: 30%;
    font-family:sans-serif;
    color: #000000;
    

    
}
.ourtext1 
{
    background-color:#FFCB0C;
    margin-left:52%;
    width : 200;
    height: 300px;
    margin-top: -40%;
    font-family:Helvetica;
    color : #000000;
    
    
}

#fb{

    width : 270px;
    height: 306px;
    float: right;
    margin-right: 15px;
    margin-top : -600px;
    background: url(fb_icon.png) no-repeat;
    background-size: 250px 300px;
    cursor:pointer;


}

#twitter{

width : 250px;
height: 300px;
float: right;
margin-right: 305px;
margin-top : -600px;
background: url(insta1.jpg) no-repeat;
background-size: 250px 300px;

cursor: pointer;


}

#feedback{
    width: 540px;
    height: 268px;
    border : 1px solid palevioletred;
    float : right;
    margin-right: 15px;
    margin-top:  -270px;
    background:url(feedback.gif);
    background-size: 540px 268px;
    cursor:pointer;
   
}
#footer{
    width:1160px;
    height:80px; ;
    border : 1px solid black;
    margin-left:auto;
    margin-right: auto;
    margin-top: 20px;
    Background-color: #708090;
    text-align: center;
    

    
}


#footer a {
    margin-left: 92%;
   font-size: 22px;
   color: #000000;
   text-decoration: none;
}



</style>
    <body>
        <div class = "Main">
            <div class = "slider" >
             <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1160px;margin:0px auto 6px;">
            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="slider/Chiken%20Tikka.jpg" alt="Chiken Tikka"  title="Chiken Tikka" />
                    </li>
                    <li><img src="slider/Karhi%20Chawal.jpg" alt="Karhi Chawal"  title="Karhi Chawal" />
                    </li>
                    <li><img src="slider/Pizza.jpg" alt="Pizza"  title="Pizza" />
                    </li>
                    <li><img src="slider/Chola%20Chaat.jpg" alt="Chola Chaat"  title="Chola Chaat" />
                    </li>
                    <li><img src="slider/Chicken%20Karhai.jpg" alt="Chicken Karhai"  title="Chicken Karhai" />
                    </li>
                </ul>
                <ul class="amazingslider-thumbnails" style="display:none;">
                    <li><img src="slider/Chiken%20Tikka-tn.jpg" alt="Chiken Tikka" title="Chiken Tikka" /></li>
                    <li><img src="slider/Karhi%20Chawal-tn.jpg" alt="Karhi Chawal" title="Karhi Chawal" /></li>
                    <li><img src="slider/Pizza-tn.jpg" alt="Pizza" title="Pizza" /></li>
                    <li><img src="slider/Chola%20Chaat-tn.jpg" alt="Chola Chaat" title="Chola Chaat" /></li>
                    <li><img src="slider/Chicken%20Karhai-tn.jpg" alt="Chicken Karhai" title="Chicken Karhai" /></li>
                </ul>
            <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Slideshow">Responsive jQuery Slideshow</a></div>
            </div>
        </div>
        <!-- End of body section HTML codes -->
       
            </div>
            <div class = "Menu" onclick="window.location.href='stdmenu.php'"> </div>
            <div class = "team" onclick="window.location.href='Ourchef/ourchefss.php'"></div>
            <div class = "contactus">
              
                
                <div class="ourtext">
               <h3>HOURS </h3>
              <p>7:00am - 4:pm</p>
             <p>6:30pm - 9:30pm</p>
                </div>
                <div class="ourtext1">
                        <h3>CONTACT</h3>
                        <p>0321-07846273</p>
                        <p>0333-24514996</p>
                        <p>muet-mess@hotmail.com</p>
                        <p>Mehran University Of Engineering And Technology Jamshoro</p>
                                        </div>
            </div>
            <div id = "fb" onclick="window.location.href='https://www.facebook.com/Hostel-Mess-482437218971791/?modal=admin_todo_tour'"> </div>
            <div id = "twitter" onclick="window.location.href='https://www.instagram.com/bbgh.muet/'"></div>
            <div id = "feedback" onclick="window.location.href='html1.html'"></div>
            <div id = "footer"><p>>&copy ALL RIGHTS RESERVED</p><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><b>Logout</a> </div>
              
           
        </div>
        
    </body>

</html>


