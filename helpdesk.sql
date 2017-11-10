-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 08:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(2) NOT NULL,
  `departments_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departments_name`) VALUES
(1, 'กลุ่มอำนวยการ'),
(2, 'กลุ่มบริหารงานบุคคล'),
(3, 'กลุ่มการเงินและสินทรัพย์'),
(4, 'กลุ่มนิเทศก์ติดตาม'),
(5, 'หน่วยตรวจสอบภายใน'),
(6, 'กลุ่มส่งเสริมการจัดการศึกษา'),
(7, 'ผู้บริหาร'),
(8, 'กลุ่มนโยบายและแผน');

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `problem_detail` varchar(200) DEFAULT NULL,
  `problem_fix` varchar(200) DEFAULT NULL,
  `user_fix` varchar(200) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`id`, `date`, `time`, `surname`, `lastname`, `department_id`, `type_id`, `status_id`, `problem_detail`, `problem_fix`, `user_fix`, `comment`) VALUES
(2, '2017-10-19', '11:45:45', 'ทดสอบชื่อ', 'ทดสอบนามสกุล', 1, 1, 4, 'รายละเอียดของปัญหา', NULL, NULL, NULL),
(3, '2017-10-19', '15:28:48', NULL, NULL, 1, 1, 4, NULL, NULL, NULL, NULL),
(4, '2017-10-19', '15:38:55', NULL, NULL, 1, 1, 4, NULL, NULL, NULL, NULL),
(5, '2017-11-09', '12:05:55', 'ชื่นวงค์', 'สมบูรณ์', 1, 4, 2, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', 'วิธีการแก้ไขปัญหา', 'singnarin', 'comment'),
(6, '2017-11-09', '11:02:45', 'มองมูล', 'ชาวน่าน', 3, 6, 4, '$repair->status_id = \"4\";', NULL, NULL, NULL),
(8, '2017-11-09', '11:04:49', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(9, '2017-11-09', '11:06:37', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(10, '2017-11-09', '11:06:47', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(11, '2017-11-09', '11:29:04', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(12, '2017-11-09', '11:29:06', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(13, '2017-11-09', '11:29:10', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(14, '2017-11-09', '11:29:12', 'คิดศรี', 'อินสุขิน', 6, 2, 4, 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1 งานบริการเทคโนโลยีสารสนเทศและการสื่อสาร Tel. 29\r\nCopyright © 2017 Site designed,developed & mentinance by Singnarin', NULL, NULL, NULL),
(15, '2017-11-10', '13:32:11', 'ประถม', 'เชื้อหมอ', 7, 6, 2, 'เครื่องรับสัญญาณโทรทัศน์ใช้งานไม่ได้', 'source หาเครื่องรับสัญญาณดาวเทียม เป็น AV', 'สิงห์นรินทร์', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(2) NOT NULL,
  `statuses_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `statuses_name`) VALUES
(1, 'อยู่ระหว่างดำเนินการ'),
(2, 'ดำเนินการเรียบร้อย'),
(3, 'ไม่สามารถซ่อมได้'),
(4, 'รอการตอบรับ');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(2) NOT NULL,
  `types_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `types_name`) VALUES
(1, 'Hardware'),
(2, 'Software'),
(3, 'Printer/Scanner'),
(4, 'LAN'),
(5, 'WIFI'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` varchar(1) NOT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `departments_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`, `surname`, `lastname`, `departments_id`) VALUES
(1, 'admin', '1234', '0', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
