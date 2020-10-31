-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 09:53 AM
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
  `results` varchar(30) NOT NULL,
  `resultDate` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `patientName` varchar(30) NOT NULL,
  `officerName` varchar(30) NOT NULL,
  `patientType` varchar(30) NOT NULL,
  `symptoms` varchar(1000) NOT NULL,
  `testCentre` varchar(30) NOT NULL,
  `patientID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidtest`
--

INSERT INTO `covidtest` (`id`, `testdate`, `results`, `resultDate`, `status`, `patientName`, `officerName`, `patientType`, `symptoms`, `testCentre`, `patientID`) VALUES
(1, '2020-10-21', '', '0000-00-00', 'pending', 'sam', 'mike', 'Suspected', 'headache', 'malawi', 'acd'),
(2, '2020-10-30', '', '0000-00-00', 'pending', 'fred', 'mike', 'Close Contact', 'fsdf haha', 'kl centre', ''),
(3, '2020-10-31', '', '0000-00-00', 'pending', 'andrew', 'peter', 'Infected', 'rrrrrrrrrrrrrrrrrr', 'malawi', 'fdsghdt533');

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
(1, 'Kl centre', 'John Smith', 'mike'),
(3, 'malawi', 'John Smith', 'peter');

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
(3, 'll', 9, 'John Smith', 'Kl centre', '2020-10-26', '2020-10-26'),
(4, 'ersfd', 100, 'John Smith', 'malawi', '2020-10-26', '0000-00-00'),
(5, 'll', 2, 'John Smith', 'malawi', '2020-10-26', '0000-00-00'),
(6, 'nose', 4, 'John Smith', 'malawi', '2020-10-26', '0000-00-00'),
(7, 'nose', 4, 'John Smith', 'malawi', '2020-10-26', '0000-00-00'),
(8, 'fdsf', 571, 'John Smith', 'malawi', '2020-10-26', '2020-10-26');

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
(1, 'manager', 'manager', 'manager', 'John Smith', 'manager', '', ''),
(2, 'officer', 'officer', 'officer', 'mike', 'officer', '', ''),
(3, 'peter1', '123', 'officer', 'peter', 'Tester', '', ''),
(4, 'sam1', '123', 'patient', 'sam', '', '123abc', ''),
(5, 'fff', 'fff', 'officer', 'kate', 'Tester', 'mawe134', ''),
(6, 'fred123', '123', 'patient', 'fred', '', 'vsdfsdg', ''),
(7, 'and1', '123', 'patient', 'andrew', '', 'fdsghdt533', 'sfdsfsd@gn.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testcentre`
--
ALTER TABLE `testcentre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testkit`
--
ALTER TABLE `testkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
