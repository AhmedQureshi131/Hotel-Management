<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title> Admin Login</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
	<link href = "admin.png" type="img/icon" rel = "icon">
	
	
	
</head>
<body>
      <div id="full">
	  <div id = "img" style = "background-image: url('https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F680078878%2F960x0.jpg%3Ffit%3Dscale'); background-size: 100% 750px; background-repeat: no-repeat; height: 750px;">
	    <div id="header" style="background: #333;">
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   
		  
		   <div id="nav"  >
		      <ul>
			    <li> <a href="ahome.php">Home</a></li>
				<li> <a href="room.php">Room Update</a></li>
				<li> <a href="booking.php">Booking</a></li>
				<li> <a href="rd.php">Room Details</a></li>
				
			   </ul>
		   
		   </div>
		</div>
	   <div id ="banner"><br><br><br><br><br>
	    <center><div style="color: white; background:#333; opacity: 0.8; width: 65%;">
	      <h1>Welcome Admin </h1>
	   </div></center><br><br><br><br>
	   <center> <div style="background-color: rgba(255,255,255,0.7); width:90%">
	  <table>
	      <tr>
		    <th width="25%" height="50px">Room No</th>
		    <th width="25%" height="50px">Type</th>
			<th width="25%" height="50px">Price</th>
			<th width="25%" height="50px">Status</th>
			<th width="25%" height="50px">Option</th>
						
		  </tr>
		   <?php
		   $q1="SELECT * FROM `room`";
		   $run=mysqli_query($con,$q1);
		   while($row=mysqli_fetch_array($run))
		   {
			   $rno=$row['rno'];
			   $type=$row['type'];
			   $price=$row['price'];
			   $status=$row['status'];
			   
			?>   
		  
	      <tr>
		      <td width="25%" height="50px"><center><?php echo $rno; ?></center></td>
			  <td width="25%" height="50px"><center><?php echo $type; ?></center></td>
			  <td width="25%" height="50px"><center><?php echo $price; ?></center></td>
			  <td width="25%" height="50px"><center><?php echo $status; ?></center></td>
			  <td><a href="co.php? rno=<?php echo $rno;?>" style = "color:blue;">Check Out</a></td>
		  </tr>
		  <?php
		   }
		   ?>
	   </table></center>
	   
	   </div>
	   
	   <center>
	   
	   </center>
	  </div>  
	  </div>
</body>
</html>