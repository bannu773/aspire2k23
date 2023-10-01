-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2020 at 08:44 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11808344_scoreboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `eventname` varchar(225) NOT NULL,
  `collegename` varchar(225) NOT NULL,
  `name1` varchar(225) NOT NULL,
  `name2` varchar(225) NOT NULL,
  `name3` varchar(225) NOT NULL,
  `name4` varchar(225) NOT NULL,
  `email1` varchar(225) NOT NULL,
  `email2` varchar(225) NOT NULL,
  `email3` varchar(225) NOT NULL,
  `email4` varchar(225) NOT NULL,
  `phonenumber1` varchar(225) NOT NULL,
  `phonenumber2` varchar(225) NOT NULL,
  `phonenumber3` varchar(225) NOT NULL,
  `phonenumber4` varchar(225) NOT NULL,
  `branch1` varchar(225) NOT NULL,
  `branch2` varchar(225) NOT NULL,
  `branch3` varchar(225) NOT NULL,
  `branch4` varchar(225) NOT NULL,
  `accommodation1` varchar(225) NOT NULL,
  `accommodation2` varchar(225) NOT NULL,
  `accommodation3` varchar(225) NOT NULL,
  `accommodation4` varchar(225) NOT NULL,
  `unique_id` varchar(225) NOT NULL,
  `REG_TI_DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
