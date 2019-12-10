<?php
include("connection.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
?>

<!DOCTYPE html>
<html>
<head>
    <title> Home (Hotel Management)</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
	<link href = "img/logo.png" type="img/icon" rel = "icon">
</head>
<body>
      <div id="full">
	  <div id = "img" style = "background-image: url('http://www.travelstart.com.ng/blog/wp-content/uploads/2016/12/set-featured.jpg'); height: 800px; background-size: cover; background-repeat: no-repeat;">
	    <div id="header">
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   <div id="nav">
		      <ul>
			    <li> <a href="index.php">Home</a></li>
				<li> <a href="contact.php">Contact Us</a></li>
				<li> <a href="bms.php">Book My Stay</a></li>
				<li> <a href="hotel.php">Our Hotel</a></li>
				<li> <a href="price.php">Price</a></li>
			   </ul>
		   
		   </div>
		</div>
	       <div id ="banner">
		     <div id="form">
			    <form action="r1.php" method="post">
		      <table style="color: white">
			    <?php
				$q1 = "SELECT * FROM `room` WHERE status ='unbook'";
				    $run=mysqli_query($con,$q1);
					$row=mysqli_fetch_array($run);
					$rno=$row['rno'];
				
				
			      $q = "SELECT * FROM `room` WHERE status ='unbook'";
				  $run=mysqli_query($con,$q);
				  $num=mysqli_num_rows($run);
				  
				  if($r<=$num)
				  {
					  ?>
					   <tr> 
				    <td>Status:</td>
					<td><input style = "color: red"type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
				 </tr>
				 <tr> 
				    <td>Name:</td>
					<td><input type="text" name="name" placeholder="Enter Your Name" title="Name"></td>
					<td>ID:</td>
					<td><input type="text" name="idno" placeholder="Enter Your ID" title="ID"></td>
				 </tr>
				 <tr> 
				    <td>Address:</td>
					<td><input type="text" name="add" placeholder="Enter Your Address" title="Address"></td>
				 </tr>
				 <tr> 
				    <td>City:</td>
					<td><select name="city">
					     <option>--select--</option>
						 <option> Warrensburg</option>
						  <option> Kansas City</option>
					       <option> Wichita</option>
					</select></td>
				 </tr>
			      <tr> 
				    <td>State:</td>
					<td><select name="state">
					     <option>--select--</option>
						 <option> MO</option>
						  <option> KC</option>
					       <option> FL</option>
					</select></td>
				 </tr>
				 <tr>
				   <td>Enter Your Email:</td>
				    <td><input type="text" name="email" placeholder="Enter Your Email" title="E-mail"></td>
				 </tr>
				 <tr>
				   <td>Check In Date:</td>
				    <td><input type="text" name="coin" value="<?php echo $ci ?>" title="Check In"></td>
					<td>Check Out Date:</td>
				    <td><input type="text" name="coout" value="<?php echo $co ?>" title="Check Out"></td>
				 </tr>
				 <tr>
				   <td>Enter Members: </td>
				   <td><input type="text" name="members" placeholder="Enter Members" title="Members"> </td>
				 </tr>
				 <tr>
				   <td>Enter Type: </td>
				   <td><input type="text" name="type" placeholder="Room Type" title="Type"> </td>
				 </tr>
				 <td>
				 <td><input style = "width: 120px; height: 30px; border-radius: 20px; opacity: 0.9" type="submit" name="submit" value="submit"> </td>
				 </td>
				 <?php }
			          else{
						  ?>
						 
						  <br><br><br><tr> 
				    <td>Status:</td>
					<td><input style = "color: red"type="text" name="Status" value="Not Available" disabled="disabled" title="Status"></td>
				 </tr>
				 
						  <?php
					  }
			      ?>
			      
				 
			  </table>
			 </form>
			 <?php
			    if(isset($_POST['submit'])){
					$name=$_POST['name'];
					$idno=$_POST['idno'];
					$add=$_POST['add'];
					$city=$_POST['city'];
					$state=$_POST['state'];
					$email=$_POST['email'];
					$coin=$_POST['coin'];
					$coout=$_POST['coout'];
					$m=$_POST['members'];
					$type=$_POST['type'];
					
					
					if(mysqli_query($con, "INSERT INTO `form` (`name`,`add`,`city`,`state`,`email`,`cidate`,`codate`,`m`,`idno`,`type`) VALUES('$name','$add', '$city','$state','$email',
					'$coin','$coout','$m','$idno', '$type')"))
					{
						mysqli_query($con, "UPDATE `room` set status = 'Book' WHERE rno=$rno");
						header("Location:f1.php");
						
					}else{
						echo"data Not inserted";
					}
				}
			 
			 
			 ?>
			  <div>
	        </div>
	   </div>
	   
	  </div>
</body>
</html>