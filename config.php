<?php
// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '7001550010'; // replace with your MySQL root password
$dbName     = 'foundation_bank';

// Create a database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>