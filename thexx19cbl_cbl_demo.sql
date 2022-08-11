-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2022 at 12:55 PM
-- Server version: 5.7.37
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thexx19cbl_cbl_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_06_29_070029_create_tournaments_table', 2),
(13, '2022_06_12_091910_create_players_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerId` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_num` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_num` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jersy` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `termId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerId`, `fname`, `mname`, `lname`, `whatsapp_num`, `alt_num`, `email`, `dateOfBirth`, `gender`, `pincode`, `city`, `state`, `country`, `height`, `weight`, `position`, `level`, `document`, `jersy`, `experiance`, `termId`, `created_at`, `updated_at`) VALUES
(1, 'mukesh', 'jagdishbhai', 'kushava', '1201425124', '1021452145', 'mjk@gmail.com', '2022-06-16', 'male', '380009', 'ahmedabad', 'gujarat', 'in', 12, 32, 'captan', '2', '1656572034.ico', '23', 'dscsdc', 'on', '2022-06-30 01:23:54', '2022-06-30 01:23:54'),
(2, 'shivam', 's', 'sharma', '1132123', '6556', 'mjk@gmail.com', '2022-06-23', 'male', '380009', 'ahmedabad', 'gujarat', 'in', 12, 32, 'captan', '2', '1656572259.ico', '23', 'dsxsxs', 'on', '2022-06-30 01:27:39', '2022-06-30 01:27:39'),
(3, 'rakesh', 'sxsdc', 'sdsdc', '1425141241', '2315412451', 'thecbl2022@gmail.com', '2022-06-02', 'male', '544355', 'ahmedabad', 'gujarat', 'en', 22, 36, 'captan', '3', '1656581896.jpg', '654', 'dedcfdv', 'on', '2022-06-30 04:08:16', '2022-06-30 04:08:16'),
(4, 'Suresh', 'Shh', 'Sh shvh', '0897456321', '1236547890', 'bgc@afg.com', '2022-07-09', 'female', '356272', 'vadodara', 'mumbai', 'en', 48, 50, 'captan', '2', '1656669958.jpg', '48', 'Wgywvywcs', 'on', '2022-07-01 04:35:58', '2022-07-01 04:35:58'),
(5, 'rakesh', 'sxsdc', 'sdsdc', '1245214521', '1245214521', 'mjkushava@gmail.com', '2022-06-30', 'male', '400021', 'Mumbai', 'Maharashtra', 'India', 45, 21, 'captan', '2', '1657047875.jpg', '54', 'dkfbkdf', 'on', '2022-07-05 13:34:36', '2022-07-05 13:34:36'),
(6, 'rakesh', 'sxsdc', 'sdsdc', '7548654854', '4587125478', 'thecbl2022@gmail.com', '2022-07-14', 'male', '380052', 'Ahmedabad', 'Gujarat', 'India', 47, 78, 'captan', '3', '1658231916.jpeg', '27', 'kn kjnkn jn k jnm', 'on', '2022-07-19 06:28:36', '2022-07-19 06:28:36'),
(7, 'Snsj', 'Hwheb', 'Snen', '4946464949', '4968859632', 'sbsb@gmail.com', '2022-07-19', 'male', '380052', 'Ahmedabad', 'Gujarat', 'India', 48, 488, 'captan', '3', '1658232059.jpg', '78', 'Hhvvxxbbvv', 'on', '2022-07-19 06:30:59', '2022-07-19 06:30:59'),
(8, 'rakesh', 'sxsdc', 'sdsdc', '1425112451', '1425412545', 'mjkushava@gmail.com', '2025-06-15', 'male', '380009', 'Ahmedabad', 'Gujarat', 'India', 45, 11, 'captan', '1', '1658398683.PNG', '54', 'hjbvcvcj,mnv', 'on', '2022-07-21 04:48:03', '2022-07-21 04:48:03'),
(9, 'rakesh', 'sxsdc', 'sdsdc', '1425112451', '1425412545', 'mjkushava@gmail.com', '2022-07-13', 'female', '380009', 'Ahmedabad', 'Gujarat', 'India', 42, 12, 'captan', '2', '1658421377.jpg', '21', ',bjnbm,bnljkhvbm nm', 'on', '2022-07-21 11:06:17', '2022-07-21 11:06:17'),
(10, 'rakesh', 'sxsdc', 'sdsdc', '1425112451', '1425412545', 'thecbl2022@gmail.com', '2022-07-15', 'male', '380052', 'Ahmedabad', 'Gujarat', 'India', 21, 51, 'captan', '2', '1658422577.jpg', '325', 'mjhvb nm,kljhbv', 'on', '2022-07-21 11:26:17', '2022-07-21 11:26:17'),
(11, 'Parth', 'Prakashbhai', 'Sukhadiya', '7621805859', '7621805859', 'mrsukh3182@gmail.com', '2022-07-04', 'male', '382110', 'Ahmedabad', 'Gujarat', 'India', 180, 100, 'captan', '2', '1658912389.png', '2', 'dfdvghjytrehjuytrejuytrfd', 'on', '2022-07-27 03:29:49', '2022-07-27 03:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `tournamentId` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tournament_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `tournamentCategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournamentType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ageRestriction` int(11) NOT NULL,
  `ageCutOff` int(11) NOT NULL,
  `aboutTournament` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tournamentId`, `name`, `email`, `mobileNumber`, `logo`, `tournament_name`, `tournament_location`, `startDate`, `endDate`, `tournamentCategory`, `tournamentType`, `ageRestriction`, `ageCutOff`, `aboutTournament`, `created_at`, `updated_at`) VALUES
(1, 'Mukesh kushava', 'di@g.com', '6516651651', '', 'dfvd', 'ef  ef', '2022-06-09', '2022-06-09', '2', '1', 2, 2, 'wmdnwed', '2022-06-29 01:57:44', '2022-06-29 01:57:44'),
(2, 'dipesh', 'kushavamukesh56@gmail.com', '6516651651', '', 'dfvd', 'adscqde', '2022-06-17', '2022-06-10', '1', '2', 1, 1, 'gfdgh', '2022-06-29 02:13:59', '2022-06-29 02:13:59'),
(3, 'Mukesh', 'kushavamukesh56@gmail.com', '6516651651', '1656492345.ico', 'champion', 'adscqde', '2022-06-18', '2022-06-25', '3', '2', 2, 1, 'vbvx vb', '2022-06-29 03:15:45', '2022-06-29 03:15:45'),
(4, 'Mukesh kushava', 'kushavamukesh56@gmail.com', '6516651651', '1656492452.jpg', 'fn kefn v', 'ef  ef', '2022-06-18', '2022-06-17', '1', '2', 2, 2, 'dcsdcsd', '2022-06-29 03:17:32', '2022-06-29 03:17:32'),
(5, 'shivam', 'mjkushava@gmail.com', '6516651651', '1656492584.jpg', 'dfvd', 'ef  ef', '2022-06-18', '2022-06-23', '2', '1', 3, 2, 'wsxsxs', '2022-06-29 03:19:44', '2022-06-29 03:19:44'),
(6, 'Mukesh', 'kushavamukesh56@gmail.com', '6516651651', '1656494438.jpg', 'champion', 'ahmedabad', '2022-06-16', '2022-06-29', '2', '3', 3, 2, 'nvhvnb', '2022-06-29 03:50:38', '2022-06-29 03:50:38'),
(7, 'shivam', 'mjk@gmail.com', '6516651651', '1656498580.jpg', 'dfvd', 'ahmedabad', '2022-06-24', '2022-06-24', '1', '2', 3, 3, 'edededed', '2022-06-29 04:59:40', '2022-06-29 04:59:40'),
(8, 'jay', 'thecbl2022@gmail.com', '1425145214', '1656581681.jpg', 'mike', 'wdcwd', '2022-06-19', '2022-06-24', '3', '2', 1, 3, 'vfgxdvcxbhj', '2022-06-30 04:04:41', '2022-06-30 04:04:41'),
(9, 'Mukesh', 'mjk9600@gmail.com', '9874589650', '1656669809.jpg', 'Place', 'Surat', '2022-07-09', '2022-07-29', '2', '3', 3, 3, 'Ycscsgxsgxscgsc', '2022-07-01 04:33:29', '2022-07-01 04:33:29'),
(10, '.htaccess', 'mjkushava@gmail.com', '1425145214', '1658397521.PNG', 'mike', 'wdcwd', '2022-07-14', '2022-07-07', '1', '2', 2, 1, 'dvewbdkhebdb', '2022-07-21 04:28:41', '2022-07-21 04:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `confirm_password`, `token`, `is_verified`, `email_verified_at`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Bhavin', '9924553302', 'dhavalmca30@gmail.com', '$2y$10$q5lp/5VFNgiQbtHhjmuGX.PFozp24nKfsDQ2clH59JfhvSZXmxXKS', '$2y$10$A0WrOphijjSrCLQH8kEIxe6xzCr2qpXNcF2J2PqEv5ITBUPzNAVt6', NULL, 0, NULL, NULL, NULL, '2022-08-01 05:29:53', '2022-08-01 05:29:53'),
(18, 'jay', '1234564646', 'jay@gmail.com', '$2y$10$J.4nDvbJNgoj/bOVr2a4CO8vFsjwp05kHVyhpWDY/xVnOlvO7uut2', '$2y$10$LJyj8Wdg2tdaS0Q8XDKl5.eO9BzSb1WKJIv32NH/QBzda6y4wfAIa', NULL, 0, NULL, NULL, NULL, '2022-08-02 11:17:18', '2022-08-02 11:17:18'),
(25, 'thecbl', NULL, 'thecbl2022@gmail.com', '$2y$10$ZjrwwODwpJTmEuhf65Lgq.nenFi77xqkP7yoT44xbqzdcKyDx8CGe', NULL, NULL, 0, NULL, '116319920478732260751', NULL, '2022-08-03 07:59:12', '2022-08-03 08:53:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerId`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`tournamentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournamentId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
