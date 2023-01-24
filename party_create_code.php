<?php
include("connect.php");
$name=$_POST['name'];
print $name;
$address=$_POST['address'];
print $address;
$city=$_POST['city'];
print $city;
$contact_no=$_POST['contact_no'];
print $contact_no;
$email=$_POST['email'];
print $email;
$type=$_POST['type'];
print $type;
$remark=$_POST['remark'];
print $remark;

$q="insert into party_master (party_name,address,city,contactnumber,Email,party_type,remarks	) values('$name','$address','$city','$contact_no','$email','$type','$remark')";
print $q;	
mysqli_query($cn,$q);
header("location:party_view.php");

?>

