-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 04:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Problem` varchar(500) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `Name`, `Problem`, `desc`, `date`, `type`, `status`) VALUES
(1, 'laxman', 'internet issue', '', '2023-01-15', '', 1),
(2, '', 'laxman', 'network isssue', '2023-01-24', 'examiner', 1),
(3, '', 'laxmamn', '/;lkjhgfxccvbn kkjhgfdxc c xcvbgbh erttyyui', '2023-01-24', 'examiner', 1),
(4, '', 'jhgvcgh', 'fvjfffkfjfdfk', '2023-01-24', 'examiner', 1),
(5, '', 'password problem', 'mjhgfx', '2023-01-25', 'Examiner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionpapers`
--

CREATE TABLE `questionpapers` (
  `examid` int(11) NOT NULL,
  `examname` varchar(50) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `noofquestions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionpapers`
--

INSERT INTO `questionpapers` (`examid`, `examname`, `createdby`, `time`, `marks`, `noofquestions`) VALUES
(1, 'ff', 'laxman', 20, 2, 0),
(6, 'Dst', '', 30, 2, 0),
(7, 'Dst', '', 30, 2, 0),
(8, 'dse', '', 20, 2, 0),
(10, 'java', 'laxman', 20, 1, 0),
(11, 'html', 'laxman', 20, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `examid` int(20) NOT NULL,
  `question` varchar(300) NOT NULL,
  `op1` varchar(300) NOT NULL,
  `op2` varchar(200) NOT NULL,
  `op3` varchar(200) NOT NULL,
  `op4` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`examid`, `question`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 'HJVHVh', 'jhvghv', 'hvguv', 'ugug', 'uhguyhgb', 'op2'),
(3, 'laxman', '1', '2', '3', '4', 'op1'),
(3, 'prash', 'a', 'b', 'c ', 'd', 'op2'),
(11, '1+2 ?', '1', '2', '4', '3', 'op4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `dp` varchar(50) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `branch`, `dp`, `pass`, `type`) VALUES
('Maths', 'laxman', 'lakshmana5296@gmail.com', 'CSE', 'IMG005252png', '$2y$10$THpwPwOIp6PqaIdL9zbwCulFg7/vXlNjKaql2OJhjyoTZ8/ER9XD.', 'examiner'),
('admin', 'admin', 'admin@oes.com', '11', 'IMG003388.png', '$2y$10$tolmv6T1sC00roB4shp/w.Ri8vS8lgs5fUwrF3ny.RPou4n4bp/8i', 'admin'),
('s170333', 'Anitha', 's170333@rguktsklm.ac.in', 'CSE', 'IMG004356.png', '$2y$10$/866BDL.4xRsTFUF7xgigeymdS4wSA.zuwq/AfrksVgbhe1bFxHcG', 'student'),
('S170116', 'BODDEPALLI LAXMANA RAO', 's170116@rguktsklm.ac.in', 'ECE', 'IMG002210.png', '$2y$10$skx0DK7UE2MM8M6PYKr15OVZ85HA379KsIZg/hk9fC676P0a8zzIu', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionpapers`
--
ALTER TABLE `questionpapers`
  ADD PRIMARY KEY (`examid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
