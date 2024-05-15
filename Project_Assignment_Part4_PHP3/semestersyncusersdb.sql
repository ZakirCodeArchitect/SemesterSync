-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semestersyncusersdb`
--
CREATE DATABASE IF NOT EXISTS `semestersyncusersdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `semestersyncusersdb`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sr no.` int(11) NOT NULL,
  `UserId` varchar(32) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(1, '04072113055@student.qau.edu.pk', 'Qau@Q1157');
INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(2, '04072113065@student.qau.edu.pk', '65');
INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(3, '04072113030@student.qau.edu.pk', '30');
INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(4, 'zakir33', '33');
INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(5, '04072113033@student.qau.edu.pk', '33');
INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(6, '04072113075@student.qau.edu.pk', '75');
INSERT INTO `users` (`Sr no.`, `UserId`, `Password`) VALUES(7, '04072113085@student.qau.edu.pk', '85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sr no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
