-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 08:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(255) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('Admin', 'Niraj12345@');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `msg` text NOT NULL,
  `Msg_DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `mobile`, `email`, `msg`, `Msg_DateTime`) VALUES
(1, 'Niraj Kumar Singh', '7070340101', 'snirajsingh678@gmail.com', 'hello niraj this is for testing', '2022-07-29 15:18:22'),
(2, 'Niraj Kumar Singh', '07070340101', 'snirajsingh678@gmail.com', 'hello, thios is for testing\r\n', '2022-07-29 15:19:43'),
(3, 'shivam', '9523227852', 'shivamadx@gmail.com', 'hii nikuu', '2022-08-02 10:13:24'),
(4, 'shivam', '9523227852', 'shivamadx@gmail.com', 'hii i am shivam from adapur', '2022-08-02 10:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `Order_DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `Order_DateTime`) VALUES
(14, 'Niraj Kumar Singh', '07070340101', 'snirajsingh678@gmail.com', 'cash on delivery', 'dubaha, adapur', 'adapur', 'Motihari', 'bihar', 'India', '', '2022-08-03 19:43:51'),
(15, 'Niraj Kumar Singh', '07070340101', 'snirajsingh678@gmail.com', 'cash on delivery', 'dubaha, adapur', 'adapur', 'Motihari', 'bihar', 'India', '', '2022-08-03 19:46:53'),
(16, 'BIBHA DEVI', '9771338050', 'snirajsingh678@gmail.com', 'cash on delivery', 'dubaha, adapur', 'adapur', 'Motihari', 'bihar', 'India', '', '2022-08-03 20:13:27'),
(17, 'Niraj Kumar Singh', '07070340101', 'snirajsingh678@gmail.com', 'cash on delivery', 'dubaha, adapur', 'adapur', 'Motihari', 'bihar', 'India', '', '2022-08-03 22:22:07'),
(18, 'Niraj Kumar Singh', '07070340101', 'snirajsingh678@gmail.com', 'cash on delivery', 'dubaha, adapur', 'adapur', 'Motihari', 'bihar', 'India', '845301', '2022-08-05 12:56:43'),
(19, 'Niraj Kumar Singh', '07070340101', 'snirajsingh678@gmail.com', 'cash on delivery', 'dubaha, adapur', 'adapur', 'Motihari', 'bihar', 'India', '845301', '2022-08-05 12:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(3, 'Shoe', '799', 'buy-2.jpg'),
(4, 'T-shirt', '399', 'gallery-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `Created_at`) VALUES
(1, 'Niraj123', '$2y$10$QTKeSLcB0EbEOu7ksIWY5ukl8bxMRKuoDhFsIm6ANnp.4.YouAvlm', '2022-07-29 15:05:34'),
(2, 'shivam', '$2y$10$VWi17EeO7IFLMXqpjxE3dOSrPdzllgtWCR0AAetwNKXd6mFDjE4Mu', '2022-08-02 09:43:15'),
(3, 'bibha', '$2y$10$h6eESmODhO7sPM9lx6MMVumSgk4mGkM6dDTSUypyKZPfZoSjt3xGm', '2022-08-03 20:09:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
