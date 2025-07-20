<?php

$server = "localhost"; // Database server
$username = "root"; // Database username
$password = "";
$database = "arcguide_db"; // Database name

// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit();
}