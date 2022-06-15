-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 06:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `sex` text NOT NULL,
  `bday` date NOT NULL,
  `fthname` text NOT NULL,
  `addr` varchar(100) NOT NULL,
  `mob` int(10) NOT NULL,
  `amob` int(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `branch` text NOT NULL,
  `sem` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment` varchar(10) DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `mname`, `lname`, `sex`, `bday`, `fthname`, `addr`, `mob`, `amob`, `college`, `branch`, `sem`, `email`, `passwd`, `id`, `payment`) VALUES
('ravi', '', 'agrawal', 'male', '0000-00-00', 'rv agrawal', ' Vishrantwadi, Pune', 923423424, 943234523, 'UCER College', 'Computer Science', '4', 'ravi123@gmail.com', 'Prayagraj', 1, 'false'),
('rohit', '', 'urane', 'male', '2003-03-22', 'rv urane', 'pune ', 94323432, 954534534, 'coe pune', 'civil engineering', '4', 'rohiturane@gmail.com', 'allahabad', 2, 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
