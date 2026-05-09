<style>
    ::after

    /* ==========================
   GLOBAL
========================== */
    body {
        margin: 0;
        font-family: 'Poppins', Arial;
        background: #f1f5f9;
    }

    /* ==========================
   HEADER 3D PARALLAX + GLOW
========================== */
    .gov-header {
        background: linear-gradient(135deg, #003c1f, #006b3c);
        color: white;
        text-align: center;
        padding: 40px 20px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    .gov-header::before {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        background: #00ff99;
        filter: blur(130px);
        border-radius: 50%;
        left: -100px;
        top: -50px;
    }

    .gov-header::after {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        background: #00ffd9;
        filter: blur(130px);
        border-radius: 50%;
        right: -100px;
        bottom: -50px;
    }

    .gov-header h1 {
        font-size: 42px;
        font-weight: 900;
        text-shadow: 0 0 20px rgba(255, 255, 255, 0.6);
    }

    .gov-header h3 {
        font-size: 22px;
    }

    .parallax-move {
        transform: translateY(var(--moveY)) translateX(var(--moveX));
        transition: 0.3s;
    }

    /* ==========================
   VIDEO BANNER
========================== */
    .banner-box {
        position: relative;
        height: 40px;
        overflow: hidden;
        border-radius: 10px;
        margin-top: 20px;
    }

    .banner-box video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(75%);
    }

    .banner-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
        font-size: 32px;
        font-weight: 900;
        text-shadow: 0 0 25px black;
    }

    /* ==========================
   AUTO BACKGROUND SLIDE
========================== */
    .auto-slide {
        animation: slidebg 12s infinite alternate;
        padding: 60px 0;
    }

    @keyframes slidebg {
        0% {
            background: url('images/bg1.jpg') center/cover fixed;
        }

        50% {
            background: url('images/bg2.jpg') center/cover fixed;
        }

        100% {
            background: url('images/bg3.jpg') center/cover fixed;
        }
    }

    /* ==========================
   ABOUT SECTION
========================== */
    .section-title {
        text-align: center;
        font-size: 34px;
        color: #0a4a28;
        font-weight: 900;
    }

    .gov-card {
        background: white;
        padding: 25px;
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        transition: 0.4s;
        border-top: 6px solid #1fa64a;
    }

    .gov-card:hover {
        transform: scale(1.05);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45);
    }

    .gov-icon {
        font-size: 55px;
        color: #1fa64a;
        text-shadow: 0 0 20px rgba(0, 255, 140, 0.8);
    }

    /* Responsive */
    @media(max-width:768px) {
        .gov-header h1 {
            font-size: 28px;
        }

        .banner-content {
            font-size: 22px;
        }
    }

    /* ==========================
   HEADER GOV PREMIUM
========================== */
    .gov-header {
        background: linear-gradient(135deg, #0c4d28, #0f8a45);
        color: white;
        text-align: center;
        padding: 35px 10px 60px 10px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
    }

    .gov-header::before {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        background: #00ff99;
        filter: blur(160px);
        border-radius: 50%;
        left: -120px;
        top: -80px;
    }

    .gov-header::after {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        background: #00ddff;
        filter: blur(160px);
        border-radius: 50%;
        right: -120px;
        bottom: -80px;
    }

    .top-title h1 {
        font-size: 36px;
        font-weight: 900;
        text-shadow: 0 0 25px rgba(255, 255, 255, 0.8);
    }

    .top-title h3 {
        font-size: 20px;
        margin-top: 8px;
    }



    /* ==========================
   GOV 3D OFFICIAL LEADER CARDS
========================== */
    .gov-leaders {
        margin-top: 35px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }

    .leader-card {
        width: 170px;
        padding: 12px;
        background: white;
        color: black;
        border-radius: 18px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.4);
        transition: 0.4s;
        border-top: 6px solid #1ecf6e;
    }

    .leader-card:hover {
        transform: translateY(-12px) scale(1.05);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    }

    .leader-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #0b6a3b;
        box-shadow: 0 0 25px rgba(0, 255, 170, 0.8);
    }

    .leader-card h4 {
        color: #08692e;
        font-weight: 900;
        margin-top: 8px;
    }

    .leader-card p {
        font-size: 14px;
        font-weight: 700;
    }


    /* ==========================
   PARALLAX FLOAT
========================== */
    .parallax-move {
        transform: translateY(var(--moveY)) translateX(var(--moveX));
        transition: 0.3s;
    }

    /* Responsive */
    @media(max-width:768px) {
        .top-title h1 {
            font-size: 24px;
        }

        .gov-leaders {
            gap: 15px;
        }
    }
</style>
<header class="gov-header parallax-move">

    <div class="top-title">
        <h1> भारत सरकार | महाराष्ट्र शासन</h1>
        <h3>🌿 ग्रामपंचायत पोर्टल - मोजपुरी ता.जि.जालना</h3>
    </div>

    <!-- Government Officials Row -->
    <div class="gov-leaders">

        <!-- President -->
        <div class="leader-card">
            <img src="images/gov/president.jpg">
            <h4>राष्ट्रपती</h4>
            <p>माननीय द्रौपदी मुर्मू</p>
        </div>

        <!-- Prime Minister -->
        <div class="leader-card">
            <img src="images/gov/pm.jpg">
            <h4>प्रधानमंत्री</h4>
            <p>माननीय नरेंद्र मोदी</p>
        </div>

        <!-- Chief Minister -->
        <div class="leader-card">
            <img src="images/gov/cm.jpg">
            <h4>मुख्यमंत्री</h4>
            <p>माननीय देवेंद्र फडणवीस</p>
        </div>

        <!-- Deputy CM -->
        <div class="leader-card">
            <img src="images/gov/deputycm.jpg">
            <h4>उपमुख्यमंत्री</h4>
            <p>माननीय एकनाथ शिंदे</p>
        </div>
        <!-- Deputy CM -->
        <div class="leader-card">
            <img src="images/gov/deputycm2.jpg">
            <h4>उपमुख्यमंत्री</h4>
            <p>माननीय अजित पवार</p>
        </div>

    </div>
    <script>
        document.addEventListener("mousemove", function(e) {
            let x = (window.innerWidth / 2 - e.pageX) / 25;
            let y = (window.innerHeight / 2 - e.pageY) / 25;
            document.querySelector(".parallax-move").style.setProperty("--moveX", x + "px");
            document.querySelector(".parallax-move").style.setProperty("--moveY", y + "px");
        });
    </script>

</header>