-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2015 at 06:10 AM
-- Server version: 5.6.15
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Beneficiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminUsers`
--

CREATE TABLE IF NOT EXISTS `adminUsers` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminUsers`
--

INSERT INTO `adminUsers` (`userID`, `username`, `password`, `name`) VALUES
(1, 'adminUser', 'a613808ccbd6388b54916685220690e9d3d57258', 'Admin User');

-- --------------------------------------------------------

--
-- Table structure for table `familyMembers`
--

CREATE TABLE IF NOT EXISTS `familyMembers` (
  `userID` int(11) DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `familyMembers`
--

INSERT INTO `familyMembers` (`userID`, `firstName`, `lastName`, `dob`, `gender`) VALUES
(NULL, 'Mike', 'Goitia', NULL, 'M'),
(1, 'Mike', 'Goitia', '2015-05-13', 'F'),
(1, 'Mike', 'Goitia2', '2015-05-13', 'F'),
(1, 'Mike', 'Traci', '2015-05-20', 'M'),
(1, 'Mike', 'Goitia2', '2015-05-13', 'F'),
(1, 'Mike', 'Goitia', '2015-05-20', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `lastDeployment` date NOT NULL,
  `payGrade` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilePictureDir` varchar(50) NOT NULL,
  `IDCardImg` varchar(50) NOT NULL,
  `birthCertDir` varchar(50) NOT NULL,
  `formDir` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstName`, `lastName`, `lastDeployment`, `payGrade`, `email`, `profilePictureDir`, `IDCardImg`, `birthCertDir`, `formDir`) VALUES
(1, 'adminzxy', '755d58cbd189a5e0b5f335c408e89a5bd7c5b2d0', 'Mike', 'Goitia', '2015-05-01', '0-0', 'misarmiento@csumb.edu', '', 'worst_fake_ids_08.jpg', 'birthcertifcate1.jpg', 'form123.jpg'),
(2, 'user123', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', 'user', 'user', '2015-05-14', '0-5', 'test@gmail.com', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
