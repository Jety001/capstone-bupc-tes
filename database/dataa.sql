-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 12:33 AM
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
-- Database: `accounts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataa`
--

CREATE TABLE `dataa` (
  `user_id` int(128) NOT NULL,
  `user_username` varchar(128) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_pass` varchar(128) NOT NULL,
  `ann_date` varchar(128) NOT NULL,
  `ann_content` varchar(1500) NOT NULL,
  `ann_link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataa`
--

INSERT INTO `dataa` (`user_id`, `user_username`, `user_name`, `user_pass`, `ann_date`, `ann_content`, `ann_link`) VALUES
(1, 'kacchanxdekuuu09@gmail.com', 'Scent Belmonte', 'passywordu', '', '', ''),
(6, '', '', '', '2021-08-17', 'Dear BU Students,\r\nDue to unavoidable health circumstance, please be informed that the release of TDP-TES NOA is suspended until further notice.\r\nStay safe everyone. Thank you.\r\nBU RA10931 Team', 'https://web.facebook.com/BUPCOSA/posts/867185047233444'),
(7, '', '', '', '2021-08-20', 'Happy Friday TES Grantees!\r\nThe following new TES grantees for SY 2020-2021 are advised to contact your assigned Technical Staff for your LBP Master Card log-in credentials. \r\nKindly check previous post on how to access the LBP portal. Thank you.', 'https://web.facebook.com/BUPCOSA/posts/869077097044239'),
(8, '', '', '', '2021-08-25', 'Attention! BUPC and BUTC New Grantees! Please check your BU Email for your login credentials. Thank you.', 'https://web.facebook.com/BUPCOSA/posts/872076063411009'),
(9, '', '', '', '2021-08-30', 'BUPC students who need temporary ID for scholarship purposes. Please visit and message BU OSAS official page to set your appointment. ', 'https://web.facebook.com/BUPCOSA/posts/874775943141021'),
(12, '', '', '', '', '', ''),
(13, '', '', '', '', '', ''),
(14, 'noob@gmail.com', 'Cliff Richard Abila', 'qwerty', '', '', ''),
(15, 'alyssadaniel699@gmail.com', 'Alyssa Sayat Daniel', 'Secured23', '', '', ''),
(16, 'bupc-osates@gmail.com', 'BUPC_TES-OSA', 'BupcOsa1121', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataa`
--
ALTER TABLE `dataa`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataa`
--
ALTER TABLE `dataa`
  MODIFY `user_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
