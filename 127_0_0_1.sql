-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 12:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saya_frames`
--
CREATE DATABASE IF NOT EXISTS `saya_frames` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `saya_frames`;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `addressId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistId` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistId`, `fname`, `lname`, `email`) VALUES
(2, 'Faizan', 'ali', 'faizanmalik135@gmail.com'),
(3, 'Mohsin', 'Ayub', 'mohsin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `artworkId` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `artistId` int(11) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`artworkId`, `heading`, `description`, `artistId`, `category`, `image`) VALUES
(1, 'Test', 'This is test art work', 2, 'Music', 'uploads/e-com.PNG'),
(2, 'Test 2', 'This is test art work 2', 2, 'Gifts', 'uploads/hotel.png'),
(3, 'Test 3', 'This is test art work 3', 2, 'Music', 'uploads/digitalMarketing.PNG'),
(4, 'Test 4', 'This is test art work 4', 3, 'Gifts', 'uploads/hotel.png'),
(5, 'Test 5', 'This is test art work 5', 3, 'Music', 'uploads/hotel.png');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `name`, `email`, `mobile`, `password`, `address`, `city`) VALUES
(17, 'FaizanMalik', 'faizanmalik135@gmail.com', '03225555134', '1111', 'House No. DN-233, Street No. 04, Sector 4A, KSS', 'Rawalpindi'),
(18, 'faiza9', '', '', '', '', ''),
(19, 'Faizan', 'faizanmalik@gmail.com', '03225555134', '1234', 'House No. DN-233, Street No. 04, Sector 4A, Khayaban-e-sirsyed', 'Rawalpindi');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` int(11) NOT NULL,
  `filter_heading` varchar(255) NOT NULL,
  `filter_option` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `filter_heading`, `filter_option`, `page_id`) VALUES
(3, 'Test Filter', 'filter', 3),
(4, 'Test Filter', 'filter2', 3),
(5, 'Size', 'Small', 3),
(6, 'Test1', 'test1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `orderItemId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderItemId`, `orderId`, `productId`, `qty`, `price`, `discount`) VALUES
(24, 39, 6, '1', '1000', '10');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `shippingAddress` varchar(500) NOT NULL DEFAULT '0',
  `date` varchar(255) NOT NULL,
  `totalAmount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `customerId`, `shippingAddress`, `date`, `totalAmount`, `status`) VALUES
(39, 17, 'House No. DN-233, Street No. 04, Sector 4A, KSS', '2021-08-29', '1000', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `paymentId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `accountTitle` varchar(255) NOT NULL,
  `expiryDate` varchar(255) NOT NULL,
  `cardNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_services`
--

CREATE TABLE `tbl_courier_services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` float NOT NULL,
  `charges` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mat_colors`
--

CREATE TABLE `tbl_mat_colors` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mat_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `page_name`) VALUES
(1, 'Products - Main Page'),
(2, 'Products - Exclusive'),
(3, 'Products - Painting'),
(4, 'Products - Wooden Artwork'),
(5, 'Products - Prints'),
(6, 'Services - Main Page'),
(7, 'Services - Custom Framing'),
(8, 'Services - Corporate Services'),
(9, 'Services - Gallery Wall Design'),
(10, 'Services - Printing'),
(11, 'Services - Screen Printing'),
(12, 'Services - Laser Cutting'),
(13, 'What We Frame - What We Frame Main Page'),
(14, 'What We Frame - Printing and Canvas'),
(15, 'What We Frame - Prints'),
(16, 'What We Frame - Educational And Professional'),
(17, 'What We Frame - Souvenirs'),
(18, 'What We Frame - Mirrors & More'),
(19, 'Framing Supplies - Framing Supplies Main Page'),
(20, 'Framming Supplies - Moulding'),
(21, 'Framing Supplies - Mat Board'),
(22, 'Framing Supplies - Glazing'),
(23, 'Framing Supplies - Loose Material'),
(24, 'Framing Supplies - Other Supplies'),
(25, 'Home Page');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_data`
--

CREATE TABLE `tbl_page_data` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_data`
--

