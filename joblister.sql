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
-- Database: `joblister`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Business'),
(2, 'Technology'),
(3, 'Retail'),
(4, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(2, 2, 'Tech.io', 'Entry Level Programmer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper placerat eros, eget convallis urna ornare venenatis. Quisque sed neque metus.', '40k', 'Springfield', 'John Cena', 'ucantseememytimeisnow69@gmail.com', '2022-11-20 19:04:38'),
(9, 1, 'Facebook', 'Marketing Head', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu interdum nulla, sed condimentum diam. Mauris tortor massa, lobortis quis erat sit amet, sagittis consectetur arcu. Praesent placerat, ex non bibendum semper, libero orci condimentum ant', '50k', 'Los Angeles', 'Mark Zuckerberg', 'markzuckerberg69@gmail.com', '2022-11-22 05:55:36'),
(10, 3, 'FirstCry.com', 'Retail Sales Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat luctus eros. Cras lacinia nec ex in maximus. Donec scelerisque dapibus mattis. Nullam rutrum condimentum nunc id imperdiet. Sed convallis tempus ipsum et dignissim. Aenean sed odio quis', '80k', 'Mumbai', '7594861230', 'firstcryjob@gmail.com', '2022-11-30 08:07:42'),
(11, 4, 'GK Construction', 'Office Assistant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat luctus eros. Cras lacinia nec ex in maximus. Donec scelerisque dapibus mattis. Nullam rutrum condimentum nunc id imperdiet. Sed convallis tempus ipsum et dignissim. Aenean sed odio quis', '60k', 'Pune', '1532486790', 'gkconstruction123@gmail.com', '2022-11-30 08:09:20'),
(12, 2, 'Google', 'Software Tester', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat luctus eros. Cras lacinia nec ex in maximus. Donec scelerisque dapibus mattis. Nullam rutrum condimentum nunc id imperdiet. Sed convallis tempus ipsum et dignissim. Aenean sed odio quis', '85k', 'Thane', '7893214560', 'googlejobs@gmail.com', '2022-11-30 08:11:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
