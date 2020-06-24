-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2020 at 12:56 PM
-- Server version: 10.3.23-MariaDB-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kcocom_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkpoint`
--

CREATE TABLE `checkpoint` (
  `cpid` int(11) NOT NULL,
  `cppassword` varchar(11) NOT NULL,
  `cpstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkpoint`
--

INSERT INTO `checkpoint` (`cpid`, `cppassword`, `cpstatus`) VALUES
(1, '78M9ZY', 1),
(2, 'P2OG9I', 1),
(3, '1RTNPZ', 1),
(4, 'UE27CD', 1),
(5, '47H6HE', 1),
(6, '7RRZ76', 1),
(7, 'CL1P00', 1),
(8, '95H1J0', 1),
(9, 'WNLS55', 1),
(10, 'RMC20X', 1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `teamid` int(11) NOT NULL,
  `scoreid` int(11) NOT NULL,
  `scoretotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`teamid`, `scoreid`, `scoretotal`) VALUES
(1001, 1, 255),
(1002, 2, 300),
(1003, 3, 285),
(1004, 4, 315),
(1005, 5, 275),
(1006, 6, 270),
(1007, 7, 285),
(1008, 8, 315),
(1009, 9, 235),
(1010, 10, 270);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamid` int(11) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `teampassword` varchar(50) NOT NULL,
  `teamstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamid`, `teamname`, `teampassword`, `teamstatus`) VALUES
(1001, 'SALOM SQUAD', '78M9ZY', 1),
(1002, 'Gang Alfalah', 'P2OG9I', 1),
(1003, 'Champion', '1RTNPZ', 1),
(1004, 'we are power', 'UE27CD', 1),
(1005, 'IKA', '47H6HE', 1),
(1006, 'Firefighter', '7RRZ76', 1),
(1007, '7Up', 'CL1P00', 1),
(1008, 'Go fight win', '95H1J0', 1),
(1009, 'Afrina', 'WNLS55', 1),
(1010, 'We are the best konfem juara in shaAllah', 'RMC20X', 1);

-- --------------------------------------------------------

--
-- Table structure for table `validate`
--

CREATE TABLE `validate` (
  `vallidateid` int(11) NOT NULL,
  `cpid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `cpvalidate` varchar(20) NOT NULL,
  `scoregive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validate`
--

