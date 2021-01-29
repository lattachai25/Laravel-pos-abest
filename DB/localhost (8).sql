-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2021 at 02:49 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_abest`
--
CREATE DATABASE IF NOT EXISTS `pos_abest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pos_abest`;

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
(3, '2020_12_18_040055_create_sour_partners_table', 1),
(4, '2020_12_18_040137_create_sour_products_table', 1),
(5, '2020_12_18_040211_create_sour_prices_table', 1),
(6, '2020_12_18_040230_create_sour_mains_table', 1),
(7, '2020_12_21_032242_create_type_partners_table', 1),
(8, '2020_12_21_032522_create_type_products_table', 1);

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
-- Table structure for table `plu_code`
--

CREATE TABLE `plu_code` (
  `id_plu` int(10) NOT NULL,
  `plu_code` varchar(250) NOT NULL,
  `plu_code_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plu_code`
--

INSERT INTO `plu_code` (`id_plu`, `plu_code`, `plu_code_name`) VALUES
(1, '73581', 'กีวีเขียว NO.27'),
(2, '64080', 'กีวีเขียวNO.33'),
(3, '64079', 'กีวีทอง(NZ)NO.33'),
(4, '72486', 'กีวีทองNZ#22'),
(5, '64078', 'เชอร์รี่แดง'),
(6, '69347', 'เชอร์รี่แดง(NZ)NO.8.5'),
(7, '75975', 'เชอรี่ทอง NO.9.5'),
(8, '73478', 'ทับทิมอินเดีย NO.14'),
(9, '75971', 'บลูเบอร์รี่'),
(10, '75972', 'พุทราจีน'),
(11, '65239', 'ลิ้นจี่จีน (คัดพิเศษ)'),
(12, '64067', 'ลูกพลับ#2L'),
(13, '64068', 'ลูกพลับ#3L'),
(14, '78503', 'สตรอเบอร์รี่ 250กรัม(AUS)'),
(15, '64317', 'สตรอเบอร์รี่ NO.15(AUS)'),
(16, '64109', 'สตรอเบอร์รี่(USA)#12'),
(17, '71204', 'STRAWBERRY 250G(KO)'),
(18, '64310', 'ส้มซันคิสท์NO.56'),
(19, '64323', 'ส้มซันคิสท์NO.72'),
(20, '75974', 'ส้มแมนดาริน NO.60'),
(21, '72525', 'ส้มแมนดาริน NO.60 (AUS)'),
(22, '72525', 'ส้มแมนดาริน NO.60 (AUS)'),
(23, '72525', 'ส้มแมนดาริน NO.60 (AUS)'),
(24, '75983', 'ส้มสายน้ำผึ้ง'),
(25, '69355', 'สาลี่ทอง(CN)NO.16'),
(26, '64071', 'สาลี่ญี่ปุ่นNO.20'),
(27, '75966', 'สาลี่ทอง NO.18'),
(28, '73582', 'สาลี่น้ำผึ้ง NO.27'),
(29, '64061', 'สาลี่น้ำผึ้ง'),
(30, '64060', 'สาลี่หอม'),
(31, '64313', 'สาลี่หิมะNO.16'),
(32, '62735', 'สาลี่หิมะ NO.18'),
(33, '62734', 'สาลี่หิมะเกาหลี NO.21'),
(34, '66741', 'สาลี่หิมะเกาหลี NO.7'),
(35, '71274', 'สาลี่หิมะเกาหลี(KR)NO.16'),
(36, '69394', 'องุ่นเขียวไร้เมล็ด(SAF)'),
(37, '78559', 'องุ่นเขียวไว้เมล็ด(USA)'),
(38, '79596', 'องุ่นวิชฟิงเกอร์(USA)'),
(39, '79109', 'องุ่นดำไร้เมล็ด(USA)'),
(40, '64057', 'องุ่นแดง(AUS)'),
(41, '65229', 'องุ่นแดงนอก(USA)'),
(42, '73509', 'องุ่นแดงนอก ไร้เมล็ด(PRO)'),
(43, '79107', 'องุ่นแดงไร้เมล็ด(USA)'),
(44, '64075', 'อโวคาโด(AUS)'),
(45, '71354', 'อโวคาโดNO.20(NZ)'),
(46, '69310', 'อโวคาโดNO.24(KE)'),
(47, '78014', 'อโวคาโดNO.60(USA)'),
(48, '76638', 'อินทผลัมสด(PERU)'),
(49, '65235', 'อินทผาลัมสด'),
(50, '66738', 'แอปเปิ้ลกาล่า NO.113'),
(51, '66738', 'แอปเปิ้ลกาล่า NO.113'),
(52, '66738', 'แอปเปิ้ลกาล่า NO.113'),
(53, '75984', 'แอปเปิ้ลกาล่า NO.163'),
(54, '75986', 'แอปเปิ้ลเขียว NO.150'),
(55, '75985', 'แอปเปิ้ลเขียว'),
(56, '75967', 'ABS แอปเปิ้ลควีน #35'),
(57, '64073', 'แอปเปิ้ลแดง NO.113'),
(58, '64073', 'แอปเปิ้ลแดง NO.113'),
(59, '73325', 'แอปเปิ้ลแดงยักษ์ NO.24'),
(60, '71143', 'แอปเปิ้ลแดงยักษ์(JP)NO.16'),
(61, '79935', 'แอปเปิ้ลบรีส'),
(62, '75961', 'แอปเปิ้ลแปซิฟิกโรส NO.14'),
(63, '79955', 'แอปเปิ้ลพิงค์เลดี้(NZ)NO.120'),
(64, '79955', 'แอปเปิ้ลพิงค์เลดี้(NZ)NO.120'),
(65, '70520', 'แอปเปิ้ล ENVY(NZ.)NO.70'),
(66, '70579', 'แอปเปื้ล ENVY(NZ.)NO.30'),
(67, '71828', 'แอปเปิ้ลเอนวี่ NO.36'),
(68, '78516', 'แอปเปิ้ลเอ็นวีNO.48(USA)'),
(69, '73580', 'แอปเปิ้ลฟูจิ NO.72'),
(70, '64066', 'แอปเปิ้ลฟูจิ NO.80'),
(71, '64065', 'แอปเปิ้ลฟูจิ NO.28'),
(72, '70598', 'แอปเปิ้ล JAZZ(NZ)NO.120'),
(73, '71146', 'แอปเปิ้ลJAZZ(NZ.)NO.90'),
(74, '70600', 'แอปเปิ้ลฟูจิน้ำผึ้ง(USA.)NO.100'),
(75, '70599', 'แอปเปิ้ลฟูจิน้ำผึ้ง(USA.)NO.113'),
(76, '70603', 'แอปเปิ้ลฟูจิน้ำผึ้ง(USA.)NO.64'),
(77, '70602', 'แอปเปิ้ลฟูจิน้ำผึ้ง(USA.)NO.72'),
(78, '79923', 'แอปเปิ้ลแอมโบเซีย NO.80(NZ)'),
(79, '71075', 'แอปเปิ้ลฟูจิน้ำผึ้งNO.30(NZ)'),
(111, 'plu_code', 'plu_code_name');

-- --------------------------------------------------------

--
-- Table structure for table `price_plu_code`
--

CREATE TABLE `price_plu_code` (
  `price_plu_code_id` int(10) NOT NULL,
  `plu_code` varchar(250) NOT NULL,
  `sku_code` int(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `price2` varchar(250) NOT NULL,
  `price3` varchar(250) NOT NULL,
  `price4` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price_plu_code`
