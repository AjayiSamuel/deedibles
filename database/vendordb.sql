-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2018 at 06:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Ajayi Samuel', 'jasperunit95@gmail.com', 'password1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `id` int(11) NOT NULL,
  `vendor_username` varchar(50) NOT NULL,
  `vendor_email` varchar(100) NOT NULL,
  `vendor_password` varchar(50) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `company_description` text,
  `long_company_description` text,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `background_img` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`id`, `vendor_username`, `vendor_email`, `vendor_password`, `company_name`, `phone_number`, `company_description`, `long_company_description`, `facebook_link`, `instagram_link`, `logo`, `background_img`, `image1`, `image2`, `image3`, `category`, `address`, `date`) VALUES
(6, 'hope', 'hopeman@gmial.com', 'help', 'work test', '1234567890', 'test', NULL, 'fb', 'ig', '', NULL, 'images/5a8c34e2020280.49653604.jpg', 'images/5a8c34e21fb899.65054393.jpg', 'images/5a8c34e22c9090.18661003.jpg', 'cake', '', '20-02-2018'),
(7, 'don', 'don@gmail.com', 'password', 'company', 'number', 'description', NULL, 'fb', 'ig', '', NULL, 'images/5a8c41f41231c6.35761382.jpg', 'images/5a8c41f42c2b82.49261848.jpg', 'images/5a8c41f4450065.73095776.jpg', 'small chops', '', '20-02-2018'),
(8, 'ASA', 'asa@gmail.com', 'password', 'ASA', '1234', 'ASA D', NULL, 'fb', 'ig', 'logo/5a8c4d503ee548.76090582.jpg', NULL, 'images/5a8c4d504aa680.84426375.jpg', 'images/5a8c4d505b36e7.06856731.jpg', 'images/5a8c4d5077a753.34178538.jpg', 'edible arrangement', '', '20-02-2018'),
(9, 'ASA2', 'asa2@gmail.com', 'asapassword', 'thecompany', '1234567890', 'the best in the world', NULL, 'fblink', 'ig', '../logofolder/Abstract HD Wappapers Downloadha (2).jpg', NULL, 'images/5a8d7c7dc89387.98147873.jpg', 'images/5a8d8532afeb13.45729289.jpg', 'images/5a8d8532d4aee7.32034063.jpg', 'cake', '', '21-02-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
