<?php
include("db.php"); // DB connection
$images = mysqli_query($conn, "SELECT * FROM gallery_images ORDER BY uploaded_at DESC");
?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>मोजपुरी – गॅलरी</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* same styles as before */
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }

        header {
            background: #164a41;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #14734a;
            padding: 10px;
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

        .section-title {
            text-align: center;
            margin: 50px 0 30px;
            font-size: 32px;
            font-weight: 700;
            color: #1b5e20;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }

        .gallery-card {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .gallery-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-card:hover img {
            transform: scale(1.1);
        }

        .gallery-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            text-align: center;
            font-weight: 600;
        }

        footer {
            background: #14734a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        /* ================= Header ================= */
        .gov-header {
            background: #164a41;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .gov-banner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .gov-banner .emblem {
            width: 80px;
            height: 80px;
        }

        .gov-title h1 {
            font-size: 28px;
            margin: 0;
            font-weight: 700;
        }

        .gov-title p {
            margin: 2px 0 0;
            font-size: 16px;
        }

        /* Leaders (CM, DCM) */
        .gov-leaders .leader img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .gov-leaders .leader img:hover {
            transform: scale(1.1);
        }

        .gov-leaders .leader p {
            margin-top: 5px;
            font-weight: 600;
        }

        /* ================= Navbar ================= */
        .gov-navbar {
            background: #14734a;
            position: sticky;
            top: 0;
            z-index: 999;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .gov-navbar .navbar-brand {
            font-size: 22px;
            color: white;
        }

        .gov-navbar .nav-link {
            color: white;
            margin: 0 10px;
            font-weight: 600;
            transition: color 0.3s, transform 0.3s;
        }

        .gov-navbar .nav-link:hover {
            color: #ffd700;
            /* Golden hover for official feel */
            transform: scale(1.05);
        }

        .gov-navbar .btn-outline-light {
            border-color: #fff;
            color: #fff;
            padding: 5px 15px;
        }

        .gov-navbar .btn-outline-light:hover {
            background: #fff;
            color: #14734a;
            transform: scale(1.05);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .gov-banner {
                flex-direction: column;
            }

            .gov-leaders .leader img {
                width: 80px;
                height: 80px;
            }

            .gov-title h1 {
                font-size: 24px;
            }
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
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>


    <div class="container mt-5">
        <h2 class="section-title">गॅलरी</h2>
        <div class="gallery-container">
            <?php while ($row = mysqli_fetch_assoc($images)): ?>
                <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="<?php echo $row['id'] - 1; ?>">
                    <img src="uploads/gallery/<?php echo $row['image']; ?>" alt="<?php echo $row['caption']; ?>">
                    <div class="gallery-caption"><?php echo $row['caption']; ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Modal + Carousel -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $images2 = mysqli_query($conn, "SELECT * FROM gallery_images ORDER BY uploaded_at DESC");
                            $active = 'active';
                            while ($row = mysqli_fetch_assoc($images2)) {
                                echo '<div class="carousel-item ' . $active . '">
                            <img src="uploads/gallery/' . $row['image'] . '" class="d-block w-100 rounded" alt="' . $row['caption'] . '">
                          </div>';
                                $active = '';
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const galleryCards = document.querySelectorAll('.gallery-card');
        const carousel = document.getElementById('galleryCarousel');
        galleryCards.forEach((card, index) => {
            card.addEventListener('click', () => {
                const carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);
                carouselInstance.to(index);
            });
        });
    </script>
    <script>
        let links = document.querySelectorAll(".nav-link");
        let current = location.pathname.split("/").pop();

        links.forEach(link => {
            if (link.getAttribute("href") === current) {
                link.classList.add("active-page");
            }
        });
    </script>
</body>

</html>