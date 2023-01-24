<?php
include("connect.php");
session_start();
$dispatchdate=$_POST['dispatchdate'];
print $dispatchdate;
$rawid=$_POST['rawid'];
print $rawid;
$pid=$_POST['pid'];
print $pid;
$qty=$_POST['qty'];
print $qty;
$remark=$_POST['remark'];
print $remark;
$uid=$_SESSION['user_id'];
print $uid;

$name=1;

$q="insert into dispatch_raw (dispatch_date,raw_id,place_id,qty,remarks,user_id) values('$dispatchdate','$rawid','$pid','$qty','$remark','$uid')";
print $q;	
mysqli_query($cn,$q);

$qupdate="update raw_materials set stock=stock-$qty where Raw_id=$rawid";
mysqli_query($cn,$qupdate);



header("location:dispatchraw_view.php")
?>
