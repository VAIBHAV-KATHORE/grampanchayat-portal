<?php
include("../db.php");

$msg = "";

if (!isset($_GET['token'])) {
    die("Token Missing");
}

$token = $_GET['token'];

// check token using prepared statement
$stmt = $conn->prepare("SELECT * FROM password_resets WHERE token = ?");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Invalid or expired token");
}

$data = $result->fetch_assoc();
$email = $data['email'];

if (isset($_POST['reset'])) {

    $newpass = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // ❌ validation
    if (empty($newpass) || empty($confirm)) {
        $msg = "<div class='alert alert-danger'>Please fill all fields</div>";
    }
    elseif ($newpass !== $confirm) {
        $msg = "<div class='alert alert-danger'>Passwords do not match</div>";
    }
    else {

        // ✅ secure hash
        $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);

        // update password using prepared statement
        $stmt = $conn->prepare("UPDATE admin SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashed_password, $email);
        $update = $stmt->execute();

        if ($update) {

            // delete token
            $stmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
            $stmt->bind_param("s", $token);
            $stmt->execute();

            $msg = "
            <div class='alert alert-success'>
                Password Updated Successfully <br><br>
                <a href='login.php'>Go to Login</a>
            </div>";

        } else {
            $msg = "<div class='alert alert-danger'>Update Failed</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card p-4 shadow" style="width:400px;">

    <h4 class="text-center mb-3">Reset Password</h4>

    <?php echo $msg; ?>

    <form method="POST">

        <div class="mb-3">
            <label>New Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" required>
        </div>

        <button type="submit" name="reset" class="btn btn-primary w-100">
            Reset Password
        </button>

    </form>

</div>

</div>

</body>
</html>
