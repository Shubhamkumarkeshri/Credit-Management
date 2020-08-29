<?php
session_start();
$con=mysqli_connect('localhost','id14676155_shubham','6~J+AQiT!kK1g#%b','id14676155_company');
$q="select name from user";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body background="back.png">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center>
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <b><i><font color="red" size="5">Enter Credit To Transfer:</font></i></b>
          <br>
            <br>
          <input type="text" name="transfer" placeholder="Credit"><br>
          <br>
        
          <input type="submit" value="OK" style="background-color:blue;color:yellow;width:150px; height:40px;">
        
        </div>
        </form>

        </center>
    </body>
</html>
