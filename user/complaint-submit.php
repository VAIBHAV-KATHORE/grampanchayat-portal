<?php include("../db.php"); ?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>तक्रार फॉर्म</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
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
            max-width: 500px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-control:focus {
            border-color: #ff758c;
            box-shadow: 0 0 8px rgba(255, 117, 140, 0.3);
        }

        .btn-primary {
            background: #ff758c;
            border: none;
        }

        .btn-primary:hover {
            background: #e66b7f;
        }

        .form-label {
            font-weight: 500;
        }

        textarea.form-control {
            resize: none;
            height: 120px;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>तक्रार फॉर्म</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">नाव</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="तुमचे नाव टाका" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">मोबाईल</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="मोबाईल नंबर" required>
            </div>
            <div class="mb-3">
                <label for="complaint" class="form-label">तक्रार लिहा</label>
                <textarea class="form-control" name="complaint" id="complaint" placeholder="तुमची तक्रार येथे लिहा" required></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">सादर करा</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $complaint = $_POST['complaint'];

    mysqli_query($conn, "INSERT INTO complaints(name,phone,complaint) 
    VALUES('$name','$phone','$complaint')");

    echo "Complaint Submitted Successfully";
}
?>