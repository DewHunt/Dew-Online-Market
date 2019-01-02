-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 12:14 PM
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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `brand_name` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `item_id`, `brand_name`) VALUES
(1, 4, 'Samsung'),
(2, 4, 'Sony'),
(3, 4, 'Oppo'),
(4, 4, 'Vivo'),
(5, 4, 'MI'),
(6, 4, 'Apple'),
(7, 5, 'HP'),
(8, 5, 'Dell'),
(9, 5, 'Asus'),
(10, 5, 'Apple'),
(11, 5, 'Lenevo'),
(12, 5, 'IBall'),
(13, 6, 'Accer'),
(14, 6, 'Dell'),
(15, 6, 'HP'),
(16, 6, 'Lenevo'),
(17, 6, 'Sony'),
(18, 6, 'Samsung'),
(19, 4, 'Walton');

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
(4, 'Mobiles'),
(5, 'Computers'),
(6, 'Laptops'),
(7, 'Tablets'),
(8, 'Mobile Accessories'),
(9, 'Computer Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `mobile_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `mobile_title` varchar(255) NOT NULL,
  `mobile_brand_id` text NOT NULL,
  `mobile_model_number` text NOT NULL,
  `mobile_model_name` text NOT NULL,
  `mobile_color` text NOT NULL,
  `mobile_sim` text NOT NULL,
  `mobile_sim_type` text NOT NULL,
  `mobile_otg` text NOT NULL,
  `mobile_display_size` text NOT NULL,
  `mobile_display_resolution` text NOT NULL,
  `mobile_display_type` text NOT NULL,
  `mobile_resolution_type` text NOT NULL,
  `mobile_os` text NOT NULL,
  `mobile_os_version` text NOT NULL,
  `mobile_processor_type` text NOT NULL,
  `mobile_processor_size` text NOT NULL,
  `mobile_internal_storage` text NOT NULL,
  `mobile_ram` text NOT NULL,
  `mobile_expandable_storage` text NOT NULL,
  `mobile_memory_card_slot` text NOT NULL,
  `mobile_memory_card_type` text NOT NULL,
  `mobile_primary_camera` text NOT NULL,
  `mobile_secondary_camera` text NOT NULL,
  `mobile_flash` text NOT NULL,
  `mobile_primary_camera_resolution` text NOT NULL,
  `mobile_secondary_camera_resolution` text NOT NULL,
  `mobile_network_type` text NOT NULL,
  `mobile_battery` text NOT NULL,
  `mobile_bluetooth` text NOT NULL,
  `mobile_wifi` text NOT NULL,
  `mobile_usb_slot` text NOT NULL,
  `mobile_duration_formate` text NOT NULL,
  `mobile_return_policy` text NOT NULL,
  `mobile_offers` int(50) NOT NULL,
  `mobile_price` int(50) NOT NULL,
  `mobile_shipping_charge` int(50) NOT NULL,
  `mobile_upload_date` text NOT NULL,
  `mobile_upload_month` text NOT NULL,
  `mobile_upload_year` text NOT NULL,
  `mobile_status` text NOT NULL,
  `mobile_img_one` text NOT NULL,
  `mobile_img_two` text NOT NULL,
  `mobile_img_three` text NOT NULL,
  `mobile_img_four` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`mobile_id`, `seller_id`, `mobile_title`, `mobile_brand_id`, `mobile_model_number`, `mobile_model_name`, `mobile_color`, `mobile_sim`, `mobile_sim_type`, `mobile_otg`, `mobile_display_size`, `mobile_display_resolution`, `mobile_display_type`, `mobile_resolution_type`, `mobile_os`, `mobile_os_version`, `mobile_processor_type`, `mobile_processor_size`, `mobile_internal_storage`, `mobile_ram`, `mobile_expandable_storage`, `mobile_memory_card_slot`, `mobile_memory_card_type`, `mobile_primary_camera`, `mobile_secondary_camera`, `mobile_flash`, `mobile_primary_camera_resolution`, `mobile_secondary_camera_resolution`, `mobile_network_type`, `mobile_battery`, `mobile_bluetooth`, `mobile_wifi`, `mobile_usb_slot`, `mobile_duration_formate`, `mobile_return_policy`, `mobile_offers`, `mobile_price`, `mobile_shipping_charge`, `mobile_upload_date`, `mobile_upload_month`, `mobile_upload_year`, `mobile_status`, `mobile_img_one`, `mobile_img_two`, `mobile_img_three`, `mobile_img_four`) VALUES
