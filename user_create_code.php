<?php
include("connect.php");
$username=$_POST['username'];
print $username;
$pw=$_POST['pw'];
print $pw;
$email=$_POST['email'];
print $email;
$contact_no=$_POST['contact_no'];
print $contact_no;


$q="insert into user(user_name,password,Email,contact_number) values('$username','$pw','$email','$contact_no')";
print $q;	
mysqli_query($cn,$q);
header("location:user_view.php");
?>


