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

$Name = $_POST['fname'];
$Phone = $_POST['phone'];
$Bdate = $_POST['bdate'];
$Speciality = $_POST['speciality'];
$Doctor = $_POST['doctor'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Reason = $_POST['reason'];

$sql = "INSERT INTO appointments(fullname,phonenum,birthdate,Speciality,Doctor,date,time,reason) VALUES('$Name','$Phone','$Bdate','$Speciality','$Doctor','$Date','$Time','$Reason')";
$result = $conn->query($sql);

if(!$result)
{
    echo("Data Not Inserted: " . $conn -> error);
}
else
{
    echo "<script>alert('Appointment has been fixed');</script>";
    header("refresh:0 ; url =appointment1.html");
}

$conn->close();
?>