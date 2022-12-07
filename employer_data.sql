-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 05:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employer_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer_data`
--

CREATE TABLE `employer_data` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_data`
--

INSERT INTO `employer_data` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES
('0', '0', '', '0', '0'),
('dasd', 'Shinde', '', '12345', '222'),
('adwsd', 'wdad', '', 'ad', 'adad'),
('ada', 'dasdas', '', 'dasdsad', 'dasd'),
('dasda', 'dada', '', 'dsadad', 'adasd'),
('dsadsa', 'dsadsad', '', 'dsadasd', 'dsad'),
('dsadsa', 'dsadsad', '', 'dsadasda', 'dsad'),
('Nayan', 'Shinde', '', 'jgf', '123'),
('nayan', 'shinde', '', 'nayanshinde123@gmail.com', '1234'),
('Nayan', 'Shinde', 'NaXX', 'nayanshinde456', '1234'),
('Nayana', 'dsada', '', 'sdsad', 'adsasd'),
('Nayan', 'Shinde', 'nayan456', 'shindenayan321@gmail.com', '1234'),
('Nayan', 'Shinde', '', 'shindenayan709@gmail..com', '1234'),
('Nayan', 'Shinde', '', 'shindenayan709@gmail.com', '1234'),
('Nikhil', 'Shinde', '', 'shindenikhil668@gmail.com', 'qweqwe'),
('Nayan', 'Shinde', '', 'takshiljadhav123@gmail.com', '1234'),
('Nayan', 'Shinde', 'xxx', 'xxx', 'xxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer_data`
--
ALTER TABLE `employer_data`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
