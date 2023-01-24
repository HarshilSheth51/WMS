<?php
session_start();
include("connect.php");
$inward_date=$_POST['inward_date'];
print $inward_date;
$rawid=$_POST['rawid'];
print $rawid;
$placeid=$_POST['placeid'];
print $placeid;
$partyid=$_POST['partyid'];
print $partyid;
$qty=$_POST['qty'];
print $qty;
$remark=$_POST['remark'];
print $remark;
$userid=$_SESSION['user_id'];
print $userid;
$expire_date=$_POST['expire_date'];
print $expire_date;



$q="insert into inward_raw(inward_date,raw_id,place_id,party_id,qty,remarks,user_id,expired_date) values('$inward_date','$rawid','$placeid','$partyid','$qty','$remark','$userid','$expire_date')";
print $q;	

$qupdate="update raw_materials set stock=stock+$qty where Raw_id=$rawid";
mysqli_query($cn,$qupdate);




mysqli_query($cn,$q);
header("location:inwardraw_view.php")

?>