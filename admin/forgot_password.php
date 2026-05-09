<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

include("../db.php");

$msg = "";

if (isset($_POST['send'])) {
    $email = mysqli_real_escape_string(
        $conn,
        $_POST['email']
    );

    $check = mysqli_query(
        $conn,
        "SELECT * FROM admin WHERE email='$email'"
    );

    if (mysqli_num_rows($check) > 0) {
        $token = md5(rand());

        mysqli_query(
            $conn,
            "INSERT INTO password_resets(email, token)
            VALUES('$email','$token')"
        );

        $reset_link =
            "http://localhost/villege/admin/reset_password.php?token=$token";

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();

            $mail->Host = 'smtp.gmail.com';

            $mail->SMTPAuth = true;

            $mail->Username =
                'kathorevaibhav5791@gmail.com';

            $mail->Password =
                'kgpu pxzy apia cakv';

            $mail->SMTPSecure =
                PHPMailer::ENCRYPTION_STARTTLS;

            $mail->Port = 587;

            $mail->SMTPDebug = 0;

            $mail->CharSet = 'UTF-8';

            // FROM

            $mail->setFrom(
                'kathorevaibhav5791@gmail.com',
                'Panchayat Admin'
            );

            // TO

            $mail->addAddress($email);

            // EMAIL FORMAT

            $mail->isHTML(true);

            $mail->Subject =
                'Password Reset Link';

            $mail->Body = "

    <h2>Password Reset</h2>

    <p>
        Click below link to reset your password:
    </p>

    <a href='$reset_link'>
        Reset Password
    </a>

    ";

            $mail->send();

            $msg = "

    <div class='alert alert-success'>

        Password Reset Link Sent To Your Email

    </div>

    ";
        } catch (Exception $e) {
            $msg = "

    <div class='alert alert-danger'>

        Mail Error :
        {$mail->ErrorInfo}

    </div>

    ";
        }
    } else {
        $msg = "

        <div class='alert alert-danger'>

            Email Not Found

        </div>

        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Forgot Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .box {
            background: #fff;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
    </style>

</head>

<body>

    <div class="box">

        <h2>Forgot Password</h2>

        <?php echo $msg; ?>

        <form method="POST">

            <div class="mb-3">

                <label class="form-label">
                    Enter Username
                </label>

                <input type="email"
                    name="email"
                    class="form-control"
                    required>

            </div>

            <div class="d-grid">

                <button type="submit"
                    name="send"
                    class="btn btn-primary">

                    Generate Reset Link

                </button>

            </div>

        </form>

        <div class="text-center mt-3">

            <a href="login.php">
                Back To Login
            </a>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>