<?php
include("../db.php");
$message = "";

/* ================= MULTI IMAGE UPLOAD ================= */
if (isset($_POST['upload'])) {

    foreach ($_FILES['images']['name'] as $key => $name) {

        $caption = mysqli_real_escape_string($conn, $_POST['caption']);
        $image = time() . "_" . basename($_FILES['images']['name'][$key]);
        $tmp = $_FILES['images']['tmp_name'][$key];
        $folder = "../uploads/gallery/" . $image;

        if (move_uploaded_file($tmp, $folder)) {
            mysqli_query($conn, "INSERT INTO gallery_images(image, caption) VALUES('$image','$caption')");
            $message = "📸 फोटो यशस्वीरीत्या अपलोड झाले!";
        } else {
            $message = "❌ फोटो अपलोड झाला नाही!";
        }
    }
}

/* ================= DELETE ================= */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $img = mysqli_fetch_assoc(mysqli_query($conn, "SELECT image FROM gallery_images WHERE id=$id"));
    unlink("../uploads/gallery/" . $img['image']);
    mysqli_query($conn, "DELETE FROM gallery_images WHERE id=$id");
    $message = "🗑️ फोटो डिलीट करण्यात आला!";
}

/* ================= UPDATE ================= */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $caption = $_POST['caption'];

    if ($_FILES['image']['name'] != "") {
        $img = time() . "_" . $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp, "../uploads/gallery/" . $img);
        mysqli_query($conn, "UPDATE gallery_images SET caption='$caption', image='$img' WHERE id=$id");
    } else {
        mysqli_query($conn, "UPDATE gallery_images SET caption='$caption' WHERE id=$id");
    }

    $message = "✏️ फोटो अपडेट झाला!";
}

/* ================= SEARCH + PAGINATION ================= */
$search = isset($_GET['q']) ? $_GET['q'] : "";
$where = $search ? "WHERE caption LIKE '%$search%'" : "";

$limit = 8;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$total = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM gallery_images $where"));
$pages = ceil($total / $limit);

$images = mysqli_query($conn, "SELECT * FROM gallery_images $where ORDER BY id DESC LIMIT $start,$limit");
?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>Admin – गाव गॅलरी</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb
        }

        .card {
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1)
        }

        .gallery-img {
            height: 200px;
            object-fit: cover;
            border-radius: 10px
        }
    </style>
</head>

<body>

    <div class="container py-4">


        <h2 class="text-center fw-bold text-success mb-4">📸 गाव गॅलरी – Admin</h2>

        <?php if ($message != "") { ?>
            <div class="alert alert-info text-center fw-bold"><?php echo $message; ?></div>
        <?php } ?>

        <!-- ================= Upload ================= -->
        <div class="card p-4 mb-4">
            <h4 class="fw-bold mb-3 text-primary">🖼 नवीन फोटो अपलोड करा</h4>

            <form method="POST" enctype="multipart/form-data">
                <label class="fw-bold">कॅप्शन</label>
                <input type="text" name="caption" class="form-control mb-3" placeholder="उदा. सण / कार्यक्रम" required>

                <label class="fw-bold">फोटो निवडा (एकापेक्षा जास्त निवडा)</label>
                <input type="file" name="images[]" class="form-control mb-3" accept="image/*" multiple required>

                <button class="btn btn-success fw-bold" name="upload">अपलोड करा</button>
            </form>
        </div>

        <!-- ================= Search ================= -->
        <form class="d-flex mb-4">
            <input type="text" name="q" value="<?php echo $search; ?>" class="form-control me-2" placeholder="फोटो शोधा...">
            <button class="btn btn-primary">Search</button>
        </form>

        <!-- ================= Gallery ================= -->
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($images)) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card p-2">
                        <img src="../uploads/gallery/<?php echo $row['image']; ?>" class="gallery-img">

                        <h6 class="mt-2 fw-bold text-center"><?php echo $row['caption']; ?></h6>

                        <div class="d-flex justify-content-between mt-2">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id']; ?>">Edit</button>
                            <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('निश्चित डिलीट करायचे?')" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </div>
                </div>

                <!-- ================= Edit Modal ================= -->
                <div class="modal fade" id="edit<?php echo $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form method="POST" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5>फोटो अपडेट</h5>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                    <label>कॅप्शन</label>
                                    <input type="text" name="caption" class="form-control mb-3" value="<?php echo $row['caption']; ?>">

                                    <label>नवीन फोटो (ऐच्छिक)</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-success" name="update">Update</button>
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- ================= Pagination ================= -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>&q=<?php echo $search; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>