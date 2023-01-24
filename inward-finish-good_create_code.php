<?php
include("connect.php");
session_start();
$placeid=$_POST['placeid'];
print $placeid;
$product_id=$_POST['product_id'];
print $product_id;
$qty=$_POST['qty'];
print $qty;
$userid=$_SESSION['user_id'];
print $userid;
$remark=$_POST['remark'];
print $remark;
$date=$_POST['date'];
print $date;



$q="insert into inward_finishgood (place_id,product_id,qty,user_id,reamrks,date) values('$placeid','$product_id','$qty','$userid','$remark','$date')";
print $q;

mysqli_query($cn,$q);


$qupdate="update finish_good set stock=stock+$qty where product_id=$product_id";
mysqli_query($cn,$qupdate);


header("location:inward_finishgood_view.php")
	
?>
