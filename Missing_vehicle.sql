-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 06:59 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Missing_vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue_vehicle`
--

CREATE TABLE `tbl_issue_vehicle` (
  `issue_id` int(10) NOT NULL,
  `user_driving_license_number` varchar(100) NOT NULL,
  `user_aadhar_number` int(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_issue_date` date NOT NULL,
  `vehicle_issue_state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rto_database`
--

CREATE TABLE `tbl_rto_database` (
  `rto_id` int(10) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicel_type` varchar(10) NOT NULL,
  `user_driving_license_number` bigint(100) NOT NULL,
  `user_aadhar_number` varchar(100) NOT NULL,
  `vehicle_chasis_number` bigint(20) NOT NULL,
  `vehicle_engine_number` bigint(20) NOT NULL,
  `date_of_registration` date NOT NULL,
  `issue_state` varchar(10) NOT NULL,
  `issue_city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`) VALUES
(1, 'shahjay00785@gmail.com', 'jay123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_side`
--

CREATE TABLE `tbl_user_side` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_aadhar_number` bigint(16) NOT NULL,
  `user_driving_license_number` varchar(20) NOT NULL,
  `user_phone_number` bigint(10) NOT NULL,
  `user_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_side`
--

INSERT INTO `tbl_user_side` (`user_id`, `user_name`, `user_aadhar_number`, `user_driving_license_number`, `user_phone_number`, `user_password`) VALUES
(12, 'Jay Shah', 2147483647, 'ABC123', 2147483647, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_issue_vehicle`
--
ALTER TABLE `tbl_issue_vehicle`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `tbl_rto_database`
--
ALTER TABLE `tbl_rto_database`
  ADD PRIMARY KEY (`rto_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_side`
--
ALTER TABLE `tbl_user_side`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_issue_vehicle`
--
ALTER TABLE `tbl_issue_vehicle`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_rto_database`
--
ALTER TABLE `tbl_rto_database`
  MODIFY `rto_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user_side`
--
ALTER TABLE `tbl_user_side`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