(36, 3, 'Samsung S9', 'Samsung', 'S127896', 'Samsung', 'Red', 'Dual Sim', 'Micro', 'Yes', '6.0 Inch', '1080px', 'AMOLED', 'Full HD', 'Android', '9.0', 'Octa Core', '2.69 GHz', '128GB', '4GB', 'Yes', 'Yes', 'Micro SD Card', 'Yes', 'Yes', 'Yes', '25MP', '16MP', 'GSM', '4500 mAp', 'Yes', 'Yes', 'Yes', '7 Days', '5 Days', 5, 49990, 1200, '2019-01-01', '01', '2019', 'Active', 'mobile_image/pic_04.jpg', 'mobile_image/pic_05.jpg', 'mobile_image/pic_06.jpg', 'mobile_image/pic_07.jpg'),
(37, 4, 'Apple iPhone X', 'Apple', 'A1901', 'iPhone X', 'Golden', 'Single Sim', 'Micro', 'Yes', '6.5 Inch', '1080px', 'AMOLED', 'Full HD', 'iOS', '11.1.1', 'Hexa Core', '2.5 GHz', '256GB', '4GB', 'Yes', 'Yes', 'Micro SD Card', 'Yes', 'Yes', 'Yes', '20MP', '12MP', 'GSM', '4800 mAh', 'Yes', 'Yes', 'Yes', '7 Days', '5 Days', 10, 89990, 1500, '2019-01-01', '01', '2019', 'Active', 'mobile_image/pic_00.jpg', 'mobile_image/pic_01.jpg', 'mobile_image/pic_02.png', 'mobile_image/pic_03.png'),
(38, 3, 'Primo X5', 'Walton', 'X5', 'Primo', 'Silver', 'Dual Sim', 'Nano', 'Yes', '6.0 Inch', '1080px', 'AMOLED', 'Full HD', 'Android', 'Android Oreo 8.1', 'Octa Core', '64bit 2.0 GHz', '64GB', '6GB', 'Yes', 'Yes', 'Micro SD Card', 'Yes', 'Yes', 'Yes', 'BSI 13+5MP Dual Auto Focus rear camera', 'BSI 16MP Front camera', 'LTE (4G)/UMTS (3G)/GSM (2G)', 'Li-polymer 3450mAh', 'Yes', 'Yes', 'Yes', '30 Days', '15 Days', 5, 24990, 250, '2019-01-01', '01', '2019', 'Active', 'mobile_image/pic_08.jpg', 'mobile_image/pic_09.jpg', 'mobile_image/pic_10.jpg', 'mobile_image/pic_11.jpg');

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
  `seller_create_date` text NOT NULL,
  `seller_month` int(10) NOT NULL,
  `seller_year` int(10) NOT NULL,
  `seller_fname` varchar(255) NOT NULL,
  `seller_lname` varchar(255) NOT NULL,
  `seller_address` text NOT NULL,
  `seller_city` text NOT NULL,
  `seller_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_company_name`, `seller_email`, `seller_password`, `seller_mobile_number`, `seller_pin_code`, `seller_company_pan_number`, `seller_gst_number`, `seller_create_date`, `seller_month`, `seller_year`, `seller_fname`, `seller_lname`, `seller_address`, `seller_city`, `seller_status`) VALUES
(3, 'Diamond World', 'info@dw.com', '12345', '01766328322', 1216, 'DW123AB456', 'A123B456C789', '2018-11-10', 11, 2018, 'Dew', 'Hunt', 'Mirpur - 11', 'Dhaka', 'Verified'),
(4, 'Beca Kina', 'becakina@gmail.com', '123456', '01766322328', 1217, 'DW321AB654', 'A321B654C987', '2018-11-12', 11, 2018, 'Salman', 'Sabbir', 'Gulshan 1', 'Dhaka', 'Verified'),
(7, 'Jems Arcade', 'jemsarc@gmail.com', '123456', '01766328321', 1218, 'DW311AB656', 'A311B644C988', '2018-11-17', 11, 2018, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seller_listing`
--

CREATE TABLE `seller_listing` (
  `sl_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `sl_start_date` text NOT NULL,
  `sl_last_date` text NOT NULL,
  `sl_month` int(11) NOT NULL,
  `sl_year` int(11) NOT NULL,
  `sl_number` int(11) NOT NULL,
  `sl_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller_listing`
--

INSERT INTO `seller_listing` (`sl_id`, `seller_id`, `sl_start_date`, `sl_last_date`, `sl_month`, `sl_year`, `sl_number`, `sl_type`) VALUES
(4, 3, '2019-01-01', '2019-01-08', 1, 2019, 3, 'Auction'),
(5, 4, '2019-01-01', '2019-01-08', 1, 2019, 2, 'Auction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`mobile_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `seller_listing`
--
ALTER TABLE `seller_listing`
  ADD PRIMARY KEY (`sl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `mobile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller_listing`
--
ALTER TABLE `seller_listing`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
