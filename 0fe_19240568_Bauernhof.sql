-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql303.0fees.us
-- Generation Time: Nov 30, 2016 at 11:41 AM
-- Server version: 5.6.32-78.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `0fe_19240568_Bauernhof`
--

-- --------------------------------------------------------

--
-- Table structure for table `Crops`
--

CREATE TABLE IF NOT EXISTS `Crops` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `Cname` varchar(256) NOT NULL,
  `Growth Time` int(11) NOT NULL COMMENT 'seconds',
  `SID` int(11) NOT NULL,
  `Water Required` int(11) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Farm`
--

CREATE TABLE IF NOT EXISTS `Farm` (
  `UID` int(11) NOT NULL,
  `Farm_area` int(11) NOT NULL,
  `Soil_type` varchar(256) NOT NULL,
  `rCID` int(11) NOT NULL,
  `kCID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Soil`
--

CREATE TABLE IF NOT EXISTS `Soil` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(256) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `UID` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `ArdId` varchar(100) NOT NULL,
  `Location` varchar(1024) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483648 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `first_name`, `last_name`, `Email`, `ArdId`, `Location`) VALUES
(2147483647, 'Rahul', 'Tarak', 'test@example.com', 'wDmamJeIPi', 'bangalore');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
