<?php

require 'connection.php';

// Get username and password from the AJAX request
if(isset($_POST["submit"])){
$cemail = $_POST['cemail'];
$cpassword = $_POST['cpassword'];

// Perform database query to check credentials (this is a simple example)
$sql = "SELECT * FROM CustomerDetails WHERE cemail = '$cemail' AND cpassword = '$cpassword'";
$result = $conn->query($sql);

// Prepare response
$response = array();

if ($result->num_rows > 0) {
    
    header("Location: AvailableCars.php");
} else {
       echo '<script>';
      echo 'alert("Invalid Details");';
      echo 'window.location.href = "CustomerLogin.html";';
      echo '</script>';
}

// Send response as JSON
echo json_encode($response);

// Close the database connection
$conn->close();
}

?>
