<style>
h3{
	font-family: 'Open Sans', sans-serif;
	color: red;
}
h2{
	font-family: 'Open Sans', sans-serif;
	color: green;
}
</style>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$a=$_POST['fname'];
$b=$_POST['mname'];
$c=$_POST['lname'];
$d=$_POST['sex'];
$e=$_POST['bday'];
$f=$_POST['fthname'];
$g=$_POST['addr'];
$h=$_POST['mob'];
$i=$_POST['amob'];
$j=$_POST['college'];
$k=$_POST['branch'];
$l=$_POST['sem'];
$m=$_POST['email'];
$n=$_POST['passwd'];
if( $a=="" || $c=="" || $d=="" || $e=="" || $f=="" || $g=="" || $h=="" || $j=="" || $k=="" || $l=="" || $m=="" || $n=="")
{
	echo "<h3>All mandatory fields values are not filled.....! Try again</h3>";
}
	else
{
$conn = new mysqli("localhost","root","","website");
$query="INSERT INTO student(fname,mname,lname,sex,bday,fthname,addr,mob,amob,college,branch,sem,email,passwd) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
$result=$conn->query($query);
if(!$result)
{
echo "query error";
echo "$query";
}
else
echo "<h2>Thankyou for registering........!!!!</h2>";
}
?>
<br>
<a href="home.php">Home</a>