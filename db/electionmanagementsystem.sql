-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 07:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electionmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', '$2y$10$0JyeBGTxxvAewb7AIjy8nev3jfRD6FPv7AcatYxH2aJCAn4D5KmZ2', 'SEC', 'Chairman', '', '2022-04-30'),
(3, 'staff', '$2y$10$4xJk80gFEmQc4vzJ9ti8OO17h30hCj3XhwMjn.K8KSqYhSLDllWWi', 'Mark', 'Bautista', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `voter_id` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL,
  `party_id` int(11) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `student_id`, `position_id`, `voter_id`, `firstname`, `lastname`, `photo`, `platform`, `party_id`, `department`) VALUES
(98, 1808569, 12, 'KwNB5GF2sxIOdqS', 'Ma. Theresa', 'Masapol', '', '123 test', 6, ''),
(99, 1706560, 13, '8pjREFb1v4Y39cW', 'Klyde Louise', 'Olitoquit', '', 'test', 6, ''),
(100, 1234557, 11, 'zsegQYH26rdq4bG', 'Kobie', 'Olitoquit', '', '', 8, ''),
(101, 1138343, 8, 'XMm5N2cUbqCLVQG', 'KZ', 'Tandingan', '', '', 6, ''),
(102, 1145367, 8, '7Kisr5enFNxoOd2', 'Daniel', 'Padilla', '', '', 7, ''),
(103, 1235576, 9, 'G46afRjCB1UFlHW', 'Maris', 'Racal', '', '', 6, ''),
(104, 1265353, 9, 'y1GzRAqvKsStcoJ', 'Cardo', 'Dalisay', '', '', 7, ''),
(105, 7177267, 11, 'WYs3M5VNJx7jL6c', 'Mark', 'Babasa', '', '', 9, ''),
(106, 1234224, 11, 'zZu4FxDCgVGMKvA', 'Xena', 'Cruz', '', '', 6, ''),
(107, 1193884, 11, '89cIxbFqs4yErRv', 'Donnalyn ', 'Bartolome', '', '', 6, ''),
(108, 1684955, 10, 'KqW56UAcp8bszkd', 'Lea', 'Cielo', '', '', 6, ''),
(109, 0, 12, 'nNecI89Yl7uTPvk', '', '', '', 'asdasdasd', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `election_id` int(11) NOT NULL,
  `election_name` varchar(30) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`election_id`, `election_name`, `startDate`, `endDate`) VALUES
(6, '2022 USG ELECTION', '2022-06-19', '2022-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `partylist`
--

CREATE TABLE `partylist` (
  `id` int(11) NOT NULL,
  `partyname` varchar(30) NOT NULL,
  `tagline` varchar(80) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partylist`
--

INSERT INTO `partylist` (`id`, `partyname`, `tagline`, `priority`) VALUES
(6, 'BUGKOS', 'Education for all', 1),
(7, 'LIKSI', 'Kabataan ang pagasa ng bayan', 1),
(8, 'AKO UNC', 'All for one, one for all', 2),
(9, 'INDEPENDENT', 'N/A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(8, 'Governor', 1, 1),
(9, 'Vice Governor', 1, 2),
(10, 'Councilor', 3, 3),
(11, 'Representative', 2, 4),
(12, 'President', 1, 5),
(13, 'Vice President', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(2, 'gnGTaHtQoIUwXiF', '$2y$10$H0aMJzZYTBxbodJchfiUoebhza4k52YdCtYdGv1Buv3', 'Hubert', 'Republika', '', '0000-00-00'),
(3, '4ArXV8SbUB9EJ1G', '$2y$10$yIQ1SaON6WL1kf54QznNrO2MmtWDTDdPAm299i5ZR7r', 'Renz', 'Cas', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `student_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(55) NOT NULL,
  `status` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `student_id`, `email`, `code`, `status`, `password`) VALUES
(35, 1808569, 'klydelouise.olitoquit@unc.edu.ph', 278852, 'notverified', '1234567'),
(36, 1706560, 'kl.olitoquit123@gmail.com', 931299, 'verified', '1706560'),
(37, 1312463, 'kathrynbernardo@gmail.com', 199301, 'notverified', '1312463'),
(41, 1977252, 'andreaolmeda@gmail.com', 0, '', '1977252'),
(46, 1422344, 'joemcarl.16@gmail.com', 0, '', '1422344');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `suffix` varchar(2) NOT NULL,
  `year_level` int(5) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `student_id`, `firstname`, `lastname`, `middlename`, `suffix`, `year_level`, `department`, `email`, `photo`) VALUES
(479, '', 1706560, 'Klyde Louise', 'Olitoquit', '', '', 3, 'CN', 'kl.olitoquit123@gmail.com', ''),
(480, '', 1312463, 'Kathryn', 'Bernardo', '', '', 4, 'CCS', 'kathrynbernardo@gmail.com', ''),
(484, '', 1977252, 'Andrea', 'Olmeda', '', '', 1, 'CEA', 'andreaolmeda@gmail.com', ''),
(489, '', 1422344, 'Carl Joem', 'Masapol', '', '', 2, 'CBA', 'joemcarl.16@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `department` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voters_id`, `candidate_id`, `position_id`, `department`) VALUES
(24, 0, 101, 8, ''),
(25, 0, 100, 11, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `election`
--
ALTER TABLE `election`
  ADD PRIMARY KEY (`election_id`),
  ADD UNIQUE KEY `election_name` (`election_name`),
  ADD UNIQUE KEY `election_id` (`election_id`);

--
-- Indexes for table `partylist`
--
ALTER TABLE `partylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `election`
--
ALTER TABLE `election`
  MODIFY `election_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partylist`
--
ALTER TABLE `partylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=490;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
