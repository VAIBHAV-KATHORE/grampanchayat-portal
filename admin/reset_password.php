<?php
include("../db.php");

$msg = "";

if (!isset($_GET['token'])) {
    die("Token Missing");
}

$token = mysqli_real_escape_string($conn, $_GET['token']);

// check token
$check = mysqli_query($conn,
    "SELECT * FROM password_resets WHERE token='$token'"
);

if (mysqli_num_rows($check) == 0) {
    die("Invalid or expired token");
}

$data = mysqli_fetch_assoc($check);
$email = $data['email'];

if (isset($_POST['reset'])) {

    $newpass = $_POST['password'];

    // HASH PASSWORD (GOOD)
    $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);

    // update admin password
    $update = mysqli_query($conn,
        "UPDATE admin SET password='$hashed_password' WHERE email='$email'"
    );

    if ($update) {

        // delete token
        mysqli_query($conn,
            "DELETE FROM password_resets WHERE token='$token'"
        );

        $msg = "
        <div class='alert alert-success'>
            Password Updated Successfully <br><br>
            <a href='login.php'>Go to Login</a>
        </div>";

    } else {
        $msg = "<div class='alert alert-danger'>Update Failed</div>";
    }
}
?>
