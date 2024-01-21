<?php
// Server with default settings (user 'root' with no password)
$host = 'localhost'; // Server
$user = 'root';
$pass = '';
$database = 'crudphp'; // Database Name

// Establishing connection
$conn = mysqli_connect($host, $user, $pass, $database);

// Displaying an error message in case the connection is not established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
