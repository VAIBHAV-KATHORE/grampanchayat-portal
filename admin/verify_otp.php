<!DOCTYPE html>
<html>

<head>
    <title>Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh">

    <div class="card p-4 col-md-4">
        <h5 class="text-center">OTP Verification</h5>

        <form method="POST" action="verify_otp_process.php">
            <input type="text" name="otp" class="form-control mb-3" placeholder="Enter OTP" required>
            <button class="btn btn-success w-100">Verify</button>
        </form>
    </div>

</body>

</html>