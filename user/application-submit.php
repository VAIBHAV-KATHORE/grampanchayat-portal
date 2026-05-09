<?php include("../db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
        }

        .form-container h2 {
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

    <div class="form-container">
        <h2>Apply Now</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">संपूर्ण नाव</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="तुमचे पूर्ण नाव एंटर करा" required>
            </div>
            <div class="mb-3">
                <label for="service" class="form-label">सेवा निवडा</label>
                <select class="form-select" name="service" id="service" required>
                    <option value="" selected disabled>सेवा निवडा</option>
                    <option value="जन्म प्रमाणपत्र">जन्म प्रमाणपत्र</option>
                    <option value="मृत्यू प्रमाणपत्र">मृत्यू प्रमाणपत्र</option>
                    <option value="निवास प्रमाणपत्र">निवास प्रमाणपत्र</option>
                    <option value="उत्पन्न प्रमाणपत्र">उत्पन्न प्रमाणपत्र</option>
                    <option value="जात प्रमाणपत्र">जात प्रमाणपत्र</option>
                    <option value="विवाह प्रमाणपत्र">विवाह प्रमाणपत्र</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">फोन नंबर</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="तुमचा फोन नंबर एंटर करा" required>
            </div>
            <div class="mb-3">
                <label for="document" class="form-label">दस्तावेज अपलोड करा</label>
                <input class="form-control" type="file" name="document" id="document">
            </div>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Apply</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    // File info
    $file = $_FILES['document']['name'];
    $tmp_name = $_FILES['document']['tmp_name'];
    $file_size = $_FILES['document']['size'];
    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    // Allowed file types
    $allowed = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];

    if (in_array($file_ext, $allowed)) {
        // Create uploads folder if it doesn't exist
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        $destination = "uploads/" . basename($file);
        if (move_uploaded_file($tmp_name, $destination)) {
            // Database insert
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $service = mysqli_real_escape_string($conn, $_POST['service']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);

            $insert = mysqli_query($conn, "INSERT INTO applications(name, service, phone, document)
                VALUES('$name', '$service', '$phone', '$file')");

            if ($insert) {
                echo "<div class='alert alert-success'>Application Submitted Successfully</div>";
            } else {
                echo "<div class='alert alert-danger'>Database Error: " . mysqli_error($conn) . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Failed to upload file.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Invalid file type. Allowed types: " . implode(', ', $allowed) . "</div>";
    }
}
?>