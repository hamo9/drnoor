-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 10:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `before_afters`
--

CREATE TABLE `before_afters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `before_afters`
--

INSERT INTO `before_afters` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'beforeAfter/RDVMzJiUi6eXJLdiKBNtZ8h9bTENxfqDUnYyZAMN.jpg', '2022-06-16 21:23:28', '2022-06-16 21:23:28'),
(2, 'beforeAfter/wJK4fNkZNVC1AkCWPk38CbZ0N6P1R4eOfQ8v6nmb.jpg', '2022-06-16 21:24:50', '2022-06-16 21:24:50'),
(3, 'beforeAfter/p9kS44XXsFrEGjRiBu5TVT74jyLLPJot2lrzSvei.jpg', '2022-06-16 21:24:58', '2022-06-16 21:24:58'),
(4, 'beforeAfter/Gr6ovBCyzzNtzFFvLAclRdD1tEmxlpSkpFjldY2n.jpg', '2022-06-16 21:25:06', '2022-06-16 21:25:06'),
(5, 'beforeAfter/hQNqZTwhyU37NfT70NHutvDC0NnHypEBODKVAFZB.jpg', '2022-06-16 21:25:14', '2022-06-16 21:25:14'),
(6, 'beforeAfter/NF98erp3niKCjJ6nzdNVOIhve34CkAkTs1uKODsi.jpg', '2022-06-16 21:25:23', '2022-06-16 21:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remove` tinyint(1) NOT NULL DEFAULT 0,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remove` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `position`, `created_by`, `photo`, `remove`, `created_at`, `updated_at`) VALUES
(1, '{\"fr\":\"Dr \\/ Ahmed El-omda\",\"ar\":\"دكتور \\/ احمد العمدة\",\"en\":\"Dr \\/ Ahmed El-omda\"}', '{\"fr\":\"Donate Bitcoin: 16UQLq1HZ3CNwhvgrarV6pMoA2CDjb4tyF\",\"ar\":\"من منا لم يتحمل جهد بدني شاق\",\"en\":\"Donate Bitcoin: 16UQLq1HZ3CNwhvgrarV6pMoA2CDjb4tyF\"}', '1', 'doctors/qkWBZkNm2R9nS3A7sNgGqbQzLTBmeTsMHLqjRge3.jpg', 0, '2022-06-16 19:32:22', '2022-06-16 19:32:22');

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
-- Table structure for table `image_posts`
--

CREATE TABLE `image_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_posts`
--

INSERT INTO `image_posts` (`id`, `photo`, `post_id`, `created_at`, `updated_at`) VALUES
(5, 'posts/RMUtqQIHsSzigOb0s6PqSwVworuVaXyXYWmMbMvs.jpg', 7, '2022-06-17 21:55:20', '2022-06-17 21:55:20'),
(8, 'posts/LodrULRotbQ598MNj9aVo1Srg3MBpDMCCj8OxXI6.jpg', 7, '2022-06-17 21:55:20', '2022-06-17 21:55:20'),
(9, 'posts/cm5mToG1P92lv2g3sihLhVIQcIxSt3Diz7cigqZp.jpg', 7, '2022-06-17 21:56:09', '2022-06-17 21:56:09'),
(10, 'posts/5YrJna9h7bOd0KpcE6MFVe8nJX1f5IjlhMWRnmXY.jpg', 7, '2022-06-17 21:56:09', '2022-06-17 21:56:09');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2022_04_28_134934_create_categories_table', 2),
(6, '2022_04_29_143728_create_posts_table', 2),
(7, '2022_05_29_223058_create_service_categories_table', 2),
(8, '2022_06_01_111154_create_before_afters_table', 2),
(9, '2022_06_04_175526_create_doctors_table', 2),
(10, '2022_06_17_225953_create_image_posts_table', 3),
(11, '2022_06_18_003045_create_videos_table', 4);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `read_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remove` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `category_id`, `read_count`, `url`, `created_by`, `remove`, `created_at`, `updated_at`, `photo`) VALUES
(1, '{\"fr\":\"Why do we use it?\",\"ar\":\"سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق\",\"en\":\"Why do we use it?\"}', '{\"fr\":\"<p><strong>Lorem Ipsum<\\/strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p><p><br>&nbsp;<\\/p>\",\"ar\":\"<p>&lt;p&gt;و سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة التي لا تشوبها عواقب أليمة أو آخر أراد أن يتجنب الألم الذي ربما تنجم عنه بعض المتعة ؟&nbsp;<br>&nbsp;<\\/p>\",\"en\":\"<p><strong>Lorem Ipsum<\\/strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p><p><br>&nbsp;<\\/p>\"}', 1, 0, 'qgko7i3piKM', '1', 0, '2022-06-16 19:24:01', '2022-06-16 19:24:01', NULL),
(3, '{\"fr\":\"asaadon\",\"ar\":\"ahmed\",\"en\":\"asaadon\"}', '{\"fr\":\"<p>hjkl.,kjlk<\\/p>\",\"ar\":\"<p>hjklhgfghg<\\/p>\",\"en\":\"<p>oipl\';jlk<\\/p>\"}', 2, 0, 'ch1Ev2drEQ8', '1', 0, '2022-06-17 21:28:28', '2022-06-17 21:28:28', NULL),
(7, '{\"fr\":\"kjml,;\",\"ar\":\"fsda\",\"en\":\"hbjnkm\"}', '{\"fr\":\"<p>ghjkl;<\\/p>\",\"ar\":\"<p>gvhjkl<\\/p>\",\"en\":\"<p>hjkl;<\\/p>\"}', 2, 0, 'ch1Ev2drEQ8', '1', 0, '2022-06-17 21:56:09', '2022-06-17 21:56:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remove` tinyint(1) NOT NULL DEFAULT 0,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `category_id`, `created_by`, `photo`, `remove`, `uuid`, `created_at`, `updated_at`) VALUES
(1, '{\"fr\":\"implant dentaire\",\"ar\":\"زراعة اسنان\",\"en\":\"Tooth Implant\"}', 1, '1', 'services_category/VGNMb58Mr1O5wL7nBVf2ChjLRPAJwoyCdCdECbA2.jpg', 0, '118', '2022-06-16 23:05:04', '2022-06-16 23:05:04'),
(2, '{\"fr\":\"dentisterie cosmétique\",\"ar\":\"تجميل الاسنان\",\"en\":\"cosmetic dentistry\"}', 1, '1', 'services_category/tXgMhFkJDZRvNoFqDYAAVOBa8BAzQ1C9bJs99Yr0.jpg', 0, '447', '2022-06-16 23:08:11', '2022-06-16 23:08:11'),
(3, '{\"fr\":\"Blanchiment des dents au laser\",\"ar\":\"تبيض الاسنان بالليزر\",\"en\":\"Laser teeth whitening\"}', 1, '1', 'services_category/urRP4Zhr44vN24XwQBUd2aidFFesXcIivlac14CC.jpg', 0, '719', '2022-06-16 23:16:38', '2022-06-16 23:16:38'),
(4, '{\"fr\":\"Orthodontique\",\"ar\":\"تقويم الاسنان\",\"en\":\"orthodontics\"}', 1, '1', 'services_category/yMANfEsPZzzUA9pRpFWrVT97bNKsDypuFxemqHZa.jpg', 0, '526', '2022-06-16 23:17:56', '2022-06-16 23:17:56'),
(5, '{\"fr\":\"Obturations dentaires cosmétiques\",\"ar\":\"حشوات الاسنان التجميلية\",\"en\":\"Cosmetic dental fillings\"}', 1, '1', 'services_category/Tpb4qIFSPfYgdckzTWhXrPoGyE5RjgiVHNESXYdx.jpg', 0, '480', '2022-06-16 23:20:46', '2022-06-16 23:20:46'),
(6, '{\"fr\":\"couronne et facettes dentaires en céramique\",\"ar\":\"كراون و فينير\",\"en\":\"ceramic dental crown and veeners\"}', 1, '1', 'services_category/MndyCybhiy3XIV2djqpnD6oHArC9OdRU3dxDmTgo.jpg', 0, '117', '2022-06-16 23:25:00', '2022-06-16 23:25:00'),
(7, '{\"fr\":\"les dents des enfants\",\"ar\":\"اسنان الاطفال\",\"en\":\"children\'s teeth\"}', 1, '1', 'services_category/hLUhZjOtw8F7wVh09bB1LNbaVCw6wDMY5otYKtzR.jpg', 0, '364', '2022-06-16 23:26:46', '2022-06-16 23:26:46'),
(8, '{\"fr\":\"Endodontie\",\"ar\":\"علاج العصب\",\"en\":\"Endodontics\"}', 1, '1', 'services_category/ud9taHkZhCfW0gA87heIPSJlYBuJAw22tHZTJPGI.jpg', 0, '907', '2022-06-16 23:27:46', '2022-06-16 23:27:46');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin panel', 'admin@gmail.com', '2021-12-14 14:16:38', '$2y$10$FPmovTfnS/cLFXnUZK51JOcLZ13v1SI1SH7piqQ2upDstlsOaJPPW', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remove` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `before_afters`
--
ALTER TABLE `before_afters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_posts`
--
ALTER TABLE `image_posts`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_categories_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `before_afters`
--
ALTER TABLE `before_afters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_posts`
--
ALTER TABLE `image_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
