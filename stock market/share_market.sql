-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 08:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ad_name` varchar(50) NOT NULL,
  `ad_pass` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ad_name`, `ad_pass`) VALUES
('nand', 1230);

-- --------------------------------------------------------

--
-- Table structure for table `new_client_login`
--

CREATE TABLE `new_client_login` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `city_name` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_client_login`
--

INSERT INTO `new_client_login` (`ID`, `first_name`, `last_name`, `gender`, `address`, `phone_number`, `city_name`, `password`, `status`) VALUES
(10, 'khushi', 'Bhatt', 'on', 'dwarka', 49726945, 'Dwarka', '123', 0),
(11, 'jyot', 'thaker', 'on', 'Dwarka', 2147483647, 'Dwarka', '1235', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_client_login`
--
ALTER TABLE `new_client_login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_client_login`
--
ALTER TABLE `new_client_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
