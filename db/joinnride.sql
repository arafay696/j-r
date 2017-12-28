-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 01:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinnride`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_ride`
--

CREATE TABLE `book_ride` (
  `Id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rideId` int(11) NOT NULL,
  `seat` int(11) NOT NULL,
  `bookingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(150) NOT NULL DEFAULT 'Pending' COMMENT 'Pending, Approve, Cancelled',
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `Id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `carId` int(11) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `travelDate` date NOT NULL,
  `travelHour` varchar(20) NOT NULL DEFAULT '00',
  `travelMinute` varchar(20) NOT NULL DEFAULT '00',
  `returnDate` date DEFAULT NULL,
  `returnHour` varchar(20) DEFAULT '00',
  `returnMinute` varchar(20) DEFAULT '00',
  `noOfSeats` int(11) NOT NULL,
  `noOfSeatsAvailable` int(11) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'Publish' COMMENT 'Publish, Completed, Inactive, In Travel',
  `comments` text NOT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `firstName` varchar(80) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isVerifiedEmail` smallint(1) DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `receiveLetter` smallint(1) DEFAULT '0',
  `phoneNo` varchar(255) DEFAULT NULL,
  `isVerifiedPhoneNo` smallint(1) DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `isVerifiedAvatar` smallint(1) NOT NULL DEFAULT '0',
  `status` varchar(45) NOT NULL COMMENT 'Active, Suspended, Pending',
  `dob` date DEFAULT NULL,
  `bio` text,
  `address` varchar(255) DEFAULT NULL,
  `postCode` varchar(155) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `userLevel` varchar(50) NOT NULL DEFAULT 'Newcomer' COMMENT 'Newcomer, Intermediate, Experienced, Expert, Ambassador'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `Id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_preference`
--

CREATE TABLE `user_preference` (
  `Id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `type` varchar(100) NOT NULL COMMENT 'Chattiness, Smoking, Pets, Music',
  `value` smallint(6) NOT NULL DEFAULT '0' COMMENT '-1 = No, 0  = OK, 1 = Like'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `Id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `star` int(11) NOT NULL DEFAULT '1' COMMENT '1,2,3,4,5',
  `reviews` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_vehicle`
--

CREATE TABLE `user_vehicle` (
  `Id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `numberPlate` varchar(255) NOT NULL,
  `makeOf` varchar(255) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `yearRegistered` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD KEY `user_fk_rides_userId_idx` (`userId`),
  ADD KEY `userv_fk_rides_carId_idx` (`carId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD KEY `user_fk_um_userId_idx` (`userId`),
  ADD KEY `user_fk_um_senderId_idx` (`senderId`);

--
-- Indexes for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_fk_up_userId_idx` (`userId`);

--
-- Indexes for table `user_vehicle`
--
ALTER TABLE `user_vehicle`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_fk_uv_userId_idx` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_preference`
--
ALTER TABLE `user_preference`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_vehicle`
--
ALTER TABLE `user_vehicle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rides`
--
ALTER TABLE `rides`
  ADD CONSTRAINT `user_fk_rides_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `userv_fk_rides_carId` FOREIGN KEY (`carId`) REFERENCES `user_vehicle` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD CONSTRAINT `user_fk_um_senderId` FOREIGN KEY (`senderId`) REFERENCES `user` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_fk_um_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD CONSTRAINT `user_fk_up_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_vehicle`
--
ALTER TABLE `user_vehicle`
  ADD CONSTRAINT `user_fk_uv_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
