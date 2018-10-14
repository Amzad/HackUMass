<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

$servername = "localhost";
$username = "Lays";
$password = "Lays";
$dbname = "pictures";
$dbuser = "pictures";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}


?>