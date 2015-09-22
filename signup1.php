<html>
<head>
<title>
Sign Up
</title>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["signup"]["name"].value;
var b=document.forms["signup"]["phone"].value;
var c=document.forms["signup"]["email"].value;
var d=document.forms["signup"]["pass"].value;
var e=document.forms["signup"]["cpass"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("name must be filled out");
  return false;
  }


if( b == "" ||
           isNaN( b ) ||
           b.length != 10 )
   {
     alert( "Please provide a phone no in the format ##########." );
return false;
   }



if (c==null || c=="")
  {
  alert("emailid must be filled out");
  return false;
  }


var atpos=c.indexOf("@");
var atdot=c.lastIndexOf(".");
if (atpos<1 || atdot<atpos+2 || atdot+2>=c.length)
  {
  alert("Not a valid e-mail address");
return false;
  }



if (d==null || d==""||d.length<3||d.length>15)
  {
  alert("enter a password of length 3-15");
  return false;
  }
  
if(e!=d)
  {
   alert("passwords do no match");
   return false;
   }
}
</script>
</head>
<body>
<center>
<h1>Easy Buy</h1>
<br><br>
<h3><u>Sign Up</u></h3>
<br><br>
<h2>Email already exists. Enter a different email.</h2>
<form name="signup" action="aftersignup.php" onsubmit="return validateForm()" method="post">
<label>Full Name: </label>
<input type="text" name="name"/>
<br><br>
<label>E-mail id: </label>
<input type="text" name="email"/>
<br><br>
<label>Phone No.: </label>
<input type="text" name="phone"/>
<br><br>
<label>Password: </label>
<input type="password" name="pass"/>
<br><br>
<label>Confirm Password: </label>
<input type="password" name="cpass"/>
<br><br>
<input type="submit"/>
</form>
</center>
</body>
</html>
