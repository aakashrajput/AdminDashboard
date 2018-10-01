-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2018 at 05:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spartanshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_reg`
--

CREATE TABLE `employee_reg` (
  `id` int(11) NOT NULL,
  `emp_username` varchar(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_pass` varchar(50) NOT NULL,
  `emp_domain` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_state` varchar(20) NOT NULL,
  `emp_contact` varchar(20) NOT NULL,
  `emp_skills` varchar(50) NOT NULL,
  `emp_img` varchar(50) NOT NULL,
  `emp_dor` varchar(50) NOT NULL,
  `emp_about` varchar(500) NOT NULL,
  `username` varchar(50) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_reg`
--
ALTER TABLE `employee_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_reg`
--
ALTER TABLE `employee_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
