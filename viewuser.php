<?php
session_start();
$con=mysqli_connect('localhost','id14676155_shubham','6~J+AQiT!kK1g#%b','id14676155_company');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);

?>


<html>
<head>
   <title>
   viewUser
    </title>
    </head>
    <body background="back.png">
	<center>
    <div>
	<br><br><br>
        <h1><font color="cyan">Select Name To Transfer Credits</font></h1>
        <form action="transfer.php" method="post" style="position: relative; center: 40%;">
		<br><br><br><br>
       <table>
           <th><h2><mark><font color="red">User's Name</font></mark></h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>   
       <td> <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      </font>
   </tr>
<?php }
  ?>
       <tr>          
           <td>
		   <input type="submit" value="CREDIT" style="background-color:blue;color:yellow;width:150px; height:40px;"/></td>
           </tr>
        </table>
        </form>
        </div>
		</center>
    </body>
</html>