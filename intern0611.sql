-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 11:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intern0611`
--
CREATE DATABASE IF NOT EXISTS `intern0611` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `intern0611`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(23) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `byid` int(250) NOT NULL,
  `ip` varchar(78) NOT NULL,
  `date` varchar(54) NOT NULL,
  `time` varchar(89) NOT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `name`, `gender`, `byid`, `ip`, `date`, `time`) VALUES
(6, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-27', '10:02:15'),
(16, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-27', '10:32:17'),
(17, 'vikash@gmail.com', 'vikash kumar', 'male', 5, '::1', '18-07-27', '02:06:59'),
(18, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-28', '08:29:04'),
(19, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-30', '01:41:00'),
(20, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-30', '01:41:15'),
(21, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-30', '01:41:49'),
(22, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-30', '01:47:03'),
(23, 'vikash@gmail.com', 'vikash kumar', 'male', 5, '::1', '18-07-30', '01:47:40'),
(24, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '04:35:42'),
(25, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '04:36:27'),
(26, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '04:43:01'),
(27, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '05:01:02'),
(28, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '05:02:09'),
(29, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '05:02:58'),
(30, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '05:04:11'),
(31, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '05:11:08'),
(32, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-07-31', '05:12:34'),
(33, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-02', '03:59:07'),
(34, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-03', '05:51:12'),
(35, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-03', '06:17:56'),
(36, 'aakash@gmail.com', 'aakash', 'male', 1, '127.0.0.1', '18-08-04', '06:21:38'),
(37, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-04', '04:20:28'),
(38, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-06', '07:52:51'),
(39, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-06', '06:19:30'),
(40, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-06', '08:11:56'),
(41, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-09', '05:02:05'),
(42, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-09', '05:08:31'),
(43, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-09', '05:23:00'),
(44, 'aakash@gmail.com', 'aakash', 'male', 1, '::1', '18-08-11', '06:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `script1`
--

CREATE TABLE IF NOT EXISTS `script1` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `aadhar` varchar(30) DEFAULT NULL,
  `pan` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `script1`
--

INSERT INTO `script1` (`id`, `aadhar`, `pan`, `date`, `time`, `ip`) VALUES
(1, '2334637456344443', '123456789087', '18-08-01', '05:30:14', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(19) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(11) NOT NULL,
  `college` varchar(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `branch` varchar(11) NOT NULL,
  `course` varchar(11) NOT NULL,
  `batch` varchar(11) NOT NULL,
  `roll` varchar(11) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `photo` varchar(23) NOT NULL,
  `address` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `college`, `mobile`, `gender`, `sem`, `branch`, `course`, `batch`, `roll`, `dob`, `photo`, `address`) VALUES
(1, 'aakash', 'aakash@gmail.com', 'aakash', 'tit', 2147483647, 'male', 4, 'cse', 'BE', '2017', '23', '12-02-1998', '', '23 ashoka garden bhopal MP'),
(5, 'vikash kumar', 'vikash@gmail.com', 'vikash', 'TITR', 788899889, 'male', 5, 'cse', 'BE', '2016', '23334', '12-02-1998', 'cs.jpg', 'AT+POST');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
