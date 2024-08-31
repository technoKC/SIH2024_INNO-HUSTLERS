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
-- Table structure for table `area_data`
--

CREATE TABLE `area_data` (
  `id` int(11) NOT NULL,
  `temperature` double NOT NULL,
  `altitude` double NOT NULL,
  `rainfall` double NOT NULL,
  `soil_moisture` double NOT NULL,
  `humidity` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_data`
--

INSERT INTO `area_data` (`id`, `temperature`, `altitude`, `rainfall`, `soil_moisture`, `humidity`, `created_at`) VALUES
(1, 9, 36781, 27, 12, 98, '2024-08-30 08:33:09'),
(2, 18, 1234, 12, 12, 34, '2024-08-30 08:40:28'),
(3, 28, 765, 23, 34, 87, '2024-08-30 08:48:05'),
(4, 30, 600, 600, 20, 50, '2024-08-30 09:07:48'),
(5, 30, 600, 600, 20, 50, '2024-08-30 09:09:48'),
(6, 30, 1200, 670, 20, 50, '2024-08-30 09:10:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_data`
--
ALTER TABLE `area_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_data`
--
ALTER TABLE `area_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
