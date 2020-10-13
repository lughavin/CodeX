-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 05:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `symptoms` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidtest`
--

INSERT INTO `covidtest` (`id`, `testdate`, `results`, `resultDate`, `status`, `patientName`, `officerName`, `patientType`, `symptoms`) VALUES
(1, '2020-10-13', '', '0000-00-00', 'pending', 'qqqqq', '', 'Suspected', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(2, '2020-10-13', '', '0000-00-00', 'pending', 'rrr', '', 'Close Contact', 'rrrrrrrrrrrrrrrrrr'),
(3, '2020-10-13', '', '0000-00-00', 'pending', 'rrr', '', 'Close Contact', 'rrrrrrrrrrrrrrrrrr'),
(4, '2020-10-13', '', '0000-00-00', 'pending', 'rrrr', '', 'Returnee', 'kjnj');

-- --------------------------------------------------------

--
-- Table structure for table `testcentre`
--

CREATE TABLE `testcentre` (
  `id` int(11) NOT NULL,
  `centreName` varchar(30) NOT NULL,
  `centreOfficer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testcentre`
--

INSERT INTO `testcentre` (`id`, `centreName`, `centreOfficer`) VALUES
(1, 'malawi', 'lughavin'),
(2, 'klk', 'lughano ghambi');

-- --------------------------------------------------------

--
-- Table structure for table `testkit`
--

CREATE TABLE `testkit` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testkit`
--

INSERT INTO `testkit` (`id`, `name`, `stock`) VALUES
(2, 'kl kit', 458),
(3, ' jjjjj', 777),
(4, 'fdsf', 4),
(5, 'ersfd', 3),
(6, 'll', 987456321);

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
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `userType`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'admin', '', ''),
(2, 'mike', 'mike', 'officer', 'mike lobber', ''),
(4, 'jane', 'jane', 'patient', 'calvin lee', ''),
(5, 'lughavin', '12345', 'officer', 'lughano ghambi', 'Tester'),
(6, 'sfds', 'dfwe', 'officer', 'hgd gfd dg', 'Tester'),
(7, 'ghjnhg', 'gfhg', 'officer', 'hrhf', 'Tester'),
(8, 'happy', '123', 'officer', 'happy mike', 'Tester'),
(9, 'tan123', '', '', 'tan', ''),
(10, 'gggg', 'ggg', 'patient', 'ggg', ''),
(12, 'qqqqq', 'qqqq', 'patient', 'qqqqq', ''),
(13, 'sam123', '123', 'patient', 'sam', ''),
(14, 'sam123', '123', 'patient', 'sam', ''),
(15, 'rrrr', 'rrr', 'patient', 'rrr', ''),
(16, 'rrrr', 'kjhiub', 'patient', 'rrr', ''),
(17, 'mike', '123', 'patient', 'rrrr', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testcentre`
--
ALTER TABLE `testcentre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testkit`
--
ALTER TABLE `testkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
