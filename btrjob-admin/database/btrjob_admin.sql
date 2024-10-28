-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2024 at 05:18 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u355669643_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `qualification_img` varchar(100) DEFAULT NULL,
  `experience_img` varchar(100) DEFAULT NULL,
  `id_img` varchar(100) DEFAULT NULL,
  `cv_img` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:inactive, 1:uploaded, 2:verified,\r\n3:rejected 	',
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `name`, `email`, `phone`, `password`, `gender`, `address`, `state`, `district`, `qualification`, `experience`, `profile_img`, `qualification_img`, `experience_img`, `id_img`, `cv_img`, `status`, `user_type`) VALUES
(18, 'client', 'sagartalukdar0123456789@gmail.com', '8942017056', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'male', 'Durgapur, West Bengal', 'Meghalaya', 'South West Garo Hills', 'Graduate', '5', NULL, '../uploads/qualificationPdf/6fc9aea120beea9d8323333a2bbd26dadocument.pdf', '../uploads/experiencepdf/6fc9aea120beea9d8323333a2bbd26dadocument.pdf', '../uploads/idimage/6fc9aea120beea9d8323333a2bbd26dapoultry3.jpg', '../uploads/cvpdf/6fc9aea120beea9d8323333a2bbd26dadocument.pdf', 2, 'APPLICANT'),
(19, NULL, 'Basumatarysubungsa82@gmail.com', '6000972665', 'a6d5e65f29bfe0a002e361336d78e4a41ddb843f34943a5f8a8200a785f1fbe462a8eaf95b5abb3583dfb532c607bb9f25020427f519c807e0178c9708021b19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'APPLICANT');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_login_details`
--

CREATE TABLE `applicant_login_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `os` text NOT NULL,
  `browser` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_login_details`
--

INSERT INTO `applicant_login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(26, '1', 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:05:42'),
(27, '11', 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:20:24'),
(28, '11', 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:31:39'),
(29, '3', 'Windows 10', 'Chrome', '103.199.200.185', '2024-03-15', '12:50:10'),
(30, '3', 'Windows 10', 'Chrome', '103.199.200.185', '2024-03-15', '13:46:15'),
(31, '3', 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '15:12:23'),
(32, '11', 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '15:13:31'),
(33, '14', 'Windows 7', 'Firefox', '27.122.61.137', '2024-03-16', '11:22:34'),
(34, '1', 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '15:31:15'),
(35, '1', 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:10:21'),
(36, '1', 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:14:36'),
(37, '3', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '11:26:18'),
(38, '1', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '11:31:17'),
(39, '3', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:00:13'),
(40, '13', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:03:00'),
(41, '1', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:38:30'),
(42, '1', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:45:34'),
(43, '3', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '16:28:55'),
(44, '3', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '16:42:50'),
(45, '3', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:32:26'),
(46, '13', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:33:00'),
(47, '3', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:33:51'),
(48, '3', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:35:55'),
(49, '13', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:49:21'),
(50, '13', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:50:21'),
(51, '13', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:52:06'),
(52, '3', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:58:41'),
(53, '3', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '15:00:15'),
(54, '3', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '15:21:45'),
(55, '3', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '15:26:41'),
(56, '3', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '15:37:50'),
(57, '3', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '15:38:28'),
(58, '3', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '16:03:11'),
(59, '3', 'Windows 10', 'Firefox', '103.199.180.169', '2024-03-19', '16:12:14'),
(60, '1', 'Windows 10', 'Chrome', '103.199.200.138', '2024-03-20', '11:10:42'),
(61, '1', 'Windows 10', 'Chrome', '103.199.200.138', '2024-03-20', '15:53:29'),
(62, '3', 'Windows 7', 'Firefox', '103.199.200.138', '2024-03-20', '15:54:22'),
(63, '3', 'Windows 10', 'Firefox', '103.199.200.138', '2024-03-20', '15:55:23'),
(64, '3', 'Windows 10', 'Firefox', '103.199.200.138', '2024-03-20', '15:56:01'),
(65, '3', 'Windows 10', 'Chrome', '103.199.200.138', '2024-03-20', '15:57:40'),
(66, '3', 'Android', 'Handheld Browser', '103.199.200.138', '2024-03-20', '16:25:05'),
(67, '3', 'Android', 'Handheld Browser', '103.199.200.138', '2024-03-20', '16:32:51'),
(68, '3', 'Windows 10', 'Chrome', '103.199.200.138', '2024-03-20', '16:34:41'),
(69, '3', 'Android', 'Handheld Browser', '2401:4900:38c9:999e:390f:a246:ed80:6683', '2024-03-21', '00:18:05'),
(70, '1', 'Windows 10', 'Chrome', '103.199.200.35', '2024-03-21', '15:18:37'),
(71, '3', 'Windows 7', 'Firefox', '27.122.61.212', '2024-03-22', '15:38:34'),
(72, '3', 'Android', 'Handheld Browser', '27.122.61.212', '2024-03-22', '15:55:52'),
(73, '3', 'Android', 'Handheld Browser', '2401:4900:38c4:f5ab:6615:8e12:2910:9ad3', '2024-03-22', '18:59:41'),
(74, '3', 'Android', 'Handheld Browser', '27.122.61.129', '2024-03-23', '13:43:18'),
(75, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '14:01:58'),
(76, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '14:56:25'),
(77, '3', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '14:57:05'),
(78, '3', 'Android', 'Handheld Browser', '2409:40e6:22:cb24:8000::', '2024-03-23', '16:21:45'),
(79, '3', 'Android', 'Handheld Browser', '2409:40e6:22:cb24:8000::', '2024-03-23', '16:22:07'),
(80, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:24:23'),
(81, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:24:54'),
(82, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:26:42'),
(83, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:29:17'),
(84, '17', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:35:14'),
(85, '3', 'Windows 10', 'Chrome', '59.97.157.222', '2024-03-26', '19:21:46'),
(86, '1', 'Windows 10', 'Chrome', '27.122.61.51', '2024-03-27', '14:45:53'),
(87, '3', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '15:14:50'),
(88, '3', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '15:33:16'),
(89, '3', 'Windows 10', 'Chrome', '27.122.61.51', '2024-03-27', '15:36:59'),
(90, '1', 'Windows 10', 'Chrome', '27.122.61.51', '2024-03-27', '15:38:58'),
(91, '3', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '16:02:59'),
(92, '3', 'Windows 7', 'Firefox', '27.122.61.51', '2024-03-27', '16:03:13'),
(93, '3', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '16:07:28'),
(94, '1', 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '12:02:38'),
(95, '1', 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '13:16:09'),
(96, '3', 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '13:17:53'),
(97, '3', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '13:29:09'),
(98, '3', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '17:02:16'),
(99, '1', 'Android', 'Handheld Browser', '27.122.61.144', '2024-03-29', '11:45:47'),
(100, '3', 'Android', 'Handheld Browser', '27.122.61.144', '2024-03-29', '11:46:05'),
(101, '1', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '11:47:02'),
(102, '1', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '12:10:19'),
(103, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '12:30:20'),
(104, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '12:51:48'),
(105, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '12:58:01'),
(106, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:00:56'),
(107, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:08:04'),
(108, '17', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:09:11'),
(109, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:09:41'),
(110, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:44:37'),
(111, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:46:30'),
(112, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:08:28'),
(113, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:10:47'),
(114, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:20:55'),
(115, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:30:00'),
(116, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:48:02'),
(117, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:26:51'),
(118, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:36:12'),
(119, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:38:25'),
(120, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:38:58'),
(121, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:30:30'),
(122, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:34:24'),
(123, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:35:15'),
(124, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:40:10'),
(125, '3', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:51:35'),
(126, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:53:48'),
(127, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:56:36'),
(128, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:58:16'),
(129, '1', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:59:54'),
(130, '1', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '11:48:42'),
(131, '3', 'Windows 7', 'Firefox', '27.122.61.118', '2024-04-01', '12:37:26'),
(132, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:28:42'),
(133, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:32:52'),
(134, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:37:10'),
(135, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:39:19'),
(136, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:40:00'),
(137, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:43:25'),
(138, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:43:50'),
(139, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:44:47'),
(140, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:45:46'),
(141, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:46:48'),
(142, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:48:21'),
(143, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:51:14'),
(144, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:56:50'),
(145, '18', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:57:44'),
(146, '18', 'Windows 10', 'Chrome', '103.199.200.182', '2024-04-09', '11:43:40'),
(147, '18', 'Windows 10', 'Chrome', '103.199.200.182', '2024-04-09', '13:59:34'),
(148, '18', 'Windows 7', 'Firefox', '103.199.202.93', '2024-04-19', '14:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company_description` text DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `trade_license` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0:inactive, 1:uploaded, 2:verified\r\n',
  `user_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `email`, `phone`, `password`, `name`, `company_description`, `address`, `state`, `district`, `trade_license`, `logo`, `status`, `user_type`) VALUES
(42, 'sagarayantalukdar@gmail.com', '8945012365', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'Tech Mahindra Jobs and Careers', 'Tech Mahindra represents the connected world, offering innovative and customer-centric information technology experiences, enabling Enterprises, Associates and the Society to Rise™. ', 'Pune, India', 'Manipur', 'Bishnupur', '../uploads/tradepdf/be1fc925f33a506ddba61edac88e18c0document.pdf', '../uploads/logoimage/be1fc925f33a506ddba61edac88e18c0Note.webp', 2, 'COMPANY'),
(43, 'smartbtr5@gmail.com', '9101525126', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'SIT International', 'The SmartBTR Institute of Technology International launched on 25th of February 2024 offers a range of courses and programs designed to cater to various aspects of IT education.', ' Gossaigaon, near St. John E.M. School, 783360,\r\nDist: Kokrajhar\r\nsitkokrajhar@gmail.com\r\n\r\n', 'Assam', 'Kokrajhar', '../uploads/tradepdf/66f5a0bec253f084b92b1e052ea1aae3demopdf.pdf', '../uploads/logoimage/66f5a0bec253f084b92b1e052ea1aae3sit-logo.png', 2, 'COMPANY');

-- --------------------------------------------------------

--
-- Table structure for table `company_login_details`
--

CREATE TABLE `company_login_details` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_login_details`
--

INSERT INTO `company_login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(26, '7', 'Windows 10', 'Chrome', '202.168.86.128', '2024-03-15', '10:56:02'),
(27, '14', 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:08:27'),
(28, '16', 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:10:44'),
(29, '7', 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '15:09:32'),
(30, '2', 'Windows 7', 'Firefox', '27.122.61.248', '2024-03-16', '15:10:01'),
(31, '7', 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:10:45'),
(32, '7', 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:13:01'),
(33, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '11:24:00'),
(34, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:04:09'),
(35, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:15:24'),
(36, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:39:37'),
(37, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:51:31'),
(38, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:54:15'),
(39, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '13:26:22'),
(40, '7', 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '16:42:04'),
(41, '7', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:06:10'),
(42, '7', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:24:41'),
(43, '7', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:34:12'),
(44, '1', 'Windows 10', 'Firefox', '103.199.180.169', '2024-03-19', '12:25:20'),
(45, '1', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '12:29:19'),
(46, '7', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:47:33'),
(47, '7', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '12:50:01'),
(48, '7', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '12:54:19'),
(49, '7', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '13:08:22'),
(50, '7', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '15:00:56'),
(51, '7', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '15:26:04'),
(52, '7', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '15:36:35'),
(53, '7', 'Windows 7', 'Firefox', '103.199.180.169', '2024-03-19', '15:42:46'),
(54, '1', 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '15:58:19'),
(55, '1', 'Windows 10', 'Firefox', '103.199.200.138', '2024-03-20', '17:09:40'),
(56, '7', 'Windows 7', 'Firefox', '27.122.61.212', '2024-03-22', '15:38:03'),
(57, '7', 'Android', 'Handheld Browser', '2401:4900:38cb:4f88:619:9ac6:9d9d:19d5', '2024-03-22', '19:04:16'),
(58, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '12:37:26'),
(59, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '12:48:09'),
(60, '19', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '13:10:04'),
(61, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '13:34:13'),
(62, '19', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '13:34:32'),
(63, '7', 'Android', 'Handheld Browser', '27.122.61.129', '2024-03-23', '13:56:39'),
(64, '7', 'Android', 'Handheld Browser', '27.122.61.129', '2024-03-23', '14:05:31'),
(65, '7', 'Windows 7', 'Firefox', '27.122.61.129', '2024-03-23', '14:17:19'),
(66, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '14:55:02'),
(67, '19', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:24:06'),
(68, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:27:27'),
(69, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:29:58'),
(70, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:37:29'),
(71, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:38:04'),
(72, '18', 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:41:05'),
(73, '7', 'Android', 'Handheld Browser', '2401:4900:38cf:1844:de68:478e:10e5:c5d0', '2024-03-26', '10:50:21'),
(74, '7', 'Windows 7', 'Firefox', '27.122.61.51', '2024-03-27', '11:55:40'),
(75, '7', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '11:56:38'),
(76, '7', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '11:56:40'),
(77, '7', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '15:24:22'),
(78, '7', 'Windows 10', 'Chrome', '27.122.61.51', '2024-03-27', '15:31:00'),
(79, '7', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '15:35:11'),
(80, '7', 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '15:42:43'),
(81, '7', 'Windows 7', 'Firefox', '27.122.61.51', '2024-03-27', '16:11:21'),
(82, '7', 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '12:04:23'),
(83, '7', 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '12:04:50'),
(84, '7', 'Windows 10', 'Chrome', '202.168.86.67', '2024-03-28', '14:43:12'),
(85, '7', 'Windows 10', 'Chrome', '202.168.86.67', '2024-03-28', '14:45:14'),
(86, '7', 'Windows 10', 'Chrome', '202.168.86.67', '2024-03-28', '14:49:20'),
(87, '7', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '14:52:15'),
(88, '7', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '15:12:33'),
(89, '7', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '15:17:40'),
(90, '7', 'Windows 10', 'Chrome', '202.168.86.67', '2024-03-28', '15:35:41'),
(91, '7', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '17:08:42'),
(92, '7', 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '17:13:22'),
(93, '7', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '11:08:19'),
(94, '7', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '11:29:01'),
(95, '22', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '11:32:29'),
(96, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '12:06:34'),
(97, '7', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '12:32:38'),
(98, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '12:47:45'),
(99, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:43:49'),
(100, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:46:01'),
(101, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:04:46'),
(102, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:43:52'),
(103, '9', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '15:21:08'),
(104, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:24:00'),
(105, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:27:33'),
(106, '7', 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '15:31:19'),
(107, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:37:34'),
(108, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:29:37'),
(109, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:37:59'),
(110, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:41:42'),
(111, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:44:41'),
(112, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:53:07'),
(113, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:55:47'),
(114, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:57:53'),
(115, '7', 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:59:33'),
(116, '7', 'Windows 7', 'Firefox', '27.122.61.118', '2024-04-01', '13:00:57'),
(117, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:24:24'),
(118, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:29:26'),
(119, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:33:17'),
(120, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:34:01'),
(121, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:35:57'),
(122, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:36:31'),
(123, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:37:30'),
(124, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:42:53'),
(125, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:46:31'),
(126, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:47:34'),
(127, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:49:11'),
(128, '42', 'Windows 7', 'Firefox', '27.122.61.118', '2024-04-01', '14:52:35'),
(129, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:54:39'),
(130, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:57:06'),
(131, '42', 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '15:04:07'),
(132, '43', 'Windows 10', 'Chrome', '202.168.86.35', '2024-04-06', '16:24:07'),
(133, '43', 'Windows 10', 'Chrome', '103.199.200.182', '2024-04-09', '13:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(2) NOT NULL,
  `counter_value` int(32) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `counter_value`) VALUES
(1, 3736);

-- --------------------------------------------------------

--
-- Table structure for table `email_verification`
--

CREATE TABLE `email_verification` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` int(100) NOT NULL,
  `verified` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_verification`
--

INSERT INTO `email_verification` (`id`, `email`, `otp`, `verified`) VALUES
(106, 'tlukfshs@gmail.com', 773753, 0),
(107, 'talukdarsankha@gmail.com', 200805, 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_applied`
--

CREATE TABLE `job_applied` (
  `id` int(100) NOT NULL,
  `applicant_id` int(100) NOT NULL,
  `status` int(10) NOT NULL COMMENT '	0:default,\r\n1:pending, 2:hired, 3:rejected, 4:interview\r\n',
  `job_id` int(11) NOT NULL,
  `company_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_applied`
--

INSERT INTO `job_applied` (`id`, `applicant_id`, `status`, `job_id`, `company_id`) VALUES
(23, 18, 4, 11, '42'),
(24, 18, 1, 15, '43');

-- --------------------------------------------------------

--
-- Table structure for table `job_listing`
--

CREATE TABLE `job_listing` (
  `id` int(11) NOT NULL,
  `company_id` mediumint(9) NOT NULL,
  `job_title` text NOT NULL,
  `job_location` text NOT NULL,
  `Jobdescription` text NOT NULL,
  `salary` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `district` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `jobtype` varchar(100) NOT NULL,
  `date_posted` date NOT NULL,
  `last_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `company_advertisement` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_listing`
--

INSERT INTO `job_listing` (`id`, `company_id`, `job_title`, `job_location`, `Jobdescription`, `salary`, `qualification`, `experience`, `state`, `district`, `category`, `jobtype`, `date_posted`, `last_date`, `status`, `company_advertisement`) VALUES
(11, 42, ' Software Engineer', 'Karnataka', '<div style=\"font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif !important;\" id=\"jobDescriptionTitle\"><h2 class=\"css-wpzt8u e1tiznh50\" style=\"color:rgb(45, 45, 45);font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Liberation Sans&quot;, Roboto, Noto, sans-serif;font-size:1.25rem;line-height:1.5;margin:1.5rem 0px 0px;padding:0px;\" tabindex=\"-1\" id=\"jobDescriptionTitleHeading\"><strong>Full job description</strong></h2></div><div class=\"jobsearch-jobDescriptionText jobsearch-JobComponent-description css-kqe8pq eu4oa1w0\" style=\"box-sizing:border-box;color:rgb(89, 89, 89);font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif !important;font-size:0.875rem;line-height:1.5rem;margin:1rem 0px 0px;min-width:0px;overflow-wrap:break-word;\" id=\"jobDescriptionText\"><ul style=\"display:revert;font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif !important;font-size:inherit;list-style-type:disc;margin-bottom:revert;margin-right:revert;margin-top:revert;padding:revert;\"><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(89, 89, 89);display:revert;font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style-type:disc;margin-bottom:revert;margin-right:revert;margin-top:revert;orphans:2;padding:revert;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><p style=\"margin-left:revert;\">Manage all process raw material and maintenance spares items inward and outward from stores.</p></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(89, 89, 89);display:revert;font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style-type:disc;margin-bottom:revert;margin-right:revert;margin-top:revert;orphans:2;padding:revert;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><p style=\"margin-left:revert;\">Submit materials documents to accounts, purchase and ensure record updation in system from stores.</p></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(89, 89, 89);display:revert;font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style-type:disc;margin-bottom:revert;margin-right:revert;margin-top:revert;orphans:2;padding:revert;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><p style=\"margin-left:revert;\">Daily record updation in system for every inward and outward of material.</p></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(89, 89, 89);display:revert;font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style-type:disc;margin-bottom:revert;margin-right:revert;margin-top:revert;orphans:2;padding:revert;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><p style=\"margin-left:revert;\">Ensure incoming material quality check and records as per ISO standards.</p></li></ul></div>', 'xxxxx ', 'Class 10+2 + D.El.Ed', '3', 'Himachal Pradesh', 'Bilaspur', 'Retail & Wholesale', 'fresher', '2024-04-01', '2024-04-01', 0, '../uploads/advertisementPdf/f81145263d1d40276314fcb7120822b4document.pdf'),
(12, 42, 'Lead Generation Specialist', 'Remote', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(89,89,89);font-family:&quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">We have an exciting opportunity for experienced Call Center Agents and Individuals to work on an Australian Sales Process. The primary focus will be on areas such as Lead Generation for Energy Saving Programs, Heat Pump Sales, Air-Conditioner Sales, Loans, or Solar.</span></span></p>', 'xxxx xxx ', 'Graduate Passed', '4', 'Jammu and Kashmir', 'Anantnag', 'Retail & Wholesale', 'contract', '2024-04-01', '2024-05-15', 0, '../uploads/advertisementPdf/17209b5f1df3edba5d29f19f56062250document.pdf'),
(15, 43, 'Front Desk Executive!', 'Location: SmartBTR Institute of Technology International,\r\n near CNI church,\r\n Gossaigaon, Assam.', '<p>📜 Minimum Requirement: 12th pass<br>🌐 Languages Known: English, Hindi, &amp; Assamese (Knowledge of Bodo preferred)</p><p>💼 Responsibilities:<br>- Welcoming guests and visitors<br>- Managing phone calls and inquiries<br>- Assisting with administrative tasks</p><p>💰 Salary: Starting at 6000, with potential for gradual increases</p><p>📞 Contact: 9101525126<br>📧 Email: sitkokrajhar@gmail.com</p><p>If you\'re enthusiastic, customer-oriented, and ready to grow with us, don\'t miss this opportunity! Send your resume today!&nbsp;</p>', '6000', 'Others', '1', 'Assam', 'Kokrajhar', 'Information Technology', 'fulltime', '2024-04-06', '2024-04-29', 0, '../uploads/advertisementPdf/0d50663575f2e4f35a51d2ba839799d5sit-advertisement.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification` text NOT NULL,
  `userType` varchar(20) NOT NULL,
  `interview_date` date NOT NULL,
  `venue` text DEFAULT NULL,
  `interview_time` varchar(10) DEFAULT NULL,
  `notification_date` date DEFAULT NULL,
  `notification_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `notification`, `userType`, `interview_date`, `venue`, `interview_time`, `notification_date`, `notification_time`, `status`) VALUES
(53, 18, 'You have been called for an interview for the post of  Software Engineer at  Tech Mahindra Jobs and Careers on 19-Apr-2024 at 42:45254 PM.', 'APPLICANT', '2024-04-19', 'er ', '42:45254 P', '2024-04-01', '02:47:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `user_image` text DEFAULT NULL,
  `user_type` varchar(200) DEFAULT 'USER',
  `added_date` date DEFAULT NULL,
  `added_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 inactive, 1 active, 2 banned, 3 left'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `surname`, `phone`, `user_image`, `user_type`, `added_date`, `added_time`, `status`) VALUES
(94, 'ADMIN', 'admin@btrjobportal.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'Admin', 'btrjob', '9562875622', '../uploads/profileimage/emptyimg.jpg', 'ADMIN', '2024-02-22', '13:14:00', 1),
(95, 'COUNSELLOR', 'counsellor@btrjobportal.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'COUNSELLOR', 'COUNSELLOR', '9101525126', '../uploads/profileimage/cityLiveBroadcast.PNG', 'COUNSELLOR', '2024-02-22', '13:44:10', 1),
(97, 'pranjal12ory', 'pranjal12roy@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'pranjal', 'roy', '8134589745', '../uploads/profileimage/Hydrangeas.jpg', 'ADMIN', '2024-03-11', '13:47:56', 1),
(98, 'sc', 'sagarayantaluksdsdar@gmail.com', 'd0821f958b66547d97d32399c85f5753f28747cdcc12f61b5ab88a3e4180dd8449d36aa3f3b1fac2b48e2aa993c520bda6266d446e0c24747e1834d193ce61fe', 'sagar', 'das', '8134251463', '../uploads/users/be2efd21bdbca0b7901423d723a8eaeadummy-image-300x298.jpg', 'ADMIN', '2024-03-27', '16:57:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login_details`
--

CREATE TABLE `user_login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `os` varchar(200) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `login_date` date DEFAULT NULL,
  `login_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_login_details`
--

INSERT INTO `user_login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`, `status`) VALUES
(26, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-10-05', '11:36:22', 1),
(27, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-10-25', '10:51:06', 1),
(28, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-03', '13:34:38', 1),
(29, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-04', '10:21:43', 1),
(30, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-11', '16:32:16', 1),
(31, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-15', '12:44:35', 1),
(32, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-30', '13:09:28', 1),
(33, 18, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-30', '13:17:36', 1),
(34, 18, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-30', '13:18:06', 1),
(35, 18, 'Windows 7', 'Firefox', '127.0.0.1', '2023-11-30', '13:39:58', 1),
(36, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-12-11', '14:07:31', 1),
(37, 18, 'Windows 7', 'Firefox', '127.0.0.1', '2023-12-11', '14:08:22', 1),
(38, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-12-11', '14:09:02', 1),
(39, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-12-12', '13:41:14', 1),
(40, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-12-12', '13:42:46', 1),
(41, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-12-28', '12:19:51', 1),
(42, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2024-01-11', '14:03:53', 1),
(43, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2024-01-19', '16:36:17', 1),
(44, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '11:28:27', 1),
(45, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '11:35:09', 1),
(46, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '12:23:55', 1),
(47, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '12:42:28', 1),
(48, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '12:53:11', 1),
(49, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '12:53:48', 1),
(50, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '12:58:23', 1),
(51, 27, 'Windows 10', 'Chrome', '::1', '2024-01-23', '12:59:10', 1),
(52, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '13:14:57', 1),
(53, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '13:35:52', 1),
(54, 31, 'Windows 10', 'Chrome', '::1', '2024-01-23', '13:37:07', 1),
(55, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '13:40:23', 1),
(56, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '13:46:15', 1),
(57, 33, 'Windows 10', 'Chrome', '::1', '2024-01-23', '13:47:56', 1),
(58, 39, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:19:48', 1),
(59, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:32:50', 1),
(60, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:46:35', 1),
(61, 40, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:47:44', 1),
(62, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:48:19', 1),
(63, 40, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:48:45', 1),
(64, 1, 'Windows 10', 'Chrome', '::1', '2024-01-23', '15:53:39', 1),
(65, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '11:06:33', 1),
(66, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '11:22:40', 1),
(67, 42, 'Windows 10', 'Chrome', '::1', '2024-01-24', '11:23:10', 1),
(68, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '12:17:05', 1),
(69, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '12:53:10', 1),
(70, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '13:05:05', 1),
(71, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2024-01-24', '13:12:46', 1),
(72, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '15:03:36', 1),
(73, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '15:04:24', 1),
(74, 56, 'Windows 10', 'Chrome', '::1', '2024-01-24', '15:04:57', 1),
(75, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '15:05:37', 1),
(76, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '15:53:37', 1),
(77, 57, 'Windows 10', 'Chrome', '::1', '2024-01-24', '15:54:36', 1),
(78, 1, 'Windows 10', 'Chrome', '::1', '2024-01-24', '16:03:25', 1),
(79, 1, 'Windows 10', 'Chrome', '::1', '2024-01-25', '10:52:56', 1),
(80, 60, 'Windows 10', 'Chrome', '::1', '2024-01-25', '10:59:42', 1),
(81, 1, 'Windows 10', 'Chrome', '::1', '2024-01-25', '11:21:49', 1),
(82, 60, 'Windows 10', 'Chrome', '::1', '2024-01-25', '11:38:08', 1),
(83, 1, 'Windows 10', 'Chrome', '::1', '2024-01-25', '13:25:00', 1),
(84, 60, 'Windows 10', 'Chrome', '::1', '2024-01-25', '13:26:34', 1),
(85, 1, 'Windows 10', 'Chrome', '::1', '2024-01-25', '15:20:58', 1),
(86, 60, 'Windows 10', 'Chrome', '::1', '2024-01-25', '16:42:02', 1),
(87, 1, 'Windows 10', 'Chrome', '::1', '2024-01-25', '16:43:59', 1),
(88, 1, 'Windows 10', 'Chrome', '::1', '2024-01-27', '10:52:40', 1),
(89, 1, 'Windows 10', 'Chrome', '::1', '2024-01-29', '11:54:03', 1),
(90, 1, 'Windows 10', 'Chrome', '::1', '2024-01-30', '10:53:10', 1),
(91, 1, 'Windows 10', 'Chrome', '::1', '2024-01-31', '11:00:28', 1),
(92, 1, 'Windows 10', 'Chrome', '::1', '2024-02-01', '10:59:10', 1),
(93, 60, 'Windows 10', 'Chrome', '::1', '2024-02-01', '13:24:00', 1),
(94, 60, 'Windows 10', 'Chrome', '::1', '2024-02-01', '13:32:11', 1),
(95, 1, 'Windows 10', 'Chrome', '::1', '2024-02-01', '13:32:52', 1),
(96, 1, 'Windows 10', 'Chrome', '::1', '2024-02-02', '11:19:06', 1),
(97, 60, 'Windows 10', 'Chrome', '::1', '2024-02-02', '11:43:02', 1),
(98, 60, 'Windows 10', 'Chrome', '::1', '2024-02-02', '13:06:31', 1),
(99, 1, 'Windows 10', 'Chrome', '::1', '2024-02-02', '13:07:08', 1),
(100, 1, 'Windows 10', 'Chrome', '::1', '2024-02-02', '13:59:00', 1),
(101, 1, 'Windows 10', 'Chrome', '::1', '2024-02-05', '11:04:11', 1),
(102, 1, 'Windows 10', 'Chrome', '::1', '2024-02-05', '11:27:29', 1),
(103, 1, 'Windows 10', 'Chrome', '::1', '2024-02-06', '10:47:27', 1),
(104, 1, 'Windows 10', 'Chrome', '::1', '2024-02-06', '14:03:51', 1),
(105, 1, 'Windows 10', 'Chrome', '::1', '2024-02-07', '10:57:26', 1),
(106, 1, 'Windows 10', 'Chrome', '::1', '2024-02-07', '14:53:55', 1),
(107, 1, 'Windows 10', 'Chrome', '::1', '2024-02-08', '11:27:55', 1),
(108, 1, 'Windows 10', 'Chrome', '::1', '2024-02-09', '12:03:49', 1),
(109, 1, 'Windows 10', 'Chrome', '::1', '2024-02-10', '10:51:32', 1),
(110, 1, 'Windows 10', 'Chrome', '::1', '2024-02-12', '11:13:18', 1),
(111, 70, 'Windows 10', 'Chrome', '::1', '2024-02-12', '11:27:39', 1),
(112, 1, 'Windows 10', 'Chrome', '::1', '2024-02-13', '10:53:20', 1),
(113, 1, 'Windows 10', 'Chrome', '::1', '2024-02-15', '10:58:59', 1),
(114, 1, 'Windows 10', 'Chrome', '::1', '2024-02-15', '15:36:38', 1),
(115, 1, 'Windows 10', 'Chrome', '::1', '2024-02-15', '16:46:24', 1),
(116, 1, 'Windows 10', 'Chrome', '::1', '2024-02-15', '16:54:23', 1),
(117, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:43:46', 1),
(118, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:52:36', 1),
(119, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:53:00', 1),
(120, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:54:08', 1),
(121, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:56:18', 1),
(122, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:56:31', 1),
(123, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '11:59:10', 1),
(124, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '15:10:40', 1),
(125, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '15:32:21', 1),
(126, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '15:36:10', 1),
(127, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '15:43:42', 1),
(128, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:01:26', 1),
(129, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:04:39', 1),
(130, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:05:46', 1),
(131, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:06:16', 1),
(132, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:06:55', 1),
(133, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:28:01', 1),
(134, 1, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:29:06', 1),
(135, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:32:13', 1),
(136, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:32:40', 1),
(137, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:33:26', 1),
(138, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:33:58', 1),
(139, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:35:41', 1),
(140, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:44:38', 1),
(141, 2, 'Windows 10', 'Chrome', '::1', '2024-02-16', '16:47:12', 1),
(142, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '11:40:55', 1),
(143, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '11:41:16', 1),
(144, 6, 'Windows 10', 'Chrome', '::1', '2024-02-17', '11:42:13', 1),
(145, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '11:43:25', 1),
(146, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '11:44:57', 1),
(147, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '11:46:36', 1),
(148, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '12:08:30', 1),
(149, 71, 'Windows 10', 'Chrome', '::1', '2024-02-17', '12:26:38', 1),
(150, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '12:37:08', 1),
(151, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '12:44:42', 1),
(152, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:05:01', 1),
(153, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:13:22', 1),
(154, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:13:43', 1),
(155, 71, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:18:01', 1),
(156, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:20:34', 1),
(157, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:28:23', 1),
(158, 71, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:38:02', 1),
(159, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:42:26', 1),
(160, 71, 'Windows 10', 'Chrome', '::1', '2024-02-17', '13:58:22', 1),
(161, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:01:27', 1),
(162, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:08:07', 1),
(163, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:08:48', 1),
(164, 71, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:10:11', 1),
(165, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:14:41', 1),
(166, 71, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:21:40', 1),
(167, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:23:28', 1),
(168, 7, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:24:39', 1),
(169, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:52:02', 1),
(170, 1, 'Windows 10', 'Chrome', '::1', '2024-02-17', '14:58:09', 1),
(171, 1, 'Windows 10', 'Chrome', '::1', '2024-02-19', '12:52:58', 1),
(172, 1, 'Windows 10', 'Chrome', '::1', '2024-02-19', '12:53:38', 1),
(173, 1, 'Windows 10', 'Chrome', '::1', '2024-02-20', '11:04:25', 1),
(174, 1, 'Windows 10', 'Chrome', '::1', '2024-02-20', '11:35:42', 1),
(175, 7, 'Windows 10', 'Chrome', '::1', '2024-02-20', '11:51:02', 1),
(176, 1, 'Windows 10', 'Chrome', '::1', '2024-02-20', '11:51:33', 1),
(177, 7, 'Windows 10', 'Chrome', '::1', '2024-02-20', '12:14:19', 1),
(178, 1, 'Windows 10', 'Chrome', '::1', '2024-02-20', '12:18:23', 1),
(179, 7, 'Windows 10', 'Chrome', '::1', '2024-02-20', '12:52:38', 1),
(180, 1, 'Windows 10', 'Chrome', '::1', '2024-02-20', '12:53:41', 1),
(181, 1, 'Windows 10', 'Chrome', '::1', '2024-02-21', '10:55:07', 1),
(182, 7, 'Windows 10', 'Chrome', '::1', '2024-02-21', '11:10:09', 1),
(183, 92, 'Windows 10', 'Chrome', '::1', '2024-02-21', '11:14:00', 1),
(184, 1, 'Windows 10', 'Chrome', '::1', '2024-02-21', '11:15:53', 1),
(185, 1, 'Windows 10', 'Chrome', '::1', '2024-02-21', '11:20:23', 1),
(186, 1, 'Windows 10', 'Chrome', '::1', '2024-02-22', '10:57:39', 1),
(187, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '12:13:38', 1),
(188, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '12:14:51', 1),
(189, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '12:36:35', 1),
(190, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '13:05:02', 1),
(191, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '13:28:50', 1),
(192, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '14:12:39', 1),
(193, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-22', '15:15:20', 1),
(194, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-23', '11:33:36', 1),
(195, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-24', '12:06:30', 1),
(196, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-24', '12:17:30', 1),
(197, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-24', '13:03:32', 1),
(198, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-29', '14:39:47', 1),
(199, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-02-29', '15:42:04', 1),
(200, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-01', '11:05:10', 1),
(201, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-01', '14:43:48', 1),
(202, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-01', '15:31:39', 1),
(203, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-04', '19:20:20', 1),
(204, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-05', '10:48:26', 1),
(205, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-05', '10:58:12', 1),
(206, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-05', '19:50:35', 1),
(207, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-05', '20:09:00', 1),
(208, 94, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-05', '20:18:21', 1),
(209, 95, 'Windows 10', 'Firefox', '127.0.0.1', '2024-03-05', '20:22:39', 1),
(210, 94, 'Windows 7', 'Firefox', '27.122.61.25', '2024-03-06', '11:12:10', 1),
(211, 94, 'Windows 10', 'Chrome', '27.122.61.25', '2024-03-06', '11:54:41', 1),
(212, 94, 'Windows 10', 'Chrome', '27.122.61.25', '2024-03-06', '12:54:19', 1),
(213, 94, 'Android', 'Handheld Browser', '2409:40e6:1:a835:8000::', '2024-03-06', '13:04:35', 1),
(214, 94, 'Windows 10', 'Chrome', '27.122.61.25', '2024-03-06', '13:05:21', 1),
(215, 95, 'Android', 'Handheld Browser', '2409:40e6:1:a835:8000::', '2024-03-06', '13:06:38', 1),
(216, 94, 'Windows 7', 'Firefox', '27.122.61.25', '2024-03-06', '14:17:54', 1),
(217, 94, 'Windows 7', 'Firefox', '27.122.61.25', '2024-03-06', '14:32:56', 1),
(218, 94, 'Windows 7', 'Firefox', '27.122.61.25', '2024-03-06', '14:56:05', 1),
(219, 94, 'Windows 10', 'Chrome', '27.122.61.25', '2024-03-06', '16:15:32', 1),
(220, 94, 'Windows 7', 'Firefox', '27.122.61.25', '2024-03-06', '16:25:23', 1),
(221, 94, 'Windows 10', 'Chrome', '27.122.61.25', '2024-03-06', '16:27:12', 1),
(222, 94, 'Windows 10', 'Chrome', '27.122.61.25', '2024-03-06', '16:31:00', 1),
(223, 94, 'Windows 10', 'Firefox', '27.122.61.25', '2024-03-06', '16:46:10', 1),
(224, 95, 'Android', 'Handheld Browser', '2409:40e6:15:14e4:8000::', '2024-03-07', '15:25:28', 1),
(225, 94, 'Windows 10', 'Chrome', '103.199.180.132', '2024-03-08', '11:11:04', 1),
(226, 94, 'Windows 7', 'Firefox', '103.199.180.132', '2024-03-08', '12:12:32', 1),
(227, 94, 'Windows 10', 'Chrome', '103.199.180.132', '2024-03-08', '13:30:25', 1),
(228, 96, 'Windows 10', 'Chrome', '103.199.180.132', '2024-03-08', '14:04:23', 1),
(229, 94, 'Windows 10', 'Chrome', '103.199.180.132', '2024-03-08', '16:26:34', 1),
(230, 94, 'Windows 7', 'Firefox', '103.199.180.132', '2024-03-08', '16:35:05', 1),
(231, 94, 'Windows 7', 'Firefox', '202.168.86.77', '2024-03-09', '16:09:17', 1),
(232, 94, 'Windows 10', 'Chrome', '202.168.86.77', '2024-03-09', '16:23:47', 1),
(233, 94, 'Windows 10', 'Chrome', '202.168.86.77', '2024-03-09', '16:25:42', 1),
(234, 94, 'Windows 7', 'Firefox', '202.168.86.77', '2024-03-09', '16:29:07', 1),
(235, 94, 'Windows 10', 'Chrome', '202.168.86.77', '2024-03-09', '16:29:10', 1),
(236, 94, 'Android', 'Handheld Browser', '202.168.86.77', '2024-03-09', '16:34:50', 1),
(237, 94, 'Android', 'Handheld Browser', '202.168.86.77', '2024-03-09', '16:50:33', 1),
(238, 94, 'Android', 'Handheld Browser', '202.168.86.77', '2024-03-09', '16:53:29', 1),
(239, 94, 'Android', 'Handheld Browser', '202.168.86.77', '2024-03-09', '17:02:08', 1),
(240, 94, 'Windows 7', 'Firefox', '202.168.86.77', '2024-03-09', '17:03:45', 1),
(241, 94, 'Windows 7', 'Firefox', '202.168.86.77', '2024-03-09', '17:08:14', 1),
(242, 94, 'Windows 7', 'Firefox', '202.168.86.77', '2024-03-09', '17:18:24', 1),
(243, 94, 'Windows 7', 'Firefox', '27.122.61.140', '2024-03-11', '13:26:28', 1),
(244, 97, 'Windows 7', 'Firefox', '27.122.61.140', '2024-03-11', '14:20:00', 1),
(245, 94, 'Windows 7', 'Firefox', '27.122.61.140', '2024-03-11', '14:24:07', 1),
(246, 94, 'Windows 7', 'Firefox', '27.122.61.140', '2024-03-11', '14:25:32', 1),
(247, 97, 'Windows 7', 'Firefox', '27.122.61.140', '2024-03-11', '14:43:39', 1),
(248, 94, 'Windows 7', 'Firefox', '27.122.61.140', '2024-03-11', '14:58:07', 1),
(249, 94, 'Windows 10', 'Chrome', '103.199.200.95', '2024-03-12', '11:21:16', 1),
(250, 94, 'Windows 10', 'Chrome', '103.199.200.95', '2024-03-12', '12:17:29', 1),
(251, 94, 'Android', 'Handheld Browser', '103.199.200.95', '2024-03-12', '12:26:09', 1),
(252, 94, 'Android', 'Handheld Browser', '103.199.200.95', '2024-03-12', '12:31:30', 1),
(253, 94, 'Windows 7', 'Firefox', '103.199.200.95', '2024-03-12', '12:37:57', 1),
(254, 94, 'Android', 'Handheld Browser', '103.199.200.95', '2024-03-12', '12:52:49', 1),
(255, 94, 'Windows 10', 'Chrome', '103.199.200.95', '2024-03-12', '13:34:10', 1),
(256, 94, 'Windows 10', 'Firefox', '103.199.200.95', '2024-03-12', '13:35:39', 1),
(257, 94, 'Android', 'Handheld Browser', '103.199.200.95', '2024-03-12', '14:05:20', 1),
(258, 94, 'Windows 10', 'Chrome', '103.199.180.137', '2024-03-13', '11:13:55', 1),
(259, 94, 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:16:43', 1),
(260, 94, 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:21:22', 1),
(261, 94, 'Windows 7', 'Firefox', '103.199.200.185', '2024-03-15', '12:34:40', 1),
(262, 94, 'Windows 10', 'Chrome', '103.199.200.185', '2024-03-15', '12:49:03', 1),
(263, 94, 'Windows 10', 'Chrome', '103.199.200.185', '2024-03-15', '13:38:17', 1),
(264, 94, 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '15:09:01', 1),
(265, 95, 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '15:11:29', 1),
(266, 94, 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '16:40:07', 1),
(267, 94, 'Windows 10', 'Chrome', '27.122.61.22', '2024-03-15', '16:42:01', 1),
(268, 94, 'Windows 7', 'Firefox', '27.122.61.137', '2024-03-16', '11:21:16', 1),
(269, 94, 'Windows 7', 'Firefox', '27.122.61.137', '2024-03-16', '11:26:24', 1),
(270, 94, 'Windows 7', 'Firefox', '27.122.61.137', '2024-03-16', '11:39:06', 1),
(271, 94, 'Windows 7', 'Firefox', '27.122.61.137', '2024-03-16', '14:10:56', 1),
(272, 94, 'Windows 10', 'Firefox', '202.168.86.219', '2024-03-16', '14:15:01', 1),
(273, 94, 'Windows 10', 'Firefox', '202.168.86.146', '2024-03-16', '14:21:40', 1),
(274, 94, 'Windows 10', 'Chrome', '202.168.86.146', '2024-03-16', '14:43:21', 1),
(275, 94, 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '14:55:39', 1),
(276, 94, 'Windows 7', 'Firefox', '27.122.61.248', '2024-03-16', '15:15:55', 1),
(277, 94, 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '15:46:14', 1),
(278, 94, 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:09:52', 1),
(279, 94, 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:12:03', 1),
(280, 94, 'Windows 10', 'Chrome', '27.122.61.248', '2024-03-16', '16:27:29', 1),
(281, 94, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '11:43:21', 1),
(282, 95, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '11:54:56', 1),
(283, 94, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:28:13', 1),
(284, 95, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:44:33', 1),
(285, 94, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:45:06', 1),
(286, 94, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '12:57:19', 1),
(287, 94, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '13:17:53', 1),
(288, 94, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '16:40:54', 1),
(289, 95, 'Windows 10', 'Chrome', '27.122.61.24', '2024-03-18', '16:41:29', 1),
(290, 94, 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '11:33:28', 1),
(291, 94, 'Windows 10', 'Firefox', '103.199.180.169', '2024-03-19', '12:25:46', 1),
(292, 94, 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:49:44', 1),
(293, 94, 'Windows 10', 'Chrome', '103.199.180.169', '2024-03-19', '12:51:44', 1),
(294, 95, 'Windows 10', 'Chrome', '103.199.200.138', '2024-03-20', '11:12:08', 1),
(295, 94, 'Windows 10', 'Chrome', '103.199.200.138', '2024-03-20', '11:17:42', 1),
(296, 94, 'Windows 10', 'Chrome', '103.199.200.35', '2024-03-21', '14:57:34', 1),
(297, 94, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '11:08:34', 1),
(298, 95, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '11:44:46', 1),
(299, 94, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '12:43:38', 1),
(300, 94, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '13:08:43', 1),
(301, 94, 'Android', 'Handheld Browser', '27.122.61.129', '2024-03-23', '13:41:25', 1),
(302, 94, 'Android', 'Handheld Browser', '27.122.61.129', '2024-03-23', '14:09:44', 1),
(303, 94, 'Windows 7', 'Firefox', '27.122.61.129', '2024-03-23', '14:15:06', 1),
(304, 94, 'Windows 7', 'Firefox', '27.122.61.129', '2024-03-23', '14:18:05', 1),
(305, 94, 'Windows 7', 'Firefox', '27.122.61.129', '2024-03-23', '14:57:18', 1),
(306, 94, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:26:12', 1),
(307, 94, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:37:48', 1),
(308, 94, 'Windows 10', 'Chrome', '27.122.61.129', '2024-03-23', '16:38:18', 1),
(309, 94, 'Windows 10', 'Chrome', '59.97.157.222', '2024-03-26', '19:24:28', 1),
(310, 94, 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '15:43:26', 1),
(311, 94, 'Windows 7', 'Firefox', '27.122.61.51', '2024-03-27', '16:21:01', 1),
(312, 94, 'Android', 'Handheld Browser', '27.122.61.51', '2024-03-27', '16:29:54', 1),
(313, 94, 'Windows 10', 'Firefox', '27.122.61.51', '2024-03-27', '16:59:28', 1),
(314, 94, 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '11:37:23', 1),
(315, 94, 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '12:05:05', 1),
(316, 94, 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '12:10:44', 1),
(317, 94, 'Android', 'Handheld Browser', '202.168.86.67', '2024-03-28', '14:48:20', 1),
(318, 94, 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '14:55:06', 1),
(319, 94, 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '15:16:12', 1),
(320, 94, 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '16:48:05', 1),
(321, 94, 'Windows 7', 'Firefox', '202.168.86.67', '2024-03-28', '17:10:37', 1),
(322, 94, 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '11:07:34', 1),
(323, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '11:17:03', 1),
(324, 94, 'Windows 10', 'Chrome', '27.122.61.144', '2024-03-29', '11:19:04', 1),
(325, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '11:33:10', 1),
(326, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '12:56:49', 1),
(327, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '13:00:27', 1),
(328, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '14:10:24', 1),
(329, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:23:48', 1),
(330, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '15:50:53', 1),
(331, 94, 'Windows 7', 'Firefox', '27.122.61.144', '2024-03-29', '16:32:39', 1),
(332, 94, 'Android', 'Handheld Browser', '2401:4900:38c4:5b5e:9328:9f7:bf98:280b', '2024-03-29', '20:11:37', 1),
(333, 94, 'Windows 10', 'Chrome', '27.122.61.143', '2024-03-30', '12:08:13', 1),
(334, 94, 'Windows 10', 'Chrome', '27.122.61.143', '2024-03-30', '13:00:49', 1),
(335, 94, 'Windows 10', 'Chrome', '27.122.61.143', '2024-03-30', '16:03:57', 1),
(336, 94, 'Windows 7', 'Firefox', '27.122.61.118', '2024-04-01', '12:23:30', 1),
(337, 94, 'Windows 7', 'Firefox', '27.122.61.118', '2024-04-01', '12:49:11', 1),
(338, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:24:07', 1),
(339, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:28:06', 1),
(340, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:29:00', 1),
(341, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:33:38', 1),
(342, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:34:54', 1),
(343, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:36:14', 1),
(344, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:39:42', 1),
(345, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:42:07', 1),
(346, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '14:44:05', 1),
(347, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '16:31:57', 1),
(348, 94, 'Windows 10', 'Chrome', '27.122.61.118', '2024-04-01', '16:33:33', 1),
(349, 94, 'Windows 10', 'Chrome', '103.199.200.100', '2024-04-02', '12:02:03', 1),
(350, 94, 'Windows 10', 'Chrome', '202.168.86.35', '2024-04-06', '16:23:40', 1),
(351, 94, 'Android', 'Handheld Browser', '2401:4900:38ce:5e73:f9b0:aee7:35da:d291', '2024-04-06', '16:52:55', 1),
(352, 94, 'Windows 10', 'Chrome', '103.199.200.182', '2024-04-09', '11:42:21', 1),
(353, 94, 'Windows 10', 'Chrome', '103.199.202.168', '2024-04-17', '13:15:22', 1),
(354, 94, 'Windows 10', 'Chrome', '103.199.202.81', '2024-04-18', '10:58:46', 1),
(355, 95, 'Android', 'Handheld Browser', '2409:40e6:3e:ee5a:8000::', '2024-04-18', '20:14:44', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_login_details`
--
ALTER TABLE `applicant_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_login_details`
--
ALTER TABLE `company_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_verification`
--
ALTER TABLE `email_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applied`
--
ALTER TABLE `job_applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_listing`
--
ALTER TABLE `job_listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login_details`
--
ALTER TABLE `user_login_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `applicant_login_details`
--
ALTER TABLE `applicant_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `company_login_details`
--
ALTER TABLE `company_login_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `job_applied`
--
ALTER TABLE `job_applied`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `job_listing`
--
ALTER TABLE `job_listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `user_login_details`
--
ALTER TABLE `user_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
