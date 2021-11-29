-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 01:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT -1,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `parent_id`, `name`, `content`, `submit_date`) VALUES
(4, 1, -1, 'klay', 'this is very wonderful', '2021-09-17 19:36:30'),
(5, 1, 4, 'james', 'yes it is', '2021-09-17 19:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `dataa`
--

CREATE TABLE `dataa` (
  `user_id` int(128) NOT NULL,
  `ann_date` varchar(128) NOT NULL,
  `ann_content` varchar(1500) NOT NULL,
  `ann_link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataa`
--

INSERT INTO `dataa` (`user_id`, `ann_date`, `ann_content`, `ann_link`) VALUES
(6, '2021-08-17', 'Dear BU Students,\nDue to unavoidable health circumstance, please be informed that the release of TDP-TES NOA is suspended until further notice.\nStay safe everyone. Thank you.\nBU RA10931 Team', 'https://web.facebook.com/BUPCOSA/posts/867185047233444'),
(7, '2021-08-20', 'Happy Friday TES Grantees!\nThe following new TES grantees for SY 2020-2021 are advised to contact your assigned Technical Staff for your LBP Master Card log-in credentials. \nKindly check previous post on how to access the LBP portal. Thank you.', 'https://web.facebook.com/BUPCOSA/posts/869077097044239'),
(8, '2021-08-25', 'Attention! BUPC and BUTC New Grantees! Please check your BU Email for your login credentials. Thank you.', 'https://web.facebook.com/BUPCOSA/posts/872076063411009'),
(9, '2021-08-30', 'BUPC students who need temporary ID for scholarship purposes. Please visit and message BU OSAS official page to set your appointment. ', 'https://web.facebook.com/BUPCOSA/posts/874775943141021');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `body`, `status`) VALUES
(17, 'Jessie Santiano', 'layla.tank001@bicol-u.edu.ph', 'Account Problem', 'How can I change my password?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `regist_db`
--

CREATE TABLE `regist_db` (
  `reg_id` int(128) NOT NULL,
  `reg_studentID` varchar(255) DEFAULT NULL,
  `reg_user` varchar(128) NOT NULL,
  `reg_given` varchar(128) NOT NULL,
  `reg_middle` varchar(128) NOT NULL,
  `reg_course` varchar(128) NOT NULL,
  `reg_year` varchar(128) NOT NULL,
  `reg_atm` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(40, 0, 'Howdy', 'BUPC_TES-OSA', '2021-09-13 23:44:39'),
(41, 40, 'hello\r\n', 'myla mendoza', '2021-09-14 00:45:51'),
(42, 0, 'hello', 'Alyssa S. Daniel', '2021-09-14 03:34:37'),
(43, 42, 'hello there!', 'BUPC_TES-OSA', '2021-09-14 03:37:19'),
(44, 0, 'test comment', 'BUPC_TES-OSA', '2021-09-17 01:53:59'),
(45, 0, 'chong hi', 'Scent Belmonte', '2021-09-17 07:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_name`, `user_pass`, `status`, `picture`) VALUES
(2, 'bupc-osates@gmail.com', 'BUPC TES Admin', 'admin', 1, '1637930466-download.png'),
(11, 'jessie.santiano@gmail.com', 'Jessie Tardecilla Santiano', 'santiano', 0, ''),
(26, 'noob3808@gmail.com', 'Cliff Richard Abila', 'qwerty', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataa`
--
ALTER TABLE `dataa`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regist_db`
--
ALTER TABLE `regist_db`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dataa`
--
ALTER TABLE `dataa`
  MODIFY `user_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `regist_db`
--
ALTER TABLE `regist_db`
  MODIFY `reg_id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
