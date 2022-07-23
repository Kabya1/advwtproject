-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 04:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Email`, `PASSWORD`, `Gender`) VALUES
('kb', 'kb@gmail.com', 'kb', 'female'),
('', 'ns@gmail.com', '', 'Female'),
('ts', 'ts@gmail.com', 'ts123', 'Others'),
('jigu', 'j@gmail.com', '12345', 'Male'),
('puja', 'p@gmail.com', '1234', 'Female'),
('puja', 'p@gmail.com', '1234', 'Female'),
('Aparna Boruah', 'aparna@gmail.com', 'aparna111', ''),
('Aparna Boruah', 'aparna@gmail.com', 'aparna111', 'Female'),
('Aparna Boruah', 'aparna@gmail.com', 'aparna111', 'Female'),
('Kaushik Boruah', 'kaushik@gmail.com', 'kuas', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
