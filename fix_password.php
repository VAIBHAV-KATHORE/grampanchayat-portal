<?php
include("db.php");

$email = "kathorevaibhav5791@gmail.com";

// force correct hash
$pass = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE admin SET password = ? WHERE email = ?");
$stmt->bind_param("ss", $pass, $email);
$stmt->execute();

echo "Password FIXED: admin123";
?>
