<?php
session_start();
if (!isset($_SESSION['admin'])) header("location:login.php");
include("../db.php");

if (isset($_POST['add'])) {
    mysqli_query($conn, "INSERT INTO news(title,description)
    VALUES('{$_POST['title']}','{$_POST['description']}')");
}

if (isset($_GET['delete'])) {
    mysqli_query($conn, "DELETE FROM news WHERE id=" . $_GET['delete']);
}

$data = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>

<head>
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


    <div class="container mt-4">

        <h2 class="text-center">Village News & Announcements</h2>

        <div class="card p-3">
            <h5>Add News</h5>

            <form method="POST">
                <input class="form-control mb-2" name="title" placeholder="Title" required>
                <textarea class="form-control mb-2" name="description" placeholder="Description" required></textarea>
                <button class="btn btn-success" name="add">Add News</button>
            </form>
        </div>

        <table class="table table-bordered table-striped mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

            <?php while ($n = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $n['id'] ?></td>
                    <td><?= $n['title'] ?></td>
                    <td><?= $n['description'] ?></td>
                    <td><?= $n['created_at'] ?></td>
                    <td>
                        <a href="?delete=<?= $n['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <a href="dashboard.php" class="btn btn-dark">Back</a>

    </div>
</body>

</html>