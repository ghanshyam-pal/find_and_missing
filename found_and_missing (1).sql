-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 12:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `found_and_missing`
--

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(7) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `found_date` datetime DEFAULT current_timestamp(),
  `image` varchar(200) DEFAULT NULL,
  `missing_id` int(7) DEFAULT NULL,
  `user_id` int(7) DEFAULT NULL,
  `status` int(7) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `name`, `phone`, `address`, `description`, `state`, `city`, `found_date`, `image`, `missing_id`, `user_id`, `status`) VALUES
(33, 'Deepak', '1234567890', 'A-23, Aurobindo Marg, Next to free church, Green Park', 'qsa sd fsdfs fds sdf', 'Delhi', 'Noida', '2023-12-19 00:00:00', 'uploads/found/1701492790_69d071c32877b6bfcb89.jpeg', NULL, 1, 1),
(34, 'Deepak', '1234567890', 'A-23, Aurobindo Marg, Next to free church, Green Park', 'asd sdfs sdf s', 'Delhi', 'Delhi', '2023-12-11 00:00:00', 'uploads/found/1702357003_fe38cbe71ff894285225.jpg', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(7) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `missing_date` datetime DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` int(7) DEFAULT NULL,
  `user_id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`id`, `name`, `phone`, `address`, `description`, `state`, `city`, `missing_date`, `image`, `status`, `user_id`) VALUES
(15, 'Ishant Sharma', '1234567890', 'h202 adsd asd  adsdasd', 'assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf ', 'Delhi', 'Delhi', '2023-11-30 00:00:00', 'uploads/missing/1701147050_08a6c10a90e6d4ad36e4.jpg', 34, 2),
(16, 'Deepak', '1234567890', 'h202 adsd asd  adsdasd', 'assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf asd assfsdf ', 'Delhi', 'Ert', '2023-11-29 00:00:00', 'uploads/missing/1701147075_8631c6afdceee7a59fc3.jpeg', 33, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(7) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`) VALUES
(1, 'ghanshyampal789@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(2, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Admin'),
(3, 'demo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
