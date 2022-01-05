<?php
$server = "localhost";
$email = "root";
$password = "";
$database = "booking_system";

$conn = mysqli_connect($server, $email, $password, $database);

if(!$conn){
  die("<script>alert('Connection Failed.')</script>");
}
 ?>
