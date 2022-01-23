-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table logchaingroup.com.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.banners: ~5 rows (approximately)
DELETE FROM `banners`;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `photo`, `menu_id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'a4c8de391215a61b10fa0814a8f0ba0d.jpg', 5, 'An international conglomerate     enabling the ecosystem to <span>connect the world together.</span>', '2022-01-20 00:00:00', '2022-01-20 23:43:39'),
	(2, '880f82a827e2100d8a8c23e5e6b55166.jpg', NULL, 'Management     <span>Philosophy</span>', '2022-01-21 00:05:37', '2022-01-21 00:05:37'),
	(3, 'fa73d90f600cf7046a5474ef7d3bdc04.jpg', NULL, 'Our<br/><span>Structure<br>&amp; People</span>', '2022-01-21 00:06:24', '2022-01-21 00:06:24'),
	(4, '99974d8872bb7cc50c8f96799d1b1849.jpg', NULL, 'Global Network', '2022-01-21 00:07:13', '2022-01-21 00:07:13'),
	(5, '3e3f2c909d880d075a6d596a7d983c19.jpg', NULL, 'Contact Us', '2022-01-21 00:07:36', '2022-01-21 00:07:36');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.contents
CREATE TABLE IF NOT EXISTS `contents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `content_section` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.contents: ~11 rows (approximately)
DELETE FROM `contents`;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` (`id`, `title`, `photo`, `photo_mobile`, `description`, `menu_id`, `content_section`, `priority`, `created_at`, `updated_at`) VALUES
	(1, 'Innovative <span>solution provider</span>', 'f4e5e68ae7daa4ad3930263d3bd02b85.jpg', NULL, '<p>With the <strong>high-tech infrastructures and global networks</strong>, Logchain will act as an innovative solution provider for <strong>logistic, aviation, e-commerce and financial services</strong>, bringing the highest operational support to our clients.</p><p>Our priorities are to reduce the manual work overload, spent on cost and time, giving the good quality of customer experiences and creating the desirable outcomes for our clients.</p>', 5, '1', 1, '2022-01-21 00:53:50', '2022-01-21 00:59:52'),
	(2, 'A tailored solution <span>just for you</span>', '5bde3472c93eef00d7cbb8052bc7d16c.jpg', NULL, '<p>We aim to obtain a thorough knowledge of your company in order to identify potential obstacles and possibilities. Only then will we apply our <strong>more than 20 years of logistics knowledge to create a specific design that does more than simply transport the goods:</strong> it also provides you with a significant competitive advantage.&nbsp;</p>', 5, '1', 2, '2022-01-21 00:54:42', '2022-01-21 01:00:03'),
	(3, '<span>Our</span> Ecosystem', '9202f7510833d2e90b2cfe5ba355a815.jpg', NULL, '<p>To address all customer requirements thoroughly, we have segmented our supply chain service into <strong>three major businesses</strong></p>', 5, '2', 1, '2022-01-21 01:01:10', '2022-01-21 01:01:10'),
	(4, '<span>Our</span> Journey', 'bcbaca5011dfdf9c3a23a50699d7a249.png', '1a2b029f06df79c382c1d77a7fd9586d.png', '<p>To address all customer requirements thoroughly, we have segmented<br>our supply chain service into <strong>three major businesses</strong></p>', 5, '3', 1, '2022-01-21 01:02:06', '2022-01-22 15:40:35'),
	(5, 'Photo', '93461dd5d5e7652a3cac896d6040b073.jpg', NULL, NULL, 1, '0', 1, '2022-01-21 01:04:52', '2022-01-22 00:18:01'),
	(6, 'Mission', NULL, NULL, '<p>Bringing access to the global market for all businesses through innovative supply chain solutions customized to their specific circumstance.</p>', 1, '1', 2, '2022-01-21 01:05:14', '2022-01-21 01:05:14'),
	(7, 'Vision', NULL, NULL, '<p>Position ourselves as the Vietnamese supply chain solutions leader for global trade networks.</p>', 1, '1', 3, '2022-01-21 01:05:39', '2022-01-21 01:05:39'),
	(8, 'Customer first', '16c210f69a2358ab2037a92469861bc1.svg', NULL, '<p>We prioritize our customers\' interests, continuously create long-term value to them through our exceptional service and prompt response.&nbsp;</p>', 1, '2', 1, '2022-01-21 01:06:39', '2022-01-21 01:06:39'),
	(9, 'Teamwork', '1e34e1404f6cfa629622bc1f89813b8f.svg', NULL, '<p>By collaborating closely across departments, we streamline processes and lay the groundwork for delivering greater value to customers.</p>', 1, '2', 2, '2022-01-21 01:07:10', '2022-01-21 01:07:10'),
	(10, 'Intergrity', '2805635c5f65c1f91bd096b99ab0e36d.svg', NULL, '<p>Our business is guided by principles of ethics, honesty, and transparency. Everything we say and do is based on our integrity.</p>', 1, '2', 3, '2022-01-21 01:07:30', '2022-01-21 01:07:30'),
	(11, 'Sustainability', 'dcd65b37a0768194c27662539c53eed7.svg', NULL, '<p>We are devoted to continuously enhancing the quality of our services in order to establish ourselves as a trusted partner on the path to the global market.</p>', 1, '2', 4, '2022-01-21 01:07:55', '2022-01-21 01:07:55');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.destination
CREATE TABLE IF NOT EXISTS `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table logchaingroup.com.destination: ~0 rows (approximately)
DELETE FROM `destination`;
/*!40000 ALTER TABLE `destination` DISABLE KEYS */;
/*!40000 ALTER TABLE `destination` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.ecosystems
CREATE TABLE IF NOT EXISTS `ecosystems` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.ecosystems: ~3 rows (approximately)
DELETE FROM `ecosystems`;
/*!40000 ALTER TABLE `ecosystems` DISABLE KEYS */;
INSERT INTO `ecosystems` (`id`, `photo`, `priority`, `logo`, `description`, `link`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'c31d3bea90b9d121172f8de5ff5bc7a1.jpg', 1, '7d7fbed80e59a3515519f5c550b9c122.png', '<p>We will supply the freight forwarding community with the most cost-effective transportation options</p><ul><li><a href="http://127.0.0.1:8000/#">GSA</a></li><li><a href="http://127.0.0.1:8000/#">Charter Service</a></li><li><a href="http://127.0.0.1:8000/#">Ground Handling Agent</a></li></ul>', 'https://logchain.vn/', 0, '2022-01-23 00:19:08', '2022-01-23 00:45:52'),
	(2, '7ed002c3fe8d667fc0050d8c48b90529.jpg', 2, '19d1475b74a44381ff70a0f9ef3afa4b.png', '<p>Extensive industry expertise - Best-in-class customer service - Cutting-edge technology</p><ul><li><a href="http://127.0.0.1:8000/#">Air Freight</a></li><li><a href="http://127.0.0.1:8000/#">Ocean Freight</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-forwarding', 0, '2022-01-23 00:35:37', '2022-01-23 00:46:09'),
	(3, 'bc83089804875c66339484a3f6f1bd35.jpg', 3, 'f574b1b02ed1954347c3125e29fda8ca.png', '<p>Extensive industry expertise - Best-in-class customer service</p><ul><li><a href="http://127.0.0.1:8000/#">Brokerage</a></li><li><a href="http://127.0.0.1:8000/#">Warehouse</a></li><li><a href="http://127.0.0.1:8000/#">Domestic Transportation</a></li><li><a href="http://127.0.0.1:8000/#">Cross Border</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-solutions', 0, '2022-01-23 00:36:05', '2022-01-23 00:46:20');
