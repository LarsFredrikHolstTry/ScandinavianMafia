-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 10:52 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafiagamev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `krim`
--

CREATE TABLE `krim` (
  `username` text NOT NULL,
  `krim1` varchar(200) NOT NULL DEFAULT '0',
  `krim1a` varchar(200) NOT NULL DEFAULT '0',
  `krim2` varchar(200) NOT NULL DEFAULT '0',
  `krim2a` varchar(200) NOT NULL DEFAULT '0',
  `krim3` varchar(200) NOT NULL DEFAULT '0',
  `krim3a` varchar(200) NOT NULL DEFAULT '0',
  `krim4` varchar(200) NOT NULL DEFAULT '0',
  `krim4a` varchar(200) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krim`
--

INSERT INTO `krim` (`username`, `krim1`, `krim1a`, `krim2`, `krim2a`, `krim3`, `krim3a`, `krim4`, `krim4a`, `id`) VALUES
('jonas', '0', '', '0', '', '0', '', '0', '', 3),
('netflix', '0', '0', '0', '0', '0', '0', '0', '0', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `signup_ip` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `account_type` char(1) NOT NULL DEFAULT '1',
  `password` varchar(50) NOT NULL DEFAULT '',
  `money` varchar(20) NOT NULL DEFAULT '1500',
  `bank_money` int(200) NOT NULL DEFAULT '0',
  `exp` varchar(20) NOT NULL DEFAULT '0',
  `rank` char(2) DEFAULT '0',
  `health` char(3) NOT NULL DEFAULT '100',
  `email` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `img_tmp` text NOT NULL,
  `kuler` int(11) NOT NULL,
  `ant_drap` int(6) NOT NULL,
  `vapen` text NOT NULL,
  `bil` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `signup_ip`, `username`, `account_type`, `password`, `money`, `bank_money`, `exp`, `rank`, `health`, `email`, `img`, `img_tmp`, `kuler`, `ant_drap`, `vapen`, `bil`) VALUES
(3043, '', 'jonas', '1', '9c5ddd54107734f7d18335a5245c286b', '1500', 0, '0', '0', '100', 'jonas@jonas.jonas', '', '', 0, 0, '', ''),
(3047, '', 'netflix', '2', '21c603dbf852f78063f98674640ab339', '695', 108502, '17776', '2', '100', '123@123.com', '', '', 114, 0, 'M16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krim`
--
ALTER TABLE `krim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krim`
--
ALTER TABLE `krim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3048;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
