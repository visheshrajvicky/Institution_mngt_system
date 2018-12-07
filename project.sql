-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 10:36 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

		--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `start_date` varchar(34) NOT NULL,
  `duration` varchar(900) NOT NULL,
  `std_time` varchar(45) NOT NULL,
  `day_time` varchar(900) NOT NULL,
  `subject` varchar(78) NOT NULL,
  `alt_faculties` varchar(54) NOT NULL,
  `per_faculties` varchar(89) NOT NULL,
  `date` varchar(55) NOT NULL,
  `time` varchar(78) NOT NULL,
  `ip` varchar(76) NOT NULL,
  `byid` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `start_date`, `duration`, `std_time`, `day_time`, `subject`, `alt_faculties`, `per_faculties`, `date`, `time`, `ip`, `byid`) VALUES
(4, '2018-08-17', '34	', '07:30', 'sunday(yes-23:02)', 'JAVA', 'aadil sir', 'ramu sir', '18-08-04', '02:29:06', '127.0.0.1', '1'),
(5, '2018-08-17', '34	', '23:03', 'sunday(yes-23:02)', 'JAVA', 'ankit sir', 'ramu sir', '18-08-04', '02:30:55', '127.0.0.1', '1'),
(11, '2018-08-30', '55	', '09:00', 'wednesday(yes-23:04)', 'C++/C', 'piyush sir', 'aadil sir', '18-08-09', '06:04:44', '::1', '1'),
(12, '2018-08-30', '55	', '10:00', 'mnday(yes-23:00)', 'PHP', 'piyush sir', 'aadil sir', '18-08-10', '08:38:45', '::1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `course` varchar(34) NOT NULL,
  `remark` varchar(90) NOT NULL,
  `date` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `ip` varchar(23) NOT NULL,
  `byid` varchar(54) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `remark`, `date`, `time`, `ip`, `byid`) VALUES
(9, '.net', 'hii akkash how are you ?', '18-08-04', '10:56:35', '127.0.0.1', '1'),
(11, 'SEO', 'fidaato infotech Pvt. Ltd', '18-08-10', '06:58:04', '::1', '1'),
(12, 'JAVA', 'fidaato infotech Pvt. Ltd', '18-08-10', '06:58:29', '::1', '1'),
(13, 'PHP', 'fidaato infotech Pvt. Ltd', '18-08-10', '06:58:51', '::1', '1'),
(14, 'PYTHON', 'fidaato infotech Pvt. Ltd', '18-08-10', '06:59:14', '::1', '1'),
(15, 'C/C++', 'fidaato infotech Pvt. Ltd', '18-08-10', '06:59:36', '::1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `name` varchar(34) NOT NULL,
  `batch_name` varchar(90) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `qualification` varchar(23) NOT NULL,
  `exprience` varchar(45) NOT NULL,
  `work_office` varchar(23) NOT NULL,
  `photo` varchar(67) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(23) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` varchar(23) NOT NULL,
  `time` varchar(20) NOT NULL,
  `ip` varchar(23) NOT NULL,
  `byid` varchar(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `batch_name`, `email`, `mobile`, `qualification`, `exprience`, `work_office`, `photo`, `address`, `dob`, `gender`, `date`, `time`, `ip`, `byid`) VALUES
(9, 'ramu', 'JAVA', 'ramu55@gamil.com', '8602718125', 'BE', '4', 'MP nagar bhaopal madhy', '', 'Sector a indrapuri', '2018-08-19', '', '18-08-03', '06:42:52', '::1', '1'),
(13, 'ramu', 'php', 'ramu55@gamil.com', '8602718125', 'ME', '5', 'Sector b indrapuri	', '', 'Sector a indrapuri', '2018-08-23', '', '18-08-04', '09:13:23', '127.0.0.1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(23) NOT NULL,
  `batch_name` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `qualification` varchar(78) NOT NULL,
  `subject` varchar(54) NOT NULL,
  `batch_time` varchar(200) NOT NULL,
  `institute` varchar(89) NOT NULL,
  `photo` varchar(55) NOT NULL,
  `address` varchar(78) NOT NULL,
  `dob` varchar(76) NOT NULL,
  `refer_by` varchar(78) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(23) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `byid` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `batch_name`, `email`, `mobile`, `qualification`, `subject`, `batch_time`, `institute`, `photo`, `address`, `dob`, `refer_by`, `gender`, `date`, `time`, `ip`, `byid`) VALUES
(12, 'jagannath kumar', 'morning	', 'kumarjagannath009@gmail.com', '8602718125', 'BE	', 'JAVA', '', 'TITR', 'jk.jpg', 'Sector a indrapuri', '2018-08-22', 'sachin kumar', '', '18-08-10', '08:29:15', '::1', '4'),
(13, 'baban kumar', 'evening	', 'baban@gmail.com', '8602718125', 'ME	', '.NET', '23:03', '', 'fidaato1.jpg', 'Sector a indrapuri', '2018-08-18', 'sachin kumar', '', '18-08-10', '09:11:27', '::1', '4'),
(14, 'ramu', 'morning	', 'ramu55@gamil.com', '8602718125', '	be', 'c++', '07:30', 'TITR', '', 'Sector a indrapuri', '2018-08-17', 'male', '', '18-08-10', '09:39:28', '::1', '4'),
(15, 'aakashkumar', 'JAVA	', 'a2kash2@gmail.c', '8602718125', 'M.tech	', 'C++/C', '10:00', 'TITR', 'jk.jpg', 'Sector a indrapuri', '2018-08-12', 'sachin kumar', 'Male', '18-08-11', '07:05:35', '::1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student_batch`
--

CREATE TABLE IF NOT EXISTS `student_batch` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(34) NOT NULL,
  `batch_id` varchar(90) NOT NULL,
  `discount` varchar(45) NOT NULL,
  `fee_status` varchar(900) NOT NULL,
  `remark` varchar(78) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(34) NOT NULL,
  `ip` varchar(90) NOT NULL,
  `byid` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_batch`
--

INSERT INTO `student_batch` (`id`, `student_id`, `batch_id`, `discount`, `fee_status`, `remark`, `date`, `time`, `ip`, `byid`) VALUES
(1, '8', '8	', '4500', '15678', '', '18-08-06', '07:26:53', '::1', '1'),
(2, '8', '11	', '434', '334', '', '18-08-09', '06:09:09', '::1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
