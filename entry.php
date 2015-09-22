<html>
<head>
<title>
Make an entry
</title>


<script type="text/javascript">
function validateForm()
{
var a=document.forms["entry"]["shopname"].value;
var b=document.forms["entry"]["addr"].value;
var c=document.forms["entry"]["phone"].value;
var d=document.getElementById("category");
var e = d.options[d.selectedIndex].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("shopname must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("address must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("phoneno must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("category must be selected");
  return false;
  }
}
</script>

</head>
<body>
<center>
<br><br><br>
<form name="entry" action="afterentry.php" onsubmit="return validateForm()" method="post">
<h3>Enter the following details: </h3><br><br><br>
<label>Name of shop</label>
<input type="text" name="shopname"/><br><br>
<label>Address &nbsp&nbsp&nbsp</label>
<textarea rows="5" cols="30" name="addr">
</textarea><br><br>
<label>Phone No. </label>
<input type="text" name="phone"/><br><br> 
<label>Select Category: <label>
<select id="category" name="category">
  <option value="stationery">Stationery</option>
  <option value="copy">Photocopy/Printouts</option>
  <option value="chemist">Chemists</option>
  <option value="grocery">Grocery</option>
  <option value="book">Textbooks</option>
  <option value="sport">Sports items</option>
  <option value="recharge">Mobile Recharge</option>
  <option value="electric">Electric items</option>
  <option value="cooler">Coolers & Fans</option>
  <option value="cycle">Bicycles</option>
  <option value="cake">Confectionary</option>
  <option value="eat">Eating joints</option>
  <option value="dryclean">Dry cleaners</option>
  <option value="blanket">Blankets & Quilts</option>
  <option value="cyber">Cyber cafes</option>
  <option value="courier">Courier services</option>
  <option value="repair">Laptop & Mobile Repair</option>
  <option value="clinic">Clinics</option>
  <option value="optician">Opticians</option>
  <option value="plastic">Plasticware</option>
</select><br><br><br>
<input type="submit"/>
</form>
</center>
</body>
</html>