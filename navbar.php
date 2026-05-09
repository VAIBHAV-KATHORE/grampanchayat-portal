<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>मोजपुरी</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
    /* Navbar */
    .navbar .nav-link.active-page {
        color: #ffffff !important;
        background: #ff9800 !important;
        border-radius: 25px;
        padding: 6px 18px;
        font-weight: bold;
        box-shadow: 0 0 10px rgba(255, 152, 0, 0.7);
    }

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

    /* ================= Button ================= */
    button {
        background: linear-gradient(to right, #ff5722, #ff9800, #4caf50, #2196f3);
        color: white;
        font-weight: 900;
        border-radius: 35px;
        padding: 14px;
        border: none;
        letter-spacing: .5px;
        transition: .4s;
        box-shadow: 0 12px 28px rgba(0, 0, 0, .45);
    }

    button:hover {
        transform: translateY(-4px) scale(1.05);
        border: 2px solid gold;
        box-shadow: 0 22px 50px rgba(255, 138, 138, 0.7);
    }

    .btn.btn-outline-light {
        position: relative;
        padding: 12px 28px;
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.6);
        background: transparent;
        border-radius: 50px;
        font-weight: bold;
        backdrop-filter: blur(8px);
        transition: all 0.4s ease;
        overflow: hidden;
    }

    /* Hover Glow Fill Effect */
    .btn.btn-outline-light:hover {
        color: #000;
        background: linear-gradient(135deg, #ffffff, #dfe9f3);
        border-color: #fff;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.6),
            0 0 40px rgba(255, 255, 255, 0.4);
        transform: translateY(-3px);
    }

    /* Animated Border Light */
    .btn.btn-outline-light::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 50px;
        padding: 2px;
        background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.8), transparent);
        -webkit-mask:
            linear-gradient(#000 0 0) content-box,
            linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: 0.4s;
    }

    .btn.btn-outline-light:hover::before {
        opacity: 1;
        animation: borderMove 1.5s linear infinite;
    }

    /* Border Animation */
    @keyframes borderMove {
        0% {
            background-position: 0%
        }

        100% {
            background-position: 200%
        }
    }

    /* Click Effect */
    .btn.btn-outline-light:active {
        transform: scale(0.95);
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#14734a; position:sticky; top:0; z-index:999;">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="index.php">मोजपुरी <h6>ता.जि.जालना</h6></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="index.php">मुख्यपृष्ठ</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="about.php">आमच्या गावाबद्दल</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="panchayat.php">ग्रामपंचायत</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="services.php">सेवा</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="gallery.php">गॅलरी</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="contact.php">संपर्क</a></li>
                    <!-- Admin Button -->
                    <li class="nav-item ms-3">
                        <a class="btn btn-outline-light fw-bold rounded-pill" href="admin/login.php">
                            <i class="fa fa-user-shield"></i> Admin
                        </a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="btn btn-outline-light fw-bold rounded-pill" href="payment/index.php">
                            <i class="fa fa-user-shield"></i> कर भरणा
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html