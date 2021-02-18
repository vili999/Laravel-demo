-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 08:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karabo_data`
--
CREATE DATABASE IF NOT EXISTS `karabo_data` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `karabo_data`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_16_091907_modify_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_number`, `date_of_birth`, `country`) VALUES
(1, 'Веляна Петрова', 'vili999@abv.bg', '2021-02-17 20:23:42', '$2y$10$6k.GGBJnd6q7c7e0GmoGc.FMTqtepDWBI2DOdz82pOflGwD1Z/h1a', '7dCVpXNRIYjXDXBV9gdcD3LD1UFscs4DbSy4QmSLs2IajwPMqU9Z3hGUceF8', '2021-02-16 05:37:32', '2021-02-17 20:23:42', '', '', ''),
(2, 'Веляна Петрова', 'vili4@abv.bg', NULL, '$2y$10$uMGjc.YbXh9KhkY.SAPUm.xgCnl5Bji9aa30Px.B4DzC0NkFTij8.', NULL, '2021-02-16 09:03:23', '2021-02-16 09:03:23', '99', '99', 'Bulgaria'),
(3, 'Веляна Петрова', 'vili5@abv.bg', NULL, '$2y$10$Io4N6sAkb0GWyG8myVTJueLfSDNaJUq9wBZ2yfN0DQyTH/vWomKHa', NULL, '2021-02-16 13:50:43', '2021-02-16 13:50:43', '99', '99', 'Bulgaria'),
(4, 'Веляна Петрова', 'vil7@abv.bg', NULL, '$2y$10$yxPyvpUyC1mZ1xY5ITpA4Olp/wGlStNrBDoDpfq8w1eBp/0jVTR3y', NULL, '2021-02-16 13:52:21', '2021-02-16 13:52:21', '999', '999', 'Bulgaria'),
(5, 'Веляна Петрова', 'vili1@abv.bg', NULL, '$2y$10$rmcRzTxj5mB5ARt67gf8p.r0dxBdsMl6USEnnisn8Z6dJxL97wA7O', NULL, '2021-02-16 17:57:32', '2021-02-16 17:57:32', '99', '99', 'Bulgaria'),
(6, 'Веляна Петрова', 'vili334@abv.bg', NULL, '$2y$10$HeAO6ZyuTtzLyLmsiUs7vOdCEeObGpsJfj6lYO1gbpIkZelcYgniW', NULL, '2021-02-17 05:43:06', '2021-02-17 05:43:06', '99', '99', 'Bulgaria'),
(7, 'Веляна Петрова1', 'vili89999@abv.bg', NULL, '$2y$10$Ard7keW5onJt9xEz1DUFsOBlbKq3.UICvpxOhXhb4OOz/ccb32KWS', NULL, '2021-02-17 06:01:35', '2021-02-17 06:01:35', '999', '99', 'Bulgaria'),
(8, 'Веляна Петрова1', 'vili9@abv.bg', NULL, '$2y$10$IBzdS1Kaev/2ZWggHu.QAu32qouH1brIOa9MyUjnxnxIhA.ac5teq', NULL, '2021-02-17 06:04:11', '2021-02-17 06:04:11', '999', '99', 'Bulgaria'),
(9, 'Веляна Петрова', 'vili10@abv.bg', NULL, '$2y$10$uwlRFR3nJimiHKmaPxbFfuNUwmRTVyPgIZNADdFWtFUsD1.ChGn32', NULL, '2021-02-17 06:05:29', '2021-02-17 06:05:29', '99', '99', 'Bulgaria'),
(10, 'Веляна Петрова2', 'vili11@abv.bg', NULL, '$2y$10$BL1ijuA2MRCnj9Nn1Hvf1eKhGOrqrqpiPvukSvPENogp0pGdNqXiW', NULL, '2021-02-17 06:06:59', '2021-02-17 06:06:59', '99', '99', 'Bulgaria'),
(11, 'Веляна Петрова4', 'vili99@abv.bg', NULL, '$2y$10$p0MT1tat3TSwbNqZQlaDKOi5KvPFTI2Kb9M3nWnbWXrH6/k2Wj/.S', NULL, '2021-02-17 06:10:21', '2021-02-17 06:10:21', '99', '99', 'Bulgaria'),
(12, 'Веляна Петрова4', 'vili12@abv.bg', NULL, '$2y$10$2oIkOGWJ7c1BpZko5/rvAelMi7p2Soo5/z3FuwZTikrE2BCEa99IG', NULL, '2021-02-17 06:12:13', '2021-02-17 06:12:13', '99', '99', 'Bulgaria'),
(13, 'Веляна Петрова4', 'vili913999@abv.bg', NULL, '$2y$10$Tlp8R3AhK6CNuKJwMGs1z.Q8UFz.UYeYk1wC1GToO4Ejj4ZBAui/i', NULL, '2021-02-17 06:15:37', '2021-02-17 06:15:37', '999999', '999', 'Bulgaria'),
(14, 'Веляна Петрова5', 'vili149999@abv.bg', NULL, '$2y$10$zHoiP.ObDKNO1VLsTMwCJu44OC/VQ83Nl1EHC3GtDkgEownTbeL92', NULL, '2021-02-17 06:22:46', '2021-02-17 06:22:46', '99', '99', 'Bulgaria'),
(15, 'Веляна Петрова6', 'vili159999@abv.bg', NULL, '$2y$10$i6JKW2sBsbJTVwaPYIE7HO0HnmsojD7stliP7jZJZUM6d4x8rhiyO', NULL, '2021-02-17 06:24:47', '2021-02-17 06:24:47', '9999', '999', 'Bulgaria'),
(16, 'Веляна Петров7а', 'vili992399@abv.bg', NULL, '$2y$10$rYNIVFMrS5YGdyWoRQlTG.89e.UEe.ySIvcNRWS3squGVJhxaCRmC', NULL, '2021-02-17 06:27:19', '2021-02-17 06:27:19', '9', '9', 'Bulgaria'),
(17, 'Веляна Петрова6', 'vili9666999@abv.bg', NULL, '$2y$10$dZlJpeH17X/mtpK2O9CKxeEuYEM0x7YHbI.XwooO23d18FcocHYuu', NULL, '2021-02-17 06:30:13', '2021-02-17 06:30:13', '99', '99', 'Bulgaria'),
(18, 'Веляна Петрова77', 'vili999099@abv.bg', NULL, '$2y$10$9TWOf8ZwVVpE3edMHIu/XeIPWU0OKd8pMx/1KWDcNMiHweKBOlrCa', NULL, '2021-02-17 06:34:06', '2021-02-17 06:34:06', '9', '9', 'Bulgaria'),
(19, 'Веляна Петрова89', 'vili9999@abv.bg', '2021-02-17 06:51:24', '$2y$10$CNDqD/ralO8MNKKPVJNxiOZa9/owCf3lDp2WA6Yp2cql7v4uj6N86', NULL, '2021-02-17 06:41:26', '2021-02-17 06:51:25', '99', '99', 'Bulgaria'),
(20, 'vgjhgjhgj', 'hgjhgjgj@jkjklj', '2021-02-17 09:45:10', '$2y$10$.Z13IyKAxvGKhen9KrKp4unYbvwYSeSc5O9rRzFIXQsTsfpj2asSO', NULL, '2021-02-17 09:44:52', '2021-02-17 09:45:10', '14243223424242', '211', 'Bulgaria'),
(21, 'Веляна Петрова', 'vili999999@abv.bg', '2021-02-17 20:08:02', '$2y$10$054b0Q9QxiVdpA9wzEyTz.QLagVF5Hp0hI6WN11ReQ1LqGE5l2ypS', NULL, '2021-02-17 20:07:33', '2021-02-17 20:08:02', '99999999999999999999999999', '9999999999999999', 'Bulgaria'),
(22, 'hgjkhgjg hgjkhgjk', 'vili988899999@abv.bg', '2021-02-17 20:15:22', '$2y$10$.z/HLHg9c2aTAhBidYXOueHEGqkl1X9pXZXWRgFogs2CpXFe4O1QS', NULL, '2021-02-17 20:15:03', '2021-02-17 20:15:22', '9999999999', '99999999999999', 'Bulgaria'),
(23, 'ffhgfhgf fhgfhgf', 'gfghff@gjhgj.jhg', '2021-02-17 20:21:50', '$2y$10$j.tBtu8dYIMsjzbKXq2SlOqq14bCazSgM3QQSQFj.tPlJw2luVgKe', NULL, '2021-02-17 20:21:20', '2021-02-17 20:21:50', '9999999999', '2000-01-01', 'bul');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
