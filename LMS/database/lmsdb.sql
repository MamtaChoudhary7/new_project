-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 05:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
Database: `lmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `BookId` int(10) NOT NULL,
  `Author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`BookId`, `Author`) VALUES
(3, 'Jay Prakash'),
(4, 'Jay Prakash'),
(5, 'x'),
(6, 'a1'),
(7, 'Bogart'),
(7, 'Kenneth'),
(8, 'Auer'),
(8, 'Davil J.'),
(9, 'Rob'),
(9, 'Williams'),
(10, 'Deiteil'),
(11, 'Sharma'),
(12, 'Barney Stinson'),
(13, 'Puri'),
(14, 'Manna'),
(15, 'Jindal U.C'),
(16, 'Prasad'),
(17, 'Aravind Alex'),
(17, 'Haldar Sibsankar'),
(18, 'Sandhu'),
(18, 'Singh'),
(19, 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookId` int(10) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `edition` varchar(20) NOT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `rackno` int(5) NOT NULL,
  `Availability` int(5) DEFAULT NULL,
  `totalbooks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookId`, `Title`, `price`, `Publisher`, `edition`, `Year`, `rackno`, `Availability`, `totalbooks`) VALUES
(1, 'OS', 200, 'PEARSON', 'edition 2', '2006', 1, 0, 3),
(2, 'DBMS', 499, 'TARGET67', 'edition 3', '2010', 2, 0, 5),
(3, 'TOC', 300, 'NITC', 'edition 1', '2018', 3, 4, 6),
(4, 'TOC', 350, 'NITC', 'edition 2', '2018', 4, 1, 4),
(5, 'DAA', 580, 'traget67', 'edition 2', '2014', 5, 5, 8),
(6, 'DSA', 560, 'X', 'edition 2', '2010', 6, 10, 12),
(7, 'Discrete Structures', 250, 'Pearson', 'edition 1', '2010', 1, 10, 10),
(8, 'Database Processing', 450, 'Prentice Hall', 'edition 2', '2013', 2, 11, 11),
(9, 'Computer System Architecture', 340, 'Prentice Hall', 'edition 2', '2015', 3, 4, 4),
(10, 'C: How to program', 470, 'Prentice Hall', 'edition 2', '2009', 4, 3, 3),
(11, 'Atomic and Nuclear Systems', 420, 'Pearson India ', 'edition 2', '2017', 5, 12, 13),
(12, 'The PlayBook', 390, 'Stinson', 'edition 1', '2010', 6, 10, 12),
(13, 'General Theory of Relativity', 400, 'Pearson India ', 'edition 1', '2012', 1, 5, 5),
(14, 'Heat and Thermodynamics', 200, 'Pearson', 'edition 2', '2013', 2, 9, 9),
(15, 'Machine Design', 370, 'Pearson India ', 'edition 1', '2012', 3, 5, 5),
(16, 'Nuclear Physics', 480, 'Pearson India ', 'edition 2', '1998', 4, 6, 7),
(17, 'Operating System', 520, 'Pearson India ', 'edition 2', '1990', 5, 7, 7),
(18, 'Theory of Machines', 170, 'Pearson', 'edition 1', '1992', 6, 11, 12),
(19, 'AI', 480, 'PERSON', 'edition 2', '2008', 5, 21, 22);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `M_Id` int(10) NOT NULL,
  `RollNo` varchar(50) DEFAULT NULL,
  `Msg` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`M_Id`, `RollNo`, `Msg`, `Date`, `Time`) VALUES
(69, '178p1a0516', 'Your request for issue of BookId: 11  has been accepted', '2021-02-15', '07:02:41'),
(70, '178p1a0516', 'Your request for return of BookId: 11  has been accepted', '2021-02-15', '07:02:57'),
(71, '178p1a0516', 'Your request for issue of BookId: 18  has been accepted', '2021-02-15', '07:09:40'),
(72, '178p1a0516', 'Your request for renewal of BookId: 18  has been accepted', '2021-02-15', '07:09:54'),
(73, '178p1a0516', 'Your request for issue of BookId: 12  has been accepted', '2021-02-15', '09:39:35'),
(74, '178p1a0516', 'Your request for issue of BookId: 6  has been accepted', '2021-02-15', '09:40:00'),
(75, '178p1a0516', 'Your request for issue of BookId: 7  has been rejected', '2021-02-15', '09:42:11'),
(76, '178p1a0516', 'Your request for issue of BookId: 16  has been accepted', '2021-02-15', '12:35:02'),
(77, '178p1a0516', 'Your request for return of BookId: 18  has been accepted', '2021-02-15', '12:35:44'),
(78, '178p1a0516', 'Your request for issue of BookId: 19  has been accepted', '2021-02-17', '15:04:00'),
(79, '178p1a0516', 'return os book', '2021-02-17', '18:51:10'),
(80, '178p1a0516', 'something...', '2021-02-17', '18:52:21'),
(81, '178p1a0516', 'Your request for return of BookId: 6  has been accepted', '2021-02-22', '14:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `R_ID` int(10) NOT NULL,
  `Book_Name` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `RollNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`R_ID`, `Book_Name`, `Description`, `RollNo`) VALUES
