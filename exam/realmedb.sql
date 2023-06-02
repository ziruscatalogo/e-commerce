-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 03:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realmedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `name` varchar(30) NOT NULL,
  `stocks` int(15) NOT NULL,
  `price` int(15) NOT NULL,
  `pimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`name`, `stocks`, `price`, `pimg`) VALUES
('Neo 32 Tv', 7, 20000, 'neo32tv.png'),
('Smart Tv', 15, 15000, 'smarttvx.png'),
('realme 6', 8, 12000, 'realme6.png'),
('realme 6i', 9, 10000, 'realme6i.png'),
('realme 6 pro', 10, 15000, 'realme6pro.png'),
('realme 5i', 15, 7000, 'realme5i.png'),
('realme 5 pro', 15, 9000, 'realme5pro.png'),
('tripod', 9, 1000, 'selfietripad.png'),
('realme 5', 10, 5000, 'realme5.png');

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `pimg` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(15) NOT NULL,
  `nstocks` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_password`) VALUES
('admin@gmail.com', '$2y$10$itGsomRJwyHIT9Lyfm//8.CdxPXglrTzNeAIUK4mJ4.8MP1mRNXZa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `Password`) VALUES
('user@gmail.com', '$2y$10$3AClLlu0yirtn3.vrmC6XOUlcQRu5HZyU/J1hyi47EkDO5y0mKBve'),
('user1@gmail.com', '$2y$10$r24ZqRvqu8n4C1yrExgSBuR4Oa3hwWaE3vjuXn2PG8sf5zpMGYkta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
