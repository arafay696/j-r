-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 11:41 AM
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
-- Table structure for table `auth_key`
--

CREATE TABLE `auth_key` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(2) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(2) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_key`
--

INSERT INTO `auth_key` (`id`, `user_id`, `api_key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'AbdulRafay06JAN1992', 1, 0, 0, NULL, 123123123);

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
  `dropOffLat` varchar(255) NOT NULL,
  `dropOffLng` varchar(255) NOT NULL,
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

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`Id`, `userId`, `carId`, `lat`, `lng`, `dropOffLat`, `dropOffLng`, `travelDate`, `travelHour`, `travelMinute`, `returnDate`, `returnHour`, `returnMinute`, `noOfSeats`, `noOfSeatsAvailable`, `status`, `comments`, `price`) VALUES
(1, 5, 1, '31.513981', '74.285420', '29.394428', '71.664938', '2018-01-01', '12', '00', '2018-01-05', '12', '30', 3, 3, 'Publish', 'Hi, i\'m newbie in J&D. Thanks for trust', '300'),
(2, 5, 1, '31.513981', '74.285420', '29.394428', '71.664938', '2018-01-01', '12', '00', '2018-01-05', '12', '30', 3, 3, 'Publish', 'Hi, i\'m newbie in J&D. Thanks for trust', '300'),
(3, 8, 2, '31.513981', '74.285420', '29.394428', '71.664938', '2018-01-01', '12', '00', '2018-01-05', '12', '30', 3, 3, 'Publish', 'Hi, i\'m newbie in J&D. Thanks for trust', '300');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `firstName` varchar(80) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isVerifiedEmail` smallint(1) DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `notification` smallint(1) DEFAULT '0',
  `phoneNo` varchar(255) DEFAULT NULL,
  `isVerifiedPhoneNo` smallint(1) DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `isVerifiedAvatar` smallint(1) NOT NULL DEFAULT '0',
  `status` varchar(45) NOT NULL DEFAULT 'Active' COMMENT 'Active, Suspended, Pending',
  `dob` date DEFAULT NULL,
  `bio` text,
  `address` varchar(255) DEFAULT NULL,
  `postCode` varchar(155) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `userLevel` varchar(50) NOT NULL DEFAULT 'Newcomer' COMMENT 'Newcomer, Intermediate, Experienced, Expert, Ambassador',
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `joinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `isVerifiedEmail`, `password`, `gender`, `notification`, `phoneNo`, `isVerifiedPhoneNo`, `avatar`, `isVerifiedAvatar`, `status`, `dob`, `bio`, `address`, `postCode`, `city`, `country`, `userLevel`, `lastLogin`, `joinDate`) VALUES
(5, 'Abdul', 'Rafay', 'abdul.rafaygmail.com', 0, '25d55ad283aa400af464c76d713c07ad', 'male', 0, NULL, 0, NULL, 0, 'Active', '1992-01-06', NULL, NULL, NULL, NULL, NULL, 'Newcomer', '2018-01-01 09:40:28', '2018-01-01 09:40:28'),
(8, 'Abdul', 'Rafay', 'abdulrafaygmail.com', 0, '25d55ad283aa400af464c76d713c07ad', 'male', 0, NULL, 0, NULL, 0, 'Active', '1992-01-06', NULL, NULL, NULL, NULL, NULL, 'Newcomer', '2018-01-01 10:47:59', '2018-01-01 10:47:59');

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

--
-- Dumping data for table `user_preference`
--

INSERT INTO `user_preference` (`Id`, `userId`, `type`, `value`) VALUES
(25, 5, 'Chattiness', 0),
(26, 5, 'Smoking', 0),
(27, 5, 'Pets', 0),
(28, 5, 'Music', 0),
(37, 8, 'Chattiness', 0),
(38, 8, 'Smoking', 0),
(39, 8, 'Pets', 0),
(40, 8, 'Music', 0);

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

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`Id`, `userId`, `star`, `reviews`) VALUES
(1, 5, 3, 'Good'),
(2, 5, 1, 'Average'),
(3, 5, 1, 'Average'),
(4, 5, 1, 'Average'),
(5, 5, 5, 'Very good, happy to ride'),
(6, 5, 5, 'Very good, happy to ride'),
(7, 5, 5, 'Very good, happy to ride'),
(8, 5, 5, 'Very good, happy to ride'),
(9, 5, 5, 'Very good, happy to ride'),
(10, 8, 5, 'Very good, happy to ride');

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
  `photo` varchar(255) DEFAULT 'car-default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_vehicle`
--

INSERT INTO `user_vehicle` (`Id`, `userId`, `country`, `numberPlate`, `makeOf`, `model`, `color`, `yearRegistered`, `photo`) VALUES
(1, 5, 'Lahore Pakistan', 'LEW-8352', 'Daihatsu', 'Cuore', 'Gun Metallic', 2007, 'car-default.png'),
(2, 8, 'Lahore Pakistan', 'LEW-8352', 'Daihatsu', 'Cuore', 'Gun Metallic', 2007, 'car-default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_key`
--
ALTER TABLE `auth_key`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `api_key` (`api_key`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_fk_rides_userId_idx` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_fk_um_userId_idx` (`userId`),
  ADD KEY `user_fk_um_senderId_idx` (`senderId`);

--
-- Indexes for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_fk_up_userId_idx` (`userId`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `auth_key`
--
ALTER TABLE `auth_key`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_preference`
--
ALTER TABLE `user_preference`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_vehicle`
--
ALTER TABLE `user_vehicle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rides`
--
ALTER TABLE `rides`
  ADD CONSTRAINT `user_fk_rides_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD CONSTRAINT `user_fk_um_senderId` FOREIGN KEY (`senderId`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_fk_um_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD CONSTRAINT `user_fk_up_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_vehicle`
--
ALTER TABLE `user_vehicle`
  ADD CONSTRAINT `user_fk_uv_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
