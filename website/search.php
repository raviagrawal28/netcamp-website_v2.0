<html>
<title>
Password Finding Page
</title>
<style>
h3{
	font-family: 'Open Sans', sans-serif;
}
</style>
<body>
<center><br><br>
<h3>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$a=$_POST['email'];
if ( $a=="")
{
	echo "<h3 style='color:red'>Email is Empty</h3>";
}
else
{
$conn = new mysqli("localhost","root","","website");
$query="SELECT * FROM student WHERE email='$a'";
$result=$conn->query($query);
if($result == FALSE) { 
    trigger_error(mysql_error(), E_USER_ERROR);
	//print('query error');
}else{
	//print('query OK');
}
while ($row=mysqli_fetch_object($result))
{
	echo "<h3>Registration Id: ", $row->id;echo "</h3>";
	echo "<h3>First Name: ", $row->fname;echo "</h3>";
	echo "<h3>Email: ", $row->email;echo "</h3>";
	echo "<h3>Password: ", $row->passwd;echo "</h3>";
	echo "<br>";
}
$num_rows = mysqli_num_rows($result);
if($num_rows==0)
{
	echo "<h3 style='color:red'>Sorry, This Email_id is not registered with us</h3>";
}
}
?>
</h3>
</body>
</html>