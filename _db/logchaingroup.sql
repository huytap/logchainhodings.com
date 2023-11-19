-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 19, 2023 lúc 04:31 PM
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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `photo`, `menu_id`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'a4c8de391215a61b10fa0814a8f0ba0d.jpg', 5, 'An international conglomerate     enabling the ecosystem to <span>connect the world together.</span>', NULL, NULL, '2022-01-20 00:00:00', '2022-01-20 23:43:39'),
(2, '880f82a827e2100d8a8c23e5e6b55166.jpg', NULL, 'Management     <span>Philosophy</span>', NULL, NULL, '2022-01-21 00:05:37', '2022-01-21 00:05:37'),
(3, 'fa73d90f600cf7046a5474ef7d3bdc04.jpg', NULL, 'Our<br/><span>Structure<br>&amp; People</span>', NULL, NULL, '2022-01-21 00:06:24', '2022-01-21 00:06:24'),
(4, '99974d8872bb7cc50c8f96799d1b1849.jpg', NULL, 'Global Network', NULL, NULL, '2022-01-21 00:07:13', '2022-01-21 00:07:13'),
(5, '3e3f2c909d880d075a6d596a7d983c19.jpg', NULL, 'Contact Us', NULL, NULL, '2022-01-21 00:07:36', '2022-01-21 00:07:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `title_` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `description_` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `content_section` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `img_lang` int(11) DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `images_mobile` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contents`
--

INSERT INTO `contents` (`id`, `title`, `title_`, `photo`, `photo_mobile`, `description`, `description_`, `menu_id`, `content_section`, `priority`, `img_lang`, `images`, `images_mobile`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":null,\"vi\":null}', 'Investment Strategy', NULL, NULL, '{\"en\":\"\\u003Cp\\u003EEstablished in 2021, fully-owned by its managing partners, armed with sharp industry expertises, instinctive aptitude to discover emerging trends \\u0026amp; opportunities for capital growth, the Holdings secured and consolidated a diversified shareholding portfolio.\\u0026nbsp;\\u003Cbr\\u003E\\u003Cbr\\u003EFocused investments are carried out directly or via subsidiaries across a wide range of industries and asset classes, including supply chain management, aviation, real estate, and digital transformation.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EĐược thành lập vào năm 2021, thuộc sở hữu hoàn toàn của các đối tác quản lý, với kiến thức chuyên môn sắc bén trong ngành, nhạy bén trong việc khám phá các xu hướng và cơ hội mới để tăng trưởng vốn, Logchain Holdings bảo đảm và củng cố danh mục đầu tư đa dạng.\\u003Cbr\\u003E\\u003Cbr\\u003ECác khoản đầu tư tập trung được thực hiện trực tiếp hoặc thông qua các công ty con trên nhiều ngành và loại tài sản, bao gồm quản lý chuỗi cung ứng, hàng không, bất động sản và chuyển đổi kỹ thuật số.\\u003C/p\\u003E\"}', '<p>We aim to establish a complete supply chain ecosystem that provides regular income distributions and long-term capital appreciation through acquisitions or partnerships with multi-faceted supply chain companies, in accordance with the four strategic investment pillars described below.</p>', 4, '1', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-21 00:53:50', '2022-12-19 11:15:31'),
(2, '{\"en\":\"Supply Chain\",\"vi\":\"Chuỗi cung ứng\"}', 'Supply Chain', 'c495372cbb3ad8b6d070e9284c1eb95e.png', '9c42b893e591643e462dc7680891263d.png', '{\"en\":\"\\u003Cp\\u003EPrioritize fulfilling effective end-to-end supply chain and focus on identifying environmentally friendly and efficient alternative solutions.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EƯu tiên phát triển chuỗi cung ứng đầu-cuối, song song với những giải pháp thân thiện môi trường và tiết kiệm chi chí.\\u003C/p\\u003E\"}', '<p>Prioritize fulfilling effective end-to-end supply chain and focus on identifying environmentally friendly and efficient alternative solutions.</p>', 4, '2', 2, NULL, NULL, NULL, NULL, NULL, '2022-01-21 00:54:42', '2022-11-16 06:09:32'),
(3, '{\"en\":\"Aviation\",\"vi\":\"Hàng không\"}', '<span>Aviation</span>', 'd3da1babc99906c229729a59a2b594f0.png', '4002ab4d70e9aae36a4cf38d8fa34ced.png', '{\"en\":\"\\u003Cp\\u003EFacilitate convenient \\u0026amp; affordable international trade while building a streamlined and reliable network.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EXây dựng mạng lưới kết nối đáng tin cậy, hỗ trợ hoạt động thương mại quốc tế diễn ra dễ dàng, với sự hiệu quả về chi phí.\\u003C/p\\u003E\"}', '<p>Facilitate convenient &amp; affordable international trade while building a streamlined and reliable network.</p>', 4, '2', 2, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:01:10', '2022-12-19 11:19:09'),
(4, '{\"en\":\"Industrial Real Estate\",\"vi\":\"Bất động sản\"}', 'Real Estate', 'a32b4f7dfbf84009ceae06ea35e0a485.png', 'a90725252dcc3201a99787d34307ab6c.png', '{\"en\":\"\\u003Cp\\u003EValue-based investments in logistics real estate projects and assets, such as warehouses, distribution facilities, and fulfillment centers.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EĐầu tư vào các dự án bất động sản logistics quan trọng như kho bãi, cơ sở phân phối hay trung tâm hoàn thiện đơn hàng.\\u003C/p\\u003E\"}', '<p>Value-based investments in logistics real estate projects and assets, such as warehouses, distribution facilities, and fulfillment centers.</p>', 4, '2', 2, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:02:06', '2022-12-19 11:24:04'),
(7, '{\"en\":\"Mission\",\"vi\":\"Sứ mệnh\"}', 'Mission', '647d8746ee8bafd8f09606505ac39181.png', '362c0f129842197e877289c7a9b15fbe.jpg', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EProviding smart initiatives with the goal of delivering effective and efficient business results.\\u003C/li\\u003E\\u003Cli\\u003EMastering in deliver comprehensive strategies for cross border investment, operation \\u0026amp; finance.\\u003C/li\\u003E\\u003Cli\\u003EAdopt and implement new technologies across investment sectors and eco-systems.\\u003C/li\\u003E\\u003Cli\\u003ESupport \\u0026amp; apply eco-friendly approach, following international green guidelines.\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003ECung cấp các sáng kiến thông minh nhằm mang lại kết quả kinh doanh hiệu quả.\\u003C/li\\u003E\\u003Cli\\u003EĐưa ra các chiến lược toàn diện cho hoạt động đầu tư đa quốc gia, vận hành và tài chính.\\u003C/li\\u003E\\u003Cli\\u003EÁp dụng và triển khai các công nghệ mới trong hệ sinh thái và các lĩnh vực đầu tư.\\u003C/li\\u003E\\u003Cli\\u003EHỗ trợ và áp dụng cách tiếp cận thân thiện với môi trường, tuân theo các nguyên tắc xanh quốc tế.\\u003C/li\\u003E\\u003C/ul\\u003E\"}', '<ul><li>Adopt and implement new technologies across supply chain segments and operating systems.</li><li>Provide smart initiatives with the goal of delivering effective and efficient business results.</li><li>Strengthen corporate resources (capital and personnel) and enrich asset portfolio.</li><li>Enhance investment portfolio value by partnering/acquiring potential &amp; relevant companies.</li><li>Support &amp; apply eco-friendly approach, following international green guidelines.</li></ul>', 1, '1', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:05:39', '2022-12-21 07:58:33'),
(8, '{\"en\":\"Integrity and Transparency\",\"vi\":\"Chính trực\\u003Cbr\\u003E\\u0026 Minh bạch\"}', 'Integrity and Transparency', '9e1ff57f84d79f4b901ea0d767cd997e.png', 'b4a5afac777a86bc190e0da200abc412.png', '{\"en\":null,\"vi\":null}', NULL, 1, '2', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:06:39', '2022-12-20 03:52:35'),
(9, '{\"en\":\"Resourceful\",\"vi\":\"Giàu tiềm lực\"}', 'Resourceful', '8b7aa8d7314b1e0c8899193112cf94a5.png', 'e2138e429d97881e8f4bdf15f0ae431f.png', '{\"en\":null,\"vi\":null}', NULL, 1, '2', 2, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:07:10', '2022-12-20 03:51:48'),
(10, '{\"en\":\"Innovative\\u003Cbr/\\u003Eand Tech-driven\",\"vi\":\"Đổi mới công nghệ\"}', 'Innovative<br/>and Tech-driven', 'fd274e3a3436cc836a943f7c470e1773.png', 'ef61847f77eddab54f04fd3368bdcc1d.png', '{\"en\":null,\"vi\":null}', NULL, 1, '2', 3, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:07:30', '2022-12-20 03:53:37'),
(11, '{\"en\":\"Insightful\",\"vi\":\"Thấu hiểu\"}', 'Insightful', 'bb99dd2ba1e7f3ea3e83a2fbb6adde51.png', '6192b35f9bb89cec9938240266b2d7d9.png', '{\"en\":null,\"vi\":null}', NULL, 1, '2', 4, NULL, NULL, NULL, NULL, NULL, '2022-01-21 01:07:55', '2022-12-20 03:54:05'),
(12, '{\"en\":\"Sustainability\",\"vi\":\"Bền vững\"}', 'Sustainability', 'b3dba1eccfa0e2ef9f77dcfb1208815a.png', '525c8be35e723c4bd3aff9817117fa09.png', '{\"en\":null,\"vi\":null}', NULL, 1, '2', 5, NULL, NULL, NULL, NULL, NULL, '2022-01-26 17:37:07', '2022-12-20 03:54:33'),
(13, '{\"en\":\"H. Chairman \\u0026 Advisor Board Member\\u003Cspan\\u003EDouglas Wee\\u003C/span\\u003E\",\"vi\":\"H. Chairman \\u0026 Advisor Board Member\\u003Cspan\\u003EDouglas Wee\\u003C/span\\u003E\"}', 'To be announced <span>CEO</span>', 'fb89acd361fa3807c411b033a6934df9.jpg', 'b6b0743b571462fc0dc1e06353caca22.jpg', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EChairman, Pacific Airlift\\u003C/li\\u003E\\u003Cli\\u003ESG Representative of Volga-Dnepr Airline\\u003C/li\\u003E\\u003Cli\\u003EExecutive Director, Shuttle Cargo Services (S Pte Ltd.)\\u003C/li\\u003E\\u003Cli\\u003EMarketing Manager, Singapore Technologies Group\\u003C/li\\u003E\\u003Cli\\u003E35+ Years in Aviation Industry\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003EChủ tịch, Pacific Airlift\\u003C/li\\u003E\\u003Cli\\u003EĐại diện của Volga-Dnepr Airline\\u003C/li\\u003E\\u003Cli\\u003ETổng giám đốc, Shuttle Cargo Services (S Pte Ltd.)\\u003C/li\\u003E\\u003Cli\\u003EGiám đốc Marketing, Singapore Technologies Group\\u003C/li\\u003E\\u003Cli\\u003E35+ năm kinh nghiệm trong ngành hàng không\\u003C/li\\u003E\\u003C/ul\\u003E\"}', '<ul><li>C-Suite Engagement, Strategist</li><li>Aviation, Industrial Properties, M&amp;A, Fund &amp; Assets Management</li><li>21+ Years of Global Supply Chain Executive</li></ul>', 2, '1', 1, NULL, NULL, NULL, NULL, NULL, '2022-01-26 18:01:21', '2023-05-18 21:43:12'),
(14, '{\"en\":\"CFO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003ERuby Nguyen\\u003C/span\\u003E\",\"vi\":\"CFO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003ERuby Nguyen\\u003C/span\\u003E\"}', 'Ms. Ruby Nguyen <span>CFO</span>', 'dee8318f7644b2b521e972d96efb0b77.jpg', 'eb458e81dc45bdc769275b839704e003.jpg', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EC - Suite Engagement Financial\\u003C/li\\u003E\\u003Cli\\u003EInvestment Consulting\\u003C/li\\u003E\\u003Cli\\u003E27+ Years of Global Supply Chain Executive\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003EC - Suite Engagement Financial\\u003C/li\\u003E\\u003Cli\\u003ETư vấn đầu tư\\u003C/li\\u003E\\u003Cli\\u003E27+ năm kinh nghiệm Global Supply Chain\\u003C/li\\u003E\\u003C/ul\\u003E\"}', '<ul><li>C - Suite Engagement</li><li>Financial, Investment Consulting</li><li>27+ Years of Global Supply Chain Executive</li></ul>', 2, '2', 2, NULL, NULL, NULL, NULL, NULL, '2022-01-26 18:03:04', '2023-05-18 20:57:12'),
(15, '{\"en\":\"CCO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EBekka Nguyen\\u003C/span\\u003E\",\"vi\":\"CCO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EBekka Nguyen\\u003C/span\\u003E\"}', 'Ms. Bekka Nguyen <span>COO</span>', '7ebacd6d3f84357996c3f81856041af9.jpg', 'eb5e988dbcc073378d526e49bcbdeab5.jpg', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EBusiness Transformation, Client Management\\u003C/li\\u003E\\u003Cli\\u003EOperations and Logistics Leadership\\u003C/li\\u003E\\u003Cli\\u003E15+ Years in Supply Chain Industry\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003EBusiness Transformation, Client Management\\u003C/li\\u003E\\u003Cli\\u003EOperations và Logistics Leadership\\u003C/li\\u003E\\u003Cli\\u003E15+ năm kinh nghiệm trong lĩnh vực Supply Chain\\u003C/li\\u003E\\u003C/ul\\u003E\"}', '<ul><li>Global Sales Management, Business Transformation, Client Management</li><li>Operations and Logistics Leadership</li><li>15+ Years in Supply Chain Industry</li></ul>', 2, '2', 3, NULL, NULL, NULL, NULL, NULL, '2022-01-26 18:03:48', '2023-05-18 20:57:23'),
(17, '{\"en\":\"Quality \\u0026 CSR\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EJess Nguyen\\u003C/span\\u003E\",\"vi\":\"Quality \\u0026 CSR\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EJess Nguyen\\u003C/span\\u003E\"}', 'Ms. Susan Tran <span>Aviation</span>', '3fad77be2983ccb984a28b70119d27d6.png', '6db8f925e2ebb65e823b14a10b7a38fe.png', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003ESupply Chain Management, Aviation\\u003C/li\\u003E\\u003Cli\\u003EGlobal Air Freight Expert and Logistics Leadershi\\u003C/li\\u003E\\u003Cli\\u003E20+ Years in Supply Chain Industry\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003ESupply Chain và Aviation Management\\u003C/li\\u003E\\u003Cli\\u003EGlobal Air Freight Expert và Logistics leadership\\u003C/li\\u003E\\u003Cli\\u003E20+ năm kinh nghiệm trong lĩnh vực Supply Chain\\u003C/li\\u003E\\u003C/ul\\u003E\"}', '<ul><li>Commercial Flight, Charter Broker</li><li>Flight Operations Management</li><li>5* Airlines Operation Set up</li><li>22 Years in Aviation Industry</li></ul>', 2, '2', 5, NULL, NULL, NULL, NULL, NULL, '2022-01-26 18:05:01', '2023-05-19 18:07:05'),
(19, '{\"en\":\"COO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EAnnie Le\\u003C/span\\u003E\",\"vi\":\"COO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EAnnie Le\\u003C/span\\u003E\"}', 'Ms. Annie Le <span>Forwarding</span>', 'fbd7cf088982239e426d3d31631648ec.png', '781ba4da4f894ecfe1541f769b25ccbd.png', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EMaritime, Supply Chain Management\\u003C/li\\u003E\\u003Cli\\u003EGlobal Ocean Freight Expert and Logistics Leadership\\u003C/li\\u003E\\u003Cli\\u003E27+ Years of Global Supply Chain Executive\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003EMaritime, Supply Chain Management\\u003C/li\\u003E\\u003Cli\\u003EGlobal Ocean Freight và Logistics Leadership\\u003C/li\\u003E\\u003Cli\\u003E27+ năm kinh nghiệm Global Supply Chain\\u003C/li\\u003E\\u003C/ul\\u003E\"}', '<ul><li>Maritime, Supply Chain Management</li><li>Global Freight Forwarding and Logistics Leadership</li><li>27 Years in Global Supply Chain Executive</li></ul>', 2, '2', 2, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:21:00', '2023-05-18 21:59:46'),
(20, '{\"en\":\"CMO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EAbra Hoang\\u003C/span\\u003E\",\"vi\":\"CMO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003EAbra Hoang\\u003C/span\\u003E\"}', 'Mr. Abra Tran <span>Corporate Relationship</span>', '27a1ef5c5f5f56b163c614c79c2805d3.jpg', '4229e3e12029af88a09e64931a8a2f9a.jpg', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EChairman, The Hunter Group\\u003C/li\\u003E\\u003Cli\\u003EBusiness Partner and Client Relationship Management\\u003C/li\\u003E\\u003Cli\\u003EBrand Image Management\\u003C/li\\u003E\\u003Cli\\u003E20+ Years in Marketing \\u0026amp; Communication\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003EChủ tịch Hunter Group\\u003C/li\\u003E\\u003Cli\\u003EBusiness Partner và Client Relationship Management\\u003C/li\\u003E\\u003Cli\\u003EBrand image Management\\u003C/li\\u003E\\u003Cli\\u003E20+ năm kinh nghiệm trong ngành Marketing và Truyền thông\\u003C/li\\u003E\\u003C/ul\\u003E\"}', NULL, 2, '2', 4, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:21:27', '2023-05-19 18:02:57'),
(22, '{\"en\":\"E-Logistics\",\"vi\":\"E-Logistics\"}', 'Digital Transformation', 'f693fe64fbb7b37e5c7a19c0aa8b3059.png', 'f268de385d224ff7b6d2a2a8258e93ba.png', '{\"en\":\"\\u003Cp\\u003EInvest in Software as a Service (SaaS) that offer disruptive and transformative supply chain solutions.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EĐầu tư vào những dịch vụ phần mềm nổi bật (SaaS), với mong muốn tạo ra những giải pháp chuỗi cung ứng đột phá và hiệu quả.\\u003C/p\\u003E\"}', '<p>Invest in Software as a Service (SaaS) that offer disruptive and transformative supply chain solutions.</p>', 4, '2', 4, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:55:08', '2022-12-19 11:23:04'),
(23, '{\"en\":\"Supply Chain\",\"vi\":\"Chuỗi cung ứng\"}', 'Aviation', '4dfa4c425baffdf5daa1cde2b4d7e581.png', NULL, '{\"en\":\"\\u003Cp\\u003EPrioritize fulfilling effective end-to-end supply chain and focus on identifying environmentally friendly and efficient alternative solutions.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EƯu tiên phát triển chuỗi cung ứng đầu-cuối, song song với những giải pháp thân thiện môi trường và tiết kiệm chi chí.\\u003C/p\\u003E\"}', '<p>https://logchain.vn</p>', 4, '4', 1, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:56:13', '2022-11-16 06:01:47'),
(24, NULL, 'International Freight Forwarding & Domestic Solutions', '016eaf78e1d0062a2a42e285398ffd61.png', NULL, NULL, '<p>https://galaxyexpress.vn</p>', 4, '4', 2, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:56:44', '2022-07-21 12:00:05'),
(25, NULL, 'Air Freight Capacity Provider', 'af1f208488b6d8fed04580d15ded60ad.png', NULL, NULL, '<p>#</p>', 4, '4', 3, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:57:11', '2022-07-21 12:03:25'),
(26, NULL, 'Tech Solutions | Saas Product', 'c3c9e17d681b6e4aed117c213854acb7.png', NULL, NULL, '<p>#</p>', 4, '4', 5, NULL, NULL, NULL, NULL, NULL, '2022-06-24 02:57:36', '2022-07-21 12:01:34'),
(27, '{\"en\":\"Milestones\",\"vi\":\"Cột mốc phát triển\"}', 'Milestones', '0f487fa05af919e669bf6b94101f70e7.png', '04a3c179e4411bdf770f5c5ad05b3850.png', '{\"en\":null,\"vi\":null}', NULL, 4, '3', 1, 1, '{\"en\":\"e5ab4eb4072fdc0b53e6157e32a214c0.png\",\"vi\":\"2258ee260ba8798db2006f001df2b34c.png\"}', '{\"en\":\"e26b3f2f2a2d4d28bafc1ad1ff57666e.png\",\"vi\":\"379d77db5f007a945308cb98457a9f46.png\"}', NULL, NULL, '2022-06-24 03:02:32', '2022-11-16 06:02:25'),
(28, NULL, 'Property Developer', 'b5338791738f1e5624ec5371fe796c65.png', NULL, NULL, NULL, 4, '4', 4, NULL, NULL, NULL, NULL, NULL, '2022-07-21 12:01:57', '2022-07-21 12:03:14'),
(29, '{\"en\":\"Scopes and responsibilities commitment\",\"vi\":\"Phạm vi và trách nhiệm cam kết\"}', NULL, NULL, NULL, '{\"en\":\"\\u003Cp\\u003EWe have a broad investment scope that supports multi-faceted fields. We categorize our investment activities and define clear responsibilities accordingly for all investment \\u0026amp; business agreements.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EPhạm vi đầu tư rộng và hỗ trợ nhiều lĩnh vực. Phân loại các hoạt động đầu tư và xác định rõ ràng trách nhiệm với các thỏa thuận đầu tư kinh doanh.\\u003C/p\\u003E\"}', NULL, 1, '3', 1, NULL, NULL, NULL, NULL, NULL, '2022-12-07 23:41:33', '2022-12-20 03:55:36'),
(30, '{\"en\":\"Fair competition\",\"vi\":\"Cạnh tranh lành mạnh\"}', NULL, NULL, NULL, '{\"en\":\"\\u003Cp\\u003EWe support competition that is based on the essential values of products/ services. We do not negotiate or exchange pricing and bidding information, this includes pricing, discounts, promotions, license fees, warranties, and terms and conditions of sale.\\u003C/p\\u003E\\u003Cp\\u003EOur rules of fair competition are also consistent with the letter of the laws. Every supervisor must ensure that marketing, sales and purchasing personnel are aware of the content and spirit of our standards and applicable competition laws.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003ECạnh tranh dựa trên các giá trị của sản phẩm/dịch vụ. Cam kết không đàm phán hoặc trao đổi thông tin về giá cả và đấu thầu, bao gồm giá cả, giảm giá, khuyến mãi, phí giấy phép, bảo hành, điều khoản và điều kiện bán hàng.\\u003C/p\\u003E\\u003Cp\\u003ECác quy tắc cạnh tranh công bằng tuân theo quy định của luật pháp. Tất cả giám sát viên phải đảm bảo hoạt động marketing, mua bán hiểu và tuân thủ theo nội dung, tinh thần của các tiêu chuẩn và luật cạnh tranh hiện hành.\\u003C/p\\u003E\"}', NULL, 1, '3', 2, NULL, NULL, NULL, NULL, NULL, '2022-12-07 23:58:28', '2022-12-20 04:29:27'),
(31, '{\"en\":\"Responsibilities to stakeholders\",\"vi\":\"Trách nhiệm đối với các bên liên quan\"}', NULL, NULL, NULL, '{\"en\":\"\\u003Cp\\u003EWe are responsible to our stakeholders for making decisions in strict accordance with the interests of the Holdings and stakeholder.\\u003C/p\\u003E\\u003Cp\\u003EWe avoid situations where our commitment is divided or appears to be divided. If the situation arise, we are open to to discuss and resolve the resolution.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EChịu trách nhiệm trước cổ đông về việc đưa ra các quyết định phù hợp với lợi ích của Logchain Holdings và của cổ đông.\\u003C/p\\u003E\\u003Cp\\u003ETránh những tình huống mà các cam kết bị chia rẽ hoặc có vẻ như bị chia rẽ. Nếu tình hình phát sinh, chúng tôi sẵn sàng thảo luận và giải quyết.\\u003C/p\\u003E\"}', NULL, 1, '3', 3, NULL, NULL, NULL, NULL, NULL, '2022-12-07 23:59:49', '2022-12-20 04:30:18'),
(32, '{\"en\":\"Transparent information\",\"vi\":\"Minh bạch thông tin\"}', NULL, NULL, NULL, '{\"en\":\"\\u003Cp\\u003EInformation provided about products and services, including the availability and supply, must be accurate, evidence-based as applicable, and presented using transparent, fair and appropriate means.\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EThông tin về các sản phẩm và dịch vụ, bao gồm cả tính sẵn có và nguồn cung cấp, phải chính xác, dựa trên bằng chứng nếu có và được trình bày bằng các phương tiện minh bạch, công bằng và phù hợp.\\u003C/p\\u003E\"}', NULL, 1, '3', 4, NULL, NULL, NULL, NULL, NULL, '2022-12-08 00:00:17', '2022-12-20 04:30:55'),
(33, '{\"en\":\"Data protection and confidentiality\",\"vi\":\"Bảo vệ và bảo mật dữ liệu\"}', NULL, NULL, NULL, '{\"en\":\"\\u003Cp\\u003EWe define the business purpose for which business/ personal information is used and collected, and where possible, use non-identifiable information.\\u003C/p\\u003E\\u003Cp\\u003EWe provide appropriate notice before collecting business information.\\u003C/p\\u003E\\u003Cp\\u003EWe take reasonable steps to protect business/ personal information from loss, misuse, and unauthorized access, disclosure or alteration.\\u0026nbsp;\\u003C/p\\u003E\",\"vi\":\"\\u003Cp\\u003EXác định mục đích kinh doanh mà thông tin kinh doanh/cá nhân được sử dụng và thu thập.\\u003C/p\\u003E\\u003Cp\\u003ECung cấp thông báo phù hợp trước khi thu thập thông tin kinh doanh.\\u003C/p\\u003E\\u003Cp\\u003EThực hiện các bước hợp lý để bảo vệ thông tin doanh nghiệp/cá nhân khỏi bị mất mát, lạm dụng và truy cập trái phép, tiết lộ hoặc thay đổi.\\u003C/p\\u003E\"}', NULL, 1, '3', 5, NULL, NULL, NULL, NULL, NULL, '2022-12-08 00:00:39', '2022-12-20 04:31:43'),
(34, '{\"en\":\"Airline GSA\",\"vi\":\"Airline GSA\"}', NULL, 'f27d5b6655411f42d1c1ec3b25cae3cd.jpg', '0fdf9d0c99cfc58e4fd834b383a67025.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '5', 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:18:51', '2022-12-19 11:26:03'),
(35, '{\"en\":\"Chartering\",\"vi\":\"Chartering\"}', NULL, '0fc56bf6fee796bf5157f35b0d55732f.jpg', 'f4a4bebc4e4eca7d5f94f3fda4492f8e.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '5', 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:24:08', '2022-12-19 11:26:17'),
(36, '{\"en\":\"Airport Operation and Services\",\"vi\":\"Airport Operation and Services\"}', NULL, 'aeb119039c1a417a70c630416aea327d.jpg', '48b45b5c28e8ea621f6094f3f3d143b8.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '5', 3, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:24:55', '2022-12-19 11:26:27'),
(37, '{\"en\":\"Equipment Maintenance\",\"vi\":\"Equipment Maintenance\"}', NULL, 'da035cc69b96ec61959e5a04e1831c83.jpg', 'c41bc1d63ac79420fc2bdbca403bad64.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '5', 4, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:25:39', '2022-12-19 11:26:41'),
(38, '{\"en\":\"Sourcing\",\"vi\":\"Sourcing\"}', NULL, '29bac618ec44111e6226f00c13d07e6a.jpg', 'bd77cfb56db7e8a4ea6788cc30b0cb69.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '6', 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:26:28', '2022-12-20 03:43:57'),
(39, '{\"en\":\"Leasing\",\"vi\":\"Leasing\"}', NULL, 'c6d4af7a18224127564bc9dc8696c13c.jpg', 'f8178e7cad5db3fb72e323f62b173457.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '6', 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:28:10', '2022-12-20 03:44:14'),
(40, '{\"en\":\"Warehouse Solution\",\"vi\":\"Warehouse Solution\"}', NULL, '4b1e130ce0e335e4e9e13ff0b7f0aef7.jpg', 'ccecae5c8d7e30890eec92fd9daa8ad3.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '6', 3, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:28:26', '2022-12-20 03:44:28'),
(41, '{\"en\":\"Developer\",\"vi\":\"Developer\"}', NULL, 'f41b335d6ae33d05fdcc633861f25467.jpg', '4c0f4984534d300b236f6a6759500248.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '6', 4, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:28:42', '2022-12-20 03:46:16'),
(42, '{\"en\":\"Global Freight Forwarding\",\"vi\":\"Global Freight Forwarding\"}', NULL, '06bf50a499c823e3a8c8a83afca62012.jpg', '08ccbcd300ad84751aae7f89ee808163.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '7', 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:28:58', '2022-12-20 03:46:29'),
(43, '{\"en\":\"Specialty Logistics Services\",\"vi\":\"Specialty Logistics Services\"}', NULL, 'd4d51a1f6212877b9e72ef659770142f.jpg', '40ec8d435b99253c8ccda0cc065b75b4.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '7', 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:29:12', '2022-12-20 03:46:47'),
(44, '{\"en\":\"Express \\u0026 Ecommerce Services\",\"vi\":\"Express \\u0026 Ecommerce Services\"}', NULL, '2a614373c7343c2e7d0fa2a1fcbd64d0.jpg', '12d1044aa25a5367e4863d15b35b9b02.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '7', 3, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:29:44', '2022-12-20 03:47:01'),
(45, '{\"en\":\"Domestics Solutions\",\"vi\":\"Domestics Solutions\"}', NULL, '46a76db7fd700b3defa60368c835669a.jpg', '7f08acbe35e6d11653e1e7aafbda860d.jpg', '{\"en\":null,\"vi\":null}', NULL, 4, '7', 4, NULL, NULL, NULL, NULL, NULL, '2022-12-10 15:30:00', '2022-12-20 03:47:16'),
(46, '{\"en\":null,\"vi\":null}', NULL, NULL, NULL, '{\"en\":null,\"vi\":null}', NULL, 2, '2', 6, NULL, NULL, NULL, NULL, NULL, '2022-12-11 12:27:49', '2022-12-11 12:28:22'),
(47, '{\"en\":\"AVIATION\",\"vi\":\"AVIATION\"}', NULL, NULL, NULL, '{\"en\":null,\"vi\":null}', NULL, 4, 'menu', 1, NULL, NULL, NULL, NULL, NULL, '2022-12-15 04:27:10', '2022-12-15 04:27:10'),
(48, '{\"en\":\"Industrial\\u003Cbr\\u003EReal Estate\",\"vi\":\"Industrial\\u003Cbr\\u003EReal Estate\"}', NULL, NULL, NULL, '{\"en\":null,\"vi\":null}', NULL, 4, 'menu', 2, NULL, NULL, NULL, NULL, NULL, '2022-12-15 04:36:18', '2022-12-15 04:36:18'),
(49, '{\"en\":\"Logistics\\u003Cbr class=\\u0022d-block d-md-none\\u0022\\u003E \\u0026amp; \\u003Cbr\\u003ESupply \\u003Cbr class=\\u0022d-block d-md-none\\u0022\\u003EChain\",\"vi\":\"Logistics\\u003Cbr class=\\u0022d-block d-md-none\\u0022\\u003E \\u0026amp; \\u003Cbr\\u003ESupply \\u003Cbr class=\\u0022d-block d-md-none\\u0022\\u003EChain\"}', NULL, NULL, NULL, '{\"en\":null,\"vi\":null}', NULL, 4, 'menu', 3, NULL, NULL, NULL, NULL, NULL, '2022-12-15 04:39:39', '2022-12-20 03:47:38'),
(50, '{\"en\":\"E-Logistics\",\"vi\":\"E-Logistics\"}', NULL, NULL, NULL, '{\"en\":null,\"vi\":null}', NULL, 4, 'menu', 4, NULL, NULL, NULL, NULL, NULL, '2022-12-15 04:39:59', '2022-12-20 03:47:54'),
(51, '{\"en\":\"Trading\",\"vi\":\"Trading\"}', NULL, NULL, NULL, '{\"en\":null,\"vi\":null}', NULL, 4, 'menu', 5, NULL, NULL, NULL, NULL, NULL, '2022-12-15 04:40:21', '2022-12-20 03:48:05'),
(52, '{\"en\":\"Chairman \\u0026 CEO Board Member\\u003Cspan\\u003ELouis Vu\\u003C/span\\u003E\",\"vi\":\"Chairman \\u0026 CEO\\u003Cspan\\u003EBoard Member\\u003C/span\\u003E\\u003Cspan\\u003ELouis Vu\\u003C/span\\u003E\"}', NULL, 'f1308916162db84a563e6e42dd408ede.jpg', 'dcb6c34ae57344eeca41cdf3e246ebb1.jpg', '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EC - Suite Engagement, Strategist\\u003C/li\\u003E\\u003Cli\\u003EAviation, Industrial Properties, M\\u0026amp;A, Fund \\u0026amp; Assets Management\\u003C/li\\u003E\\u003Cli\\u003E21+ Years of Aviation \\u0026amp; Global Supply Chain\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":\"\\u003Cul\\u003E\\u003Cli\\u003EC - Suite Engagement, Strategist\\u003C/li\\u003E\\u003Cli\\u003EAviation, Industrial Properties, M\\u0026amp;A, Fund \\u0026amp; Assets Management\\u003C/li\\u003E\\u003Cli\\u003E21+ năm kinh nghiệm trong lĩnh vực Aviation \\u0026amp; Global Supply Chain\\u003C/li\\u003E\\u003C/ul\\u003E\"}', NULL, 2, '1', 1, NULL, NULL, NULL, NULL, NULL, '2023-05-16 22:46:20', '2023-05-22 14:36:52'),
(53, '{\"en\":\"Internal Audit\\u003Cspan\\u003ELawyer \\u0026 Consulting\\u003C/span\\u003E\\u003Cspan\\u003EThuan Nguyen\\u003C/span\\u003E\",\"vi\":null}', NULL, NULL, NULL, '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003E27+ Years in Legal \\u0026amp; Audit\\u003C/li\\u003E\\u003Cli\\u003EChairman, Nghiep Thanh Law Company\\u003C/li\\u003E\\u003Cli\\u003EKhanh Binh Accounting Service Company\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":null}', NULL, 2, '2', 7, NULL, NULL, NULL, NULL, NULL, '2023-05-19 18:15:26', '2023-05-19 18:15:26'),
(54, '{\"en\":\"Investment Advisor\\u003Cbr\\u003E\\u003Cspan\\u003EPhuong Nguyen\\u003C/span\\u003E\",\"vi\":null}', NULL, NULL, NULL, '{\"en\":\"\\u003Cul\\u003E\\u003Cli\\u003EInternal Audit\\u003C/li\\u003E\\u003Cli\\u003EBroker Manager, SSI\\u003C/li\\u003E\\u003Cli\\u003E16+ Years of Securities, Fund \\u0026amp; Asset Management\\u003C/li\\u003E\\u003C/ul\\u003E\",\"vi\":null}', NULL, 2, '2', 8, NULL, NULL, NULL, NULL, NULL, '2023-05-19 18:16:24', '2023-05-19 18:16:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `destination`
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
-- Cấu trúc bảng cho bảng `ecosystems`
--

CREATE TABLE `ecosystems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'c31d3bea90b9d121172f8de5ff5bc7a1.jpg', 1, '7d7fbed80e59a3515519f5c550b9c122.png', '<p>We will supply the freight forwarding community with the most cost-effective transportation options</p><ul><li><a href=\"https://logchain.vn/our-services/gsa/\">GSA</a></li><li><a href=\"https://logchain.vn/our-services/charter-service/\">Charter Service</a></li><li><a href=\"https://logchain.vn/our-services/ground-handling-agent/\">Ground Handling Agent</a></li></ul>', 'https://logchain.vn/', 0, NULL, NULL, '2022-01-23 00:19:08', '2022-01-26 17:18:25'),
(2, '7ed002c3fe8d667fc0050d8c48b90529.jpg', 2, '19d1475b74a44381ff70a0f9ef3afa4b.png', '<p>Extensive industry expertise - Best-in-class customer service - Cutting-edge technology</p><ul><li><a href=\"https://galaxyexpress.vn/galaxy-express-forwarding/air-freight/\">Air Freight</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-forwarding/ocean-freight/\">Ocean Freight</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-forwarding', 0, NULL, NULL, '2022-01-23 00:35:37', '2022-01-26 17:19:01'),
(3, 'bc83089804875c66339484a3f6f1bd35.jpg', 3, 'f574b1b02ed1954347c3125e29fda8ca.png', '<p>Extensive industry expertise - Best-in-class customer service</p><ul><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/brokerage/\">Brokerage</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/warehouse/\">Warehouse</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/domestics-transportation/\">Domestic Transportation</a></li><li><a href=\"https://galaxyexpress.vn/galaxy-express-solutions/cross-border/\">Cross Border</a></li></ul>', 'https://galaxyexpress.vn/galaxy-express-solutions', 0, NULL, NULL, '2022-01-23 00:36:05', '2022-01-26 17:20:15');

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
  `priority` int(11) DEFAULT NULL,
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
(3, 'Logistics Association <span>Network</span>', 1, 0, 1, 1, '2022-01-25 21:52:14', '2022-01-25 21:52:14'),
(4, 'Global <span>Partners', 2, 0, 1, 1, '2022-01-25 23:46:02', '2022-01-25 23:46:02'),
(5, 'Preferred Carriers', 3, 0, 1, 1, '2022-01-25 23:51:33', '2022-01-25 23:51:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seo_title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `seo_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `seo_thumbnailUrl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `priority`, `banner`, `banner_title`, `banner_description`, `banner_mobile`, `is_show`, `status`, `seo_title`, `seo_description`, `seo_thumbnailUrl`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"About\",\"vi\":\"Giới thiệu\"}', '{\"en\":\"about\",\"vi\":\"gioi-thieu\"}', 1, '47d80996ba3d92392d0a03ac36687a1b.jpg', '{\"en\":\"Vision\",\"vi\":\"Tầm nhìn\"}', '{\"en\":\"Bring economies closer by connecting business sectors, and realizing the growth of strategic partnerships in Vietnam and emerging markets.\",\"vi\":\"Mang các nền kinh tế gần nhau hơn bằng cách kết nối các lĩnh vực kinh doanh, hiện thực hóa sự phát triển các mối quan hệ đối tác chiến lược tại Việt Nam và tại các thị trường mới.\"}', '4b2edce2aaa5410d5295ee2babbe52c6.jpg', 0, 0, '{\"en\":\"About\",\"vi\":\"Giới thiệu\"}', '{\"en\":\"Bring economies closer by connecting business sectors, and realizing the growth of strategic partnerships in Vietnam and emerging markets.\",\"vi\":\"Mang các nền kinh tế gần nhau hơn bằng cách kết nối các lĩnh vực kinh doanh, hiện thực hóa sự phát triển các mối quan hệ đối tác chiến lược tại Việt Nam và tại các thị trường mới.\"}', '67f35a5066ef9075072689c13669e0e2.jpg', NULL, NULL, '2022-01-20 21:13:08', '2023-01-31 11:17:12'),
(2, '{\"en\":\"Management\",\"vi\":\"Management\"}', '{\"en\":\"management\",\"vi\":\"management\"}', 2, '91de8392d2a2e3afde903980dfefa863.jpg', '{\"en\":\"Management Board \\u0026 Advisory\",\"vi\":\"Management Board \\u0026 Advisory\"}', '{\"en\":\"Management Board \\u0026 Advisory\",\"vi\":\"Ban lãnh đạo\"}', '6671a4f38dcb25aa0420bcf72d939b8f.jpg', 0, 0, '{\"en\":\"Management\",\"vi\":\"Ban lãnh đạo\"}', '{\"en\":\"Management Board \\u0026 Advisory\",\"vi\":\"Ban lãnh đạo\"}', '4c8d737278aaf5d2de59e9dc4612abaf.jpg', NULL, NULL, '2022-01-20 21:14:40', '2022-12-26 11:33:08'),
(3, '{\"en\":\"Contact\",\"vi\":\"Liên hệ\"}', '{\"en\":\"contact\",\"vi\":\"lien-he\"}', 3, '45129550f2f5409e43c319f0fdc8fb9c.jpg', '{\"en\":\"Contact\",\"vi\":\"Liên hệ\"}', '{\"en\":\"Contact\",\"vi\":\"Liên hệ\"}', '8578bf107921f50c929130f16181a9bc.jpg', 0, 0, '{\"en\":\"Contact\",\"vi\":\"Liên hệ\"}', '{\"en\":\"Contact\",\"vi\":\"Liên hệ\"}', '36a3d654a2794060242f2785557c4578.jpg', NULL, NULL, '2022-01-20 21:48:34', '2022-12-26 11:33:18'),
(4, '{\"en\":\"Home\",\"vi\":\"Trang chủ\"}', '{\"en\":\"home\",\"vi\":\"trang-chu\"}', 0, '5e0feb29a3a415e13594f52047e0d1aa.jpg', '{\"en\":\"Invest to facilitate the multi-faceted opportunities for supply chain expansion and to build reliable network for strategic partners in Vietnam \\u0026 emerging markets.\",\"vi\":\"Đầu tư để tạo ra những cơ hội đa dạng cho việc mở rộng chuỗi cung ứng và xây dựng mạng lưới tin cậy cho các đối tác chiến lược tại Việt Nam và các thị trường mới.\"}', '{\"en\":null,\"vi\":null}', '6d4b8a3c3c7ad99439fb24c12ef51c2e.jpg', 1, 0, '{\"en\":\"Logchain Holdings Corporation\",\"vi\":\"Logchain Holdings Corporation\"}', '{\"en\":\"Invest to facilitate the multi-faceted opportunities for supply chain expansion and to build reliable network for strategic partners in Vietnam \\u0026 emerging markets.\",\"vi\":\"Đầu tư để tạo ra những cơ hội đa dạng cho việc mở rộng chuỗi cung ứng và xây dựng mạng lưới tin cậy cho các đối tác chiến lược tại Việt Nam và các thị trường mới.\"}', 'ac1e5b2ac2ed4f846d97f01d40a46d2c.jpg', NULL, NULL, '2022-01-20 22:36:25', '2022-12-26 11:33:23');

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
(5, '2021_12_06_095410_create_testers', 1),
(6, '2021_12_06_095456_create_branches', 1),
(7, '2022_01_20_192858_create_banners_table', 2),
(8, '2022_01_20_195730_create_menus_table', 3),
(9, '2022_01_21_003246_create_contents_table', 4),
(10, '2022_01_22_000647_create_ecosystems_table', 5),
(11, '2022_01_22_004816_create_settings_table', 5),
(12, '2022_01_25_151932_create_globalnetworks_table', 6),
(13, '2022_01_25_152109_create_networkitems_table', 6);

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
  `status` int(11) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `network_items`
--

INSERT INTO `network_items` (`id`, `globalnetwork_id`, `photo`, `original_name`, `file_size`, `file_type`, `priority`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 4, '61f0296c286c9_partner1.png', 'partner1.png', 8701, 'image/png', 0, 0, 1, 1, '2022-01-25 23:46:36', '2022-01-25 23:46:36'),
(9, 4, '61f0296c831ee_partner2.png', 'partner2.png', 6731, 'image/png', 1, 0, 1, 1, '2022-01-25 23:46:36', '2022-01-25 23:46:36'),
(10, 3, '61f029d382d9d_net1.png', 'net1.png', 35506, 'image/png', 0, 0, 1, 1, '2022-01-25 23:48:19', '2022-01-25 23:48:19'),
(11, 3, '61f029d405071_net2.png', 'net2.png', 28141, 'image/png', 1, 0, 1, 1, '2022-01-25 23:48:20', '2022-01-25 23:48:20'),
(12, 3, '61f029d477f43_net3.png', 'net3.png', 7295, 'image/png', 2, 0, 1, 1, '2022-01-25 23:48:20', '2022-01-25 23:48:20'),
(13, 5, '61f02a9da90f5_carries1.png', 'carries1.png', 10853, 'image/png', 0, 0, 1, 1, '2022-01-25 23:51:41', '2022-01-25 23:51:41'),
(14, 5, '61f02a9e492e6_carries2.png', 'carries2.png', 17236, 'image/png', 1, 0, 1, 1, '2022-01-25 23:51:42', '2022-01-25 23:51:42'),
(15, 5, '61f02a9eae4ae_carries3.png', 'carries3.png', 21530, 'image/png', 2, 0, 1, 1, '2022-01-25 23:51:42', '2022-01-25 23:51:42'),
(16, 5, '61f02a9f1ba7e_carries4.png', 'carries4.png', 10474, 'image/png', 3, 0, 1, 1, '2022-01-25 23:51:43', '2022-01-25 23:51:43'),
(17, 5, '61f02a9fae760_carries5.png', 'carries5.png', 19140, 'image/png', 4, 0, 1, 1, '2022-01-25 23:51:43', '2022-01-25 23:51:43'),
(18, 5, '61f02aa02719c_carries6.png', 'carries6.png', 16897, 'image/png', 5, 0, 1, 1, '2022-01-25 23:51:44', '2022-01-25 23:51:44'),
(19, 5, '61f02aa0b5a3b_carries7.png', 'carries7.png', 11530, 'image/png', 6, 0, 1, 1, '2022-01-25 23:51:44', '2022-01-25 23:51:44'),
(20, 5, '61f02aa133b3b_carries8.png', 'carries8.png', 21705, 'image/png', 7, 0, 1, 1, '2022-01-25 23:51:45', '2022-01-25 23:51:45'),
(21, 5, '61f02aa1a5c9f_carries9.png', 'carries9.png', 20134, 'image/png', 8, 0, 1, 1, '2022-01-25 23:51:45', '2022-01-25 23:51:45'),
(22, 5, '61f02aa21e6a9_carries10.png', 'carries10.png', 9168, 'image/png', 9, 0, 1, 1, '2022-01-25 23:51:46', '2022-01-25 23:51:46'),
(23, 5, '61f02ab86d670_carries11.png', 'carries11.png', 11214, 'image/png', 10, 0, 1, 1, '2022-01-25 23:52:08', '2022-01-25 23:52:08'),
(24, 5, '61f02ab8dea4c_carries12.png', 'carries12.png', 10217, 'image/png', 11, 0, 1, 1, '2022-01-25 23:52:08', '2022-01-25 23:52:08'),
(25, 5, '61f02ab943f90_carries13.png', 'carries13.png', 8112, 'image/png', 12, 0, 1, 1, '2022-01-25 23:52:09', '2022-01-25 23:52:09'),
(26, 5, '61f02ab9a29c0_carries14.png', 'carries14.png', 4416, 'image/png', 13, 0, 1, 1, '2022-01-25 23:52:09', '2022-01-25 23:52:09');

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
  `type` int(11) NOT NULL DEFAULT 0,
  `language` int(11) DEFAULT NULL,
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

INSERT INTO `settings` (`id`, `type`, `language`, `key`, `photo`, `value`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'owner', NULL, 'Louis Vu', 0, NULL, NULL, NULL, NULL),
(2, 0, NULL, 'job_title', NULL, 'Chairman', 0, NULL, NULL, NULL, NULL),
(3, 0, NULL, 'contact_email', NULL, 'louisvu@logchaingroup.com', 0, NULL, NULL, NULL, NULL),
(4, 0, NULL, 'contact_phone', NULL, '<p>(+84) 28 38 23 0097</p>', 0, NULL, NULL, NULL, NULL),
(5, 1, 1, 'branch_title_2', NULL, '{\"en\":\"Hanoi Office\",\"vi\":\"Văn phòng Hà Nội\"}', 0, NULL, NULL, NULL, NULL),
(6, 1, 1, 'branch_add_2', NULL, '{\"en\":\"106 Hoang Quoc Viet St., Nghia Do Ward, Cau Giay, Hanoi, Vietnam\",\"vi\":\"106 Hoàng Quốc Việt, phường Nghĩa Đô, quận Cầu Giấy, Hà Nội\"}', 0, NULL, NULL, NULL, NULL),
(7, 1, 1, 'branch_title_1', NULL, '{\"en\":\"HCM Office\",\"vi\":\"Văn phòng HCM\"}', 0, NULL, NULL, NULL, NULL),
(8, 1, 1, 'branch_add_1', NULL, '{\"en\":\"11 Nguyen Huy Tuong St., W.6, Binh Thanh, HCMC, Vietnam\",\"vi\":\"11 Nguyễn Huy Tưởng, phường 6, quận Bình Thạnh, Hồ Chí Minh\"}', 0, NULL, NULL, NULL, NULL),
(9, 0, NULL, 'map', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6310694662266!2d105.7922946147636!3d21.04744288598829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3aad69ecdb%3A0xe886740e57b9af82!2zMTA2IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1642257709043!5m2!1svi!2s', 0, NULL, NULL, NULL, NULL),
(10, 0, NULL, 'contact_phone_2', NULL, '(+84) 24 666 222 60', 0, NULL, NULL, NULL, NULL),
(11, 1, NULL, 'facebook', NULL, 'https://www.facebook.com/', 0, NULL, NULL, NULL, NULL),
(12, 1, NULL, 'linkedin', NULL, 'https://linkedin.com/', 0, NULL, NULL, NULL, NULL),
(13, 3, NULL, 'logo', 'da6fe1895ea163f1abef94e6ec1334fd.png', 'Logo', 0, NULL, NULL, NULL, NULL),
(14, 3, NULL, 'logo_footer', '6fca500530cea9cd9f94bc48e286d874.png', 'Logo footer', 0, NULL, NULL, NULL, NULL);

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
(1, 'admin', 'admin@logchainholdings.com', 1, '2022-01-20 19:21:27', '$2y$10$05RVyjSLMFt/nUELFzwVnuaKO2D3IA/Nc/4ltfA506CeGVnir6Ya2', 'GEaewICXLxIMnMdWV8thugpqUJtmTgbxl6li9DMgT3KU5fDQooPCwkK07NUo', '2022-01-20 19:23:55', '2023-05-22 15:23:13');

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
-- Chỉ mục cho bảng `destination`
--
ALTER TABLE `destination`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
