<!DOCTYPE html>
<html>
<head>
    <title> Home (Hotel Management)</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
	<link href = "img/logo.png" type="img/icon" rel = "icon">
	
	
	
</head>
<body>
      <div id="full">
	  <div id = "img" style = "background-image: url('http://www.travelstart.com.ng/blog/wp-content/uploads/2016/12/set-featured.jpg'); background-size: 100% 700px; background-attachment: fixed; background-repeat: no-repeat; height: 700px;">
	    <div id="header" >
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   <div>
              <button id="btn">|||</button>
		   </div>
		   <div id="cl"> <input type="button" name= "btn" id="btn"></div>
		   <div id="nav" >
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
	   
	   </div>
	   <center>
	   <div  style="color: black; background:rgba(255,255,255,.5); width: 80%;"> 
	   <form action="r1.php" method="get">
	   <h1>Availability <br> When would you like to stay at The Arena Hotel?</h1>
	       <table>
		      <tr>
			     <th width = "20%" height = "50px">Destination </th>
				 <th width = "20%" height = "50px">Check In Date </th>
				 <th width = "20%" height = "50px">Check Out Date </th>
				 <th width = "20%" height = "50px">Room </th>
				 <td rowspan="2"> <input type = "submit" value = "Check availability" name = "sub"> </td>
		      </tr>
			  <tr>
			     <td width = "20%" height = "50px"><center><input type = "text" name = "d1" placeholder = "Enter Your Destination"> </center></td>
				 <td width = "20%" height = "50px"><center><input type = "date" name = "ci"> </center></td>
				 <td width = "20%" height = "50px"> <center><input type = "date" name = "co"></center></td>
				 <td width = "20%" height = "50px"> 
				   <center><select name="room">
				    <option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					</select></center>
				 </td>
		      </tr>
	       </table>  
	     </form>
	   </div>
	   </center>
	  </div>  
	  </div>
</body>
</html>