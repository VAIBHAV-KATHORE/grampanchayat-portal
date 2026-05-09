<?php
$conn = new mysqli("localhost", "root", "", "panchayat_db");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn->query("INSERT INTO contact_messages(name,email,phone,message) 
VALUES('$name','$email','$phone','$message')");

// Email Notification
$gramEmail = "kathorevaibhav5791@gmail.com.com";
$subject = "New Contact Message";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
$headers = "From: $email";
@mail($gramEmail, $subject, $body, $headers);

// WhatsApp Auto Redirect
$whatsappNumber = "918830762587";
$text = urlencode("New Message Received\n\nName: $name\nPhone: $phone\n\n$message");

header("Location: https://wa.me/$whatsappNumber?text=$text");
exit();