(10, 'AI', 'Artificial Intelligence ', '178p1a0516'),
(11, 'python', 'programming language', '178p1a0516');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Date_of_Issue` date DEFAULT NULL,
  `Due_Date` date DEFAULT NULL,
  `Date_of_Return` date DEFAULT NULL,
  `Dues` int(10) DEFAULT NULL,
  `Renewals_left` int(10) DEFAULT NULL,
  `Returns_left` int(10) DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`RollNo`, `BookId`, `Title`, `Date_of_Issue`, `Due_Date`, `Date_of_Return`, `Dues`, `Renewals_left`, `Returns_left`, `Time`) VALUES
('178p1a0516', 6, '', '2021-02-15', '2021-04-16', '2021-02-22', -53, 1, 1, '09:39:28'),
('178p1a0516', 7, '', NULL, NULL, NULL, NULL, NULL, NULL, '16:14:40'),
('178p1a0516', 11, '', '2021-02-15', '2021-04-16', '2021-02-15', -60, 1, 1, '07:02:32'),
('178p1a0516', 12, '', '2021-02-15', '2021-04-16', NULL, NULL, 1, 1, '07:10:03'),
('178p1a0516', 16, '', '2021-02-15', '2021-04-16', NULL, NULL, 1, 1, '09:40:44'),
('178p1a0516', 17, '', NULL, NULL, NULL, NULL, NULL, NULL, '11:21:19'),
('178p1a0516', 18, '', '2021-02-15', '2021-06-15', '2021-02-15', -120, 0, 1, '07:09:30'),
('178p1a0516', 19, '', '2021-02-17', '2021-04-18', NULL, NULL, 1, 1, '09:42:03'),
('178p1a0539', 19, '', NULL, NULL, NULL, NULL, NULL, NULL, '15:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `renew`
--

CREATE TABLE `renew` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renew`
--

INSERT INTO `renew` (`RollNo`, `BookId`) VALUES
('178p1a0516', 12);

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return`
--

INSERT INTO `return` (`RollNo`, `BookId`) VALUES
('178p1a0516', 12);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherId` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `MobNo` bigint(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `Name`, `EmailId`, `MobNo`, `Password`) VALUES
('8p101', 'A.A.K', 'A.A.K.296@gmail.com', 8878812345, 'library@23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `RollNo` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `Branch` varchar(5) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `MobNo` bigint(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`RollNo`, `Name`, `year`, `Branch`, `EmailId`, `MobNo`, `Password`) VALUES
('178p1a0516', 'K.Aravindh', 'VI', 'CSE', 'korearavindh112208@gmail.com', 7730935402, 'arvind@123'),
('178p1a0539', 'V.Kavitha', 'VI', 'CSE', 'kavitha39@gmail.com', 8878345612, 'kavitha@23'),
('188p5a0502', 'K.Akash goud', 'VI', 'CSE', 'akash123@gmail.com', 8765902312, 'akash@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`BookId`,`Author`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`M_Id`),
  ADD KEY `RollNo` (`RollNo`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `RollNo` (`RollNo`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`RollNo`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `renew`
--
ALTER TABLE `renew`
  ADD PRIMARY KEY (`RollNo`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`RollNo`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`),
  ADD UNIQUE KEY `EmailId` (`EmailId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RollNo`),
  ADD UNIQUE KEY `EmailId` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `M_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `R_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`);

--
-- Constraints for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD CONSTRAINT `recommendations_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`);

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  ADD CONSTRAINT `record_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);

--
-- Constraints for table `renew`
--
ALTER TABLE `renew`
  ADD CONSTRAINT `renew_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  ADD CONSTRAINT `renew_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);

--
-- Constraints for table `return`
--
ALTER TABLE `return`
  ADD CONSTRAINT `return_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  ADD CONSTRAINT `return_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
