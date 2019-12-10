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
	  <div id = "img" style = "background-image: url('https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F680078878%2F960x0.jpg%3Ffit%3Dscale'); background-size: 100% 700px; background-attachment: fixed; background-repeat: no-repeat; height: 700px;">
	    <div id="header" style="background: #333;">
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   
		  
		   <div id="nav" >
		      <ul>
			    <li> <a href="#">Home</a></li>
				<li> <a href="#">Contact Us</a></li>
				<li> <a href="#">Book My Stay</a></li>
				<li> <a href="#">Our Hotels</a></li>
				<li> <a href="#">Help</a></li>
			   </ul>
		   
		   </div>
		</div>
	   <div id ="banner"><br><br><br>
	     <center><div style="color: white; background:#333; opacity: 0.8; width: 80%;">
	      <h1>Welcome to Admin Panel </h1>
	   </div><br>
	   <div  style="color: black; background:rgba(255,255,255,.5); width: 80%;"> 
	       <form action="" method="post">
	       <table>
		    <tr>
			 <td width="50%" height="50px">Username</td>
			 <td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
			 </tr>
			 <tr>
			 <td width="50%" height="50px">Password</td>
			 <td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
			 </tr>
			 <tr>
			 <td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px; height:50px; border-radius: 30px; opacity:0.8"></td>
			 
			 </tr>
			</table>
	        </form> 
			<?php
			 if(isset($_POST['sub']))
			 {
				  $un=$_POST['un'];
				  $ps=$_POST['ps'];
				 $q1="SELECT * FROM `admin`";
				 $run=mysqli_query($con,$q1); 
				 $row=mysqli_fetch_array($run);
				 $u=$row['un'];
				  $p=$row['ps'];
				  if($un==$u&&$ps==$p)
				  {
					  header("Location:ahome.php");
				  }
				  else{
					  header("Location:index.php?Wrong User");
				  }
			 }
			 
			?>
	   </div><center>
	   </div>
	   
	   <center>
	   
	   </center>
	  </div>  
	  </div>
</body>
</html>