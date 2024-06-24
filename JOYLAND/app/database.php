<?php
$hostname = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli('JOYLAND', 'root', '');
// Check connection
if ($conn->connect_error) 
  die("Connection failed: " . $conn->connect_error);

else {
  echo "Connected successfully";
}
$conn->close();

?>