<?php

require 'connection.php';

// Get username and password from the AJAX request
if(isset($_POST["submit"])){
$licenseNumber = $_POST['licenseNumber'];


// Perform database query to check credentials (this is a simple example)
$sql = "SELECT * FROM AgentDetails WHERE licenseNumber  = '$licenseNumber ' ";
$result = $conn->query($sql);

// Prepare response
$response = array();

if ($result->num_rows > 0) {
    // Valid credentials
    $response['success'] = true;
} else {
    // Invalid credentials
    $response['success'] = false;
}

// Send response as JSON
echo json_encode($response);

// Close the database connection
$conn->close();
}

?>
