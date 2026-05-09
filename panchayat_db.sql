-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2026 at 11:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panchayat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$sXTigDb4BBMpmCqDoCdBF.kOzz36utE2LieeAnw/.xSzaFilVuO7u', 'kathorevaibhav5791@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `service`, `phone`, `document`, `status`, `created_at`) VALUES
(1, 'VAIBHAV KATHORE', 'जन्म प्रमाणपत्र', '8830762587', 'Cloud Computing TA-3.pdf', 'Pending', '2025-12-29 20:07:59'),
(2, 'VAIBHAV KATHORE', 'जन्म प्रमाणपत्र', '8830762587', 'Cloud Computing TA-3.pdf', 'Pending', '2025-12-29 20:08:23'),
(3, 'VAIBHAV KATHORE', 'जन्म प्रमाणपत्र', '8830762587', 'Composer-Setup.exe', 'Rejected', '2025-12-29 20:08:47'),
(4, 'VAIBHAV KATHORE', 'जन्म प्रमाणपत्र', '8830762587', 'VaibhavKathore.pdf', 'Approved', '2025-12-29 20:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_submissions`
--

CREATE TABLE `certificate_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `aadhaar` varchar(20) NOT NULL,
  `main_cert` varchar(100) DEFAULT NULL,
  `self_cert` varchar(100) DEFAULT NULL,
  `other_app` varchar(100) DEFAULT NULL,
  `construction` varchar(100) DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `complaint` text DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `phone`, `complaint`, `status`, `created_at`) VALUES
(1, 'VAIBHAV KATHORE', '8830762587', 'hiii', 'InProgress', '2025-12-29 20:18:48'),
(2, 'VAIBHAV KATHORE', '8830762587', 'hii', 'Pending', '2025-12-29 22:33:51'),
(3, 'VAIBHAV KATHORE', '8830762587', 'water problem', 'Resolved', '2025-12-30 05:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, '', '', '', '', '2025-12-29 22:29:25'),
(2, 'VAIBHAV KATHORE', 'kathorevaibhav5791@gmail.com', '8830762587', 'hiii', '2025-12-29 22:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `image`, `caption`, `uploaded_at`) VALUES
(8, '1767757602_1.jpeg', 'grampanchayat', '2026-01-07 03:46:42'),
(9, '1767762399_8.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(10, '1767762399_7.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(11, '1767762399_6.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(12, '1767762399_5.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(13, '1767762399_4.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(14, '1767762399_3.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(15, '1767762399_2.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(16, '1767762399_1.jpeg', 'स्वच्छ भारत अभियान ', '2026-01-07 05:06:39'),
(17, '1767762620_2.jpeg', 'ग्रामपंचायत ', '2026-01-07 05:10:20'),
(18, '1767762620_1.jpeg', 'ग्रामपंचायत ', '2026-01-07 05:10:20'),
(19, '1767763140_12.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(20, '1767763140_11.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(21, '1767763140_10.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(22, '1767763140_9.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(23, '1767763140_8.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(24, '1767763140_7.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(25, '1767763140_6.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(26, '1767763140_5.jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(27, '1767763140_4 .jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(28, '1767763140_3 .jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(29, '1767763140_2 .jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00'),
(30, '1767763140_1 .jpeg', 'पालक मेळावा 2025-26', '2026-01-07 05:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `gp_payment`
--

CREATE TABLE `gp_payment` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tax_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gp_payment`
--

INSERT INTO `gp_payment` (`id`, `payment_id`, `name`, `mobile`, `amount`, `created_at`, `tax_type`) VALUES
(1, 'pay_S0X4wQKMkk7yrG', 'gayatri', '9359406050', 1.00, '2026-01-06 09:19:53', NULL),
(2, 'pay_S0X4wQKMkk7yrG', 'gayatri', '9359406050', 1.00, '2026-01-06 09:20:26', NULL),
(3, 'pay_S0XvKtSeKV8rcB', 'gayatri', '8830762587', 1.00, '2026-01-06 09:45:17', NULL),
(4, 'pay_S0XvKtSeKV8rcB', 'gayatri', '8830762587', 1.00, '2026-01-06 09:46:47', NULL),
(5, 'pay_S0Y54dwbCS65RR', 'gayatri', '8830762587', 1.00, '2026-01-06 09:47:38', NULL),
(6, 'pay_S0aFNVt4CBdHBl', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 11:54:46', NULL),
(7, 'pay_S0aFNVt4CBdHBl', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:08:37', NULL),
(8, 'pay_S0ajwMG5314vbt', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:23:44', NULL),
(9, 'pay_S0ajwMG5314vbt', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:26:49', NULL),
(10, 'pay_S0ajwMG5314vbt', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:26:52', NULL),
(11, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:28:03', NULL),
(12, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:29:11', NULL),
(13, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:31:46', NULL),
(14, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:34:24', NULL),
(15, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:36:20', NULL),
(16, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:40:49', NULL),
(17, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:40:55', NULL),
(18, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:41:53', NULL),
(19, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:44:15', NULL),
(20, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:44:19', NULL),
(21, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:46:40', NULL),
(22, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:47:05', NULL),
(23, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:47:31', NULL),
(24, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:47:48', NULL),
(25, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:47:54', NULL),
(26, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:48:13', NULL),
(27, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:52:02', NULL),
(28, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:56:34', NULL),
(29, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:57:21', NULL),
(30, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:57:41', NULL),
(31, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 12:58:01', NULL),
(32, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:02:04', NULL),
(33, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:02:21', NULL),
(34, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:03:47', NULL),
(35, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:03:50', NULL),
(36, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:04:11', NULL),
(37, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:07:58', NULL),
(38, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:08:48', NULL),
(39, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:10:13', NULL),
(40, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:10:15', NULL),
(41, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:13:42', NULL),
(42, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:17:26', NULL),
(43, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:18:09', NULL),
(44, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:18:40', NULL),
(45, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:19:06', NULL),
(46, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:19:44', NULL),
(47, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:20:19', NULL),
(48, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:20:44', NULL),
(49, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:21:52', NULL),
(50, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:22:23', NULL),
(51, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:22:39', NULL),
(52, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:23:18', NULL),
(53, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:24:03', NULL),
(54, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:24:40', NULL),
(55, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:32:07', NULL),
(56, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:34:52', NULL),
(57, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:35:51', NULL),
(58, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:35:57', NULL),
(59, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:36:02', NULL),
(60, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:39:31', NULL),
(61, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:43:04', NULL),
(62, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:44:00', NULL),
(63, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:45:08', NULL),
(64, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:46:06', NULL),
(65, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:46:41', NULL),
(66, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:47:02', NULL),
(67, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:48:20', NULL),
(68, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:49:00', NULL),
(69, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:55:53', NULL),
(70, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:56:43', NULL),
(71, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:57:11', NULL),
(72, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:57:35', NULL),
(73, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:58:09', NULL),
(74, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:58:38', NULL),
(75, 'pay_S0aoWNgG2zkjXa', 'VAIBHAV', '9359406050', 2.00, '2026-01-06 13:59:40', NULL),
(94, 'pay_S0dzE8MI8vOMj6', 'VAIBHAV KATHORE', '8830762587', 20.00, '2026-01-06 15:34:15', NULL),
(95, 'pay_S1kcK1ZZwDlI86', 'VAIBHAV KATHORE', '8830762587', 10.00, '2026-01-09 10:42:27', 'घरपट्टी'),
(96, 'pay_S1kcK1ZZwDlI86', 'VAIBHAV KATHORE', '8830762587', 10.00, '2026-01-09 10:45:19', 'घरपट्टी'),
(97, 'pay_S1kcK1ZZwDlI86', 'VAIBHAV KATHORE', '8830762587', 10.00, '2026-01-09 10:47:17', 'घरपट्टी'),
(98, 'pay_S1kcK1ZZwDlI86', 'VAIBHAV KATHORE', '8830762587', 10.00, '2026-01-09 10:47:23', 'घरपट्टी'),
(99, 'pay_S1kjtHBhdutw0d', 'VAIBHAV KATHORE', '8830762587', 2.00, '2026-01-09 10:49:35', 'घरपट्टी'),
(100, 'pay_S1kjtHBhdutw0d', 'VAIBHAV KATHORE', '8830762587', 2.00, '2026-01-09 11:16:57', 'घरपट्टी'),
(101, 'pay_S1lDvAAt18gKu5', 'VAIBHAV KATHORE', '8830762587', 2.00, '2026-01-09 11:18:01', '[object HTMLSelectEl'),
(102, 'pay_S1lL2Nv12u8Twn', 'VAIBHAV KATHORE', '8830762587', 2.00, '2026-01-09 11:24:45', 'House Tax'),
(103, 'pay_S1lMUX1hqCy9W5', 'VAIBHAV KATHORE', '8830762587', 2.00, '2026-01-09 11:26:08', 'Water Tax'),
(104, 'pay_SAAmifpVO9uLE7', 'shubham shinde', '9529177127', 5.00, '2026-01-30 17:30:22', 'House Tax'),
(105, 'pay_SZ69i55GvsfxQS', 'Sarthak Kuhire', '08830762587', 200.00, '2026-04-03 17:13:41', 'Water Tax');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `post`, `mobile`, `photo`) VALUES
(7, 'VAIBHAV KATHORE', 'Sarpanch', '8830762587', 'IMG_0678[1].jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Dipavali Festival', 'दीपावली म्हणजे दिव्यांचा सण. हा सण अंधकारावर प्रकाश, अज्ञानावर ज्ञान आणि दुष्टावर चांगुलपणाची विजयाची प्रतीक आहे. हिंदू धर्मानुसार, हा सण श्रीरामांच्या अयोध्येत १४ वर्षांच्या वनवासानंतर रावणावर विजय मिळवून परत आल्याच्या दिवशी साजरा केला जातो.', '2025-12-29 20:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_applications`
--

CREATE TABLE `service_applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `service` varchar(255) NOT NULL,
  `document` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_applications`
--

INSERT INTO `service_applications` (`id`, `name`, `phone`, `service`, `document`, `submitted_at`) VALUES
(1, 'VAIBHAV KATHORE', '8830762587', 'पाणी पुरवठा', '1767041474_VaibhavKathore.pdf', '2025-12-29 20:51:14'),
(2, 'VAIBHAV KATHORE', '8830762587', 'आरोग्य सेवा', '1767041742_Bhakti and Vaibhav.pdf', '2025-12-29 20:55:42'),
(3, 'VAIBHAV KATHORE', '8830762587', 'ग्रामपंचायत सेवा', '1767053280_10TH MARKSEET VAIBHAV.jpg', '2025-12-30 00:08:00'),
(4, 'VAIBHAV KATHORE', '8830762587', 'ग्रामपंचायत सेवा', '1767775877_VaibhavKathore.pdf', '2026-01-07 08:51:17'),
(5, 'VAIBHAV KATHORE', '8830762587', 'ग्रामपंचायत सेवा', '1767776183_VaibhavKathore.pdf', '2026-01-07 08:56:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_submissions`
--
ALTER TABLE `certificate_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gp_payment`
--
ALTER TABLE `gp_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_applications`
--
ALTER TABLE `service_applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificate_submissions`
--
ALTER TABLE `certificate_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `gp_payment`
--
ALTER TABLE `gp_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_applications`
--
ALTER TABLE `service_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
