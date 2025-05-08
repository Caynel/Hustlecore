<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connect without selecting a DB yet
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$dbName = "gym_db";
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if ($conn->query($sql) === TRUE) {
    echo "Database '$dbName' created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>