<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>नागरिक सेवा – माळ सावरगाव</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        .section-title {
            color: #14734a;
            font-weight: 800
        }

        .service-card {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .3);
            transition: .3s;
            text-align: center
        }

        .service-card:hover {
            transform: scale(1.03)
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center section-title">नागरिक सेवा</h2>
        <p class="text-center">ग्रामपंचायतीकडून नागरिकांना उपलब्ध सुविधा</p>

        <div class="row">

            <div class="col-md-4 mt-3">
                <div class="service-card">
                    <i class="fa fa-users fa-3x text-success"></i>
                    <h5>तक्रार नोंदणी</h5>
                    <p>गावातील समस्या नोंदवा</p>
                    <a href="user/complaint-submit.php" class="btn btn-success">Submit Complaint</a>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="service-card">
                    <i class="fa fa-file fa-3x text-primary"></i>
                    <h5>अर्ज प्रक्रिया</h5>
                    <p>ऑनलाइन अर्ज करा</p>
                    <a href="user/application-submit.php" class="btn btn-primary">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="service-card">
                    <i class="fa fa-bullhorn fa-3x text-danger"></i>
                    <h5>घोषणा व सूचना</h5>
                    <p>ताज्या बातम्या आणि जाहीर सूचना</p>
                    <a href="admin/news.php" class="btn btn-danger">View News</a>
                </div>
            </div>

        </div>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>