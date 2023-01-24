<?php
include("connect.php");
$product_name=$_POST['product_name'];
print $product_name;
$stock=$_POST['stock'];
print $stock;
$image=$_POST['image'];
print $image;

//$product_name=1;

$q="insert into finish_good(product_name,stock,image) values('$product_name','$stock','$image')";
print $q;	
mysqli_query($cn,$q);
header("location:finishgood_view.php");
	
?>

