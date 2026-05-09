<?php
include("../db.php");

$msg = "";

if (!isset($_GET['token'])) {
    die("Invalid Token");
}

$token = $_GET['token'];

// check token
$stmt = $conn->prepare("SELECT * FROM password_resets WHERE token = ?");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows != 1) {
    die("Token expired or invalid");
}

$data = $result->fetch_assoc();
$email = $data['email'];

if (isset($_POST['reset'])) {

    $pass = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($pass !== $confirm) {
        $msg = "Passwords do not match";
    } else {

        $hashed = password_hash($pass, PASSWORD_DEFAULT);

        // update password
        $stmt = $conn->prepare("UPDATE admin SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashed, $email);
        $stmt->execute();

        // delete token
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
        $stmt->bind_param("s", $token);
        $stmt->execute();

        $msg = "Password updated successfully. <a href='login.php'>Login Now</a>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>

<h2>Reset Password</h2>

<p style="color:green;"><?php echo $msg; ?></p>

<form method="POST">

    <input type="password" name="password" placeholder="New Password" required>
    <br><br>

    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <br><br>

    <button type="submit" name="reset">Reset Password</button>

</form>

</body>
</html>
