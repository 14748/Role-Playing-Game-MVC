-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 10:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rolegame`
--
CREATE DATABASE IF NOT EXISTS `rolegame` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rolegame`;

-- --------------------------------------------------------

--
-- Table structure for table `creature`
--

DROP TABLE IF EXISTS `creature`;
CREATE TABLE `creature` (
  `idCreature` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `attackPower` int(11) NOT NULL DEFAULT 0,
  `lifeLevel` int(11) NOT NULL DEFAULT 100,
  `weapon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creature`
--

INSERT INTO `creature` (`idCreature`, `name`, `description`, `avatar`, `attackPower`, `lifeLevel`, `weapon`) VALUES
(2, 'Pepito ', 'fdgdfgfd', 'https://www.bing.com/th?id=OIP.W8apTKARTqVhmLzMCisNmAHaEs&w=157&h=100&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2', 3423, 234, 'ddsfs'),
(3, 'hola', 'dfgdfg', 'https://www.bing.com/th?id=OIP.W8apTKARTqVhmLzMCisNmAHaEs&w=157&h=100&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2', 344, 234, 'fggddfgg'),
(4, 'chao', 'dfgdfg', 'https://www.bing.com/th?id=OIP.W8apTKARTqVhmLzMCisNmAHaEs&w=157&h=100&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2', 34, 234, 'fgdfg'),
(5, 'heyy', 'fgdg', 'https://www.bing.com/th?id=OIP.W8apTKARTqVhmLzMCisNmAHaEs&w=157&h=100&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2', 2343, 32423, '2323'),
(6, 'cahoo', 'dfgdfg', 'https://www.bing.com/th?id=OIP.W8apTKARTqVhmLzMCisNmAHaEs&w=157&h=100&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2', 445, 34534, '34534');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `name`, `password`) VALUES
(1, '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creature`
--
ALTER TABLE `creature`
  ADD PRIMARY KEY (`idCreature`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creature`
--
ALTER TABLE `creature`
  MODIFY `idCreature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
