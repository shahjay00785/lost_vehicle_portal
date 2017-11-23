-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 02:07 PM
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
-- Table structure for table `tbl_fir`
--

CREATE TABLE `tbl_fir` (
  `fir_id` int(100) NOT NULL,
  `rto_id` int(100) NOT NULL,
  `fir_number` varchar(100) NOT NULL,
  `fir_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fir`
--

INSERT INTO `tbl_fir` (`fir_id`, `rto_id`, `fir_number`, `fir_date`) VALUES
(1, 1, 'abc123', '2017-11-12'),
(2, 1, 'abc123', '2017-11-12'),
(3, 1, 'abc123', '2017-11-12'),
(4, 1, 'abc123', '2017-11-19'),
(5, 1, 'abc123', '2017-11-19'),
(6, 1, 'abc123', '2017-11-19'),
(7, 1, 'abc123', '2017-11-21'),
(8, 2, 'newabc', '2017-11-22'),
(9, 2, '3B8BF-2954F-41657-FE764-80617', '2017-11-22'),
(10, 2, 'C872F-E2D01-659A6-2057A-45838', '2017-11-22'),
(11, 1, '52A99-C6AD9-75F48-68B45-E7420', '2017-11-22'),
(12, 1, '9A16C-E66B0-FBC76-D7FB6-2616A', '2017-11-22'),
(13, 1, '58FF2-9FD8A-D664F-6AD58-75B40', '2017-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_found_vehicle`
--

CREATE TABLE `tbl_found_vehicle` (
  `found_id` int(100) NOT NULL,
  `vehicle_issue_number` varchar(100) NOT NULL,
  `vehicle_photo` varchar(100) NOT NULL,
  `vehicle_found_place` varchar(100) NOT NULL,
  `vehicle_found_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_found_vehicle`
--

INSERT INTO `tbl_found_vehicle` (`found_id`, `vehicle_issue_number`, `vehicle_photo`, `vehicle_found_place`, `vehicle_found_date`) VALUES
(6, 'GJ08HD1707', '1.jpg', 'SURAT', '11/11/2017'),
(7, 'GJ01SE2440', '11.png', 'SURAT', '24-05-2014'),
(9, 'GJ19HD2017', '9.png', 'suraT', '24/05/2014');

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
-- Table structure for table `tbl_missing_vehicle`
--

CREATE TABLE `tbl_missing_vehicle` (
  `missing_vehicle_id` int(100) NOT NULL,
  `vehicle_issue_number` varchar(100) NOT NULL,
  `vehicle_engine_number` varchar(100) NOT NULL,
  `vehicle_chasis_number` varchar(100) NOT NULL,
  `user_driving_license_number` varchar(100) NOT NULL,
  `user_aadhar_number` varchar(20) NOT NULL,
  `vehicle_lost_date` varchar(100) NOT NULL,
  `vehicle_lost_state` varchar(100) NOT NULL,
  `vehicle_lost_city` varchar(100) NOT NULL,
  `vehicle_lost_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_missing_vehicle`
--

INSERT INTO `tbl_missing_vehicle` (`missing_vehicle_id`, `vehicle_issue_number`, `vehicle_engine_number`, `vehicle_chasis_number`, `user_driving_license_number`, `user_aadhar_number`, `vehicle_lost_date`, `vehicle_lost_state`, `vehicle_lost_city`, `vehicle_lost_time`) VALUES
(5, 'GJ08HD1707', 'ene123', 'cha123', 'dr123', '789565472314', '24/05/2017', 'Gujarat', 'Gandhinagar', '9 PM'),
(6, 'GJ01SE2440', 'ene123', 'cha123', 'dr123', '456038519005', '24/05/2017', 'Gujarat', 'Gandhinagar', '9 pm'),
(7, 'JH12HD1707', 'ene123', 'cha123', 'ls123', '789565472314', '24/05/2017', 'Gujarat', 'Gandhinagar', '9 pm'),
(8, 'GJ052017', 'ene123', 'cha123', '2016GJ01712345', '789565472314', '11/11/2017', 'Gujarat', 'Gandhinagar', '5 PM'),
(12, 'GJ18HD985', 'ene123', 'cha123', 'dr123', '1234567891011', '23/11/2017', 'Gujarat', 'Gandhinagar', '9 am'),
(16, 'gj01hf3922', '123456789', 'jhg98765', 'gj201412365498', '244050556633', '24/05/2017', 'Gujarat', 'Gandhinagar', '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rto_database`
--

CREATE TABLE `tbl_rto_database` (
  `rto_id` int(10) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicel_type` varchar(10) NOT NULL,
  `vehicle_manufactor_company` varchar(100) NOT NULL,
  `vehicle_model_number` varchar(100) NOT NULL,
  `vehicle_color` varchar(100) NOT NULL,
  `user_driving_license_number` varchar(100) NOT NULL,
  `user_aadhar_number` varchar(100) NOT NULL,
  `vehicle_chasis_number` varchar(20) NOT NULL,
  `vehicle_engine_number` varchar(20) NOT NULL,
  `date_of_registration` date NOT NULL,
  `issue_state` varchar(10) NOT NULL,
  `issue_city` varchar(100) NOT NULL,
  `vehicle_issue_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rto_database`
--

INSERT INTO `tbl_rto_database` (`rto_id`, `vehicle_name`, `vehicel_type`, `vehicle_manufactor_company`, `vehicle_model_number`, `vehicle_color`, `user_driving_license_number`, `user_aadhar_number`, `vehicle_chasis_number`, `vehicle_engine_number`, `date_of_registration`, `issue_state`, `issue_city`, `vehicle_issue_number`) VALUES
(1, 'access 125', 'moped', 'honda', 'xx123', 'black', 'dr123', '12345', 'char123', '456', '2017-11-15', 'GJ', 'surat', 'GJ052017'),
(2, 'honda Activa', 'modep', 'honda', 'MODEL1323', 'BLACK', 'USER_123', 'USER__456', 'cha456123', '123', '2017-10-03', 'GUJARAT', 'SURAT', 'GJ05CD3836'),
(3, 'Swift', 'car', 'suzuki', 'model1234', 'blue', 'GJ0123456', '123456', 'cha123213', '213', '2017-11-21', '24-11-21', 'SURAT', 'GJ05HD1707');

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
(12, 'Jay Shah', 2147483647, 'ABC123', 2147483647, '1234'),
(13, 'meet', 456038519005, '45', 745, 'jay123'),
(14, 'panth sokanaki', 1234, '324', 3214, '123'),
(15, 'chadana vish', 45605, 'dr123', 9825060668, '789'),
(16, 'dsa', 213, '21434', 7405407804, '1234'),
(17, 'jay', 45600, '21334', 2134, '45'),
(18, 'animesh', 456038519005, '878545', 7405407804, '1234'),
(19, 'ram', 56, 'asd', 0, 'das'),
(20, 'varun', 456038519005, '4545', 4545, '123'),
(21, 'jopjo', 0, 'opjojop', 0, 'pojp'),
(22, 'iubi', 0, 'uibbu', 0, 'ui'),
(23, 'ubuu', 0, 'yg', 0, 'uguy'),
(24, 'usdih', 0, 'iuhuihi', 0, 'ihi'),
(25, 'jni', 0, 'ihi', 0, 'o'),
(26, 'usdihuihiu', 0, 'iuh', 0, 'hiu'),
(27, 'asd', 0, 'dsa', 3, 'd'),
(28, 'meet', 244024406677, '2016GJ01712345', 9586861846, 'mett123'),
(29, 'chadana ', 9878451545623, 'asdasd', 78865, 'ABC'),
(30, 'paresh', 785415215, '45412', 784542155, '123'),
(31, 'as', 0, 'dsa', 0, 'ds'),
(32, 'd', 0, 'ads', 0, 'dsa'),
(33, 'raj', 745645264245, '2016GJ01712345', 7405407804, 'RAJ 123'),
(35, 'vpsonavane@gmail.com', 746698396978, 'GJ0120100864961', 9510590763, 'varun123'),
(36, 'sa', 456038519005, '45412', 21, '23'),
(37, 'meet@gmail.com', 456038519005, 'das', 34, '324'),
(38, 'anshika@gmail.com', 1234567891011, 'dr123', 7405407804, 'jay123'),
(39, 'animesh@gmail.com', 244050556633, 'G01201400331', 9638527410, '123321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fir`
--
ALTER TABLE `tbl_fir`
  ADD PRIMARY KEY (`fir_id`);

--
-- Indexes for table `tbl_found_vehicle`
--
ALTER TABLE `tbl_found_vehicle`
  ADD PRIMARY KEY (`found_id`);

--
-- Indexes for table `tbl_issue_vehicle`
--
ALTER TABLE `tbl_issue_vehicle`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `tbl_missing_vehicle`
--
ALTER TABLE `tbl_missing_vehicle`
  ADD PRIMARY KEY (`missing_vehicle_id`);

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
-- AUTO_INCREMENT for table `tbl_fir`
--
ALTER TABLE `tbl_fir`
  MODIFY `fir_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_found_vehicle`
--
ALTER TABLE `tbl_found_vehicle`
  MODIFY `found_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_issue_vehicle`
--
ALTER TABLE `tbl_issue_vehicle`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_missing_vehicle`
--
ALTER TABLE `tbl_missing_vehicle`
  MODIFY `missing_vehicle_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_rto_database`
--
ALTER TABLE `tbl_rto_database`
  MODIFY `rto_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user_side`
--
ALTER TABLE `tbl_user_side`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
