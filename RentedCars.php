<?php
require 'connection.php';
$sql = "SELECT * FROM rentedcars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data and display it in a table
    echo "<table border='1'><tr><th>VehicleNumber</th><th>CustomerName</th><th>RentalStarts</th><th>RentalEnds</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["VehicleNumber"] . "</td><td>" . $row["customer_name"] . "</td><td>" . $row["rental_start"] . "</td><td>" . $row["rental_end"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>