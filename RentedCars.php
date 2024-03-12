<?php
        require 'connection.php';
        $sql = "SELECT * FROM rentedcars";
        $result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Rental Agency</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
      }

      section {
        padding: 20px;
        text-align: center;
      }

      
      table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

    </style>
  </head>
  <body>
    <header>
      <h1>Car Rental Agency</h1>
     
    </header>

    <section>
       <h2>Rented Cars</h2>
       <?php
              
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>VehicleModel</th><th>VehicleNumber</th><th>RentalStartDate</th><th>RentalEndDate</th></tr>";
            while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["VehicleNumber"] . "</td><td>" . $row["customer_name"] . "</td><td>" . $row["rental_start"] . "</td><td>" . $row["rental_end"] . "</td>
        </tr>";
    }
            echo "</table>";
        } else {
            echo "<p>No users found.</p>";
        }

       ?>
    </table>
   </section>
   <script>
      function rentCar() {
        alert("Thank you for renting with us!");
        // Add additional logic for handling the rental process
      }
    </script>
  </body>
</html>




