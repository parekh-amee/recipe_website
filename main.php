<?php
if(isset ($_POST["user"]))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "demo";

    $connection = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($connection->connect_error) {
    die("Connection failed: " .$connection->connect_error);
    }

    $GLOBALS['$connection'] = $connection;

    function login($user, $pass)
    {
        $connection = $GLOBALS['$connection'];
        $sqlii = "INSERT INTO loginform(user, pass) VALUES ('$user','$pass')";
        $connection -> query($sqlii);
    }
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	login($user, $pass);
}
if(isset ($_POST["email"]))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "demo";

    $connection = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($connection->connect_error) {
    die("Connection failed: " .$connection->connect_error);
    }

    $GLOBALS['$connection'] = $connection;

    function signup($email, $pass, $repeatpass)
    {
        $connection = $GLOBALS['$connection'];
        $sqlii = "INSERT INTO signupform(email, pass, repeatpass) VALUES ('$email','$pass','$repeatpass')";
        $connection -> query($sqlii);
    }
	$user=$_POST["email"];
	$pass=$_POST["pass"];
	$repeatpass=$_POST["repeatpass"];
	signup($user, $pass, $repeatpass);
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);

body {
  background: black; 
  color: #414141;
  font: 400 17px/2em 'Source Sans Pro', sans-serif;
}

.select-box {
  cursor: pointer;
  position : relative;
  max-width:  20em;
  margin: 5em auto;
  width: 100%;
}

.select,
.label {
  color: #414141;
  display: block;
  font: 400 17px/2em 'Source Sans Pro', sans-serif;
}

.select {
  width: 100%;
  position: absolute;
  top: 0;
  padding: 5px 0;
  height: 40px;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  background: none transparent;
  border: 0 none;
}
.select-box1 {
  background: #ececec;
}

