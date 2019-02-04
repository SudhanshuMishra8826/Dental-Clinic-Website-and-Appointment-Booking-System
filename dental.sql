-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 04:37 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `appointmentfor` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `userid`, `date`, `time`, `appointmentfor`, `status`) VALUES
(1, 'Kishan Kumar', 'kishankumaretah@gmail.com', 'kishankumar', '0000-00-00', '08:00:00', 'Service#1', ''),
(2, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', ''),
(3, 'himanshu', 'hm@gmail.com', '', '0000-00-00', '08:00:00', 'Service#1', ''),
(4, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', ''),
(5, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', ''),
(7, 'naina', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(8, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(9, 'sd', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(10, 'df', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(11, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(12, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(13, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved'),
(14, 'himanshu', 'sm@gmail.com', '13', '2019-01-06', '08:00:00', 'Service#1', 'approved'),
(15, 'rohan', 'sm@gmail.com', '13', '2019-01-07', '08:00:00', 'Service#1', 'approved'),
(16, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-14', '08:00:00', 'Service#1', 'approved'),
(17, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-14', '08:00:00', 'Service#1', 'approved'),
(18, 'himanshu', 'him@gmail.com', '13', '2019-01-14', '08:00:00', 'Service#1', 'approved'),
(19, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-15', '08:00:00', 'Service#1', 'approved'),
(20, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-15', '08:00:00', 'Service#3', 'approved'),
(21, 'cfvgh', 'sm@gmail.com', '13', '2019-01-15', '08:00:00', 'Service#1', 'approved'),
(22, 'xyz', 'xyz@gmail.com', '13', '2019-01-16', '08:00:00', 'Service#3', 'approved'),
(23, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-28', '08:00:00', 'Service#1', 'approved'),
(24, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled'),
(25, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled'),
(26, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled'),
(27, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled'),
(28, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'Rescheduled'),
(29, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#2', 'approved'),
(30, 'himanshu', 'hm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(31, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(32, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(33, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(34, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(35, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(36, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(37, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(38, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(39, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(40, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(41, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved'),
(42, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved'),
(43, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved'),
(44, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved'),
(45, 'himanhsu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved'),
(46, 'abhi', 'abhi@gmail.com', '12', '2019-02-03', '08:00:00', 'Service#1', 'Rescheduled');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_id` int(100) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `doc_email` varchar(100) NOT NULL,
  `doc_password` varchar(100) NOT NULL,
  `doc_address` varchar(1000) NOT NULL,
  `doc_gender` varchar(100) NOT NULL,
  `doc_contactno1` varchar(100) NOT NULL,
  `doc_contactno2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `doc_name`, `doc_email`, `doc_password`, `doc_address`, `doc_gender`, `doc_contactno1`, `doc_contactno2`) VALUES
(1, 'sudhanshu', 'sm@gmail.com', '202cb962ac59075b964b07152d234b70', 'new delhi', 'male', '8826163041', '9810158471');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `uid` int(100) NOT NULL,
  `apid` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`uid`, `apid`, `id`, `message`, `status`) VALUES
(13, '44', 16, 'You have requested an appointment for Service#1 at 2019/02/03 , 8:00 to 9:00 ', 'seen'),
(13, '44', 17, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is approved', 'seen'),
(13, '45', 18, 'You have requested an appointment for Service#1 at 2019/02/03 , 8:00 to 9:00 ', 'unseed'),
(12, '46', 19, 'You have requested an appointment for Service#1 at 2019/02/03 , 8:00 to 9:00 ', 'unseed'),
(13, '45', 20, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is approved', 'seen'),
(12, '46', 21, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is approved', 'seen'),
(13, '45', 22, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is rescheduled. Please book again.', 'seen'),
(12, '46', 23, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is rescheduled. Please book again.', 'seen'),
(13, '45', 24, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is approved.', 'seen'),
(12, '46', 25, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is rescheduled. Please book again.', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact1` int(12) NOT NULL,
  `contact2` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `uname`, `email`, `password`, `occupation`, `address`, `sex`, `dob`, `contact1`, `contact2`) VALUES
(2, 'kishan', 'kk@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(3, 'niraj', 'niraj@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(4, 'noman', 'nouman@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(5, 'nouman', 'nouman@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(6, 'sudhanshu', 'sudhanshu@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(7, 'umar', 'umar@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(8, 'kks', 'kk@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(9, 'kk', 'kk@gmail.com', '123', '', '', '', '0000-00-00', 0, 0),
(10, 'kks', 'kks@gmail.com', '1234', 'student', 'etah', 'male', '1999-02-10', 1234567890, 0),
(11, 'kk', 'shakyavivek2000@gmail.com', '202cb962ac59075b964b07152d234b70', 'student', 'etah', 'male', '2000-01-01', 1234567890, 0),
(12, 'abhi', 'abhi@gmail.com', '202cb962ac59075b964b07152d234b70', 'student', 'etah', 'male', '2004-01-01', 1234567890, 0),
(13, 'sudhanshu', 'sm@gmail.com', '202cb962ac59075b964b07152d234b70', 'student', 'c-29,Harsh vihar badarpur new delhi', 'male', '1999-01-22', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
