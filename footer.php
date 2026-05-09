<style>
    /* ================= Developer Branding Section ================= */
    .dev-wrapper {
        margin-top: 18px;
        padding: 14px 18px;
        border-radius: 16px;
        display: inline-block;
        background: linear-gradient(140deg, rgba(255, 255, 255, .25), rgba(255, 255, 255, .05));
        border: 1px solid rgba(255, 255, 255, .6);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 45px rgba(0, 0, 0, .5);
        transition: .4s;
    }

    .dev-wrapper:hover {
        transform: translateY(-4px) scale(1.02);
    }

    /* Logo */
    .dev-logo {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 25px rgba(255, 255, 255, .6);
    }

    /* Powered Badge */
    .powered-badge {
        font-size: 14px;
        opacity: .95;
    }

    /* Company Name */
    .dev-watermark {
        font-size: 17px;
        font-weight: 900;
        letter-spacing: .8px;
        text-transform: uppercase;
    }

    /* Buttons */
    .dev-buttons {
        margin-top: 8px;
    }

    .call-btn,
    .site-btn {
        text-decoration: none;
        padding: 7px 14px;
        border-radius: 10px;
        display: inline-block;
        margin: 4px;
        border: 1px solid rgba(255, 255, 255, .7);
        background: rgba(255, 255, 255, .25);
        color: white;
        transition: .35s;
        font-weight: 700;
    }

    .call-btn:hover,
    .site-btn:hover {
        background: white;
        color: black;
        transform: scale(1.1);
    }

    /* ===== COMMON SETTINGS ===== */
    #govFooter {
        padding: 65px 10px;
        text-align: center;
        position: relative;
        color: white;
        box-shadow: 0 -35px 70px rgba(0, 0, 0, .9);
    }

    /* Theme Switch Buttons */
    .theme-buttons button {
        background: rgba(234, 72, 72, 0.9);
        border: 1px solid hsla(0, 91%, 47%, 0.61);
        padding: 7px 14px;
        border-radius: 12px;
        margin: 4px;
        cursor: pointer;
        transition: .35s;
        font-weight: 700;
    }

    .theme-buttons button:hover {
        background: white;
        color: red;
        transform: scale(1.08);
    }

    /* Footer Links */
    .footer-links a {
        text-decoration: none;
        margin: 0 6px;
        padding: 7px 16px;
        border-radius: 12px;
        display: inline-block;
        transition: .35s;
        font-weight: 700;
    }

    .copy {
        margin-top: 12px;
        opacity: .9;
        border-top: 1px solid rgba(255, 255, 255, .4);
        padding-top: 10px;
        font-weight: 700;
    }

    /* Emblem */
    #emblemLogo {
        width: 130px;
        margin-bottom: 12px;
        display: none;
        filter: drop-shadow(0 0 16px gold);
        animation: pulseGlow 2s infinite alternate;
    }

    @keyframes pulseGlow {
        from {
            filter: drop-shadow(0 0 6px gold);
        }

        to {
            filter: drop-shadow(0 0 18px gold);
        }
    }

    /* ================== THEME 1 : ROYAL GOLD ================== */
    .royal-footer {
        background: linear-gradient(160deg, #000, #111, #000);
        border-top: 4px solid gold;
        color: gold;
    }

    .royal-footer .footer-links a {
        color: gold;
        border: 1px solid gold;
    }

    .royal-footer .footer-links a:hover {
        background: gold;
        color: black;
        transform: scale(1.08);
    }

    /* ================== THEME 2 : MAHARASHTRA GREEN ================== */
    .mh-footer {
        background: linear-gradient(145deg, #044d2c, #0ea15b, #0c6b40);
    }

    .mh-footer .footer-links a {
        color: white;
        background: #ffffff25;
        border: 1px solid rgba(255, 255, 255, .6);
    }

    .mh-footer .footer-links a:hover {
        background: white;
        color: #0d7f4a;
        transform: scale(1.08);
    }

    /* ================== THEME 3 : EMBLEM THEME ================== */
    .emblem-footer {
        background: linear-gradient(150deg, #06132b, #0b1a33, #0e2449);
    }

    .emblem-footer .footer-links a {
        background: #ffffff1f;
        border: 1px solid rgba(255, 255, 255, .6);
        color: white;
    }

    .emblem-footer .footer-links a:hover {
        background: white;
        color: #0b1a33;
        transform: scale(1.08);
    }

    /* Mobile Responsive */
    @media(max-width:768px) {
        .footer-links a {
            display: block;
            margin: 6px auto;
            width: 85%;
        }

        .dev-wrapper {
            width: 92%;
        }

        #emblemLogo {
            width: 95px;
        }
    }

    .dev-credit {
        margin-top: 12px;
        padding: 8px 14px;
        border-radius: 12px;
        display: inline-block;
        font-size: 15px;
        background: rgba(255, 255, 255, .18);
        border: 1px solid rgba(255, 255, 255, .5);
        backdrop-filter: blur(4px);
    }
</style>
<!-- ================= THEME SWITCHABLE GOVERNMENT FOOTER ================= -->
<footer id="govFooter" class="royal-footer">

    <!-- Theme Switch Buttons -->
    <div class="theme-buttons">
        <button onclick="setTheme('royal-footer')">🟡 Royal Gold</button>
        <button onclick="setTheme('mh-footer')">🟢 Maharashtra</button>
        <button onclick="setTheme('emblem-footer')">🦁 Emblem Theme</button>
    </div>

    <div class="container text-center">

        <!-- National Emblem -->
        <img id="emblemLogo"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Emblem_of_India.svg/512px-Emblem_of_India.svg.png">

        <h3 id="footerTitle">Government Portal | सर्व हक्क राखीव मोजपुरी ग्रामपंचायत </h3>
        <p id="footerSubtitle">Official Digital Portal</p>

        <!-- Links -->
        <div class="footer-links">
            <a href="index.php">मुख्यपृष्ठ
            </a>
            <a href="about.php">आमच्या गावाबद्दल</a>
            <a href="panchayat.php">ग्रामपंचायत</a>
            <a href="services.php">सेवा</a>
            <a href="gallery.php">गॅलरी</a>
            <a href="contact.php">संपर्क</a>
            <a href="payment/index.php">कर भरणा</a>

        </div>

        <div class="copy">
            © <span id="footerYear"></span> Government Portal | सर्व हक्क राखीव मोजपुरी ग्रामपंचायत
        </div>


        <!-- ================= Developer Branding Area ================= -->
        <div class="dev-wrapper">

            <!-- Company Logo -->
            <img class="dev-logo" src="uploads/vaibhav2.jpg" alt="Developer Logo">

            <!-- Powered Badge -->
            <span class="powered-badge">⚙️ Directed By Vaibhav Kathore</span>

            <!-- Company Name Watermark -->
            <span class="dev-watermark">
                <h4>Rajdip Consultancy Services Pvt Ltd</h4>
            </span>

            <!-- Buttons -->
            <div class="dev-buttons">
                <a href="tel:+918830762587" class="call-btn">📞 Call Now</a>
                <a href="https://www.google.com" target="_blank" class="site-btn">🌐 Visit Website</a>
            </div>

        </div>

    </div>
</footer>


<script>
    document.getElementById("footerYear").textContent = new Date().getFullYear();

    function setTheme(theme) {
        const footer = document.getElementById("govFooter");
        footer.className = theme;

        const emblem = document.getElementById("emblemLogo");
        const title = document.getElementById("footerTitle");
        const subtitle = document.getElementById("footerSubtitle");

        if (theme === "royal-footer") {
            emblem.style.display = "none";
            title.textContent = "🌿 Maharashtra Government |२०२६ सर्व हक्क राखीव मोजपुरी ग्रामपंचायत";
            subtitle.textContent = "Department of Rural Development & Panchayat Raj";
        }

        if (theme === "mh-footer") {
            emblem.style.display = "none";
            title.textContent = "🌿 Maharashtra Government |२०२६ सर्व हक्क राखीव मोजपुरी ग्रामपंचायत";
            subtitle.textContent = "Department of Rural Development & Panchayat Raj";
        }

        if (theme === "emblem-footer") {
            emblem.style.display = "block";
            title.textContent = "🌿 Maharashtra Government |२०२६ सर्व हक्क राखीव मोजपुरी ग्रामपंचायत";
            subtitle.textContent = "Department of Rural Development & Panchayat Raj";
        }
    }
</script>