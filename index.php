<?php
include "db.php";
?>
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


    <script src="js/lang.js"></script>
    <style>
        .admin-section {
            background: linear-gradient(135deg, #0f5132, #1b8f5a, #0f5132);
            padding: 80px 15px;
            border-radius: 25px;
        }

        /* Title */
        .admin-title {
            color: #fff;
            font-size: 40px;
            font-weight: 900;
            text-align: center;
            margin-bottom: 40px;
            text-shadow: 3px 3px 20px rgba(0, 0, 0, .9);
        }

        /* Auto Scroll Animation */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all .9s ease-in-out;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Card Design */
        .card-box {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 22px;
            padding: 25px 10px;
            color: white;
            backdrop-filter: blur(12px);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.7);
            transition: .4s;
            position: relative;
            border: 3px solid rgba(255, 255, 255, 0.4);
        }

        .card-box:hover {
            transform: translateY(-15px) scale(1.03);
        }

        /* Golden Ribbon */
        .ribbon {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #ffd700;
            color: #000;
            padding: 7px 35px;
            font-weight: 900;
            font-size: 12px;
            border-radius: 30px 0 30px 0;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.7);
        }

        /* Profile Image */
        .card-box img {
            border: 6px solid white;
            border-radius: 100%;
            box-shadow: 0 0 35px rgba(255, 255, 255, 0.9);
        }

        /* Post Tag */
        .design-post {
            background: #ffaa00;
            color: black;
            padding: 7px 15px;
            border-radius: 25px;
            display: inline-block;
            margin-top: 10px;
            font-weight: 800;
        }

        /* Marathi Text Highlight */
        .text-line {
            background: white;
            color: #0f5132;
            font-weight: 900;
            border-radius: 10px;
            padding: 6px;
            margin-top: 6px;
        }

        /* Golden Government Badge Glow */
        .gov-badge {
            border: 5px solid gold !important;
            box-shadow: 0 0 25px gold, 0 0 40px #ffd700;
        }

        /* Special Collector Highlight Card */
        .collector-card {
            background: linear-gradient(145deg, #ffd700, #ffb700, #ffae00);
            color: #000;
            border: 4px solid white;
        }

        .collector-card img {
            border: 6px solid white !important;
            box-shadow: 0 0 40px white;
        }

        .collector-title {
            font-size: 22px;
            font-weight: 900;
            color: #000;
        }

        .icon-circle {
            width: 55px;
            height: 55px;
            background: #ffd700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: black;
            font-weight: 900;
            position: absolute;
            left: 10px;
            top: 10px;
        }


        .admin-section {
            background: linear-gradient(135deg, #0f5132, #1b8f5a, #0f5132);
            padding: 70px 0;
            border-radius: 25px;
        }

        .admin-title {
            color: #fff;
            font-size: 36px;
            font-weight: 900;
            letter-spacing: 1px;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, .6);
            margin-bottom: 40px;
        }

        .card-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 25px 10px;
            color: white;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            transition: 0.4s;
            position: relative;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .card-box:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.7);
        }

        .ribbon {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #ffd700;
            color: #000;
            padding: 7px 35px;
            font-weight: 900;
            font-size: 13px;
            border-radius: 30px 0 30px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.6);
        }

        .card-box img {
            border: 5px solid white;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.7);
        }

        .card-box h5 {
            font-weight: 900;
            margin-top: 10px;
        }

        .design-post {
            background: #ffaa00;
            color: black;
            padding: 6px 12px;
            border-radius: 20px;
            display: inline-block;
            margin-top: 8px;
            font-weight: 700;
        }

        .text-line {
            background: white;
            color: #0f5132;
            font-weight: 800;
            border-radius: 10px;
            padding: 6px;
            margin-top: 6px;
        }

        .icon-circle {
            width: 55px;
            height: 55px;
            background: #ffd700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: black;
            font-weight: 900;
            position: absolute;
            left: 10px;
            top: 10px;
        }

        .gp-section {
            background: linear-gradient(135deg, #0f5132, #198754);
            padding: 60px 0;
            border-radius: 20px;
        }

        .gp-title {
            color: white;
            font-size: 34px;
            font-weight: 900;
            letter-spacing: 1px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, .4);
        }

        .gp-card {
            background: white;
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: 0.4s;
            position: relative;
            border-top: 7px solid #ffb703;
        }

        .gp-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
        }

        .gp-card img {
            border: 5px solid white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .ribbon {
            position: absolute;
            top: 10px;
            left: -10px;
            background: #ffb703;
            color: black;
            padding: 5px 20px;
            font-weight: 700;
            border-radius: 0 25px 25px 0;
        }

        .gp-name {
            font-weight: 900;
            font-size: 20px;
        }

        .gp-post {
            background: #198754;
            color: white;
            padding: 5px 10px;
            border-radius: 50px;
            font-size: 14px;
        }

        .call-box {
            background: #edf7ff;
            padding: 7px;
            border-radius: 10px;
            font-weight: 600;
            border: 1px dashed #0d6efd;
        }


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f1f5f9;
        }

        header {
            background: #164a41;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .gov-images img {
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 8px;
            border: 3px solid #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .gov-images div {
            text-align: center;
        }


        nav {
            background: #14734a;
            padding: 10px;
            text-align: center;
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

        .hero-slider {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .hero-slider .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            animation: slide 18s infinite;
        }

        @keyframes slide {

            0%,
            33% {
                opacity: 1;
            }

            33%,
            66% {
                opacity: 0;
            }

            66%,
            100% {
                opacity: 0;
            }
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin: 5px;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .btn-color1:hover {
            background: #ff6b6b;
            color: #fff;
        }

        .btn-color2:hover {
            background: #1e90ff;
            color: #fff;
        }

        .section-title {
            text-align: center;
            margin: 50px 0 20px;
            font-size: 32px;
            font-weight: 700;
            color: #1b5e20;
        }

        .card-box {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 25px;
            margin: 15px;
            text-align: center;
            transition: 0.3s;
        }

        .card-box:hover {
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
            transform: scale(1.03);
        }

        .counters {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 40px 0;

        }

        .counter-card {
            background: rgba(2, 255, 86, 0.5);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            transition: 0.3s;
            margin: 10px;
        }

        .counter-card:hover {
            transform: scale(1.08);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);

        }

        .gallery-slider {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            margin: 20px 0;
        }

        .gallery-slider .slide {
            min-width: 300px;
            margin-right: 15px;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.1s;
        }

        .gallery-slider .slide:hover {
            transform: scale(0.15);
        }

        .language-btn button {
            margin: 5px;
        }

        footer {
            background: #14734a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        .service-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin: 15px;
            text-align: center;
            transition: 0.3s;
        }

        .service-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            transform: scale(1.05);
        }

        /* AAmchya gavabaddal */
        .govt-about {
            background: linear-gradient(135deg, #004aad, #007bff, #00c6ff);
            color: #fff;
        }

        .govt-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .badge-tag {
            background: #ffcc00;
            color: #000;
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 700;
        }

        .govt-title h2 {
            font-size: 35px;
            margin-top: 10px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);
        }

        .govt-about-box {
            background: #ffffff;
            color: #000;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border: 3px solid #ffd700;
            transition: 0.3s;

        }

        .govt-about-box:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .govt-features .feat {
            display: flex;
            gap: 15px;
            margin-top: 10px;
            background: #f7f7f7;
            padding: 10px;
            border-radius: 15px;
            border-left: 7px solid #007bff;
            transition: 0.3s;
        }

        .govt-features .feat:hover {
            transform: translateX(5px);
            background: #e9f3ff;
        }

        .icon {
            font-size: 35px;
        }

        .mission {
            color: #ff0000;
            font-weight: 700;
        }

        .govt-image-box {
            position: relative;
            border-radius: 25px;
            overflow: hidden;
            border: 5px solid #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .govt-image-box img {
            border-radius: 20px;
        }

        .district-badge {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background: #ffcc00;
            color: #000;
            padding: 8px 15px;
            border-radius: 25px;
            font-weight: 800;
            animation: glow 1.5s infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 5px #fff;
            }

            to {
                box-shadow: 0 0 25px #ff0;
            }
        }

        /* Background Images */
        .bg-slider {
            width: 100%;
            height: 450px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            animation: slide 18s infinite;
            position: relative;
        }

        /* Black Transparent Layer */
        .bg-slider::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55);
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        .overlay h2 {
            font-size: 38px;
            font-weight: 800;
            text-shadow: 2px 2px 10px black;
        }

        .overlay p {
            font-size: 22px;
            font-weight: 600;
        }

        /* 🔁 Sliding Images Animation */
        @keyframes slide {
            0% {
                background-image: url("images/hero/slide1.jpg");
            }

            25% {
                background-image: url("images/hero/slide2.jpg");
            }

            50% {
                background-image: url("images/hero/slide3.jpg");
            }

            75% {
                background-image: url("images/hero/slide4.jpg");
            }

            100% {
                background-image: url("images/hero/slide1.jpg");
            }
        }

        /* 📱 Responsive */
        @media(max-width:768px) {
            .bg-slider {
                height: 320px;
            }

            .overlay h2 {
                font-size: 26px;
            }

            .overlay p {
                font-size: 16px;
            }
        }

        /* 📱 about section */
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
            height: 420px;
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

        /* Banner Container */
        .govt-banner {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
            perspective: 1000px;
            transition: transform 0.2s ease-out;
        }

        /* Slides */
        .parallax-slider .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.05);
            transition: opacity 1s ease, transform 1s ease;
            filter: brightness(0.7) blur(1px);
        }

        .parallax-slider .slide.active {
            opacity: 1;
            transform: scale(1);
        }

        /* Overlay Text */
        .parallax-slider .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.8);
            z-index: 2;
            padding: 0 20px;
        }

        .parallax-slider .overlay h2 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 15px;
            text-shadow: 0 0 15px #00ffcc, 0 0 25px #00ffcc;
            animation: glow 2s infinite alternate;
        }

        .parallax-slider .overlay p {
            font-size: 1.2rem;
            font-weight: 600;
            color: #e0f7fa;
            text-shadow: 0 0 8px #00ffcc;
        }

        /* Glow Animation */
        @keyframes glow {
            0% {
                text-shadow: 0 0 10px #00ffcc, 0 0 20px #00ffcc;
            }

            50% {
                text-shadow: 0 0 20px #00ffcc, 0 0 40px #00ffcc;
            }

            100% {
                text-shadow: 0 0 15px #00ffcc, 0 0 30px #00ffcc;
            }
        }

        /* Blur Overlay */
        .govt-banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(2px);
            pointer-events: none;
        }

        /* Responsive */
        @media(max-width:768px) {
            .govt-banner {
                height: 350px;
            }

            .parallax-slider .overlay h2 {
                font-size: 2rem;
            }

            .parallax-slider .overlay p {
                font-size: 1rem;
            }
        }

        .govt-ann-box {
            text-align: center;
        }

        .gov-title {
            font-weight: 900;
            color: #0b5e3b;
            text-shadow: 0 3px 20px rgba(0, 0, 0, .3);
            font-size: 2.2rem;
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
        }

        .underline {
            display: block;
            width: 120px;
            height: 4px;
            margin: 8px auto 0;
            background: linear-gradient(90deg, #ff9933, #ffffff, #128807);
            border-radius: 50px;
        }

        /* Government 3D Card */
        .govt-card {
            margin-top: 25px;
            padding: 25px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            border: 2px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3),
                0 0 25px rgba(0, 255, 170, .4);
            transition: all .4s ease-in-out;
        }

        .govt-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5),
                0 0 30px rgba(0, 255, 170, .7);
        }

        /* List Style */
        .gov-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .gov-list li {
            font-size: 1.2rem;
            font-weight: 700;
            color: #004d26;
            padding: 12px;
            margin: 8px 0;
            border-radius: 12px;
            background: linear-gradient(145deg, #ffffff70, #ffffff20);
            box-shadow: inset 0 0 15px rgba(0, 0, 0, .15);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Icons */
        .gov-list i {
            color: #008f4c;
            font-size: 1.4rem;
            text-shadow: 0 0 8px rgba(0, 255, 170, .8);
        }

        /* Responsive */
        @media(max-width:768px) {
            .gov-title {
                font-size: 1.7rem;
            }

            .gov-list li {
                font-size: 1rem;
            }
        }

        /* Title */
        .gov-main-title {
            text-align: center;
            font-weight: 900;
            color: #0b5e3b;
            font-size: 2.2rem;
        }

        .gov-main-title .line {
            display: block;
            width: 150px;
            height: 4px;
            margin: 8px auto;
            background: linear-gradient(90deg, #ff9933, #fff, #128807);
            border-radius: 50px;
        }

        /* Service Cards */
        .gov-service-card {
            padding: 25px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 25px 60px rgba(0, 0, 0, .3);
            backdrop-filter: blur(8px);
            transition: .4s;
        }

        .gov-service-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 30px 80px rgba(0, 0, 0, .5),
                0 0 30px rgba(0, 255, 150, .8);
        }

        /* Icons */
        .gov-service-card i {
            font-size: 55px;
            color: #00994d;
            text-shadow: 0 0 18px rgba(0, 255, 170, .7);
            margin-bottom: 10px;
        }

        /* Headings */
        .gov-service-card h4 {
            font-weight: 800;
            color: #004d26;
        }

        /* Paragraph */
        .gov-service-card p {
            color: #00331a;
            font-weight: 600;
        }

        /* Counter Section */
        .govt-counter-sec {
            margin-top: 40px;
        }

        .counter-box {
            padding: 20px;
            background: linear-gradient(145deg, #ffffff60, #ffffff20);
            border-radius: 14px;
            border: 2px solid rgba(255, 255, 255, .6);
            box-shadow: 0 20px 60px rgba(0, 0, 0, .4);
        }

        .counter-box h2 {
            font-size: 2.5rem;
            font-weight: 900;
            color: #128807;
            text-shadow: 0 0 15px rgba(0, 255, 140, .7);
        }

        .counter-box p {
            font-weight: 700;
            color: #0b3d26;
        }

        /* Responsive */
        @media(max-width:768px) {
            .gov-main-title {
                font-size: 1.8rem;
            }

            .counter-box h2 {
                font-size: 2rem;
            }
        }

        .modern-gallery {
            perspective: 1200px;
        }

        .gallery-frame {
            border-radius: 22px;
            overflow: hidden;
            position: relative;
            padding: 6px;
            background: linear-gradient(120deg, #00ffaa, #00bfff, #fffb00);
            background-size: 300% 300%;
            animation: glowBorder 4s infinite linear;
            box-shadow: 0 20px 60px rgba(0, 255, 200, .25);
            transform: rotateX(6deg);
        }

        .gallery-img {
            border-radius: 18px;
            filter: brightness(.95) contrast(1.1);
            transition: .6s;
            transform-origin: center;
        }

        .gallery-frame:hover .gallery-img {
            transform: scale(1.08) rotateX(6deg);
            filter: brightness(1.1);
        }

        .carousel-item {
            transition: transform 1s ease-in-out;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: drop-shadow(0 0 10px #00ffaa);
        }

        .gov-main-title {
            text-align: center;
            font-weight: 800;
            letter-spacing: .5px;
            margin-bottom: 15px;
        }

        .line {
            display: block;
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #00ffaa, #00bfff);
            margin: 8px auto;
            border-radius: 10px;
        }

        @keyframes glowBorder {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 200% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        /* Mobile */
        @media(max-width:768px) {
            .gallery-frame {
                transform: none;
            }
        }

        /* ================= GOVERNMENT VIDEO BANNER ================= */

        .gov-banner-box {
            position: relative;
            width: 100%;
            height: 350px;
            border-radius: 10px;
            overflow: hidden;
            border: 4px solid #000;
            box-shadow: 0 0 25px rgba(0, 0, 0, .5);
        }

        /* Video Fit */
        .gov-banner-box video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Tricolor Overlay */
        .gov-banner-overlay {
            position: absolute;
            inset: 0;
        }

        /* Text */
        .gov-banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 100%;
            padding: 0 20px;
        }

        .gov-banner-content h1 {
            font-size: 32px;
            font-weight: 900;
            text-shadow: 2px 2px 6px #000;
        }

        .gov-banner-content p {
            font-size: 18px;
            font-weight: 600;
            margin-top: 5px;
        }

        /* ================= MOBILE ================= */
        @media(max-width:768px) {
            .gov-banner-box {
                height: 220px;
                border-width: 3px;
            }

            .gov-banner-content h1 {
                font-size: 18px;
                line-height: 22px;
            }

            .gov-banner-content p {
                font-size: 13px;
            }
        }

        /* ================= Navbar ================= */

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

        .govt-image-box {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            border: 4px solid gold;
            box-shadow: 0 30px 80px rgba(0, 0, 0, .6);
            animation: popIn 1s ease;
        }

        /* 3D Multi-Color Glow */
        .govt-image-box {
            position: relative;
            border-radius: 22px;
            overflow: hidden;
            border: 4px solid gold;
            padding: 4px;
            background: linear-gradient(120deg, #ff5722, #ff9800, #4caf50, #2196f3, #9c27b0);
            background-size: 250% 250%;
            animation: gradientMove 6s infinite alternate;
            box-shadow: 0 25px 80px rgba(0, 0, 0, .6);
        }

        @keyframes gradientMove {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }

        .gov-img {
            border-radius: 18px;
            height: 360px;
            object-fit: cover;
            transition: .6s;
        }

        .govt-image-box:hover .gov-img {
            transform: scale(1.08);
            filter: brightness(1.1);
        }

        .district-badge {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(45deg, #ff5722, #ffc107, #4caf50, #2196f3);
            color: #000;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 900;
            border: 3px solid gold;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
        }

        /* Indicators */
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: white;
        }

        .carousel-indicators .active {
            background: #4caf50;
        }

        /* Responsive */
        @media(max-width:768px) {
            .gov-img {
                height: 240px;
            }
        }
    </style>

</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>
    <script>
        document.addEventListener("mousemove", function(e) {
            let x = (window.innerWidth / 2 - e.pageX) / 25;
            let y = (window.innerHeight / 2 - e.pageY) / 25;
            document.querySelector(".parallax-move").style.setProperty("--moveX", x + "px");
            document.querySelector(".parallax-move").style.setProperty("--moveY", y + "px");
        });
    </script>

    <?php
    include "navbar.php";
    ?>



    <!-- VIDEO BANNER - GOVERNMENT LOOK -->
    <div class="container my-4">
        <div class="gov-banner-box">
            <video autoplay muted loop playsinline>
                <source src="videos/villege.mp4" type="video/mp4">
            </video>

            <!-- Overlay -->
            <div class="gov-banner-overlay"></div>

            <!-- Text -->
            <div class="gov-banner-content">
                <h1>🌾 स्मार्ट व्हिलेज – डिजिटल ग्रामपंचायत</h1>
                <p>नागरिकांसाठी सेवा • विकास • पारदर्शक प्रशासन</p>
            </div>
        </div>
    </div>
    <div class="govt-title">
        <span class="badge-tag">🌟 महाराष्ट्र शासन मान्य ग्रामपंचायत पोर्टल</span>
        <h2>🏛️ आमच्या गावाची माहिती</h2>
        <p>मोजपुरी ता.– <strong>💠जालना </strong> | जिल्हा – <strong>जालना📍</strong></p>
    </div>
    <div class="row g-4 align-items-center">

        <div class="col-md-6">
            <div class="govt-about-box">
                <p><strong>मोजपुरी</strong> हे महाराष्ट्रातील एक सुंदर, शांत, प्रगत आणि सांस्कृतिकदृष्ट्या समृद्ध गाव आहे. येथे सुमारे <b>३,५००+</b> लोकसंख्या असून गावात शिक्षण, आरोग्य, स्वच्छता, विकास योजना आणि ग्रामपंचायत सेवा सक्षमपणे राबवल्या जातात.</p>

                <p>गावातील नागरिक सहकार्यशील, संस्कारशील आणि प्रगतिशील आहेत. गावात दरवर्षी धार्मिक सण, सांस्कृतिक कार्यक्रम, शिक्षणविषयक उपक्रम आणि सामाजिक विकास प्रकल्प राबवले जातात.</p>

                <h4 class="mt-3">✨ मुख्य सुविधा:</h4>

                <div class="govt-features">

                    <div class="feat">
                        <div class="icon">🎓</div>
                        <p><strong>शिक्षण :</strong> प्राथमिक, माध्यमिक शाळा व संगणक शिक्षण केंद्र</p>
                    </div>

                    <div class="feat">
                        <div class="icon">🏥</div>
                        <p><strong>आरोग्य :</strong> प्राथमिक आरोग्य केंद्र, वैद्यकीय शिबिरे</p>
                    </div>

                    <div class="feat">
                        <div class="icon">🏛️</div>
                        <p><strong>ग्रामपंचायत :</strong> नागरिक सेवा, योजना माहिती, विकास प्रकल्प</p>
                    </div>

                </div>

                <p class="mt-3">
                    आमचे ध्येय – <strong>स्वच्छ, सुरक्षित, शिक्षित आणि समृद्ध गाव</strong> उभारणे.
                    <span class="mission">✊ “आपले गाव – आपला अभिमान”</span>
                </p>
            </div>
        </div>

        <div class="col-md-6">

            <div id="govSlider" class="carousel slide govt-image-box" data-bs-ride="carousel" data-bs-interval="2500">

                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#govSlider" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#govSlider" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#govSlider" data-bs-slide-to="2"></button>
                </div>

                <!-- SLIDES -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="images/hero/slide1.jpeg" class="d-block w-100 gov-img">
                    </div>

                    <div class="carousel-item">
                        <img src="images/hero/slide5.jpeg" class="d-block w-100 gov-img">
                    </div>

                    <div class="carousel-item">
                        <img src="images/hero/slide3.jpeg" class="d-block w-100 gov-img">
                    </div>



                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#govSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#govSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

                <!-- Badge -->
                <span class="district-badge">📢 अधिकृत ग्रामपंचायत पोर्टल<br></span>

            </div>

        </div>



    </div>
    </div>
    </section>
    <section class="admin-section container" id="administration">

        <h2 class="admin-title">
            <i class="fa fa-landmark"></i> प्रशासकीय संरचना
        </h2>

        <div class="row text-center">

            <!-- ⭐ SPECIAL DISTRICT COLLECTOR HIGHLIGHT -->
            <div class="col-md-4 col-sm-12 mb-4 fade-up">
                <div class="card-box collector-card">
                    <div class="icon-circle">👑</div>
                    <span class="ribbon">District Head</span>

                    <img src="images/officers/ashima_mittal.jpg"
                        class="mx-auto d-block mb-2 gov-badge"
                        style="width:170px;height:170px;object-fit:cover;">

                    <div class="collector-title">माननीय जिल्हाधिकारी</div>
                    <p class="text-line">श्रीमती आशिमा मित्तल (भा.प्र.से.)</p>
                    <p class="fw-bold">जिल्हा – जालना</p>
                </div>
            </div>

            <!-- Officer 2 -->
            <div class="col-md-4 col-sm-6 mb-4 fade-up">
                <div class="card-box">
                    <div class="icon-circle">🏢</div>
                    <span class="ribbon">Administrative Head</span>
                    <img src="images/officers/minnu_pm.jpg" class="mb-2" style="width:150px;height:150px;object-fit:cover;">
                    <div class="design-post">मुख्य कार्यकारी अधिकारी</div>
                    <p class="text-line">श्रीमती मिन्नू पी.एम</p>
                </div>
            </div>

            <!-- Officer 3 -->
            <div class="col-md-4 col-sm-6 mb-4 fade-up">
                <div class="card-box">
                    <div class="icon-circle">⭐</div>
                    <span class="ribbon">Senior Officer</span>
                    <img src="images/officers/shirish_bansode.jpg" class="mb-2" style="width:150px;height:150px;object-fit:cover;">
                    <div class="design-post">अति. मुख्य कार्यकारी अधिकारी</div>
                    <p class="text-line">श्री शिरीष द. बनसोडे</p>
                </div>
            </div>

            <!-- Officer 4 -->
            <div class="col-md-4 col-sm-6 mb-4 fade-up">
                <div class="card-box">
                    <div class="icon-circle">🛡️</div>
                    <span class="ribbon">Deputy Head</span>
                    <img src="images/officers/udaysing_rajput.jpg" class="mb-2" style="width:150px;height:150px;object-fit:cover;">
                    <div class="design-post">उप मुख्य कार्यकारी अधिकारी (पं.)</div>
                    <p class="text-line">श्री उदयसिंग राजपूत</p>
                </div>
            </div>

            <!-- Officer 5 -->
            <div class="col-md-4 col-sm-6 mb-4 fade-up">
                <div class="card-box">
                    <div class="icon-circle">📌</div>
                    <span class="ribbon">Development Officer</span>
                    <img src="images/officers/sandeep_pawar.jpg" class="mb-2" style="width:150px;height:150px;object-fit:cover;">
                    <div class="design-post">गट विकास अधिकारी</div>
                    <p class="text-line">श्री संदीप पवार (जालना पंचायत समिती)</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Members Section -->
    <section class="gp-section container my-5">

        <h2 class="text-center gp-title mb-4">
            <i class="fa fa-users"></i> ग्रामपंचायत – पदाधिकारी
        </h2>

        <div class="row">

            <?php
            $data2 = mysqli_query($conn, "SELECT * FROM members");
            while ($m = mysqli_fetch_assoc($data2)) {
            ?>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                    <div class="gp-card text-center">

                        <span class="ribbon">
                            अधिकृत पदाधिकारी
                        </span>

                        <img src="uploads/<?= $m['photo'] ?>"
                            class="rounded-circle mx-auto mt-4"
                            style="height:170px;width:170px;object-fit:cover;">

                        <div class="card-body">

                            <h5 class="gp-name mt-2">
                                <?= $m['name'] ?>
                            </h5>

                            <p class="gp-post mt-1">
                                <i class="fa fa-id-badge"></i> <?= $m['post'] ?>
                            </p>

                            <p class="call-box mt-2">
                                <i class="fa fa-phone"></i> <?= $m['mobile'] ?>
                            </p>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </section>
    <!-- Services Section -->
    <!-- Government Services -->
    <div class="container mt-5" id="services">
        <h2 class="gov-main-title">
            🏛️ नागरिक सेवा
            <span class="line"></span>
        </h2>

        <div class="row text-center mt-4">

            <div class="col-md-4 mb-4">
                <div class="gov-service-card">
                    <i class="fa-solid fa-landmark-flag"></i>
                    <h4>ग्रामपंचायत सेवा</h4>
                    <p>ग्राम प्रशासन, योजना माहिती आणि नागरिक सेवांसाठी.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gov-service-card">
                    <i class="fa-solid fa-hospital"></i>
                    <h4>आरोग्य सेवा</h4>
                    <p>आरोग्य सुविधा, वैद्यकीय शिबिरे आणि औषध वितरण.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="gov-service-card">
                    <i class="fa-solid fa-school"></i>
                    <h4>शिक्षण सुविधा</h4>
                    <p>शिक्षण, संगणक प्रशिक्षण व विद्यार्थ्यांसाठी सुविधा.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5 govt-counter-sec">
        <div class="row">

            <div class="col-md-3 col-6">
                <div class="counter-box">
                    <h2 class="" data-val="2000">3000</h2>
                    <p>लोकसंख्या</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="counter-box">
                    <h2 class="count" data-val="2">0</h2>
                    <p>शाळा</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="counter-box">
                    <h2 class="count" data-val="1">0</h2>
                    <p>आरोग्य केंद्रे</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="counter-box">
                    <h2 class="count" data-val="100">0</h2>
                    <p>सामुदायिक एकता</p>
                </div>
            </div>

        </div>
    </div>




    <!-- Announcements Section -->
    <div class="container mt-5 govt-ann-box">
        <h2 class="gov-title">
            🏛️ ताज्या सरकारी घोषणा
            <span class="underline"></span>
        </h2>

        <div class="govt-card">
            <ul class="gov-list">
                <li>
                    <i class="fa-solid fa-bullhorn"></i>
                    ग्राम विकास बैठक: रविवार सकाळी १० वाजता
                </li>

                <li>
                    <i class="fa-solid fa-broom"></i>
                    स्वच्छता मोहिम: दर शनिवार
                </li>

                <li>
                    <i class="fa-solid fa-circle-info"></i>
                    सरकारी योजना माहिती शिबिर लवकरच
                </li>
            </ul>
        </div>
    </div>


    <!-- Gallery -->
    <!-- Gallery -->
    <div class="container mt-5" id="services">
        <h2 class="gov-main-title">
            गॅलरी
            <span class="line"></span>
        </h2>

        <div id="galleryCarousel" class="carousel slide modern-gallery" data-bs-ride="carousel" data-bs-interval="1800">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="gallery-frame">
                        <img src="images/gallery/1.jpeg" class="d-block w-100 gallery-img" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="gallery-frame">
                        <img src="images/gallery/2.jpeg" class="d-block w-100 gallery-img" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="gallery-frame">
                        <img src="images/gallery/1.jpeg" class="d-block w-100 gallery-img" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="gallery-frame">
                        <img src="images/gallery/4.jpeg" class="d-block w-100 gallery-img" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="gallery-frame">
                        <img src="images/gallery/2.jpeg" class="d-block w-100 gallery-img" alt="">
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            changeLang('mr'); // Default Marathi
        });
    </script>
    <script>
        const elements = document.querySelectorAll(".fade-up");

        function showElements() {
            elements.forEach(el => {
                const pos = el.getBoundingClientRect().top;
                if (pos < window.innerHeight - 50) {
                    el.classList.add("show");
                }
            });
        }

        window.addEventListener("scroll", showElements);
        showElements();
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
    <script>
        (function() {
            // Check if slides exist
            const slides = document.querySelectorAll(".parallax-slider .slide");
            if (!slides.length) return; // no slides, exit

            let currentSlide = 0; // unique variable name

            function nextSlide() {
                slides[currentSlide].classList.remove("active");
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add("active");
            }

            // Change slide every 4 seconds
            setInterval(nextSlide, 4000);

            // 3D Parallax effect on scroll
            const banner = document.querySelector(".govt-banner");
            if (banner) {
                window.addEventListener("scroll", () => {
                    const offset = window.pageYOffset;
                    banner.style.transform = `rotateX(${offset * 0.01}deg) rotateY(${offset * 0.005}deg)`;
                });
            }
        })();
    </script>
    <script>
        (function() {
            // Slider Functionality (using unique variable names)
            let bannerSlides = document.querySelectorAll(".parallax-slider .slide");
            let bannerCurrent = 0;

            function nextBannerSlide() {
                bannerSlides[bannerCurrent].classList.remove("active");
                bannerCurrent = (bannerCurrent + 1) % bannerSlides.length;
                bannerSlides[bannerCurrent].classList.add("active");
            }

            setInterval(nextBannerSlide, 4000);

            // 3D Parallax on Scroll for Desktop
            if (window.innerWidth >= 768) {
                window.addEventListener('scroll', () => {
                    const banner = document.querySelector('.govt-banner');
                    if (banner) {
                        const offset = window.pageYOffset;
                        banner.style.transform = `rotateX(${offset*0.005}deg) rotateY(${offset*0.0025}deg)`;
                    }
                });
            }
        })();
    </script>


    <script>
        const counters = document.querySelectorAll(".count");

        const startCounter = (entry) => {
            if (entry[0].isIntersecting) {
                counters.forEach(counter => {
                    let value = parseInt(counter.getAttribute("data-val"));
                    let start = 0;
                    let duration = 30;

                    let update = setInterval(() => {
                        start++;
                        if (value === 100) {
                            counter.innerText = start + "%";
                        } else if (value > 10) {
                            counter.innerText = start + "+";
                        } else {
                            counter.innerText = start;
                        }

                        if (start >= value) clearInterval(update);
                    }, duration);
                });
            }
        };

        let observer = new IntersectionObserver(startCounter);
        observer.observe(document.querySelector(".govt-counter-sec"));
    </script>



</body>

</html>