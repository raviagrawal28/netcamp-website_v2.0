<html>
<head>
<title>
* * * NETCAMP * * * One stop solution for Ethical Hacking, Computer Networking & Web Development
</title>
<style>
#header {
    background-color:white;
    color:black;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:20px;
    background-color:#eeeeee;
    height:600px;
    width:300px;
    float:right;
    padding:5px;	      
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
.textboxClass {
    background: #ecf0f1;
    border: #ccc 1px solid;
    border-bottom: #ccc 2px solid;
    padding: 8px;
    width: 250px;
    color: #AAAAAA;
    margin-top: 10px;
    font-size: 1em;
    border-radius: 4px;
}
.buttonClass{
    width: 125px;
    padding-top: 5px;
    padding-bottom: 5px;
    color: white;
    border-radius: 4px;
    border: #27ae60 1px solid;
    margin-top: 20px;
    margin-bottom: 20px;
    float: left;
    margin-left: 2px;
    font-weight: 800;
    font-size: 0.8em;
	background: dodgerblue;
	cursor: pointer;
}
.signupbuttonClass{
    width: 125px;
    padding-top: 5px;
    padding-bottom: 5px;
    color: white;
    border-radius: 4px;
    border: #27ae60 1px solid;
    margin-top: 20px;
    margin-bottom: 20px;
    float: left;
    margin-left: 2px;
    font-weight: 800;
    font-size: 1.1em;
    background: #3d9b5d;
    cursor: pointer;
}
.textForgotPassword {
    padding: 18px;
    width: 250px;
    color: #0000BB;
    margin-top: 10px;
    font-size: 1em;
}
h1{
	font-family: 'Open Sans', sans-serif;
}
.heading{
font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>
<div id="header">
<img src="netcamp-logo.jpg" hspace="50" vspace="20">
<div align="right"><a href="http://www.facebook.com/netcamp.in"target="_blank"><img src="facebook.png"></a>
<a href="http://www.twitter.com/netcamp_in"target="_blank"><img src="twitter.png"></a>
<a href="http://www.picasaweb.google.com/netcamp.photos"target="_blank"><img src="picasa.png"></a><br>
<div class="heading"><b>Contact Us: +91 93310 90003</b></div></div>
<hr>
<div class = "heading"><font size="40"><center><b>WELCOME TO NETCAMP.IN</b></font></div><br><i><marquee behavior="alternate" vspace="5"><u></h1>A One Stop Solution for Ethical Hacking, Computer Networking & Web Development</u></marquee></i></center></h1>
<hr>
</div>

<div id="nav">

<form id="login" method="POST" action="login.php">
<table>
<tr><h1>User Login</h1></tr><br>
<tr><input type="text" name="email" size="30" placeholder="Login Id" class="textboxClass"></tr><br>
<tr><input type="password" name="passwd" size="30" placeholder="Password" class="textboxClass"></tr><br>
</table>
<input type="submit" value="Login" class="buttonClass"><br>
<a href="forgotpassword.php" class="textForgotPassword">Forgot Password</a>
</form>

<br>
<form id="alogin" method="POST" action="alogin.php">
<table>
<tr><h1>Admin Login</h1></tr><br>
<tr><input type="text" name="admin_email" size="30" placeholder="Admin Login Id" class="textboxClass"></tr><br>
<tr><input type="password" name="admin_passwd" size="30" placeholder="Admin Password" class="textboxClass"></tr><br>
</table>
<input type="submit" value="Login" class="buttonClass"><br>
</form>
<br>
<h1>New to Netcamp??</h1>
<center><a href="registration.php" class="signupbuttonClass">Signup</a><center>
</div>
<div id="section">
<br>
<br>
<img src="last.png">
</div>
<div id="footer">
<b>Copyright © Ravi@Netcamp.in | 2014-15
</div>
</body>
</html>