<?php
session_start();
$sgmail=$_GET['x'];
$agmail=$_SESSION['username'];
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
$q="UPDATE connection set status=1 where sgmail='$sgmail' and agmail='$agmail'";
$result=mysqli_query($conn,$q);
header("Location:http://localhost/Alumni%20Management%20System/conection_req.php");
mysqli_close($conn);
?>