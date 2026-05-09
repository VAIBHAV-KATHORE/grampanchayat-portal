<?php
session_start();
if (!isset($_SESSION['admin'])) header("location:login.php");
include('../db.php'); // Database connection

// Fetch counts for dashboard cards
$complaints = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM complaints"))['total'];
$applications = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM applications"))['total'];
$members = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM members"))['total'];
$news = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM news"))['total'];
$gallery = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM gallery_images"))['total'];
?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - माळ सावरगाव</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6fa;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background: #14734a;
            color: white;
            min-height: 100vh;
            padding: 20px;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            margin-bottom: 10px;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #0d4e34;
        }

        .sidebar i {
            margin-right: 8px;
        }

        /* Main content */
        .main-content {
            margin-left: 240px;
            padding: 30px;
            width: 100%;
        }

        h1 {
            color: #164a41;
            margin-bottom: 30px;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .card i {
            font-size: 30px;
            color: #14734a;
        }

        .card h3 {
            margin-top: 10px;
            font-size: 24px;
            font-weight: 700;
        }

        .card p {
            color: #555;
            margin-top: 5px;
        }

        .quick-links {
            margin-top: 50px;
        }

        .quick-links a {
            display: inline-block;
            margin: 10px;
            padding: 15px 20px;
            background: #14734a;
            color: white;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .quick-links a:hover {
            background: #0d4e34;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="dashboard.php"><i class="fa fa-home"></i> डॅशबोर्ड</a>
        <a href="payment.php"><i class="fa fa-home"></i>ग्रामपंचायत कर </a>
        <a href="services.php"><i class="fa fa-home"></i>ग्रामपंचायत सेवा </a>
        <a href="complaints.php"><i class="fa fa-envelope"></i> तक्रारी</a>
        <a href="applications.php"><i class="fa fa-file-alt"></i> अर्ज</a>
        <a href="members.php"><i class="fa fa-users"></i> सदस्य</a>
        <a href="news.php"><i class="fa fa-newspaper"></i> बातम्या</a>
        <a href="admin_gallery_upload.php"><i class="fa fa-upload"></i> गॅलरी अपलोड</a>
        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> लॉगआउट</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>डॅशबोर्ड</h1>

        <!-- Dashboard Cards -->
        <div class="dashboard-cards">
            <div class="card text-center">
                <i class="fa fa-envelope"></i>
                <h3><?php echo $complaints; ?></h3>
                <p>तक्रारी</p>
            </div>

            <div class="card text-center">
                <i class="fa fa-file-alt"></i>
                <h3><?php echo $applications; ?></h3>
                <p>अर्ज</p>
            </div>

            <div class="card text-center">
                <i class="fa fa-users"></i>
                <h3><?php echo $members; ?></h3>
                <p>सदस्य</p>
            </div>

            <div class="card text-center">
                <i class="fa fa-newspaper"></i>
                <h3><?php echo $news; ?></h3>
                <p>बातम्या</p>
            </div>

            <div class="card text-center">
                <i class="fa fa-upload"></i>
                <h3><?php echo $gallery; ?></h3>
                <p>गॅलरी</p>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="quick-links">
            <a href="complaints.php"><i class="fa fa-envelope"></i> तक्रारी पहा</a>
            <a href="applications.php"><i class="fa fa-file-alt"></i> अर्ज पहा</a>
            <a href="members.php"><i class="fa fa-users"></i> सदस्य पहा</a>
            <a href="news.php"><i class="fa fa-newspaper"></i> बातम्या पहा</a>
            <a href="admin_gallery_upload.php"><i class="fa fa-upload"></i> गॅलरी पहा</a>

        </div>
    </div>

</body>

</html>