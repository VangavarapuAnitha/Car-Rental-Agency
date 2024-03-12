<?php
        require 'connection.php';
        $sql = "SELECT * FROM cardetails";
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
      nav a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        margin: 0 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
      }
      nav a:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Car Rental Agency</h1>
      <nav>
        <a href="RegistrationAs.html">Register</a>
        <a href="LoginAS.html">Login</a>
      </nav>
    </header>
    <section>
       <h2>Available Cars</h2>      
        <?php
          if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>VehicleModel</th><th>VehicleNumber</th><th>SeatingCapacity</th><th>RentPerDay</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["VehicleModel"] . "</td> <td>" . $row["VehicleNumber"] . "</td><td>" . $row["SeatingCapacity"] . "</td><td>" . $row["RentPerDay"] . "</td><td><a href='CustomerLogin.html?VehicleNumber=" . $row['VehicleNumber'] . "'>RentCar</a></td></tr>";   
            }
            echo "</table>";
        } else {
            echo "<p>Cars not available.</p>";
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
