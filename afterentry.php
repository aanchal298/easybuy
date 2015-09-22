<?php
session_start();
include('beforeentry.php');
$name=$_POST['shopname'];
$address=$_POST['addr'];
$phoneno=$_POST['phone'];
$category=$_POST['category'];
$sql="INSERT INTO shops(name,address, phoneno,category)VALUES('$name', '$address', '$phoneno','$category')";
mysql_query($sql);
header("Location:afterentry2.php?remarks=success");
mysql_close($con);
?>