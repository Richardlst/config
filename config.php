<?php
// config.php - Kết nối MySQL
$servername = "10.148.0.3"; // Thay bằng IP của VM Database
$username = "web_user";
$password = "welcome123";
$database = "website_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>