.label {
  position: relative;
  padding: 5px 10px;
  cursor: pointer;
}
.open .label::after {
   content: "▲";
}
.label::after {
  content: "▼";
  font-size: 12px;
  position: absolute;
  right: 0;
  top: 0;
  padding: 5px 15px;
  border-left: 5px solid #fff;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #D4AF37;
  border: none;
  color: black;
  text-align: center;
  font-size: 16px;
  padding: 20px;
  width: 110px;
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.sa-content
{
    margin-left: auto;
    margin-right: auto;

}
.sa-main 
{
	background-color: white;
	width:950px;
	height:900px;
	margin-top:0px;

}
.bg {
  background-image: url("hello1.gif");
  height:1130px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
<!--------ssss--------->
.as-bar-block .as-bar-item 
{
padding:20px;

}
.html
{
    font-family: Verdana,sans-serif;
    font-size: 15px;
    line-height: 1.5;
	font-color: white;
}
.body 
{
    margin: 0;
	width: 100;
	height: 100;
}
.element 
{
    display: none;
    z-index: 2;
    width: 40%;
    min-width: 300px;
}
.as-animate-left 
{
    position: relative;
    animation: animateleft 0.4s;
}
.as-card, .as-card-2 
{
    box-shadow: 0 2px 5px 0 
	rgba(0,0,0,0.16),0 2px 10px 0
    rgba(0,0,0,0.12);
}
.as-sidebar 
{
    height: 100%;
    width: 200px;
    background-color: black;
    position: fixed !important;
    z-index: 1;
    overflow: auto;
}
.article, aside, details, figcaption, figure, footer, header, main, menu, nav, section 
{
    display: block;
}
*, ::before, ::after 
{
    box-sizing: inherit;
}
.body, h1, h2, h3, h4, h5, h6, p
{
    font-family: "Karma", sans-serif;
	color: white;
}
.0% 
{
    left: -300px;
    opacity: 0;
}
.100% 
{
    left: 0;
    opacity: 1;
}
.as-bar-block .as-bar-item 
{
    width: 100%;
    display: block;
    padding: 8px 16px;
    text-align: left;
    border: none;
    white-space: normal;
    float: none;
    outline: 0;
}
.as-btn, .as-button 
{
    user-select: none;
}
.as-btn, .as-button 
{
    border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: white;
    background-color: black;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
.a 
{
    color: inherit;
	background-color: transparent;
}
.as-top 
{
    top: 0;
	width: 100;
	height: 100;
}
.as-top, .as-bottom 
{
    position: fixed;
    width: 100%;
    z-index: 1;
}
.element 
{
    max-width: 1200px;
    margin: auto;
}
.as-white, .as-hover-white:hover 
{
    color: #000 !important;
	background-color: #fff !important;
	width:100;
height:100;
	margin:auto
}
.as-xlarge 
{
    font-size: 24px !important;
}
.as-left 
{
 
	margin-left:10px;
}
.as-centerr 
{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.as-right 
{
    float: right !important;
}
.as-center 
{
    text-align: center !important;
	width:100;
	height:100;
}
.as-padding 
{
    padding: 50px 50px !important;
}
.as-padding-16 
{
    padding-top: 16px !important;
    padding-bottom: 25px !important;
}
.as-padding-32 
{
    padding-top: 700px !important;
    padding-bottom: 0px !important;
}
.as-content 
{
    width:1000px;
	height:1000px;

}
.as-content, .as-auto 
{
    margin-left: auto;
    margin-right: auto;

}
.as-main, #main 
{
    transition: margin-left .4s;
	background-color: black;
	width:1550px;
	height:900px;
	margin-top:160px;

}
.as-row-padding
{
padding: 10px 10px;
}
.as-row-padding > .as-quarter
{
    padding: 10px 10px;
}
.as-quarter 
{
    width: 350px;
	height: 350px;
}
.as-quarter 
{
    float: left;
	color: black;
}
.abc
{
background-color: white;
}
.as-bar
{
padding-top: 700px !important;
    padding-bottom: 32px !important;
	}
.as-as
{
color: white;
}
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #D4AF37;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #D4AF37;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.ads
{
text-decoration: none;
}
<!-- Login -->
/* Full-width input fields */
input[type=text], input[type=password] 
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
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.btn-login
{
	 background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover 
{
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn 
{
  width: auto;
  padding: 10px 18px;
  background-color: black;
}

/* Center the image and position the close button */
.imgcontainer 
{
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar 
{
  width: 40%;
  border-radius: 50%;
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
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content 
{
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 20%; /* Could be more or less, depending on screen size */
}
/*Modal ontent box for signup*/
.modal-contentsign
{
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 25%; /* Could be more or less, depending on screen size */
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
<!--Overlay-->
#mySidebar {
  position: auto; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
<!-- !image shadow! -->
img.hover-shadow {
  transition: 0.3s;
}
.cursor {
  cursor: pointer;
}
.hover-shadow:hover {
  box-shadow: 0 8px 8px 0 white, 0 8px 20px 0 white;
}
.as-footerr
{
	background-color: black;
	width:1550px;
	height:150px;
	    margin-left: auto;
    margin-right: auto;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: white;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}


.pagination a:hover:not(.active) {
  background-color: #D4AF37;
  border-radius: 5px;
}
.center{
text-align:center;
}


</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="as-sidebar as-bar-block as-card as-top as-xlarge as-animate-left" style="display:none;z-index:2;width:20%;min-width:100px" id="mySidebar">
  <a href="javascript:void(0)" class="as-bar-item as-button">Close Menu</a>
</nav>

<!-- Top menu -->
<div class="as-top">
  <div class="as-white as-xlarge">
    <div class="as-button as-padding-16 as-left" onclick="as_open()">☰</div>
	<!----Signup---->
<button onclick="document.getElementById('id02').style.display='block'" style="width:100px" class="as-left">Signup</button>
<div id="id02" class="modal">
  
  <form class="modal-contentsign animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pizza.png" alt="Login" class="avatar">
    </div>

    <div class="container">
	<form action="signup.php" method="post">
     <center> <font color="Orange">Sign Up</font></center>
	  <br>
      <font color="black" size="3px">Please fill in this form to create an account.</font>
      <br><br>
      <label for="name"><b>Name</b></label>
      <input class="as-right"type="text" placeholder="Enter Name" name="email" required>
<br>
      <label for="psw"><b>Password</b></label>
      <input class="as-right"type="password" placeholder="Enter Password" name="pass" required>
<br>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input class="as-right"type="password" placeholder="Repeat Password" name="repeatpass" required>
      
</div>
<br>
      <font color="black"size="3px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
</font>
      <div class="clearfix">
        
        <input type="submit" value="LOGIN" class="btn-login" onclick="signup()"/></form>
		<center><button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button></center>
    </div>
  </form>
</div>
    <!-- Login -->
<button onclick="document.getElementById('id01').style.display='block'" style="width:100px" class="as-right">Login</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pizza.png" alt="Login" class="avatar">
    </div>

    <div class="container">
	<form action="login.php" method="post">
	<center> <font color="Orange">Login</font></center>
	<br>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>
<br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        <br><br>
      <input type="submit" value="LOGIN" class="btn-login" onclick="login()"/></form>
      <label><br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- Top menu -->
    <div class="as-center as-padding-16 abc"><img src="sof.jpg" height="150" width="550"></div>
  </div>
</div>


<!-- !PAGE CONTENT! -->

<div class="as-main as-content as-padding">
   <br>
<br>
  <!-- First Photo Grid-->
  <div class="as-row-padding as-padding-16 as-center" id="food">
    <div class="as-quarter">
      <a href="a.html"><img class="hover-shadow cursor"src="Veg biryani recipe _.jpg" style="width:310px; height:300px;"></a>
      <h3>Veg Biriyani</h3>
    </div>
    <div class="as-quarter">
      <a href="b.html"><img class="hover-shadow cursor"src="Veg manchurian.jfif" style="width:310px; height:290px;"></a>
      <h3>Veg Manchurian</h3>
    </div>
    <div class="as-quarter">
      <a href="c.html"><img class="hover-shadow cursor"src="Eggless chocolate cake.jpg" style="width:310px; height:290px;"></a>
      <h3>Chocolate Cake</h3>
    </div>
    <div class="as-quarter">
      <a href="d.html"><img class="hover-shadow cursor"src="Paneer butter masalaa.jfif"  style="width:310px; height:290px;"></a>
      <h3>Paneer Butter Masala</h3>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="as-row-padding as-padding-16 as-center">
    <div class="as-quarter">
      <a href="e.html"><img class="hover-shadow cursor"src="Masala pastaa.jfif" style="width:310px; height:290px;"></a>
      <h3>Masala Pasta</h3>
    </div>
    <div class="as-quarter">
      <a href="f.html"><img class="hover-shadow cursor"src="Hakka noodless.jfif" style="width:310px; height:290px;"></a>
      <h3>Hakka Noodles</h3>
    </div>
    <div class="as-quarter">
     <a href="g.html"> <img class="hover-shadow cursor"src="almond.png" style="width:310px; height:290px;"></a>
      <h3>Almond Jaggery</h3>
    </div>
    <div class="as-quarter">
      <a href="h.html"><img class="hover-shadow cursor"src="Fruit custardd.jfif" style="width:310px; height:300px;"></a>
      <h3>Fruit Custard</h3>
    </div>
  </div>
<!-- End page content -->
</div>
<div class="as-footerr">
<hr style="border-width: 1px;">
<br>
<br>
<a href="contactus.php"><img hspace="150"src="contactus.png" style="width:80px; height:80px; "></a>
<a href="feedback.html"><img hspace="150"src="feedback.png"style="width:80px; height:80px;"></a>
<a href="aboutus.html"><img hspace="150"src="aboutus.png"style="width:80px; height:80px;"></a>
<a href="mail.html"><img hspace="150"src="mail.png"style="width:80px; height:80px;"></a>
</div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
// Script to open and close sidebar
function as_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("mySidebar").style.display = "block";
}
 
function as_close() {
  document.getElementById("mySidebar").style.display = "none";  
}
 document.body.addEventListener("click", function(e){
  debugger;
  if(!(e.target.getAttribute("class").indexOf("as-button") >= 0 || e.target.parentElement == "body" ||  e.target.parentElement.id.toLowerCase() =="nav" || e.target.parentElement.id.toLowerCase() =="mysidebar" || e.target.id == "mySidebar"))
  { 
		as_close();
  }
 });  

</script>

</body>
</html>
