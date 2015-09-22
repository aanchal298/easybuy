<?php
session_start();
include('beforesignup.php');
$name=$_POST['name'];
$phoneno=$_POST['phone'];
$emailid=$_POST['email'];
$password=$_POST['pass'];


$SQL = "SELECT * FROM account WHERE emailid = $emailid";
$result = mysql_query($SQL);
$num_rows = mysql_num_rows($result);

if ($num_rows > 0) {

$errorMessage = "Email already in use";
header("Location: signup.php");

} 
else {
	mysql_query("INSERT INTO account(name,phoneno, emailid, password, credit)VALUES('$name', '$phoneno', '$emailid', '$password',1)");
header("location: aftersignup2.php?remarks=success");
mysql_close($con);

}


?>