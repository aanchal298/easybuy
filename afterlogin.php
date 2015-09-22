<html>
<head>
<title>
Welcome
</title>
</head>
<body>
<span align="right">
<?php
session_start();
$email=$_SESSION['username'];
echo "<b>Logged in as:  ". $email."</b>";
?>
&nbsp &nbsp &nbsp
<form name="logout" action="logout.php">
<button>
Logout
</button>
</form>

</span>
<br>
<center>
<h1>Easy Buy</h1>
<br><br><br><br><br><br><br>
<h3><a href="search.php">Search for something...</a></h3>
<h3><a href="entry.php">Make an entry</a></h3>
<h3><a href="edit.html">Edit an entry</a></h3>
<h3><a href="delete.php">Delete an entry</a></h3>
</center>
</body>
</html>
