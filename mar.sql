-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 04:05 AM
-- Server version: 8.0.19
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int NOT NULL,
  `Username` char(24) NOT NULL,
  `Password` int NOT NULL,
  `Email` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Username`, `Password`, `Email`) VALUES
(1, 'Fatima_44', 11111, 'fatim@gmail.com'),
(2, 'Maria_22', 2222, 'Maria@gmail.com'),
(3, 'Ahmed', 333, 'Ahmed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `modify`
--

CREATE TABLE `modify` (
  `A_ID` int NOT NULL,
  `P_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int NOT NULL,
  `Product_price` int NOT NULL,
  `Product_Name` varchar(40) NOT NULL,
  `Product_Type` varchar(200) NOT NULL,
  `Product_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_price`, `Product_Name`, `Product_Type`, `Product_Image`) VALUES
(1, 10, 'lettuce', 'fruits and vegetables', 'Images\\kh.png'),
(2, 25, 'Avocado', 'fruits and vegetables', 'Images\\AF.jpg'),
(3, 10, ' Pepper', 'fruits and vegetables', 'Images\\pa.png'),
(4, 35, 'Chilli Pepper', 'fruits and vegetables', '\r\nImages\\pp.png'),
(5, 10, 'Broccoli ', 'fruits and vegetables', 'Images\\pro.png'),
(6, 7, 'Cauliflower', 'fruits and vegetables', 'Images\\cau.jpg'),
(7, 10, 'Eggplant', 'fruits and vegetables', 'Images\\eggplant.jfif'),
(8, 10, 'WEETABIX', 'sweets', 'Images\\weetabix.jpg'),
(9, 25, 'OREO', 'sweets', 'Images\\oreo.jpg'),
(10, 10, 'GALAXY', 'sweets', 'Images\\galaxy.jpg'),
(11, 35, 'BITTIER CHOCOLATE', 'sweets', 'Images\\ch.jpg'),
(12, 35, ' HARIBO', 'sweets', 'Images\\ss.jpg'),
(13, 10, 'SAUCE', 'Canned food', 'Images\\Sauce.png'),
(14, 10, ' HELLMANM\'S  ', 'Canned food', 'Images\\Hellmanns.jpg'),
(15, 10, 'MUSTARDA  ', 'Canned food', 'Images\\yellow.png'),
(16, 20, '  PEANUT BUTTER  ', 'Canned food', 'Images\\Sunpat.jpg'),
(17, 30, ' NUTELLA ', 'Canned food', 'Images\\nutella.jpg'),
(18, 25, '  FAIRY', 'Cleaning Product', 'Images\\Fairy.jpg'),
(19, 55, ' SAINSBURY\'S ', 'Cleaning Product', 'Images\\stain.jpg'),
(20, 39, 'VANISH', 'Cleaning Product', 'Images\\Vanish.jpg'),
(21, 40, 'MAGNUM', 'Cleaning Product', 'Images\\MAGNUM.jpg'),
(22, 10, '  Hand sanitizer', 'Cleaning Product', 'Images\\Capture.png'),
(23, 20, 'MASK', 'Cleaning Product', 'Images\\mask.png'),
(24, 10, 'Sun oil ', 'Oil', 'Images/11/545885.jpg'),
(25, 12, 'Areej oil', 'Oil', 'Images/11/download.jpg'),
(26, 15, 'Afia Oil ', 'Oil', 'Images/11/TftFQ4sHrMQeYD3cxsUBZdrbZ39AvFkEwsUZzSfO.jpeg'),
(27, 15, ' Arab oil ', 'Oil', 'Images/11/unnamed.jpg'),
(28, 15, 'aljawf olive oil   ', 'Oil', 'Images/11/1.jpg'),
(29, 10, 'Almarai oil   ', 'Oil', 'Images/11/2.png'),
(30, 5, '  Nadec Milk  ', 'Milk and yogurt ', 'Images/2.png'),
(31, 5, '  NADA Milk', 'Milk and yogurt ', 'Images/3.jpg'),
(32, 1, ' Nadec Yogurt ', 'Milk and yogurt ', 'Images/6.jpg'),
(33, 1, '  Amarai Yogurt   ', 'Milk and yogurt ', 'Images/7.jpeg'),
(34, 1, ' Activia yogurt ', 'Milk and yogurt ', 'Images/8.png'),
(35, 2, '  Activia Milk   ', 'Milk and yogurt ', 'Images/9.png'),
(36, 10, '  Tomatoes  ', 'fruits and vegetables', 'Images/tm.png'),
(37, 10, 'Option ', 'fruits and vegetables', 'Images/10/1.jpg'),
(38, 7, '  garlic  ', 'fruits and vegetables', 'Images/10/2.jpg'),
(39, 10, ' zucchini  ', 'fruits and vegetables', 'Images/10/3.jpg'),
(40, 10, '  Potato', 'fruits and vegetables', 'Images/10/4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modify`
--
ALTER TABLE `modify`
  ADD PRIMARY KEY (`A_ID`,`P_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
