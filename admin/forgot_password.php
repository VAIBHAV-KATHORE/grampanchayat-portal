<?php
include("../db.php");

$msg = "";

if (isset($_POST['send'])) {

    $email = trim($_POST['email']);

    // check email exists
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        // delete old tokens
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        // generate token
        $token = bin2hex(random_bytes(32));

        // save token
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // reset link
        $base_url = "https://your-domain.com/admin";
        $reset_link = $base_url . "/reset_password.php?token=" . $token;

        // =========================
        // SENDGRID EMAIL SENDING
        // =========================

        $apiKey = "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";

        $emailData = [
            "personalizations" => [[
                "to" => [[ "email" => $email ]]
            ]],
            "from" => [
                "email" => "kathorevaibhav5791@gmail.com",
                "name" => "Admin System"
            ],
            "subject" => "Reset Your Password",
            "content" => [[
                "type" => "text/html",
                "value" => "
                    <h2>Password Reset Request</h2>
                    <p>Click below link to reset your password:</p>
                    <a href='$reset_link'>Reset Password</a>
                    <p>This link is valid for one-time use only.</p>
                "
            ]]
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($emailData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $apiKey",
            "Content-Type: application/json"
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $msg = "<div style='color:green;'>Reset link sent successfully</div>";

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
