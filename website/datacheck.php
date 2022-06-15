<html>
<center>
<br><br><br>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$name=$_POST['Id'];
$passwd=$_POST['Password'];
if($name==""||$passwd=="")
echo "All mandatory field values are not filled....!!! Try again";
else
{
	$conn = new mysqli("localhost","root","","website");
	$query="SELECT * FROM STUDENT WHERE id='$name' AND password='$passwd'";
	$result=$conn->query($query);
	
	while($rows=mysql_fetch_array($result))
	{
		if($rows["id"]==$name && $rows ["password"]==$passwd)
		{
			echo "your details are:";
			echo "<br>";
			echo "NAME:".$rows["id"];echo"<br>";
			echo "LOGIN ID:".$rows["id"];echo"<br>";
			echo "PHONE NO:".$rows["phone"];echo"<br>";
		}
		else
		echo "wrong username or password........try Again";
	}
}
?>