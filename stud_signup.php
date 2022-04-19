<?php
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
$name=$_POST['usernamesignup'];
$phone_no=$_POST['phone_no'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['emailsignup'];
$password=$_POST['passwordsignup'];
$q="INSERT into user (gmail,name,password,phone_no,branch) values('$email','$name','$password','$phone_no','$branch')";
$r=mysqli_query($conn,$q);
$s="INSERT into student(gmail,year) values('$email','$year')";
$t=mysqli_query($conn,$s);
$a="SELECT * from user where password= '$password'";
if (!$r or !$t){
	header("Location:http://localhost/Alumni Management System/student.html");
}
mysqli_close($conn);
?>