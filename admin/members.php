<?php
session_start();
if (!isset($_SESSION['admin'])) header("location:login.php");

include("../db.php");

// Ensure uploads directory exists
$uploadDir = "../uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $post = mysqli_real_escape_string($conn, $_POST['post']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
        $photo = basename($_FILES['photo']['name']); // sanitize filename
        $tmpName = $_FILES['photo']['tmp_name'];

        if (move_uploaded_file($tmpName, $uploadDir . $photo)) {
            mysqli_query($conn, "INSERT INTO members(name, post, mobile, photo) 
                VALUES('$name','$post','$mobile','$photo')");
            echo "<div class='alert alert-success'>Member added successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to upload photo.</div>";
        }
    } else {
        mysqli_query($conn, "INSERT INTO members(name, post, mobile, photo) 
            VALUES('$name','$post','$mobile','')");
        echo "<div class='alert alert-success'>Member added successfully without photo.</div>";
    }
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM members WHERE id=$id");
    echo "<div class='alert alert-success'>Member deleted successfully.</div>";
}

// Fetch all members
$data = mysqli_query($conn, "SELECT * FROM members");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


    <div class="container mt-4">

        <h2 class="text-center">Panchayat Members</h2>

        <div class="card p-3">
            <h5>Add Member</h5>
            <form method="POST" enctype="multipart/form-data">
                <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
                <input class="form-control mb-2" type="text" name="post" placeholder="Post (Sarpanch / Member)" required>
                <input class="form-control mb-2" type="text" name="mobile" placeholder="Mobile" required>
                <input class="form-control mb-2" type="file" name="photo" required>
                <button class="btn btn-success" name="add">Add Member</button>
            </form>
        </div>

        <table class="table table-bordered table-striped mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Post</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>

            <?php while ($m = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $m['id'] ?></td>
                    <td><img src="../uploads/<?= $m['photo'] ?>" height="60"></td>
                    <td><?= $m['name'] ?></td>
                    <td><?= $m['post'] ?></td>
                    <td><?= $m['mobile'] ?></td>
                    <td>
                        <a href="?delete=<?= $m['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <a href="dashboard.php" class="btn btn-dark">Back</a>

    </div>
</body>

</html>