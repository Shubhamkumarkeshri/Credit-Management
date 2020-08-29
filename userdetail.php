<?php 
session_start();
$con=mysqli_connect('localhost','id14676155_shubham','6~J+AQiT!kK1g#%b','id14676155_company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;

?>
<html>
<head>
   <title>
   viewUser
    </title>
</head>
    <body background="back.png">
	<center>

    <div><br><br>
        <font color="cyan" size="10"><b><i>Information of Selected User</i></b></font>
		<br><br><br><br><br><br>
       <table height="15%" width="30%" border="2" bgcolor="ABC678">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr align="center" bgcolor="WHITE">
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
		<table>
        <tr>
		<td>
                 <a href="viewuser.php" >
                 <input type="button" name="Transfer To Whom" value="Transfer To Whom" style="background-color:blue;color:yellow;width:150px;
height:40px;"/>
                 </a>
				 </td>
    
			   <td>
               
                 <a href="selectuser.php" ><input type="button" name="Back" value="Back" style="background-color:blue;color:yellow;width:150px;
height:40px;"/>
				 </td>
                 </tr>
               </a>     
		</center>
    </body>
</html>