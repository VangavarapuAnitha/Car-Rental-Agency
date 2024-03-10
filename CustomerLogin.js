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
<<<<<<< HEAD
        window.location.href = "AvailableCars.php";
=======
        window.location.href = "another_page.html";
>>>>>>> 1ac24b97b7e79049b1bfc61be0e1e98cdc66d174
      } else {
        alert("Invalid credentials. Please try again.");
      }
    }
  };
  xhr.send("cemail=" + cemail + "&cpassword=" + cpassword);
}
