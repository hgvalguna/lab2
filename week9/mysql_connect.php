<?php
$servername = "localhost";
$username = "webprogss211";
$password = "webprogss211";
//
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 