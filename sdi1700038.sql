-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 12, 2021 at 06:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1700038`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `firstname_surname` text NOT NULL,
  `email` text NOT NULL,
  `appointmentfor` text NOT NULL,
  `date` text NOT NULL,
  `appointmenthour` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`firstname_surname`, `email`, `appointmentfor`, `date`, `appointmenthour`, `message`) VALUES
('', '', 'default', '', 'default', ''),
('Konstantinos Nikoletos', 'nikoletos.konstantinos@gmail.com', 'director', '01/21/2021', '09:00', ''),
('', '', 'director', '01/21/2021', '09:00', ''),
('', '', 'default', '', 'default', ''),
('', '', 'default', '', '', ''),
('Konstantinos Nikoletos', 'nikoletos.konstantinos@gmail.com', 'minister', '01/14/2021', '09:00', '------------------'),
('Konstantinos Nikoletos', 'nikoletos.konstantinos@gmail.com', 'director', '01/20/2021', '09:00', '---------------'),
('Konstantinos Nikoletos', 'nikoletos.konstantinos@gmail.com', 'director', '01/21/2021', '09:00', '-----'),
('Konstantinos Nikoletos', 'nikoletos.konstantinos@gmail.com', 'director', '01/05/2021', '09:00', '-------------'),
('Konstantinos Nikoletos', 'nikoletos.konstantinos@gmail.com', 'director', '01/28/2021', '09:00', '--------------');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `afm` varchar(100) NOT NULL,
  `workingFor` varchar(100) DEFAULT NULL,
  `anastoli_id` int(100) DEFAULT NULL,
  `thlergasia_id` int(100) DEFAULT NULL,
  `adeia_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`afm`, `workingFor`, `anastoli_id`, `thlergasia_id`, `adeia_id`) VALUES
('1234567890', '1010101010', 8, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_action`
--

CREATE TABLE `employee_action` (
  `action_id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `starting_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_action`
--

INSERT INTO `employee_action` (`action_id`, `type`, `starting_date`, `end_date`) VALUES
(1, '', '', ''),
(2, 'anastoli', '', ''),
(3, 'anastoli', '', ''),
(4, 'apostasi', '1111111111', '1111111111'),
(5, 'apostasi', '1111111111', '1111111111'),
(6, 'apostasi', '1111111111', '1111111111'),
(8, 'anastoli', '2021-01-13', '2021-01-28'),
(9, 'apostasi', '2021-01-12', '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `username` varchar(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `afm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `genericuser`
--

CREATE TABLE `genericuser` (
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `afm` varchar(100) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genericuser`
--

INSERT INTO `genericuser` (`username`, `firstname`, `lastname`, `password`, `email`, `phone`, `afm`, `role`) VALUES
('KonstantinosErgodoths', 'Konstantinos', 'Nikoletos', '827ccb0eea8a706c4c34a16891f84e7b', 'konstantinos@gmail.com', '1234567890', '1010101010', 'ergodoths'),
('KonstantinosErgazomenos', 'Konstantinos', 'Nikoletos', '827ccb0eea8a706c4c34a16891f84e7b', 'nikoletos.konstantinos@gmail.com', '1234567890', '1234567890', 'ergazomenos');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `subject`, `message`) VALUES
('', '', '', ''),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sdfg'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ssss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ssss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ssss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sss'),
('ssssssssss', 'nikoletos.konstantinos@gmail.com', 'ssssssssssss', 'ss'),
('', '', '', ''),
('', '', '', ''),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sss'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sss'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'tttt'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'tttt'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'tttt'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'tttt'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'tttt'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'σσσσσ'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'σσσσσ'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'σσσσσ'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sssss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ssss'),
('mpempeki', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'sssss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ssss'),
('σσσσσ', 'nikoletos.konstantinos@gmail.com', 'σσσσ', 'σσσσσ'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'xxxx'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'asa'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'ssss'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', 'asssssssss'),
('', '', '', ''),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', '----------'),
('ΚΟΝΟΣ', 'nikoletos.konstantinos@gmail.com', 'THEMATARA', '----------');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`afm`),
  ADD UNIQUE KEY `anastoli_id` (`anastoli_id`,`thlergasia_id`,`adeia_id`),
  ADD KEY `employee_ibfk_2` (`adeia_id`),
  ADD KEY `employee_ibfk_4` (`thlergasia_id`);

--
-- Indexes for table `employee_action`
--
ALTER TABLE `employee_action`
  ADD UNIQUE KEY `id` (`action_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`afm`);

--
-- Indexes for table `genericuser`
--
ALTER TABLE `genericuser`
  ADD PRIMARY KEY (`afm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_action`
--
ALTER TABLE `employee_action`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`afm`) REFERENCES `genericuser` (`afm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`adeia_id`) REFERENCES `employee_action` (`action_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`anastoli_id`) REFERENCES `employee_action` (`action_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`thlergasia_id`) REFERENCES `employee_action` (`action_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
