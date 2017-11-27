-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `emp_id` int(11) NOT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `firstname` varchar(35) DEFAULT NULL,
  `middlename` varchar(35) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_consumption`
--

DROP TABLE IF EXISTS `fuel_consumption`;
CREATE TABLE `fuel_consumption` (
  `trip_ticket_date` varchar(70) DEFAULT NULL,
  `fuel_consumption_date` varchar(70) NOT NULL,
  `distance_travelled_per_ltr` int(11) DEFAULT NULL,
  `normal_travel` int(11) DEFAULT NULL,
  `total_liters_consumed` int(11) DEFAULT NULL,
  `excess` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `official_travel`
--

DROP TABLE IF EXISTS `official_travel`;
CREATE TABLE `official_travel` (
  `official_travel_date` varchar(70) NOT NULL,
  `trip_ticket_date` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip_info`
--

DROP TABLE IF EXISTS `trip_info`;
CREATE TABLE `trip_info` (
  `trip_date` date NOT NULL,
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
  `trip_ticket_date` varchar(70) NOT NULL,
  `employee_id` varchar(11) DEFAULT NULL,
  `license_plate` varchar(11) DEFAULT NULL,
  `passenger` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `trip_date` date DEFAULT NULL,
  `balance_in_tank` int(11) DEFAULT NULL,
  `issued_from_stock` int(11) DEFAULT NULL,
  `purchase_outside` int(11) DEFAULT NULL,
  `gas_used` int(11) DEFAULT NULL,
  `final_balance` int(11) DEFAULT NULL,
  `total_kms_travelled` int(11) DEFAULT NULL,
  `gear_oil_used` int(11) DEFAULT NULL,
  `lubricant_oil_used` int(11) DEFAULT NULL,
  `grease_used` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE `vehicle` (
  `license_plate` varchar(11) NOT NULL,
  `vehicle_type` varchar(70) DEFAULT NULL,
  `no_of_cylinder` int(11) DEFAULT NULL
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
-- Indexes for table `fuel_consumption`
--
ALTER TABLE `fuel_consumption`
  ADD PRIMARY KEY (`fuel_consumption_date`),
  ADD KEY `FK` (`trip_ticket_date`);

--
-- Indexes for table `official_travel`
--
ALTER TABLE `official_travel`
  ADD PRIMARY KEY (`official_travel_date`),
  ADD KEY `FK` (`trip_ticket_date`);

--
-- Indexes for table `trip_info`
--
ALTER TABLE `trip_info`
  ADD PRIMARY KEY (`trip_date`);

--
-- Indexes for table `trip_ticket`
--
ALTER TABLE `trip_ticket`
  ADD PRIMARY KEY (`trip_ticket_date`),
  ADD KEY `FK` (`employee_id`,`license_plate`,`trip_date`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`license_plate`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
