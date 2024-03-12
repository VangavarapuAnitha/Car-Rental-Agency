<?php
require 'connection.php';

// Process form data

if (isset($_POST['update'])) {
    $VehicleNumber = $_POST["VehicleNumber"];
    $VehicleModel = $_POST["VehicleModel"];
    $SeatingCapacity = $_POST["SeatingCapacity"];
    $RentPerDay = $_POST["RentPerDay"];
    // Update data in the database
    $update_query = "UPDATE cardetails SET VehicleModel = '$VehicleModel', SeatingCapacity = '$SeatingCapacity',RentPerDay = '$RentPerDay'  WHERE VehicleNumber = '$VehicleNumber' ";
    $result = $conn->query($update_query);

    if ($result) {
        echo '<script>';
      echo 'alert("Data updated succesfully");';
      echo 'window.location.href = "update.html";';
      echo '</script>';
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

// Close connection
$conn->close();

?>
