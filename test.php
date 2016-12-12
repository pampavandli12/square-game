<html>
<body background="back.jpg">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit']))
{
	
$nme=$_POST['Name'];
$phn=$_POST['phone'];
$eml=$_POST['email'];
$passw=$_POST['pass'];

$sql = "INSERT INTO user (username, Phone, Email, Password)
VALUES ('$nme', '$phn', '$eml' ,'$passw')";

if ($conn->query($sql) === TRUE) {
	$game='game.html';
    echo "<h1>you are successfully signed in</h1>";
    echo "<br>";
    echo "<a href='$game'><h2> click to start game</h2></a>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();


?>

</body>
</html>
