-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 11:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `state`, `pincode`) VALUES
(1, 'Khushi kumari', 'Bihar', 0),
(2, 'Khushi kumari', 'Bihar', 802125),
(3, 'Khushi kumari', 'Bihar', 802125),
(4, 'Khushi kumari', 'Bihar', 802125),
(5, 'Khushi kumari', 'Sikkim', 737139),
(6, 'dhana', 'andhra', 873623),
(7, 'shreya', 'Haryana ', 876425),
(8, 'Khushi kumari', 'Bihar', 802125),
(9, 'Khushi kumari', 'Bihar', 802125),
(10, 'Khushi kumari', 'Bihar', 802125),
(11, 'Khushi kumari', 'Bihar', 802125),
(12, 'Khushi kumari', 'Bihar', 802125),
(13, 'Khushi kumari', 'Bihar', 802125),
(14, 'Khushi kumari', 'Bihar', 802125),
(15, 'Khushi kumari', 'Bihar', 802125),
(16, 'Khushi kumari', 'Bihar', 802125),
(17, 'Khushi kumari', 'Bihar', 802125),
(18, 'Khushi kumari', 'Bihar', 802125),
(19, 'Khushi kumari', 'Bihar', 802125),
(20, 'Khushi kumari', 'Bihar', 802125),
(21, 'Khushi kumari', 'Bihar', 802125),
(22, 'Khushi kumari', 'Bihar', 802125),
(23, 'Khushi kumari', 'Bihar', 802125),
(24, 'Khushi kumari', 'Bihar', 802125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
