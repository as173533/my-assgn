-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 05:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myassgn`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_content`
--

CREATE TABLE `email_content` (
  `id` int(11) NOT NULL,
  `email_code` varchar(250) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `status` enum('0','1','3') DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_content`
--

INSERT INTO `email_content` (`id`, `email_code`, `about`, `subject`, `body`, `status`, `created_at`, `updated_at`) VALUES
(2, 'forgot_password', 'Forgot Password', 'Password Recovery Assistance', '<p><strong><span style=\"color:rgb(178, 34, 34)\"><span style=\"font-size:18px\"><span style=\"font-family:arial,helvetica,sans-serif\">Hello</span>&nbsp;{{NAME}},</span></span></strong></p>\r\n\r\n<p>Please click the below link to change reset your password.</p>\r\n                                        <p><strong><a href=\"{{LINK}}\" style=\"text-decoration: none;\">Click here</a></strong></p>', '1', NULL, NULL),
(3, 'user_registration', 'User Registration', 'User Registration', '<p><strong><span style=\"color:rgb(178, 34, 34)\"><span style=\"font-size:18px\"><span style=\"font-family:arial,helvetica,sans-serif\">Hello</span>&nbsp;{{NAME}},</span></span></strong></p>\r\n\r\n<p>Congratulations!! You have successfully registered for The <strong>APL interview & CV tracking system</strong>&nbsp;as a User.</p>\r\n\r\n<p>&nbsp;</p>', '0', NULL, '2022-10-08 20:30:52'),
(6, 'reminder_send', 'Reminder send', 'Select For Interview', '<p><strong><span style=\"color:rgb(178, 34, 34)\"><span style=\"font-size:18px\"><span style=\"font-family:arial,helvetica,sans-serif\">Hello</span>&nbsp;{{NAME}},</span></span></strong></p>\r\n\r\n<p>This is reminder at {{TIME}}</p>\r\n\r\n', '1', NULL, '2022-09-30 21:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('login','logout') NOT NULL DEFAULT 'login',
  `user_master_id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `type`, `user_master_id`, `ip`, `created_at`) VALUES
