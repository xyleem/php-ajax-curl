<?php
$servername = "localhost";
$username = "test";
$password = "123";
$dbname = "test";
// Create conection
$con = new mysqli($servername, $username, $password,$dbname);

// Check conection
if ($con->connect_error) {
  die("connection failed: " . $con->connect_error);
}
//echo "connected successfully";
?>