-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 02:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiusers_admin`
--

CREATE TABLE `multiusers_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiusers_admin`
--

INSERT INTO `multiusers_admin` (`admin_id`, `admin_email`, `admin_username`, `admin_password`) VALUES
(1, 'admin@admin.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `multiusers_general_manager`
--

CREATE TABLE `multiusers_general_manager` (
  `manager_id` int(11) NOT NULL,
  `manager_email` varchar(100) DEFAULT NULL,
  `manager_username` varchar(50) DEFAULT NULL,
  `manager_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiusers_general_manager`
--

INSERT INTO `multiusers_general_manager` (`manager_id`, `manager_email`, `manager_username`, `manager_password`) VALUES
(1, 'manager@gmail.com', 'manager', 'manager'),
(2, 'test@gmail.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `multiusers_supervisor`
--

CREATE TABLE `multiusers_supervisor` (
  `supervisor_id` int(11) NOT NULL,
  `supervisor_email` varchar(100) DEFAULT NULL,
  `supervisor_username` varchar(50) DEFAULT NULL,
  `supervisor_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiusers_supervisor`
--

INSERT INTO `multiusers_supervisor` (`supervisor_id`, `supervisor_email`, `supervisor_username`, `supervisor_password`) VALUES
(1, 'supervisor@gmail.com', 'survisor', 'supervisor'),
(2, 'test@gmila.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `multiusers_team_leaders`
--

CREATE TABLE `multiusers_team_leaders` (
  `teamleaders_id` int(11) NOT NULL,
  `teamleaders_email` varchar(100) DEFAULT NULL,
  `teamleaders_username` varchar(50) DEFAULT NULL,
  `teamleaders_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiusers_team_leaders`
--

INSERT INTO `multiusers_team_leaders` (`teamleaders_id`, `teamleaders_email`, `teamleaders_username`, `teamleaders_password`) VALUES
(1, 'teamleaders@gmail.com', 'teamleader', 'teamleader'),
(2, 'test@gmial.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `multiusers_team_members`
--

CREATE TABLE `multiusers_team_members` (
  `team_members_id` int(11) NOT NULL,
  `team_members_email` varchar(50) DEFAULT NULL,
  `team_members_username` varchar(255) DEFAULT NULL,
  `team_members_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiusers_team_members`
--

INSERT INTO `multiusers_team_members` (`team_members_id`, `team_members_email`, `team_members_username`, `team_members_password`) VALUES
(1, 'teammembers@gmail.com', 'teammembers', 'teammembers'),
(2, 'tets@gmail.com', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiusers_admin`
--
ALTER TABLE `multiusers_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `multiusers_general_manager`
--
ALTER TABLE `multiusers_general_manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `multiusers_supervisor`
--
ALTER TABLE `multiusers_supervisor`
  ADD PRIMARY KEY (`supervisor_id`);

--
-- Indexes for table `multiusers_team_leaders`
--
ALTER TABLE `multiusers_team_leaders`
  ADD PRIMARY KEY (`teamleaders_id`);

--
-- Indexes for table `multiusers_team_members`
--
ALTER TABLE `multiusers_team_members`
  ADD PRIMARY KEY (`team_members_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiusers_admin`
--
ALTER TABLE `multiusers_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `multiusers_general_manager`
--
ALTER TABLE `multiusers_general_manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `multiusers_supervisor`
--
ALTER TABLE `multiusers_supervisor`
  MODIFY `supervisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `multiusers_team_leaders`
--
ALTER TABLE `multiusers_team_leaders`
  MODIFY `teamleaders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `multiusers_team_members`
--
ALTER TABLE `multiusers_team_members`
  MODIFY `team_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
