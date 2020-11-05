-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 03:02 PM
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
(9, '2020-11-02', '', '0000-00-00', 'pending', 'andrew', 'peter', 'Infected', 'red eye', 'malawi', '1234567', 'ghambi.lughano@gmail.com'),
(10, '2020-11-02', '', '0000-00-00', 'Completed', 'lughano ghambi', 'peter', 'Infected', 'dasd', 'malawi', 'mnab3', 'ghambi.lughano@gmail.com'),
(11, '2020-11-04', '', '0000-00-00', 'pending', 'andrew', 'peter', 'Infected', 'gggg', 'malawi', '12345', 'ghambi.lughano@gmail.com'),
(31, '2020-11-05', '', '0000-00-00', 'pending', 'lughano ghambi', 'peter', 'Infected', 'this is a try work', 'malawi', 'mnab3', 'ghambi.lughano@gmail.com'),
(32, '2020-11-05', '', '0000-00-00', 'pending', 'jojo', 'peter', 'Infected', 'rrrrrrrrrrrrrrrrrr', 'malawi', 'fdsf4', 'ghambi.lughano@gmail.com');

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
(3, 'malawi', 'John Smith', 'peter'),
(4, 'nilai', 'John Smith', 'kate');

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
(8, 'fdsf', 568, 'John Smith', 'malawi', '2020-10-26', '2020-10-26'),
(10, 'tt', 66, 'John Smith', 'iuu', '2020-11-04', '2020-11-04'),
(11, 'dvdsfsd', 45, 'John Smith', 'wef', '2020-11-04', '0000-00-00');

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
(3, 'peter1', '123', 'officer', 'peter', 'Tester', 'ghgh', ''),
(4, 'sam1', '123', 'patient', 'sam', '', '123abc', ''),
(5, 'fff', 'fff', 'officer', 'kate', 'Tester', 'mawe134', ''),
(6, 'fred123', '123', 'patient', 'fred', '', 'vsdfsdg', ''),
(7, 'and1', '123', 'patient', 'andrew', '', 'fdsghdt533', 'sfdsfsd@gn.com'),
(8, 'kate123', '123', 'patient', 'kate', '', 'manfda45', 'ghambi.lughano@gmail.com'),
(9, 'kate123', '123', 'patient', 'kate', '', 'manfda45', 'ghambi.lughano@gmail.com'),
(10, 'kate123', '123', 'patient', 'kate', '', 'xxxx', 'ghambi.lughano@gmail.com'),
(11, 'petersfwee', 'abc', 'patient', 'dfsf', '', 'fdsfd', 'ghambi.lughano@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `testcentre`
--
ALTER TABLE `testcentre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testkit`
--
ALTER TABLE `testkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