--

INSERT INTO `price_plu_code` (`price_plu_code_id`, `plu_code`, `sku_code`, `price`, `price2`, `price3`, `price4`, `model`) VALUES
(4, '64322', 0, '199', '', '', '', 'KG'),
(5, '72525', 0, '259', '', '', '', 'KG'),
(6, '64322', 0, '199', '', '', '', 'KG'),
(7, '75983', 0, '149', '', '', '', 'KG'),
(8, '64060', 0, '199', '', '', '', 'KG'),
(9, '73582', 0, '149', '', '', '', 'KG'),
(10, '78559', 0, '499', '', '', '', 'KG'),
(11, '71070', 0, '399', '', '', '', 'KG'),
(12, '75981', 0, '659', '', '', '', 'KG'),
(13, '64308', 0, '1399', '', '', '', 'KG'),
(14, '64058', 0, '499', '', '', '', 'KG');

-- --------------------------------------------------------

--
-- Table structure for table `sku_code`
--

CREATE TABLE `sku_code` (
  `id_sku` int(10) NOT NULL,
  `id_plu` int(100) NOT NULL,
  `sku_code` varchar(250) NOT NULL,
  `sku_code_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sku_code`
--

INSERT INTO `sku_code` (`id_sku`, `id_plu`, `sku_code`, `sku_code_name`) VALUES
(1, 0, '0202000338', 'กีวีเขียว # 27 ( 78 ลูก )'),
(2, 0, '0202000325', 'กีวีเขียว# 30 (85 ลูก)'),
(3, 0, '0202000336', 'กีวีทอง # 27 ( 44 ลูก )'),
(4, 0, '0202000319', 'กีวีทอง#33 (52 ลูก)'),
(5, 0, '0202001001', 'เชอรี่แดง # 8.5'),
(6, 0, '0202001018', 'เชอรี่แดง # 9'),
(7, 0, '0202001025', 'เชอรี่ทอง # 9.5'),
(8, 0, '0202001339', 'ทับทิมอินเดีย (กิโลกรัม) #18'),
(9, 0, '0202001701', 'บลูเบอรี่ # 12'),
(10, 0, '0202002003', 'พุทราจีน'),
(11, 0, '0201003403', 'ลิ้นจี่นอก'),
(12, 0, '0202003703', 'ลูกพลับ # 18'),
(13, 0, '0202003727', 'ลูกพลับญี่ปุ่น # 3L'),
(14, 0, '0202004415', 'สตรอเบอรี่#12(Driscoll) (250g)'),
(15, 0, '0202004415', 'สตรอเบอรี่#12(Driscoll) (250g)'),
(16, 0, '0202004415', 'สตรอเบอรี่#12(Driscoll) (250g)'),
(17, 0, '0202004415', 'สตรอเบอรี่#12(Driscoll) (250g)'),
(18, 0, '0202004516', 'ส้มซันคิสท์ # 56'),
(19, 0, '0202004519', 'ส้มซันคิสท์ # 72'),
(20, 0, '0202004527', 'ส้มแมนดาริน'),
(21, 0, '0202004534', 'ส้มแมนดาริน # 30'),
(22, 0, '0202004552', 'ส้มแมนดาริน # 36'),
(23, 0, '0202004558', 'ส้มแมนดาริน # 56'),
(24, 0, '0201004537', 'ส้มสายน้ำผึ้ง # 6, 7'),
(25, 0, '0202004835', 'สาลี่ทอง # 16'),
(26, 0, '0202004810', 'สาลี่ทอง # 20'),
(27, 0, '0202004836', 'สาลี่ทอง#18'),
(28, 0, '0202004818', 'สาลี่น้ำผึ้ง # 27'),
(29, 0, '0202004819', 'สาลี่น้ำผึ้ง # 36'),
(30, 0, '0202004822', 'สาลี่หอม'),
(31, 0, '0202004826', 'สาลี่หิมะ # 16'),
(32, 0, '0202004827', 'สาลี่หิมะ # 18'),
(33, 0, '0202004828', 'สาลี่หิมะ # 20'),
(34, 0, '0202004832', 'สาลี่หิมะ # 6'),
(35, 0, '0202004843', 'สาลี่หิมะ # 7'),
(36, 0, '0202005003', 'องุ่นเขียวไร้เมล็ด'),
(37, 0, '0202005003', 'องุ่นเขียวไร้เมล็ด'),
(38, 0, '0202005025', 'องุ่นดำไร้เมล็ด (เล็บมือนาง)'),
(39, 0, '0202005025', 'องุ่นดำไร้เมล็ด (เล็บมือนาง)'),
(40, 0, '0202005014', 'องุ่นแดงมีเมล็ด'),
(41, 0, '0202005014', 'องุ่นแดงมีเมล็ด'),
(42, 0, '0202005017', 'องุ่นแดงไร้เมล็ด'),
(43, 0, '0202005017', 'องุ่นแดงไร้เมล็ด'),
(44, 0, '0202005101', 'อโวคาโด # 28'),
(45, 0, '0202005101', 'อโวคาโด # 28'),
(46, 0, '0202005102', 'อโวคาโด # 30'),
(47, 0, '0202005105', 'อโวคาโด # 60'),
(48, 0, '0202005201', 'อินทผาลัมสด'),
(49, 0, '0202005201', 'อินทผาลัมสด'),
(50, 0, '0202005501', 'แอปเปิ้ลกาล่า # 100'),
(51, 0, '0202005503', 'แอปเปิ้ลกาล่า # 120'),
(52, 0, '0202005511', 'แอปเปิ้ลกาล่า #113'),
(53, 0, '0202005504', 'แอปเปิ้ลกาล่า # 135'),
(54, 0, '0202005601', 'แอปเปิ้ลเขียว # 120'),
(55, 0, '0202005613', 'แอปเปิ้ลเขียว #113'),
(56, 0, '0202005810', 'แอปเปิ้ลควีน # 35'),
(57, 0, '0202006102', 'แอปเปิ้ลแดง # 113'),
(58, 0, '0202006103', 'แอปเปิ้ลแดง # 125'),
(59, 0, '0202006127', 'แอปเปิ้ลแดงยักษ์ # 6'),
(60, 0, '0202006127', 'แอปเปิ้ลแดงยักษ์ # 6'),
(61, 0, '0202013001', 'แอปเปิ้ลบรีซ # 35'),
(62, 0, '0202006620', 'แอปเปิ้ลแปซิฟิคโรส # 30'),
(63, 0, '0202006904', 'แอปเปิ้ลพิ้งเลดี้ # 120'),
(64, 0, '0202006962', 'แอปเปิ้ลฟูจิพิ้งเลดี้ # 125'),
(65, 0, '0202006898', 'แอปเปิ้ลฟูจิ # 70 (Envy)'),
(66, 0, '0202006952', 'แอปเปิ้ลฟูจิ # 28 (Envy)'),
(67, 0, '0202006959', 'แอปเปิ้ลฟูจิ # 32 (Envy)'),
(68, 0, '0202006943', 'แอปเปิ้ลฟูจิ # 35 (Envy)'),
(69, 0, '0202006817', 'แอปเปิ้ลฟูจิ # 88'),
(70, 0, '0202006817', 'แอปเปิ้ลฟูจิ # 88'),
(71, 0, '0202006818', 'แอปเปิ้ลฟูจิ  # 32'),
(72, 0, '0202006844', 'แอปเปิ้ลฟูจิแจ๊ส #  120'),
(73, 0, '0202006844', 'แอปเปิ้ลฟูจิแจ๊ส #  120'),
(74, 0, '0202006889', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 113'),
(75, 0, '0202006889', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 113'),
(76, 0, '0202006891', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 80'),
(77, 0, '0202006891', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 80'),
(78, 0, '0202006891', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 80'),
(79, 0, '0202006958', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 32'),
(80, 0, '202006889', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 113'),
(81, 0, '202006891', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 80'),
(82, 0, '202006891', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 80'),
(83, 0, '202006891', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 80'),
(84, 0, '202006958', 'แอปเปิ้ลฟูจิน้ำผึ้ง # 32'),
(88, 0, 'sku_code', 'sku_code_name');

-- --------------------------------------------------------

--
-- Table structure for table `sour_mains`
--

CREATE TABLE `sour_mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sour_partners`
--

CREATE TABLE `sour_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_partner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_part` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type_part` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegetable` int(11) DEFAULT NULL,
  `thai_fruits` int(11) DEFAULT NULL,
  `fruit_outside` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sour_prices`
--

CREATE TABLE `sour_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sour_products`
--

CREATE TABLE `sour_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_products` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_products` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detel_products` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_partners` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_partners`
--

CREATE TABLE `type_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_number` int(11) NOT NULL,
  `id_namebox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin1@gmail.co', NULL, '$2y$10$msktmhoMldzfdB5vkAz4meIY0KtJL3bOb.2Jiz0Uh0I.diMjMbGym', NULL, '2021-01-27 21:44:55', '2021-01-27 21:44:55');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `plu_code`
--
ALTER TABLE `plu_code`
  ADD PRIMARY KEY (`id_plu`);

--
-- Indexes for table `price_plu_code`
--
ALTER TABLE `price_plu_code`
  ADD PRIMARY KEY (`price_plu_code_id`);

--
-- Indexes for table `sku_code`
--
ALTER TABLE `sku_code`
  ADD PRIMARY KEY (`id_sku`);

--
-- Indexes for table `sour_mains`
--
ALTER TABLE `sour_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sour_partners`
--
ALTER TABLE `sour_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sour_prices`
--
ALTER TABLE `sour_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sour_products`
--
ALTER TABLE `sour_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_partners`
--
ALTER TABLE `type_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plu_code`
--
ALTER TABLE `plu_code`
  MODIFY `id_plu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `price_plu_code`
--
ALTER TABLE `price_plu_code`
  MODIFY `price_plu_code_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sku_code`
--
ALTER TABLE `sku_code`
  MODIFY `id_sku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `sour_mains`
--
ALTER TABLE `sour_mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sour_partners`
--
ALTER TABLE `sour_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sour_prices`
--
ALTER TABLE `sour_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sour_products`
--
ALTER TABLE `sour_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_partners`
--
ALTER TABLE `type_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
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
