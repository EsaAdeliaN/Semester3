<?php
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'praktikum9';

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>
