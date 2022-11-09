-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 28, 2022 lúc 01:52 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `logchaingroup`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `photo`, `menu_id`, `title`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'a4c8de391215a61b10fa0814a8f0ba0d.jpg', 5, 'An international conglomerate     enabling the ecosystem to <span>connect the world together.</span>', NULL, NULL, NULL, '2022-01-19 17:00:00', '2022-01-20 16:43:39'),
(2, '880f82a827e2100d8a8c23e5e6b55166.jpg', NULL, 'Management     <span>Philosophy</span>', NULL, NULL, NULL, '2022-01-20 17:05:37', '2022-01-20 17:05:37'),
(3, 'fa73d90f600cf7046a5474ef7d3bdc04.jpg', NULL, 'Our<br/><span>Structure<br>&amp; People</span>', NULL, NULL, NULL, '2022-01-20 17:06:24', '2022-01-20 17:06:24'),
(4, '99974d8872bb7cc50c8f96799d1b1849.jpg', NULL, 'Global Network', NULL, NULL, NULL, '2022-01-20 17:07:13', '2022-01-20 17:07:13'),
(5, '3e3f2c909d880d075a6d596a7d983c19.jpg', NULL, 'Contact Us', NULL, NULL, NULL, '2022-01-20 17:07:36', '2022-01-20 17:07:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contents`
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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contents`
--

INSERT INTO `contents` (`id`, `title`, `photo`, `photo_mobile`, `description`, `menu_id`, `content_section`, `priority`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Investment Strategy', '5bde3472c93eef00d7cbb8052bc7d16c.jpg', NULL, '<p>We aim to establish a complete supply chain ecosystem that provides regular income distributions and long-term capital appreciation through acquisitions or partnerships with multi-faceted supply chain companies, in accordance with the four strategic investment pillars described below.</p>', 4, '1', 1, NULL, NULL, '2022-01-20 17:54:42', '2022-06-24 02:49:23'),
(3, 'Supply Chain', '37fb32a629db64a2a06870d057cbcc3d.png', '2bcc4ec63c31141d4a1dab0244b52bf0.png', '<p>Prioritize fulfilling effective end-to-end supply chain and focus on identifying environmentally friendly and efficient alternative solutions.</p>', 4, '2', 1, NULL, NULL, '2022-01-20 18:01:10', '2022-06-24 02:51:00'),
(4, 'Milestones', 'd9cedb3e17aada6cd8c5e5781f5b1026.png', '7be6d747b790ffb631ab3df08dd16902.png', NULL, 5, '3', 1, NULL, NULL, '2022-01-20 18:02:06', '2022-06-23 14:32:55'),
(5, 'Logistics | Aviation', 'd1563c83a399337289f13048d82ba9d8.png', NULL, '<p>https://logchain.vn</p>', 5, '4', 1, NULL, NULL, '2022-01-20 18:04:52', '2022-06-23 14:42:36'),
(6, 'Mission', 'a03305951e96d91842773ec5c3f6835d.png', '91a07b6d6621dec3400a40f5fe226ca1.jpg', '<ul><li>Adopt and implement new technologies across supply chain segments and operating systems.</li><li>Provide smart initiatives with the goal of delivering effective and efficient business results.</li><li>Strengthen corporate resources (capital and personnel) and enrich asset portfolio.</li><li>Enhance investment portfolio value by partnering/acquiring potential &amp; relevant companies.</li><li>Support &amp; apply eco-friendly approach, following international green guidelines.</li></ul>', 1, '1', 2, NULL, NULL, '2022-01-20 18:05:14', '2022-06-24 01:46:08'),
(8, 'Customer first', '16c210f69a2358ab2037a92469861bc1.svg', NULL, '<p>We prioritize our customers\' interests, continuously create long-term value to them through our exceptional service and prompt response.&nbsp;</p>', 1, '2', 1, NULL, NULL, '2022-01-20 18:06:39', '2022-01-20 18:06:39'),
(9, 'Teamwork', '1e34e1404f6cfa629622bc1f89813b8f.svg', NULL, '<p>By collaborating closely across departments, we streamline processes and lay the groundwork for delivering greater value to customers.</p>', 1, '2', 2, NULL, NULL, '2022-01-20 18:07:10', '2022-01-20 18:07:10'),
(10, 'Intergrity', '2805635c5f65c1f91bd096b99ab0e36d.svg', NULL, '<p>Our business is guided by principles of ethics, honesty, and transparency. Everything we say and do is based on our integrity.</p>', 1, '2', 3, NULL, NULL, '2022-01-20 18:07:30', '2022-01-20 18:07:30'),
(11, 'Sustainability', 'dcd65b37a0768194c27662539c53eed7.svg', NULL, '<p>We are devoted to continuously enhancing the quality of our services in order to establish ourselves as a trusted partner on the path to the global market.</p>', 1, '2', 4, NULL, NULL, '2022-01-20 18:07:55', '2022-01-20 18:07:55'),
(12, 'Mr. Quan Vu <span>Chairman - CEO</span>', NULL, NULL, '<ul><li>C-Suite Engagement, Strategist</li><li>Aviation, Industrial Properties, M&amp;A, Fund &amp; Assets Management</li><li>21+ Years of Global Supply Chain Executive</li></ul>', 2, '1', 1, NULL, NULL, '2022-01-26 10:37:07', '2022-06-24 02:12:17'),
(13, 'Ms. Ruby Nguyen <span>CFO</span>', 'eb387c14aa092c14a8390f440f6c133d.jpg', NULL, '<ul><li>C - Suite Engagement</li><li>Financial, Investment Consulting</li><li>27+ Years of Global Supply Chain Executive</li></ul>', 2, '2', 1, NULL, NULL, '2022-01-26 11:01:21', '2022-06-24 02:14:15'),
(14, 'Ruby Nguyen', '7ea3e90cfca7ef3734d7af24f59eb1fc.jpg', NULL, '<p>Managing Director</p>', 2, '2', 1, NULL, NULL, '2022-01-26 11:03:04', '2022-01-26 11:03:04'),
(15, 'Dinah Dinh', 'c0b5a0dc3c6f90b65ce2df71f1f8d26a.jpg', NULL, '<p>Finance Controller</p>', 2, '2', 1, NULL, NULL, '2022-01-26 11:03:48', '2022-01-26 11:03:48'),
(16, 'Sylvia Nguyen', '0afe63ddc469dd705720f7a6cad52b52.jpg', NULL, '<p>Human Resource</p>', 2, '2', 1, NULL, NULL, '2022-01-26 11:04:36', '2022-01-26 11:04:36'),
(17, 'Jess Nguyen', '500f5a4dcad03191ab5d13d508688b4c.jpg', NULL, '<p>Hanoi Branch Director</p>', 2, '2', 1, NULL, NULL, '2022-01-26 11:05:01', '2022-01-26 11:05:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ecosystems`
--

CREATE TABLE `ecosystems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ecosystems`
--

INSERT INTO `ecosystems` (`id`, `photo`, `priority`, `logo`, `description`, `link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'c31d3bea90b9d121172f8de5ff5bc7a1.jpg', 1, '7d7fbed80e59a3515519f5c550b9c122.png', '<p>We will supply the freight forwarding community with the most cost-effective transportation options</p><ul><li><a href=\"https://logchain.vn/our-services/gsa/\">GSA</a></li><li><a href=\"https://logchain.vn/our-services/charter-service/\">Charter Service</a></li><li><a href=\"https://logchain.vn/our-services/ground-handling-agent/\">Ground Handling Agent</a></li></ul>', 'https://logchain.vn/', 0, NULL, NULL, '2022-01-22 17:19:08', '2022-01-26 10:18:25'),
(2, '7ed002c3fe8d667fc0050d8c48b90529.jpg', 2, '19d1475b74a44381ff70a0f9ef3afa4b.png', '<p>Extensive industry expertise - Best-in-class customer service - Cutting-edge technology</p><ul><li><a href=\"https://galaxyexpress.vn/galaxy-express-forwarding/air-freight/\">Air Freight</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-forwarding/ocean-freight/\">Ocean Freight</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-forwarding', 0, NULL, NULL, '2022-01-22 17:35:37', '2022-01-26 10:19:01'),
(3, 'bc83089804875c66339484a3f6f1bd35.jpg', 3, 'f574b1b02ed1954347c3125e29fda8ca.png', '<p>Extensive industry expertise - Best-in-class customer service</p><ul><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/brokerage/\">Brokerage</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/warehouse/\">Warehouse</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/domestics-transportation/\">Domestic Transportation</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/cross-border/\">Cross Border</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-solutions', 0, NULL, NULL, '2022-01-22 17:36:05', '2022-01-26 10:20:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `globalnetworks`
--

CREATE TABLE `globalnetworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `globalnetworks`
--

INSERT INTO `globalnetworks` (`id`, `title`, `priority`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Logistics Association <span>Network</span>', 1, 0, 1, 1, '2022-01-25 14:52:14', '2022-01-25 14:52:14'),
(4, 'Global <span>Partners', 2, 0, 1, 1, '2022-01-25 16:46:02', '2022-01-25 16:46:02'),
(5, 'Preferred Carriers', 3, 0, 1, 1, '2022-01-25 16:51:33', '2022-01-25 16:51:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_thumbnailUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `priority`, `banner`, `banner_title`, `banner_description`, `banner_mobile`, `is_show`, `status`, `seo_title`, `seo_description`, `seo_thumbnailUrl`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'About', 'about', 2, 'c6164dd62a526289aa3eb284e20d5e17.jpg', 'Vision', 'To become an opportunity driver for a progressive supply chain in Vietnam and emerging markets.', 'c27d47876418a7027f812c4753e78bfb.jpg', 0, 0, 'About us', 'Management Philosophy', 'ca6cf485b88253fbd64556779be7cb44.jpg', NULL, NULL, '2022-01-20 14:13:08', '2022-06-24 01:40:59'),
(2, 'The team', 'the-team', 2, 'c1a289141e1b11445249a6cb1bbe2d39.jpg', 'The team', NULL, '54b9fc64bfe9004c48f12f0714198d1e.jpg', 0, 0, 'The team', NULL, NULL, NULL, NULL, '2022-01-20 14:14:40', '2022-06-24 02:08:20'),
(3, 'Contact', 'contact', 4, '3e3f2c909d880d075a6d596a7d983c19.jpg', 'Contact Us', NULL, '3226f10a1387df18a60c0f54cfea915e.jpg', 0, 0, NULL, NULL, NULL, NULL, NULL, '2022-01-20 14:48:34', '2022-01-23 18:08:32'),
(4, 'Home', 'home', 0, '48a4d4b0360bf23b2e2fc23da7fc5eeb.jpg', 'The key to unlock<br/>potential for Vietnam’s growing supply chain', 'Armed with sharp industry expertises, instinctive aptitude to discover emerging trends & opportunities for capital growth, balanced by rock-solid financial strategy, we are committed to contribute to the growth of a robust supply chain ecosystem in Vietnam.', '89d5568ee59433d517aee38dcc15fe23.jpg', 1, 0, 'Logchain Holdings', 'logchain holdings', NULL, NULL, NULL, '2022-01-20 15:36:25', '2022-06-28 13:46:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_20_192858_create_banners_table', 1),
(6, '2022_01_20_195730_create_menus_table', 1),
(7, '2022_01_21_003246_create_contents_table', 1),
(8, '2022_01_22_000647_create_ecosystems_table', 1),
(9, '2022_01_22_004816_create_settings_table', 1),
(10, '2022_01_25_151932_create_globalnetworks_table', 1),
(11, '2022_01_25_152109_create_networkitems_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `network_items`
--

CREATE TABLE `network_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `globalnetwork_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `original_name` varchar(100) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `network_items`
--

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `key` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `type`, `key`, `photo`, `value`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'owner', NULL, 'Louis Vu', 0, NULL, NULL, NULL, NULL),
(2, 0, 'job_title', NULL, 'Chairman', 0, NULL, NULL, NULL, NULL),
(3, 0, 'contact_email', NULL, 'louisvu@logchaingroup.com', 0, NULL, NULL, NULL, NULL),
(4, 0, 'contact_phone', NULL, '(+84) 935 671 368', 0, NULL, NULL, NULL, NULL),
(5, 0, 'branch_title_1', NULL, 'Hanoi Office', 0, NULL, NULL, NULL, NULL),
(6, 0, 'branch_add_1', NULL, '106 Hoang Quoc Viet, Nghia Do, Cau Giay', 0, NULL, NULL, NULL, NULL),
(7, 0, 'branch_title_2', NULL, 'Ho Chi Minh Office', 0, NULL, NULL, NULL, NULL),
(8, 0, 'branch_add_2', NULL, '11 Nguyen Huy Tuong, Ward 6, Binh Thanh District', 0, NULL, NULL, NULL, NULL),
(9, 0, 'map', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6310694662266!2d105.7922946147636!3d21.04744288598829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3aad69ecdb%3A0xe886740e57b9af82!2zMTA2IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1642257709043!5m2!1svi!2s', 0, NULL, NULL, NULL, NULL),
(10, 0, 'contact_phone_2', NULL, '(+84) 24 666 222 60', 0, NULL, NULL, NULL, NULL),
(11, 0, 'facebook', NULL, 'https://facebook.com', 0, NULL, NULL, NULL, NULL),
(12, 0, 'linkedin', NULL, 'https://linkedin.com', 0, NULL, NULL, NULL, NULL),
(13, 3, 'logo', '4094427c34d3092c9d2d43ab177fa2aa.png', 'Logo', 0, NULL, NULL, NULL, NULL),
(14, 3, 'logo_footer', '7d84b166759e4f7049d6847b60e68b8d.png', 'Logo footer', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@logchaingroup.com', 1, '2022-05-20 14:28:02', '$2y$10$JYHm0CLQxkrsg11ovsDF2.D0uEKd5Wq2DG.vPNLnbzWW3Vv7ggs8i', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ecosystems`
--
ALTER TABLE `ecosystems`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `globalnetworks`
--
ALTER TABLE `globalnetworks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `network_items`
--
ALTER TABLE `network_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `ecosystems`
--
ALTER TABLE `ecosystems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `globalnetworks`
--
ALTER TABLE `globalnetworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `network_items`
--
ALTER TABLE `network_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
