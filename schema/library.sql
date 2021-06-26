-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2021 at 06:28 PM
-- Server version: 10.5.10-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `lender` int(11) DEFAULT NULL,
  `approved` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requested` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `genre`, `id`, `lender`, `approved`, `available`, `requested`) VALUES
('Wuthering Heights', 'Piece of my Heart', 1, 3, 'yes', 'no', 'no'),
('The Picture of Dorian Gray', 'Piece of my Heart', 2, NULL, 'yes', 'no', 'no'),
('To Kill A MockingBird', 'Piece of my Heart', 3, 2, 'yes', 'no', 'no'),
('A Thousand Splendid Suns', 'Piece of my Heart', 4, NULL, NULL, 'yes', NULL),
('I am Malala', 'Piece of my Heart', 5, 2, 'yes', 'no', 'no'),
('Rich Dad Poor Dad', 'Gyaan Dehi', 6, NULL, NULL, 'yes', NULL),
('The Monk Who Sold His Ferrari', 'Gyaan Dehi', 7, NULL, NULL, 'yes', NULL),
('R D Sharma', 'Ghissu ko Mera Pranaam', 8, NULL, NULL, 'yes', NULL),
('Irodov', 'Ghissu ko Mera Pranaam', 9, NULL, NULL, 'yes', NULL),
('Introduction To Algorithms', 'Ghissu ko Mera Pranaam', 10, NULL, NULL, 'yes', NULL),
('Origin of The Species', 'Gyaan Dehi', 11, NULL, NULL, 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'diya1@gmail.com', 'diya1', 'student'),
(3, 'diya2@gmail.com', 'diya2', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
