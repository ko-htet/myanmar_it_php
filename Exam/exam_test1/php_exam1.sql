-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 10:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_exam1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `id` int(11) NOT NULL,
  `bonusamount` int(11) NOT NULL,
  `bonusdate` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`id`, `bonusamount`, `bonusdate`, `staff_id`) VALUES
(1, 50000, '2016-02-20', 2),
(2, 30000, '2016-06-11', 7),
(3, 40000, '2016-02-20', 8),
(4, 45000, '2016-03-20', 2),
(5, 35000, '2016-06-11', 5);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Manager'),
(2, 'Executive'),
(3, 'Asst. Manager'),
(4, 'Lead'),
(5, 'HR'),
(6, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `idno` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `fathername` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `joindate` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `deparment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `idno`, `name`, `fathername`, `salary`, `joindate`, `deparment_id`) VALUES
(1, '123456AB1', 'Ko Ko', 'U Kyaw', 1000000, '2014-02-20', 1),
(2, '123456AB2', 'Aye Aye', 'U Zaw Than Thnin', 200000, '2014-06-11', 6),
(3, '123456AB3', 'Myat Sandar Hlaing', 'U Soe Linn', 300000, '2014-02-20', 3),
(4, '123456AB4', 'Daw Htwe Nyo', 'U Nyut Win', 500000, '2014-02-20', 2),
(5, '123456AB5', 'Kay Thwe', 'U Wana Htun', 450000, '2014-06-11', 4),
(6, '123456AB6', 'San Myint Aung', 'U Kyaw Min', 400000, '2014-06-11', 5),
(7, '123456AB7', 'Phyo Wai Paing', 'U Myint Aung', 150000, '2014-01-20', 6),
(8, '123456AB8', 'Thae Su Wai', 'U Thiha Aung', 200000, '2014-04-11', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
