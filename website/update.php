<style>
h2{
	font-family: 'Open Sans', sans-serif;
	color: green;
}
</style>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$a=$_POST['id'];
$conn = new mysqli("localhost","root","","website");
$query="UPDATE student SET payment='Yes' WHERE id='$a'";
$result=$conn->query($query);
echo "<h2>PAYMENT STATUS UPDATED</h2>";
?>
<br>
<a href="home.php">Home</a>