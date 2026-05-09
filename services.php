<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>ग्रामपंचायत मोजपुरी – सेवा</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <style>
        /* ================= Global ================= */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffecd2, #fcb69f, #c9ffbf, #a1c4fd);
            background-size: 400% 400%;
            animation: bgMove 12s infinite alternate ease-in-out;
        }

        @keyframes bgMove {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }



        /* ================= Title ================= */
        .section-title {
            font-size: 35px;
            font-weight: 900;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
        }

        .section-title::after {
            content: "";
            width: 140px;
            height: 5px;
            background: linear-gradient(to right, #ff5722, #ffeb3b, #4caf50, #2196f3);
            display: block;
            margin: 10px auto;
            border-radius: 10px;
        }

        /* ================= Service Cards ================= */
        .service-card {
            background: linear-gradient(150deg, #ffffff, #f1f1ff);
            border-radius: 20px;
            border: 3px solid transparent;
            padding: 30px;
            transition: .4s;
            text-align: center;
            box-shadow: 0 12px 32px rgba(0, 0, 0, .4);
        }

        .service-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-image: linear-gradient(45deg, #ff5722, #ff9800, #4caf50, #2196f3, #9c27b0) 1;
            box-shadow: 0 25px 50px rgba(0, 0, 0, .7);
        }

        .service-card i {
            text-shadow: 2px 2px 10px rgba(0, 0, 0, .5);
        }

        /* ================= Button ================= */
        .btn-apply {
            background: linear-gradient(to right, #ff5722, #ff9800, #4caf50, #2196f3);
            border: rgba(0, 0, 0, .4);
            font-weight: 900;
            padding: 10px 25px;
            color: white;
            border-radius: 30px;
            transition: .4s;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .5);
        }

        .btn-apply:hover {
            transform: translateY(-3px) scale(1.08);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .7);
            border: 2px solid gold;
        }
    </style>
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>


    <!-- Services Section -->
    <div class="container mt-5">
        <h2 class="section-title">गावातील सेवा</h2>
        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-university fa-3x"></i>
                    <h5 class="mt-3">ग्रामपंचायत सेवा</h5>
                    <p>ग्राम प्रशासन, विकास योजना, नागरिकांची माहिती, तसेच योजना अर्ज आणि फॉर्मसाठी सेवा.</p>
                    <a href="apply_service.php?service=panchayat" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-hospital fa-3x"></i>
                    <h5 class="mt-3">आरोग्य सेवा</h5>
                    <p>प्राथमिक आरोग्य केंद्रे, वैद्यकीय शिबिरे, औषध पुरवठा, आणि आरोग्य जनजागृती कार्यक्रम.</p>
                    <a href="apply_service.php?service=health" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-school fa-3x"></i>
                    <h5 class="mt-3">शिक्षण सेवा</h5>
                    <p>प्राथमिक व माध्यमिक शाळा, संगणक प्रशिक्षण केंद्र, शैक्षणिक कार्यशाळा, पुस्तक व साहित्य सहाय्य.</p>
                    <a href="apply_service.php?service=education" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-tint fa-3x"></i>
                    <h5 class="mt-3">पाणी पुरवठा</h5>
                    <p>घरांमध्ये स्वच्छ पाणी पुरवठा, जलसिंचन सुविधा, नाल्यांची साफसफाई आणि पाण्याचे संवर्धन.</p>
                    <a href="apply_service.php?service=water" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-bolt fa-3x"></i>
                    <h5 class="mt-3">वीज सुविधा</h5>
                    <p>घर व व्यवसायासाठी २४/७ वीज सेवा, कनेक्शन, देखभाल आणि टिकाऊ ऊर्जा उपक्रम.</p>
                    <a href="apply_service.php?service=electricity" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-tractor fa-3x"></i>
                    <h5 class="mt-3">शेती सहाय्य</h5>
                    <p>शेतकरी सहाय्य, सिंचन सुविधा, आधुनिक शेती तंत्रज्ञान, बियाणे व खत पुरवठा.</p>
                    <a href="apply_service.php?service=farming" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 7 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-bus fa-3x"></i>
                    <h5 class="mt-3">वाहतूक सुविधा</h5>
                    <p>बस सेवा, रस्ते कनेक्टिव्हिटी, वाहन मार्गदर्शन आणि सुरक्षित प्रवासाची सुविधा.</p>
                    <a href="apply_service.php?service=transport" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 8 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-leaf fa-3x"></i>
                    <h5 class="mt-3">पर्यावरण संवर्धन</h5>
                    <p>वृक्षारोपण, कचरामुक्त मोहिमा, जलसंवर्धन आणि हरित उपक्रम.</p>
                    <a href="apply_service.php?service=environment" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

            <!-- Service 9 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fa fa-users fa-3x"></i>
                    <h5 class="mt-3">सामाजिक एकता</h5>
                    <p>सांस्कृतिक कार्यक्रम, वार्षिक उत्सव, समाजसेवा उपक्रम आणि गावकऱ्यांसाठी एकत्रित उपक्रम.</p>
                    <a href="apply_service.php?service=social" class="btn-apply">सेवा अर्ज करा</a>
                </div>
            </div>

        </div>
    </div>
    <script>
        let links = document.querySelectorAll(".nav-link");
        let current = location.pathname.split("/").pop();

        links.forEach(link => {
            if (link.getAttribute("href") === current) {
                link.classList.add("active-page");
            }
        });
    </script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>