-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 05:44 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpletechdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `CLAN_NAME` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `callsign` varchar(255) NOT NULL,
  `auth` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `callsign`, `auth`, `department`, `accepted`, `trn_date`) VALUES
(13, 'dennis', 'dennis@sweden.se', '$2y$10$XldthQRLFHoys4koSJUCVeODl5.Nr6y8v7CmyuV0c6dtPFhxpP7Sm', '', 0, 0, 0, '0000-00-00 00:00:00'),
(14, '123', '123@123.123', '$2y$10$px/paIVBFf//RrBtgW4.c.8d1RRWHlqnZ1sF6aSzovlORNNL2gyIe', '', 0, 0, 0, '0000-00-00 00:00:00'),
(15, 'test', 'test123@gmail.com', '$2y$10$ddhUK.TkovlDPLI5SgjQ5u9/8/jC/RLKsDZG8apk2c6P5FOPK4B3G', '', 1, 2, 0, '0000-00-00 00:00:00'),
(16, '1', '1@1.1', '$2y$10$YIAu1WPJTy7WjimVZzN6wOyutlk1vrK7PQGxfG9sUWpsw1AbB10yK', '', 1, 3, 0, '2018-05-03 16:07:45'),
(18, '444', '444@444.444', '$2y$10$cgJ5O/6e97yADb2xcnxBTup6tblqSnrWuTic872JMKMvUUKR34.dG', '', 1, 2, 1, '2018-05-03 16:39:43'),
(19, 'asdasd', 'asdasd@asd.asd', '$2y$10$ultusJo0Di.obitzRDxcxu22EZg7e5hApJQx8tdmEUYzM/ZyzT3Lm', '', 1, 3, 0, '2018-05-03 16:44:30'),
(20, '111', '111@111.111', '$2y$10$oSveaKOuWmQHOuRqDB9JMuoZU6mai2PTyAmww7eAqO4G.KM2nzQKu', '1A-01', 1, 2, 0, '2018-05-03 16:54:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
