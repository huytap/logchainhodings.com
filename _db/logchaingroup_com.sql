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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.banners: ~5 rows (approximately)
DELETE FROM `banners`;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `photo`, `menu_id`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'a4c8de391215a61b10fa0814a8f0ba0d.jpg', 5, 'An international conglomerate     enabling the ecosystem to <span>connect the world together.</span>', NULL, NULL, '2022-01-19 17:00:00', '2022-01-20 16:43:39'),
	(2, '880f82a827e2100d8a8c23e5e6b55166.jpg', NULL, 'Management     <span>Philosophy</span>', NULL, NULL, '2022-01-20 17:05:37', '2022-01-20 17:05:37'),
	(3, 'fa73d90f600cf7046a5474ef7d3bdc04.jpg', NULL, 'Our<br/><span>Structure<br>&amp; People</span>', NULL, NULL, '2022-01-20 17:06:24', '2022-01-20 17:06:24'),
	(4, '99974d8872bb7cc50c8f96799d1b1849.jpg', NULL, 'Global Network', NULL, NULL, '2022-01-20 17:07:13', '2022-01-20 17:07:13'),
	(5, '3e3f2c909d880d075a6d596a7d983c19.jpg', NULL, 'Contact Us', NULL, NULL, '2022-01-20 17:07:36', '2022-01-20 17:07:36');
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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.contents: ~11 rows (approximately)
DELETE FROM `contents`;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` (`id`, `title`, `photo`, `photo_mobile`, `description`, `menu_id`, `content_section`, `priority`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'Innovative <span>solution provider</span>', 'f4e5e68ae7daa4ad3930263d3bd02b85.jpg', NULL, '<p>With the <strong>high-tech infrastructures and global networks</strong>, Logchain will act as an innovative solution provider for <strong>logistic, aviation, e-commerce and financial services</strong>, bringing the highest operational support to our clients.</p><p>Our priorities are to reduce the manual work overload, spent on cost and time, giving the good quality of customer experiences and creating the desirable outcomes for our clients.</p>', 5, '1', 1, NULL, NULL, '2022-01-20 17:53:50', '2022-01-20 17:59:52'),
	(2, 'A tailored solution <span>just for you</span>', '5bde3472c93eef00d7cbb8052bc7d16c.jpg', NULL, '<p>We aim to obtain a thorough knowledge of your company in order to identify potential obstacles and possibilities. Only then will we apply our <strong>more than 20 years of logistics knowledge to create a specific design that does more than simply transport the goods:</strong> it also provides you with a significant competitive advantage.&nbsp;</p>', 5, '1', 2, NULL, NULL, '2022-01-20 17:54:42', '2022-01-20 18:00:03'),
	(3, '<span>Our</span> Ecosystem', '9202f7510833d2e90b2cfe5ba355a815.jpg', NULL, '<p>To address all customer requirements thoroughly, we have segmented our supply chain service into <strong>three major businesses</strong></p>', 5, '2', 1, NULL, NULL, '2022-01-20 18:01:10', '2022-01-20 18:01:10'),
	(4, '<span>Our</span> Journey', 'bcbaca5011dfdf9c3a23a50699d7a249.png', '1a2b029f06df79c382c1d77a7fd9586d.png', '<p>To address all customer requirements thoroughly, we have segmented<br>our supply chain service into <strong>three major businesses</strong></p>', 5, '3', 1, NULL, NULL, '2022-01-20 18:02:06', '2022-01-22 08:40:35'),
	(5, 'Photo', '93461dd5d5e7652a3cac896d6040b073.jpg', NULL, NULL, 1, '0', 1, NULL, NULL, '2022-01-20 18:04:52', '2022-01-21 17:18:01'),
	(6, 'Mission', NULL, NULL, '<p>Bringing access to the global market for all businesses through innovative supply chain solutions customized to their specific circumstance.</p>', 1, '1', 2, NULL, NULL, '2022-01-20 18:05:14', '2022-01-20 18:05:14'),
	(7, 'Vision', NULL, NULL, '<p>Position ourselves as the Vietnamese supply chain solutions leader for global trade networks.</p>', 1, '1', 3, NULL, NULL, '2022-01-20 18:05:39', '2022-01-20 18:05:39'),
	(8, 'Customer first', '16c210f69a2358ab2037a92469861bc1.svg', NULL, '<p>We prioritize our customers\' interests, continuously create long-term value to them through our exceptional service and prompt response.&nbsp;</p>', 1, '2', 1, NULL, NULL, '2022-01-20 18:06:39', '2022-01-20 18:06:39'),
	(9, 'Teamwork', '1e34e1404f6cfa629622bc1f89813b8f.svg', NULL, '<p>By collaborating closely across departments, we streamline processes and lay the groundwork for delivering greater value to customers.</p>', 1, '2', 2, NULL, NULL, '2022-01-20 18:07:10', '2022-01-20 18:07:10'),
	(10, 'Intergrity', '2805635c5f65c1f91bd096b99ab0e36d.svg', NULL, '<p>Our business is guided by principles of ethics, honesty, and transparency. Everything we say and do is based on our integrity.</p>', 1, '2', 3, NULL, NULL, '2022-01-20 18:07:30', '2022-01-20 18:07:30'),
	(11, 'Sustainability', 'dcd65b37a0768194c27662539c53eed7.svg', NULL, '<p>We are devoted to continuously enhancing the quality of our services in order to establish ourselves as a trusted partner on the path to the global market.</p>', 1, '2', 4, NULL, NULL, '2022-01-20 18:07:55', '2022-01-20 18:07:55');
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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.ecosystems: ~3 rows (approximately)
DELETE FROM `ecosystems`;
/*!40000 ALTER TABLE `ecosystems` DISABLE KEYS */;
INSERT INTO `ecosystems` (`id`, `photo`, `priority`, `logo`, `description`, `link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'c31d3bea90b9d121172f8de5ff5bc7a1.jpg', 1, '7d7fbed80e59a3515519f5c550b9c122.png', '<p>We will supply the freight forwarding community with the most cost-effective transportation options</p><ul><li><a href="http://127.0.0.1:8000/#">GSA</a></li><li><a href="http://127.0.0.1:8000/#">Charter Service</a></li><li><a href="http://127.0.0.1:8000/#">Ground Handling Agent</a></li></ul>', 'https://logchain.vn/', 0, NULL, NULL, '2022-01-22 17:19:08', '2022-01-22 17:45:52'),
	(2, '7ed002c3fe8d667fc0050d8c48b90529.jpg', 2, '19d1475b74a44381ff70a0f9ef3afa4b.png', '<p>Extensive industry expertise - Best-in-class customer service - Cutting-edge technology</p><ul><li><a href="http://127.0.0.1:8000/#">Air Freight</a></li><li><a href="http://127.0.0.1:8000/#">Ocean Freight</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-forwarding', 0, NULL, NULL, '2022-01-22 17:35:37', '2022-01-22 17:46:09'),
	(3, 'bc83089804875c66339484a3f6f1bd35.jpg', 3, 'f574b1b02ed1954347c3125e29fda8ca.png', '<p>Extensive industry expertise - Best-in-class customer service</p><ul><li><a href="http://127.0.0.1:8000/#">Brokerage</a></li><li><a href="http://127.0.0.1:8000/#">Warehouse</a></li><li><a href="http://127.0.0.1:8000/#">Domestic Transportation</a></li><li><a href="http://127.0.0.1:8000/#">Cross Border</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-solutions', 0, NULL, NULL, '2022-01-22 17:36:05', '2022-01-22 17:46:20');
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

