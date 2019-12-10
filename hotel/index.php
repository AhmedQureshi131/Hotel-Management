<!DOCTYPE html>
<html>
<head>
    <title> Home (Hotel Management)</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
	<link href = "img/logo.png" type="img/icon" rel = "icon">
	<script type="text/javascript" src = "jquery/jquery-3.4.1.min.js"> </script> 
	<script type="text/javascript">
	      $(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();			
			});  
		  });
	
	</script>
	
</head>
<body>
      <div id="full">
	  <div id = "img" style = "background-image: url('http://www.travelstart.com.ng/blog/wp-content/uploads/2016/12/set-featured.jpg'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
	    <div id="header" >
		   <div id="logo">
		     <h1><font size = "5" color= "white"> The Arena Hotel </font> </h1> 		   
		   </div>
		   <div>
              <button id="btn">|||</button>


		   </div>
		   
		   
		   
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
	   </div>
	   <div id = "f1" style = "width: 100%; height:200px; background: #333; " > 
	   <form action="r1.php" method="get">
	      <center> <table>
		      <tr style = "color: white">
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
	       </table>  </center>
	      </form>
	   </div>
	       <div id="welcome"> 
	           <h1 align="center"> Welcome To The Arena Hotel </h1>
			   <center><font size="4">
			      The Arena Hotel has a restaurant, fitness center, a shared lounge and garden in Multan. Featuring family rooms, this property also provides guests with a playground. The property has a 24-hour front desk, a shuttle service, room service and free WiFi throughout the property.<br>

All rooms features air conditioning, a flat-screen TV with satellite channels, a dishwasher, an electric tea pot, a shower, a hairdryer and a desk. Rooms are complete with a private bathroom equipped with free toiletries, while some rooms at the hotel also feature a seating area. The rooms feature a closet.
			   
			   </font>
			   <h2 style = "color: red"> Our Brands </h2>
			   
			   </center>
			
			</div>
			    <div id="g1">  
			      <div id="one" ><img src="img/img8.jpg" style = "width: 100.4%"> 
                     <center> <h2> Pearl-Continental </h2> 
					  <font style = "color: Red"> Hotel and Restaurant </font><br>
					  This upscale high-rise hotel is 4 km from the Port Grand entertainment district. <br>
					  Refined rooms come with free Wi-Fi and flat-screen TVs, as well as minibars and safes. Upgraded rooms include 24-hour butler service, while suites add separate lounges, guest bathrooms and complimentary breakfast. Room service is available 24/7. Kids age 11 and under stay free with their parents.<br>
					 <font style = "color: red"> More </font>
					 </center>

				  </div>
			      <div id="two"> <img src="img/img10.jpg" style = "width: 141%;"> 
                  <center> <h2> Marriot-Hotel </h2> 
				  <font style = "color: Red" > Hotel and Restaurant </font><br>
				  This modern conference hotel is 6 km from shopping at Tariq Road and 17 km from Jinnah International Airport.<br>
				  Casual rooms have marble bathrooms, free Wi-Fi, flat-screen TVs and minifridges. Suites add balconies, living rooms and/or dining areas. Club rooms provide access to a lounge that includes snacks and beverages. There’s 24/7 room service.<br>
				  Freebies include a breakfast buffet and an airport shuttle. There are 4 dining options, including BBQ and Chinese restaurants. There's also a fitness room, an outdoor pool and a female-only indoor pool, as well as a business centre and 15 event rooms.<br>
				  <font style = "color: red"> More </font>
				  
				  
				  </center>
				  </div>
				  
				  <div id="two"> <img src="img/img12.jpg" style = "width: 131%;"> 
                    <center> <h2> Grand-Hyatt </h2>
                     <font style = "color: Red"> Hotel and Restaurant </font><br>
					 Set in contemporary curve-shaped buildings, this sprawling luxury hotel is 10 km from both the Burj Khalifa skyscraper and The Dubai Mall.<br>
					 Featuring floor-to-ceiling windows with skyline views, the high-end rooms offer Arabic accents, marble bathrooms and luxe linens, plus flat-screens, minibars and free Wi-Fi. Upgraded rooms have access to a private lounge; suites add living rooms. Room service is provided. <br>
					 <font style = "color: red"> More </font>
					 
					 
					</center>
          
				  </div>
			    </div> 
	  </div>
</body>
</html>