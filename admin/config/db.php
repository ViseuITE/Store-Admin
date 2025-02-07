<?php
$host = 'localhost'; // or your host
$db   = 'store_admin';
$user = 'root';
$pass = '';

// Create connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>