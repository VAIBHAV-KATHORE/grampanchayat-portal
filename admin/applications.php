<?php
session_start();
if (!isset($_SESSION['admin'])) header("location:login.php");
include("../db.php");

if (isset($_GET['approve'])) {
    mysqli_query($conn, "UPDATE applications SET status='Approved' WHERE id=" . $_GET['approve']);
}

if (isset($_GET['reject'])) {
    mysqli_query($conn, "UPDATE applications SET status='Rejected' WHERE id=" . $_GET['reject']);
}

$data = mysqli_query($conn, "SELECT * FROM applications ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Applications – Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


    <div class="container mt-4">
        <h2 class="text-center">Citizen Applications</h2>

        <table class="table table-bordered table-striped mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Service</th>
                <th>Phone</th>
                <th>Document</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while ($r = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $r['id'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['service'] ?></td>
                    <td><?= $r['phone'] ?></td>
                    <td>
                        <?php if ($r['document']) { ?>
                            <a href="../uploads/<?= $r['document'] ?>" target="_blank" class="btn btn-sm btn-info">View</a>
                        <?php } else echo "No File"; ?>
                    </td>

                    <td>
                        <span class="badge bg-primary"><?= $r['status'] ?></span>
                    </td>

                    <td>
                        <a href="?approve=<?= $r['id'] ?>" class="btn btn-success btn-sm">Approve</a>
                        <a href="?reject=<?= $r['id'] ?>" class="btn btn-danger btn-sm">Reject</a>
                    </td>
                </tr>
            <?php } ?>

        </table>

        <a href="dashboard.php" class="btn btn-dark">Back</a>
    </div>
</body>

</html>