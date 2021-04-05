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

$Email = $_POST['Email'];
$Password = $_POST['Password'];



$ssql = "Select email from users where email='$Email'";
$result1 = $conn->query($ssql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) 
    {
      $demo = $row['email'];
      if($Email == $demo)
         header("refresh:0; url =about1.html");
    }
} 
else 
{
   echo "<script>alert('Email or Password is incorrect');</script>";
   header("refresh:0; url =signin.html");   
}

$conn->close();
?>