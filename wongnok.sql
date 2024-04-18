-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 06:53 PM
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
-- Database: `wongnok`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficult`
--

CREATE TABLE `difficult` (
  `difficult_id` int(11) NOT NULL,
  `difficult_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `difficult`
--

INSERT INTO `difficult` (`difficult_id`, `difficult_name`) VALUES
(1, 'easy'),
(2, 'medium'),
(3, 'Hard');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL COMMENT 'ชื่ออาหาร',
  `food_picture` varchar(50) NOT NULL COMMENT 'รูปภาพ',
  `food_ingredient` text NOT NULL COMMENT 'ส่วนผสม',
  `food_step` text NOT NULL COMMENT 'ขั้นตอน',
  `food_period` int(1) NOT NULL COMMENT 'ระยะเวลา',
  `food_difficult` int(1) NOT NULL COMMENT 'ความยากง่าย',
  `member_id` int(3) NOT NULL COMMENT 'ผู้เพิ่มเมนูอาหาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_picture`, `food_ingredient`, `food_step`, `food_period`, `food_difficult`, `member_id`) VALUES
(2, 'ปลาทอดราดพริกสามรส', 'Upload20240418578.jpg', 'ปลานิล 1 ตัว  (1,200 กรัม)\nกระเทียม 40 กรัม\nพริกแดงจินดา 50 กรัม\nพริกชี้ฟ้าแดง 2 เม็ด\nผักชี 2 ต้น\nน้ำมะขามเปียก 4 ช้อนโต๊ะ\nน้ำปลา 5 ช้อนโต๊ะ\nน้ำตาลปี๊บ 6 ช้อนโต๊ะ', '-', 11, 0, 1),
(3, 'กุ้งอบวุ้นเส้น', 'Upload202404188068.jpg', 'กุ้งก้ามกราม  1  กิโลกรัม\r\nหมูสามชั้น  150  กรัม\r\nวุ้นเส้น  200  กรัม\r\nต้นหอม  3  ต้น\r\nขึ้นช่าย  3  ต้น\r\nขิงแก่  1  แง่ง\r\nกระเทียม  1  หัว\r\nรากผักชี  4  ราก\r\nชวงเจีย (พริกหอม)  1  ช้อนโต๊ะ\r\nพริกไทยป่น  1  ช้อนโต๊ะ\r\nน้ำเปล่า  500  มิลลิลิตร\r\nซอสหอยนางรม  4  ช้อนโต๊ะ\r\nซีอิ้วขาว  2+1/2  ช้อนโต๊ะ\r\nซีอิ้วดำ(หวาน)  2  ช้อนโต๊ะ\r\nน้ำมันงา  1+1/2 ช้อนโต๊ะ\r\nน้ำตาลทราย  1  ช้อนโต๊ะ\r\nเหล้าจีน  2  ช้อนโต๊ะ (ใส่หรือไม่ใส่ก็ได้ตามชอบ)', '-', 11, 0, 1),
(4, 'ต้มยำทะเล', 'Upload2024041858060.jpg', 'กุ้ง 200 กรัม\r\nหมึก 200 กรัม\r\nหอยลาย 300 กรัม\r\nเห็ดฟาง 400 กรัม\r\nข่า 40 กรัม\r\nตะไคร้ 40 กรัม\r\nหอมแดง 40 กรัม\r\nผักชีไทย 10 กรัม\r\nผักชีฝรั่ง 10 กรัม\r\nใบมะกรูด 5 กรัม\r\nรากผักชี 2 กรัม\r\nพริกแดงจินดา, พริกขี้หนูสวน 30 กรัม\r\nน้ำ 1,000 มิลลิลิตร\r\nหัวกะทิ 200 มิลลิลิตร\r\nเกลือ 1 ช้อนชา\r\nน้ำปลา 6 ช้อนโต๊ะ\r\nน้ำพริกเผา 2 1/2 ช้อนโต๊ะ\r\nน้ำมันพริกเผา 1 1/2 ช้อนโต๊ะ\r\nน้ำมะนาว 6 ช้อนโต๊ะ', '-', 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(20) NOT NULL,
  `member_password` varchar(10) NOT NULL,
  `member_fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_username`, `member_password`, `member_fullname`) VALUES
(1, 'user1', '1234', 'สามารถ จงนอก'),
(2, 'user2', '1234', 'สุจิตตรา หันสังข์');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(11) NOT NULL,
  `period_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_id`, `period_name`) VALUES
(1, 'Easy'),
(2, 'Medium'),
(3, 'Hard');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `restaurant_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `user_id`, `restaurant_id`, `rating`, `timestamp`) VALUES
(15, 1, 2, 2, '2024-04-16 05:37:51'),
(16, 1, 1, 4, '2024-04-16 05:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurant`
--

CREATE TABLE `tbl_restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_restaurant`
--

INSERT INTO `tbl_restaurant` (`id`, `name`, `address`) VALUES
(1, 'Malaysian Multi Cusine Restaurant', '12, FGH Enclave'),
(2, 'Cafe Monarch', '78, GNT Park');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficult`
--
ALTER TABLE `difficult`
  ADD PRIMARY KEY (`difficult_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficult`
--
ALTER TABLE `difficult`
  MODIFY `difficult_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
