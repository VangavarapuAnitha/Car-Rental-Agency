function validateLogin() {
  var licenseNumber = document.getElementById("licenseNumber").value;

  // Check credentials using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "AgentLogin.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = JSON.parse(xhr.responseText);
      if (response.success) {
        alert("Login successful!");
        // Redirect to another page or perform other actions after successful login
        window.location.href = "AddCar.html";
      } else {
        alert("Invalid credentials. Please try again.");
      }
    }
  };
  xhr.send("licenseNumber=" + licenseNumber);
}
