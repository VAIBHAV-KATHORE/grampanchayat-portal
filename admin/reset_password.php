<?php

include("../db.php");

$msg = "";

if (isset($_GET['token'])) {
    $token = mysqli_real_escape_string(
        $conn,
        $_GET['token']
    );

    $check = mysqli_query(
        $conn,
        "SELECT * FROM password_resets
        WHERE token='$token'"
    );

    if (mysqli_num_rows($check) > 0) {
        $data = mysqli_fetch_assoc($check);

        $email = $data['email'];

        if (isset($_POST['reset'])) {
            $newpass = $_POST['password'];

            // HASH PASSWORD
            $hashed_password = password_hash(
                $newpass,
                PASSWORD_DEFAULT
            );

            $update = mysqli_query(
                $conn,
                "UPDATE admin
                SET password='$hashed_password'
                WHERE email='$email'"
            );

            if ($update) {
                mysqli_query(
                    $conn,
                    "DELETE FROM password_resets
                    WHERE token='$token'"
                );

                $msg = "
                <div class='alert alert-success'>

                    Password Updated Successfully
                    <br><br>

                    <a href='index.php'>
                        Go To Login
                    </a>

                </div>
                ";
            } else {
                $msg = "
                <div class='alert alert-danger'>

                    Update Failed :
                    " . mysqli_error($conn) . "

                </div>
                ";
            }
        }
    } else {
        die("Invalid Token");
    }
} else {
    die("Token Missing");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Reset Password</title>

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

        h3 {
            text-align: center;
            margin-bottom: 25px;
        }
    </style>

</head>

<body>

    <div class="box">

        <h3>Reset Password</h3>

        <?php echo $msg; ?>

        <form method="POST">

            <div class="mb-3">

                <label class="form-label">
                    New Password
                </label>

                <input type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter New Password"
                    required>

            </div>

            <div class="d-grid">

                <button type="submit"
                    name="reset"
                    class="btn btn-success">

                    Update Password

                </button>

            </div>

        </form>

    </div>

</body>

</html>