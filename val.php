<?php
session_start();
$con=mysqli_connect('localhost','root','','data');
//mysqli_select_db($con,'data');
/*$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['adress'];*/
$email=$_POST['email'];
//$Mobile=$_POST['mobile'];
$password=$_POST['password'];
$s="select * from user where email='$email' && password='$password'";
$result =mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num>0)
{
	$_SESSION['email']=$email;
	header('location:home.php');

}
else
{
	header('localtime:login.php');
}


?>