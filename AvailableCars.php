<?php
require 'connection.php';
$sql = "SELECT * FROM cardetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data and display it in a table
    echo "<table border='1'><tr><th>VehicleModel</th><th>VehicleNumber</th><th>SeatingCapacity</th><th>RentPerDay</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["VehicleModel"] . "</td><td>" . $row["VehicleNumber"] . "</td><td>" . $row["SeatingCapacity"] . "</td><td>" . $row["RentPerDay"] . "</td><td><a href='RentCar.html?VehicleNumber=" . $row['VehicleNumber'] . "'>RentCar</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>


