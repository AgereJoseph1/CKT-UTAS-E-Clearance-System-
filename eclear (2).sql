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
  `pwd` varchar(100)  DEFAULT NULL,
  `clearance_started` tinyint(3) UNSIGNED DEFAULT NULL,
  `clearance_completed` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `student`
--

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
