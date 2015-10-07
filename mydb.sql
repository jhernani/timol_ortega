-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2015 at 12:24 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anouncement`
--

CREATE TABLE IF NOT EXISTS `anouncement` (
  `anouncement_id` int(11) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(11) NOT NULL,
  `content` varchar(45) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `tenants_users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(11) NOT NULL,
  `building_number` varchar(45) DEFAULT NULL,
  `room_type` varchar(45) DEFAULT NULL,
  `maximum_occupants` int(11) DEFAULT NULL,
  `current_number_of_occupants` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `gender_preference` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5134 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `building_number`, `room_type`, `maximum_occupants`, `current_number_of_occupants`, `status`, `type`, `gender_preference`) VALUES
(2114, 'Building 2', 'Non-Aircon', 6, 2, '1', NULL, 'Female'),
(2118, 'Building 2', 'Aircon', 2, 1, '1', NULL, 'Male'),
(3120, 'Building 3', 'Aircon', 2, 0, '1', NULL, 'Male'),
(5133, 'Building 5', 'Aircon', 4, 0, '0', NULL, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_has_tenants`
--

CREATE TABLE IF NOT EXISTS `rooms_has_tenants` (
  `rooms_room_id` int(11) NOT NULL,
  `tenants_users_user_id` int(11) NOT NULL,
  `status` char(1) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `type` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms_has_tenants`
--

INSERT INTO `rooms_has_tenants` (`rooms_room_id`, `tenants_users_user_id`, `status`, `date_added`, `date_end`, `type`) VALUES
(2114, 101010, '1', NULL, NULL, '1'),
(2118, 313131, '1', NULL, NULL, '1'),
(2118, 909090, '1', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE IF NOT EXISTS `tenants` (
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL DEFAULT '0',
  `date_in` datetime DEFAULT NULL,
  `date_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`fname`, `mname`, `lname`, `email`, `bday`, `type`, `users_user_id`, `date_in`, `date_out`) VALUES
('krisante', 'acosta', 'timol', 'timol@gmail.com', '1993-01-01', NULL, 101010, NULL, NULL),
('personel2', 'personel2', 'personel2', 'personel2@gmail.com', '1993-02-02', NULL, 313131, NULL, NULL),
('krisantetest', 'Acostatest', 'timoltest', 'test@gmail.com', '1992-10-01', NULL, 909090, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tenants_proffesor`
--

CREATE TABLE IF NOT EXISTS `tenants_proffesor` (
  `tenants_users_user_id` int(11) NOT NULL,
  `school` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tenants_student`
--

CREATE TABLE IF NOT EXISTS `tenants_student` (
  `tenants_users_user_id` int(11) NOT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tenants_trancients`
--

CREATE TABLE IF NOT EXISTS `tenants_trancients` (
  `tenants_users_user_id` int(11) NOT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=909092 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'krisante22', 'b9786ab34d731a3abdfa0cafc3559680', '0', '1'),
(101010, NULL, NULL, '1', NULL),
(313131, NULL, NULL, '1', NULL),
(909090, NULL, NULL, '2', NULL),
(909091, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anouncement`
--
ALTER TABLE `anouncement`
  ADD PRIMARY KEY (`anouncement_id`,`users_user_id`), ADD KEY `fk_anouncement_users1_idx` (`users_user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`,`tenants_users_user_id`), ADD KEY `fk_reports_tenants1_idx` (`tenants_users_user_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `rooms_has_tenants`
--
ALTER TABLE `rooms_has_tenants`
  ADD PRIMARY KEY (`rooms_room_id`,`tenants_users_user_id`), ADD KEY `fk_rooms_has_tenants_tenants1_idx` (`tenants_users_user_id`), ADD KEY `fk_rooms_has_tenants_rooms1_idx` (`rooms_room_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`users_user_id`), ADD KEY `fk_tenants_users_idx` (`users_user_id`);

--
-- Indexes for table `tenants_proffesor`
--
ALTER TABLE `tenants_proffesor`
  ADD PRIMARY KEY (`tenants_users_user_id`);

--
-- Indexes for table `tenants_student`
--
ALTER TABLE `tenants_student`
  ADD PRIMARY KEY (`tenants_users_user_id`);

--
-- Indexes for table `tenants_trancients`
--
ALTER TABLE `tenants_trancients`
  ADD PRIMARY KEY (`tenants_users_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anouncement`
--
ALTER TABLE `anouncement`
  MODIFY `anouncement_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5134;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=909092;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anouncement`
--
ALTER TABLE `anouncement`
ADD CONSTRAINT `fk_anouncement_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
ADD CONSTRAINT `fk_reports_tenants1` FOREIGN KEY (`tenants_users_user_id`) REFERENCES `tenants` (`users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rooms_has_tenants`
--
ALTER TABLE `rooms_has_tenants`
ADD CONSTRAINT `fk_rooms_has_tenants_rooms1` FOREIGN KEY (`rooms_room_id`) REFERENCES `rooms` (`room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_rooms_has_tenants_tenants1` FOREIGN KEY (`tenants_users_user_id`) REFERENCES `tenants` (`users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tenants`
--
ALTER TABLE `tenants`
ADD CONSTRAINT `fk_tenants_users` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tenants_proffesor`
--
ALTER TABLE `tenants_proffesor`
ADD CONSTRAINT `fk_tenants_proffesor_tenants1` FOREIGN KEY (`tenants_users_user_id`) REFERENCES `tenants` (`users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tenants_student`
--
ALTER TABLE `tenants_student`
ADD CONSTRAINT `fk_tenants_student_tenants1` FOREIGN KEY (`tenants_users_user_id`) REFERENCES `tenants` (`users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tenants_trancients`
--
ALTER TABLE `tenants_trancients`
ADD CONSTRAINT `fk_tenants_trancients_tenants1` FOREIGN KEY (`tenants_users_user_id`) REFERENCES `tenants` (`users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
