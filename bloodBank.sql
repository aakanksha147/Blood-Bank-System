-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2017 at 11:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodBank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodSampleDetails`
--

CREATE TABLE `bloodSampleDetails` (
  `EmailId` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` int(3) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `contactNo` bigint(10) NOT NULL,
  `id` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodSampleDetails`
--

INSERT INTO `bloodSampleDetails` (`EmailId`, `name`, `age`, `bloodGroup`, `contactNo`, `id`) VALUES
('a@a.com', 'aakanksha ', 22, 'A+', 7878788757, 1),
('a@a.com', 'neha', 45, 'B-', 9521555758, 2),
('a@a.com', 'anjana', 18, 'B+', 9898989999, 4),
('a@a.com', 'pooja', 18, 'AB-', 9556565656, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `HospitalName` varchar(50) NOT NULL,
  `HolderFirstName` varchar(30) NOT NULL,
  `HolderLastName` varchar(30) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `HospitalEmail` varchar(50) NOT NULL,
  `HospitalContactNo` bigint(10) NOT NULL,
  `hospitalState` varchar(25) NOT NULL,
  `hospitalCity` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`HospitalName`, `HolderFirstName`, `HolderLastName`, `Password`, `HospitalEmail`, `HospitalContactNo`, `hospitalState`, `hospitalCity`) VALUES
('MHD', 'sanjeev', 'sharma', '25f9e794323b453885f5181f1b624d0b', 'a@a.com', 9871788444, 'UP', 'haryana'),
('mdh bhadur', 'gargi', 'bisht', '25f9e794323b453885f5181f1b624d0b', 'fr@fr.com', 9859555555, 'MP', 'gwaliar');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_id` varchar(200) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_id`, `password`, `status`) VALUES
('a@a.com', '25f9e794323b453885f5181f1b624d0b', 'Hospital'),
('fr@fr.com', '25f9e794323b453885f5181f1b624d0b', 'Hospital'),
('r@r.com', '25f9e794323b453885f5181f1b624d0b', 'Receiver'),
('t@t.com', '25f9e794323b453885f5181f1b624d0b', 'Receiver'),
('v@v.com', '25f9e794323b453885f5181f1b624d0b', 'Receiver');

-- --------------------------------------------------------

--
-- Table structure for table `receiverDetails`
--

CREATE TABLE `receiverDetails` (
  `UserEmail` varchar(60) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contactNo` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiverDetails`
--

INSERT INTO `receiverDetails` (`UserEmail`, `name`, `bloodGroup`, `password`, `contactNo`) VALUES
('r@r.com', 'akshu', 'AB-', '25f9e794323b453885f5181f1b624d0b', 9885766258),
('t@t.com', 'sneha', 'O+', '25f9e794323b453885f5181f1b624d0b', 9596922745),
('v@v.com', 'vishal', 'B-', '25f9e794323b453885f5181f1b624d0b', 9898955625);

-- --------------------------------------------------------

--
-- Table structure for table `requested_user`
--

CREATE TABLE `requested_user` (
  `UserEmail` varchar(60) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BloodGroup` varchar(3) NOT NULL,
  `hospitalEmail` varchar(50) NOT NULL,
  `Id` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requested_user`
--

INSERT INTO `requested_user` (`UserEmail`, `UserName`, `Time`, `BloodGroup`, `hospitalEmail`, `Id`) VALUES
('r@r.com', 'akshu', '2017-06-28 09:20:18', 'A+', 'a@a.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodSampleDetails`
--
ALTER TABLE `bloodSampleDetails`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`HospitalEmail`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `receiverDetails`
--
ALTER TABLE `receiverDetails`
  ADD PRIMARY KEY (`UserEmail`);

--
-- Indexes for table `requested_user`
--
ALTER TABLE `requested_user`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodSampleDetails`
--
ALTER TABLE `bloodSampleDetails`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requested_user`
--
ALTER TABLE `requested_user`
  MODIFY `Id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