(1, 'login', 1, '116.206.202.40', '2021-10-11 19:16:44'),
(2, 'logout', 1, '116.206.202.40', '2021-10-19 16:12:27'),
(3, 'login', 1, '116.206.202.40', '2021-10-19 16:12:27'),
(4, 'login', 1, '103.101.212.213', '2021-10-20 13:44:32'),
(5, 'logout', 1, '103.101.212.213', '2021-10-20 21:20:31'),
(6, 'login', 1, '103.101.212.213', '2021-10-20 21:21:01'),
(7, 'login', 1, '115.187.42.209', '2021-10-20 21:21:09'),
(8, 'login', 1, '106.202.42.88', '2021-10-21 01:38:34'),
(9, 'logout', 1, '103.101.212.213', '2021-10-21 14:55:04'),
(10, 'login', 1, '103.101.212.213', '2021-10-21 14:55:04'),
(11, 'login', 1, '116.206.202.29', '2021-10-21 19:06:57'),
(12, 'logout', 1, '116.206.202.29', '2021-10-21 19:07:36'),
(13, 'login', 1, '116.206.202.29', '2021-10-21 19:08:04'),
(14, 'logout', 1, '103.101.212.213', '2021-10-22 12:37:10'),
(15, 'login', 1, '103.101.212.213', '2021-10-22 12:37:10'),
(16, 'logout', 1, '103.101.212.213', '2021-10-22 18:24:22'),
(17, 'login', 1, '103.101.212.213', '2021-10-22 18:24:22'),
(18, 'logout', 1, '103.101.212.213', '2021-10-23 16:24:58'),
(19, 'login', 1, '103.101.212.213', '2021-10-23 16:24:58'),
(20, 'login', 1, '103.87.143.157', '2021-10-25 13:49:40'),
(21, 'logout', 1, '115.187.42.209', '2021-10-25 18:30:25'),
(22, 'login', 1, '115.187.42.209', '2021-10-25 18:30:25'),
(23, 'login', 1, '103.101.212.133', '2021-10-27 11:31:43'),
(24, 'login', 1, '146.196.45.2', '2021-10-27 12:03:48'),
(25, 'login', 1, '115.187.42.192', '2021-10-27 14:02:31'),
(26, 'logout', 1, '103.101.212.133', '2021-10-27 21:05:35'),
(27, 'login', 1, '103.101.212.133', '2021-10-27 21:05:35'),
(28, 'logout', 1, '103.101.212.133', '2021-11-02 14:41:12'),
(29, 'login', 1, '103.101.212.133', '2021-11-02 14:41:12'),
(30, 'logout', 1, '103.101.212.133', '2021-11-02 14:41:22'),
(31, 'login', 1, '103.101.212.133', '2021-11-02 14:41:22'),
(32, 'login', 1, '::1', '2021-11-08 18:50:57'),
(33, 'logout', 1, '::1', '2021-11-08 19:23:47'),
(34, 'login', 1, '::1', '2021-11-08 19:24:05'),
(35, 'logout', 1, '::1', '2021-11-08 20:48:39'),
(36, 'login', 1, '::1', '2021-11-08 20:48:39'),
(37, 'logout', 1, '::1', '2021-11-09 12:40:50'),
(38, 'login', 1, '::1', '2021-11-09 12:40:50'),
(39, 'logout', 1, '::1', '2021-11-10 12:56:42'),
(40, 'login', 1, '::1', '2021-11-10 12:56:43'),
(41, 'logout', 1, '::1', '2021-11-10 17:00:44'),
(42, 'login', 1, '::1', '2021-11-10 17:00:44'),
(43, 'logout', 1, '::1', '2021-11-11 12:48:59'),
(44, 'login', 1, '::1', '2021-11-11 12:48:59'),
(45, 'logout', 1, '::1', '2021-11-11 17:40:56'),
(46, 'login', 1, '::1', '2021-11-11 17:40:57'),
(47, 'logout', 1, '::1', '2021-11-12 16:11:32'),
(48, 'login', 1, '::1', '2021-11-12 16:11:32'),
(49, 'logout', 1, '::1', '2021-11-17 10:18:53'),
(50, 'login', 1, '::1', '2021-11-17 10:18:53'),
(51, 'logout', 1, '::1', '2021-11-17 15:48:22'),
(52, 'login', 1, '::1', '2021-11-17 15:48:22'),
(53, 'logout', 1, '::1', '2021-11-18 13:44:48'),
(54, 'login', 1, '::1', '2021-11-18 13:44:48'),
(55, 'logout', 1, '146.196.45.2', '2021-11-18 20:23:51'),
(56, 'login', 1, '146.196.45.2', '2021-11-18 20:23:51'),
(57, 'login', 1, '103.87.143.152', '2021-11-18 20:38:19'),
(58, 'logout', 1, '103.87.143.152', '2021-11-19 10:27:11'),
(59, 'login', 1, '103.87.143.152', '2021-11-19 10:27:11'),
(60, 'logout', 1, '103.87.143.152', '2021-11-19 11:57:04'),
(61, 'login', 1, '103.87.143.152', '2021-11-19 11:57:04'),
(62, 'logout', 1, '103.87.143.152', '2021-11-19 12:22:08'),
(63, 'login', 1, '103.87.143.152', '2021-11-19 12:22:08'),
(64, 'login', 1, '115.187.42.224', '2021-11-19 12:22:09'),
(65, 'logout', 1, '146.196.45.2', '2021-11-19 16:16:05'),
(66, 'login', 1, '146.196.45.2', '2021-11-19 16:16:05'),
(67, 'logout', 1, '103.87.143.152', '2021-11-19 19:40:15'),
(68, 'login', 1, '103.87.143.152', '2021-11-19 19:40:15'),
(69, 'logout', 1, '103.87.143.152', '2021-11-20 17:35:14'),
(70, 'login', 1, '103.87.143.152', '2021-11-20 17:35:14'),
(71, 'logout', 1, '146.196.45.2', '2021-11-20 18:32:53'),
(72, 'login', 1, '146.196.45.2', '2021-11-20 18:32:53'),
(73, 'login', 1, '223.228.248.118', '2021-11-23 13:51:25'),
(74, 'login', 1, '157.119.104.254', '2021-11-23 13:52:08'),
(75, 'logout', 1, '103.87.143.152', '2021-11-23 14:02:28'),
(76, 'login', 1, '103.87.143.152', '2021-11-23 14:02:28'),
(77, 'logout', 1, '157.119.104.254', '2021-11-23 14:08:13'),
(78, 'login', 1, '157.119.104.254', '2021-11-23 14:08:19'),
(79, 'login', 1, '223.228.235.104', '2021-11-24 09:12:56'),
(80, 'login', 1, '223.228.243.83', '2021-11-25 15:56:40'),
(81, 'login', 1, '27.61.125.94', '2021-11-26 19:41:47'),
(82, 'logout', 1, '146.196.45.2', '2021-11-27 11:18:05'),
(83, 'login', 1, '146.196.45.2', '2021-11-27 11:18:05'),
(84, 'logout', 1, '103.87.143.152', '2021-11-27 11:58:26'),
(85, 'login', 1, '103.87.143.152', '2021-11-27 11:58:26'),
(86, 'login', 1, '27.61.122.63', '2021-11-27 12:03:51'),
(87, 'logout', 1, '27.61.122.63', '2021-11-27 12:22:35'),
(88, 'login', 1, '106.206.194.194', '2021-11-27 17:56:13'),
(89, 'logout', 1, '103.87.143.152', '2021-11-27 18:12:58'),
(90, 'login', 1, '103.87.143.152', '2021-11-27 18:12:58'),
(91, 'login', 1, '106.206.199.99', '2021-11-29 07:17:38'),
(92, 'login', 1, '223.228.247.117', '2021-11-29 18:41:39'),
(93, 'logout', 1, '::1', '2021-11-30 16:24:22'),
(94, 'login', 1, '::1', '2021-11-30 16:24:22'),
(95, 'logout', 1, '::1', '2021-11-30 19:27:27'),
(96, 'login', 1, '::1', '2021-11-30 19:27:27'),
(97, 'logout', 1, '::1', '2021-12-02 15:32:06'),
(98, 'login', 1, '::1', '2021-12-02 15:32:06'),
(99, 'logout', 1, '::1', '2021-12-03 11:40:10'),
(100, 'login', 1, '::1', '2021-12-03 11:40:10'),
(101, 'logout', 1, '::1', '2021-12-04 16:58:27'),
(102, 'login', 1, '::1', '2021-12-04 16:58:27'),
(103, 'logout', 1, '103.87.143.152', '2021-12-06 13:08:24'),
(104, 'login', 1, '103.87.143.152', '2021-12-06 13:08:24'),
(105, 'logout', 1, '103.87.143.152', '2021-12-06 18:05:32'),
(106, 'login', 1, '103.87.143.152', '2021-12-06 18:05:32'),
(107, 'logout', 1, '146.196.45.2', '2021-12-06 18:43:49'),
(108, 'login', 1, '146.196.45.2', '2021-12-06 18:43:49'),
(109, 'login', 1, '27.60.238.50', '2021-12-07 09:47:35'),
(110, 'logout', 1, '27.60.238.50', '2021-12-07 17:57:50'),
(111, 'login', 1, '27.60.238.50', '2021-12-07 17:57:51'),
(112, 'login', 1, '115.187.42.253', '2021-12-08 13:07:23'),
(113, 'logout', 1, '27.60.238.50', '2021-12-08 17:59:25'),
(114, 'login', 1, '27.60.238.50', '2021-12-08 17:59:25'),
(115, 'logout', 1, '27.60.238.50', '2021-12-09 08:33:40'),
(116, 'login', 1, '27.60.238.50', '2021-12-09 08:33:40'),
(117, 'logout', 1, '115.187.42.253', '2021-12-09 18:14:13'),
(118, 'login', 1, '115.187.42.253', '2021-12-09 18:14:13'),
(119, 'logout', 1, '115.187.42.253', '2021-12-09 18:17:35'),
(120, 'logout', 1, '27.60.238.50', '2021-12-10 21:16:04'),
(121, 'login', 1, '27.60.238.50', '2021-12-10 21:16:04'),
(122, 'logout', 1, '27.60.238.50', '2021-12-11 06:58:00'),
(123, 'login', 1, '27.60.238.50', '2021-12-11 06:58:00'),
(124, 'login', 1, '223.228.238.229', '2021-12-12 15:04:17'),
(125, 'logout', 1, '223.228.238.229', '2021-12-12 19:38:52'),
(126, 'login', 1, '223.228.238.229', '2021-12-12 19:38:52'),
(127, 'login', 1, '106.208.194.221', '2021-12-15 17:32:43'),
(128, 'logout', 1, '106.208.194.221', '2021-12-15 22:42:14'),
(129, 'login', 1, '106.208.194.221', '2021-12-15 22:42:14'),
(130, 'login', 1, '59.98.29.227', '2021-12-18 16:25:01'),
(131, 'login', 1, '103.101.212.215', '2021-12-18 16:34:07'),
(132, 'logout', 1, '106.208.194.221', '2021-12-19 00:23:12'),
(133, 'login', 1, '106.208.194.221', '2021-12-19 00:23:12'),
(134, 'login', 1, '157.42.198.253', '2021-12-19 20:32:04'),
(135, 'login', 1, '223.230.143.84', '2021-12-20 05:13:48'),
(136, 'logout', 1, '103.101.212.215', '2021-12-20 18:17:24'),
(137, 'login', 1, '103.101.212.215', '2021-12-20 18:17:24'),
(138, 'login', 1, '49.37.65.252', '2021-12-20 18:30:31'),
(139, 'login', 1, '223.228.226.90', '2021-12-20 22:02:02'),
(140, 'login', 1, '115.187.42.43', '2021-12-22 16:13:34'),
(141, 'login', 1, '157.42.248.154', '2021-12-22 21:23:48'),
(142, 'logout', 1, '103.87.143.120', '2021-12-24 12:32:29'),
(143, 'logout', 1, '49.37.64.167', '2021-12-24 12:36:34'),
(144, 'login', 1, '103.87.143.120', '2021-12-24 12:41:41'),
(145, 'login', 1, '49.37.64.167', '2021-12-24 12:42:00'),
(146, 'logout', 1, '115.187.42.242', '2021-12-30 18:49:01'),
(147, 'login', 1, '115.187.42.242', '2021-12-30 18:49:05'),
(148, 'login', 1, '49.37.65.173', '2022-01-08 14:18:46'),
(149, 'logout', 1, '27.60.238.82', '2022-01-10 06:56:08'),
(150, 'login', 1, '27.60.238.82', '2022-01-10 06:56:34'),
(151, 'logout', 1, '::1', '2022-01-13 16:01:42'),
(152, 'logout', 1, '::1', '2022-01-13 16:01:42'),
(153, 'login', 1, '::1', '2022-01-13 16:01:42'),
(154, 'login', 1, '::1', '2022-01-13 16:01:42'),
(155, 'logout', 1, '::1', '2022-01-13 20:24:24'),
(156, 'login', 1, '::1', '2022-01-14 11:51:25'),
(157, 'logout', 1, '::1', '2022-01-14 11:51:38'),
(158, 'login', 1, '::1', '2022-01-14 11:51:38'),
(159, 'login', 1, '115.187.42.30', '2022-01-14 19:54:57'),
(160, 'login', 1, '103.87.143.151, 5.189.134.199', '2022-01-14 19:55:01'),
(161, 'login', 1, '49.36.181.170', '2022-01-14 19:58:01'),
(162, 'login', 1, '103.51.135.143', '2022-01-14 20:03:55'),
(163, 'logout', 1, '103.51.135.143', '2022-01-14 20:05:44'),
(164, 'logout', 1, '49.36.181.170', '2022-01-14 20:16:51'),
(165, 'login', 1, '210.16.113.211', '2022-01-14 21:19:20'),
(166, 'logout', 1, '210.16.113.211', '2022-01-15 12:29:18'),
(167, 'login', 1, '210.16.113.211', '2022-01-15 12:29:18'),
(168, 'logout', 1, '::1', '2022-09-16 19:09:43'),
(169, 'login', 1, '::1', '2022-09-16 19:09:43'),
(170, 'logout', 1, '::1', '2022-09-29 13:13:00'),
(171, 'login', 1, '::1', '2022-09-29 13:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` text DEFAULT NULL,
  `task_date` date DEFAULT NULL,
  `task_time` time DEFAULT NULL,
  `status` enum('to-do','in progress','completed') NOT NULL DEFAULT 'to-do',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` bigint(20) NOT NULL,
  `type_id` tinyint(2) DEFAULT NULL,
  `full_name` varchar(128) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `activation_token` varchar(128) DEFAULT NULL,
  `reset_password_token` varchar(128) DEFAULT NULL,
  `status` enum('0','1','2','3') DEFAULT '0' COMMENT '0=>in hold ,  1=>active , 2=> block  , 3=>Deleted',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `type_id`, `full_name`, `email`, `image`, `password`, `activation_token`, `reset_password_token`, `status`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 2, 'Test User', 'albert@yopmail.com', NULL, '$2y$10$3rCfk0W6bItkqB4JZY81veoKJCZLB7ESVru7LwpPbnieqAwK6tsPK', NULL, NULL, '1', '2022-09-29 18:36:31', '2023-03-23 20:01:02', '2023-03-23 20:01:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_content`
--
ALTER TABLE `email_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_content`
--
ALTER TABLE `email_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
