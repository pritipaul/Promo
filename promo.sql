-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 06:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promo`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `nos` int(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `ph` int(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date of submetion` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`nos`, `name`, `ph`, `email`, `date of submetion`) VALUES
(29, 'etruj ', 2147483647, 'asd@RFD', '2021-04-16 20:10:50.8517'),
(30, 'Priti Paul', 2147483647, 'paulpriti877@gmail.c', '2021-04-16 20:36:09.2260'),
(32, 'Superna Pa', 2147483647, 'sdfcf@gmail.com', '2021-04-16 20:44:34.2819');

-- --------------------------------------------------------

--
-- Table structure for table `com21`
--

CREATE TABLE `com21` (
  `id` int(3) NOT NULL,
  `name1` text NOT NULL,
  `text` varchar(200) NOT NULL,
  `date and time` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `com21`
--

INSERT INTO `com21` (`id`, `name1`, `text`, `date and time`) VALUES
(13, 'riya ', 'this is the good page for our student', '0000-00-00 00:00:00.0000'),
(14, 'riya ', 'this is the good page for our student', '0000-00-00 00:00:00.0000'),
(15, 'puja ', 'it is true', '0000-00-00 00:00:00.0000'),
(16, 'puja ', 'it is true', '0000-00-00 00:00:00.0000'),
(17, 'riya ', 'ffhbghgfh', '0000-00-00 00:00:00.0000'),
(18, 'riya ', 'ffhbghgfh', '0000-00-00 00:00:00.0000');

-- --------------------------------------------------------

--
-- Table structure for table `dfg`
--

CREATE TABLE `dfg` (
  `nos` int(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `room` varchar(100) NOT NULL,
  `date and time` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dfg`
--

INSERT INTO `dfg` (`nos`, `name`, `room`, `date and time`) VALUES
(6, '', '', '2021-04-16 20:11:56.3443');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`nos`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `com21`
--
ALTER TABLE `com21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dfg`
--
ALTER TABLE `dfg`
  ADD PRIMARY KEY (`nos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `nos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `com21`
--
ALTER TABLE `com21`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dfg`
--
ALTER TABLE `dfg`
  MODIFY `nos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
