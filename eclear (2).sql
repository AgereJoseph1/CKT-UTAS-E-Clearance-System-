-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 03:12 AM
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
(11, NULL, 0, '64923b69dc', '21/06/2023', '01:51 am'),
(12, 2, 0, '649241622c', '21/06/2023', '02:16 am'),
(13, 4, 0, '64924b5209', '21/06/2023', '02:58 am'),
(14, 3, 0, '64924c2336', '21/06/2023', '03:02 am');

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
(2, 12, 1, 2, 'pending', 'Not Set', '21/06/2023', '02:16 am', '21/06/2023', '02:16 am'),
(3, 12, 2, 2, 'pending', 'Not Set', '21/06/2023', '02:16 am', '21/06/2023', '02:16 am'),
(4, 12, 3, 2, 'pending', 'Not Set', '21/06/2023', '02:16 am', '21/06/2023', '02:16 am'),
(6, 13, 1, 4, 'pending', 'Not Set', '21/06/2023', '02:58 am', '21/06/2023', '02:58 am'),
(7, 13, 2, 4, 'pending', 'Not Set', '21/06/2023', '02:58 am', '21/06/2023', '02:58 am'),
(8, 13, 3, 4, 'pending', 'Not Set', '21/06/2023', '02:58 am', '21/06/2023', '02:58 am'),
(9, 13, 4, 4, 'pending', 'Not Set', '21/06/2023', '02:58 am', '21/06/2023', '02:58 am'),
(11, 14, 1, 3, 'pending', 'Not Set', '21/06/2023', '03:02 am', '21/06/2023', '03:02 am'),
(12, 14, 2, 3, 'pending', 'Not Set', '21/06/2023', '03:02 am', '21/06/2023', '03:02 am'),
(13, 14, 3, 3, 'pending', 'Not Set', '21/06/2023', '03:02 am', '21/06/2023', '03:02 am'),
(14, 14, 4, 3, 'pending', 'Not Set', '21/06/2023', '03:02 am', '21/06/2023', '03:02 am');

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
  `password` varchar(300) DEFAULT NULL,
  `created_at` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `email`, `phone`, `fullname`, `role`, `signature`, `password`, `created_at`) VALUES
(1, 'agere@gmail.com', '0541433448', 'Agere Joseph', 'librarian', '', 'e10adc3949ba59abbe56e057f20f883e', '20/06/2023'),
(2, 'prince@gmail.com', '0541433448', 'Prince Mireku ', 'deen', '', 'e10adc3949ba59abbe56e057f20f883e', '20/06/2023'),
(3, 'emma@gmail.com', '0541433448', 'Agere Joseph', 'bio_lab', '', 'e10adc3949ba59abbe56e057f20f883e', '20/06/2023'),
(4, 'atanga@gmail.com', '0541433448', 'Emmanuel Atanga', 'snr_hall_tutor', '', 'e10adc3949ba59abbe56e057f20f883e', '21/06/2023');

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
  `pwd` int(10) UNSIGNED DEFAULT NULL,
  `clearance_started` tinyint(3) UNSIGNED DEFAULT NULL,
  `clearance_completed` tinyint(3) UNSIGNED DEFAULT NULL,
  `officer_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `index_number`, `programme`, `department`, `gender`, `pwd`, `clearance_started`, `clearance_completed`, `officer_id`) VALUES
(2, 'Prince Mireku', 'Fms/0034/19', 'applied biology', 'biology', 'male', 123456, 1, 0, NULL),
(3, 'Agere Joseph', 'Fms/0008/19', 'applied chemistry', 'chemistry', 'male', 123456, 1, 0, NULL),
(4, 'Agere Rebecca', 'Fms/0009/19', 'computer science', 'computer science', 'female', 123456, 1, 0, NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_student_officer` (`officer_id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clearanceitem`
--
ALTER TABLE `clearanceitem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
--
-- Constraints for table `student`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
