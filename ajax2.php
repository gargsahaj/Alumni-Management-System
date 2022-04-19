<?php
session_start();
$agmail=$_GET['x'];
$sgmail=$_SESSION['username'];
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
$q="INSERT into connection values('$sgmail','$agmail',0)";
$result=mysqli_query($conn,$q);
mysqli_close($conn);
?>