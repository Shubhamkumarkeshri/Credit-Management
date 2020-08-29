<?php
$con=mysqli_connect('localhost','id14676155_shubham','6~J+AQiT!kK1g#%b','id14676155_company');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
</head>
<body background="back.png">
<center>


<form  action="userdetail.php" method="post">

    <font face="verdana" color="cyan" size="5">
	<h1><u> Select User from this list</u></h1>
	</font>
	
    <table height="70%" width="40%" border="3">


    <?php 
session_start();
$con=mysqli_connect('localhost','id14676155_shubham','6~J+AQiT!kK1g#%b','id14676155_company');
$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

	<thead bgcolor="#ABC678">
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody align="center">
		<tr bgcolor="orange">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr bgcolor="WHITE">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="orange">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="WHITE">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="orange">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="WHITE">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="orange">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="WHITE">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="orange">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="WHITE">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>


    <div>

<table cellspacing=50px style="position: relative; center: 40%;">
  <tr>
      <td> <h2><font color="white">Select User</font></h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','id14676155_shubham','6~J+AQiT!kK1g#%b','id14676155_company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
    </tr>
        </table>
</div>
    </form> 
	</center>
</body>
</html>