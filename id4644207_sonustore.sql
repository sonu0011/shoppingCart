-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2018 at 10:31 AM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4644207_sonustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brands_id` int(100) NOT NULL,
  `brands_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_title`) VALUES
(1, 'Nokia'),
(2, 'Apple'),
(3, 'Havells'),
(4, 'Tommy Hilfiger'),
(5, 'Raymour '),
(6, 'Hp');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `products_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_address`, `user_id`, `product_title`, `products_image`, `qty`, `price`, `total_amount`) VALUES
(5, 11, '192', 1, 'Tables', 'fr2.jpg', 1, 500, 500),
(8, 6, '192', 1, 'Jeans', 'jeansa.jpg', 1, 2000, 2000),
(11, 9, '192', 1, 'Chairs', 'fr1.jpg', 1, 1000, 1000),
(13, 5, '192', 1, 'Jeans', 'jeans.jpg', 1, 1000, 1000),
(14, 7, '192', 1, 'Saree', 'saree.jpg', 1, 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Man Wears'),
(3, 'Kids Wears'),
(4, 'Furniture'),
(5, 'Home Appliances'),
(6, 'Women wears ');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `p_name` int(100) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `tranx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(100) NOT NULL,
  `products_cat` int(100) NOT NULL,
  `products_brand` int(100) NOT NULL,
  `products_title` varchar(300) NOT NULL,
  `products_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `products_image` text NOT NULL,
  `products_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_cat`, `products_brand`, `products_title`, `products_price`, `product_desc`, `products_image`, `products_keywords`) VALUES
(1, 1, 1, 'Nokia 6', 15000, 'Latest Nokia 6 Android Phone ', 'nokia6.jpg', 'nokia6 mobiles '),
(2, 1, 1, 'Nokia 8', 35000, 'Latest Nokia 8 Android Phone ', 'nokia8.jpg', 'nokia8 android mobile'),
(3, 1, 2, 'Apple Iphone 8', 50000, 'New Apple Iphpne 8 Mobile Phone', 'iphone8.jpg', 'iphone8 mobile iphone'),
(4, 1, 6, 'Sandisk Pendrive 8Gb', 500, 'sandisk 8gb pendrive with a good read and write speed', 'pendrive.jpg', 'pendrive sandisk '),
(5, 2, 4, 'Jeans', 1000, 'New jeans are available in limited stock ', 'jeans.jpg', 'jeans '),
(6, 2, 4, 'Jeans', 2000, 'New jeans are available in limited stock', 'jeansa.jpg', 'jeans'),
(7, 6, 4, 'Saree', 1000, 'Sarees Online  Designer Sarees of 2018 ', 'saree.jpg', 'saree'),
(8, 6, 4, 'Gloves', 300, 'Gloves for women are available', 'mw1.jpg', 'gloves'),
(9, 4, 5, 'Chairs', 1000, 'Good charis are available at low cost', 'fr1.jpg', 'chairs'),
(10, 4, 5, 'Tables', 500, 'Tables are are available at low cost', 'fr.jpg', 'tables'),
(11, 4, 5, 'Tables', 500, 'Different types of tables are also available', 'fr2.jpg', 'tables'),
(12, 3, 4, 'T-Shirt', 500, 'United Colors of Benetton Girls\' T-Shirt', 'tshirts.jpg', 'tshirt '),
(13, 3, 4, 'Long Sleeve Top ', 500, 'United Colors of Benetton Girls\' Long Sleeve Top (17A3VQ0C13GVI906EL_White)', 'tshirts1.jpg', 'tshirts'),
(14, 5, 3, 'Kettles', 500, 'Previous page\r\nPrestige PKGSS 1.7 1500-Watt Electric...', 'kettle.jpg', 'kettle'),
(15, 5, 3, 'Inverters\r\n', 5000, 'Luminous Hkva 2 Kva Sine Cruze Wave UPS (Silver)\r\nSponsored\r\n[Sponsored]Luminous Hkva 2 Kva Sine Cruze Wave UPS (Silver)', 'invertors.jpg', 'invertors');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `tranx_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `emai` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `emai`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'sonu', 'kumar', 'skr3704@gmail.com', '123', '9877808072', 'Punhana, Haryana, India', 'kaddon'),
(2, 'sonu', 'kumar', 'skr37044@gmail.com', '456', '', 'Punhana, Haryana, India', '456'),
(3, 'sonu', 'kumar', 'skr370444@gmail.com', '456', '456', 'Punhana, Haryana, India', '456'),
(4, 'sonu', 'kumar', 'sonu@gmail.com', '456456', '456456', 'vpo kaddon', 'vpo kaddon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
