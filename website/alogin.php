
<html>
<head>
    <title>Welcome To Netcamp Admin Page</title>
	<style>
h3{
	font-family: 'Open Sans', sans-serif;
}
h2{
	font-family: 'Open Sans', sans-serif;
	color: blue;
}
h4{
	font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>
<a href="home.php">Home</a>
<center>
    <div align="right"><p><a href="home.php">Logout</a></p></div>
	<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$a=$_POST['admin_email'];
$b=$_POST['admin_passwd'];
if( $a=='admin' || $b=='admin')
{
    echo "<h2>WELCOME ADMIN</h2>";
}
else
	die("<h3>INVALID ADMIN LOGIN</h3>");
?>
	<h1>ADMINISTRATOR PAGE</h1>
	<form method="POST" action="update.php">
	Registration_Id:
    <input type="text" name="id" size="10"><br><br>
	<input type="submit" value="UPDATE PAYMENT STATUS=YES for above Registration_Id">
	</form>
	<br>
	<hr>
	<?php
$conn = new mysqli("localhost","root","","website");
$query="SELECT * FROM student";
$result=$conn->query($query);
if($result == FALSE) { 
    trigger_error(mysql_error(), E_USER_ERROR);
	//print('query error');
}else{
	//print('query OK');
}
while ($row=mysqli_fetch_object($result))
{
	echo "<h4>Registration Id: ", $row->id;echo "</h4>";
	echo "<h4><u>Payment Status: ", $row->payment;echo "</u></h4>";
	echo "<h4>First Name: ", $row->fname;echo "</h4>";
	echo "<h4>Last Name: ", $row->lname;echo "</h4>";
	echo "<h4>Sex: ", $row->sex;echo "</h4>";
	echo "<h4>Date of Birth: ", $row->bday;echo "</h4>";
	echo "<h4>Father's Name: ", $row->fthname;echo "</h4>";
	echo "<h4>Address: ", $row->addr;echo "</h4>";
	echo "<h4>Mobile: ", $row->mob;echo "</h4>";
	echo "<h4>College Name: ", $row->college;echo "</h4>";
	echo "<h4>Branch: ", $row->branch;echo "</h4>";
	echo "<h4>Semester: ", $row->sem;echo "</h4>";
	echo "<h4>Email: ", $row->email;echo "</h4>";
	echo "<br>";
	}
mysqli_free_result($result);
?>
</center>
    </body>
</html>