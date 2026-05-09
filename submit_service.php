<?php
// Start session if needed
session_start();
include("db.php"); // Include your database connection file

if (isset($_POST['submit'])) {
    // Get form data
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $service = $conn->real_escape_string($_POST['service']);

    // Handle file upload
    $file_name = '';
    if (isset($_FILES['document']) && $_FILES['document']['name'] != '') {
        $file_name = time() . "_" . basename($_FILES['document']['name']); // unique file name
        $target_dir = "uploads/";
        $target_file = $target_dir . $file_name;

        // Move uploaded file
        if (!move_uploaded_file($_FILES['document']['tmp_name'], $target_file)) {
            die("फाइल अपलोड करण्यात त्रुटी आली.");
        }
    }

    // Insert into database
    $sql = "INSERT INTO service_applications (name, phone, service, document, submitted_at) 
            VALUES ('$name', '$phone', '$service', '$file_name', NOW())";

    if ($conn->query($sql)) {
        echo "<!DOCTYPE html>
        <html lang='mr'>
        <head>
        <meta charset='UTF-8'>
        <title>अर्ज यशस्वी</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body>
        <div class='container mt-5'>
            <div class='alert alert-success text-center'>
                <h4>आपला सेवा अर्ज यशस्वीरीत्या सादर केला गेला आहे!</h4>
                <p>आम्ही लवकरच आपल्याशी संपर्क साधू.</p>
                <a href='services.php' class='btn btn-primary mt-3'>पुन्हा सेवा पहा</a>
            </div>
        </div>
        </body>
        </html>";
    } else {
        echo "डेटाबेसमध्ये डेटा साठवताना त्रुटी: " . $conn->error;
    }
}
