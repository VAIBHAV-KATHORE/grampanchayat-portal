<?php
// apply_service.php
$service = isset($_GET['service']) ? $_GET['service'] : '';
$service_names = [
    'panchayat' => 'ग्रामपंचायत सेवा',
    'health' => 'आरोग्य सेवा',
    'education' => 'शिक्षण सेवा',
    'water' => 'पाणी पुरवठा',
    'electricity' => 'वीज सुविधा',
    'farming' => 'शेती सहाय्य',
    'transport' => 'वाहतूक सुविधा',
    'environment' => 'पर्यावरण संवर्धन',
    'social' => 'सामाजिक एकता'
];
$service_display = isset($service_names[$service]) ? $service_names[$service] : '';
?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>सेवा अर्ज – माळ सावरगाव</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: radial-gradient(circle at top, #ff9933, #fff, #90ee90);
            min-height: 100vh;
        }

        /* Government Header */
        header {
            background: linear-gradient(#ff9933, #ff6600);
            color: #000;
            padding: 25px;
            text-align: center;
            font-weight: 900;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, .4);
            border-bottom: 6px solid #138808;
        }

        /* Title */
        .section-title {
            text-align: center;
            margin: 45px 0 25px;
            font-size: 34px;
            font-weight: 800;
            color: #0b5e00;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, .3);
        }

        /* 3D Government Card */
        .form-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 18px;
            border: 2px solid #000;
            max-width: 700px;
            margin: auto;
            box-shadow:
                0 25px 45px rgba(0, 0, 0, .3),
                inset 0 0 25px rgba(0, 0, 0, .1);
            transition: .3s;
        }

        .form-card:hover {
            transform: scale(1.01);
        }

        /* Inputs */
        .form-control {
            height: 48px;
            border: 2px solid #0b5e00;
            font-size: 17px;
            font-weight: 600;
        }

        .form-control:focus {
            border: 2px solid #ff6600;
            box-shadow: 0 0 10px rgba(255, 102, 0, .8);
        }

        /* Tricolor Underline Effect for Labels */
        .form-label {
            font-weight: 700;
            color: #0b3d02;
            position: relative;
        }

        .form-label::after {
            content: "";
            width: 90px;
            height: 4px;
            background: linear-gradient(90deg, #ff9933, #ffffff, #138808);
            position: absolute;
            bottom: -8px;
            left: 0;
            border-radius: 10px;
        }

        /* 3D Government Button */
        .btn-submit {
            background: linear-gradient(45deg, #ff9933, #ff6600, #138808);
            color: #000;
            border-radius: 40px;
            font-weight: 900;
            letter-spacing: .7px;
            border: 2px solid #000;
            box-shadow: 0 7px 0 #000;
            transition: .3s;
        }

        .btn-submit:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 14px 18px rgba(0, 0, 0, .5);
            background: linear-gradient(45deg, #138808, #ff6600, #ff9933);
            color: #000;
        }

        /* Press Effect */
        .btn-submit:active {
            transform: translateY(4px);
            box-shadow: 0 2px 0 #000;
        }

        /* Footer Government */
        footer {
            background: #0b5e00;
            color: #fff;
            text-align: center;
            padding: 18px;
            font-weight: 700;
            letter-spacing: .8px;
            border-top: 6px solid #ff6600;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>मोजपुरी – सेवा अर्ज</h1>
    </header>

    <!-- Form Section -->
    <div class="container">
        <h2 class="section-title">सेवा अर्ज फॉर्म</h2>
        <div class="form-card">
            <form method="POST" enctype="multipart/form-data" action="submit_service.php">
                <div class="mb-3">
                    <label for="name" class="form-label">नाव</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="आपले पूर्ण नाव" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">मोबाईल</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="आपला मोबाईल नंबर" required>
                </div>
                <div class="mb-3">
                    <label for="service" class="form-label">सेवा</label>
                    <input type="text" class="form-control" id="service" name="service"
                        value="<?php echo $service_display; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="document" class="form-label">कागदपत्र अपलोड (ऐच्छिक)</label>
                    <input type="file" class="form-control" id="document" name="document">
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-submit btn-lg">अर्ज सादर करा</button>
                </div>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>