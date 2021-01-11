-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 09, 2021 at 10:24 AM
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
('Konstantinos', 'Konstantinos', 'Nikoletos', '', 'nikoletos.konstantinos@gmail.com', '', '1234566', 'ergazomenos'),
('KonstantinosN', 'Konstantinos', 'Nikoletos', '', 'nikoletos.konstant@gmail.com', '', '1234566', 'ergodoths'),
('KonstantinosNik', 'Konstantinos', 'Nikoletos', 'b59c67bf196a4758191e42f76670ceba', 'nikoletos.konstntinos@gmail.com', '234552222222', '1234566', 'ergodoths'),
('KonstantinosNNNNNNNNN', 'Konstantinos', 'Nikoletos', 'b59c67bf196a4758191e42f76670ceba', 'nikolos.konstantinos@gmail.com', '234552222222', '1234566', 'ergodoths'),
('Myrto', 'Myrto', 'Igglezou', '827ccb0eea8a706c4c34a16891f84e7b', 'myrto.iglezou@gmail.com', '234552222222', '1234566', 'ergodoths'),
('konstantinos', 'Konstantinos', 'Nikoletos', '827ccb0eea8a706c4c34a16891f84e7b', 'konstantinos@gmail.com', '234552222222', '1234566', 'ergazomenos');

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
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `simpleuser`
--

CREATE TABLE `simpleuser` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `afm` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simpleuser`
--

INSERT INTO `simpleuser` (`username`, `password`, `email`, `phone`, `afm`, `role`) VALUES
('Ko', '25f9e794323b453885f5181f1b624d0b', 'niko@letos', '', '1234566', 'Κατάσταση'),
('Ko', '25f9e794323b453885f5181f1b624d0b', 'niko@letos', '', '1234566', 'Εργαζόμενος'),
('Ko', '25f9e794323b453885f5181f1b624d0b', 'niko@letos', '', '1234566', 'Εργαζόμενος');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
