-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 05:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phishing`
--

-- --------------------------------------------------------

--
-- Table structure for table `hacked`
--

CREATE TABLE `hacked` (
  `number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hacked`
--

INSERT INTO `hacked` (`number`, `email`, `password`) VALUES
(1, 'test', 'test'),
(2, 'aaaaa', 'aaaaa'),
(3, 'ahmed@gmail.com', '4578245678686'),
(4, 'ahmed0saber@gmail.com', 'ahmed0saber'),
(5, 'ahmed0saber@gmail.com', 'ahmed0saber'),
(6, 'ahmed0saber@gmail.com', 'ahmed0saber'),
(7, 'asf', 'asf'),
(8, 'asf', 'grgerg'),
(9, 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hacked`
--
ALTER TABLE `hacked`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hacked`
--
ALTER TABLE `hacked`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
