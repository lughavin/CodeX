-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 12:07 PM
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
  `patientID` varchar(50) NOT NULL,
  `patientEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidtest`
--

INSERT INTO `covidtest` (`id`, `testdate`, `results`, `resultDate`, `status`, `patientName`, `officerName`, `patientType`, `symptoms`, `testCentre`, `patientID`, `patientEmail`) VALUES
(1, '2020-11-09', '', '2020-11-09', 'Completed', 'Peter Chong', 'Sandra Kane', 'Infected', 'high fever', 'Langkawi Centre', 'pt123456rt', 'ghambi.lughano@gmail.com'),
(2, '2020-11-09', '', '0000-00-00', 'pending', 'Emmanuel', 'Sandra Kane', 'Suspected', 'running nose', 'Langkawi Centre', 'mw12345678', 'lughanoghambi12@gmail.com'),
(3, '2020-11-09', '', '0000-00-00', 'pending', 'Peter Chong', 'Sandra Kane', 'Quarantined', 'red eyes', 'Langkawi Centre', 'pt123456rt', 'ghambi.lughano@gmail.com'),
(4, '2020-11-09', '', '0000-00-00', 'pending', 'Chris Henz', 'Mike Foss', 'Close Contact', 'loss of smell', 'Kl Centre', 'kl123456789', 'lughanoghambi13@gmail.com'),
(5, '2020-11-09', '', '0000-00-00', 'pending', 'Jane Cross', 'Mike Foss', 'Suspected', 'headaches ', 'Kl Centre', 'klj123456789', 'ghambi.lughano@gmail.com');

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
(1, 'Kl Centre', 'John Smith', 'Mike Foss'),
(2, 'Langkawi Centre', 'John Smith', 'Sandra Kane');

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
(1, 'Nose', 23, 'John Smith', 'Kl Centre', '2020-11-09', '0000-00-00'),
(2, 'mouth ', 43, 'John Smith', 'Langkawi Centre', '2020-11-09', '0000-00-00');

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
(1, 'manager', 'manager', 'manager', 'John Smith', 'manager', 'MA234298', ''),
(2, 'officer', 'officer', 'officer', 'Andrew Tan', 'officer', 'WR123456', ''),
(3, 'mike', 'mike123456', 'officer', 'Mike Foss', 'Tester', '123456qwe', ''),
(4, 'sandra', 'sandra123456', 'officer', 'Sandra Kane', 'Tester', '123456poiu', ''),
(5, 'peter', 'peter123456', 'patient', 'Peter Chong', '', 'pt123456rt', 'ghambi.lughano@gmail.com'),
(6, 'emma', 'emma123456', 'patient', 'Emmanuel', '', 'mw12345678', 'lughanoghambi12@gmail.com'),
(7, 'chris', 'chris123456', 'patient', 'Chris Henz', '', 'kl123456789', 'lughanoghambi13@gmail.com'),
(8, 'jane', 'jane123456', 'patient', 'Jane Cross', '', 'klj123456789', 'ghambi.lughano@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testcentre`
--
ALTER TABLE `testcentre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testkit`
--
ALTER TABLE `testkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
