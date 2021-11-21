-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 05:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ap_id` int(3) NOT NULL,
  `cust_id` int(6) NOT NULL,
  `doc` date NOT NULL,
  `toc` time NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `doctor` text NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ap_id`, `cust_id`, `doc`, `toc`, `fname`, `lname`, `email`, `age`, `doctor`, `reason`) VALUES
(1, 120001, '2020-11-26', '01:06:32', 'Ravi', 'Punar', 'ravipunar@gmail.com', 24, 'Dr. Himalaya Puri Goswami', 'Headache'),
(2, 120001, '2020-11-26', '01:10:45', 'Ravi', 'Punar', 'ravipunar@gmail.com', 24, 'Dr. Himalaya Puri Goswami', 'Headache'),
(3, 120002, '2020-11-26', '01:11:25', 'Subhadip ', 'Mahapatra', 'iamsubhadipmahapatra@gmail.com', 22, 'Dr. Ashish Jacob', 'Stomach Ache'),
(4, 120004, '2020-11-26', '01:27:20', 'Anima', 'Kumari', 'anima20sinha@gmail.com', 21, 'Dr. Anurav Mathur', 'Back Ache'),
(5, 120005, '2020-11-26', '02:05:03', 'Abhishek', 'Singh', 'abhikumar@ymail.com', 24, 'Dr. Ankit Bohra', 'Nausea'),
(6, 120006, '2020-11-26', '02:49:10', 'Arvind', 'Punar', 'avi.punar@gmail.com', 26, 'Dr. Himalaya Puri Goswami', 'Stomach Illness'),
(7, 120004, '2020-11-26', '02:52:10', 'Syma', 'Kumari', 's.sumari@ymail.com', 15, 'Dr. Ankit Bohra', 'Dizzyness,Nausea'),
(8, 120001, '2020-11-26', '04:57:14', 'Ravi', 'Punar', 'ravipunar@gmail.com', 24, 'Dr. Anurav Mathur', 'Vomiting');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `bill_no` int(6) NOT NULL,
  `cust_id` int(6) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `dop` date NOT NULL,
  `top` time NOT NULL,
  `item_purchased` varchar(30) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cust_id` int(6) NOT NULL,
  `dop` date NOT NULL,
  `top` time NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `zip` int(6) NOT NULL,
  `card_type` varchar(15) NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `card_num` varchar(100) NOT NULL,
  `card_exp` int(4) NOT NULL,
  `card_cvv` int(3) NOT NULL,
  `amt_paid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cust_id`, `dop`, `top`, `fname`, `lname`, `email`, `address`, `state`, `country`, `zip`, `card_type`, `card_name`, `card_num`, `card_exp`, `card_cvv`, `amt_paid`) VALUES
(1, 120001, '2020-11-25', '08:23:18', 'Ravi', 'Punar', 'ravipunar@gmail.com', 'Om Villa, 281, Lane no. 12', 'Rajasthan', 'India', 342003, 'Debit Card', 'RAVI PUNAR', '2147483647', 1234, 123, 10000),
(2, 120002, '2020-11-25', '08:26:00', 'Subhadip ', 'Mahapatra', 'iamsubhadipmahapatra@gmail.com', 'Sabudara, Medinapore', 'West Bengal', 'India', 684321, 'Credit Card', 'SUBHADIP MAHAPATRA', '2147483647', 3412, 123, 1500),
(3, 120001, '2020-11-25', '11:00:39', 'Ravi', 'Punar', 'ravipunar@gmail.com', 'Om Villa, 281, Lane no. 12', 'Rajasthan', 'India', 342003, 'Credit Card', 'RAVI PUNAR', '2147483647', 1234, 123, 1500),
(4, 120001, '2020-11-25', '11:01:59', 'Ravi', 'Punar', 'ravipunar@gmail.com', 'Om Villa, 281, Lane no. 12, Du', 'Rajasthan', 'India', 342003, 'Debit Card', 'RAVI PUNAR', '2147483647', 2112, 543, 1500),
(5, 120002, '2020-11-25', '11:50:36', 'Subhadip ', 'Mahapatra', 'iamsubhadipmahapatra@gmail.com', 'Sabudara, Medinapore', 'West Bengal', 'India', 654874, 'Credit Card', 'SUBHADIP MAHAPATRA', '2147483647', 2342, 123, 10000),
(6, 120001, '2020-11-25', '12:14:16', 'Ravi', 'Punar', 'ravipunar@gmail.com', 'Om Villa, 281, Lane no. 12', 'Rajasthan', 'India', 342003, 'Credit Card', 'RAVI PUNAR', '1234132412341324', 2345, 123, 1500),
(7, 120004, '2020-11-25', '07:07:16', 'Anima', 'Kumari', 'anima20sinha@gmail.com', 'Patna', 'Gujarat', 'India', 342003, 'Debit Card', 'ANIMA KUMARI', '43128560879', 3221, 342, 1500),
(8, 120003, '2020-11-25', '07:22:32', 'Ankit', 'Kumar', 'ankitkumar@gmail.com', 'Patna,Bihar', 'West Bengal', 'India', 987564, 'Debit Card', 'ANKIT KUMAR', '987654321456', 3221, 321, 10000),
(9, 120002, '2020-11-26', '09:28:55', 'Subhadip', 'Mahapatra', 'iamsubhadipmahapatra@gmail.com', 'Sabalara, Medinapore', 'West Bengal', 'India', 721101, 'Debit Card', 'SUBHADIP MAHAPATRA', '321654987654', 1221, 654, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `signina`
--

CREATE TABLE `signina` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dol` date NOT NULL,
  `tol` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signina`
--

INSERT INTO `signina` (`id`, `admin_id`, `password`, `dol`, `tol`) VALUES
(1, 'ravipunar@gmail.com', 'sample123', '2020-11-24', '05:35:36'),
(2, 'ravipunar@gmail.com', 'sample132', '2020-11-24', '05:39:25'),
(3, 'ravipunar@gmail.com', 'asdf654', '2020-11-24', '05:44:36'),
(4, 'iamsubhadipmahapatra', 'mahapatra123', '2020-11-25', '03:40:46'),
(5, 'ravipunar@gmail.com', 'ravi', '2020-11-26', '03:00:50'),
(6, 'ravipunar@gmail.com', 'punar12', '2020-11-26', '03:05:11'),
(7, 'ravipunar@gmail.com', 'punar123', '2020-11-26', '03:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `signinc`
--

CREATE TABLE `signinc` (
  `id` int(6) NOT NULL,
  `cust_id` int(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dol` date NOT NULL,
  `tol` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signinc`
--

INSERT INTO `signinc` (`id`, `cust_id`, `password`, `dol`, `tol`) VALUES
(1, 120001, '120001', '2020-11-25', '06:36:33'),
(2, 120001, '120001', '2020-11-25', '06:39:39'),
(3, 120002, '120002', '2020-11-25', '06:40:22'),
(4, 120002, '120002', '2020-11-25', '06:40:49'),
(5, 120002, '120002', '2020-11-25', '06:42:40'),
(6, 120007, '120007', '2020-11-25', '07:04:07'),
(7, 120004, '120004', '2020-11-25', '07:05:13'),
(8, 120001, '120001', '2020-11-25', '07:24:36'),
(9, 120001, '120001', '2020-11-25', '07:25:10'),
(10, 120001, '120001', '2020-11-25', '07:25:12'),
(11, 120001, '120001', '2020-11-25', '07:25:13'),
(12, 120001, '120001', '2020-11-25', '07:25:14'),
(13, 120001, '120001', '2020-11-25', '07:26:24'),
(14, 120001, '120001', '2020-11-25', '07:26:35'),
(15, 120001, '120001', '2020-11-25', '07:26:45'),
(16, 120001, '120001', '2020-11-25', '07:27:09'),
(17, 120002, '120002', '2020-11-25', '07:27:34'),
(18, 120003, '120003', '2020-11-25', '07:28:28'),
(19, 120007, '120007', '2020-11-25', '07:28:42'),
(20, 120004, '120004', '2020-11-25', '07:29:57'),
(21, 120002, '120002', '2020-11-26', '09:30:05'),
(22, 120001, '120001', '2020-11-26', '09:31:08'),
(23, 120004, '120004', '2020-11-26', '10:00:23'),
(24, 120004, '120004', '2020-11-26', '10:08:46'),
(25, 120004, '120004', '2020-11-26', '10:09:31'),
(26, 120004, '120004', '2020-11-26', '10:09:51'),
(27, 120004, '120004', '2020-11-26', '10:20:25'),
(28, 120004, '120004', '2020-11-26', '10:21:19'),
(29, 120004, '120004', '2020-11-26', '10:25:38'),
(30, 120004, '120004', '2020-11-26', '10:26:02'),
(31, 120004, '120004', '2020-11-26', '10:27:02'),
(32, 120004, '120004', '2020-11-26', '10:27:11'),
(33, 120004, '120004', '2020-11-26', '10:27:31'),
(34, 120004, '120004', '2020-11-26', '10:27:42'),
(35, 120004, '120004', '2020-11-26', '10:27:45'),
(36, 120004, '120004', '2020-11-26', '10:27:57'),
(37, 120004, '120004', '2020-11-26', '10:28:09'),
(38, 120004, '120004', '2020-11-26', '10:28:42'),
(39, 120004, '120004', '2020-11-26', '10:28:46'),
(40, 120004, '120004', '2020-11-26', '10:28:52'),
(41, 120004, '120004', '2020-11-26', '10:28:58'),
(42, 120004, '120004', '2020-11-26', '10:29:24'),
(43, 120004, '120004', '2020-11-26', '10:29:39'),
(44, 120004, '120004', '2020-11-26', '10:29:49'),
(45, 120004, '120004', '2020-11-26', '10:30:11'),
(46, 120004, '120004', '2020-11-26', '10:31:00'),
(47, 120004, '120004', '2020-11-26', '10:32:51'),
(48, 120004, '120004', '2020-11-26', '10:37:24'),
(49, 120004, '120004', '2020-11-26', '10:39:32'),
(50, 120004, '120004', '2020-11-26', '10:39:50'),
(51, 120004, '120004', '2020-11-26', '10:40:25'),
(52, 120004, '120004', '2020-11-26', '10:40:47'),
(53, 120004, '120004', '2020-11-26', '10:40:51'),
(54, 120004, '120004', '2020-11-26', '10:40:54'),
(55, 120004, '120004', '2020-11-26', '10:40:58'),
(56, 120004, '120004', '2020-11-26', '10:41:03'),
(57, 120004, '120004', '2020-11-26', '10:41:11'),
(58, 120004, '120004', '2020-11-26', '10:41:50'),
(59, 120004, '120004', '2020-11-26', '10:41:56'),
(60, 120004, '120004', '2020-11-26', '10:42:02'),
(61, 120004, '120004', '2020-11-26', '10:44:04'),
(62, 120004, '120004', '2020-11-26', '10:44:13'),
(63, 120004, '120004', '2020-11-26', '10:44:33'),
(64, 120004, '120004', '2020-11-26', '10:44:47'),
(65, 120004, '120004', '2020-11-26', '10:45:29'),
(66, 120004, '120004', '2020-11-26', '10:45:54'),
(67, 120004, '120004', '2020-11-26', '10:46:28'),
(68, 120004, '120004', '2020-11-26', '10:47:36'),
(69, 120004, '120004', '2020-11-26', '10:47:50'),
(70, 120004, '120004', '2020-11-26', '10:48:07'),
(71, 120004, '120004', '2020-11-26', '10:48:57'),
(72, 120004, '120004', '2020-11-26', '10:49:18'),
(73, 120004, '120004', '2020-11-26', '10:49:47'),
(74, 120004, '120004', '2020-11-26', '10:49:48'),
(75, 120004, '120004', '2020-11-26', '10:49:50'),
(76, 120004, '120004', '2020-11-26', '10:50:42'),
(77, 120004, '120004', '2020-11-26', '10:50:59'),
(78, 120004, '120004', '2020-11-26', '10:51:08'),
(79, 120004, '120004', '2020-11-26', '10:51:47'),
(80, 120004, '120004', '2020-11-26', '10:56:34'),
(81, 120004, '120004', '2020-11-26', '11:03:25'),
(82, 120004, '120004', '2020-11-26', '11:03:28'),
(83, 120004, '120004', '2020-11-26', '11:03:39'),
(84, 120004, '120004', '2020-11-26', '11:07:29'),
(85, 120004, '120004', '2020-11-26', '11:07:39'),
(86, 120004, '120004', '2020-11-26', '11:08:55'),
(87, 120004, '120004', '2020-11-26', '11:09:05'),
(88, 120004, '120004', '2020-11-26', '11:11:04'),
(89, 120004, '120004', '2020-11-26', '11:11:05'),
(90, 120004, '120004', '2020-11-26', '11:11:19'),
(91, 120004, '120004', '2020-11-26', '11:12:20'),
(92, 120004, '120004', '2020-11-26', '11:14:37'),
(93, 120004, '120004', '2020-11-26', '11:35:01'),
(94, 120004, '120004', '2020-11-26', '11:37:40'),
(95, 120004, '120004', '2020-11-26', '11:38:03'),
(96, 120004, '120004', '2020-11-26', '11:38:05'),
(97, 120004, '120004', '2020-11-26', '11:38:05'),
(98, 120004, '120004', '2020-11-26', '11:38:06'),
(99, 120004, '120004', '2020-11-26', '11:38:06'),
(100, 120004, '120004', '2020-11-26', '11:38:32'),
(101, 120004, '120004', '2020-11-26', '11:38:47'),
(102, 120004, '120004', '2020-11-26', '11:38:50'),
(103, 120004, '120004', '2020-11-26', '11:38:51'),
(104, 120004, '120004', '2020-11-26', '11:39:45'),
(105, 120004, '120004', '2020-11-26', '11:39:48'),
(106, 120004, '120004', '2020-11-26', '11:41:34'),
(107, 120004, '120004', '2020-11-26', '11:43:13'),
(108, 120004, '120004', '2020-11-26', '11:43:23'),
(109, 120004, '120004', '2020-11-26', '11:44:48'),
(110, 120004, '120004', '2020-11-26', '11:45:05'),
(111, 120004, '120004', '2020-11-26', '11:45:38'),
(112, 120002, '120002', '2020-11-26', '11:50:37'),
(113, 120002, '120002', '2020-11-26', '11:50:37'),
(114, 120002, '100001', '2020-11-26', '12:43:44'),
(115, 120002, '100001', '2020-11-26', '12:43:47'),
(116, 120002, '100001', '2020-11-26', '12:43:48'),
(117, 120002, '100001', '2020-11-26', '12:43:49'),
(118, 120002, '100001', '2020-11-26', '12:44:09'),
(119, 120002, '100001', '2020-11-26', '12:44:13'),
(120, 120002, '100001', '2020-11-26', '12:44:17'),
(121, 120002, '100001', '2020-11-26', '12:44:24'),
(122, 120002, '100001', '2020-11-26', '12:44:31'),
(123, 120002, '120002', '2020-11-26', '12:59:39'),
(124, 120002, '120002', '2020-11-26', '12:59:39'),
(125, 120002, '120002', '2020-11-26', '01:03:54'),
(126, 120002, '120002', '2020-11-26', '01:06:32'),
(127, 120002, '120002', '2020-11-26', '01:10:45'),
(128, 120001, '120001', '2020-11-26', '01:10:56'),
(129, 120001, '120001', '2020-11-26', '01:10:56'),
(130, 120001, '120001', '2020-11-26', '01:11:25'),
(131, 120001, '120001', '2020-11-26', '01:12:58'),
(132, 120001, '120001', '2020-11-26', '01:12:59'),
(133, 120001, '120001', '2020-11-26', '01:13:03'),
(134, 120001, '120001', '2020-11-26', '01:23:34'),
(135, 120001, '120001', '2020-11-26', '01:23:34'),
(136, 120004, '120004', '2020-11-26', '01:25:34'),
(137, 120005, '120005', '2020-11-26', '02:04:15'),
(138, 120006, '120006', '2020-11-26', '02:38:29'),
(139, 120006, '120006', '2020-11-26', '02:50:22'),
(140, 120004, '120004', '2020-11-26', '02:51:18'),
(141, 120006, '120006', '2020-11-26', '02:55:24'),
(142, 120002, '120002', '2020-11-26', '04:34:12'),
(143, 120001, '120001', '2020-11-26', '04:55:10'),
(144, 120001, '120001', '2020-11-26', '05:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `signins`
--

CREATE TABLE `signins` (
  `id` int(6) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dol` date NOT NULL,
  `tol` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signins`
--

INSERT INTO `signins` (`id`, `staff_id`, `password`, `dol`, `tol`) VALUES
(1, 100001, '100001', '2020-11-26', '01:35:43'),
(2, 100002, '100002', '2020-11-26', '01:36:13'),
(3, 100002, '100002', '2020-11-26', '01:42:05'),
(4, 100002, '100002', '2020-11-26', '01:44:42'),
(5, 100002, '100002', '2020-11-26', '01:44:44'),
(6, 100002, '100002', '2020-11-26', '01:44:46'),
(7, 100002, '100002', '2020-11-26', '01:44:46'),
(8, 100002, '100002', '2020-11-26', '01:44:48'),
(9, 100002, '100002', '2020-11-26', '01:44:48'),
(10, 100002, '100002', '2020-11-26', '01:44:49'),
(11, 100002, '100002', '2020-11-26', '01:44:49'),
(12, 100002, '100002', '2020-11-26', '01:44:49'),
(13, 100002, '100002', '2020-11-26', '01:44:49'),
(14, 100002, '100002', '2020-11-26', '01:44:50'),
(15, 100002, '100002', '2020-11-26', '01:44:50'),
(16, 100002, '100002', '2020-11-26', '01:45:17'),
(17, 100002, '100002', '2020-11-26', '01:46:07'),
(18, 100002, '100002', '2020-11-26', '01:46:40'),
(19, 100002, '100002', '2020-11-26', '01:47:04'),
(20, 100002, '100002', '2020-11-26', '01:48:38'),
(21, 100002, '100002', '2020-11-26', '01:52:56'),
(22, 100002, '100002', '2020-11-26', '01:53:18'),
(23, 100002, '100002', '2020-11-26', '01:53:52'),
(24, 100002, '100002', '2020-11-26', '01:54:14'),
(25, 100002, '100002', '2020-11-26', '01:55:10'),
(26, 100002, '100002', '2020-11-26', '01:56:58'),
(27, 100002, '100002', '2020-11-26', '02:01:35'),
(28, 100002, '100002', '2020-11-26', '02:02:38'),
(29, 100002, '100002', '2020-11-26', '02:03:39'),
(30, 100003, '100003', '2020-11-26', '02:03:54'),
(31, 100006, '100006', '2020-11-26', '02:09:18'),
(32, 100006, '100006', '2020-11-26', '02:09:36'),
(33, 100006, '100006', '2020-11-26', '02:09:41'),
(34, 100006, '100006', '2020-11-26', '02:09:43'),
(35, 100006, '100006', '2020-11-26', '02:09:45'),
(36, 100006, '100006', '2020-11-26', '02:11:26'),
(37, 100006, '100006', '2020-11-26', '02:11:42'),
(38, 100006, '100006', '2020-11-26', '02:11:59'),
(39, 100006, '100006', '2020-11-26', '02:13:01'),
(40, 100006, '100006', '2020-11-26', '02:13:04'),
(41, 100006, '100006', '2020-11-26', '02:13:05'),
(42, 100006, '100006', '2020-11-26', '02:23:24'),
(43, 100006, '100006', '2020-11-26', '02:23:29'),
(44, 100006, '100006', '2020-11-26', '02:26:17'),
(45, 100006, '100006', '2020-11-26', '02:33:48'),
(46, 100006, '100006', '2020-11-26', '02:34:46'),
(47, 100006, '100006', '2020-11-26', '02:35:01'),
(48, 100006, '100006', '2020-11-26', '02:35:13'),
(49, 100006, '100006', '2020-11-26', '02:35:23'),
(50, 100006, '100006', '2020-11-26', '02:36:04'),
(51, 100006, '100006', '2020-11-26', '02:37:18'),
(52, 100006, '100006', '2020-11-26', '02:37:23'),
(53, 100006, '100006', '2020-11-26', '02:37:28'),
(54, 100005, '100005', '2020-11-26', '02:57:47'),
(55, 100005, '100005', '2020-11-26', '02:57:58'),
(56, 100002, '100002', '2020-11-26', '05:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `cust_id` int(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `mobile_num` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`cust_id`, `password`, `first_name`, `last_name`, `mobile_num`, `email`, `address`, `state`, `country`, `zip`) VALUES
(120001, '120001', 'Ravi', 'Punar', '2147483647', 'clarkelia@ymail.com', 'B55,stephen road, Jam Nagar', 'Gujarat', 'India', 654874),
(120002, '120002', 'Subhadip', 'Mahapatra', '7001767843', 'iamsubhadipmahapatra@gmail.com', 'Sabudara, Medinapore', 'West Bengal', 'India', 987564),
(120003, '120003', 'Ankit', 'Kumar', '7877799993', 'ravipunar@gmail.com', 'Om Villa, 281, Lane no. 12', 'Rajasthan', 'India', 342003),
(120004, '120004', 'Anima', 'Kumari', '8310285342', 'ankitkumar@gmail.com', 'Patna', 'Gujarat', 'India', 345875),
(120005, '120005', 'Abhishek', 'Kumar', '8271928988', 'anima20sinha@gmail.c', 'Patna', 'Gujarat', 'India', 564987),
(120006, '120006', 'Arvind ', 'Punar', '9414871644', 'avi.punar@gmail.com', 'Om Villa, 281, Lane no. 12,DurgaDas Colony, Masuri', 'Rajasthan', 'India', 342003),
(120007, '120007', 'Anil', 'Bokhawat', '8003030733', 'anilbokha@gmail.com', 'Bhatelai Purohitan, Bambore', 'Rajasthan', 'India', 342001);

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `no` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`no`, `last_name`, `id`, `password`, `user_type`) VALUES
(1, 'Punar', 'ravipunar@gmail.com', 'punar123', 'admin'),
(2, 'Mahapatra', 'iamsubhadipmahapatra@gmail.com', 'mahapatra123', 'admin'),
(3, 'Chauhan', '100001', '100001', 'staff'),
(4, 'Saini', '100002', '100002', 'staff'),
(5, 'Dutt', '100003', '100003', 'staff'),
(6, 'Prasad', '100004', '100004', 'staff'),
(7, 'Kumar', '100005', '100005', 'staff'),
(8, 'Singh', '100006', '100006', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signina`
--
ALTER TABLE `signina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signinc`
--
ALTER TABLE `signinc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signins`
--
ALTER TABLE `signins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ap_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signina`
--
ALTER TABLE `signina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signinc`
--
ALTER TABLE `signinc`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `signins`
--
ALTER TABLE `signins`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120008;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
