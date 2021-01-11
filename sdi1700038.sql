-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 11, 2021 at 11:10 AM
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
  `anastoli_id` varchar(100) DEFAULT NULL,
  `thlergasia_id` varchar(100) DEFAULT NULL,
  `adeia_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_action`
--

CREATE TABLE `employee_action` (
  `action_id` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `starting_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `number_of_children` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`username`, `firstname`, `lastname`, `password`, `email`, `phone`, `afm`) VALUES
('', '', '', '', '', '', '1234566');

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
('konos', 'Konstantinos', 'Nikoletos', '827ccb0eea8a706c4c34a16891f84e7b', 'nikoletos.konstantinos@gmail.com', '234552222222', '1234566', 'ergodoths');

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
  ADD PRIMARY KEY (`afm`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`afm`) REFERENCES `genericuser` (`afm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
