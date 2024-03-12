function validateLogin() {
  var cemail = document.getElementById("cemail").value;
  var cpassword = document.getElementById("cpassword").value;

  // Check credentials using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "CustomerLogin.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = JSON.parse(xhr.responseText);
      if (response.success) {
        alert("Login successful!");
        // Redirect to another page or perform other actions after successful login
        window.location.href = "AvailableCars.php";
      } else {
        alert(" Invalid Login successful!");
        // Redirect to another page or perform other actions after successful login
        window.location.href = "CustomerLogin.html";
      }
    }
  };
  xhr.send("cemail=" + cemail + "&cpassword=" + cpassword);
}
