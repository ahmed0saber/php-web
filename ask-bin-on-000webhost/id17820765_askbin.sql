-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2021 at 11:51 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17820765_askbin`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` smallint(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `formname` varchar(255) NOT NULL,
  `numberofquestions` smallint(11) NOT NULL,
  `questions` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `owner`, `formname`, `numberofquestions`, `questions`) VALUES
(8, 'ahmed0saber', 'test', 3, '(1) What is your name ?\r\n(2) What is your age ?\r\n(3) What is your fav color ?'),
(11, 'ahmed0saber', 'form1', 3, '(1) First Name ?\r\n(2) Last Name ?\r\n(3) Phone Number ?\r\n'),
(12, 'ahmed0saber', 'quiz', 4, '(1) what is your name ?\r\n(2) your job ?\r\n(3) what is your country ?\r\n(4) best wishes ?\r\n'),
(14, 'ahmed0saber', 'course form', 2, '(1) First Name ?\r\n(2) Phone number ?\r\n'),
(18, 'ahmed0saber', 'test2', 2, '(1) First Name ?\r\n(2) Last Name ?\r\n'),
(19, 'ahmed0saber', 'form11', 1, '(1) name ?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `submits`
--

CREATE TABLE `submits` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `formname` varchar(255) NOT NULL,
  `answers` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submits`
--

INSERT INTO `submits` (`id`, `owner`, `formname`, `answers`) VALUES
(1, 'ahmed0saber', 'test', '(1) Ahmed\r\n(2) 20\r\n(3) Blue'),
(2, 'ahmed0saber', 'test', '(1) Ali\r\n(2) 19\r\n(3) Purple'),
(3, 'ahmed0saber', 'test', '(1) Ashraf\r\n(2) 21\r\n(3) Red'),
(4, 'ahmed0saber', 'form1', '(1) Ahmed\r\n(2) Saber\r\n(3) +201208611892'),
(5, 'ahmed0saber', 'test', '(1) ahmed\r\n(2) 22\r\n(3) teal\r\n'),
(12, 'ahmed0saber', 'test', '(1) Ahmed Saber Fathy\r\n(2) 20.5\r\n(3) Teal\r\n'),
(13, 'ahmed0saber', 'test', '(1) \r\n(2) \r\n(3) \r\n'),
(14, 'ahmed0saber', 'test', '(1) Android\r\n(2) 00\r\n(3) Purple\r\n'),
(15, 'ahmed0saber', 'test', '(1) any name\r\n(2) any age\r\n(3) any color\r\n'),
(16, 'ahmed0saber', 'test', '(1) Amr\r\n(2) 22\r\n(3) Blue\r\n'),
(17, 'ahmed0saber', 'test', '(1) Asf\r\n(2) 20\r\n(3) ...\r\n'),
(18, 'ahmed0saber', 'form11', '(1) ahmed\r\n'),
(19, 'ahmed0saber', 'form11', '(1) ali\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ahmed0saber', 'ahmed0saber33@gmail.com', 'b7c24dc09c5511d3321bf14c029ffd21'),
(2, 'AhmedSaber', 'ahmed0saber11@gmail.com', 'b7c24dc09c5511d3321bf14c029ffd21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submits`
--
ALTER TABLE `submits`
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
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `submits`
--
ALTER TABLE `submits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
