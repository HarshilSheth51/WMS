<?php
session_start();
include("connect.php");
$email=$_POST['email'];
print $email;
$password=$_POST['password'];
print $password;

$q="select * from admin_user where Email='$email' and password='$password'";
$rs=mysqli_query($cn,$q);

$q2="select * from user where Email='$email' and password='$password'";
$rs2=mysqli_query($cn,$q2);




if($row=mysqli_fetch_array($rs))
{
	$_SESSION['admin_id']=$row['admin_id']; 	
	$_SESSION['user_name']=$row['user_name']; 	
	header("location:raw_create.php");
	
}
else if($row2=mysqli_fetch_array($rs2))
{
	$_SESSION['user_id']=$row2['user_id']; 	
	$_SESSION['user_name']=$row2['user_name']; 	
	header("location:inward_finishgood_create.php");
	
}
else
{
	header("location:index.php?valid=no");
	
}


?>

