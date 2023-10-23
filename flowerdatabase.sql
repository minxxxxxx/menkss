-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 01:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowerdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `floweritems`
--

CREATE TABLE `floweritems` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `floweritems`
--

INSERT INTO `floweritems` (`id`, `name`, `price`, `description`, `added`) VALUES
(1, 'Bundle 1', '400 peso', 'hamot ', '2023-03-22'),
(2, 'Bundle 2', '510 peso', 'hamot', '2023-03-22'),
(3, 'Red Tulip', '380 peso', 'hamot', '2023-03-22'),
(4, 'White Tulip', '560 peso', 'hamot', '2023-03-22'),
(5, 'Red Rose', '600 peso', 'hamot', '2023-03-22'),
(6, 'Sunflower', '315', 'hamot', '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE `myadmin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Niel Bhen Humpay', 'nielbhenhumpay@flowers.ph', '$2y$10$rFoj7ETP4HlrKhKdNg66Fu3JbV3kX5F6mzc2XWI4Uh8VuY4qzd0Sa'),
(2, 'niel;', 'niel@flowers.ph', '$2y$10$8bleHuJotRYEtxSMpPs27ezP8EG0DIgVi9W66nPjYb2Tn6YaBsUmS');

-- --------------------------------------------------------

--
-- Table structure for table `nielsadmin`
--

CREATE TABLE `nielsadmin` (
  `supplierID` varchar(500) NOT NULL,
  `supplierEmail` varchar(500) NOT NULL,
  `supplierName` varchar(500) NOT NULL,
  `supplierLastName` varchar(500) NOT NULL,
  `supplierPass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nielsadmin`
--

INSERT INTO `nielsadmin` (`supplierID`, `supplierEmail`, `supplierName`, `supplierLastName`, `supplierPass`) VALUES
('042102', 'nielbhen@flowers.ph', 'Niel Bhen', 'Humpay', '1234'),
('080602', 'dimsue.flowers.ph', 'Dimsue Romeo', 'Dimaala', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'nick', 'nick@flowers.ph', '$2y$10$V6zNs0ft45biLjVU3vQjauiuT8G5BqqXHLJ29urDE2Em5W0O9Lmy2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `floweritems`
--
ALTER TABLE `floweritems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myadmin`
--
ALTER TABLE `myadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nielsadmin`
--
ALTER TABLE `nielsadmin`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `floweritems`
--
ALTER TABLE `floweritems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `myadmin`
--
ALTER TABLE `myadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
