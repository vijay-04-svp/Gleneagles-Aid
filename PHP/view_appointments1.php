<!DOCTYPE html>	
<html>
    <style>

        body {
            background-color: #eee;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }
        select {
            width: 312px;
            } 

        .topnav {
            overflow: hidden;
            background-color: #333;
            }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

        .container {
                padding: 20px 40px 40px;
                max-width: 100%;
                }

        .container__text {
                display: inline-block;
                width: 100%;
                }
            

        .nav_down{
            width:100%;
            background-color:#eb582f !important;
            border-bottom:2px solid #eb582f;
            }
        .nav_down div{
            width:1200px;
            color:#fff;
            background-color:#eb582f;
            font-family:calibri;
            padding:10px;
            text-align:left;
            }

            .dropdown {
            float: right;
            overflow: hidden;
            padding-right: 35px;
            }

        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
           }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
           }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 14px;
            text-decoration: none;
            display: block;
            text-align: left;
           }

        .dropdown-content a:hover {
            background-color: #ddd;
           }

        .dropdown:hover .dropdown-content {
            display: block;
           }

            table {
                width:100%;
                }
            
            table, th, td {
                border-collapse: collapse;
               }
            
            th, td {
                padding: 10px;
                text-align: center;
               }
            
            #t01 tr {
                background-color: #eee;
               }

               input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
}

input[type=text]:focus, input[type=password]:focus {
  outline: none;
}
    </style>


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

$sql = "SELECT fullname, phonenum, birthdate,Speciality,Doctor,date,time,reason FROM appointments";
$result = $conn->query($sql);


?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="topnav">
        <a href="about1.html">Home</a>
        <a href="service1.html">Services</a>
        <a href="Doctors1.html">Doctors</a>
        <a href="contact_us1.html">Contact</a>
        <a href="appointment1.html">Make an Appointment</a>
        <a href="view_appointments1.php">View Appointments</a>
        <div class="dropdown">
            <button class="dropbtn">Profile 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">My Profile</a>
              <a href="about.html">Log out</a>
            </div>
        </div> 
    </div>
      
    <div class="container">
        <div class="container__text">
        <h2>Your Appointments</h2>

        <table id="t01">
            <tr>
              <th>Name<br></th>
              <th>Phone Number<br></th>
              <th>Birth Date<br></th>
              <th>Doctor Specialization<br></th>
              <th>Doctor Name<br></th>
              <th>Date of Appointment<br></th>
              <th>Time<br></th>
              <th>Reason<br></th>
            </tr>

            <?php
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["fullname"]. "</td>
                    <td>" . $row["phonenum"]. "</td> 
                    <td>" . $row["birthdate"]. "</td>
                    <td>" . $row["Speciality"]. "</td>
                    <td>" . $row["Doctor"]. "</td>
                    <td>" . $row["date"]. "</td>
                    <td>" . $row["time"]. "</td>
                    <td>" . $row["reason"]. "</td>
                    </tr>";
                 }
                } 
                $conn->close();
            ?>
        </table>   
        </div>
    </div>
</body>
</html>