<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<title>Feedback</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<style>
.wrap 
{	  max-width: 100%;
      max-height: 100%;
    }

.feedbackcon {
      width: 100%;
      max-width: 100%;
      max-height: 100%;
      font-family: "Times New Roman",Times, serif; 
      font-weight: bold;
      font-size: 26px;
	}

table 
    {
    width: 970px;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.2);
 background: url(32.jpg) no-repeat;
   
}

th, td {
    padding: 15px;
    background-color: rgba(14, 19, 58, 1);
   color: white;
    text-align: center;
     font-family: "Times New Roman",Times, serif; 
     
} 

tr:hover {
    background-color:white;
   
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
        position: absolute;
        &:hover {
            &:before {
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



</style>
<body>
<div class="wrap">
  	<div class="feedbackcon">
  		<h1 align="center"> STUDENT FEEDBACK</h1>
  	</div>
  <div class="td">
    <table align="center">
        <thead>
            <tr>
                <th>Student's Name</th>
                <th>Feedback</th>
                
                
                          </tr>
        </thead>
    </div>
        <tbody>

            <?php

    include("dbconnection.php");
    $sql="select * from feedback";
    $result=mysqli_query($con,$sql);
//for($i=1; $i<6; $i++) {
    while($rows=mysqli_fetch_array($result)){
echo '<tr>
    <td>'.$rows["FULL_NAME"].'</td>
    <td>'.$rows["COMMENTS"].'</td>
    </tr>';
} 

     ?>
        </tbody>
    </table>
    <!--<div class="my-btn">
    	<input type="submit" name="my-btn" value="Discard">
    </div>-->
</div>
</body>
</html>