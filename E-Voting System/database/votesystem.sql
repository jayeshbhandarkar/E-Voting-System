-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 02:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'Jayesh', '$2y$10$g4m/PfziRBxoM9fvwqiS9OgxAV29w0y8..XHruyEplYPxYnhZJ6bC', 'Jayesh', 'Bhandarkar', 'user5.jpg', '2018-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `photo`, `platform`) VALUES
(23, 8, 'Dennis', 'Ritchie', 'user9.jpg', 'COLLEGE'),
(24, 9, 'Narendra', 'Modi', 'user14.png', 'COLLEGE'),
(30, 9, 'Sharad', 'Pawar', 'user8.png', 'COLLEGE'),
(31, 8, 'Bjarne', 'Stroustrup', 'user2.png', 'COLLEGE'),
(32, 8, 'James', 'Gosling', 'user3.jpg', 'COLLEGE'),
(35, 9, 'Uddhav', 'Thakare', 'user2.png', 'COLLEGE');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(8, 'Chairman', 1, 2),
(9, 'President', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Lastname` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Email_Id` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `Identity_Card` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Photo` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `Birth_Date` date NOT NULL,
  `Gender` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Phone_No` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `Address` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `Firstname`, `Lastname`, `Email_Id`, `Identity_Card`, `Photo`, `Birth_Date`, `Gender`, `Phone_No`, `Address`) VALUES
(12, 'Jayesh ', 'Bhandarkar', 'jayesh@123', 'aadhar', 'favicon.png', '2003-03-01', 'male', '9545040940', 'Dhule');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `password`, `firstname`, `lastname`, `photo`) VALUES
(5, 'pSMQYCjWk5dnmaD', '$2y$10$BhnhcZfQ40Bufse7yKqjoOu0/G4BuqZu2z8It5XpSUcKuTPhMcPxa', 'Rohan', 'Khairnar', 'user6.png'),
(16, 'lqyvXeC1ZIkbJHN', '$2y$10$WwSGNEOnUNm6U7vZ0VECIe7aTvRJr8ff8VG0O6bihnermfAIleCzu', 'Sahil', 'Mahajan', 'user7.png'),
(17, '8MGHvWJAI2CfeuU', '$2y$10$vnrTa3QOJVoeAF8DUdEOjOpX2Cb.a.H7Pib6UH4iJ.iAQRUEmM2C6', 'Prashant', 'Patil', 'user4.png'),
(18, 'nCWvhNZFdBaSrPG', '$2y$10$UiT.t.xMb.fnVKlKxdw2j.wJjAMTH5D.nv9xELScCL4UC9bFtObq6', 'Jayesh ', 'Bhandarkar', 'user5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voters_id`, `candidate_id`, `position_id`) VALUES
(33, 18, 32, 8),
(34, 18, 30, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
