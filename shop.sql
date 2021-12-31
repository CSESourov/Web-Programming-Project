-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 06:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Chockes', 500),
(2, 'Coffee', 500),
(3, 'Juice', 400),
(4, 'Ice Cream', 350),
(5, 'Coca Cola', 250),
(6, 'Paste', 200),
(7, 'Oil', 200),
(8, 'Spice', 170),
(9, 'Package', 170);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repeat_password` varchar(20) NOT NULL,
  `contract` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `repeat_password`, `contract`, `city`, `address`) VALUES
(1, 'tanvir', 'tanvir@gmail.com', '123456', '123456', '0171546573', 'syl', '16/09 MODHUSHAHID,SY');

-- --------------------------------------------------------

--
-- Table structure for table `user_item`
--

CREATE TABLE `user_item` (
  `id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `item_id` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_item`
--
ALTER TABLE `user_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_item`
--
ALTER TABLE `user_item`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