INSERT INTO `tbl_page_data` (`id`, `page_id`, `section_id`, `data`) VALUES
(125, 4, 4, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"small_text\":\"$99999.00\",\"bg_img1\":\"uploads/logo_beats_large.jpg\",\"bg_img2\":\"uploads/logo_beats_large.jpg\",\"bg_img3\":\"uploads/logo_beats_large.jpg\",\"bg_img4\":\"uploads/logo_beats_large.jpg\",\"bg_img5\":\"uploads/logo_beats_large.jpg\"}'),
(126, 9, 17, '{\"normal_text\":\"test\",\"btn_blue_bg_label\":\"Test More\",\"btn_blue_bg_url\":\"google.com\"}'),
(127, 9, 1, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(128, 9, 2, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"sub_heading2\":\"Sub heading\",\"sub_heading3\":\"Sub heading\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(129, 9, 3, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(130, 9, 4, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"00009\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(131, 9, 5, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(132, 9, 6, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(133, 9, 7, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(134, 9, 8, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(135, 9, 9, '{\"main_heading\":\"Test\",\"sub_heading\":\"Your Next Generation Computer\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(136, 9, 10, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(137, 9, 11, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"sub_heading2\":\"Sub heading\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(138, 9, 12, '{\"main_heading\":\"Test\",\"sub_heading\":\"Sub Headnd\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(139, 9, 13, '{\"main_heading\":\"Test\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(140, 9, 14, '{\"main_heading\":\"Test\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}'),
(141, 9, 15, '{\"main_heading\":\"Test\",\"text\":\"$0005\",\"link1_label\":\"Test More\",\"link1_url\":\"google.com\",\"link2_label\":\"Test Now\",\"link2_url\":\"google.com\",\"bg_img\":\"uploads/ipad_pro_hero__c60u09fxbrsm_large.jpg\",\"bg_img_m\":\"uploads/iphone.png\"}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `bg_img` varchar(255) NOT NULL,
  `small_img` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `colors` text NOT NULL,
  `filter_options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `page_id`, `section_id`, `product_name`, `price`, `discount`, `description`, `features`, `product_img`, `bg_img`, `small_img`, `type`, `colors`, `filter_options`) VALUES
(5, 1, 2, 'Test', 1000, 30, '<p>TEST</p>', '<p>Test</p>', 'uploads/coming-soon-5152487_960_720.png', 'uploads/iphone.png', '', 'middle', 'Test', ''),
(6, 3, 1, 'Test', 1000, 10, '<p>Test</p>', '<p>Test</p>', 'uploads/index-bg.png', 'uploads/brick-wall-street-facade-night.jpg', '', 'inner', 'black', 'filter,Small');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wall_colors`
--

CREATE TABLE `tbl_wall_colors` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionsId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `paymentId` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_added`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '0000-00-00 00:00:00', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistId`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`artworkId`),
  ADD KEY `artistId` (`artistId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`orderItemId`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`paymentId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `tbl_courier_services`
--
ALTER TABLE `tbl_courier_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mat_colors`
--
ALTER TABLE `tbl_mat_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_data`
--
ALTER TABLE `tbl_page_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wall_colors`
--
ALTER TABLE `tbl_wall_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionsId`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `paymentId` (`paymentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `artworkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `orderItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_courier_services`
--
ALTER TABLE `tbl_courier_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mat_colors`
--
ALTER TABLE `tbl_mat_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_page_data`
--
ALTER TABLE `tbl_page_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_wall_colors`
--
ALTER TABLE `tbl_wall_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`);

--
-- Constraints for table `filters`
--
ALTER TABLE `filters`
  ADD CONSTRAINT `filters_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `tbl_pages` (`id`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tbl_products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`);

--
-- Constraints for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD CONSTRAINT `paymentdetails_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`);

--
-- Constraints for table `tbl_page_data`
--
ALTER TABLE `tbl_page_data`
  ADD CONSTRAINT `tbl_page_data_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `tbl_pages` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`paymentId`) REFERENCES `paymentdetails` (`paymentId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