/*!40000 ALTER TABLE `ecosystems` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.menus: ~5 rows (approximately)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `slug`, `priority`, `banner`, `banner_title`, `banner_mobile`, `is_show`, `status`, `seo_title`, `seo_description`, `seo_thumbnailUrl`, `created_at`, `updated_at`) VALUES
	(1, 'Management Philosophy', 'management-philosophy', 1, '880f82a827e2100d8a8c23e5e6b55166.jpg', 'Management <span>Philosophy</span>', 'f4d0188e18c2a815d9b00dcdde08f5f4.jpg', 0, 0, 'Management Philosophy', 'Management Philosophy', 'ca6cf485b88253fbd64556779be7cb44.jpg', '2022-01-20 21:13:08', '2022-01-23 10:04:51'),
	(2, 'Our Structure & People', 'our-structure-people', 2, 'baf8bb5c9ff098ff00ae1f052bb23c38.jpg', 'Our<br/><span>Structure<br>&amp; People</span>', '0c0475395ec701171031996c1369616e.jpg', 0, 0, NULL, NULL, NULL, '2022-01-20 21:14:40', '2022-01-23 23:02:27'),
	(3, 'Global Network', 'global-network', 3, '99974d8872bb7cc50c8f96799d1b1849.jpg', 'Global Network', 'bb79e990f470e321f70ebe63403aa13b.jpg', 0, 0, NULL, NULL, NULL, '2022-01-20 21:16:35', '2022-01-24 00:36:54'),
	(4, 'Contact', 'contact', 4, '3e3f2c909d880d075a6d596a7d983c19.jpg', 'Contact Us', '3226f10a1387df18a60c0f54cfea915e.jpg', 0, 0, NULL, NULL, NULL, '2022-01-20 21:48:34', '2022-01-24 01:08:32'),
	(5, 'Home', 'home', 0, '01d9d0cb1d18cb45b3f059afa97f5c7f.jpg', 'An international conglomerate enabling the ecosystem to <span>connect the world together.</span>', '7b7dc0553be1338920fbf0e8a166bd77.jpg', 1, 0, NULL, NULL, NULL, '2022-01-20 22:36:25', '2022-01-22 15:00:12');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.migrations: ~11 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.settings: ~0 rows (approximately)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@localhost.com', 1, '2022-01-20 19:21:27', '$2y$10$JYHm0CLQxkrsg11ovsDF2.D0uEKd5Wq2DG.vPNLnbzWW3Vv7ggs8i', NULL, '2022-01-20 19:23:55', '2022-01-20 19:23:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
