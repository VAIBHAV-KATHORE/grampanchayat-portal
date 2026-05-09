<?php
session_start();
include("../db.php");

$msg = "";

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $q = mysqli_query($conn,
        "SELECT * FROM admin WHERE email='$email'"
    );

    if (mysqli_num_rows($q) > 0) {

        $row = mysqli_fetch_assoc($q);

        // secure check
        if (password_verify($password, $row['password'])) {

            $_SESSION['admin'] = $row['email'];

            header("Location: dashboard.php");
            exit();

        } else {
            $msg = "<div class='alert alert-danger'>Invalid Password</div>";
        }

    } else {
        $msg = "<div class='alert alert-danger'>Email Not Found</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-control:focus {
            border-color: #6e8efb;
            box-shadow: 0 0 8px rgba(110, 142, 251, 0.3);
        }

        .btn-primary {
            background: #6e8efb;
            border: none;
        }

        .btn-primary:hover {
            background: #5a6fd1;
        }

        .form-label {
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h2>Login</h2>
        <form method="POST">
            <div class="mb-3">

                <label class="form-label">
                    Email Address
                </label>

                <input type="email"
                    class="form-control"
                    name="email"
                    placeholder="Enter Email"
                    required>

            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor:pointer;" onclick="togglePassword()">
                    👁️
                </span>
            </div>
            <div class="d-grid">
                <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
            </div>
            <div class="text-center mt-3">
                <a href="forgot_password.php">Forgot Password?</a>
            </div>
        </form>

        <script>
            function togglePassword() {
                const passwordField = document.getElementById('password');
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                } else {
                    passwordField.type = 'password';
                }
            }
        </script>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
