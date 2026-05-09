<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

include("../db.php");

$msg = "";

if (isset($_POST['send'])) {

    $email = trim($_POST['email']);

    // check email exists (prepared)
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        // 🔥 DELETE OLD TOKENS FIRST (IMPORTANT FIX)
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        // generate new token
        $token = bin2hex(random_bytes(32));

        // store token safely
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // reset link
        $base_url = "https://grampanchayat-portal-gg79.onrender.com";
        $reset_link = $base_url . "/admin/reset_password.php?token=" . $token;

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = 'kathorevaibhav5791@gmail.com';
            $mail->Password = 'kgpu pxzy apia cakv';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('kathorevaibhav5791@gmail.com', 'Admin Panel');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Password Reset Link";

            $mail->Body = "
                <h3>Password Reset Request</h3>
                <p>Click below link to reset password:</p>
                <a href='$reset_link'>Reset Password</a>
                <p>This link is valid for one-time use only.</p>
            ";

            $mail->send();

            $msg = "<div class='alert alert-success'>Reset link sent successfully</div>";

        } catch (Exception $e) {
            $msg = "<div class='alert alert-danger'>Mail Error: {$mail->ErrorInfo}</div>";
        }

    } else {
        $msg = "<div class='alert alert-danger'>Email not found</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<h2>Forgot Password</h2>

<?php echo $msg; ?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required>
    <button type="submit" name="send">Send Reset Link</button>
</form>

</body>
</html>
