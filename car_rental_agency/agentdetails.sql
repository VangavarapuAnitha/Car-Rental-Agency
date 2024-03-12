-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 11, 2024 at 08:07 PM
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
-- Database: `car_rental_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentdetails`
--

CREATE TABLE `agentdetails` (
  `email` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `licenseNumber` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agentdetails`
--

INSERT INTO `agentdetails` (`email`, `fullName`, `phone`, `companyName`, `licenseNumber`, `address`) VALUES
('anitha@gmail.com', 'Vangavarapu Anitha', 2147483647, 'VSM ', 'A45P47', 'Banglore,India'),
('suneetha123@gmail.com', 'Suneetha', 2147483647, 'Patel ', 'K14S16', 'Vizag,India'),
('suneetha@gmail.com', 'suneetha', 2147483647, 'SPMVV ', 'S16A18', 'Tirupati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentdetails`
--
ALTER TABLE `agentdetails`
  ADD PRIMARY KEY (`licenseNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
