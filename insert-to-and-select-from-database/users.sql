-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 03:14 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'AhmedSaber', 'ahmed0saber@gmail.com', '523c05bbdbc9698f501649f98167c0ca'),
(2, 'asaber33', 'ahmed0saber1@gmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(3, 'ahmed0saber', 'asf55533@yahoo.com', '7b064dad507c266a161ffc73c53dcdc5'),
(4, 'Zero', 'ahmed0saber55@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(5, 'AzeroS', 'ahmed0saber2@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(6, 'AzeroS1', 'ahmed0saber3@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(7, 'AzeroS11', 'ahmed0saber4@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(8, 'asaber33', 'ahmed0saber6@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(9, 'ahmed00', 'ahmed0saber00@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(10, 'Zero', 'ahmed0saber111@gmail.com', '7b064dad507c266a161ffc73c53dcdc5'),
(11, 'ahmed00saber', 'ahmed00saber@gmail.com', 'fedfb36fb4e47f5729255f13c0fc3ca9'),
(12, 'ahmed1saber', 'ahmed1saber@gmail.com', 'ad0472d6f5e4f2d1185a92cda094952f'),
(13, 'a0s', 'a0s@gmail.com', 'b68a977d17fae681d6fdbf8dfcf790f5'),
(14, 'John', 'Doe', 'john@example.com'),
(15, 'ahmed', 'ahmed@gmail.com', '4578245678686'),
(16, 'ahmed', 'ahmed@gmail.com', '4578245678686'),
(17, 'ahmed', 'ahmed@gmail.com', '4578245678686');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
