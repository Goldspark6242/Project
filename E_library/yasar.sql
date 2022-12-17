-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2022 at 08:47 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `APASS` varchar(20) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234'),
(2, 'akash', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `BTITLE` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `KEYWORDS` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `FILE` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `BTITLE`, `KEYWORDS`, `FILE`) VALUES
(1, 'mark_sheet', 'mark_sheet,result,rank', '../upload/thangaraj'),
(2, 'Thangaraj', 'xl', '../upload/01.png'),
(3, 'Thangaraj', 'img', '../upload/01-min.png'),
(4, 'Thangaraj', '123', '../upload/unnamed.png'),
(5, 'Thangaraj', '123', '../upload/unnamed.png'),
(6, '', '', '../upload/30tb-panda-superJumbo.jpg'),
(7, 'neruu', 'ne', 'upload/thangaraj (1).xlsx'),
(8, 'yasar', 'aa', 'upload/2.jpg'),
(9, 'yasar', 'rank,mark,result,student details', 'upload/facebook design001_mobile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `COMM` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CID`, `BID`, `SID`, `COMM`, `LOGS`) VALUES
(1, 1, 2, 'I am Fail......LOL....', '2022-11-23 12:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `MESSAGE` varchar(500) COLLATE utf8_croatian_ci NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `ID`, `MESSAGE`, `LOGS`) VALUES
(1, 2, 'Need bit paper in Exam Hall', '2022-11-09 05:17:25'),
(2, 6, 'dfdsf', '2022-11-28 03:47:20'),
(3, 6, 'I need more books', '2022-11-28 03:50:07'),
(4, 6, 'p', '2022-11-28 04:07:49'),
(5, 10, 'i need php book///', '2022-11-30 13:06:11'),
(6, 3, 'gfygtyh', '2022-12-05 13:21:04'),
(7, 3, '', '2022-12-06 13:50:08'),
(8, 3, '4245', '2022-12-06 13:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `PASS` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `MAIL` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `DEP` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `RESUME` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `PASS`, `MAIL`, `DEP`, `RESUME`) VALUES
(1, 'Thangaraj', '12345', 'thangaraj2789@gmail.com', 'BCA', NULL),
(2, 'Akash', '12345', 'akash@gmail.com', '12th fail', NULL),
(3, 'gold', '1234', 'gold@gmail.com', 'BCA', 'resume/thangaraj.xlsx'),
(4, 'dinesh', '1234', 'dinesh@gmail.com', '10', NULL),
(5, 'jhgh', '1234', 'sutheep@gmail.com', 'others', NULL),
(6, 'sudeep', '1234', 'sudeep@gmail.com', 'ug', NULL),
(7, 'gokul', '87654321', 'goldking9488@gmail.com', '10', NULL),
(8, '123', '123', '123@gmail.com', 'pg', NULL),
(9, 'asd', 'asd', 'asd@gmail.com', 'iti', NULL),
(10, 'gowtham', '12345', '123@gmail.com', 'ug', NULL),
(11, 'auxilian', 'badvibesforever', 'auxilianaux33@gmail.com', '12', NULL),
(12, 'vijay', '1234', 'vijay@gmail.com', '10', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
