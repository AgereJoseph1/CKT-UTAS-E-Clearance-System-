-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 09:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `code` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_time` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `student_id`, `is_completed`, `code`, `created_at`, `created_time`) VALUES
(8, 7, 0, '6334ddd020', '29/09/2022', '01:50 am'),
(9, 9, 0, '633497428e', '28/09/2022', '08:49 pm'),
(10, 8, 0, '6334980469', '28/09/2022', '08:52 pm');

-- --------------------------------------------------------

--
-- Table structure for table `clearanceitem`
--

CREATE TABLE `clearanceitem` (
  `id` int(11) UNSIGNED NOT NULL,
  `clearance_id` int(10) UNSIGNED DEFAULT NULL,
  `office_id` int(10) UNSIGNED DEFAULT NULL,
  `officer_id` int(10) UNSIGNED DEFAULT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `remarks` varchar(5000) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `time_created` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `updated_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `time_updated` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `clearanceitem`
--

INSERT INTO `clearanceitem` (`id`, `clearance_id`, `office_id`, `officer_id`, `student_id`, `status`, `remarks`, `created_at`, `time_created`, `updated_at`, `time_updated`) VALUES
(19, 8, 2, 1, 7, 'cleared', 'no records of owing books', '29/09/2022', '01:50 am', '29/09/2022', '01:50 am'),
(20, 8, 3, 2, 7, 'cleared', 'Not Owing', '29/09/2022', '01:50 am', '29/09/2022', '01:50 am'),
(21, 8, 4, 3, 7, 'cleared', 'All is fine', '29/09/2022', '01:50 am', '29/09/2022', '01:50 am'),
(22, 8, 7, 4, 7, 'cleared', 'Good Student', '29/09/2022', '01:50 am', '29/09/2022', '01:50 am'),
(23, 9, 9, 6, 9, 'cleared', 'Not owing', '28/09/2022', '08:49 pm', '28/09/2022', '08:49 pm'),
(24, 9, 10, 7, 9, 'cleared', 'Not owing books', '28/09/2022', '08:49 pm', '28/09/2022', '08:49 pm'),
(25, 9, 13, 8, 9, 'cleared', 'Descent Student', '28/09/2022', '08:49 pm', '28/09/2022', '08:49 pm'),
(26, 9, 7, 9, 9, 'cleared', 'Good Student', '28/09/2022', '08:49 pm', '28/09/2022', '08:49 pm'),
(27, 10, 2, 1, 8, 'pending', 'Not Set', '28/09/2022', '08:52 pm', '28/09/2022', '08:52 pm'),
(28, 10, 3, 2, 8, 'pending', 'Not Set', '28/09/2022', '08:52 pm', '28/09/2022', '08:52 pm'),
(29, 10, 4, 3, 8, 'pending', 'Not Set', '28/09/2022', '08:52 pm', '28/09/2022', '08:52 pm'),
(30, 10, 7, 4, 8, 'pending', 'Not Set', '28/09/2022', '08:52 pm', '28/09/2022', '08:52 pm');

-- --------------------------------------------------------

--
-- Table structure for table `headmaster`
--

CREATE TABLE `headmaster` (
  `id` int(11) UNSIGNED NOT NULL,
  `institution_id` int(10) UNSIGNED DEFAULT NULL,
  `h_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `h_email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `h_phone` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `headmaster`
--

INSERT INTO `headmaster` (`id`, `institution_id`, `h_name`, `h_email`, `h_phone`, `user_id`, `created_at`) VALUES
(1, 1, 'Tayifa Mumuni', 'tayif@gmail.com', '0244556990', 1, '09/09/2022'),
(2, 2, 'Col. Amadu Mahama', 'amadu.mahama@gmail.com', '0244567890', 1, '28/09/2022');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(11) UNSIGNED NOT NULL,
  `i_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `i_name`, `user_id`, `created_at`) VALUES
(1, 'Notre-Damne Secondary School', 1, '09/09/2022'),
(2, 'Kumasi ArmedForces Senior High', 1, '28/09/2022');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `institution_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `created_at`, `institution_id`, `user_id`) VALUES
(2, 'Library', '09/09/2022', 1, 1),
(3, 'Bursar', '09/09/2022', 1, 1),
(4, 'Senior House Master', '09/09/2022', 1, 1),
(7, 'Classroom', '26/09/2022', 1, 1),
(9, 'Bursar', '28/09/2022', 2, 1),
(10, 'Library', '28/09/2022', 2, 1),
(11, 'Classroom', '28/09/2022', 2, 1),
(13, 'Snr House Master', '28/09/2022', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(11) UNSIGNED NOT NULL,
  `office_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `institution_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `office_id`, `email`, `phone`, `fullname`, `role`, `password`, `institution_id`, `created_at`, `class`, `user_id`) VALUES
