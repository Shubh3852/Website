<!DOCTYPE html>
<html lang="en-us">
<head> 
<title> Log In.
</title>
</head>
<link rel="shortcut icon" href="Images/black.ico">
<meta charset="utf-8">
<body background="images/log.jpg">
<style>
/* Full-width input fields */
input[type=text],
input[type=password]
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* Set a style for all buttons */
button 
{
    background-color: #48d1cc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.cancelbtn 
{
    width: auto;
    padding: 10px 18px;
    background-color: #4682b4;
}
/* Center the image and position
the close button */
.imgcontainer
{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar
{
    width: 10%;
    border-radius: 10%;
}
.container
{
    padding: 16px;
}
span.psw
{
    float: right;
    padding-top: 16px;
}
/* The Modal (background) */
.modal
{
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}
.modal-content
{
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}
/* The Close Button (x) */
.close
{
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus
{
    color: red;
    cursor: pointer;
}
/* Add Zoom Animation */ 
.animate
{
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom
{
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}
@keyframes animatezoom
{
    from {transform: scale(0)}
    to {transform: scale(1)}
}
/* Change styles for span and cancel
button on extra small screens */ 
@media screen and(max-width: 300px)
{
    span.psw
    {
       display: block;
       float: none;
    }
    .cancelbtn
    {
       width: 100%;
    }
}
</style>
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
<body background="images/de.png">
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
<a href="register.php" target="_parent"> REGISTER</a>
<body alink="green" vlink="red"> </body>
</b>
</menu>
</nav>
</header>
<body>
<br><br><br><br><b><font face="Lucida Calligraphy" size="5" color="#FF0066"> <h1 align="center"><h2 align="center"> <u> <i> Click Below To Log In :</i> </u> </h2><br><br><br><br><br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:1330px;"><font face="Bookman Old Style" size="5">Login</font></button>
<div id="id01" class="modal">
<form class="modal-content animate" action="action_page.php" type="POST">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"> &times;</span>
<img src="icons/img_profile.png" alt="Avatar" class="avatar">
</div>
<div class="container">
<label><b>Username</b></label>
<input type="text" placeholder= "Enter Username" name="uname" required>
<label><b>Password</b></label>
<input type="password" placeholder= "Enter Password" name="psw" required>
<button type="submit">Login</button>
<input type="checkbox" checked="checked">Remember me
</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<span class="psw">Forgot
<u><a href="#"><font color="black">password?</font></a></u>
</span>
</div>
</form>
</div>
<script>
// Get the modal 
var modal = document.getElementById('id01');
// When the user clicks anywhere
outside of the modal, close it 
window.onclick = function(event)
{
  if (event.target == modal)
  {
    modal.style.display = "none";
  }
}
</script>
</h1>
</font>
</b><br><br><br><br><br><br><br>
<footer style="background-color:black; color:white; text-align:center; border-style:double">
<div> <b> <i> &copy Copyright 2017 </i> </b> </div>
<div> 
<a href="books.html" target="_blank"> Books </a><span>|</span>
<a href="contact.html" target="_blank"> Contact Us: </a><span>|</span>
<a href="images.html" target="_blank"> Snapshots </a><span>|</span> 
</div>
</footer>
</body>
</html>