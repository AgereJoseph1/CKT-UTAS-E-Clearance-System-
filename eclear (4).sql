-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 03:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclear`
--

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `is_completed` tinyint(3) UNSIGNED DEFAULT NULL,
  `code` varchar(191) DEFAULT NULL,
  `created_at` varchar(191) DEFAULT NULL,
  `created_time` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `student_id`, `is_completed`, `code`, `created_at`, `created_time`) VALUES
(15, NULL, 0, '649459d136', '22/06/2023', '04:25 pm'),
(16, NULL, 0, '6494ced40a', '23/06/2023', '12:44 am'),
(17, NULL, 0, '6494d15ed6', '23/06/2023', '12:55 am'),
(18, NULL, 0, '6494d34e0a', '23/06/2023', '01:03 am'),
(19, NULL, 0, '6494d6d659', '23/06/2023', '01:18 am'),
(20, NULL, 0, '6494d8c76a', '23/06/2023', '01:27 am'),
(21, 5, 0, '6494d965d0', '23/06/2023', '01:29 am'),
(22, 6, 0, '6494deed07', '23/06/2023', '01:53 am'),
(23, 16, 0, '6494e599ca', '23/06/2023', '02:21 am'),
(24, 20, 0, '64956b3828', '23/06/2023', '11:51 am'),
(25, NULL, 0, '64956c18f1', '23/06/2023', '11:55 am'),
(26, 17, 0, '64957ea4d8', '23/06/2023', '01:14 pm'),
(27, 25, 0, '64957fe8bc', '23/06/2023', '01:20 pm'),
(28, 26, 0, '649582fc4e', '23/06/2023', '01:33 pm'),
(29, 27, 0, '649584c687', '23/06/2023', '01:40 pm'),
(30, 28, 0, '649586d32e', '23/06/2023', '01:49 pm'),
(31, 29, 0, '649587eb15', '23/06/2023', '01:54 pm'),
(32, 30, 0, '649af7bfc5', '27/06/2023', '04:52 pm'),
(33, 31, 0, '649af856ef', '27/06/2023', '04:55 pm'),
(34, 32, 0, '649af9d517', '27/06/2023', '05:01 pm');

-- --------------------------------------------------------

--
-- Table structure for table `clearanceitem`
--

CREATE TABLE `clearanceitem` (
  `id` int(11) UNSIGNED NOT NULL,
  `clearance_id` int(10) UNSIGNED DEFAULT NULL,
  `officer_id` int(10) UNSIGNED DEFAULT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `remarks` varchar(5000) NOT NULL,
  `created_at` varchar(191) DEFAULT NULL,
  `time_created` varchar(191) DEFAULT NULL,
  `updated_at` varchar(191) DEFAULT NULL,
  `time_updated` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `clearanceitem`
--

INSERT INTO `clearanceitem` (`id`, `clearance_id`, `officer_id`, `student_id`, `status`, `remarks`, `created_at`, `time_created`, `updated_at`, `time_updated`) VALUES
(35, 21, 10, 5, 'pending', 'Not Set', '23/06/2023', '01:29 am', '23/06/2023', '01:29 am'),
(36, 21, 8, 5, 'pending', 'Not Set', '23/06/2023', '01:29 am', '23/06/2023', '01:29 am'),
(37, 21, 7, 5, 'pending', 'Not Set', '23/06/2023', '01:29 am', '23/06/2023', '01:29 am'),
(38, 22, 10, 6, 'pending', 'Not Set', '23/06/2023', '01:53 am', '23/06/2023', '01:53 am'),
(39, 22, 8, 6, 'pending', 'Not Set', '23/06/2023', '01:53 am', '23/06/2023', '01:53 am'),
(40, 22, 7, 6, 'pending', 'Not Set', '23/06/2023', '01:53 am', '23/06/2023', '01:53 am'),
(41, 23, 10, 16, 'pending', 'Not Set', '23/06/2023', '02:21 am', '23/06/2023', '02:21 am'),
(42, 23, 8, 16, 'pending', 'Not Set', '23/06/2023', '02:21 am', '23/06/2023', '02:21 am'),
(43, 23, 7, 16, 'pending', 'Not Set', '23/06/2023', '02:21 am', '23/06/2023', '02:21 am'),
(44, 24, 10, 20, 'pending', 'Not Set', '23/06/2023', '11:51 am', '23/06/2023', '11:51 am'),
(45, 24, 8, 20, 'pending', 'Not Set', '23/06/2023', '11:51 am', '23/06/2023', '11:51 am'),
(46, 24, 7, 20, 'pending', 'Not Set', '23/06/2023', '11:51 am', '23/06/2023', '11:51 am'),
(50, 26, 10, 17, 'pending', 'Not Set', '23/06/2023', '01:14 pm', '23/06/2023', '01:14 pm'),
(51, 26, 8, 17, 'pending', 'Not Set', '23/06/2023', '01:14 pm', '23/06/2023', '01:14 pm'),
(52, 27, 10, 25, 'pending', 'Not Set', '23/06/2023', '01:20 pm', '23/06/2023', '01:20 pm'),
(53, 27, 8, 25, 'pending', 'Not Set', '23/06/2023', '01:20 pm', '23/06/2023', '01:20 pm'),
(54, 27, 5, 25, 'cleared', '', '23/06/2023', '01:20 pm', '23/06/2023', '01:20 pm'),
(55, 28, 8, 26, 'pending', 'Not Set', '23/06/2023', '01:33 pm', '23/06/2023', '01:33 pm'),
(56, 28, 6, 26, 'pending', 'Not Set', '23/06/2023', '01:33 pm', '23/06/2023', '01:33 pm'),
(57, 28, 10, 26, 'pending', 'Not Set', '23/06/2023', '01:33 pm', '23/06/2023', '01:33 pm'),
(58, 29, 8, 27, 'pending', 'Not Set', '23/06/2023', '01:40 pm', '23/06/2023', '01:40 pm'),
(59, 29, 7, 27, 'pending', 'Not Set', '23/06/2023', '01:40 pm', '23/06/2023', '01:40 pm'),
(60, 29, 10, 27, 'pending', 'Not Set', '23/06/2023', '01:40 pm', '23/06/2023', '01:40 pm'),
(61, 30, 8, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(62, 30, 5, 28, 'cleared', '', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(63, 30, 10, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(64, 30, 11, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(65, 30, 12, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(66, 30, 13, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(67, 30, 14, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(68, 30, 15, 28, 'pending', 'Not Set', '23/06/2023', '01:49 pm', '23/06/2023', '01:49 pm'),
(69, 31, 8, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(70, 31, 10, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(71, 31, 11, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(72, 31, 12, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(73, 31, 13, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(74, 31, 14, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(75, 31, 15, 29, 'pending', 'Not Set', '23/06/2023', '01:54 pm', '23/06/2023', '01:54 pm'),
(76, 32, 8, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(77, 32, 7, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(78, 32, 10, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(79, 32, 11, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(80, 32, 12, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(81, 32, 13, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(82, 32, 14, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(83, 32, 15, 30, 'pending', 'Not Set', '27/06/2023', '04:52 pm', '27/06/2023', '04:52 pm'),
(84, 33, 8, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(85, 33, 7, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(86, 33, 10, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(87, 33, 11, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(88, 33, 12, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(89, 33, 13, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(90, 33, 14, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(91, 33, 15, 31, 'pending', 'Not Set', '27/06/2023', '04:55 pm', '27/06/2023', '04:55 pm'),
(92, 34, 8, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(93, 34, 7, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(94, 34, 10, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(95, 34, 11, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(96, 34, 12, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(97, 34, 13, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(98, 34, 14, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm'),
(99, 34, 15, 32, 'cleared', '', '27/06/2023', '05:01 pm', '27/06/2023', '05:01 pm');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `fullname` varchar(191) DEFAULT NULL,
  `role` varchar(191) DEFAULT NULL,
  `signature` varchar(191) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `email`, `phone`, `fullname`, `role`, `signature`, `password`, `created_at`) VALUES
(5, 'atanga@gmail.com', '05858585', 'Atanga Emmanuel', 'bio_lab', '6494540775caa_Screenshot (40).png', 'e10adc3949ba59abbe56e057f20f883e', '22/06/2023'),
(6, 'job@gmail.com', '07686868', 'Agere Job', 'chem_lab', '', 'e10adc3949ba59abbe56e057f20f883e', '22/06/2023'),
(7, 'ngata@gmail.com', '0868686', 'Ngata Anthony', 'phy_lab', '', 'e10adc3949ba59abbe56e057f20f883e', '22/06/2023'),
(8, 'dennis@gmail.com', '06966096', 'Awini Dennis', 'snr_mhall_tutor', '', 'e10adc3949ba59abbe56e057f20f883e', '22/06/2023'),
(9, 'irene@gmail.com', '0660606600', 'Irene ', 'snr_fhall_tutor', '', 'e10adc3949ba59abbe56e057f20f883e', '22/06/2023'),
(10, 'joseph@gmail.com', '0686868', 'Atanga Joseph', 'accountant', '', 'e10adc3949ba59abbe56e057f20f883e', '22/06/2023'),
(11, 'vitalis@gmail.com', '067686868', 'Atinga Vitalis', 'cmps_coach', '', 'e10adc3949ba59abbe56e057f20f883e', '23/06/2023'),
(12, 'agere@gmail.com', '08696969', 'Agere Anthony', 'it_directorate', '', 'e10adc3949ba59abbe56e057f20f883e', '23/06/2023'),
(13, 'emmanuel@gmail.com', '08686868', 'Awini Emmanuel', 'deen', '', 'e10adc3949ba59abbe56e057f20f883e', '23/06/2023'),
(14, 'stephen@gmail.com', '09696969', 'Ayelwin Stephen', 'computer_lab', '', 'e10adc3949ba59abbe56e057f20f883e', '23/06/2023'),
(15, 'alfred@gmail.com', '0868686', 'Asuuga Alfred', 'librarian', '', 'e10adc3949ba59abbe56e057f20f883e', '23/06/2023');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(191) DEFAULT NULL,
  `index_number` varchar(191) DEFAULT NULL,
  `programme` varchar(191) DEFAULT NULL,
  `department` varchar(191) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `clearance_started` tinyint(3) UNSIGNED DEFAULT NULL,
  `clearance_completed` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `index_number`, `programme`, `department`, `gender`, `pwd`, `clearance_started`, `clearance_completed`) VALUES
(5, 'Joseph Agere', 'Fms/0068/19', 'computer science', 'computer science', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(6, 'Prince Mireku', 'Fms/0008/19', 'Mathematics with Economics', 'mathematics', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(16, 'Joseph Agere', 'Fms/0082/19', 'computer science', 'computer science', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(17, 'Prince Mireku', 'Fms/0006/19', 'Mathematics with Economics', 'mathematics', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(20, 'Agere Joel', 'Fms/0084/19', 'Applied Biology', 'chemistry', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(21, 'Joseph Agere', 'Fms/0022/19', 'computer science', 'computer science', 'male', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(25, 'Prince Mireku', 'fms/0001/19', 'Applied Biology', 'biology', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(26, 'Atinga Emmanuel', 'fms/0002/19', 'chemistry', 'chemistry', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(27, 'Asuuga Isaac', 'fms/0007/19', 'computer science', 'computer science', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(28, 'Agere Joel', 'fms/0005/19', 'Applied Biology', 'biology', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(29, 'Joseph Asarki', 'fms/0003/19', 'mathematics ', 'mathematics', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(30, 'Joseph ', 'fms/0600/19', 'computer science', 'computer science', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(31, 'Emmanuel', 'fms/0012/19', 'Applied Physics', 'physics', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(32, 'Joseph Agere', 'fms/0013/19', 'computer science', 'computer science', 'male', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Joseph Agere', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_clearance_student` (`student_id`);

--
-- Indexes for table `clearanceitem`
--
ALTER TABLE `clearanceitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_clearanceitem_clearance` (`clearance_id`),
  ADD KEY `index_foreignkey_clearanceitem_officer` (`officer_id`),
  ADD KEY `index_foreignkey_clearanceitem_student` (`student_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `clearanceitem`
--
ALTER TABLE `clearanceitem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `c_fk_clearance_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `clearanceitem`
--
ALTER TABLE `clearanceitem`
  ADD CONSTRAINT `c_fk_clearanceitem_clearance_id` FOREIGN KEY (`clearance_id`) REFERENCES `clearance` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_clearanceitem_officer_id` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_clearanceitem_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
