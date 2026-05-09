<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>ग्रामपंचायत – मोजपुरी</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        header {
            background: #164a41;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .page-header {
            background: url('images/hero/slide3.jpg');
            background-size: cover;
            background-position: center;
            padding: 110px 0;
            text-align: center;
            color: white;
            position: relative
        }

        .page-header::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6)
        }

        .page-header h1,
        .page-header p {
            position: relative;
            z-index: 2
        }

        nav {
            background: #14734a;
        }

        nav a {
            color: white;
            margin: 0 12px;
            text-decoration: none;
            font-weight: 600;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .info-box {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .2);
            transition: .3s
        }

        .info-box:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 40px rgba(0, 0, 0, .4)
        }

        .btn-custom {
            background: #14734a;
            color: white;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 18px
        }

        .btn-custom:hover {
            background: #0e502f;
            color: white
        }

        /* Navbar */
        .navbar .nav-link.active-page {
            color: #ffffff !important;
            background: #ff9800 !important;
            border-radius: 25px;
            padding: 6px 18px;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(255, 152, 0, 0.7);
        }

        .page-header {
            position: relative;
            height: 350px;
            overflow: hidden;
            border-bottom: 3px solid #000;
        }

        .header-slider {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            animation: slideAnimation 20s infinite;
            opacity: 0;
        }

        /* किती images आहेत त्यानुसार delay */
        .slide:nth-child(1) {
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            animation-delay: 5s;
        }

        .slide:nth-child(3) {
            animation-delay: 10s;
        }

        .slide:nth-child(4) {
            animation-delay: 15s;
        }

        @keyframes slideAnimation {
            0% {
                opacity: 0
            }

            10% {
                opacity: 1
            }

            30% {
                opacity: 1
            }

            40% {
                opacity: 0
            }

            100% {
                opacity: 0
            }
        }

        /* Text content styling */
        .header-content {
            position: relative;
            z-index: 5;
            text-align: center;
            color: white;
            padding-top: 100px;
            text-shadow: 2px 2px 8px black;
            background: linear-gradient(rgba(0, 0, 0, .4), rgba(16, 1, 1, 0.51));
            height: 100%;
        }

        /* ================= Navbar ================= */
        .navbar {
            background: linear-gradient(45deg, #ff5722, #4caf50, #2196f3, #9c27b0) !important;
            background-size: 300% 300%;
            animation: gradientFlow 10s infinite alternate;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .45);
        }

        @keyframes gradientFlow {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }

        .navbar-brand {
            font-size: 26px;
            font-weight: 900;
            color: white !important;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, .6);
        }

        .nav-link {
            color: white !important;
            font-weight: 700;
            padding: 10px 15px !important;
            border-radius: 30px;
            transition: .4s;
        }

        .nav-link:hover,
        .nav-link.active-page {
            background: white !important;
            color: #000 !important;
            box-shadow: 0 0 15px rgba(255, 255, 255, .9);
            transform: translateY(-3px);
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

        .container h3 {
            font-weight: 900;
            letter-spacing: .5px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, .3);
        }

        /* ========== MAIN 3D SERVICE CARDS ========== */
        .info-box {
            background: linear-gradient(145deg, #ffffff, #f3f6ff);
            border-radius: 22px;
            padding: 25px;
            border: 4px solid transparent;
            transition: .5s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, .45);
        }

        /* moving govt multicolor border */
        .info-box::before {
            content: '';
            position: absolute;
            inset: -3px;
            z-index: -1;
            border-radius: 22px;
            background: linear-gradient(45deg,
                    #ff5722,
                    #ffc107,
                    #4caf50,
                    #2196f3,
                    #9c27b0);
            background-size: 300% 300%;
            animation: borderFlow 4s linear infinite;
        }

        @keyframes borderFlow {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }

        /* hover effect */
        .info-box:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 40px 80px rgba(0, 0, 0, .7);
        }

        /* icon */
        .info-box i {
            color: #1e7e34;
            text-shadow: 2px 2px 12px rgba(0, 0, 0, .5);
        }

        /* title style */
        .info-box h5 {
            font-weight: 900;
            color: #0b3d02;
        }

        /* description */
        .info-box p {
            color: #222;
            font-weight: 600;
        }

        /* ========== BUTTON ========== */
        .btn-custom {
            background: linear-gradient(45deg, #ff5722, #ffc107, #4caf50, #2196f3);
            color: #000 !important;
            border: none;
            padding: 10px 22px;
            border-radius: 50px;
            font-weight: 900;
            transition: .4s;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
        }

        .btn-custom:hover {
            transform: scale(1.08) translateY(-3px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .7);
            background: linear-gradient(45deg, #2196f3, #4caf50, #ffc107, #ff5722);
        }

        /* ========== RESPONSIVE ========== */
        @media(max-width:768px) {
            .info-box {
                padding: 18px;
            }
        }

        /* ================= CERTIFICATE CONTAINER ================= */
        .certificate-box {
            background: linear-gradient(145deg, #ffffff, #eef3ff);
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, .55);
            border: 4px solid transparent;
            position: relative;
            overflow: hidden;
        }

        /* animated multicolor border */
        .certificate-box::before {
            content: "";
            position: absolute;
            inset: -4px;
            z-index: -1;
            border-radius: 24px;
            background: linear-gradient(45deg,
                    #ff5722,
                    #ffc107,
                    #4caf50,
                    #2196f3,
                    #9c27b0);
            background-size: 300% 300%;
            animation: borderMove 6s linear infinite;
        }

        @keyframes borderMove {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }

        /* titles */
        .certificate-box h2 {
            font-weight: 900;
            color: #0b3d02;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, .3);
        }

        .certificate-box h4 {
            color: #1e7e34;
            font-weight: 800;
        }

        /* ================= SELECT DROPDOWN ================= */
        .certificate-box select {
            border-radius: 14px;
            padding: 14px 16px;
            font-weight: 700;
            border: 2px solid #cfd8dc;
            background: linear-gradient(145deg, #ffffff, #f3f6ff);
            box-shadow:
                inset 2px 2px 6px rgba(255, 255, 255, .8),
                inset -2px -2px 6px rgba(0, 0, 0, .08),
                0 12px 25px rgba(0, 0, 0, .35);
            transition: .35s;
            cursor: pointer;
        }

        /* hover effect */
        .certificate-box select:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 35px rgba(0, 0, 0, .5);
            border-color: #4caf50;
        }

        /* focus (download trigger feel) */
        .certificate-box select:focus {
            outline: none;
            border-color: #2196f3;
            box-shadow:
                0 0 0 4px rgba(33, 150, 243, .25),
                0 20px 40px rgba(0, 0, 0, .6);
        }

        /* option styling */
        .certificate-box option {
            font-weight: 700;
        }

        /* ================= MOBILE RESPONSIVE ================= */
        @media(max-width:768px) {
            .certificate-box {
                padding: 20px;
            }

            .certificate-box h2 {
                font-size: 20px;
            }

            .certificate-box h4 {
                font-size: 16px;
            }

            .certificate-box select {
                font-size: 15px;
                padding: 12px;
            }
        }

        /* --- button css seva button */

        .btn.btn-custom {
            position: relative;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Glow + Lift Effect */
        .btn.btn-custom:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 30px rgba(118, 75, 162, 0.5);
        }

        /* Animated Shine Effect */
        .btn.btn-custom::before {
            content: "";
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transform: skewX(-25deg);
            transition: 0.5s;
        }

        .btn.btn-custom:hover::before {
            left: 130%;
        }

        /* Smooth Click Effect */
        .btn.btn-custom:active {
            transform: scale(0.95);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>

    <!-- Banner -->
    <section class="page-header">
        <div class="header-slider">
            <div class="slide" style="background-image:url('images/gallery/1.jpeg')"></div>
            <div class="slide" style="background-image:url('images/gallery/2.jpeg')"></div>
            <div class="slide" style="background-image:url('images/gallery/1.jpeg')"></div>
            <div class="slide" style="background-image:url('images/gallery/4.jpeg')"></div>
        </div>

        <div class="header-content">
            <h1>ग्रामपंचायत</h1>
            <p>गावाचा विकास • नागरिकांची सेवा • पारदर्शक प्रशासन</p>
        </div>
    </section>
    <div class="container my-5">

        <h3 class="text-success text-center mb-4">ग्रामपंचायतीच्या प्रमुख सेवा</h3>

        <div class="row g-4 text-center">

            <!-- Certificates -->
            <div class="col-md-4">
                <div class="info-box">
                    <i class="fa fa-file fa-3x text-success mb-3"></i>
                    <h5>प्रमाणपत्र सेवा</h5>
                    <p>जन्म, मृत्यू, रहिवासी, जात, उत्पन्न प्रमाणपत्रे उपलब्ध.</p>
                    <a href="services-certificates.php" class="btn btn-custom">View Details</a>
                </div>
            </div>

            <!-- Schemes -->
            <div class="col-md-4">
                <div class="info-box">
                    <i class="fa fa-hand-holding-heart fa-3x text-success mb-3"></i>
                    <h5>सरकारी योजना</h5>
                    <p>केंद्र व राज्य सरकारच्या योजना – पात्रता व अर्ज सुविधा.</p>
                    <a href="services-schemes.php" class="btn btn-custom">View Details</a>
                </div>
            </div>

            <!-- Citizen -->
            <div class="col-md-4">
                <div class="info-box">
                    <i class="fa fa-people-group fa-3x text-success mb-3"></i>
                    <h5>नागरिक सेवा व तक्रार निवारण</h5>
                    <p>नागरिकांच्या तक्रारी आणि तात्काळ मदत.</p>
                    <a href="services-citizen.php" class="btn btn-custom">View Details</a>
                </div>
            </div>

        </div> <br><br>
        <!-- ================= CERTIFICATE UI ================= -->
        <div class="certificate-box">
            <h2 class="text-center fw-bold mb-3">📄 ग्रामपंचायत ऑनलाइन प्रमाणपत्र</h2>

            <!-- Self Declarations -->
            <h4 class="fw-bold mt-4">📑 स्वयंघोषणापत्र</h4>
            <select class="form-control mt-2" onchange="downloadPDF(this.value)">
                <option selected disabled>स्वयंघोषणापत्र निवडा</option>
                <option value="pdfs/1 शौचालय असल्याबाबत स्वयंघोषणापत्र.pdf">शौचालय असल्याबाबत स्वयंघोषणापत्र</option>
                <option value="pdfs/2 रहिवाशी स्वयंघोषणापत्र.pdf">रहिवाशी स्वयंघोषणापत्र</option>
                <option value="pdfs/3 वीज जोडणी स्वयंघोषणापत्र.pdf">वीज जोडणी स्वयंघोषणापत्र</option>
                <option value="pdfs/4 हयात असल्याबाबत स्वयंघोषणापत्र.pdf">हयात असल्याबाबत स्वयंघोषणापत्र</option>
                <option value="pdfs/5 विधवा असल्याबाबत स्वयंघोषणापत्र.pdf">विधवा असल्याबाबत स्वयंघोषणापत्र</option>
                <option value="pdfs/6 परित्यक्त्या असल्याबाबत स्वयंघोषणापत्र.pdf">परित्यक्त्या असल्याबाबत स्वयंघोषणापत्र</option>
                <option value="pdfs/7 विभक्त कुटुंब असल्यास स्वयंघोषणापत्र.pdf">विभक्त कुटुंब असल्यास स्वयंघोषणापत्र</option>
            </select>

            <!-- Other Applications -->
            <h4 class="fw-bold mt-4">📝 विविध अर्ज</h4>
            <select class="form-control mt-2" onchange="downloadPDF(this.value)">
                <option selected disabled>अर्ज प्रकार निवडा</option>
                <option value="pdfs/1 मंजूर नोंदणी अर्ज.pdf">मंजूर नोंदणी अर्ज</option>
                <option value="pdfs/3 अर्ज नमुना.pdf">अर्ज नमुना</option>
                <option value="pdfs/4 अर्जा सोबत जोडवायची कागदपत्रांची यादी.pdf">अर्जा सोबत जोडवायची कागदपत्रांची यादी</option>
                <option value="pdfs/5 बांधकाम परवानगी.pdf">बांधकाम परवानगी</option>
                <option value="pdfs/online_certificate_application.pdf">ऑनलाइन दाखले मिळविण्यासाठी अर्ज</option>
            </select>

            <!-- Construction -->
            <h4 class="fw-bold mt-4">🏗️ ग्रामपंचायत मार्फत दिले जाणारे महसूल विभागाचे दाखले</h4>
            <select class="form-control mt-2" onchange="downloadPDF(this.value)">
                <option selected disabled>पर्याय निवडा</option>
                <option value="pdfs/revenue_certificate.pdf">महसूल विभागाचे दाखले</option>
                <option value="pdfs/जातीचा दाखला अर्ज.pdf">जातीचा दाखला अर्ज</option>
                <option value="pdfs/अल्पभूधारक फॉर्म.pdf">अल्पभूधारक फॉर्म</option>
            </select>

            <!-- Main Certificates -->
            <h4 class="fw-bold mt-3">📌 मुख्य प्रमाणपत्र</h4>
            <select class="form-control mt-2" onchange="downloadPDF(this.value)">
                <option selected disabled>प्रमाणपत्र प्रकार निवडा</option>
                <option value="pdfs/residence_certificate.pdf">निवासी दाखला</option>
                <option value="pdfs/income_certificate.pdf">उत्पन्न प्रमाणपत्र</option>
                <option value="pdfs/caste_certificate.pdf">जातीचे प्रमाणपत्र</option>
                <option value="pdfs/warasa_certificate.pdf">वारसा दाखला</option>
                <option value="pdfs/other_application.pdf">इतर अर्ज</option>
            </select>
        </div>

        <!-- Extra Section -->
        <h3 class="text-success text-center mt-5">ग्रामपंचायत कार्यप्रणाली</h3>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="info-box">
                    <h5>📌 पारदर्शक प्रशासन</h5>
                    <p>ग्रामसभेद्वारे निर्णय, ऑनलाइन माहिती, नागरिक सहभाग.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="info-box">
                    <h5>📌 गाव विकास प्रकल्प</h5>
                    <p>रस्ते, पाणी, स्वच्छता, शिक्षण व आरोग्य सुविधा सुधार.</p>
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

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function downloadPDF(fileUrl) {
            if (!fileUrl) return;
            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileUrl.split('/').pop(); // Use the file name
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>


</body>

</html>