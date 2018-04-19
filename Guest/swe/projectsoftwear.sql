-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 01:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsoftwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookoffer`
--

CREATE TABLE `bookoffer` (
  `B_OfferID` int(11) NOT NULL,
  `B_GuestId` int(11) NOT NULL,
  `Accept` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booktrip`
--

CREATE TABLE `booktrip` (
  `G_SSn` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `Accept` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `C_id` int(11) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `toGuest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `G_SSN` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `userName` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FeedBack` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `OfferID` int(11) NOT NULL,
  `Content` varchar(200) NOT NULL,
  `deadline` date NOT NULL,
  `Discount` int(11) NOT NULL DEFAULT '0',
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `R_id` int(11) NOT NULL,
  `supject` varchar(50) NOT NULL,
  `Content` varchar(50) NOT NULL,
  `TO` varchar(50) NOT NULL,
  `From` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `S_SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resevation`
--

CREATE TABLE `resevation` (
  `R_ID` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `numofadult` int(11) NOT NULL,
  `numofroom` int(11) NOT NULL,
  `extra_order` varchar(200) NOT NULL,
  `extraBed` int(11) NOT NULL,
  `roomnumber` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `numOfkids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_NUM` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `max_adult` int(11) NOT NULL,
  `max_kids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `SSN` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `BDate` date NOT NULL,
  `Phone` int(11) NOT NULL,
  `Stype` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `T_Id` int(11) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `Duration` time NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `deadline` date NOT NULL,
  `Max_number` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `ID` int(11) NOT NULL,
  `link` varchar(60) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `SSN` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `U_ID` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_url`
--

CREATE TABLE `user_url` (
  `user_id` int(11) NOT NULL,
  `url_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waitlist`
--

CREATE TABLE `waitlist` (
  `W_Gssn` int(11) NOT NULL,
  `W_Rnumber` int(11) NOT NULL,
  `R_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waitlisttrip`
--

CREATE TABLE `waitlisttrip` (
  `T_id` int(11) NOT NULL,
  `GuestID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookoffer`
--
ALTER TABLE `bookoffer`
  ADD PRIMARY KEY (`B_OfferID`,`B_GuestId`),
  ADD KEY `B_GuestId` (`B_GuestId`);

--
-- Indexes for table `booktrip`
--
ALTER TABLE `booktrip`
  ADD PRIMARY KEY (`G_SSn`,`T_id`),
  ADD KEY `T_id` (`T_id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`G_SSN`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`OfferID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `resevation`
--
ALTER TABLE `resevation`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `roomnumber` (`roomnumber`),
  ADD KEY `guest_id` (`guest_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_NUM`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`T_Id`);

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_type` (`user_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `user_url`
--
ALTER TABLE `user_url`
  ADD PRIMARY KEY (`user_id`,`url_id`),
  ADD KEY `url_id` (`url_id`);

--
-- Indexes for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD PRIMARY KEY (`W_Gssn`,`W_Rnumber`),
  ADD KEY `W_Rnumber` (`W_Rnumber`);

--
-- Indexes for table `waitlisttrip`
--
ALTER TABLE `waitlisttrip`
  ADD PRIMARY KEY (`T_id`,`GuestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `OfferID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resevation`
--
ALTER TABLE `resevation`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `T_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookoffer`
--
ALTER TABLE `bookoffer`
  ADD CONSTRAINT `bookoffer_ibfk_1` FOREIGN KEY (`B_OfferID`) REFERENCES `offer` (`OfferID`),
  ADD CONSTRAINT `bookoffer_ibfk_2` FOREIGN KEY (`B_GuestId`) REFERENCES `guest` (`G_SSN`);

--
-- Constraints for table `booktrip`
--
ALTER TABLE `booktrip`
  ADD CONSTRAINT `booktrip_ibfk_1` FOREIGN KEY (`G_SSn`) REFERENCES `guest` (`G_SSN`),
  ADD CONSTRAINT `booktrip_ibfk_2` FOREIGN KEY (`T_id`) REFERENCES `trip` (`T_Id`);

--
-- Constraints for table `resevation`
--
ALTER TABLE `resevation`
  ADD CONSTRAINT `resevation_ibfk_1` FOREIGN KEY (`roomnumber`) REFERENCES `room` (`ROOM_NUM`),
  ADD CONSTRAINT `resevation_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`G_SSN`);

--
-- Constraints for table `url`
--
ALTER TABLE `url`
  ADD CONSTRAINT `url_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `usertype` (`U_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`type`) REFERENCES `usertype` (`U_ID`);

--
-- Constraints for table `user_url`
--
ALTER TABLE `user_url`
  ADD CONSTRAINT `user_url_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`SSN`),
  ADD CONSTRAINT `user_url_ibfk_2` FOREIGN KEY (`url_id`) REFERENCES `url` (`ID`);

--
-- Constraints for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD CONSTRAINT `waitlist_ibfk_1` FOREIGN KEY (`W_Gssn`) REFERENCES `guest` (`G_SSN`),
  ADD CONSTRAINT `waitlist_ibfk_2` FOREIGN KEY (`W_Rnumber`) REFERENCES `room` (`ROOM_NUM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
