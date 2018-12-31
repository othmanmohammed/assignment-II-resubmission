-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 07:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cell_number` bigint(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`id`, `name`, `cell_number`, `email`) VALUES
(12, 'Name is jef ', 30451515151, 'mynis@hotmail.com'),
(18, 'jef', 45454545454, 'jef@gmail.com'),
(19, 'something ', 45784164569, 'something@gmail.com'),
(20, 'new', 77777777777, 'n7@gmail.com'),
(21, 'dude', 90078601, 'cool@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `email`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(2, 'test', 't@test.com', 'test'),
(4, 'test3', 't2@test.com', 'fb469d7ef430b0baf0cab6c436e70375'),
(6, 'a', 'a@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dir`
--
ALTER TABLE `dir`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
