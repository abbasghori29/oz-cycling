<?php
// Database credentials
$servername = "localhost"; // or the server where your database is hosted
$username = "root";        // default user in XAMPP
$password = "";            // default password in XAMPP (usually blank)
$dbname = "OZCYCLING"; // the name of the database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
?>
