<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

include("../db.php");

$msg = "";

if (isset($_POST['send'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // check email exists
    $check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {

        $token = bin2hex(random_bytes(32));

        // save token
        mysqli_query($conn,
            "INSERT INTO password_resets (email, token)
             VALUES ('$email', '$token')"
        );

        // IMPORTANT: LIVE URL (Render)
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

            $mail->setFrom('kathorevaibhav5791@gmail.com', 'Panchayat_Admin_Password');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Password Reset Link";

            $mail->Body = "
                <h2>Password Reset Request</h2>
                <p>Click below to reset your password:</p>
                <a href='$reset_link'>Reset Password</a>
            ";

            $mail->send();

            $msg = "<div class='alert alert-success'>Reset link sent to email</div>";

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
