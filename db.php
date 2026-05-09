<?php
$conn = mysqli_connect(
    "sql301.infinityfree.com",
    "if0_41872429",
    "YOUR_VPANEL_PASSWORD",
    "if0_41872429_panchayat_db"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
