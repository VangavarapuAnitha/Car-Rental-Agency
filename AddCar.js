function addCar() {
  var VehicleModel = document.getElementById("VehicleModel").value;
  var VehicleNumber = document.getElementById("VehicleNumber").value;
  var SeatingCapacity = document.getElementById("SeatingCapacity").value;
  var RentPerDay = document.getElementById("RentPerDay").value;
<<<<<<< HEAD
  var CarAvailability = document.getElementById("CarAvailability").value;

     // Check if input values are not empty
  if (VehicleModel && VehicleNumber && SeatingCapacity && RentPerDay && CarAvailability) {
=======

  // Check if input values are not empty
  if (VehicleModel && VehicleNumber && SeatingCapacity && RentPerDay) {
>>>>>>> 1ac24b97b7e79049b1bfc61be0e1e98cdc66d174
    // Perform AJAX request to add car
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "AddCar.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = JSON.parse(xhr.responseText);
        if (response.success) {
          alert("Car added successfully!");
          // You can redirect or perform other actions here
        } else {
          alert("Failed to add car. Please try again.");
        }
      }
    };
    xhr.send(
      "VehicleModel=" +
        VehicleModel +
        "&VehicleNumber=" +
        VehicleNumber +
        "&SeatingCapacity=" +
        SeatingCapacity +
        "&RentPerDay=" +
<<<<<<< HEAD
        RentPerDay+
        "&CarAvailability=" +
        CarAvailability
=======
        RentPerDay
>>>>>>> 1ac24b97b7e79049b1bfc61be0e1e98cdc66d174
    );
  } else {
    alert("Please fill in all the fields.");
  }
<<<<<<< HEAD

=======
>>>>>>> 1ac24b97b7e79049b1bfc61be0e1e98cdc66d174
}
