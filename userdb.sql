-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 12:01 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userName` varchar(15) DEFAULT NULL,
  `fullName` varchar(25) DEFAULT NULL,
  `emailID` varchar(30) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `theme` varchar(15) DEFAULT NULL,
  `points` varchar(25) DEFAULT NULL,
  `hash` varchar(35) DEFAULT NULL,
  `verify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userName`, `fullName`, `emailID`, `password`, `DOB`, `theme`, `points`, `hash`, `verify`) VALUES
('harsh07', 'Harsh deepak Bharvada', 'harsh07bharvada@gmail.com', 'harsh07!', '1996-01-07', 'default', '250', 'b1a59b315fc9a3002ce38bbe070ec3f5', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
