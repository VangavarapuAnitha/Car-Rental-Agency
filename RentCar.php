<?php
require 'connection.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $VehicleNumber = $_POST["VehicleNumber"];
    $customer_name = $_POST["customer_name"];
    $rental_days = $_POST["rental_days"];

    // Check if the car is available
    $check_car_query = "SELECT * FROM cardetails WHERE `VehicleNumber` = '$VehicleNumber' AND available = 1";
    $check_car_result = $conn->query($check_car_query);

    if ($check_car_result->num_rows > 0) {
        // Update car availability
        $update_car_query = "UPDATE cardetails SET available = 0 WHERE `VehicleNumber` = '$VehicleNumber' ";
        $conn->query($update_car_query);

        // Calculate rental end date
        $rental_end = date('Y-m-d', strtotime("+$rental_days days"));

        // Insert rental information
        $insert_rental_query = "INSERT INTO rentedcars(VehicleNumber, customer_name, rental_start, rental_end) VALUES ('$VehicleNumber', '$customer_name', NOW(), '$rental_end')";
        $conn->query($insert_rental_query);

        echo "Car rented successfully. Return by: $rental_end";
    } else {
        echo '<script type="text/javascript"> alert("Car not available.")</script>';
        
    }
}

// Close connection
$conn->close();
?>
