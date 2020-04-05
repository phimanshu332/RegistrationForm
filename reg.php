<?php
session_start();
//header('location:login.php');
$con=mysqli_connect('localhost','root','','data');
//mysqli_select_db($con,'data');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$adress=$_POST['adress'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$s="select * from user where email='$email'";
$result =mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo " email already taken";
}
else
{

$reg="insert into user(firstname,lastname,adress,email,mobile,password) values('$firstname','$lastname','$adress','$email','$mobile','$password')";
    mysqli_query($con,$reg);
	
	echo "<p align='center'> <font color=blue  size='6pt'>Welcome</font> </p>";
	echo "<p align='center'> <font color=blue  size='6pt'>$firstname</font> </p>";
	echo "<a  align='right'href='login.php'>LogOut</a>";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">

	
</div>
</body>
</html>