-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 08:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voter`
--

-- --------------------------------------------------------

--
-- Table structure for table `voted`
--

CREATE TABLE IF NOT EXISTS `voted` (
  `voterid` varchar(10) NOT NULL,
  `constituency` varchar(25) NOT NULL,
  `candidate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voted`
--

INSERT INTO `voted` (`voterid`, `constituency`, `candidate`) VALUES
('123', 'delhi', ''),
('456', 'mumbai', ''),
('22', 'wed', ''),
('222', 'wev', ''),
('12345', 'simran', 'modi'),
('777', 'arpit', 'kejri'),
('6726', 'mumbai', 'bal thackrey'),
('234', 'mumbai', 'lal');

-- --------------------------------------------------------

--
-- Table structure for table `voterlist`
--

CREATE TABLE IF NOT EXISTS `voterlist` (
  `fullname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `aadhar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voterlist`
--

INSERT INTO `voterlist` (`fullname`, `email`, `username`, `password`, `birthday`, `gender`, `aadhar`) VALUES
('Saswat', 'psaswat21@gmail.com', 'sash21', 'saswat', '0000-00-00', 'others', '123456781234'),
('Arpit Tripathi', 'atripathi1103@gmail.com', 'apt', 'simran', '0000-00-00', 'm', '783343110912'),
('Simran Kaur', 'simrankaur@gmail.com', 'simo', 'simran', '0000-00-00', 'f', '127843519099'),
('Rahul Kumar', 'rk@gmail.com', 'rk', 'rahulkumar', '0000-00-00', 'm', '123498073451'),
('vishal', 'vish@gmail.com', 'vish', 'vishal', '0000-00-00', 'm', '124509561428'),
('Nikhita', 'nixdix@gmail.com', 'nixy', 'nixydixy', '0000-00-00', 'f', '238809017812');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
