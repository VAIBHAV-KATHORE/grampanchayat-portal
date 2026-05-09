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

    // check user exists
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        // delete old tokens
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        // create token
        $token = bin2hex(random_bytes(32));

        // store token
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // reset link
        $base_url = "http://localhost/yourproject/admin";
        $reset_link = $base_url . "/reset_password.php?token=" . $token;

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = 'kathorevaibhav5791@gmail.com';
            $mail->Password = 'kgpu pxzy apia cakv';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('kathorevaibhav5791@gmail.com', 'Admin System');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Reset Password Link";

            $mail->Body = "
                <h3>Reset Your Password</h3>
                <p>Click below link to reset password:</p>
                <a href='$reset_link'>Reset Password</a>
                <p>This link is valid for one-time use.</p>
            ";

            $mail->send();

            $msg = "<div style='color:green;'>Reset link sent to email</div>";

        } catch (Exception $e) {
            $msg = "<div style='color:red;'>Mail Error: {$mail->ErrorInfo}</div>";
        }

    } else {
        $msg = "<div style='color:red;'>Email not found</div>";
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
