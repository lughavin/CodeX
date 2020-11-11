-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 05:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit216`
--

-- --------------------------------------------------------

--
-- Table structure for table `covidtest`
--

CREATE TABLE `covidtest` (
  `id` int(11) NOT NULL,
  `testdate` date NOT NULL DEFAULT current_timestamp(),
  `results` varchar(30) NOT NULL DEFAULT 'pending',
  `resultDate` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `patientName` varchar(30) NOT NULL,
  `officerName` varchar(30) NOT NULL,
  `patientType` varchar(30) NOT NULL,
  `symptoms` varchar(1000) NOT NULL,
  `testCentre` varchar(30) NOT NULL,
  `patientID` varchar(50) NOT NULL,
  `patientEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidtest`
--

INSERT INTO `covidtest` (`id`, `testdate`, `results`, `resultDate`, `status`, `patientName`, `officerName`, `patientType`, `symptoms`, `testCentre`, `patientID`, `patientEmail`) VALUES
(1, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient1', 'Jedd Chang', 'Quarantined', 'running nose', 'China', '9812124578', 'ghambi.lughano@gmail.com'),
(2, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient2', 'Jedd Chang', 'Close Contact', 'headaches ', 'China', '125422006666', 'lughanoghambi12@gmail.com'),
(3, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient3', 'Mike Smith', 'Infected', 'Flu', 'America', '45852236666', 'ghambi.lughano@gmail.com'),
(4, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient4', 'Mike Smith', 'Close Contact', 'fever', 'America', '268856451691', 'ghambi.lughano@gmail.com'),
(5, '2020-11-12', 'negative', '2020-11-11', 'Completed', 'Patient5', 'Sarah Johnson', 'Infected', 'flu and headaches', 'South Africa', '895446665525', 'ghambi.lughano@gmail.com'),
(6, '2020-11-12', 'positive', '2020-11-11', 'Completed', 'Patient5', 'Sarah Johnson', 'Suspected', 'red eyes', 'South Africa', '898602949425', 'ghambi.lughano@gmail.com'),
(7, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient7', 'Mako Sanders', 'Infected', 'fever', 'Japan', '972925463333', 'ghambi.lughano@gmail.com'),
(8, '2020-11-12', 'negative', '2020-11-11', 'Completed', 'Patient8', 'Mako Sanders', 'Quarantined', 'running nose', 'Japan', '875666333665', 'ghambi.lughano@gmail.com'),
(9, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient8', 'Mako Sanders', 'Close Contact', 'flu', 'Japan', '875666333665', 'ghambi.lughano@gmail.com'),
(10, '2020-11-12', 'pending', '0000-00-00', 'pending', 'Patient5', 'Sarah Johnson', 'Infected', 'fever', 'South Africa', '895446665525', 'ghambi.lughano@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testcentre`
--

CREATE TABLE `testcentre` (
  `id` int(11) NOT NULL,
  `centreName` varchar(30) NOT NULL,
  `centreOfficer` varchar(50) NOT NULL,
  `tester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testcentre`
--

INSERT INTO `testcentre` (`id`, `centreName`, `centreOfficer`, `tester`) VALUES
(1, 'China', 'John Smith', 'Jedd Chang'),
(2, 'America', 'John Smith', 'Mike Smith'),
(3, 'Japan', 'John Smith', 'Mako Sanders'),
(4, 'South Africa', 'John Smith', 'Sarah Johnson');

-- --------------------------------------------------------

--
-- Table structure for table `testkit`
--

CREATE TABLE `testkit` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `officerName` varchar(30) NOT NULL,
  `testCentre` varchar(30) NOT NULL,
  `addOn` date NOT NULL DEFAULT current_timestamp(),
  `updatedOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testkit`
--

INSERT INTO `testkit` (`id`, `name`, `stock`, `officerName`, `testCentre`, `addOn`, `updatedOn`) VALUES
(1, 'Swab kit', 105, 'John Smith', 'China', '2020-10-07', '2020-11-10'),
(2, 'Swab Kit v2', 47, 'John Smith', 'America', '2020-10-08', '2020-10-21'),
(3, 'swab kit ', 55, 'John Smith', 'Japan', '2020-10-31', '2020-11-11'),
(4, 'swab kit', 393, 'John Smith', 'South Africa', '2020-10-01', '2020-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userType` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `passport` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `userType`, `name`, `position`, `passport`, `email`) VALUES
(1, 'manager', 'manager', 'manager', 'John Smith', 'manager', '950320154786', ''),
(2, 'officer', 'officer', 'officer', 'Andrew Tan', 'officer', '960320154781', ''),
(3, 'jedd123', '12345678', 'officer', 'Jedd Chang', 'Tester', '910723456321', ''),
(4, 'mike123', '12345678', 'officer', 'Mike Smith', 'Tester', '890723656321', ''),
(5, 'sarah123', '12345678', 'officer', 'Sarah Johnson', 'Tester', '840723654421', ''),
(6, 'mako123', '12345678', 'officer', 'Mako Sanders', 'Tester', '990723654563', ''),
(7, 'patient1', '12345678', 'patient', 'Patient1', '', '9812124578', 'ghambi.lughano@gmail.com'),
(8, 'patient2', '12345678', 'patient', 'Patient2', '', '125422006666', 'lughanoghambi12@gmail.com'),
(9, 'patient3', '12345678', 'patient', 'Patient3', '', '45852236666', 'ghambi.lughano@gmail.com'),
(10, 'patient4', '12345678', 'patient', 'Patient4', '', '268856451691', 'ghambi.lughano@gmail.com'),
(11, 'patient5', '12345678', 'patient', 'Patient5', '', '895446665525', 'ghambi.lughano@gmail.com'),
(12, 'patient6', '12345678', 'patient', 'Patient5', '', '898602949425', 'ghambi.lughano@gmail.com'),
(13, 'patient7', '12345678', 'patient', 'Patient7', '', '972925463333', 'ghambi.lughano@gmail.com'),
(14, 'patient8', '12345678', 'patient', 'Patient8', '', '875666333665', 'ghambi.lughano@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covidtest`
--
ALTER TABLE `covidtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testcentre`
--
ALTER TABLE `testcentre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testkit`
--
ALTER TABLE `testkit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covidtest`
--
ALTER TABLE `covidtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testcentre`
--
ALTER TABLE `testcentre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testkit`
--
ALTER TABLE `testkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
