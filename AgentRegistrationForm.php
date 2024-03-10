<?php
require 'connection.php';

if(isset($_POST["submit"])){
  
  $email = $_POST["email"];
  $fullName = $_POST["fullName"];
  $phone= $_POST["phone"];
  $companyName = $_POST["companyName"];
  $licenseNumber = $_POST["licenseNumber"];
  $address = $_POST["address"];

  $query = "INSERT INTO agentdetails (email, fullName, phone, companyName, licenseNumber,address) VALUES ('$email','$fullName','$phone','$companyName ','$licenseNumber','$address')";
  
  if(mysqli_query($conn, $query)){
    echo "Data inserted successfully";
  } else{
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
} 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Rental Agent Registration</title>
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

      form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      label {
        display: block;
        margin-bottom: 10px;
      }

      input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
      }

      button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Registration</h1>
    </header>

    <form id="agentRegistrationForm" onclick="validateForm()" action="#" method="POST">
      

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" required />

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required />

      <label for="companyName">Company Name:</label>
      <input type="text" id="companyName" name="companyName" required />

      <label for="licenseNumber">License Number:</label>
      <input type="text" id="licenseNumber" name="licenseNumber" required />

      <label for="address">Address:</label>
      <textarea id="address" name="address" rows="4" required></textarea>

      <button type="submit" name="submit">Register</button>
    </form>

    <script>
      function validateForm() {
        
        var email = document.getElementById("email").value;
        var fullName = document.getElementById("fullName").value;
        var phone = document.getElementById("phone").value;
        var companyName = document.getElementById("companyName").value;
        var licenseNumber = document.getElementById("licenseNumber").value;
        var address = document.getElementById("address").value;

        // You can perform further validation or processing here before submission
        // For simplicity, we'll just display the collected information in the console
        // console.log("Full Name: " + fullName);
        // console.log("Email: " + email);
        // console.log("Phone Number: " + phone);
        // console.log("Company Name: " + companyName);
        // console.log("License Number: " + licenseNumber);
        // console.log("Address: " + address);

        // Reset the form after submission if needed
        if (!isValidEmail(email)) {
          alert("Invalid email address");
          return false;
        }

        alert("Registration successful!");
        return true;

        function isValidEmail(email) {
          // Simple email validation using a regular expression
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }
        document.getElementById("agentRegistrationForm").reset();
      }
    </script>
  </body>
</html>
