<?php
$db = 'cm-academy';
$user = 'root';
$pass = '';
$host = 'localhost';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // More detailed error message
} else {
    // echo "Connected successfully!";
}
?>
