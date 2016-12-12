<!DOCTYPE html>
<html>
<body background="back.jpg">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



$n=$_POST["username"];
$pa=$_POST["password"];
$sql = "SELECT Password FROM user WHERE username='$n' AND Password='$pa'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	$link_address='game.html';
  echo "<a href='$link_address'><h1>Click to start game</h1></a>";
}
else {
	echo "<h3>Invalid username or password</h3>";
	echo "<br>";
$sign='signin.html';
	echo "<a href='$sign'><h2>Click here</a> to login again</h2>";
	echo "<br>";
$signu='signup.html';
echo "<h3>Not a registered user <a href='$signu'> Click here</a> to signup</h3>";
}

$conn->close();
?>

</body>
</html>