-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 06:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PharmEasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_fname` varchar(20) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_fname`, `admin_lname`, `admin_password`) VALUES
(4, 'admin@gmail.com', '5', '5', 'admin'),
(5, '4admin@gmail.com', '4', '4', 'a444444444'),
(6, '1000adadqwrmin@gmail.com', 'aqda', 'adqwed', '1Aaaaaaaaaa'),
(8, '100dadqwrmin@gmail.com', 'rtwetf', 'wrtfwf', '1Aaaaaaaaaaa'),
(9, '1adwermin@gmail.com', 'ewrf', 'werfw', '1Aaaaaaaaaa'),
(10, 'e1adderwermin@gmail.com', 'fd', 'werfw', '1Aaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(5) NOT NULL,
  `item_title` varchar(25) NOT NULL,
  `item_brand` varchar(25) NOT NULL,
  `item_cat` varchar(30) NOT NULL,
  `item_details` text NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `item_tags` varchar(250) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_quantity` int(3) NOT NULL,
  `item_price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_title`, `item_brand`, `item_cat`, `item_details`, `item_description`, `item_tags`, `item_image`, `item_quantity`, `item_price`) VALUES
(1, '1', 'f', 'medicine', 'Size name: 2GB RAM, 32GB Storage\r\nModel Name	Spark Go 2022\r\nWireless Carrier	Unlocked\r\nBrand	Tecno\r\nForm factor	Touch\r\nMemory Storage Capacity	32 GB\r\nAbout this item\r\n5000mAh powerful battery with 46 days standby | AI Battery Lab | Ultra Battery Saver\r\n6.52” HD+ Dot notch handy display for great entertainment |120Hz Touch Sampling rate| IPX2 Water Protection\r\nExcellent photography with 13MP AI Dual rear camera with dual Flashlight | Portrait mode | Smile Shot| 1080p Time Lapse\r\nNew Stylish Design with Anti-Oil Fingerprint sensor\r\n8MP selfie camera with microslit front flash | Adjustable brightness feature', '1', '1', 'hair.jpg', 12, 100),
(3, 'gg', 'gg', 'self-care', 'Size name: 2GB RAM, 32GB Storage Model Name Spark Go 2022 Wireless Carrier Unlocked Brand Tecno Form factor Touch Memory Storage Capacity 32 GB About this item 5000mAh powerful battery with 46 days standby | AI Battery Lab | Ultra Battery Saver 6.52” HD+ Dot notch handy display for great entertainment |120Hz Touch Sampling rate| IPX2 Water Protection Excellent photography with 13MP AI Dual rear camera with dual Flashlight | Portrait mode | Smile Shot| 1080p Time Lapse New Stylish Design with Anti-Oil Fingerprint sensor 8MP selfie camera with microslit front flash | Adjustable brightness feature', 'gg', 'gg,gg,gg', 'drink.jpg', 434, 2452345),
(5, 'ggg', 'ggg', 'self-care', 'Size name: 2GB RAM, 32GB Storage Model Name Spark Go 2022 Wireless Carrier Unlocked Brand Tecno Form factor Touch Memory Storage Capacity 32 GB About this item 5000mAh powerful battery with 46 days standby | AI Battery Lab | Ultra Battery Saver 6.52” HD+ Dot notch handy display for great entertainment |120Hz Touch Sampling rate| IPX2 Water Protection Excellent photography with 13MP AI Dual rear camera with dual Flashlight | Portrait mode | Smile Shot| 1080p Time Lapse New Stylish Design with Anti-Oil Fingerprint sensor 8MP selfie camera with microslit front flash | Adjustable brightness feature', 'gg', 'gg,gg,gg', 'dettol.jpg', 445, 444),
(6, '5', 'f', 'self-care', '1', '1', '1', 'dettol.jpg', 10, 100),
(7, '1', 'f', 'machine', '1', '1', '1', 'dettol.jpg', 12, 100),
(8, '1', 'f', 'machine', '1', '1', '1', 'dettol.jpg', 12, 100),
(9, '1', 'f', 'machine', '1', '1', '1', 'dettol.jpg', 1, 100),
(10, 'rrrrrrrr', 'rrrrrrrrrrrr', 'self-care', 'gggg', 'gg', 'gg', 'hair.jpg', 9, 333),
(11, 'dd', 'dd', 'self-care', 'Size name: 2GB RAM, 32GB Storage Model Name Spark Go 2022 Wireless Carrier Unlocked Brand Tecno Form factor Touch Memory Storage Capacity 32 GB About this item 5000mAh powerful battery with 46 days standby | AI Battery Lab | Ultra Battery Saver 6.52” HD+ Dot notch handy display for great entertainment |120Hz Touch Sampling rate| IPX2 Water Protection Excellent photography with 13MP AI Dual rear camera with dual Flashlight | Portrait mode | Smile Shot| 1080p Time Lapse New Stylish Design with Anti-Oil Fingerprint sensor 8MP selfie camera with microslit front flash | Adjustable brightness feature', 'dd', 'dd', 'dettol.jpg', 233, 2323);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_quantity` int(3) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_Lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_id` int(3) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_Lname`, `email`, `user_password`, `user_id`, `user_fname`, `user_address`) VALUES
('taha', 'user@gmail.com', 'user', 52, 'md', '1'),
('1', '1', '1', 55, '1', 'NO.18, 1ST FLOOR, 3RD MAIN, MUNIYELLAPPA LAYOUT, VINAYAKANAGAR, J.P NAGAR, 5TH PHASE BANGALURU, KARNATAKA, INDIA - 560078'),
('afd', '1d@gmail.com', '1', 56, 'dfd', 'fd'),
('f', '1adf0@gmail.com', '1', 57, 'd', '2'),
('afd', '10@gmail.com', '1', 58, 'fa', 'w'),
('1', '1', '1', 59, '1', '1'),
('1', '1', '11', 60, '1', '1'),
('1', '1', '1', 61, '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
