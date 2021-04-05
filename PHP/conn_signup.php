
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "INSERT INTO users (name,email,password) VALUES('$Name','$Email','$Password')";
$result = $conn->query($sql);

header("refresh:0 ; url =signin.html");
$conn->close();
?>