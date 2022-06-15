<html>
<head>
    <title>Welcome To Netcamp Login Page</title>
	<style>
hr
{
	border: 6px solid blue;
	border-radius: 5px;
}
h1{
	font-family: 'Open Sans', sans-serif;
}
h2{
	font-family: 'Open Sans', sans-serif;
	color: blue;
}
h3{
	font-family: 'Open Sans', sans-serif;
	color: red;
}
h4{
	font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>
<center>
	<div align="left"><a href="home.php">Home</a></div>
    <div align="right"><a href="home.php">Logout</a></div>
    <h1>USER LOGIN PAGE</h1>
	<br>
	<hr>
	<?php
	//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$a=$_POST['email'];
//print($a);
$b=$_POST['passwd'];
//print($b);
if ( $a=="" || $b=="")
{
	echo '<h3>Either Username or Password is Empty</h3>';
}
else
{
$conn = new mysqli("localhost","root","","website");
$query="SELECT * FROM student WHERE email='$a' AND passwd='$b'";
$result=$conn->query($query);
if($result == FALSE) { 
    trigger_error(mysql_error(), E_USER_ERROR);
	//print('query error');
}else{
	//print('query OK');
}
while ($row=mysqli_fetch_object($result))
{
	echo "<h2>Welcome -  ", $row->fname; echo " ", $row->lname; echo "</h2><br><br>";
	echo "<h4>Registration Id: ", $row->id;echo "</h4>";
	echo "<h4>Payment Status: ", $row->payment;echo "</h4>";
	echo "<h4>First Name: ", $row->fname;echo "</h4>";
	echo "<h4>Middle Name: ", $row->mname;echo "</h4>";
	echo "<h4>Last Name: ", $row->lname;echo "</h4>";
	echo "<h4>Sex: ", $row->sex;echo "</h4>";
	echo "<h4>Date of Birth: ", $row->bday;echo "</h4>";
	echo "<h4>Father's Name: ", $row->fthname;echo "</h4>";
	echo "<h4>Address: ", $row->addr;echo "</h4>";
	echo "<h4>Mobile: ", $row->mob;echo "</h4>";
	echo "<h4>Alternate Mobile: ", $row->amob;echo "</h4>";
	echo "<h4>College Name: ", $row->college;echo "</h4>";
	echo "<h4>Branch: ", $row->branch;echo "</h4>";
	echo "<h4>Semester: ", $row->sem;echo "</h4>";
	echo "<h4>Email: ", $row->email;echo "</h4>";
	echo "<h4>Password: ", $row->passwd;echo "</h4>";
	echo "<br>";
}
$num_rows = mysqli_num_rows($result);
if($num_rows==0)
{
	echo "<h3>Either Email or Password is incorrect</h3>";
}
}
?>
</center>
</body>
</html>