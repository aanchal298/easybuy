<?php
session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

header ("Location: mainlogin.php");

}
else {
header("Location: afterlogin.php");}
?>