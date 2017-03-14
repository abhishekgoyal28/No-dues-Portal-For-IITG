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
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `warden` varchar(20) NOT NULL,
  `lab1` int(2) NOT NULL,
  `lab2` int(2) NOT NULL,
  `lab3` int(2) NOT NULL,
  `hod` int(2) NOT NULL,
  `library` int(2) NOT NULL,
  `stdent_affair` int(2) NOT NULL,
  `gymkhana` int(2) NOT NULL,
  `accountant` int(2) NOT NULL,
  `cc_incharge` int(2) NOT NULL,
  `registrar` int(2) NOT NULL,
  `caretaker` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`uid`, `username`, `password`, `warden`, `lab1`, `lab2`, `lab3`, `hod`, `library`, `stdent_affair`, `gymkhana`, `accountant`, `cc_incharge`, `registrar`, `caretaker`) VALUES
(1, 'santosh', 'biswas', 'null', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'null'),
(2, 'purandar', 'bhaduri', 'dihing', 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 'null'),
(3, 'saurabh', 'saurabh', 'null', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'null'),
(4, 'raman', 'raman', 'null', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'null'),
(5, 'steven', 'steven', 'null', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'dihing'),
(6, 'bhupen', 'bhupen', 'barak', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'null'),
(7, 'chandan', 'chandan', 'null', 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 'null'),
(8, 'tamil', 'tamil', 'null', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'barak'),
(9, 'mayank', 'mayank', 'null', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
