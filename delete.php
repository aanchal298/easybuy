<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
mysql_connect('localhost','root','');
mysql_select_db('aad');
$Sql="SELECT ids FROM account WHERE emailid='$_SESSION[username]'";
$result=mysql_query($Sql);
$row=mysql_fetch_array($result);
$sql ="DELETE FROM shops WHERE ids='$row[ids]'";
$retval =mysql_query( $sql );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
?>