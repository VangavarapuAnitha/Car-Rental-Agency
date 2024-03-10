<?php

require 'connection.php';

// Get car details from the AJAX request
$VehicleModel = $_POST['VehicleModel'];
$VehicleNumber = $_POST['VehicleNumber'];
$SeatingCapacity = $_POST['SeatingCapacity'];
$RentPerDay = $_POST['RentPerDay'];

// Perform database query to add car (this is a simple example)
$sql = "INSERT INTO cardetails (VehicleModel, VehicleNumber, SeatingCapacity, RentPerDay ) VALUES ('$VehicleModel', '$VehicleNumber', '$SeatingCapacity','$RentPerDay')";
$result = $conn->query($sql);

// Prepare response
$response = array();

if ($result) {
    // Car added successfully
    $response['success'] = true;
} else {
    // Failed to add car
    $response['success'] = false;
}

// Send response as JSON
echo json_encode($response);

// Close the database connection
$conn->close();

?>
