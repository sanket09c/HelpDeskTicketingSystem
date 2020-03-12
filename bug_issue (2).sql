-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 03:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bug_issue`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug_report`
--

CREATE TABLE `bug_report` (
  `uid` mediumint(10) NOT NULL,
  `bug_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `bug_detail` varchar(50) COLLATE utf16_bin NOT NULL,
  `bug_severity` varchar(20) COLLATE utf16_bin NOT NULL,
  `bug_reportedby` varchar(20) COLLATE utf16_bin NOT NULL,
  `report_date` varchar(20) COLLATE utf16_bin NOT NULL,
  `status` varchar(20) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `bug_report`
--

INSERT INTO `bug_report` (`uid`, `bug_name`, `bug_detail`, `bug_severity`, `bug_reportedby`, `report_date`, `status`) VALUES
(3, 'aadarsh', 'del', 'critical', 'rohan', '1545146033', '1'),
(5, 'ee', 'e', 'high', 'e', '1544491340', '0'),
(42, 'secuti', 'zbjhb', '', 'pravin123', '1545176705', '1'),
(77, 'ume', 'u', 'u', '', '1542351070', '1'),
(80, 'sak11', 'sak22', 'critical', 'sak33', '1544080806', '0'),
(81, 'hgsd', 'ghaudyw', 'critical', 'admin', '1545176766', '1'),
(82, 'sak111', 'sak222', 'high', 'sak333', '1544079993', '0'),
(83, ' sfjhbf', 'sak222333', 'low', 'sak333444', '1545161421', '1'),
(84, 'q', 'q', 'saab', 'q', '1542133882', '1'),
(85, '14onlyNmae', '145mor', 'critical', '', '1542352648', '1'),
(86, 'bug1', 'this is a bug by someone', 'critical', 'abcd', '1544066171', '1'),
(87, 'admin bug', 'bug created by admin', 'high', 'admin', '1544065584', '1'),
(88, 'sankets bug', 'bug created by sanket', 'low', 'sanket', '1544066744', '1'),
(89, 'dummy bug', 'sakjasc a', 'critical', 'admin', '1544491804', '1'),
(90, 'ksbDS', 'jdsandjadsnfdsnj', 'critical', 'abcd', '1544492023', '1'),
(93, 'aadarsh', 'delrrrtrrr', 'critical', 'rohan', '1544494564', '1'),
(94, 'q', 'r', 'high', 'admin', '1544494602', '1'),
(95, '', '', '', 'admin', '1544984054', '1'),
(96, 'xc kv', 'sbbfdaf', 'high', 'admin', '1545146023', '1'),
(98, 'security', ' fvbidfbvifb', 'critical', 'paceis', '1545161520', '1'),
(99, 'hgsd', 'ghaudyw', 'critical', 'admin', '1545176745', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) COLLATE utf16_bin NOT NULL,
  `password` varchar(20) COLLATE utf16_bin NOT NULL,
  `userType` varchar(5) COLLATE utf16_bin NOT NULL,
  `userId` int(20) NOT NULL,
  `first_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `last_name` varchar(20) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `userType`, `userId`, `first_name`, `last_name`) VALUES
('admin', 'admin123', 'A', 1, 'Admin', 'Admin'),
('sanket12', 'sanket1234', 'U', 8, 'sanket12', 'ksa'),
('admin', 'admin123', 'U', 11, 'snms', 'hjsbh'),
('SOURABH159', 'admin123', 'U', 12, 'ansley', 'shilpi'),
('admin', 'admin123', 'U', 13, '', ''),
('swapnil123', 'swapnil123', 'U', 17, 'Swapnil', 'Madhavi'),
('paceis', 'paceis', 'U', 18, 'sdfr', 'hbjdf'),
('pravin123', 'pravin123', 'U', 19, 'pravin', 'patil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bug_report`
--
ALTER TABLE `bug_report`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bug_report`
--
ALTER TABLE `bug_report`
  MODIFY `uid` mediumint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
