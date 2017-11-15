-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 05:40 PM
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
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `admin_id` varchar(11) NOT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `PASSWORD`) VALUES
('Admin', '$2y$10$uAc4bziIg.LU4DDIRxsYYOQV1rK47l6k77USSNON.ygtqVgwwFQ9W');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `driver_id` varchar(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `firstname`, `lastname`, `PASSWORD`) VALUES
('a', NULL, NULL, '$2y$10$tHqGY8LvQP0COZtb8St4JeqjisXB2qdq4dHbwXsSYyKb48Q297mJ.'),
('b', 'b', 'b', '$2y$10$N4YCiQYxOEzWpbd/2aDE6.tnEVNwZdHZ6D09epgruCZJIAGoXxzq6'),
('c', 'c', 'c', '$2y$10$nDmrppIqDTPlUWoqZ35ITuointwEG.JMWkTujvFVt.b3BbCah0udq'),
('d', 'd', 'd', '$2y$10$BHX/12gaDGVTYq5hHlH6G.T3.Te1QUCX50AfWBfHE2r2M8OisNAA2'),
('z', 'z', 'z', '$2y$10$J7Hz0HshJ4L85YNIlo4zX.eP.lEfDvWeQ2wjPGXM9/HlhAQO9pzlC');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_consumption_report`
--

DROP TABLE IF EXISTS `fuel_consumption_report`;
CREATE TABLE `fuel_consumption_report` (
  `trip_id` int(11) DEFAULT NULL,
  `license_vehicle` varchar(8) DEFAULT NULL,
  `beginning_balance` int(11) DEFAULT NULL,
  `ending_balance` int(11) DEFAULT NULL,
  `total_distance_travelled` int(11) DEFAULT NULL,
  `total_fuel_use` int(11) DEFAULT NULL,
  `distance_travelled_per_liter` int(11) DEFAULT NULL,
  `normal_travel_km/liter` int(11) DEFAULT NULL,
  `total_liters_consumed` int(11) DEFAULT NULL,
  `excess` int(11) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

DROP TABLE IF EXISTS `trip`;
CREATE TABLE `trip` (
  `trip_id` int(11) NOT NULL,
  `driver_id` varchar(11) DEFAULT NULL,
  `license_plate` varchar(8) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `time_of_departure` time DEFAULT NULL,
  `time_of_arrival` time DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE `vehicle` (
  `license_plate` varchar(8) NOT NULL,
  `vehicle_type` varchar(50) DEFAULT NULL,
  `number_of _cylinder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `fuel_consumption_report`
--
ALTER TABLE `fuel_consumption_report`
  ADD KEY `PK,FK` (`trip_id`),
  ADD KEY `FK` (`license_vehicle`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`trip_id`),
  ADD KEY `FK` (`driver_id`,`license_plate`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`license_plate`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;