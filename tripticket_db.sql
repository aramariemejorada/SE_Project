-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 04:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripticket_db`
--
CREATE DATABASE IF NOT EXISTS `tripticket_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tripticket_db`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `emp_id` varchar(11) NOT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `firstname` varchar(35) DEFAULT NULL,
  `middlename` varchar(35) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `lastname`, `firstname`, `middlename`, `password`, `role`, `status`) VALUES
('0000', 'Ipsum', 'Lorem', 'Remlo', '$2y$10$m3mNNv7z4F61zCDDs3M8m.Rff.MT.zRud04nUkpl1UMUFl0SN8EAK', 'SuperAdmin', 'VERIFIED'),
('1111', 'Ipsum', 'Lorem', 'Remlo', '$2y$10$E/Y.vKGRa3I/1JU37U2Squa4.09TplS0QFEiPPJHsq3k4J6yBkmBe', 'Admin', 'VERIFIED'),
('2222', 'Ipsum', 'Lorem', 'Remlo', '$2y$10$.drPhqxS3ofohPtdgyeCNejmtqKAAcOixSJWUimzar58zrcr4M2tG', 'Driver', 'VERIFIED'),
('3333', 'a', 'a', 'a', '$2y$10$/Exbh2cDQBti2i.pLo9juOC7qkBaLKAF2qI5d53J/qUlFQhRoMzTW', 'Admin', 'UNVERIFIED'),
('5555', 'b', 'b', 'b', '$2y$10$iwbFaAwFWZKbZA7ZoXDWIeaRkUSH/wX7g1Ah7MkKoTfw2bLnwZwL2', 'Driver', 'UNVERIFIED');

-- --------------------------------------------------------

--
-- Table structure for table `trip_info`
--

DROP TABLE IF EXISTS `trip_info`;
CREATE TABLE `trip_info` (
  `trip_info` int(11) NOT NULL,
  `trip_ticket_date` varchar(70) DEFAULT NULL,
  `trip_date` date DEFAULT NULL,
  `depart_time` time DEFAULT NULL,
  `depart_place` varchar(255) DEFAULT NULL,
  `arrive_time` time DEFAULT NULL,
  `arrive_place` varchar(255) DEFAULT NULL,
  `odometer_reading` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip_ticket`
--

DROP TABLE IF EXISTS `trip_ticket`;
CREATE TABLE `trip_ticket` (
  `trip_ticket_id` int(11) NOT NULL,
  `trip_ticket_date` varchar(70) DEFAULT NULL,
  `emp_id` varchar(11) DEFAULT NULL,
  `license_plate` varchar(11) DEFAULT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `passenger` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `begin_balance` float DEFAULT NULL,
  `issued_from_stock` float DEFAULT NULL,
  `purchase_outside` float DEFAULT NULL,
  `gas_used` float DEFAULT NULL,
  `end_balance` float DEFAULT NULL,
  `total_kms_travelled` float DEFAULT NULL,
  `gear_oil_used` float DEFAULT NULL,
  `lubricant_oil_used` float DEFAULT NULL,
  `grease_used` float DEFAULT NULL,
  `distance_travelled_per_ltr` float DEFAULT NULL,
  `total_liters_consumed` float DEFAULT NULL,
  `excess` float DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE `vehicle` (
  `license_plate` varchar(11) NOT NULL,
  `vehicle_type` varchar(70) DEFAULT NULL,
  `no_of_cylinder` int(11) DEFAULT NULL,
  `balance_in_tank` float DEFAULT NULL,
  `normal_travel` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `trip_info`
--
ALTER TABLE `trip_info`
  ADD PRIMARY KEY (`trip_info`),
  ADD KEY `FK` (`trip_ticket_date`);

--
-- Indexes for table `trip_ticket`
--
ALTER TABLE `trip_ticket`
  ADD PRIMARY KEY (`trip_ticket_id`),
  ADD KEY `FK` (`emp_id`,`license_plate`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`license_plate`),
  ADD KEY `FK` (`normal_travel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trip_ticket`
--
ALTER TABLE `trip_ticket`
  MODIFY `trip_ticket_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
