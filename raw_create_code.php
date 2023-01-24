<?php
include("connect.php");
$name=$_POST['name'];
print $name;
$stock=$_POST['stock'];
print $stock;
$detail=$_POST['detail'];
print $detail;

$q="insert into raw_materials (Raw_name,stock,details) values('$name','$stock','$detail')";
print $q;	
mysqli_query($cn,$q);
header("location:raw_view.php");

?>

