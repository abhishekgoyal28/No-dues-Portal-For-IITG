-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 03:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credentials`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `uid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hostal` varchar(30) NOT NULL,
  `warden` int(2) NOT NULL,
  `caretaker` int(2) NOT NULL,
  `lab1` int(2) NOT NULL,
  `lab2` int(2) NOT NULL,
  `lab3` int(2) NOT NULL,
  `deparment` varchar(30) NOT NULL,
  `library` int(2) NOT NULL,
  `accountant` int(2) NOT NULL,
  `cc_incharge` int(2) NOT NULL,
  `gymkhana` int(2) NOT NULL,
  `stdent_affair` int(2) NOT NULL,
  `registrar` int(2) NOT NULL,
  `hostel_clear` int(2) NOT NULL,
  `hod` int(2) NOT NULL,
  `roll_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`uid`, `username`, `password`, `hostal`, `warden`, `caretaker`, `lab1`, `lab2`, `lab3`, `deparment`, `library`, `accountant`, `cc_incharge`, `gymkhana`, `stdent_affair`, `registrar`, `hostel_clear`, `hod`, `roll_no`) VALUES
(1, 'abhishek', 'goyal', 'barak', 1, 1, 0, 0, 0, 'cse', 0, 0, 0, 0, 0, 0, 0, 0, 150101002),
(2, 'satya', 'prakash', 'dihing', 0, 0, 0, 0, 0, 'cse', 0, 1, 0, 0, 0, 0, 0, 0, 150101060),
(3, 'abhay', 'abhay', 'barak', 0, 0, 1, 0, 0, 'cse', 0, 0, 0, 0, 0, 0, 0, 0, 150101001),
(4, 'ankit', 'ankit', 'barak', 0, 0, 0, 0, 0, 'cse', 0, 0, 0, 0, 0, 0, 0, 0, 150101005),
(5, 'roopansh', 'roopansh', 'dihing', 0, 0, 0, 0, 0, 'cse', 0, 0, 0, 0, 0, 0, 0, 0, 150101052);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
