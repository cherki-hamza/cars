-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2020 at 10:16 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.3.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `carinfos`
--

CREATE TABLE `carinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_date_construction` date NOT NULL,
  `marque_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carinfos`
--

INSERT INTO `carinfos` (`id`, `car_price`, `car_photo`, `car_distance`, `car_date_construction`, `marque_id`, `city_id`, `country_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, '600000', 'cars-img/LWsK2PYxFoOJ2S0uzt09Vhhcx6BcHBBJK0HQqGJK.jpeg', '700000', '2020-07-10', 1, 1, 1, 1, '2020-07-23 13:27:23', '2020-07-26 16:39:35'),
(8, '60000', 'cars-img/lZzHBkW3c0KnMMngSJ1gCFuefDIl5q5VzIEEmN3w.jpeg', '300000', '2020-07-04', 4, 3, 1, 1, '2020-07-23 13:27:52', '2020-07-23 13:27:52'),
(9, '30000', 'cars-img/zx6sl55FZ1xkVztulsHyglAbygMgYp45wbOiHfQf.jpeg', '890000', '2020-07-13', 7, 7, 2, 1, '2020-07-23 13:31:48', '2020-07-23 13:31:48'),
(12, '362222', 'cars-img/7D58aHPZUjJgB4BIxEQ2ZaWiriCcWerTW7EJsYkr.png', '380000', '2020-07-26', 3, 8, 2, 1, '2020-07-23 17:45:16', '2020-07-23 17:45:16'),
(13, '56321000', 'cars-img/2qIepCPP73Rl1AEna6bYTvlS4nXmaq3RhmOJcMEd.jpeg', '5500000', '2020-06-27', 6, 14, 3, 1, '2020-07-23 17:45:52', '2020-07-23 17:45:52'),
(14, '870000', 'cars-img/sYQW6JPvo5uVHG2T7BJPvauGMnUbSDww3DRIhn37.jpeg', '730000', '2020-07-05', 3, 4, 1, 1, '2020-07-23 17:47:10', '2020-07-23 17:47:10'),
(15, '600000', 'cars-img/DRPW4OKsEYJvETt5Qozwx4d3Sn9Pzo3t9hgEBUKr.jpeg', '700000', '2020-07-01', 1, 4, 1, 1, '2020-07-25 11:48:45', '2020-07-25 11:48:45'),
(16, '360000', 'cars-img/LUsgWNGPNNBPxdrKztwfbziWZVRTiyZ2L90Y3ztM.jpeg', '520000', '2020-07-05', 7, 12, 3, 1, '2020-07-25 16:31:47', '2020-07-25 16:31:47'),
(18, '300000', 'cars-img/TPxpuhbmOpf93R6NwiYUENvWEuwfmwAO4qYWVN2o.jpeg', '530000', '2020-07-09', 1, 1, 1, 1, '2020-07-26 19:14:13', '2020-07-26 19:14:13'),
(19, '5000', 'cars-img/9eLR8UQkaMu6HbCdjupWTdVtoutO7EXXA9GxhCIp.png', '5000000', '2020-07-09', 1, 1, 1, 1, '2020-07-26 19:15:37', '2020-07-26 19:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'france', '2020-07-22 23:25:08', '2020-07-22 23:25:08'),
(2, 'morocco', '2020-07-22 23:25:11', '2020-07-22 23:25:11'),
(3, 'espagne', '2020-07-22 23:25:16', '2020-07-22 23:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

CREATE TABLE `marques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marque_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`id`, `marque_name`, `created_at`, `updated_at`) VALUES
(1, 'Audi A1', '2020-07-23 00:34:09', '2020-07-23 00:34:09'),
(2, 'Audi A2', '2020-07-23 00:34:14', '2020-07-23 00:34:14'),
(3, 'Audi A3', '2020-07-23 00:34:21', '2020-07-23 00:34:21'),
(4, 'BMW 120', '2020-07-23 00:34:27', '2020-07-23 00:34:27'),
(5, 'BMW 220', '2020-07-23 00:34:38', '2020-07-23 00:34:38'),
(6, 'BMW X4', '2020-07-23 00:34:42', '2020-07-23 00:34:42'),
(7, 'Vw Golf', '2020-07-23 00:34:47', '2020-07-23 00:34:47'),
(8, 'Vw Polo', '2020-07-23 00:34:51', '2020-07-23 00:34:51');

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
(4, '2020_07_18_133137_create_carinfos_table', 1),
(5, '2020_07_18_133209_create_regions_table', 1),
(6, '2020_07_18_133223_create_marques_table', 1),
(7, '2020_07_20_231955_create_countries_table', 1),
(8, '2020_07_20_232056_create_cities_table', 1),
(9, '2020_07_21_170104_create_profiles_table', 1);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `about`, `picture`, `facebook`, `email`, `tel`, `created_at`, `updated_at`) VALUES
(1, 1, 'i\'m a developer web full stack 2020', 'http://gravatar.com/avatar/3183058c307a193130e3ca2ae367dd75', 'https://facebook.com/cherki-hamza', NULL, '0637806939', '2020-07-22 21:16:19', '2020-07-22 23:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region_name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Paris', 1, '2020-07-22 23:59:12', '2020-07-22 23:59:12'),
(2, 'Tours', 1, '2020-07-22 23:59:40', '2020-07-22 23:59:40'),
(3, 'Lyon', 1, '2020-07-23 00:00:00', '2020-07-23 00:00:00'),
(4, 'Lille', 1, '2020-07-23 00:00:06', '2020-07-23 00:00:06'),
(5, 'Nime', 1, '2020-07-23 00:00:12', '2020-07-23 00:00:12'),
(6, 'Tanger', 2, '2020-07-23 00:00:38', '2020-07-23 00:31:39'),
(7, 'casablanca', 2, '2020-07-23 00:00:49', '2020-07-23 00:00:49'),
(8, 'Rabat', 2, '2020-07-23 00:00:59', '2020-07-23 00:00:59'),
(9, 'Asila', 2, '2020-07-23 00:01:08', '2020-07-23 00:01:08'),
(10, 'Titoin', 2, '2020-07-23 00:01:15', '2020-07-23 00:01:15'),
(11, 'Madrid', 3, '2020-07-23 00:40:18', '2020-07-23 00:40:18'),
(12, 'Barcelone', 3, '2020-07-23 00:40:29', '2020-07-23 00:40:29'),
(13, 'Sevile', 3, '2020-07-23 00:40:43', '2020-07-23 00:40:43'),
(14, 'kortoba', 3, '2020-07-23 00:41:17', '2020-07-23 00:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('writer','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'writer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cherki hamza', 'cherki0hamza@gmail.com', 'admin', NULL, '$2y$10$XjBj4oQqAHg.smaT2a3vKuv4y2mpOcpcYaUxUf26MhrPoWLfgamSu', 'fmVJAHTZCCVCZp1n3bwa7qG7TSFSExwuXKDiwrGy0XaG2UCrw214Lxz2Bqo5', '2020-07-22 21:16:19', '2020-07-22 21:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carinfos`
--
ALTER TABLE `carinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carinfos`
--
ALTER TABLE `carinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
