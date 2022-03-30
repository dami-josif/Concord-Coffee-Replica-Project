-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 04:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concord_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_qty` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `product_name`, `product_price`, `product_qty`, `date_created`) VALUES
(41, '3', 'Sweet and Smooth', '20', '3', '2022-03-30 03:56:00'),
(42, '3', 'The concord classic', '20', '4', '2022-03-30 04:17:53'),
(43, '3', 'Bright and Balanced', '20', '3', '2022-03-30 04:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `password_reset` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `user_password`, `user_role`, `password_reset`, `date_created`) VALUES
(1, 'Dami', 'Dami', '2018-02-09', 'admin@gmail.com', '+2348147778188', '$2y$10$HPbNYs//2t/mhDRDffmyFe73xS2GaFFpeSlf6IJxYrfY1zY5HVjZK', 'admin', '', '2022-03-18 02:26:16'),
(3, 'Oluwadamilare', 'joseph', '2010-06-10', 'fef@gmail.com', '+2348147778181', '$2y$10$5j67wew9fA4CUvrdyKnObusfcN6KVfKbXDvyDZYnLru4nMGs0/TKi', 'user', '', '2022-03-19 12:50:29'),
(4, 'Dami', 'Dami', '2022-03-10', 'fef@gmail.com', '+2348147778188', '$2y$10$2jTWQDhvLcdVfplTi1muYu41C4IropmcZ.wimNbCre3ggxKdR/7qu', 'user', '', '2022-03-21 05:06:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
