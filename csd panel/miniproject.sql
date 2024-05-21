-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 07:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini project-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `ques` varchar(1000) DEFAULT NULL,
  `lques` varchar(50) DEFAULT NULL,
  `sub` varchar(100) DEFAULT NULL,
  `sem` varchar(50) DEFAULT NULL,
  `i1` varchar(100) DEFAULT NULL,
  `o1` varchar(100) DEFAULT NULL,
  `i2` varchar(100) DEFAULT NULL,
  `o2` varchar(100) DEFAULT NULL,
  `i3` varchar(100) DEFAULT NULL,
  `o3` varchar(100) DEFAULT NULL,
  `i4` varchar(100) DEFAULT NULL,
  `o4` varchar(100) DEFAULT NULL,
  `i5` varchar(100) DEFAULT NULL,
  `o5` varchar(100) DEFAULT NULL,
  `i6` varchar(100) DEFAULT NULL,
  `o6` varchar(100) DEFAULT NULL,
  `i7` varchar(100) DEFAULT NULL,
  `o7` varchar(100) DEFAULT NULL,
  `i8` varchar(100) DEFAULT NULL,
  `o8` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `fname`, `ques`, `lques`, `sub`, `sem`, `i1`, `o1`, `i2`, `o2`, `i3`, `o3`, `i4`, `o4`, `i5`, `o5`, `i6`, `o6`, `i7`, `o7`, `i8`, `o8`) VALUES
(1, 'Ishika', 'program to test', 'medium', 'basic', 'sem2', 'test', 'test', 'Test', 'Test', 'TESt', 'TESt', '', '', '', '', '', '', '', '', '', ''),
(2, 'Ishika', 'prime or not', 'easy', 'basic', 'sem1', '7', 'yes', '20', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Sukshith', 'even or not', 'medium', 'basic', 'sem1', '12', 'even', '3', 'odd', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Ishika', 'sum of n numbers', 'easy', 'basic', 'sem1', '5', '15', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `sid` int(11) NOT NULL,
  `ques` varchar(1000) DEFAULT NULL,
  `sol` varchar(5000) DEFAULT NULL,
  `lang` varchar(50) DEFAULT NULL,
  `yes_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`sid`, `ques`, `sol`, `lang`, `yes_no`) VALUES
(1, 'program to test', '1', 'python', 'Yes'),
(2, 'prime or not', '2', 'python', 'Yes'),
(3, 'sum of n numbers', '3', 'python', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `Employee` varchar(20) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`uid`, `fname`, `mname`, `lname`, `Employee`, `pass`, `Phone`, `Email`) VALUES
(1, 'Ishika', '', 'Goenka', '009', 'Ishika123', '2147483647', 'ishikagoenka30@gmail.com'),
(2, 'Sukshith', '', 'G', '007', 'Sukshith', '8897952185', 'sukshith@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