-- Dumping structure for table logchaingroup.com.globalnetworks
CREATE TABLE IF NOT EXISTS `globalnetworks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table logchaingroup.com.globalnetworks: ~3 rows (approximately)
DELETE FROM `globalnetworks`;
/*!40000 ALTER TABLE `globalnetworks` DISABLE KEYS */;
INSERT INTO `globalnetworks` (`id`, `title`, `priority`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(3, 'Logistics Association <span>Network</span>', 1, 0, 1, 1, '2022-01-25 14:52:14', '2022-01-25 14:52:14'),
	(4, 'Global <span>Partners', 2, 0, 1, 1, '2022-01-25 16:46:02', '2022-01-25 16:46:02'),
	(5, 'Preferred Carriers', 3, 0, 1, 1, '2022-01-25 16:51:33', '2022-01-25 16:51:33');
/*!40000 ALTER TABLE `globalnetworks` ENABLE KEYS */;

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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.menus: ~5 rows (approximately)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `slug`, `priority`, `banner`, `banner_title`, `banner_mobile`, `is_show`, `status`, `seo_title`, `seo_description`, `seo_thumbnailUrl`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'Management Philosophy', 'management-philosophy', 1, '880f82a827e2100d8a8c23e5e6b55166.jpg', 'Management <span>Philosophy</span>', 'f4d0188e18c2a815d9b00dcdde08f5f4.jpg', 0, 0, 'Management Philosophy', 'Management Philosophy', 'ca6cf485b88253fbd64556779be7cb44.jpg', NULL, NULL, '2022-01-20 14:13:08', '2022-01-23 03:04:51'),
	(2, 'Our Structure & People', 'our-structure-people', 2, 'baf8bb5c9ff098ff00ae1f052bb23c38.jpg', 'Our<br/><span>Structure<br>&amp; People</span>', '0c0475395ec701171031996c1369616e.jpg', 0, 0, NULL, NULL, NULL, NULL, NULL, '2022-01-20 14:14:40', '2022-01-23 16:02:27'),
	(3, 'Global Network', 'global-network', 3, '99974d8872bb7cc50c8f96799d1b1849.jpg', 'Global Network', 'bb79e990f470e321f70ebe63403aa13b.jpg', 0, 0, NULL, NULL, NULL, NULL, NULL, '2022-01-20 14:16:35', '2022-01-23 17:36:54'),
	(4, 'Contact', 'contact', 4, '3e3f2c909d880d075a6d596a7d983c19.jpg', 'Contact Us', '3226f10a1387df18a60c0f54cfea915e.jpg', 0, 0, NULL, NULL, NULL, NULL, NULL, '2022-01-20 14:48:34', '2022-01-23 18:08:32'),
	(5, 'Home', 'home', 0, '01d9d0cb1d18cb45b3f059afa97f5c7f.jpg', 'An international conglomerate enabling the ecosystem to <span>connect the world together.</span>', '7b7dc0553be1338920fbf0e8a166bd77.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, '2022-01-20 15:36:25', '2022-01-22 08:00:12');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.migrations: ~13 rows (approximately)
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
	(11, '2022_01_22_004816_create_settings_table', 5),
	(12, '2022_01_25_151932_create_globalnetworks_table', 6),
	(13, '2022_01_25_152109_create_networkitems_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table logchaingroup.com.network_items
CREATE TABLE IF NOT EXISTS `network_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `globalnetwork_id` bigint(20) unsigned NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `original_name` varchar(100) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Dumping data for table logchaingroup.com.network_items: ~19 rows (approximately)
DELETE FROM `network_items`;
/*!40000 ALTER TABLE `network_items` DISABLE KEYS */;
INSERT INTO `network_items` (`id`, `globalnetwork_id`, `photo`, `original_name`, `file_size`, `file_type`, `priority`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(8, 4, '61f0296c286c9_partner1.png', 'partner1.png', 8701, 'image/png', 0, 0, 1, 1, '2022-01-25 16:46:36', '2022-01-25 16:46:36'),
	(9, 4, '61f0296c831ee_partner2.png', 'partner2.png', 6731, 'image/png', 1, 0, 1, 1, '2022-01-25 16:46:36', '2022-01-25 16:46:36'),
	(10, 3, '61f029d382d9d_net1.png', 'net1.png', 35506, 'image/png', 0, 0, 1, 1, '2022-01-25 16:48:19', '2022-01-25 16:48:19'),
	(11, 3, '61f029d405071_net2.png', 'net2.png', 28141, 'image/png', 1, 0, 1, 1, '2022-01-25 16:48:20', '2022-01-25 16:48:20'),
	(12, 3, '61f029d477f43_net3.png', 'net3.png', 7295, 'image/png', 2, 0, 1, 1, '2022-01-25 16:48:20', '2022-01-25 16:48:20'),
	(13, 5, '61f02a9da90f5_carries1.png', 'carries1.png', 10853, 'image/png', 0, 0, 1, 1, '2022-01-25 16:51:41', '2022-01-25 16:51:41'),
	(14, 5, '61f02a9e492e6_carries2.png', 'carries2.png', 17236, 'image/png', 1, 0, 1, 1, '2022-01-25 16:51:42', '2022-01-25 16:51:42'),
	(15, 5, '61f02a9eae4ae_carries3.png', 'carries3.png', 21530, 'image/png', 2, 0, 1, 1, '2022-01-25 16:51:42', '2022-01-25 16:51:42'),
	(16, 5, '61f02a9f1ba7e_carries4.png', 'carries4.png', 10474, 'image/png', 3, 0, 1, 1, '2022-01-25 16:51:43', '2022-01-25 16:51:43'),
	(17, 5, '61f02a9fae760_carries5.png', 'carries5.png', 19140, 'image/png', 4, 0, 1, 1, '2022-01-25 16:51:43', '2022-01-25 16:51:43'),
	(18, 5, '61f02aa02719c_carries6.png', 'carries6.png', 16897, 'image/png', 5, 0, 1, 1, '2022-01-25 16:51:44', '2022-01-25 16:51:44'),
	(19, 5, '61f02aa0b5a3b_carries7.png', 'carries7.png', 11530, 'image/png', 6, 0, 1, 1, '2022-01-25 16:51:44', '2022-01-25 16:51:44'),
	(20, 5, '61f02aa133b3b_carries8.png', 'carries8.png', 21705, 'image/png', 7, 0, 1, 1, '2022-01-25 16:51:45', '2022-01-25 16:51:45'),
	(21, 5, '61f02aa1a5c9f_carries9.png', 'carries9.png', 20134, 'image/png', 8, 0, 1, 1, '2022-01-25 16:51:45', '2022-01-25 16:51:45'),
	(22, 5, '61f02aa21e6a9_carries10.png', 'carries10.png', 9168, 'image/png', 9, 0, 1, 1, '2022-01-25 16:51:46', '2022-01-25 16:51:46'),
	(23, 5, '61f02ab86d670_carries11.png', 'carries11.png', 11214, 'image/png', 10, 0, 1, 1, '2022-01-25 16:52:08', '2022-01-25 16:52:08'),
	(24, 5, '61f02ab8dea4c_carries12.png', 'carries12.png', 10217, 'image/png', 11, 0, 1, 1, '2022-01-25 16:52:08', '2022-01-25 16:52:08'),
	(25, 5, '61f02ab943f90_carries13.png', 'carries13.png', 8112, 'image/png', 12, 0, 1, 1, '2022-01-25 16:52:09', '2022-01-25 16:52:09'),
	(26, 5, '61f02ab9a29c0_carries14.png', 'carries14.png', 4416, 'image/png', 13, 0, 1, 1, '2022-01-25 16:52:09', '2022-01-25 16:52:09');
/*!40000 ALTER TABLE `network_items` ENABLE KEYS */;

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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table logchaingroup.com.settings: ~7 rows (approximately)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `key`, `value`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'owner', 'Louis Vu', 0, NULL, NULL, NULL, NULL),
	(2, 'job_title', 'Chairman', 0, NULL, NULL, NULL, NULL),
	(3, 'contact_email', 'louisvu@logchaingroup.com', 0, NULL, NULL, NULL, NULL),
	(4, 'contact_phone', '(+84) 935 671 368', 0, NULL, NULL, NULL, NULL),
	(5, 'branch_title_1', 'Hanoi Office', 0, NULL, NULL, NULL, NULL),
	(6, 'branch_add_1', '106 Hoang Quoc Viet, Nghia Do, Cau Giay', 0, NULL, NULL, NULL, NULL),
	(7, 'branch_title_2', 'Ho Chi Minh Office', 0, NULL, NULL, NULL, NULL),
	(8, 'branch_add_2', '11 Nguyen Huy Tuong, Ward 6, Binh Thanh District', 0, NULL, NULL, NULL, NULL),
	(9, 'map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6310694662266!2d105.7922946147636!3d21.04744288598829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3aad69ecdb%3A0xe886740e57b9af82!2zMTA2IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1642257709043!5m2!1svi!2s', 0, NULL, NULL, NULL, NULL);
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

-- Dumping data for table logchaingroup.com.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@localhost.com', 1, '2022-01-20 12:21:27', '$2y$10$JYHm0CLQxkrsg11ovsDF2.D0uEKd5Wq2DG.vPNLnbzWW3Vv7ggs8i', NULL, '2022-01-20 12:23:55', '2022-01-20 12:23:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
