-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 11:20 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpadmins`
--

CREATE TABLE `phpadmins` (
  `user_id` int NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phpadmins`
--

INSERT INTO `phpadmins` (`user_id`, `Name`, `Email`, `username`, `password`, `confirm`) VALUES
(7, 'tun tun mausi', 'sp721329@gmail.com', 'simer', 'a7de78f5b4d7b66b6424f7ee3503095a97d3a432dcc3834d14431b3afed198e73a32d3d92a813747d0691326c5c677159a1184deb5912eeaf3af9fa6fc9ec70b', '00000'),
(8, 'Ansh', 'av7213298687@gmail.com', 'av', '4de274f923938e903988192d96b0317ac7e59bd32f34b63ee58332cb828cacc1d82bdc7702d406d7d05aea800844a97b93b0a82147ae059ae8e6ac12a3b0fa8b', '09'),
(9, 'tavisha', 'tp@gmail.com', 'tp', 'a7de78f5b4d7b66b6424f7ee3503095a97d3a432dcc3834d14431b3afed198e73a32d3d92a813747d0691326c5c677159a1184deb5912eeaf3af9fa6fc9ec70b', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `phppeople`
--

CREATE TABLE `phppeople` (
  `ID` int NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telNumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpadmins`
--
ALTER TABLE `phpadmins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `phppeople`
--
ALTER TABLE `phppeople`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpadmins`
--
ALTER TABLE `phpadmins`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phppeople`
--
ALTER TABLE `phppeople`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
