-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2026 at 09:08 PM
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
-- Database: `testshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL COMMENT 'Cart_id',
  `user_id` int(11) NOT NULL COMMENT 'Which user',
  `product_id` int(11) NOT NULL COMMENT 'Which product',
  `quantity` int(11) NOT NULL COMMENT 'How many times'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='cart ';

-- --------------------------------------------------------

--
-- Table structure for table `oneorder`
--

CREATE TABLE `oneorder` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL COMMENT 'order id',
  `user_id` int(11) NOT NULL COMMENT 'customer id',
  `total` decimal(10,0) NOT NULL COMMENT 'total price',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'order time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='order';

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='order items ';

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL COMMENT 'payment id',
  `order_id` int(11) NOT NULL,
  `payment_method` enum('cod','visa','master','amex') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'product Id',
  `name` varchar(100) NOT NULL COMMENT 'product name',
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL COMMENT 'price',
  `stock` int(11) NOT NULL COMMENT 'available quantity ',
  `image` varchar(225) NOT NULL COMMENT 'image file name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='product ';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'User ID',
  `name` varchar(100) NOT NULL COMMENT 'Customer name',
  `email` varchar(100) NOT NULL COMMENT 'Customer email ',
  `address` text NOT NULL,
  `mobile` int(11) NOT NULL COMMENT 'Customer mobile number ',
  `password` varchar(225) NOT NULL COMMENT 'Hashed password',
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='customers ';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `mobile`, `password`, `role`) VALUES
(4, 'admin', 'admin@email.com', 'test', 1234567890, 'admin', 'admin'),
(11, 'user', 'user@email.com', 'test', 1234567890, 'user', 'user'),
(12, 'user1', 'user1@email.com', 'test1', 1234567890, 'user1', 'user'),
(13, 'user1', 'user1@email.com', '123', 123, 'user1', 'user'),
(14, 'user2', 'user2@email.com', 'test2', 12345, 'test2', 'user'),
(15, 'u3', 'u3@email.com', '3', 33, '3', 'user'),
(16, 'u4', 'u4@email.com', '3', 3, '3', 'user'),
(17, '4', '4@4.com', '4', 4, '4', 'user'),
(18, '5', '5@5.com', '5', 5, '5', 'user'),
(19, '6', '66', '66', 66, '6', 'user'),
(20, '88', '88', '88', 88, '88', 'user'),
(21, '8', '8', '8', 8, '8', 'user'),
(22, '9', '9@9.com', '9', 9, '9', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oneorder`
--
ALTER TABLE `oneorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cart_id';

--
-- AUTO_INCREMENT for table `oneorder`
--
ALTER TABLE `oneorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'order id';

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'payment id';

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'product Id';

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
