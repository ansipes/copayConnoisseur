-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 28, 2017 at 07:07 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `copays`
--

CREATE TABLE `copays` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `generic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copay` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin` int(11) NOT NULL,
  `pcn` int(11) NOT NULL,
  `group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copays`
--

INSERT INTO `copays` (`id`, `brand`, `generic`, `copay`, `description`, `bin`, `pcn`, `group`, `member`, `created_at`, `updated_at`) VALUES
(1, 'Nexium', 'esomeprazole', 15, 'A 24hr solution to acid reflux, now at a low price! Try it today!', 610014, 9999, 'RXSAVE', 'EC991884001', '2017-04-28 04:23:34', '2017-04-28 08:23:53'),
(2, 'Xarelto', 'rivaroxaban', 0, 'An easier alternative to Warfarin, Xarelto can help manage blood clots.', 4336, 8888, 'COUPON', '999199291', '2017-04-28 04:32:49', NULL),
(3, 'Abilify', 'aripiprazole', 10, 'We make it easy to manage mental and financial health.', 391991, 9999, 'GOODRX', '919291991', '2017-04-28 04:36:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `copays`
--
ALTER TABLE `copays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `copays`
--
ALTER TABLE `copays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
