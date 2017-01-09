-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 03:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_fee`
--

CREATE TABLE `course_fee` (
  `fcourse` int(11) NOT NULL,
  `totalfee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `course` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `birthdate`, `address`, `city`, `district`, `state`, `pincode`, `phone`, `mobile`, `email`, `branch`, `course`) VALUES
(1, 'Mr test test test', '2016-09-06', 'test', 'test', 'Pune', 'Maharashtra', 87877, 474854, 7878, 'test@test.test', 'Computer and IT', 'AutoCAD 2015'),
(2, 'Mr abc abc abc', '2016-09-02', 'abc', 'abc', 'Pune', 'Maharashtra', 659, 8898, 898, 'abc@test.test', 'Computer and IT', 'Basic Embedded System'),
(3, 'Mr test1 test1 test1', '2016-09-06', 'test1', 'test1', 'Pune', 'Maharashtra', 9989, 8989, 998989, 'test1@test.test', 'Computer and IT', 'AutoCAD 2015'),
(4, 'Mr test2 test2 test2', '2016-09-28', 'test2', 'test2', 'Pune', 'Maharashtra', 65656, 5656, 56565, '565@test2.test2', 'Electronics and Electrical', 'Advanced PLC'),
(5, 'MR TEST5 TEST5 TEST5', '2016-09-06', 'TEST5', 'TEST5', 'TEST5', 'TEST5', 8878, 878787, 8877, 'TEST5@TEST5.TEST5', 'MECHANOCALAND AUTOMOBILE', 'SOLID-EDGE'),
(6, 'MR TEST5 TEST5 TEST5', '2016-09-06', 'TEST5', 'TEST5', 'TEST5', 'TEST5', 8878, 878787, 8877, 'TEST5@TEST5.TEST5', 'MECHANOCALAND AUTOMOBILE', 'SOLID-EDGE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('vikas', 'vikas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
