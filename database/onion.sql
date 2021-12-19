-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 04:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(5, ' bdjakaria629@gmail.com', 'jakaria', 'jakaria'),
(6, ' j@gmail.com', 'suman', 'suman');

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE `food_details` (
  `id` int(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_details`
--

INSERT INTO `food_details` (`id`, `title`, `description`, `image`, `price`) VALUES
(39, ' Healthy Meal Plan', 'Healthy Meal Plan is very testy food. It is good for health.', 'upload/lunch6.png', 50),
(40, 'Chickern Fried Benton', 'Chiken fried benton.It take all indian people in the mornig. it is delicious food .', 'upload/lunch5.png', 65),
(41, 'Tarragoan-Rubbed-Salmon', 'Tarragoan-Rubbed-Salmonn is very testy food. It is good for health.', 'upload/lunch3.png', 80),
(42, 'Indian Lunch', 'It take all indian people in the mornig. it is delicious food .', 'upload/lunch4.png', 50),
(43, 'Beaf Stacke', 'Beaf stacke is our new item. It is very testy food.', 'upload/lunch1.png', 100),
(44, '	Honey-soy-salmon with papers', 'Healthy Meal Plan is very testy food. It is good for health.', 'upload/lunch2.png', 39);

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `id` int(50) NOT NULL,
  `food` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(100) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_contact` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(2, 'Chickern Fried Benton', 120, 1, 120, '2021-12-17 14:36:34', 'Oredered', 'Md jakaria', '42353245', 'jakaria@gmail.com', 'GSDFG SFSF EFSF'),
(3, ' Healthy Meal Plan', 50, 2, 100, '2021-12-17 14:37:16', 'Oredered', 'Md jakaria', '01789714761', 'bdjakaria630@gmail.com', 'boikaly, khulna ,Bangladesh.'),
(4, 'Indian Lunch', 50, 2, 100, '2021-12-17 14:41:05', 'Oredered', 'shirin', '2324234234', 'shirin@gmail.com', 'baten kha more chapai nawabgonj bangladesh.'),
(5, 'Indian Lunch', 50, 2, 100, '2021-12-17 14:41:31', 'Oredered', 'shirin', '2324234234', 'shirin@gmail.com', 'baten kha more chapai nawabgonj bangladesh.'),
(6, 'Chickern Fried Benton', 120, 1, 120, '2021-12-17 14:41:57', 'Oredered', 'shirin ', '34234234', 'milon@gmail.com', 'sfsfsff');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(255) NOT NULL,
  `username` varchar(2500) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Md_Jakaria', ' bdjakaria629@gmail.com ', 1789714761, 'jakaria'),
(10, 'shuvo', ' s@gmail.com ', 2345678, 'fghjkl'),
(13, 'manarul', ' manarul@gmail.com ', 1789714761, 'manarul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
