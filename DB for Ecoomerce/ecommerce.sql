-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 12:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'LENOVO'),
(3, 'DELL'),
(4, 'PANASONIC'),
(5, 'TOSHIBA'),
(6, 'SONY ERISSION ');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `p_id` int(10) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_address`, `qty`) VALUES
(29, '::1', 0),
(31, '::1', 0),
(32, '::1', 0),
(33, '::1', 0),
(34, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catogories`
--

CREATE TABLE `catogories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catogories`
--

INSERT INTO `catogories` (`cat_id`, `cat_title`) VALUES
(1, 'LAPTOP  '),
(10, 'MOBILES'),
(11, 'CAMERAS'),
(12, 'COSMETICS'),
(14, 'ELECTRONIC ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_password`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `customer_address`) VALUES
(1, '::1', 'Talha Khan Khalil', 'talhakhankhalil@gmail.com', 'desire2get', '   Pakistan', 'Peshawar', '03239557040', 'pictalha.png', 'Peshawar '),
(2, '::1', 'Azlan', 'azlan@gmail.com', '372e1d7f026ea79307e5adc169d0be94', '   Pakistan', 'Peshawar', '03239557040', 'IMG_20160503_122556.jpg', 'Peshawar'),
(3, '::1', 'umar khan', 'umar@gmail.com', '372e1d7f026ea79307e5adc169d0be94', '   Pakistan', 'Peshawar ', '03239557040', 'IMG_20160503_122556.jpg', 'Peshawar '),
(4, '::1', 'umar khan', 'umar@gmail.com', '372e1d7f026ea79307e5adc169d0be94', '   Pakistan', 'Peshawar ', '03239557040', 'IMG_20160503_122556.jpg', 'Peshawar '),
(5, '::1', 'suleman  Khan Khalil', 'suleman@gmail.com', '2e82e92f65d2cfa745bf5a829f3bb2ce', 'United Kingdom', 'Peshwar ', '03239557040', 'IMG_20160503_122556.jpg', 'Peshawar '),
(6, '::1', 'Talha Khan Khalil Yousafzai khan', 'talha@gmail.com', '911499beceda05c9493fe43e253879b0', '   Pakistan', 'Peshawar', '03239557040', 'Facebook-stylish-DP-for-boys.jpg', 'Peshawar '),
(7, '::1', 'khan', 'khan@gmail.com', '372e1d7f026ea79307e5adc169d0be94', '   Pakistan', 'Peshawar', '03239557040', 'IMG_20160503_122556.jpg', 'Peshawar '),
(8, '::1', 'ali', 'ali@gmail.com', '372e1d7f026ea79307e5adc169d0be94', '   Pakistan', 'Peshawar ', '03239557040', 'camera1.jpg', 'Peshawar '),
(9, '::1', 'alikhan', 'alikhan@gmail.com', '2e82e92f65d2cfa745bf5a829f3bb2ce', '   Pakistan', 'Peshawar ', '03239557040', 'Qmobile.jpg', 'Peshawar ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_cat`, `product_brand`, `product_image`, `product_price`, `product_description`, `product_keywords`) VALUES
(23, 'Dell talha ', 3, 2, 'samsung.png', 400, '<p>talha khan khalil</p>', 'kl'),
(24, 'Dell talha ', 2, 4, 'camera1.jpg', 400, '<p>talha khan khalil</p>', 'jk'),
(25, 'Dell talha ', 1, 4, 'dell1.jpg', 400, '<p>talha khan khalil</p>', 'jk'),
(26, 'Dell talha ', 5, 2, 'toshiba.jpg', 400, '<p>talha khan khalil</p>', 'io'),
(27, 'Dell talha ', 3, 4, 'camera1.jpg', 400, '<p>talha khan khalil</p>', 'kkl'),
(28, 'Lenovo', 2, 2, 'toshiba.jpg', 1230, '<p>This is new laptop</p>', 'Laptopn new here '),
(29, 'Dell talha', 4, 1, 'dell.jpg', 1200, '<p>Ths is a new laptop</p>', 'talha'),
(31, 'HP ', 3, 1, 'samsung.png', 1200, '<p>This is a new laptop</p>', 'Laptopn new here '),
(32, 'Dell latest', 1, 3, 'dell.jpg', 1220, '<p>This is a dell new laptop here&nbsp;</p>', 'dell laptop'),
(33, 'Toshiba', 1, 5, 'toshiba.jpg', 300, '<p>This is Toshiba laptop&nbsp;</p>', 'Toshiba Laptop'),
(34, 'Camera latest', 2, 3, 'camera4.jpg', 1200, '<p>This is a new camera here&nbsp;</p>', 'new camera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `catogories`
--
ALTER TABLE `catogories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `catogories`
--
ALTER TABLE `catogories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
