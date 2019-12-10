<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title> Home (Hotel Management)</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
	<link href = "admin.png" type="img/icon" rel = "icon">
</head>
<body>
      <div id="full">
	  <div id = "img" style = "background-image: url('https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F680078878%2F960x0.jpg%3Ffit%3Dscale'); height: 800px; background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
	    <div id="header" style="background: #333;">
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   <div id="nav">
		      <ul>
			    <li> <a href="ahome.php">Home</a></li>
				<li> <a href="room.php">Room Update</a></li>
				<li> <a href="booking.php">Booking</a></li>
				<li> <a href="rd.php">Room Details</a></li>
				
			   </ul>
		   
		   </div>
		</div>
	       <div id ="banner"><br><br><br><br><br>
		     <center><div id="form">
			    <form action="room.php" method="post">
		      <table>
			    
				 <tr> 
				    <td style="color:white;  padding: 15px;">Room Number:</td>
					<td><input type="text" name="rno" placeholder="Enter Room No"  title="Enter Room No:"></td>
					
				 </tr>
				
				 <tr> 
				    <td style="color:white;  padding: 15px;">Room Type:</td>
					<td><input type="text" name="type" placeholder="Enter Room Type"  title="Enter Room Type:"></td>
					
				 </tr>
				 <tr> 
				    <td style="color:white; padding: 15px;">Room Price:</td>
					<td><input type="text" name="price" placeholder="Enter Room Price"  title="Enter Room Price:"></td>
					
				 </tr>
			      
				    
				 <td>
				 <td><input style = "width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"> </td>
				 </td>
			  </table>
			 </form>
			 <?php
			  if(isset($_POST['submit']))
			  {
				  $rno=$_POST['rno'];
				  $type=$_POST['type'];
				  $price=$_POST['price'];
				  if(mysqli_query($con, "INSERT INTO `room` (`rno`,`type`,`price`) VALUES('$rno','$type','$price')"))
				  {  		  
       			  echo "Room Updated";
				  }else{
					  echo "Data Not Inserted";
				  }
			  }
			 ?>
			  
	        </div> </center>
	   </div>
	   </div>
	  </div>
</body>
</html>