<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title> Admin Login</title>
    <link rel = "stylesheet" type="text/css" href="css/style.css">
	<link href = "admin.png" type="img/icon" rel = "icon">
	
	
	
</head>
<body>
      <div id="full">
	  <div id = "img" style = "background-image: url('https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F680078878%2F960x0.jpg%3Ffit%3Dscale'); background-size: 100% 900px; background-repeat: no-repeat; height: 900px;">
	    <div id="header" style="background: #333;">
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   
		  
		   <div id="nav" >
		      <ul>
			    <li> <a href="ahome.php">Home</a></li>
				<li> <a href="room.php">Room Update</a></li>
				<li> <a href="booking.php">Booking</a></li>
				<li> <a href="rd.php">Room Details</a></li>
				
			   </ul>
		   
		   </div>
		</div>
	   <div id ="banner"><br><br><br><br><br>
	    <center><div style="color: white; background:#333; opacity: 0.8; width: 70%;">
	      <h1>Welcome Admin </h1>
	   </div></center><br><br><br><br>
	   <div style="background-color: rgba(255,255,255,0.7)">
	   <table>
	      <tr>
		    <th width="10%" height="50px">Name:</th>
		    <th width="10%" height="50px">ID No:</th>
			<th width="10%" height="50px">Address:</th>
			<th width="10%" height="50px">City:</th>
			<th width="10%" height="50px">State:</th>
			<th width="10%" height="50px">Email:</th>
			<th width="10%" height="50px">Check In Date:</th>
			<th width="10%" height="50px">Check Out Date:</th>
			<th width="10%" height="50px">Members:</th>
            <th width="10%" height="50px">Type:</th>				
		  </tr>
		  <?php
		   $q1="SELECT * FROM `form`";
		   $run=mysqli_query($con,$q1);
		   while($row=mysqli_fetch_array($run))
		   {
			   $name=$row['name'];
			   $idno=$row['idno'];
			   $add=$row['add'];
			   $city=$row['city'];
			   $state=$row['state'];
			   $email=$row['email'];
			   $cidate=$row['cidate'];
			   $codate=$row['codate'];
			   $m=$row['m'];
			   $type=$row['type'];
			?>   
		  
	      <tr>
		      <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $add; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $city; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $state; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $email; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $codate; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $m; ?></center></td>
			  <td width="10%" height="50px"><center><?php echo $type; ?></center></td>
		  </tr>
		  <?php
		  }
		  ?>
	   </table>
	   
	   </div>
	   
	   <center>
	   
	   </center>
	  </div>  
	  </div>
</body>
</html>