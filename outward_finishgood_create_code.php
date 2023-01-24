<?php
session_start();
include("connect.php");
$date=$_POST['date'];
print $date;

$product_id=$_POST['product_id'];
print $product_id;


$placeid=$_POST['placeid'];
print $placeid;

$qty=$_POST['qty'];
print $qty;

$userid=$_SESSION['user_id'];
print $userid;

$partyid=$_POST['partyid'];
print $partyid;

$remark=$_POST['remark'];
print $remark;

//$name=1;


$q="insert into outward_finishgood (date,product_id,place_id,qty,User_id,Party_id,remarks) values('$date','$product_id','$placeid','$qty','$userid','$partyid','$remark')";
print $q;
mysqli_query($cn,$q);

$qupdate="update finish_good set stock=stock-$qty where product_id=$product_id";
mysqli_query($cn,$qupdate);



header("location:outward_finishgood_view.php")
	

?>