(1, 2, 'yaw.kwame@gmail.com', '0244670900', 'Kwame Yaw', 'librarian', '123456', 1, '09/09/2022', NULL, 1),
(2, 3, 'sika@gmail.com', '0509885332', 'Sika Bawa', 'bursar', '123456', 1, '09/09/2022', NULL, 1),
(3, 4, 'kante@gmail.com', '0244167990', 'Nkolo Kante', 'other', '123456', 1, '09/09/2022', NULL, 1),
(4, 7, 'tayi.fa@gmail.com', '02441234456', 'Tayifa Mumuni', 'form master', '123456', 1, '29/09/2022', 'General Arts 2', 1),
(5, 7, 'jisu.owel@gmail.com', '0244667009', 'Jisubi Owel', 'form master', '123456', 1, '29/09/2022', 'Visual Arts 1', 1),
(6, 9, 'mumuni@gmail.com', '0243123445', 'Tayifa Mumuni', 'bursar', '123456', 2, '28/09/2022', NULL, NULL),
(7, 10, 'kwame@gmail.com', '0244667990', 'Osey Kwame', 'librarian', '123456', 2, '28/09/2022', NULL, NULL),
(8, 13, 'panda@gmail.com', '0556889665', 'Kungfu Panda', 'other', '123456', 2, '28/09/2022', NULL, NULL),
(9, 7, 'tt@gmail.com', '0245667889', 'Tayi Fa', 'form master', '123456', 2, '28/09/2022', 'General Arts A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `index_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `clearance_started` tinyint(3) UNSIGNED DEFAULT NULL,
  `clearance_completed` tinyint(3) UNSIGNED DEFAULT NULL,
  `pwd` int(10) UNSIGNED DEFAULT NULL,
  `institution_id` int(10) UNSIGNED DEFAULT NULL,
  `officer_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `index_number`, `class`, `clearance_started`, `clearance_completed`, `pwd`, `institution_id`, `officer_id`) VALUES
(7, 'Kwaku Yaw', '0050112244', 'General Arts 2', 1, 1, 123456, 1, 4),
(8, 'Osei Kimpo', '0050228977', 'General Arts 2', 1, 0, 123456, 1, 4),
(9, 'Kimbo Asualapaa', '0050112233', 'General Arts A', 1, 1, 123456, 2, 9),
(10, 'Ruhaima Shamalaa', '0050778899', 'General Arts A', 0, 0, 123456, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Deku Fivi', 'admin', 'admin');

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
  ADD KEY `index_foreignkey_clearanceitem_office` (`office_id`),
  ADD KEY `index_foreignkey_clearanceitem_officer` (`officer_id`),
  ADD KEY `index_foreignkey_clearanceitem_student` (`student_id`);

--
-- Indexes for table `headmaster`
--
ALTER TABLE `headmaster`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_headmaster_institution` (`institution_id`),
  ADD KEY `index_foreignkey_headmaster_user` (`user_id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_institution_user` (`user_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_office_institution` (`institution_id`),
  ADD KEY `index_foreignkey_office_user` (`user_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_officer_office` (`office_id`),
  ADD KEY `index_foreignkey_officer_institution` (`institution_id`),
  ADD KEY `index_foreignkey_officer_user` (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_student_institution` (`institution_id`),
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clearanceitem`
--
ALTER TABLE `clearanceitem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `headmaster`
--
ALTER TABLE `headmaster`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `c_fk_clearanceitem_office_id` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_clearanceitem_officer_id` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_clearanceitem_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `headmaster`
--
ALTER TABLE `headmaster`
  ADD CONSTRAINT `c_fk_headmaster_institution_id` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `c_fk_office_institution_id` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `officer`
--
ALTER TABLE `officer`
  ADD CONSTRAINT `c_fk_officer_institution_id` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_officer_office_id` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `c_fk_student_institution_id` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_student_officer_id` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