INSERT INTO `validate` (`vallidateid`, `cpid`, `teamid`, `cpvalidate`, `scoregive`) VALUES
(89, 10, 1010, 'complete', 15),
(90, 5, 1005, 'complete', 10),
(91, 8, 1008, 'complete', 15),
(92, 3, 1003, 'complete', 10),
(93, 7, 1007, 'complete', -20),
(94, 1, 1001, 'complete', 10),
(95, 6, 1006, 'complete', 10),
(96, 6, 1006, 'complete', 10),
(97, 2, 1002, 'complete', 10),
(98, 9, 1009, 'complete', -20),
(99, 4, 1004, 'complete', -30),
(100, 5, 1004, 'complete', 10),
(101, 8, 1007, 'complete', 15),
(102, 10, 1009, 'complete', -20),
(103, 6, 1005, 'complete', 15),
(104, 4, 1003, 'complete', 15),
(105, 3, 1002, 'complete', 10),
(106, 1, 1010, 'complete', -20),
(107, 9, 1008, 'complete', -20),
(108, 4, 1004, 'complete', 15),
(109, 4, 1004, 'complete', 15),
(110, 2, 1001, 'complete', 15),
(111, 4, 1004, 'complete', 10),
(112, 7, 1006, 'complete', 10),
(113, 10, 1008, 'complete', 15),
(114, 6, 1004, 'complete', 10),
(115, 5, 1003, 'complete', 10),
(116, 8, 1006, 'complete', -20),
(118, 2, 1010, 'complete', 15),
(119, 3, 1001, 'complete', 10),
(120, 1, 1009, 'complete', 10),
(121, 3, 1007, 'complete', 10),
(122, 4, 1002, 'complete', 10),
(123, 9, 1007, 'complete', 10),
(124, 3, 1001, 'complete', 10),
(125, 6, 1003, 'complete', 15),
(126, 10, 1007, 'complete', 15),
(127, 7, 1005, 'complete', 10),
(128, 5, 1002, 'complete', 15),
(129, 8, 1005, 'complete', -20),
(130, 2, 1009, 'complete', 15),
(131, 9, 1006, 'complete', -30),
(132, 7, 1004, 'complete', 10),
(133, 1, 1008, 'complete', 15),
(134, 3, 1010, 'complete', 10),
(135, 4, 1001, 'complete', 15),
(137, 8, 1004, 'complete', 15),
(138, 6, 1002, 'complete', 15),
(139, 10, 1006, 'complete', 15),
(140, 9, 1003, 'complete', -20),
(141, 5, 1001, 'complete', 15),
(142, 7, 1003, 'complete', 15),
(143, 4, 1010, 'complete', 15),
(144, 2, 1008, 'complete', 10),
(145, 1, 1007, 'complete', -20),
(146, 3, 1009, 'complete', 15),
(147, 10, 1005, 'complete', 15),
(148, 6, 1001, 'complete', 10),
(149, 8, 1003, 'complete', 15),
(150, 7, 1002, 'complete', 15),
(151, 1, 1006, 'complete', 15),
(152, 5, 1010, 'complete', 15),
(153, 2, 1007, 'complete', 15),
(154, 3, 1008, 'complete', 10),
(155, 3, 1008, 'complete', 10),
(156, 4, 1007, 'complete', 15),
(157, 4, 1009, 'complete', 15),
(158, 9, 1004, 'complete', -20),
(159, 6, 1010, 'complete', 15),
(160, 10, 1004, 'complete', 10),
(161, 8, 1002, 'complete', 15),
(162, 7, 1001, 'complete', 15),
(163, 5, 1009, 'complete', 15),
(164, 2, 1006, 'complete', 15),
(165, 9, 1003, 'complete', -20),
(166, 4, 1008, 'complete', 15),
(167, 1, 1005, 'complete', 10),
(168, 3, 1007, 'complete', -20),
(169, 3, 1007, 'complete', 10),
(170, 10, 1003, 'complete', 15),
(171, 5, 1008, 'complete', 15),
(172, 7, 1009, 'complete', 15),
(173, 9, 1002, 'complete', -20),
(174, 8, 1001, 'complete', -30),
(175, 2, 1005, 'complete', 10),
(176, 1, 1004, 'complete', 15),
(177, 6, 1009, 'complete', 10),
(178, 3, 1006, 'complete', 10),
(179, 3, 1006, 'complete', 10),
(180, 3, 1006, 'complete', 15),
(181, 7, 1010, 'complete', 15),
(182, 10, 1002, 'complete', 15),
(183, 6, 1008, 'complete', 15),
(184, 9, 1001, 'complete', -30),
(185, 4, 1006, 'complete', 15),
(186, 8, 1010, 'complete', -20),
(187, 5, 1007, 'complete', 15),
(188, 1, 1003, 'complete', 15),
(189, 2, 1004, 'complete', 15),
(190, 3, 1005, 'complete', 15),
(191, 10, 1001, 'complete', 15),
(192, 6, 1007, 'complete', 15),
(193, 6, 1007, 'complete', 15),
(194, 9, 1010, 'complete', 10),
(195, 9, 1007, 'complete', 10),
(196, 8, 1009, 'complete', -20),
(197, 5, 1006, 'complete', 15),
(198, 4, 1005, 'complete', 10),
(199, 1, 1002, 'complete', 15),
(200, 2, 1003, 'complete', 15),
(201, 3, 1004, 'complete', 10),
(202, 3, 1004, 'complete', 15),
(203, 7, 1008, 'complete', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkpoint`
--
ALTER TABLE `checkpoint`
  ADD PRIMARY KEY (`cpid`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`scoreid`),
  ADD KEY `teamid` (`teamid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`),
  ADD UNIQUE KEY `teamname` (`teamname`);

--
-- Indexes for table `validate`
--
ALTER TABLE `validate`
  ADD PRIMARY KEY (`vallidateid`),
  ADD KEY `cpid` (`cpid`),
  ADD KEY `teamid` (`teamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `scoreid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `validate`
--
ALTER TABLE `validate`
  MODIFY `vallidateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `team` (`teamid`);

--
-- Constraints for table `validate`
--
ALTER TABLE `validate`
  ADD CONSTRAINT `validate_ibfk_1` FOREIGN KEY (`cpid`) REFERENCES `checkpoint` (`cpid`),
  ADD CONSTRAINT `validate_ibfk_2` FOREIGN KEY (`teamid`) REFERENCES `team` (`teamid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
