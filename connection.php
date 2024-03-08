<?php


$con= new mysqli("localhost","root","","car_rental_agency");
if($con->connect_error()){
    exit('Failed to connect to mysql: '.connect_error());
}
?>