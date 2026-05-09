<?php
session_start();
include("../db.php");

$msg = "";

// 👉 LOGIN LOGIC GOES HERE
if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION['admin'] = $row['username'];
            header("Location: dashboard.php");
            exit();

        } else {
            $msg = "Invalid Password";
        }

    } else {
        $msg = "Email Not Found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc, #ff4b2b);
            background-size: 300% 300%;
            animation: gradientMove 8s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        @keyframes gradientMove {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        .card {
            width: 100%;
            max-width: 380px;
            border: none;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
            backdrop-filter: blur(10px);
            transition: 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.35);
        }

        h4 {
            font-weight: 700;
            color: #333;
        }

        label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 10px rgba(37,117,252,0.3);
        }

        .btn-primary {
            border-radius: 10px;
            padding: 10px;
            font-weight: 600;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            background: linear-gradient(90deg, #ff4b2b, #ff416c);
        }

        .forgot {
            text-align: center;
            margin-top: 15px;
        }

        .forgot a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            padding: 6px 12px;
            border-radius: 20px;
            background: rgba(0,0,0,0.3);
            transition: 0.3s;
        }

        .forgot a:hover {
            background: #fff;
            color: #2575fc;
        }

        @media (max-width: 576px) {
            .card {
                margin: 20px;
                padding: 25px;
            }
        }
    </style>

</head>

<body>

<div class="card">

    <h4 class="text-center mb-3">Admin Login</h4>

    <?php echo $msg; ?>

    <form method="POST">

        <div class="mb-3">
            <label>Email</label>
<input type="email" name="email" placeholder="Email" required>
    <br><br>       
        </div>

        <div class="mb-3">
            <label>Password</label>
<input type="password" name="password" placeholder="Password" required>
    <br><br>        </div>

        <button type="submit" name="login" class="btn btn-primary w-100">
            Login
        </button>

        <div class="forgot">
            <a href="forgotpassword.php">Forgot Password?</a>
        </div>

    </form>

</div>

</body>
</html>
</body>
</html>
