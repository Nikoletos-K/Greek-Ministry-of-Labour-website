-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 14, 2021 at 05:18 PM
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
  `firstname_surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `appointmentfor` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `appointmenthour` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`firstname_surname`, `email`, `appointmentfor`, `date`, `appointmenthour`, `message`) VALUES
('Νίκος Παπαδόπουλος', 'nikos.papadopoulos@gmail.com', 'grammateia', '21-01-2021', '11:00', 'Αλλαγή ΑΦΜ εργζομένου'),
('Κώστας Παπαδόπουλος', 'kostas.papadopoulos@gmail.com', 'grammateia', '22-01-2021', '11:00', 'Αλλαγή ΑΦΜ μου');

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
('1010101010', '9876543210', NULL, 37, NULL),
('1234567890', '9876543210', 39, 34, NULL),
('2020202020', '9876543210', NULL, NULL, 40),
('3030303030', '9876543210', 36, NULL, NULL),
('5050505050', '9876543210', NULL, 38, NULL);

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
(34, 'thlergasia', '21-01-2021', '25-02-2021'),
(36, 'anastoli', '27-01-2021', '12-02-2021'),
(37, 'thlergasia', '26-01-2021', '27-03-2021'),
(38, 'thlergasia', '26-01-2021', '27-03-2021'),
(39, 'anastoli', '27-01-2021', '31-01-2021'),
(40, 'adeia', '27-01-2021', '31-01-2021');

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
('', '', '', '', '', '', '4040404040');

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
('ΧΡΗΣΤΗΣ2', 'Δημήτρης', 'Λαΐνης', '827ccb0eea8a706c4c34a16891f84e7b', 'jim.lainis@hotmail.gr', '6923451923', '1010101010', 'ergazomenos'),
('ΧΡΗΣΤΗΣ1', 'Νίκος', 'Παπαδόπουλος', '827ccb0eea8a706c4c34a16891f84e7b', 'nikos.papadopoulos@gmail.com', '6925163633', '1234567890', 'ergazomenos'),
('ΧΡΗΣΤΗΣ3', 'Παντελής', 'Σκλαβής', '827ccb0eea8a706c4c34a16891f84e7b', 'pantelis.sklavis@gmail.com', '6945267865', '2020202020', 'ergazomenos'),
('ΧΡΗΣΤΗΣ4', 'Απόστολος', 'Μπαρασόπουλος', '827ccb0eea8a706c4c34a16891f84e7b', 'apostolos.mpa@gmail.com', '2109836529', '3030303030', 'ergazomenos'),
('ΕΡΓΟΔΟΤΗΣ2', 'Ηλίας', 'Βελισσαράτος', '827ccb0eea8a706c4c34a16891f84e7b', 'ilias.vel@gmail.com', '2109876543', '4040404040', 'ergodoths'),
('ΧΡΗΣΤΗΣ5', 'Μάρθα', 'Καρρά', '827ccb0eea8a706c4c34a16891f84e7b', 'martha.kara@gmail.com', '6925781954', '5050505050', 'ergazomenos'),
('ΕΡΓΟΔΟΤΗΣ1', 'Άννα', 'Ράντου', '827ccb0eea8a706c4c34a16891f84e7b', 'anna.rantou@gmail.gr', '6927542695', '9876543210', 'ergodoths');

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
('Νίκος Παπαδόπουλος', 'nikos.papadopoulos@gmail.com', 'Αλλαγή ΑΦΜ', 'Ποια η διαδικασία για να αλλάξω το ΑΦΜ μου;');

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
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`afm`) REFERENCES `genericuser` (`afm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`adeia_id`) REFERENCES `employee_action` (`action_id`) ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`anastoli_id`) REFERENCES `employee_action` (`action_id`) ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`thlergasia_id`) REFERENCES `employee_action` (`action_id`) ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
