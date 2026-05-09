<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>आमच्या गावाबद्दल – मोजपुरी</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/lang.js"></script>

    <style>
        body {
            background: #f1f5f9;
        }

        .section-title {
            text-align: center;
            margin: 50px 0 20px;
            font-size: 32px;
            font-weight: 700;
            color: #1b5e20
        }

        .page-header {
            background: url('images/hero/slide2.jpg');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            text-align: center;
            color: white;
            position: relative;
        }

        .page-header::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .6);
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

        /* Info Cards */
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

        .highlight-box {
            background: #14734a;
            color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, .3)
        }

        /* Stats */
        .stat-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .2)
        }

        .stat-box h1 {
            color: #14734a
        }

        /* Timeline */
        .timeline {
            border-left: 4px solid #14734a;
            padding-left: 25px
        }

        .timeline div {
            margin-bottom: 20px
        }

        .timeline span {
            font-weight: bold;
            color: #14734a
        }

        /* Development */
        .dev-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .2)
        }

        .dev-card:hover {
            transform: scale(1.02)
        }

        /* Testimonials */
        .review {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, .2);
            font-style: italic
        }

        /* FAQ */
        .faq-box {
            background: white;
            padding: 20px;
            border-radius: 12px
        }

        /* CTA */
        .cta {
            background: #14734a;
            color: white;
            text-align: center;
            padding: 40px;
            border-radius: 12px
        }

        /* Footer */
        footer {
            background: #14734a;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 50px
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

        /* ================= DARK MODE GOLD THEME ================= */

        body {
            background: #f3f6fc;
            font-family: 'Poppins', sans-serif;
            transition: 0.4s;
        }

        .dark {
            background: #0f172a !important;
            color: white !important;
        }

        .gold-box {
            border-radius: 18px;
            padding: 20px;
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border: 2px solid gold;
            box-shadow: 0 0 25px rgba(255, 215, 0, .5);
        }

        .gold-title {
            color: gold;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .dark-mode-btn {
            position: fixed;
            right: 20px;
            top: 20px;
            padding: 10px 20px;
            border-radius: 50px;
            background: black;
            color: gold;
            font-weight: 800;
            border: 2px solid gold;
            z-index: 999;
        }

        /* ================= DIGITAL NOTICE BOARD ================= */

        .notice-board {
            background: #000;
            color: #00ffea;
            border-radius: 12px;
            padding: 15px;
            font-size: 18px;
            box-shadow: 0 0 25px rgba(0, 255, 255, .6);
        }

        .notice-title {
            font-size: 22px;
            color: #ffea00;
            text-align: center;
            font-weight: 900;
            text-shadow: 0px 0px 10px yellow;
        }

        /* Scrolling Text Effect */
        .notice-scroll {
            white-space: nowrap;
            overflow: hidden;
            display: block;
        }

        .notice-scroll span {
            display: inline-block;
            padding-left: 100%;
            animation: scroll 12s linear infinite;
        }

        @keyframes scroll {
            from {
                transform: translate(0, 0)
            }

            to {
                transform: translate(-100%, 0)
            }
        }

        .weather-box {
            background: #002b5c;
            color: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .4);
            border: 2px solid gold;
        }

        .weather-box h2 {
            font-weight: 800;
            color: #ffd700;
        }

        .voiceBtn {
            background: gold;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 700;
        }

        /* ================= CERTIFICATE UI ================= */

        .certificate-box {
            border-radius: 15px;
            padding: 25px;
            background: white;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .2);
        }

        .cert-btn {
            background: #14734a;
            padding: 10px 20px;
            color: white;
            font-weight: 700;
            border-radius: 10px;
            border: none;
        }

        .weather-box {
            background: #0a1747;
            color: white;
            border-radius: 20px;
            padding: 25px;
            border: 3px solid gold;
            box-shadow: 0 0 25px rgba(255, 215, 0, .6);
        }

        .gov-title {
            font-size: 28px;
            font-weight: bold;
            color: gold;
        }

        .weather-card {
            background: #08122e;
            border-radius: 15px;
            padding: 20px;
            border: 2px solid rgba(255, 255, 255, .2);
        }

        .value {
            font-size: 35px;
            font-weight: bold;
            color: #00ffea;
        }

        .gold-line {
            height: 3px;
            background: linear-gradient(90deg, gold, white, gold);
            border-radius: 10px;
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

        <!-- ================= DIGITAL NOTICE BOARD ================= -->
        <div class="gold-box mb-4">
            <h2 class="gold-title text-center">📢 डिजिटल नोटीस बोर्ड</h2>

            <div class="notice-board">
                <p class="notice-title">🔔 सरकारी सूचना</p>
                <p class="notice-scroll"><span>
                        माळ सावरगाव ग्रामपंचायत — नवीन विकास योजना सुरू • पाणी वेळापत्रक अपडेट • आरोग्य शिबीर लवकरच • डिजिटल सेवा उपलब्ध •
                    </span></p>
            </div>
        </div>


        <!-- ========= WEATHER CARD ========= -->
        <div class="weather-box text-center mb-4">
            <h2>🌧️ आजचे हवामान (जालना)</h2>
            <h3 id="location">📍 Jalna, India</h3>
            <div id="weatherText">Loading Weather...</div>
            <p id="moreInfo"></p>

            <button onclick="speakWeather()" class="voiceBtn">
                🎤 हवामान ऐका
            </button>
        </div>





        <div class="container my-5">

            <!-- ABOUT -->
            <h2 class="section-title">✨ आमच्या गावाची ओळख</h2>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="info-box">
                        <p><strong>माळ सावरगाव</strong> हे महाराष्ट्रातील एक सुंदर, शांत आणि संस्कृतीने समृद्ध गाव असून येथे
                            <strong>३,५००+</strong> लोक राहतात. शिक्षण, आरोग्य, ग्रामपंचायत सेवा आणि स्वच्छता या सर्व सुविधांसह गाव
                            सतत प्रगतीच्या मार्गावर आहे.
                        </p>

                        <p>येथील गावकरी सहकार्यशील, संस्कारी आणि प्रगतीशील आहेत. प्रत्येक वर्षी विविध
                            <strong>सांस्कृतिक कार्यक्रम, सण-उत्सव, शैक्षणिक उपक्रम</strong> आणि विकास प्रकल्प राबवले जातात.
                        </p>

                        <h5 class="text-success">मुख्य वैशिष्ट्ये:</h5>
                        <ul>
                            <li>स्वच्छ आणि हिरवेगार गाव</li>
                            <li>प्रभावी ग्रामपंचायत प्रशासन</li>
                            <li>सुसज्ज शिक्षण व आरोग्य सुविधा</li>
                            <li>एकसंघ आणि संस्कारी समाज</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="highlight-box text-center">
                        <h4>गावाची झलक</h4>
                        <hr>
                        <p><strong>लोकसंख्या:</strong> 3500+</p>
                        <p><strong>शाळा:</strong> 6+</p>
                        <p><strong>आरोग्य केंद्र:</strong> 3+</p>
                        <p><strong>एकता:</strong> 100%</p>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <h2 class="section-title">📊 आमची प्रगती</h2>
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="stat-box">
                        <h1>95%</h1>
                        <p>साक्षरता</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h1>50+</h1>
                        <p>सामाजिक उपक्रम</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h1>100%</h1>
                        <p>एकता</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h1>24/7</h1>
                        <p>सेवा</p>
                    </div>
                </div>
            </div>

            <!-- Mission Vision -->
            <h2 class="section-title">🚀 ध्येय व उद्दिष्टे</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="info-box">
                        <h4>🎯 ध्येय</h4>प्रत्येक नागरिकाला समान विकास संधी
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <h4>👁️ दृष्टी</h4>स्वच्छ, स्मार्ट आणि आत्मनिर्भर गाव
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <h4>🤝 मूल्ये</h4>एकता • सहकार्य • जबाबदारी
                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <h2 class="section-title">📅 विकास प्रवास</h2>
            <div class="timeline">
                <div><span>2015</span> – रस्ते व पाणी सुविधा सुधारणा</div>
                <div><span>2018</span> – शिक्षण सुविधा मजबूत</div>
                <div><span>2021</span> – आरोग्य केंद्र सुधारणा</div>
                <div><span>2024</span> – डिजिटल गाव उपक्रम सुरू</div>
            </div>

            <!-- Development -->
            <h2 class="section-title">🏗️ चालू विकास प्रकल्प</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="dev-card">
                        <h5>Smart Digital Village</h5>ऑनलाइन सेवा व नागरिक सुविधा
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dev-card">
                        <h5>Green Village Mission</h5>झाडे लावा – गाव वाचवा
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dev-card">
                        <h5>Health & Education</h5>आरोग्य कॅम्प व शिक्षण सहाय्यता
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <h2 class="section-title">💬 ग्रामस्थांचे मत</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="review">"गावाचा विकास अभिमानास्पद आहे!"</div>
                </div>
                <div class="col-md-4">
                    <div class="review">"येथील लोक खूप प्रेमळ आहेत."</div>
                </div>
                <div class="col-md-4">
                    <div class="review">"हे खरंच आदर्श गाव आहे."</div>
                </div>
            </div>

            <!-- FAQ -->
            <h2 class="section-title">❓ वारंवार विचारले जाणारे प्रश्न</h2>
            <div class="faq-box">
                <p><strong>Q:</strong> ग्रामपंचायत सेवा कुठे मिळेल?<br>
                    <strong>A:</strong> ग्रामपंचायत कार्यालय व अधिकृत पोर्टलवर.
                </p>
            </div>

            <!-- CTA -->
            <div class="cta mt-5">
                <h2>आपणही आमच्या प्रवासाचा भाग व्हा!</h2>
                <p>गाव विकासात योगदान द्या.</p>
                <a href="contact.php" class="btn btn-warning px-4">संपर्क करा</a>
            </div>

        </div>

        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                changeLang('mr');
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            let weatherMessage = "";

            // ===== JALNA LIVE WEATHER (NO API KEY NEEDED) =====
            function getJalnaWeather() {
                const url =
                    "https://api.open-meteo.com/v1/forecast?latitude=19.8410&longitude=75.8866&current_weather=true";

                fetch(url)
                    .then(res => res.json())
                    .then(data => {

                        let temp = data.current_weather.temperature;
                        let wind = data.current_weather.windspeed;
                        let cond = data.current_weather.weathercode;

                        let conditionText = "स्वच्छ आकाश";

                        if (cond >= 45) conditionText = "पाऊस";
                        else if (cond >= 30) conditionText = "ढगाळ";
                        else if (cond >= 20) conditionText = "हलका पाऊस";

                        document.getElementById("weatherText").innerHTML =
                            `🌡️ तापमान : ${temp}°C`;

                        document.getElementById("moreInfo").innerHTML =
                            `🌬 वारा : ${wind} km/h<br>
         ☁ हवामान : ${conditionText}`;

                        weatherMessage =
                            `जालना हवामान अपडेट.
         सध्या तापमान आहे ${temp} डिग्री सेल्सिअस.
         हवामान ${conditionText}.
         वाऱ्याचा वेग ${wind} किलोमीटर प्रतितास आहे.`;
                    })
                    .catch(() => {
                        document.getElementById("weatherText").innerHTML =
                            "⚠️ हवामान उपलब्ध नाही";
                    });
            }

            // Auto Load
            getJalnaWeather();


            // ========= VOICE =========
            function speakWeather() {
                if (weatherMessage === "") return;

                let speech = new SpeechSynthesisUtterance(weatherMessage);
                speech.lang = "mr-IN";
                speech.rate = 1;
                speech.pitch = 1;
                speechSynthesis.speak(speech);
            }
        </script>






</body>

</html>