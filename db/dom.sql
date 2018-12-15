-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 10:55 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`) VALUES
(1, 'Mobile'),
(2, 'Computer'),
(3, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(10) NOT NULL,
  `seller_company_name` varchar(255) NOT NULL,
  `seller_email` text NOT NULL,
  `seller_password` text NOT NULL,
  `seller_mobile_number` text NOT NULL,
  `seller_pin_code` int(10) NOT NULL,
  `seller_company_pan_number` text NOT NULL,
  `seller_gst_number` text NOT NULL,
  `create_date` text NOT NULL,
  `seller_month` int(10) NOT NULL,
  `seller_year` int(10) NOT NULL,
  `seller_fname` varchar(255) NOT NULL,
  `seller_lname` varchar(255) NOT NULL,
  `seller_address` text NOT NULL,
  `seller_city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_company_name`, `seller_email`, `seller_password`, `seller_mobile_number`, `seller_pin_code`, `seller_company_pan_number`, `seller_gst_number`, `create_date`, `seller_month`, `seller_year`, `seller_fname`, `seller_lname`, `seller_address`, `seller_city`) VALUES
(3, 'Diamond World', 'info@dw.com', '12345', '01766328322', 1216, 'DW123AB456', 'A123B456C789', '', 0, 0, 'Dew', 'Hunt', 'Mirpur - 11', 'Dhaka'),
(4, 'Beca Kina', 'becakina@gmail.com', '123456', '01766322328', 1217, 'DW321AB654', 'A321B654C987', '', 0, 0, '', '', '', ''),
(7, 'Jems Arcade', 'jemsarc@gmail.com', '123456', '01766328321', 1218, 'DW311AB656', 'A311B644C988', '2018-11-17', 11, 2018, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
