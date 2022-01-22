-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 11:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logchaingroup.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `menu_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'a4c8de391215a61b10fa0814a8f0ba0d.jpg', 5, 'An international conglomerate     enabling the ecosystem to <span>connect the world together.</span>', '2022-01-19 17:00:00', '2022-01-20 16:43:39'),
(2, '880f82a827e2100d8a8c23e5e6b55166.jpg', NULL, 'Management     <span>Philosophy</span>', '2022-01-20 17:05:37', '2022-01-20 17:05:37'),
(3, 'fa73d90f600cf7046a5474ef7d3bdc04.jpg', NULL, 'Our<br/><span>Structure<br>&amp; People</span>', '2022-01-20 17:06:24', '2022-01-20 17:06:24'),
(4, '99974d8872bb7cc50c8f96799d1b1849.jpg', NULL, 'Global Network', '2022-01-20 17:07:13', '2022-01-20 17:07:13'),
(5, '3e3f2c909d880d075a6d596a7d983c19.jpg', NULL, 'Contact Us', '2022-01-20 17:07:36', '2022-01-20 17:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `content_section` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `photo`, `photo_mobile`, `description`, `menu_id`, `content_section`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Innovative <span>solution provider</span>', 'f4e5e68ae7daa4ad3930263d3bd02b85.jpg', NULL, '<p>With the <strong>high-tech infrastructures and global networks</strong>, Logchain will act as an innovative solution provider for <strong>logistic, aviation, e-commerce and financial services</strong>, bringing the highest operational support to our clients.</p><p>Our priorities are to reduce the manual work overload, spent on cost and time, giving the good quality of customer experiences and creating the desirable outcomes for our clients.</p>', 5, '1', 1, '2022-01-20 17:53:50', '2022-01-20 17:59:52'),
(2, 'A tailored solution <span>just for you</span>', '5bde3472c93eef00d7cbb8052bc7d16c.jpg', NULL, '<p>We aim to obtain a thorough knowledge of your company in order to identify potential obstacles and possibilities. Only then will we apply our <strong>more than 20 years of logistics knowledge to create a specific design that does more than simply transport the goods:</strong> it also provides you with a significant competitive advantage.&nbsp;</p>', 5, '1', 2, '2022-01-20 17:54:42', '2022-01-20 18:00:03'),
(3, '<span>Our</span> Ecosystem', '9202f7510833d2e90b2cfe5ba355a815.jpg', NULL, '<p>To address all customer requirements thoroughly, we have segmented our supply chain service into <strong>three major businesses</strong></p>', 5, '2', 1, '2022-01-20 18:01:10', '2022-01-20 18:01:10'),
(4, '<span>Our</span> Journey', 'bcbaca5011dfdf9c3a23a50699d7a249.png', '1a2b029f06df79c382c1d77a7fd9586d.png', '<p>To address all customer requirements thoroughly, we have segmented<br>our supply chain service into <strong>three major businesses</strong></p>', 5, '3', 1, '2022-01-20 18:02:06', '2022-01-22 08:40:35'),
(5, 'Photo', '93461dd5d5e7652a3cac896d6040b073.jpg', NULL, NULL, 1, '0', 1, '2022-01-20 18:04:52', '2022-01-21 17:18:01'),
(6, 'Mission', NULL, NULL, '<p>Bringing access to the global market for all businesses through innovative supply chain solutions customized to their specific circumstance.</p>', 1, '1', 2, '2022-01-20 18:05:14', '2022-01-20 18:05:14'),
(7, 'Vision', NULL, NULL, '<p>Position ourselves as the Vietnamese supply chain solutions leader for global trade networks.</p>', 1, '1', 3, '2022-01-20 18:05:39', '2022-01-20 18:05:39'),
(8, 'Customer first', '16c210f69a2358ab2037a92469861bc1.svg', NULL, '<p>We prioritize our customers\' interests, continuously create long-term value to them through our exceptional service and prompt response.&nbsp;</p>', 1, '2', 1, '2022-01-20 18:06:39', '2022-01-20 18:06:39'),
(9, 'Teamwork', '1e34e1404f6cfa629622bc1f89813b8f.svg', NULL, '<p>By collaborating closely across departments, we streamline processes and lay the groundwork for delivering greater value to customers.</p>', 1, '2', 2, '2022-01-20 18:07:10', '2022-01-20 18:07:10'),
(10, 'Intergrity', '2805635c5f65c1f91bd096b99ab0e36d.svg', NULL, '<p>Our business is guided by principles of ethics, honesty, and transparency. Everything we say and do is based on our integrity.</p>', 1, '2', 3, '2022-01-20 18:07:30', '2022-01-20 18:07:30'),
(11, 'Sustainability', 'dcd65b37a0768194c27662539c53eed7.svg', NULL, '<p>We are devoted to continuously enhancing the quality of our services in order to establish ourselves as a trusted partner on the path to the global market.</p>', 1, '2', 4, '2022-01-20 18:07:55', '2022-01-20 18:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `available` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ecosystems`
--

