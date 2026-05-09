<?php
session_start();
include("../db.php");

$msg = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $dbPassword = $row['password'];

        // 1️⃣ Try hashed password check
        $valid = password_verify($password, $dbPassword);

        // 2️⃣ Fallback: plain match (YOUR CURRENT DB NEEDS THIS)
        if (!$valid && $password === $dbPassword) {
            $valid = true;
        }

        // 3️⃣ FINAL LOGIN CHECK
        if ($valid) {

            $_SESSION['admin'] = $row['username'];
            $_SESSION['admin_email'] = $row['email'];

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
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

    <div class="card p-4 shadow" style="width:350px;">

        <h4 class="text-center mb-3">Admin Login</h4>

        <?php echo $msg; ?>

        <form method="POST">

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" name="login" class="btn btn-primary w-100">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html>
