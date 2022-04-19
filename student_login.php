<?php
session_start();
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
$email=$_POST['username'];
$password=$_POST['password'];
echo $password;
$q="SELECT * FROM user where password=BINARY('$password') and gmail='$email'";
$result=mysqli_query($conn,$q);
$row=mysqli_num_rows($result);
if($row==1){
$_SESSION['username']=$email;
$_SESSION['password']=$password;
header("Location:http://localhost/Alumni%20Management%20System/student_welcome.php");
}
else
{
header("Location:http://localhost/Alumni%20Management%20System/student.html");	
}
mysqli_close($conn);
?>