CREATE TABLE `ecosystems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seo_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_thumbnailUrl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `priority`, `banner`, `banner_title`, `banner_mobile`, `is_show`, `status`, `seo_title`, `seo_description`, `seo_thumbnailUrl`, `created_at`, `updated_at`) VALUES
(1, 'Management Philosophy', 'management-philosophy', 1, '880f82a827e2100d8a8c23e5e6b55166.jpg', 'Management <span>Philosophy</span>', NULL, 0, 0, 'Management Philosophy', 'Management Philosophy', 'ca6cf485b88253fbd64556779be7cb44.jpg', '2022-01-20 14:13:08', '2022-01-21 17:22:20'),
(2, 'Our Structure & People', 'our-structure-people', 2, 'baf8bb5c9ff098ff00ae1f052bb23c38.jpg', 'Our<br/><span>Structure<br>&amp; People</span>', NULL, 0, 0, NULL, NULL, NULL, '2022-01-20 14:14:40', '2022-01-20 17:26:38'),
(3, 'Global Network', 'global-network', 3, '99974d8872bb7cc50c8f96799d1b1849.jpg', 'Global Network', NULL, 0, 0, NULL, NULL, NULL, '2022-01-20 14:16:35', '2022-01-21 16:24:00'),
(4, 'Contact', 'contact', 4, '3e3f2c909d880d075a6d596a7d983c19.jpg', 'Contact Us', NULL, 0, 0, NULL, NULL, NULL, '2022-01-20 14:48:34', '2022-01-20 17:29:24'),
(5, 'Home', 'home', 0, '01d9d0cb1d18cb45b3f059afa97f5c7f.jpg', 'An international conglomerate enabling the ecosystem to <span>connect the world together.</span>', '7b7dc0553be1338920fbf0e8a166bd77.jpg', 1, 0, NULL, NULL, NULL, '2022-01-20 15:36:25', '2022-01-22 08:00:12');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_06_095410_create_testers', 1),
(6, '2021_12_06_095456_create_branches', 1),
(7, '2022_01_20_192858_create_banners_table', 2),
(8, '2022_01_20_195730_create_menus_table', 3),
(9, '2022_01_21_003246_create_contents_table', 4),
(10, '2022_01_22_000647_create_ecosystems_table', 5),
(11, '2022_01_22_004816_create_settings_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@localhost.com', 1, '2022-01-20 12:21:27', '$2y$10$JYHm0CLQxkrsg11ovsDF2.D0uEKd5Wq2DG.vPNLnbzWW3Vv7ggs8i', NULL, '2022-01-20 12:23:55', '2022-01-20 12:23:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecosystems`
--
ALTER TABLE `ecosystems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecosystems`
--
ALTER TABLE `ecosystems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
