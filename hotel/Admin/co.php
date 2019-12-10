<?php
include("connection.php");
$rno=$_GET['rno'];
if(mysqli_query($con, "UPDATE `room` set status = 'unbook' WHERE rno=$rno"))
{
	header("Location: rd.php");
}
?>