<?php

require 'connection.php';

// Get car details from the AJAX request
if(isset($_POST["submit"])){
$VehicleModel = $_POST['VehicleModel'];
$VehicleNumber = $_POST['VehicleNumber'];
$SeatingCapacity = $_POST['SeatingCapacity'];
$RentPerDay = $_POST['RentPerDay'];
$CarAvailability = $_POST['CarAvailability'];

// Perform database query to add car (this is a simple example)
$sql = "INSERT INTO cardetails (VehicleModel, VehicleNumber, SeatingCapacity,RentPerDay,Available ) VALUES ('$VehicleModel', '$VehicleNumber', '$SeatingCapacity','$RentPerDay','$CarAvailability')";
$result = $conn->query($sql);

// Prepare response
$response = array();

if ($result) {
      echo '<script>';
      echo 'alert("Car Details Added Successfully!");';
      echo 'window.location.href = "AddCar.html";';
      echo '</script>';
} 

// Send response as JSON
echo json_encode($response);

// Close the database connection
$conn->close();
}
?>
