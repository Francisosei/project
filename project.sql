-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2016 at 01:04 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL,
  `fistname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(100) NOT NULL,
  `Organization_name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Industry` varchar(255) DEFAULT NULL,
  `Contact_Info` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL COMMENT 'Mr/Mrs/etc',
  `Full_name` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Division` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `Organization_name`, `Description`, `Website`, `Industry`, `Contact_Info`, `Title`, `Full_name`, `Position`, `Division`, `Email`, `Phone`, `Address`, `created_at`, `updated_at`) VALUES
(1, NULL, 'TELECOMMUNICATION', 'www.suflinegh.com', NULL, 'box 3', 'Mr', 'FRANCIS OSEI OWUSU', 'OPERATIONS MANAGER', 'INFORMATION CENTRE', 'francis.oseiowusu@stu.ucc.edu.gh', '02689919824', 'bos3', '2016-06-01 12:57:28', '2016-06-01 12:57:28'),
(2, 'gggg', 'gggggggggggg', 'gggggggggggggg', NULL, 'ggggggg', 'Mr', 'ggggggggggg', 'ggggggggg', 'ggggggggg', 'gggggggggggg@ymail.com', '02689919824', 'gggggggggggggggg', '2016-06-01 13:04:11', '2016-06-01 13:04:11'),
(3, 'uuuuuuuuu', 'uuuuuuuuuuuuuu', 'uggggggg', NULL, 'hgggggggg', 'Mr', 'gggggggggggggg', 'ggggggggggggggg', 'ggggggggggggggg', 'gggggggggggg@ymail.com', '02689919824', 'hhhhhhhhhhhhhhh', '2016-06-01 13:06:46', '2016-06-01 13:06:46'),
(4, 'bbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbb', 'bbbbbbbbb', NULL, 'bbbbbbbbbbb', 'Mr', 'bbbbbbbbbb', 'bbbbbbbbb', 'bbbbbbb', 'bbbbbbb@gmail.com', '0244699566', 'hhhhhhhhhhhh', '2016-06-01 13:10:00', '2016-06-01 13:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_09_161508_create_admin_table', 1),
('2016_04_13_230302_create_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `Post_Title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Job_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Salary_Range` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Deadline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `Post_Title`, `Job_type`, `Description`, `Role`, `Qualification`, `Location`, `Salary_Range`, `Deadline`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Part Time', 'gggggggggg', 'ggggggggggg', '1ST DEGREE', 'hhhhhhhh', 'hhhhhhhh', 'gggggggggg', '2016-04-14 09:26:47', '2016-04-14 09:26:47'),
(2, 1, NULL, 'Part Time', 'gggggggggg', 'ggggggggggg', '1ST DEGREE', 'hhhhhhhh', 'hhhhhhhh', 'gggggggggg', '2016-04-14 09:26:55', '2016-04-14 09:26:55'),
(3, 1, NULL, 'Part Time', 'gggggggggg', 'ggggggggggg', '1ST DEGREE', 'hhhhhhhh', 'hhhhhhhh', 'gggggggggg', '2016-04-14 09:27:01', '2016-04-14 09:27:01'),
(4, 1, NULL, 'Volunteer', 'ALLL DAY', 'MONITERING', 'WAECE', 'SPINTEX ROAD', '12222-9000', 'ALLL DAY', '2016-04-14 09:31:33', '2016-04-14 09:31:33'),
(5, 1, NULL, 'Volunteer', 'ALLL DAY', 'MONITERING', 'WAECE', 'SPINTEX ROAD', '12222-9000', 'ALLL DAY', '2016-04-14 09:34:29', '2016-04-14 09:34:29'),
(6, 1, 'KKKK', 'Part Time', 'kkkk', 'kkkkkkk', '1ST DEGREE', 'kkkkk', 'kkkkkkk', 'kkkk', '2016-04-14 09:40:00', '2016-04-14 09:40:00'),
(7, 1, 'hhhhhhh', 'Full Time', 'jjjjjjjjjj', 'jjjjjjjjjjjjjjjj', '1ST DEGREE', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhhh', 'jjjjjjjjjj', '2016-04-14 10:13:10', '2016-04-14 10:13:10'),
(8, 1, 'mmm', 'Full Time', 'jjjjjjjjjj', 'jjjjjjjjjjjjjjjj', 'WAECE', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhhh', 'jjjjjjjjjj', '2016-04-14 10:14:35', '2016-04-14 10:14:35'),
(9, 1, 'hh', 'Internship', 'gggg', 'ggggg', '1ST DEGREE', 'gggg', 'ggggg', 'gggg', '2016-04-14 10:17:06', '2016-04-14 10:17:06'),
(10, 1, 'fffffffff', 'Full Time', 'ggggg', 'hh', '1ST DEGREE', 'gggggg', 'gggggggg', 'ggggg', '2016-04-14 10:32:00', '2016-04-14 10:32:00'),
(11, 1, 'fffffffff', 'Full Time', 'ggggg', 'hh', '1ST DEGREE', 'gggggg', 'gggggggg', '2016-05-13', '2016-04-14 10:35:33', '2016-04-14 10:35:33'),
(12, 4, '', '', '', '', '', '', '', '', '2016-04-21 21:26:51', '2016-04-21 21:26:51'),
(13, 6, '', '', '', '', '2ND DEGREE', '', '', '2016-06-01 06:31:20', '2016-06-01 13:31:51', '2016-06-01 13:31:51'),
(14, 6, '', '', '', '', '', '', '', '2016-06-01 07:13:07', '2016-06-01 14:13:18', '2016-06-01 14:13:18'),
(15, 6, 'hhhhhhhhhhh``', 'Full Time', 'jjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjj', '1ST DEGREE', 'nnnnnnnnnnnnnn', 'nnnnnnnnnnn', '2017', '2016-06-01 14:15:04', '2016-06-01 14:15:04'),
(16, 6, '44444444', '', '', '', '', '', '', '2016-06-01 07:20:15', '2016-06-01 14:21:06', '2016-06-01 14:21:06'),
(17, 6, 'gggggg', 'Full Time', 'ggggggg', 'ggggggg', '1ST DEGREE', 'hhhhhhhhh', '800', '2017-12-09', '2016-06-01 15:18:18', '2016-06-01 15:18:18'),
(18, 6, 'gggggg', 'Full Time', 'ggggggg', 'ggggggg', '1ST DEGREE', 'hhhhhhhhh', '800', '2017-12-09', '2016-06-01 15:26:53', '2016-06-01 15:26:53'),
(19, 6, 'gggggg', 'Full Time', 'ggggggg', 'ggggggg', '1ST DEGREE', 'hhhhhhhhh', '800', '2017-12-09', '2016-06-01 15:27:22', '2016-06-01 15:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(11) NOT NULL,
  `Full_name` varchar(255) DEFAULT NULL,
  `Index_number` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Current_Address` varchar(255) DEFAULT NULL,
  `Graduation_date` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Programme` varchar(255) DEFAULT NULL,
  `Basic_skills` varchar(255) DEFAULT NULL,
  `Major` varchar(255) DEFAULT NULL,
  `Application_Type` varchar(255) NOT NULL COMMENT 'Student/Alumni',
  `Job_Search_Status` varchar(255) DEFAULT NULL COMMENT 'seeking part time job, internship, full time job, not searching internship secure, not searching job secured',
  `Resume` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `Full_name`, `Index_number`, `Email`, `Current_Address`, `Graduation_date`, `Level`, `Programme`, `Basic_skills`, `Major`, `Application_Type`, `Job_Search_Status`, `Resume`, `created_at`, `updated_at`) VALUES
(1, 'FRANCIS OSEI OWUSU', 'PS/ITC/12/0034', 'OSEI1257@GMAIL.COM', 'BOX 2', '2016', '400', 'IT', NULL, 'DATABASE ADMIN', 'STUDENT', 'INTERSHIP', 'HIIIII', NULL, NULL),
(2, 'ggggggggggg', 'gggggggggggggg', 'gggggggggggg@ymail.com', 'ggggggggggggggggg', NULL, '100', 'hhhhhhhhhhhhhhh', NULL, 'hhhhhhhhhh', 'Student', 'Internship', 'hhhhhh', '2016-04-10 05:44:50', '2016-04-10 05:44:50'),
(3, 'kkkkqkkkkkkkkkkkkkqq', 'kkkkkkkkkk', 'kk@c', 'jjjjjjj', NULL, '100', 'kkkkkk', NULL, 'kkkkk', 'Student', 'Internship', 'kkkkkkk', '2016-04-10 05:48:04', '2016-04-10 05:48:04'),
(4, 'ggggggggg', 'gggggggggggggg', 'gg@mail.cm', 'hhhhhhhhh', NULL, '600', 'hhhhhh', 'PHP,Laravel,Java,c++', 'hhhhhhhhh', 'Student', 'Internship', 'hhhhhhhhh', '2016-04-28 22:19:20', '2016-04-28 22:19:20'),
(9, 'ggggggggggggggggggggg', 'gggggggggggggg', 'gggggggggggggggggg@hhhhh.com', NULL, '6999', '400', 'bbbbbbbbbbbbbbb', 'bbbbb', 'bbbbbbbbbbb', 'Student', 'Part time job', 'ai-4up-04-propositional-logic.pdf', '2016-05-31 09:06:11', '2016-05-31 09:06:11'),
(10, 'bbbbbbbbbb', 'bbbbbbbbbb', 'bbbbbbbbbbbbbb', 'hhhhhhhhhhhhhhhhhhhhhhhh', '9999', '200', 'hhhhhhhhhh', 'hhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'Student', 'Internship', 'ai-4up-04-propositional-logic.pdf', '2016-05-31 17:58:34', '2016-05-31 17:58:34'),
(11, 'jjjjjjjj', 'jjjjjjjjjjjj', 'francis.oseiowusu@stu.ucc.edu.gh', 'kkkkkkkkkk', 'hhhhhhhhhh', '100', 'kkkkkkk', 'kkkkkkk', 'kkkkkkkk', 'Student', 'Part time job', 'ai-4up-04-propositional-logic.pdf', '2016-05-31 18:04:39', '2016-05-31 18:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `date_of_birth`, `industry`, `website`, `contact`, `address`, `photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Glo', 'y@yahoo.com', 'company', NULL, 'ggggggggg', 'gggggggggg', 'ggggggggggg', 'gggggggggg', 'L000017.png', '$2y$10$aWYsqBIOTTNrq4BdurkAp.bKCd2uL3orlNjauIqpcR3aJWeG5CdoC', 'wpzME6BdPgtVNHGsmEjpl4cvHIUsZOXeG9dS4D693AzZOpXxMO75RVb2NDLZ', '2016-04-14 06:44:14', '2016-04-24 05:51:53'),
(3, 'SURFLINE GHANA', 'SURFLINE@gh.com', 'Company', NULL, 'hhhhhhh', 'h', 'h', 'hh', 'L0001.png', '$2y$10$6BTLwCqD4u2OExId5EczQOScu7uTqcAA0z3M8pL4YbnTkL5vgHKDq', 'qqPxTVm2wx2QlLsnMTaD8PGyk3sWhDsjlcgnxDu6yITg4NK6KMTlKGAEDVOZ', '2016-04-16 13:48:38', '2016-05-25 22:01:11'),
(4, 'francis', 'osei@gmail.com', 'Student', NULL, '', '', '', ' ', 'locked.jpeg', '$2y$10$aAW78vzFsr2XHGYt0r1twOP/WYKRGXeZ.qxri28jV4yugDr5Fm.eW', 'fXHWJbY0c5pdr1G0kWzGW4fMKzIOKmTW2cFz4eOnpjO3dQLWEHKSyEU5ynRU', '2016-04-21 21:25:43', '2016-04-30 14:40:03'),
(5, 'sarah', 'sarah@gmail.com', 'admin', NULL, NULL, NULL, NULL, NULL, '', '$2y$10$oPhtG/0Cgq4lWRODT8wQz.DG4fimYT.NiHYwbWozbx6Az1QhThT/a', '4f4l6G41ZGgLcCWXKq6AodtPFLQccHaKoR36muCkyYLkwPxc5tWE0OOYpHpG', '2016-04-29 01:02:05', '2016-05-25 22:00:02'),
(6, 'lawrence', 'lawrence@gmail.com', 'Student', '1990/12/09', NULL, NULL, NULL, NULL, '', '$2y$10$LDM1UGAh.t1rK6G/PBbHu.mfwEyAkmZK4gMuiY6fAkK27bZHxMSjG', 'ELJqHax8UK6SfUtW2kBtcgy3PHowbI2dQ73AZlPaLRuQP3X3qgNTAvLkyPq3', '2016-04-29 01:08:39', '2016-05-26 08:37:48'),
(7, 'Admin', 'admin@gmail.com', 'admin', '1990-03-15', 'IT', NULL, NULL, NULL, '', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`), ADD KEY `post_user_id_foreign` (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
