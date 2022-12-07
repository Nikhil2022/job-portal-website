-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 06:00 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES
('Nayan1', 'Shinde', 'NaXX', '', '1234'),
('Nayan', 'Shinde', '1234', '1234', '123'),
('1234', '1234', '123456', '123456', '123'),
('Nayan', 'Shinde', '1234567', '1234789', '123'),
('Nayan', 'Shinde', '456', '789', '123'),
('dada', 'dssadasd', 'adsad', 'adsad', 'adssad'),
('Akash', 'Gengaje', 'akash1', 'akashgengaje123@gmail.com', '1234'),
('Akash', 'Gengaje', 'akash123', 'akashgengaje@gmail.com', '1234'),
('nayan', 'shinde', 'nayan321', 'nayanshinde321@gmail.com', '1234'),
('Nayan', 'Shinde', 'nayan456', 'shindenayan321@gmail.com', '1234'),
('Nikhil', 'Shinde', 'John123', 'shindenayan709@gmail.com', '1234'),
('Takshil', 'Jadhav', 'takshil123', 'takshiljadhav123@gmail.com', '123456'),
('Nayan1', 'Shinde', 'nayan', 'vishnushinde28@gmail.com', '123456'),
('Nayan', 'Shinde', 'xxx', 'xxx', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`email`),
  ADD KEY `user_name` (`email`),
  ADD KEY `password` (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
