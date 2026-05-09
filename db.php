<?php

$host = "ballast.proxy.rlwy.net";
$user = "root";
$pass = "kDaKtDGPpXKsGSaeroDhjLJpSsMUjeDK";
$db   = "railway";
$port = 11892;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
