<?php
// // Replace these values with your actual database credentials
// $servername = "localhost";  // Replace with your database server name
// $username = "your_username";  // Replace with your database username
// $password = "your_password";  // Replace with your database password
// $dbname = "myhmsdb";  // Replace with your database name

// Create a connection to the database
$con=mysqli_connect("localhost","root","","myhmsdb");

// Check the connection status
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
