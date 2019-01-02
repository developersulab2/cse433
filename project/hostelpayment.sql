-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 07:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelpayment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_no.` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_no.`, `name`, `email`, `message`) VALUES
(2, 'Peter', 'g@gmail.com', 'hello'),
(3, 'nirob', 'dfdf@gmail.com', 'helooo'),
(4, 'rabbi', 'df@gmail.com', 'hii'),
(5, 'rabbi', 'df@gmail.com', 'hii'),
(6, 'DF', 'samia.sharmin.cse@ulab.edu.b', 'ulab'),
(7, 'nirob', 'dfdf@gmail.com', 'hllooo'),
(8, 'nirob', 'dfdf@gmail.com', 'hllooo'),
(9, 'nirob', 'dfdf@gmail.com', 'hllooo'),
(10, 'nirob', 'dfdf@gmail.com', 'hllooo');

-- --------------------------------------------------------

--
-- Table structure for table `regadmin`
--

CREATE TABLE `regadmin` (
  `admin_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `hostelname` int(11) NOT NULL,
  `bcash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hostelname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `institution` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `name`, `email`, `phone`, `hostelname`, `address`, `institution`, `username`, `password`) VALUES
(2, 'Samia sharmin', 'samia.sharmin.cse@', '01950993606', 'girlsshostel', 'mirpur-10', 'ULAB', 'samia', '1234'),
(3, 'samia', 'samia.sharmin.cse@', '133232', 'hostel', 'dhaka', 'ulab', 'shormi', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_no.`);

--
-- Indexes for table `regadmin`
--
ALTER TABLE `regadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regadmin`
--
ALTER TABLE `regadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
