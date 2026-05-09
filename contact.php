<?php
if (isset($_GET['success'])) {
    echo "<script>alert('Message sent successfully!');</script>";
}
?>
<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>मोजपुरी – संपर्क करा</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* ================= Global Background ================= */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff5e6, #ffffff, #e8ffe8, #e7f1ff);
            background-size: 300% 300%;
            animation: bgMove 10s infinite alternate ease-in-out;
        }

        @keyframes bgMove {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }

        /* ================= Section Title ================= */
        .section-title {
            text-align: center;
            margin: 50px 0 30px;
            font-size: 38px;
            font-weight: 900;
            color: #0b3d2e;
            letter-spacing: 1px;
            text-shadow: 2px 3px 8px rgba(0, 0, 0, .3);
        }

        .section-title::after {
            content: "";
            width: 160px;
            height: 6px;
            background: linear-gradient(to right, #ff5722, #ffeb3b, #4caf50, #2196f3);
            display: block;
            margin: 12px auto;
            border-radius: 10px;
        }

        /* ================= Contact Card ================= */
        .contact-card {
            background: linear-gradient(160deg, #ffffff, #f6f8ff);
            padding: 35px;
            border-radius: 22px;
            max-width: 800px;
            margin: 0 auto 60px;
            border: 3px solid transparent;
            box-shadow: 0 15px 45px rgba(0, 0, 0, .35);
            transition: .4s;
        }

        .contact-card:hover {
            transform: translateY(-6px) scale(1.03);
            border-image: linear-gradient(45deg, #ff5722, #ff9800, #4caf50, #2196f3, #9c27b0) 1;
            box-shadow: 0 28px 65px rgba(0, 0, 0, .7);
        }

        .contact-card h2 {
            margin-bottom: 25px;
            color: #0f5132;
            font-weight: 900;
        }

        /* ================= Form ================= */
        .form-control {
            border-radius: 10px;
            border: 2px solid #cfd8dc;
            transition: .3s;
        }

        .form-control:focus {
            border-color: #14734a;
            box-shadow: 0 0 12px rgba(20, 115, 74, .7);
        }



        /* ================= Info Cards ================= */
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            margin-bottom: 60px;
        }

        .info-card {
            background: linear-gradient(150deg, #ffffff, #f3f2ff);
            width: 230px;
            padding: 25px;
            border-radius: 18px;
            border: 3px solid transparent;
            text-align: center;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .35);
            transition: .4s;
        }

        .info-card:hover {
            transform: translateY(-8px) scale(1.07);
            border-image: linear-gradient(45deg, #ff5722, #ff9800, #4caf50, #2196f3, #9c27b0) 1;
            box-shadow: 0 28px 65px rgba(0, 0, 0, .7);
        }

        .info-card i {
            font-size: 36px;
            color: #14734a;
            text-shadow: 2px 3px 10px rgba(0, 0, 0, .4);
            margin-bottom: 8px;
        }

        .info-card h5 {
            font-weight: 900;
        }

        /* ================= WhatsApp Button ================= */
        .whatsapp-btn {
            background: linear-gradient(45deg, #25D366, #1fa955);
            color: white;
            padding: 10px 22px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 800;
            letter-spacing: .5px;
            display: inline-block;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .4);
            transition: .4s;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1) translateY(-3px);
            text-decoration: none;
        }

        /* ================= Map ================= */
        #map {
            width: 100%;
            height: 420px;
            border-radius: 18px;
            border: 4px solid gold;
            box-shadow: 0 18px 50px rgba(0, 0, 0, .55);
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





        /* Make the navbar-toggler (hamburger) appear on right */
    </style>
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>



    <!-- Contact Section -->
    <div class="container mt-5">
        <h2 class="section-title">📩 संपर्क फॉर्म</h2>

        <div class="contact-card">
            <form action="contact_process.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">नाव</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="आपले नाव" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">ईमेल</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="आपला ईमेल" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">मोबाईल</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="आपला मोबाईल" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">संदेश</label>
                    <textarea class="form-control" id="message" name="message" placeholder="आपला संदेश येथे लिहा" rows="4" required></textarea>
                </div>

                <button type="submit">संदेश पाठवा</button>
            </form>
        </div>

        <!-- Contact Info Cards -->
        <div class="contact-info">
            <div class="info-card">
                <i class="fa fa-map-marker-alt"></i>
                <h5>पत्ता</h5>
                <p>माळ सावरगाव, <br> महाराष्ट्र, भारत</p>
            </div>
            <div class="info-card">
                <i class="fa fa-phone"></i>
                <h5>फोन</h5>
                <p>+91 88307 62587</p>
            </div>
            <div class="info-card">
                <i class="fa fa-envelope"></i>
                <h5>ईमेल</h5>
                <p>panchayat@malsawargaon.in</p>
            </div>
            <div class="info-card">
                <i class="fa-brands fa-whatsapp"></i>
                <h5>WhatsApp</h5>
                <a class="whatsapp-btn" href="https://wa.me/918830762587?text=Hello%20Gram%20Panchayat" target="_blank">
                    संदेश पाठवा
                </a>
            </div>
        </div>

        <!-- Google Map -->
        <div id="map"></div>

    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Maps -->
    <script>
        function initMap() {
            const village = {
                lat: 19.123456,
                lng: 76.987654
            }; // Replace with real coordinates
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: village,
            });
            const marker = new google.maps.Marker({
                position: village,
                map: map,
                title: "माळ सावरगाव",
            });
        }
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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_REAL_API_KEY&callback=initMap">
    </script>

</body>

</html>