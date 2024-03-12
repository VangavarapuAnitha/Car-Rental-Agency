<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $cemail = $_POST["cemail"];
  $cname = $_POST["cname"];
  $cage = $_POST["cage"];
  $cnumber = $_POST["cnumber"];
  $cpassword = $_POST["cpassword"];

  $query = "INSERT INTO CustomerDetails (cemail, cname, cage, cnumber, cpassword) VALUES ('$cemail','$cname','$cage','$cnumber','$cpassword')";
  
  if(mysqli_query($conn, $query)){
      echo '<script>';
      echo 'alert("Registered Successfully");';
      echo 'window.location.href = "CustomerRegistration.php";';
      echo '</script>';
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
    <title>Registration</title>

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
        padding: 4px;
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

    <section>
      <form action="#" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="cemail" name="cemail" required />

        <label for="name">Name:</label>
        <input type="text" id="cname" name="cname" required />

        <label for="age">Age:</label>
        <input type="text" id="cage" name="cage" required />

        <label for="number">Mobile Number:</label>
        <input type="number" id="cnumber" name="cnumber" required />

        <label for="password">Password:</label>
        <input type="password" id="cpassword" name="cpassword" required />

        <!-- <label for="registrationType">Registration Type:</label>
        <select id="registrationType" name="registrationType" required>
          <option value="customer">Customer</option>
          <option value="agency">Car Rental Agency</option>
        </select> -->

        <button type="submit" onsubmit="validateForm()" name="submit">Register</button>
      </form>
    </section>
    <script>
      function validateForm() {
        // Add your validation logic here
        var cname = document.getElementById("cname").value;
        var cemail = document.getElementById("cemail").value;
        var cpassword = document.getElementById("cpassword").value;
        var cage = document.getElementById("cage").value;
        var cnumber = document.getElementById("cnumber").value;

        // var registrationType =
        //   document.getElementById("registrationType").value;

        // Add more validation checks as needed

        // Example: Check if email is valid
        if (!isValidEmail(cemail)) {
          alert("Invalid email address");
          return false;
        }

        alert("Registration successful!");
        return true;

        function isValidEmail(cemail) {
          // Simple email validation using a regular expression
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(cemail);
        }
        document.getElementById("CustomerRegistrationForm").reset();
      }
    </script>
  </body>
</html>
