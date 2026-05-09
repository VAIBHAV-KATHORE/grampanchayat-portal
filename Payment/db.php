<?php
$host = "localhost";
$user = "root";
$pass = "";                // your XAMPP default password is empty
$dbname = "panchayat_db";  // replace with your actual DB name

// Create connection
$db = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$db) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
