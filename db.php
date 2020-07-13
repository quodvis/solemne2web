<?php

include 'vars.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
if(!$conn) {
  echo 'Error: ' . mysql_errno() . ' - ' . mysql_error();
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 