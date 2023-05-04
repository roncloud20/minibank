<?php
// Database connection details
$host = 'localhost'; // Change this to your host name
$user = 'root'; // Change this to your database username
$pass = ''; // Change this to your database password
$db_name = 'minibank_db'; // Change this to your database name

// Create a database connection
$conn = mysqli_connect($host, $user, $pass, $db_name);

// Check if the connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
