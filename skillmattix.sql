-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 03:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillmattix1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` varchar(15) NOT NULL,
  `EmployeeName` varchar(50) NOT NULL,
  `Text1` varchar(600) NOT NULL,
  `Text2` varchar(600) NOT NULL,
  `PositionID` int(11) NOT NULL,
  `GroupNum` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `EmployeeName`, `Text1`, `Text2`, `PositionID`, `GroupNum`) VALUES
('123', 'Malek eslam', 'It is Clever', 'hello', 5, '7');

-- --------------------------------------------------------

--
-- Table structure for table `emp_group`
--

CREATE TABLE `emp_group` (
  `GroupNum` varchar(15) NOT NULL,
  `GroupID` varchar(15) NOT NULL,
  `GroupName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_group`
--

INSERT INTO `emp_group` (`GroupNum`, `GroupID`, `GroupName`) VALUES
('7', '3', 'Hospitality');

-- --------------------------------------------------------

--
-- Table structure for table `hasaskill`
--

CREATE TABLE `hasaskill` (
  `Emp_ID` varchar(15) NOT NULL,
  `SkillID` int(11) NOT NULL,
  `Rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasaskill`
--

INSERT INTO `hasaskill` (`Emp_ID`, `SkillID`, `Rating`) VALUES
('123', 2, '9');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `PositionID` int(11) NOT NULL,
  `PositionName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`PositionID`, `PositionName`) VALUES
(5, 'Directory Manager');

-- --------------------------------------------------------

--
-- Table structure for table `skillgroup`
--

CREATE TABLE `skillgroup` (
  `SkillGroupNum` int(11) NOT NULL,
  `SkillGroupID` int(11) NOT NULL,
  `SkillGroupName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skillgroup`
--

INSERT INTO `skillgroup` (`SkillGroupNum`, `SkillGroupID`, `SkillGroupName`) VALUES
(10, 9, 'languages');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `SkillID` int(11) NOT NULL,
  `SkillName` varchar(50) NOT NULL,
  `SkillGroupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`SkillID`, `SkillName`, `SkillGroupID`) VALUES
(2, 'English', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('actuser', 'act@12345'),
('malek eslam', 'malek@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `PositionID` (`PositionID`),
  ADD KEY `GroupNum` (`GroupNum`);

--
-- Indexes for table `emp_group`
--
ALTER TABLE `emp_group`
  ADD PRIMARY KEY (`GroupNum`);

--
-- Indexes for table `hasaskill`
--
ALTER TABLE `hasaskill`
  ADD PRIMARY KEY (`Emp_ID`,`SkillID`),
  ADD KEY `SkillID` (`SkillID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`PositionID`);

--
-- Indexes for table `skillgroup`
--
ALTER TABLE `skillgroup`
  ADD PRIMARY KEY (`SkillGroupNum`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`SkillID`),
  ADD KEY `SkillGroupID` (`SkillGroupID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`password`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`PositionID`) REFERENCES `position` (`PositionID`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`GroupNum`) REFERENCES `emp_group` (`GroupNum`);

--
-- Constraints for table `hasaskill`
--
ALTER TABLE `hasaskill`
  ADD CONSTRAINT `hasaskill_ibfk_1` FOREIGN KEY (`Emp_ID`) REFERENCES `employees` (`EmployeeID`),
  ADD CONSTRAINT `hasaskill_ibfk_2` FOREIGN KEY (`SkillID`) REFERENCES `skills` (`SkillID`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`SkillGroupID`) REFERENCES `skillgroup` (`SkillGroupNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
