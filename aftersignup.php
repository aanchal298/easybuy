<?php
session_start();
include('beforesignup.php');
$name=$_POST['name'];
$phoneno=$_POST['phone'];
$emailid=$_POST['email'];
$password=$_POST['pass'];


$sql = "SELECT * FROM account WHERE emailid = '$emailid'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
echo "<h1>".$num_rows."</h1>";

if ($num_rows > 0) {

header("Location:signup1.php");

} 
else {
	mysql_query("INSERT INTO account(name,phoneno, emailid, password, credit)VALUES('$name', '$phoneno', '$emailid', '$password',1)");
header("location: aftersignup2.php?remarks=success");
mysql_close($con);

}


?>