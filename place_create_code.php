<?php
include("connect.php");
$location=$_POST['location'];
print $location;
$address=$_POST['address'];
print $address;
$contactno=$_POST['contactno'];
print $contactno;

$q="insert into place_master (location,address,place_contactnumber) values('$location','$address','$contactno')";
print $q;	
mysqli_query($cn,$q);
header("location:place_view.php");


?>

