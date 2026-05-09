<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>प्रमाणपत्र सेवा – ग्रामपंचायत माळ सावरगाव</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        .section-title {
            color: #14734a;
            font-weight: 800
        }

        .card-box {
            background: #fff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .2);
            transition: .3s
        }

        .card-box:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .4)
        }

        .badge {
            font-size: 14px
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center section-title">ग्रामपंचायत प्रमाणपत्र सेवा</h2>
        <p class="text-center">नागरिकांसाठी उपलब्ध असलेली सर्व प्रमाणपत्रे येथे अर्ज करून मिळू शकतात.</p>

        <div class="row mt-4">

            <div class="col-md-4">
                <div class="card-box text-center">
                    <i class="fa fa-child fa-3x text-success"></i>
                    <h4 class="mt-3">जन्म प्रमाणपत्र</h4>
                    <p>नवजात मुलासाठी अधिकृत जन्म प्रमाणपत्र.</p>
                    <span class="badge bg-success">Available</span><br>
                    <a href="user/application-submit.php" class="btn btn-success mt-3">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-box text-center">
                    <i class="fa fa-heartbeat fa-3x text-danger"></i>
                    <h4 class="mt-3">मृत्यू प्रमाणपत्र</h4>
                    <p>नोंदणीकृत मृत व्यक्तीचे प्रमाणपत्र मिळवा.</p>
                    <span class="badge bg-success">Available</span><br>
                    <a href="user/application-submit.php" class="btn btn-success mt-3">Apply Now</a>
                </div>
            </div><br>

            <div class="col-md-4">
                <div class="card-box text-center">
                    <i class="fa fa-home fa-3x text-primary"></i>
                    <h4 class="mt-3">निवास प्रमाणपत्र</h4>
                    <p>गावातील रहिवासी असल्याचे अधिकृत प्रमाणपत्र.</p>
                    <span class="badge bg-success">Available</span><br>
                    <a href="user/application-submit.php" class="btn btn-success mt-3">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card-box text-center">
                    <i class="fa fa-coins fa-3x text-warning"></i>
                    <h4 class="mt-3">उत्पन्न प्रमाणपत्र</h4>
                    <p>वार्षिक उत्पन्न दाखल करण्यासाठी.</p>
                    <a href="user/application-submit.php" class="btn btn-success mt-3">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card-box text-center">
                    <i class="fa fa-users fa-3x text-info"></i>
                    <h4 class="mt-3">जात प्रमाणपत्र</h4>
                    <p>शैक्षणिक / नोकरी साठी आवश्यक.</p>
                    <a href="user/application-submit.php" class="btn btn-success mt-3">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card-box text-center">
                    <i class="fa fa-ring fa-3x text-danger"></i>
                    <h4 class="mt-3">विवाह प्रमाणपत्र</h4>
                    <p>विवाह नोंदणी व प्रमाणपत्र उपलब्ध.</p>
                    <a href="user/application-submit.php" class="btn btn-success mt-3">Apply Now</a>
                </div>
            </div>

        </div>

        <h4 class="mt-5 text-success">कागदपत्रांची आवश्यकता:</h4>
        <ul>
            <li>ओळखपत्र</li>
            <li>रहिवास पुरावा</li>
            <li>संबंधित दस्तऐवज</li>
        </ul>

    </div>

    <footer class="text-center mt-5 bg-dark text-white p-2">
        © ग्रामपंचायत माळ सावरगाव
    </footer>

</body>

</html>