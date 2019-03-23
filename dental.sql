-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
  `status` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `doctorName` text NOT NULL,
  `fees` int(100) NOT NULL,
  `payment` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `userid`, `date`, `time`, `appointmentfor`, `status`, `phone`, `doctorName`, `fees`, `payment`) VALUES
(1, 'Kishan Kumar', 'kishankumaretah@gmail.com', 'kishankumar', '0000-00-00', '08:00:00', 'Service#1', '', '', '', 0, '0'),
(2, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', '', '', '', 0, '0'),
(3, 'himanshu', 'hm@gmail.com', '', '0000-00-00', '08:00:00', 'Service#1', '', '', '', 0, '0'),
(4, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', '', '', '', 0, '0'),
(5, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', '', '', '', 0, '0'),
(7, 'naina', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(8, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(9, 'sd', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(10, 'df', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(11, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(12, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(13, 'sudhanshu', 'sm@gmail.com', '13', '0000-00-00', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(14, 'himanshu', 'sm@gmail.com', '13', '2019-01-06', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(15, 'rohan', 'sm@gmail.com', '13', '2019-01-07', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(16, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-14', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(17, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-14', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(18, 'himanshu', 'him@gmail.com', '13', '2019-01-14', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(19, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(20, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-15', '08:00:00', 'Service#3', 'approved', '', '', 0, '0'),
(21, 'cfvgh', 'sm@gmail.com', '13', '2019-01-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(22, 'xyz', 'xyz@gmail.com', '13', '2019-01-16', '08:00:00', 'Service#3', 'approved', '', '', 0, '0'),
(23, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-28', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(24, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled', '', '', 0, '0'),
(25, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled', '', '', 0, '0'),
(26, 'sudhanshu', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled', '', '', 0, '0'),
(27, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-01-29', '08:00:00', 'Service#1', 'Rescheduled', '', '', 0, '0'),
(28, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'Rescheduled', '', '', 0, '0'),
(29, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(30, 'himanshu', 'hm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(31, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(32, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(33, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(34, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(35, 'Sudhanshu Mishra', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(36, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(37, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(38, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(39, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(40, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(41, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-02', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(42, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(43, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(44, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(45, 'himanhsu', 'sm@gmail.com', '13', '2019-02-03', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(46, 'abhi', 'abhi@gmail.com', '12', '2019-02-03', '08:00:00', 'Service#1', 'Rescheduled', '', '', 0, '0'),
(47, 'kk', 'jl', '12', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(48, 'sudhanshu', 'sm@gmail.com', '12', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(49, 'sudhanshu', 'sm@gmail.com', '12', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(50, 'sudhanshu', 'sm@gmail.com', '12', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(51, 'sudhanshu', 'sm@gmail.com', '12', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(52, 'himanhsu', 'sm@gmail.com', '12', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(53, 'himanhsu', 'sm@gmail.com', '', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(54, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-15', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(55, 'sudhanshu', 'sm@gmail.com', '', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(56, 'sudhanshu', 'sm@gmail.com', '12', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(57, 'sudhanshu', 'sm@gmail.com', '12', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(58, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(59, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(60, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(61, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(62, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(63, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-16', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(64, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(65, 'himanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(66, 'himanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(67, 'himanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(68, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(69, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(70, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(71, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(72, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(73, 'himanshu', 'hm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(74, '', '', '13', '0000-00-00', '00:00:00', '', 'approved', '', '', 0, '0'),
(75, '', '', '13', '0000-00-00', '00:00:00', '', 'approved', '', '', 0, '0'),
(76, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '08:00:00', 'Service#1', 'approved', '', '', 0, '0'),
(77, '', '', '13', '0000-00-00', '00:00:00', '', 'approved', '', '', 0, '0'),
(78, 'himanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(79, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '10:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(80, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '10:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(81, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(82, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#3', 'approved', '', '', 0, '0'),
(83, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(84, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(85, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(86, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '10:00:00', 'Service#2', 'approved', '', '', 0, '0'),
(87, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '918826163041', '', 0, '0'),
(88, 'himanshu', 'sud221@yahoo.in', '13', '2019-02-17', '09:00:00', 'Service#2', 'approved', '918826163041', '', 0, '0'),
(89, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '09:00:00', 'Service#3', 'approved', '918826163041', '', 0, '0'),
(90, 'himanshu', 'sm@gmail.com', '13', '2019-02-18', '10:00:00', 'Service#2', 'approved', '918826163041', '', 0, '0'),
(91, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '09:00:00', 'Service#4', 'approved', '918826163041', '', 0, '0'),
(92, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '10:00:00', 'Service#3', 'approved', '918826163041', '', 0, '0'),
(93, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '09:00:00', 'Service#2', 'approved', '918826163041', '', 0, '0'),
(94, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '10:00:00', 'Service#2', 'approved', '918826163041', '', 0, '0'),
(95, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '10:00:00', 'Service#3', 'approved', '918826163041', '', 0, '0'),
(96, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '10:00:00', 'Service#3', 'approved', '8826163041', '', 0, '0'),
(97, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '09:00:00', 'Service#3', 'approved', '8826163041', '', 0, '0'),
(98, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-19', '09:00:00', 'Service#2', 'approved', '8826163041', '', 0, '0'),
(99, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '09:00:00', 'Service#2', 'approved', '9953707107', '', 0, '0'),
(100, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-19', '09:00:00', 'Service#2', 'approved', '8826163041', '', 0, '0'),
(101, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-18', '09:00:00', 'Service#2', 'approved', '7065941728', '', 0, '0'),
(102, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-19', '09:00:00', 'Service#2', 'approved', '8826163041', '', 0, '0'),
(103, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-20', '09:00:00', 'Service#2', 'approved', '918826163041', '', 0, '0'),
(104, 'himanshu', 'sud221@yahoo.in', '13', '2019-02-20', '09:00:00', 'Service#2', 'approved', '8826163041', '', 0, '0'),
(105, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-20', '10:00:00', 'Service#3', 'Rescheduled', '8826163041', '', 0, '0'),
(106, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-20', '09:00:00', 'Service#2', 'Rescheduled', '9810158471', '', 0, '0'),
(107, 'sudhanshu', 'sm@gmail.com', '13', '2019-02-20', '08:00:00', 'Service#2', 'approved', '8826163041', '', 0, '0'),
(108, 's', 'sm@gmail.com', '13', '2019-03-05', '09:00:00', 'Service#3', 'approved', '8826163041', '', 0, '0'),
(109, 'nv', 'nv@gmail.com', '13', '2019-03-06', '08:00:00', 'Service#1', 'approved', '88261634041', 'Dr. Vishu A Gupta', 0, '0'),
(110, 'ts', 'ts@gmai.com', '13', '2019-03-06', '08:00:00', 'Service#1', 'approved', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(111, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-10', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(112, 's', 'sdm@gmail.com', '13', '2019-03-10', '09:00:00', 'Tooth Extractions', 'Confirmed', '88261634041', 'Dr. Vishu A Gupta', 0, '0'),
(113, 'himanhsu', 'hm@gmail.com', '13', '2019-03-11', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(114, 'sudhanshu', 'sdm@gmail.com', '13', '2019-03-10', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(115, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '09:00:00', 'Cleaning', 'Confirmed', '88261634041', 'Dr. Vishu A Gupta', 0, '0'),
(116, 'sudhanshu', 'sdm@gmail.com', '13', '2019-03-12', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(117, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(118, 'dk', 'sm@gmail.com', '13', '2019-03-12', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 500, '0'),
(119, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '09:00:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(120, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '10:30:00', 'Root Canal', 'requested', '8826163041', 'Dr. Ashish Gupta', 0, '0'),
(121, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(122, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '09:00:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 0, '0'),
(123, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-12', '10:30:00', 'Root Canal', 'approved', '88261634041', 'Dr. Ashish Gupta', 200, '0'),
(124, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-23', '10:30:00', 'Root Canal', 'approved', '88261634041', 'Dr. Ashish Gupta', 200, 'paid'),
(125, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-23', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 200, 'not paid'),
(126, 'sss', 'sm@gmail.com', '13', '2019-03-23', '10:30:00', 'Root Canal', 'approved', '88261634041', 'Dr. Vishu A Gupta', 200, 'not paid'),
(127, 'sudhanshu', 'sm@gmail.com', '13', '2019-03-23', '10:30:00', 'Root Canal', 'requested', '88261634041', 'Dr. Ashish Gupta', 200, 'paid');

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
(1, 'sudhanshu', 'sm@gmail.com', '202cb962ac59075b964b07152d234b70', 'new delhi', 'male', '8826163041', '9810158471'),
(2, 'Vishu A Gupta', 'vishu@gmail.com', '202cb962ac59075b964b07152d234b70', 'new delhi', 'male', '8826163041', '9810807057'),
(3, 'Ashish Gupta', 'ashish@gmail.com', '202cb962ac59075b964b07152d234b70', 'new delhi', 'male', '8826163041', '9810158471');

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
(12, '46', 25, 'Your appointment for Service#1 at 2019-02-03 , 08:00:00 is rescheduled. Please book again.', 'seen'),
(12, '47', 26, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(12, '48', 27, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(12, '49', 28, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(12, '50', 29, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(12, '51', 30, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(12, '52', 31, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(0, '53', 32, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(13, '54', 33, 'You have requested an appointment for Service#1 at 2019-02-15 , 8:00 to 9:00 ', 'seen'),
(0, '55', 34, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(12, '56', 35, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(12, '57', 36, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '58', 37, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '59', 38, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '60', 39, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '61', 40, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '62', 41, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '63', 42, 'You have requested an appointment for Service#1 at 2019-02-16 , 8:00 to 9:00 ', 'seen'),
(13, '64', 43, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '65', 44, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '66', 45, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '67', 46, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '68', 47, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '69', 48, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '70', 49, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '71', 50, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '72', 51, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '73', 52, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '74', 53, 'You have requested an appointment for  at  ,  ', 'seen'),
(13, '75', 54, 'You have requested an appointment for  at  ,  ', 'seen'),
(13, '76', 55, 'You have requested an appointment for Service#1 at 2019-02-17 , 8:00 to 9:00 ', 'seen'),
(13, '77', 56, 'You have requested an appointment for  at  ,  ', 'seen'),
(13, '78', 57, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '79', 58, 'You have requested an appointment for Service#2 at 2019-02-17 , 10:00 to 1:00 ', 'seen'),
(13, '80', 59, 'You have requested an appointment for Service#2 at 2019-02-17 , 10:00 to 1:00 ', 'seen'),
(13, '81', 60, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '82', 61, 'You have requested an appointment for Service#3 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '83', 62, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '84', 63, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '85', 64, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '86', 65, 'You have requested an appointment for Service#2 at 2019-02-17 , 10:00 to 1:00 ', 'seen'),
(13, '87', 66, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '88', 67, 'You have requested an appointment for Service#2 at 2019-02-17 , 9:00 to 10:00 ', 'seen'),
(13, '89', 68, 'You have requested an appointment for Service#3 at 2019-02-18 , 9:00 to 10:00 ', 'seen'),
(13, '90', 69, 'You have requested an appointment for Service#2 at 2019-02-18 , 10:00 to 1:00 ', 'seen'),
(13, '91', 70, 'You have requested an appointment for Service#4 at 2019-02-18 , 9:00 to 10:00 ', 'seen'),
(13, '92', 71, 'You have requested an appointment for Service#3 at 2019-02-18 , 10:00 to 1:00 ', 'seen'),
(13, '93', 72, 'You have requested an appointment for Service#2 at 2019-02-18 , 9:00 to 10:00 ', 'seen'),
(13, '94', 73, 'You have requested an appointment for Service#2 at 2019-02-18 , 10:00 to 1:00 ', 'seen'),
(13, '95', 74, 'You have requested an appointment for Service#3 at 2019-02-18 , 10:00 to 1:00 ', 'seen'),
(13, '96', 75, 'You have requested an appointment for Service#3 at 2019-02-18 , 10:00 to 1:00 ', 'seen'),
(13, '97', 76, 'You have requested an appointment for Service#3 at 2019-02-18 , 9:00 to 10:00 ', 'seen'),
(13, '98', 77, 'You have requested an appointment for Service#2 at 2019-02-19 , 9:00 to 10:00 ', 'seen'),
(13, '99', 78, 'You have requested an appointment for Service#2 at 2019-02-18 , 9:00 to 10:00 ', 'seen'),
(13, '100', 79, 'You have requested an appointment for Service#2 at 2019-02-19 , 9:00 to 10:00 ', 'seen'),
(13, '101', 80, 'You have requested an appointment for Service#2 at 2019-02-18 , 9:00 to 10:00 ', 'seen'),
(13, '102', 81, 'You have requested an appointment for Service#2 at 2019-02-19 , 9:00 to 10:00 ', 'seen'),
(13, '102', 82, 'Your appointment for Service#2 at 2019-02-19 , 09:00:00 is approved.', 'seen'),
(13, '103', 83, 'You have requested an appointment for Service#2 at 2019-02-20 , 9:00 to 10:00 ', 'seen'),
(13, '104', 84, 'You have requested an appointment for Service#2 at 2019-02-20 , 9:00 to 10:00 ', 'seen'),
(13, '103', 85, 'Your appointment for Service#2 at 2019-02-20 , 09:00:00 is approved.', 'seen'),
(13, '104', 86, 'Your appointment for Service#2 at 2019-02-20 , 09:00:00 is approved.', 'seen'),
(13, '105', 87, 'You have requested an appointment for Service#3 at 2019-02-20 , 10:00 to 1:00 ', 'seen'),
(13, '106', 88, 'You have requested an appointment for Service#2 at 2019-02-20 , 9:00 to 10:00 ', 'seen'),
(13, '105', 89, 'Your appointment for Service#3 at 2019-02-20 , 10:00:00 is rescheduled. Please book again.', 'seen'),
(12, '47', 90, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(12, '48', 91, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(12, '49', 92, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(12, '50', 93, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(12, '51', 94, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(12, '52', 95, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(0, '53', 96, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'unseen'),
(13, '54', 97, 'Your appointment for Service#1 at 2019-02-15 , 08:00:00 is approved', 'seen'),
(0, '55', 98, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'unseen'),
(12, '56', 99, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(12, '57', 100, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '58', 101, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '59', 102, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '60', 103, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '61', 104, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '62', 105, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '63', 106, 'Your appointment for Service#1 at 2019-02-16 , 08:00:00 is approved', 'seen'),
(13, '64', 107, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '65', 108, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '66', 109, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '67', 110, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '68', 111, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '69', 112, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '70', 113, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '71', 114, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '72', 115, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '73', 116, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '74', 117, 'Your appointment for  at 0000-00-00 , 00:00:00 is approved', 'seen'),
(13, '75', 118, 'Your appointment for  at 0000-00-00 , 00:00:00 is approved', 'seen'),
(13, '76', 119, 'Your appointment for Service#1 at 2019-02-17 , 08:00:00 is approved', 'seen'),
(13, '77', 120, 'Your appointment for  at 0000-00-00 , 00:00:00 is approved', 'seen'),
(13, '78', 121, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '79', 122, 'Your appointment for Service#2 at 2019-02-17 , 10:00:00 is approved', 'seen'),
(13, '80', 123, 'Your appointment for Service#2 at 2019-02-17 , 10:00:00 is approved', 'seen'),
(13, '81', 124, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '82', 125, 'Your appointment for Service#3 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '83', 126, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '84', 127, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '85', 128, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '86', 129, 'Your appointment for Service#2 at 2019-02-17 , 10:00:00 is approved', 'seen'),
(13, '87', 130, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '88', 131, 'Your appointment for Service#2 at 2019-02-17 , 09:00:00 is approved', 'seen'),
(13, '89', 132, 'Your appointment for Service#3 at 2019-02-18 , 09:00:00 is approved', 'seen'),
(13, '90', 133, 'Your appointment for Service#2 at 2019-02-18 , 10:00:00 is approved', 'seen'),
(13, '91', 134, 'Your appointment for Service#4 at 2019-02-18 , 09:00:00 is approved', 'seen'),
(13, '92', 135, 'Your appointment for Service#3 at 2019-02-18 , 10:00:00 is approved', 'seen'),
(13, '93', 136, 'Your appointment for Service#2 at 2019-02-18 , 09:00:00 is approved', 'seen'),
(13, '94', 137, 'Your appointment for Service#2 at 2019-02-18 , 10:00:00 is approved', 'seen'),
(13, '95', 138, 'Your appointment for Service#3 at 2019-02-18 , 10:00:00 is approved', 'seen'),
(13, '96', 139, 'Your appointment for Service#3 at 2019-02-18 , 10:00:00 is approved', 'seen'),
(13, '97', 140, 'Your appointment for Service#3 at 2019-02-18 , 09:00:00 is approved', 'seen'),
(13, '98', 141, 'Your appointment for Service#2 at 2019-02-19 , 09:00:00 is approved', 'seen'),
(13, '99', 142, 'Your appointment for Service#2 at 2019-02-18 , 09:00:00 is approved', 'seen'),
(13, '100', 143, 'Your appointment for Service#2 at 2019-02-19 , 09:00:00 is approved', 'seen'),
(13, '101', 144, 'Your appointment for Service#2 at 2019-02-18 , 09:00:00 is approved', 'seen'),
(13, '106', 145, 'Your appointment for Service#2 at 2019-02-20 , 09:00:00 is approved', 'seen'),
(13, '107', 146, 'You have requested an appointment for Service#2 at 2019-02-20 , 8:00 to 9:00 ', 'seen'),
(13, '107', 147, 'Your appointment for Service#2 at 2019-02-20 , 08:00:00 is approved.', 'seen'),
(13, '108', 148, 'You have requested an appointment for Service#3 at 2019-03-05 , 9:00 to 10:00 ', 'seen'),
(13, '108', 149, 'Your appointment for Service#3 at 2019-03-05 , 09:00:00 is approved.', 'seen'),
(13, '109', 150, 'You have requested an appointment for Service#1 at 2019-03-06 , 8:00 to 9:00 ', 'seen'),
(13, '110', 151, 'You have requested an appointment for Service#1 at 2019-03-06 , 8:00 to 9:00 ', 'seen'),
(13, '110', 152, 'Your appointment for Service#1 at 2019-03-06 , 08:00:00 is approved.', 'seen'),
(13, '111', 153, 'You have requested an appointment for Root Canal at 2019-03-10 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '112', 154, 'You have requested an appointment for Tooth Extractions at 2019-03-10 , 9:00 pm to 10:00 pm ', 'unseen'),
(13, '113', 155, 'You have requested an appointment for Root Canal at 2019-03-11 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '114', 156, 'You have requested an appointment for Root Canal at 2019-03-10 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '115', 157, 'You have requested an appointment for Cleaning at 2019-03-12 , 9:00 pm to 10:00 pm ', 'unseen'),
(13, '116', 158, 'You have requested an appointment for Root Canal at 2019-03-12 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '117', 159, 'You have requested an appointment for Root Canal at 2019-03-12 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '118', 160, 'You have requested an appointment for Root Canal at 2019-03-12 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '119', 161, 'You have requested an appointment for Root Canal at 2019-03-12 , 9:00 pm to 10:00 pm ', 'unseen'),
(13, '120', 162, 'You have requested an appointment for Root Canal at 2019-03-12 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '121', 163, 'You have requested an appointment for Root Canal at 2019-03-12 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '122', 164, 'You have requested an appointment for Root Canal at 2019-03-12 , 9:00 pm to 10:00 pm ', 'unseen'),
(13, '123', 165, 'You have requested an appointment for Root Canal at 2019-03-12 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '109', 166, 'Your appointment for Service#1 at 2019-03-06 , 08:00:00 is approved.', 'unseen'),
(13, '111', 167, 'Your appointment for Root Canal at 2019-03-10 , 10:30:00 is confirmed.', 'unseen'),
(13, '112', 168, 'Your appointment for Tooth Extractions at 2019-03-10 , 09:00:00 is confirmed.', 'unseen'),
(13, '113', 169, 'Your appointment for Root Canal at 2019-03-11 , 10:30:00 is confirmed.', 'unseen'),
(13, '114', 170, 'Your appointment for Root Canal at 2019-03-10 , 10:30:00 is confirmed.', 'unseen'),
(13, '115', 171, 'Your appointment for Cleaning at 2019-03-12 , 09:00:00 is confirmed.', 'unseen'),
(13, '116', 172, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '117', 173, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '118', 174, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '119', 175, 'Your appointment for Root Canal at 2019-03-12 , 09:00:00 is confirmed.', 'unseen'),
(13, '120', 176, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '121', 177, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '122', 178, 'Your appointment for Root Canal at 2019-03-12 , 09:00:00 is confirmed.', 'unseen'),
(13, '123', 179, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '111', 180, 'Your appointment for Root Canal at 2019-03-10 , 10:30:00 is confirmed.', 'unseen'),
(13, '113', 181, 'Your appointment for Root Canal at 2019-03-11 , 10:30:00 is confirmed.', 'unseen'),
(13, '114', 182, 'Your appointment for Root Canal at 2019-03-10 , 10:30:00 is confirmed.', 'unseen'),
(13, '115', 183, 'Your appointment for Cleaning at 2019-03-12 , 09:00:00 is confirmed.', 'unseen'),
(13, '116', 184, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '117', 185, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '118', 186, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '119', 187, 'Your appointment for Root Canal at 2019-03-12 , 09:00:00 is confirmed.', 'unseen'),
(13, '120', 188, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '121', 189, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '122', 190, 'Your appointment for Root Canal at 2019-03-12 , 09:00:00 is confirmed.', 'unseen'),
(13, '123', 191, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is confirmed.', 'unseen'),
(13, '124', 192, 'You have requested an appointment for Root Canal at 2019-03-23 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '124', 193, 'Your appointment for Root Canal at 2019-03-23 , 10:30:00 is approved.', 'unseen'),
(13, '123', 194, 'Your appointment for Root Canal at 2019-03-12 , 10:30:00 is approved.', 'unseen'),
(13, '125', 195, 'You have requested an appointment for Root Canal at 2019-03-23 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '126', 196, 'You have requested an appointment for Root Canal at 2019-03-23 , 10:30 am to 2:30 pm ', 'unseen'),
(13, '126', 197, 'Your appointment for Root Canal at 2019-03-23 , 10:30:00 is approved.', 'unseen'),
(13, '127', 198, 'You have requested an appointment for Root Canal at 2019-03-23 , 10:30 am to 2:30 pm ', 'unseen');

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
(13, 'sudhanshu', 'sm@gmail.com', '202cb962ac59075b964b07152d234b70', 'student', 'c-29,Harsh vihar badarpur new delhi', 'male', '1999-01-22', 2147483647, 2147483647),
(14, 'pramod', 'pk2@gmail.com', '202cb962ac59075b964b07152d234b70', 'qwerty', 'qwertyuiop', 'male', '2019-03-05', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`name`, `price`) VALUES
('Root Canal', '200'),
('Tooth Extractions', '300'),
('Cleaning', '400'),
('Dental Implants', '500');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
