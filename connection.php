<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="car_rental_agency";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname,3307);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>