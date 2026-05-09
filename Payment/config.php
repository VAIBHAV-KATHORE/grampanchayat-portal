<?php
$keyId = 'rzp_test_S0KSRllFimS85k';
$keySecret = 'hf9Wl9ZeEudCyytHljV7Yp9r';

// Database config
$host = "localhost";
$dbname = "panchayat_db"; // your DB name
$user = "root";   // your DB user
$pass = "";       // your DB password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Panchayat Name
$gpn_name = "ग्रामपंचायत मोजपुरी, ता. जालना, जि. जालना";
