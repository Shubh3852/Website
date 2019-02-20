<!DOCTYPE html>
<html lang="en-us">
<head>
<style>
.error{color:#FF0000;}
</style>
<title> Register.
</title>
</head>
<style type="text/css">
a:link{color: #cccccc;font-size: x-large;text-decoration: none;padding: 8px;}
a:visited{color: #cccccc;}
a:hover{color: blue;}
header{position: relative;margin-left: 2px;margin-bottom: 20px;}
</style>
</head>
<body>
	<link rel="shortcut icon" href="Images/black.ico">
<meta charset="utf-8">
<body background="images/phone.jpg">
<header>
<nav>
<menu style="background-color:black; color:white; text-align:center; border-style:double">
<b> <a href="home.html" target="_parent"> HOME</a>
<body alink="green" vlink="white"></body><span>|</span>
<a href="new.html" target="_parent"> STORIES</a>
<body alink="green" vlink="white"></body><span>|</span>
<body alink="green" vlink="red"> </body>
<a href="quotes.html" target="_parent"> QUOTES </a>
<body alink="green" vlink="black"> </body><span>|</span>
<a href="search.html" target="_parent"> SEARCH </a>
<body alink="green" vlink="red"> </body><span>|</span>
<a href="original_login.php" target="_parent"> LOG IN </a>
<body alink="green" vlink="red"> </body>
</b>
</menu>
</nav>
</header>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $address = $qualification = $subject = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{           
if (empty($_POST["name"])) 
{               
$nameErr = "Name is required";
}
else 
{
$name = test_input($_POST["name"]);          
}            
if (empty($_POST["email"])) 
{              
$emailErr = "Email is required";            
}
else 
{              
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{                  
$emailErr = "Invalid email format";               
}            
}            
if (empty($_POST["qualification"])) 
{
$qualification = "";
}
else 
{              
$qualification = test_input($_POST["qualification"]);          
}         
if (empty($_POST["address"]))
{
$address = "";            
}
else
{              
$address = test_input($_POST["address"]);          
}           
if (empty($_POST["gender"])) 
{
$genderErr = "Gender is required";
}
else 
{             
$gender = test_input($_POST["gender"]);          
}
if (empty($_POST["subject"])) 
{
$subjectErr = "You must select 1 or more";           
}
else 
{
$subject = $_POST["subject"];       
}
}
function test_input($data) 
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<font face="Chiller" size="6" color="#990000"> <h1 align="center"> <u> <i> Register Yourself</i> </u> </h1> </font>
<p><span class = "error">NOTE : * required field.</span></p>
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
<table>
<tr>
<td><h2 align="center"><b>Name:</h3></b></td>
<td><input type = "text" name = "name">
<span class = "error">*
<?php 
echo $nameErr;
?>
</span>
</td>
</tr>
<tr>
<td><h2 align="center"><b>E-mail:</h2></b></td>
<td><input type = "text" name = "email">
<span class = "error">* 
<?php 
echo $emailErr;
?>
</span>
</td>
</tr>
<tr>
<td><h2 align="center"><b>Age:</h2></b></td>
<td> <input type = "age" name = "age">
<span class = "error">
<?php 
echo $websiteErr;
?>
</span>
</td>
</tr>
<tr>
<td><h2 align="center"><b>Address:</h2></b></td>
<td> <textarea name = "address" rows = "5" cols = "40"></textarea></td>
</tr>
<tr>
<td><h2 align="center"><b>Gender:</h2></b></td>
<td>
<input type = "radio" name = "gender" value = "female"><b>Female</b>
<input type = "radio" name = "gender" value = "male"><b>Male</b>
<span class = "error">* 
<?php 
echo $genderErr;
?>
</span>
</td>
</tr>
<tr>
<td><h2 align="center"><b>Qualification:</h2></b></td>
<td>
<select name = "subject[]" size = "4" multiple>
<option value = "Student"><b>Student</b></option>
<option value = "Employee"><b>Employee</b></option>
<option value = "Business Man"><b>Business Man</b></option>
<option value = "Doctor"><b>Doctor</b></option>
<option value = "Engineer"><b>Engineer</b></option>
<option value = "Writer/Author"><b>Writer/Author</b></option>
</select>
</td>
</tr>
<tr>
<td><h2 align="center"><b>Agree</h2></b></td>
<td><input type = "checkbox" name = "checked" value = "1"></td>
<?php 
if(!isset($_POST['checked']))
{
?>
<span class = "error">* 
<?php
echo "You must agree to terms";?>
</span>
<?php 
} 
?>
</tr>
<tr>
<td>
<input type = "submit" name = "submit" value = "Submit">
</td>
</tr>
</table>
</form>
</body>
<footer style="background-color:black; color:white; text-align:center; border-style:double">
<div> <b> <i> &copy Copyright 2017 </i> </b> </div>
<div> 
<a href="books.html" target="_blank"> Books </a><span>|</span>
<a href="contact.html" target="_blank"> Contact Us: </a><span>|</span>
<a href="images.html"> Snapshots </a><span>|</span> 
</div>
</footer>
</body>
</html>