-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2020 at 06:00 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evistech_queue`
--

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `counter_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `current_queue` int(3) NOT NULL,
  `counter_status` enum('active','inactive') DEFAULT 'active',
  `modified_at` datetime NOT NULL,
  `modified_by` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`counter_id`, `user_id`, `current_queue`, `counter_status`, `modified_at`, `modified_by`) VALUES
(2, 2, 24, 'active', '2020-02-11 11:48:35', 2),
(4, 13, 26, 'active', '2020-02-11 11:50:53', 13);

-- --------------------------------------------------------

--
-- Table structure for table `queue_status`
--

CREATE TABLE `queue_status` (
  `queue_id` tinyint(1) NOT NULL,
  `current_queue` int(3) NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `queue_status`
--

INSERT INTO `queue_status` (`queue_id`, `current_queue`, `modified_at`, `modified_by`) VALUES
(1, 26, '2020-02-11 11:50:53', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(128) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(2) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(2, 'admin', '111111', '2020-02-05 00:00:00', 1, NULL, NULL),
(13, 'Modhu', '222222', '2020-02-11 11:37:41', 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`counter_id`);

--
-- Indexes for table `queue_status`
--
ALTER TABLE `queue_status`
  ADD PRIMARY KEY (`queue_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `counter_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queue_status`
--
ALTER TABLE `queue_status`
  MODIFY `queue_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
