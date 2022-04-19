<?php
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
$name=$_POST['usernamesignup'];
$phone_no=$_POST['phone_no'];
$branch=$_POST['branch'];
$email=$_POST['emailsignup'];
$password=$_POST['passwordsignup'];
$year_pass=$_POST['year_pass'];
$company=$_POST['company'];
$designation=$_POST['designation'];
$q="INSERT into user (gmail,name,password,phone_no,branch) values('$email','$name','$password','$phone_no','$branch')";
$r=mysqli_query($conn,$q);
$s="INSERT into alumni(gmail,year_pass,company,designation) values('$email','$year_pass','$company','$designation')";
$t=mysqli_query($conn,$s);
if (!$r or !$t){
	header("Location:http://localhost/Alumni Management System/alumni.html");
}
mysqli_close($conn);
?>