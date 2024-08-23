-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 11:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaminjaidad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'sub-admin' COMMENT 'admin',
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '2022-12-05 03:19:26', '$2y$10$QlXxW.auPM1xIIL2XDzlZ.qlijhhZFHfnvdOsBZEylLemwF87yipS', 'admin', 'Yes', 'OeIXfsLgePe9hGQ2GaL6kv7W6Rn1gChx9FAIqTAMXs7P25mZ7wPusOEavUa3', '2022-12-05 03:19:26', '2022-12-05 03:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `loc_latitude` varchar(255) NOT NULL,
  `loc_longitude` varchar(255) NOT NULL,
  `loc_address` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `loc_latitude`, `loc_longitude`, `loc_address`, `position`, `is_active`, `status`, `created_at`, `updated_at`) VALUES
(1, 'C:\\xampp\\tmp\\php6432.tmp', '21.2560366', '81.62964439999999', 'Cross Connection - Station, At the railway Station, Station Road, Station Road, Moudhapara, Raipur, Raipur, Chhattisgarh, India', '1', 'Yes', 'N', NULL, NULL),
(2, '770049750_food.png', '22.059062', '82.170305', 'Bilaspur Railway Station Sub Post office, Station Road, Railway Colony, Bilaspur, Chhattisgarh, India', '2', 'Yes', 'Y', NULL, NULL),
(3, '710486435_food.png', '22.059062', '82.170305', 'Bilaspur Railway Station Sub Post office, Station Road, Railway Colony, Bilaspur, Chhattisgarh, India', '44', 'No', 'Y', NULL, NULL),
(4, '507688631_food.jpg', '18.2346858', '73.44644439999999', 'Raigad Fort, Raigad, Maharashtra, India', '3', 'Yes', 'Y', NULL, NULL),
(5, '919777172_food.png', '22.059062', '82.170305', 'Bilaspur Railway Station Sub Post office, Station Road, Railway Colony, Bilaspur, Chhattisgarh, India', '4', 'Yes', 'Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `deleted_at` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquaries`
--

CREATE TABLE `enquaries` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquaries`
--

INSERT INTO `enquaries` (`id`, `property_id`, `name`, `mobile`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'v satish', '1234567890', 'v.satish@gmail.com', NULL, '2024-08-23 09:03:59', '2024-08-23 09:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `vendor_id`, `category`, `image`, `is_active`, `status`) VALUES
(1, '15', 'accomodation', '322703117_image.jpg', 'Yes', 'Y'),
(2, '15', 'accomodation', '179028844_image.jpg', 'Yes', 'Y'),
(3, '15', 'accomodation', '227526222_image.png', 'Yes', 'Y'),
(4, '15', 'accomodation', '809693060_image.jpg', 'Yes', 'Y'),
(5, '15', 'accomodation', '954114374_image.png', 'Yes', 'Y'),
(6, '15', 'accomodation', '215321054_image.png', 'Yes', 'Y'),
(7, '15', 'accomodation', '898120656_image.jpg', 'Yes', 'Y'),
(8, '15', 'accomodation', '292757635_image.jpg', 'Yes', 'Y'),
(9, '15', 'accomodation', '362198861_image.webp', 'Yes', 'Y'),
(10, '15', 'accomodation', '479284883_image.png', 'Yes', 'Y'),
(11, '15', 'accomodation', '380863010_image.png', 'Yes', 'Y'),
(12, '15', 'accomodation', '859618531_image.jpg', 'Yes', 'Y'),
(13, '15', 'accomodation', '296111657_image.jpg', 'Yes', 'Y'),
(14, '15', 'accomodation', '354809054_image.png', 'Yes', 'Y'),
(15, '15', 'accomodation', '100562048_image.png', 'Yes', 'Y'),
(16, '15', 'accomodation', '643042971_image.jpg', 'Yes', 'Y'),
(17, '15', 'accomodation', '402955352_image.png', 'Yes', 'Y'),
(18, '15', 'accomodation', '786193191_image.jpg', 'Yes', 'Y'),
(19, '15', 'accomodation', '831547428_image.png', 'Yes', 'Y'),
(20, '15', 'accomodation', '744578971_image.jpg', 'Yes', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_09_24_094711_create_admins_table', 1),
(6, '2022_09_24_194403_create_settings_table', 1),
(7, '2022_09_24_194421_create_notifications_table', 1),
(8, '2022_12_05_115648_create_vendors_table', 2),
(9, '2022_12_05_121453_create_banners_table', 3),
(10, '2022_12_05_123436_create_cities_table', 4),
(11, '2022_12_05_123910_create_accomodations_table', 5),
(12, '2022_12_05_130806_create_review_categories_table', 6),
(13, '2022_12_05_131308_create_users_table', 7),
(14, '2022_12_05_132817_create_services_table', 8),
(15, '2022_12_05_134201_create_service_images_table', 9),
(16, '2022_12_05_134526_create_tips_table', 9),
(17, '2022_12_05_135326_create_notifications_table', 10),
(18, '2022_12_06_044456_create_reviews_table', 10),
(19, '2022_12_06_045333_create_bookings_table', 11),
(20, '2022_12_06_045709_create_booking_details_table', 12),
(21, '2022_12_06_050553_create_booking_orders_table', 13),
(22, '2022_12_06_051057_create_orders_table', 14),
(23, '2022_12_06_051210_create_order_details_table', 15),
(24, '2022_12_06_051416_create_transactions_table', 16),
(25, '2022_12_06_052055_create_settlements_table', 17),
(26, '2022_12_06_052335_create_wishlists_table', 18),
(27, '2022_12_06_120321_create_secrets_table', 19),
(28, '2016_06_01_000001_create_oauth_auth_codes_table', 20),
(29, '2016_06_01_000002_create_oauth_access_tokens_table', 20),
(30, '2016_06_01_000003_create_oauth_refresh_tokens_table', 20),
(31, '2016_06_01_000004_create_oauth_clients_table', 20),
(32, '2016_06_01_000005_create_oauth_personal_access_clients_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description varchar` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0d5fd8c350548447ee1f98ed7a219af4b078dcb9a84d6b8e643913a088ecfa9e0a2655179f5e391c', 11, 1, 'jaminjaidad', '[]', 0, '2024-08-20 07:33:35', '2024-08-20 07:33:35', '2025-08-20 13:03:35'),
('264521ddedef3d02b720e142be08bdd5f47fa689ebe66d8359739a10bb5e07766acc9e53ce798664', 10, 1, 'hometoexam', '[]', 0, '2023-01-04 03:00:08', '2023-01-04 03:00:08', '2024-01-04 08:30:08'),
('47b60bab193ad53d2b79c4e0b2207c6817a25e80701d77bf7f4f5ef1114e5e17686eb58a6b68ef25', 9, 1, 'hometoexam', '[]', 0, '2023-01-04 02:48:13', '2023-01-04 02:48:13', '2024-01-04 08:18:13'),
('51453f0be81a8bd17a0ebb85ab124a4b933f0111883bf1a7e643efbf343cdf4075bf6975df0144f7', 9, 1, 'hometoexam', '[]', 0, '2023-01-04 02:01:55', '2023-01-04 02:01:55', '2024-01-04 07:31:55'),
('699f1121ae2429ea80832942accb80c4f94c61dcd262075719ad163b9ad81fc2f5ccab7254942c15', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 02:44:57', '2023-01-05 02:44:57', '2024-01-05 08:14:57'),
('86e1266a12964b2d740744444cfdb441e93af327ee641585294f49d898a8ffb12e3992346ab5ab68', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 23:48:12', '2023-01-05 23:48:13', '2024-01-06 05:18:12'),
('8a2e1f15163b82b8512eec1663640daa1394356cfe0fc8129e9b5af4acb0d1a4e2e0b8ec9c151579', 10, 1, 'jaminjaidad', '[]', 0, '2024-08-20 06:31:02', '2024-08-20 06:31:02', '2025-08-20 12:01:02'),
('a18042823179f082743144532dcd570b2ff8127a701dfb7069a6845735d257c302413634d9a726c7', 8, 1, 'hometoexam', '[]', 0, '2023-01-04 01:44:38', '2023-01-04 01:44:38', '2024-01-04 07:14:38'),
('a6d8c83aa02b7fa50a53c2535542137e51b3470e800a317e5e73e2502e359dcfae4c9c9075950df0', 3, 1, 'hometoexam', '[]', 0, '2023-01-04 00:32:29', '2023-01-04 00:32:29', '2024-01-04 06:02:29'),
('adcbe2032412d4cfcba1ce1999082a462828960c89a621fc1c1989c914f74c00388de009ebe6e7dc', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 05:33:47', '2023-01-05 05:33:47', '2024-01-05 11:03:47'),
('b3bb20f249b49ad114798ea8868fd73f055bfb505fd5832ec3c9cc670b443848d58df7b0470aad04', 6, 1, 'hometoexam', '[]', 0, '2023-01-05 23:50:16', '2023-01-05 23:50:16', '2024-01-06 05:20:16'),
('b948f60de83a46503d2c1386169911f6d8cc41f8095a61a06722cf11f955b423d380b35d55961f0b', 10, 1, 'jaminjaidad', '[]', 0, '2024-08-20 06:04:54', '2024-08-20 06:04:54', '2025-08-20 11:34:54'),
('cd0b302f969d8319720d1d62bd3d771dabaf5b59c8fd4fb2592fd484e5cd8b0a19d413afc21da12c', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 23:27:39', '2023-01-05 23:27:39', '2024-01-06 04:57:39'),
('ec263aabaad413b1e84bb72efd6639572cf07e29f2937e6424d878a431a6036688eec082ab2f0ea9', 7, 1, 'hometoexam', '[]', 0, '2023-01-04 01:40:47', '2023-01-04 01:40:47', '2024-01-04 07:10:47'),
('f615b4499b39b5293bc54dd28253cebe9339dafb6a5d77696648fbc35f11f213b4e33855f991b74b', 7, 1, 'hometoexam', '[]', 0, '2023-01-04 01:40:25', '2023-01-04 01:40:25', '2024-01-04 07:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'HOMETOEXAM Personal Access Client', 'ON5V6XCWChqXiuTfIjcW8mdCFYJDvY3DpdBhBNBh', NULL, 'http://localhost', 1, 0, 0, '2023-01-03 06:53:59', '2023-01-03 06:53:59'),
(2, NULL, 'HOMETOEXAM Password Grant Client', 'xv8IC0ygANQo93KwNYb6gh12gmQvwUK9xbNZswVd', 'users', 'http://localhost', 0, 1, 0, '2023-01-03 06:53:59', '2023-01-03 06:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-03 06:53:59', '2023-01-03 06:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'hometoexam', 'f23b5e0a23464903f66d383f04ba52091eccb4e6b454e9b9b9baeba17240d53f', '[\"*\"]', NULL, NULL, '2023-01-04 00:25:36', '2023-01-04 00:25:36'),
(2, 'App\\Models\\User', 3, 'hometoexam', '8561d9493bd4ec0dd78c3bd0c04c5c155c947b9dcff936c8e7590ee87e32d99e', '[\"*\"]', NULL, NULL, '2023-01-04 00:25:54', '2023-01-04 00:25:54'),
(3, 'App\\Models\\User', 3, 'hometoexam', '7e5d4be8d7ac55308f4fff518726f608851e7998c03b23834f3a6e666cf7d5bd', '[\"*\"]', NULL, NULL, '2023-01-04 00:26:23', '2023-01-04 00:26:23'),
(4, 'App\\Models\\User', 3, 'hometoexam', '978666e6c9ef020caca334ee270f3abc8607254fd9033e4aee4c55f082ae39da', '[\"*\"]', NULL, NULL, '2023-01-04 00:27:31', '2023-01-04 00:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `rera_no` varchar(255) DEFAULT NULL,
  `type_of_property` varchar(255) DEFAULT NULL,
  `squre` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `dimension` varchar(255) DEFAULT NULL,
  `size_squre` varchar(255) DEFAULT NULL,
  `road_touch` varchar(255) DEFAULT NULL,
  `plot_facing` varchar(255) DEFAULT NULL,
  `airport` varchar(255) DEFAULT NULL,
  `railway` varchar(255) DEFAULT NULL,
  `bus_stand` varchar(255) DEFAULT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `sub_locality` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `basic_requirement` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `price_squre` varchar(255) DEFAULT NULL,
  `photos` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `drone_link` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ammeties` text DEFAULT NULL,
  `no_of_plot` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `status` enum('PENDING','ACCEPTED','REJECTED') DEFAULT 'PENDING',
  `featured` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `project_name`, `rera_no`, `type_of_property`, `squre`, `size`, `dimension`, `size_squre`, `road_touch`, `plot_facing`, `airport`, `railway`, `bus_stand`, `hospital`, `school`, `city`, `locality`, `sub_locality`, `address`, `basic_requirement`, `price`, `price_squre`, `photos`, `file`, `youtube_link`, `drone_link`, `description`, `ammeties`, `no_of_plot`, `property_type`, `created_by`, `status`, `featured`, `created_at`, `update_at`, `deleted_at`) VALUES
(2, 11, 'project name', '65798641657', 'residential', 'sq yard', '1200', NULL, 'sqyard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65,00586', '1000', '1724182867_photo_.jpeg', '1724182867_file_.pdf', 'asjdfklasjdklfjaskljdfkl', 'asjdfklasjdklfjaskljdfkl', 'descripitioon', 'gym,electricity,club house', '2', 'Project', 'Developer', 'PENDING', 'NO', '2024-08-20 19:41:07', '2024-08-21 09:53:08', '2024-08-20 19:41:07'),
(3, 11, NULL, NULL, 'Residential Land', 'sqyrd', '2500', '10.55*23*8', 'sqyrd', 'yes', 'East', '2KM', '2KM', '2KM', '2KM', '2KM', 'Mumbai', 'andheri', NULL, 'Andheri West', 'Electricity,Water', '65,00586', '15', '1724188007_photo_.jpeg', '1724188007_file_.pdf', 'asjdfklasjdklfjaskljdfkl', 'asjdfklasjdklfjaskljdfkl', NULL, NULL, NULL, 'Property', 'Agent', 'PENDING', 'NO', '2024-08-20 21:06:47', '2024-08-20 21:09:58', '2024-08-20 21:06:47'),
(4, 11, NULL, NULL, 'Residential Land', 'sqyrd', '2500', '10.55*23*8', 'sqyrd', 'yes', 'East', '2KM', '2KM', '2KM', '2KM', '2KM', 'Mumbai', 'andheri', NULL, 'Andheri West', 'Electricity,Water', '65,00586', '15', '1724188360_photo_.jpeg', '1724188360_file_.pdf', 'asjdfklasjdklfjaskljdfkl', 'asjdfklasjdklfjaskljdfkl', NULL, NULL, NULL, 'Property', 'Agent', 'PENDING', 'NO', '2024-08-20 21:12:40', '2024-08-20 21:12:40', '2024-08-20 21:12:40'),
(5, 11, 'Safari greens', '134545', 'Residential Land', 'sqyrd', '2500', NULL, 'sqyrd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mumbai', 'andheri', NULL, 'Andheri West', NULL, '65,00586', '1000', '1724233895_photo_.jpeg', '1724233895_file_.pdf', 'asjdfklasjdklfjaskljdfkl', 'asjdfklasjdklfjaskljdfkl', 'descripitioon', 'gym,electricity,club house', '2', 'Project', 'Developer', 'PENDING', 'NO', '2024-08-21 09:51:35', '2024-08-21 09:51:35', '2024-08-21 09:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `secrets`
--

CREATE TABLE `secrets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `is_used` int(255) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `secrets`
--

INSERT INTO `secrets` (`id`, `user_id`, `mobile`, `otp`, `is_used`, `created_at`, `updated_at`) VALUES
(1, NULL, '9999999999', '123456', 1, '2022-12-14 00:12:06', '2023-01-04 00:32:28'),
(2, NULL, '8888888888', '123456', 1, '2022-12-14 00:13:06', '2023-01-03 23:19:01'),
(3, NULL, '7777777777', '123456', 1, '2022-12-14 00:13:53', '2022-12-15 01:49:25'),
(4, NULL, '6666666666', '123456', 1, '2022-12-14 00:15:04', '2023-01-03 04:39:11'),
(5, '1', '9999999999', '123456', 1, '2022-12-14 01:17:11', '2023-01-04 00:32:28'),
(6, '1', '9999999999', '123456', 1, '2022-12-14 01:32:54', '2023-01-04 00:32:28'),
(7, '1', '9999999999', '123456', 1, '2022-12-14 02:08:17', '2023-01-04 00:32:28'),
(8, '1', '9999999999', '123456', 1, '2022-12-14 02:08:58', '2023-01-04 00:32:28'),
(9, '1', '9999999999', '123456', 1, '2022-12-14 02:18:19', '2023-01-04 00:32:28'),
(10, '1', '9999999999', '123456', 1, '2022-12-14 02:36:43', '2023-01-04 00:32:28'),
(11, '1', '9999999999', '123456', 1, '2022-12-14 02:39:02', '2023-01-04 00:32:28'),
(12, '1', '9999999999', '123456', 1, '2022-12-14 03:01:29', '2023-01-04 00:32:28'),
(13, '1', '9999999999', '123456', 1, '2022-12-14 04:11:29', '2023-01-04 00:32:28'),
(14, NULL, '9090909090', '123456', 1, '2022-12-14 04:11:44', '2022-12-14 04:11:49'),
(15, '1', '9999999999', '123456', 1, '2022-12-14 04:32:01', '2023-01-04 00:32:28'),
(16, '1', '9999999999', '123456', 1, '2022-12-14 04:32:48', '2023-01-04 00:32:28'),
(17, NULL, '8989898988', '123456', 1, '2022-12-14 04:54:29', '2022-12-14 04:54:35'),
(18, NULL, '7878787878', '123456', 1, '2022-12-14 04:59:31', '2022-12-14 05:33:41'),
(19, NULL, '6777777777', '123456', 1, '2022-12-14 05:02:08', '2022-12-14 05:02:15'),
(20, NULL, '7878787878', '123456', 1, '2022-12-14 05:30:33', '2022-12-14 05:33:41'),
(21, '7', '7878787878', '123456', 1, '2022-12-14 05:32:49', '2022-12-14 05:33:41'),
(22, '7', '7878787878', '123456', 1, '2022-12-14 05:33:32', '2022-12-14 05:33:41'),
(23, NULL, '5050505050', '123456', 1, '2022-12-14 05:36:31', '2022-12-14 05:36:36'),
(24, '1', '9999999999', '123456', 1, '2022-12-14 06:34:37', '2023-01-04 00:32:28'),
(25, NULL, '7867867865', '123456', 1, '2022-12-14 06:52:12', '2022-12-14 06:52:18'),
(26, '1', '9999999999', '123456', 1, '2022-12-14 07:46:36', '2023-01-04 00:32:28'),
(27, '1', '9999999999', '123456', 1, '2022-12-14 23:57:35', '2023-01-04 00:32:28'),
(28, '1', '9999999999', '123456', 1, '2022-12-15 00:45:06', '2023-01-04 00:32:28'),
(29, NULL, '9999999999', '123456', 1, '2022-12-15 01:47:30', '2023-01-04 00:32:28'),
(30, NULL, '8888888888', '123456', 1, '2022-12-15 01:48:30', '2023-01-03 23:19:01'),
(31, NULL, '7777777777', '123456', 1, '2022-12-15 01:49:20', '2022-12-15 01:49:25'),
(32, NULL, '5555555555', '123456', 1, '2022-12-15 01:50:04', '2024-08-20 06:31:02'),
(33, NULL, '4444444444', '123456', 1, '2022-12-15 01:50:48', '2022-12-15 01:50:52'),
(34, '1', '9999999999', '123456', 1, '2022-12-15 01:51:34', '2023-01-04 00:32:28'),
(35, NULL, '3333333333', '123456', 1, '2022-12-15 01:57:31', '2022-12-15 01:57:36'),
(36, '1', '9999999999', '123456', 1, '2022-12-15 03:04:23', '2023-01-04 00:32:28'),
(37, NULL, '1111111111', '123456', 1, '2022-12-16 01:11:57', '2023-01-05 23:50:16'),
(38, NULL, '2222222222', '123456', 1, '2022-12-16 01:31:18', '2022-12-16 02:45:29'),
(39, '8', '2222222222', '123456', 1, '2022-12-16 01:32:18', '2022-12-16 02:45:29'),
(40, NULL, '1111122222', '123456', 1, '2022-12-16 01:44:16', '2022-12-16 01:46:18'),
(41, '9', '1111122222', '123456', 1, '2022-12-16 01:44:51', '2022-12-16 01:46:18'),
(42, '9', '1111122222', '123456', 1, '2022-12-16 01:46:14', '2022-12-16 01:46:18'),
(43, NULL, '3333344444', '123456', 1, '2022-12-16 01:46:34', '2022-12-16 01:47:04'),
(44, '10', '3333344444', '123456', 1, '2022-12-16 01:47:00', '2022-12-16 01:47:04'),
(45, NULL, '9999922222', '123456', 1, '2022-12-16 01:49:17', '2022-12-16 01:52:09'),
(46, '11', '9999922222', '123456', 1, '2022-12-16 01:50:31', '2022-12-16 01:52:09'),
(47, '11', '9999922222', '123456', 1, '2022-12-16 01:52:02', '2022-12-16 01:52:09'),
(48, NULL, '1111111111', '123456', 1, '2022-12-16 02:19:24', '2023-01-05 23:50:16'),
(49, '12', '1111111111', '123456', 1, '2022-12-16 02:19:45', '2023-01-05 23:50:16'),
(50, '12', '1111111111', '123456', 1, '2022-12-16 02:20:31', '2023-01-05 23:50:16'),
(51, '12', '1111111111', '123456', 1, '2022-12-16 02:35:50', '2023-01-05 23:50:16'),
(52, NULL, '2222222222', '123456', 1, '2022-12-16 02:39:45', '2022-12-16 02:45:29'),
(53, '13', '2222222222', '123456', 1, '2022-12-16 02:40:09', '2022-12-16 02:45:29'),
(54, NULL, '2222222222', '123456', 1, '2022-12-16 02:43:10', '2022-12-16 02:45:29'),
(55, '14', '2222222222', '123456', 1, '2022-12-16 02:43:47', '2022-12-16 02:45:29'),
(56, '14', '2222222222', '123456', 1, '2022-12-16 02:44:25', '2022-12-16 02:45:29'),
(57, '14', '2222222222', '123456', 1, '2022-12-16 02:45:26', '2022-12-16 02:45:29'),
(58, NULL, '0000000000', '123456', 1, '2022-12-16 06:21:16', '2023-01-06 03:46:38'),
(59, NULL, '7777777779', '123456', 1, '2022-12-16 06:34:50', '2022-12-19 23:35:09'),
(60, '15', '0000000000', '123456', 1, '2022-12-16 06:49:48', '2023-01-06 03:46:38'),
(61, '12', '1111111111', '123456', 1, '2022-12-16 23:06:02', '2023-01-05 23:50:16'),
(62, '12', '1111111111', '123456', 1, '2022-12-17 00:55:19', '2023-01-05 23:50:16'),
(63, '15', '0000000000', '123456', 1, '2022-12-17 00:56:06', '2023-01-06 03:46:38'),
(64, NULL, '5656565656', '123456', 1, '2022-12-19 06:17:13', '2022-12-19 06:17:17'),
(65, NULL, '3434343434', '123456', 1, '2022-12-19 06:18:25', '2022-12-19 06:18:29'),
(66, '16', '7777777779', '123456', 1, '2022-12-19 23:35:04', '2022-12-19 23:35:09'),
(67, NULL, '8888888888', '123456', 1, '2023-01-02 08:03:30', '2023-01-03 23:19:01'),
(68, NULL, '9999999999', '123456', 1, '2023-01-03 02:36:54', '2023-01-04 00:32:28'),
(69, NULL, '9999999999', '123456', 1, '2023-01-03 02:40:42', '2023-01-04 00:32:28'),
(70, NULL, '9999999999', '123456', 1, '2023-01-03 02:41:06', '2023-01-04 00:32:28'),
(71, NULL, '9999999999', '123456', 1, '2023-01-03 02:42:10', '2023-01-04 00:32:28'),
(72, NULL, '6666666666', '123456', 1, '2023-01-03 02:42:54', '2023-01-03 04:39:11'),
(73, NULL, '9999999999', '123456', 1, '2023-01-03 02:44:39', '2023-01-04 00:32:28'),
(74, NULL, '6666666666', '123456', 1, '2023-01-03 02:46:57', '2023-01-03 04:39:11'),
(75, NULL, '9999999999', '1234', 1, '2023-01-03 02:57:26', '2023-01-04 00:32:28'),
(76, NULL, '9999999999', '1234', 1, '2023-01-03 04:07:25', '2023-01-04 00:32:28'),
(77, NULL, '9999999999', '1234', 1, '2023-01-03 04:08:01', '2023-01-04 00:32:28'),
(78, NULL, '6666666666', '1234', 1, '2023-01-03 04:17:52', '2023-01-03 04:39:11'),
(79, NULL, '6666666666', '1234', 1, '2023-01-03 04:21:07', '2023-01-03 04:39:11'),
(80, NULL, '8888888888', '1234', 1, '2023-01-03 04:22:00', '2023-01-03 23:19:01'),
(81, NULL, '7878786555', '1234', 0, '2023-01-03 04:23:32', '2023-01-03 04:23:32'),
(82, NULL, '6666666666', '1234', 1, '2023-01-03 04:24:25', '2023-01-03 04:39:11'),
(83, NULL, '6666666666', '1234', 1, '2023-01-03 04:26:20', '2023-01-03 04:39:11'),
(84, NULL, '9999999999', '1234', 1, '2023-01-03 04:27:47', '2023-01-04 00:32:28'),
(85, NULL, '9999999999', '1234', 1, '2023-01-03 04:29:20', '2023-01-04 00:32:28'),
(86, NULL, '9999999999', '1234', 1, '2023-01-03 04:30:00', '2023-01-04 00:32:28'),
(87, NULL, '9999999999', '1234', 1, '2023-01-03 04:31:26', '2023-01-04 00:32:28'),
(88, NULL, '9999999999', '1234', 1, '2023-01-03 04:36:11', '2023-01-04 00:32:28'),
(89, NULL, '9999999999', '1234', 1, '2023-01-03 04:37:24', '2023-01-04 00:32:28'),
(90, NULL, '8888888888', '1234', 1, '2023-01-03 04:38:16', '2023-01-03 23:19:01'),
(91, NULL, '6666666666', '1234', 1, '2023-01-03 04:39:06', '2023-01-03 04:39:11'),
(92, NULL, '8888888888', '1234', 1, '2023-01-03 05:05:08', '2023-01-03 23:19:01'),
(93, NULL, '9999999999', '1234', 1, '2023-01-03 05:06:01', '2023-01-04 00:32:28'),
(94, NULL, '8888888888', '1234', 1, '2023-01-03 06:01:38', '2023-01-03 23:19:01'),
(95, '1', '8888888888', '1234', 1, '2023-01-03 06:26:04', '2023-01-03 23:19:01'),
(96, NULL, '9999999999', '1234', 1, '2023-01-03 06:34:21', '2023-01-04 00:32:28'),
(97, NULL, '9999999999', '1234', 1, '2023-01-03 06:42:14', '2023-01-04 00:32:28'),
(98, NULL, '9911223344', '1234', 1, '2023-01-03 07:02:13', '2023-01-03 07:02:21'),
(99, '3', '9999999999', '1234', 1, '2023-01-03 07:32:12', '2023-01-04 00:32:28'),
(100, '3', '9999999999', '1234', 1, '2023-01-03 07:32:35', '2023-01-04 00:32:28'),
(101, NULL, '7788778877', '1234', 1, '2023-01-03 08:06:06', '2023-01-03 08:06:12'),
(102, NULL, '8877665544', '1234', 0, '2023-01-03 08:30:33', '2023-01-03 08:30:33'),
(103, NULL, '8877665544', '1234', 0, '2023-01-03 08:36:53', '2023-01-03 08:36:53'),
(104, '1', '8888888888', '1234', 1, '2023-01-03 23:18:53', '2023-01-03 23:19:01'),
(105, NULL, '1111111111', '1234', 1, '2023-01-03 23:27:12', '2023-01-05 23:50:16'),
(106, '3', '9999999999', '1234', 1, '2023-01-03 23:40:08', '2023-01-04 00:32:28'),
(107, '3', '9999999999', '1234', 1, '2023-01-03 23:40:43', '2023-01-04 00:32:28'),
(108, '3', '9999999999', '1234', 1, '2023-01-03 23:41:16', '2023-01-04 00:32:28'),
(109, '3', '9999999999', '1234', 1, '2023-01-03 23:43:10', '2023-01-04 00:32:28'),
(110, '3', '9999999999', '1234', 1, '2023-01-03 23:46:40', '2023-01-04 00:32:28'),
(111, '3', '9999999999', '1234', 1, '2023-01-04 00:25:33', '2023-01-04 00:32:28'),
(112, '3', '9999999999', '1234', 1, '2023-01-04 00:25:51', '2023-01-04 00:32:28'),
(113, '3', '9999999999', '1234', 1, '2023-01-04 00:26:21', '2023-01-04 00:32:28'),
(114, '3', '9999999999', '1234', 1, '2023-01-04 00:27:13', '2023-01-04 00:32:28'),
(115, '3', '9999999999', '1234', 1, '2023-01-04 00:27:29', '2023-01-04 00:32:28'),
(116, '3', '9999999999', '1234', 1, '2023-01-04 00:32:24', '2023-01-04 00:32:28'),
(117, '3', '9999999999', '1234', 0, '2023-01-04 01:08:09', '2023-01-04 01:08:09'),
(118, '3', '9999999999', '1234', 0, '2023-01-04 01:15:35', '2023-01-04 01:15:35'),
(119, '3', '9999999999', '1234', 0, '2023-01-04 01:16:34', '2023-01-04 01:16:34'),
(120, NULL, '8888877777', '1234', 1, '2023-01-04 01:16:49', '2023-01-04 01:26:56'),
(121, NULL, '8888877777', '1234', 1, '2023-01-04 01:26:40', '2023-01-04 01:26:56'),
(122, NULL, '8888877776', '1234', 1, '2023-01-04 01:36:01', '2023-01-04 01:37:02'),
(123, NULL, '8888855555', '1234', 1, '2023-01-04 01:44:06', '2023-01-04 01:44:18'),
(124, NULL, '8888844444', '1234', 1, '2023-01-04 02:01:29', '2023-01-04 02:48:13'),
(125, '9', '8888844444', '1234', 1, '2023-01-04 02:01:52', '2023-01-04 02:48:13'),
(126, '9', '8888844444', '1234', 1, '2023-01-04 02:48:08', '2023-01-04 02:48:13'),
(127, NULL, '5555555555', '1234', 1, '2023-01-04 02:56:53', '2024-08-20 06:31:02'),
(128, NULL, '3322332233', '123456', 1, '2023-01-04 05:23:06', '2023-01-04 05:23:14'),
(129, '15', '0000000000', '123456', 1, '2023-01-04 05:38:32', '2023-01-06 03:46:38'),
(130, '15', '0000000000', '123456', 1, '2023-01-04 23:24:18', '2023-01-06 03:46:38'),
(131, '10', '5555555555', '1234', 1, '2023-01-05 02:33:05', '2024-08-20 06:31:02'),
(132, '10', '5555555555', '1234', 1, '2023-01-05 02:44:51', '2024-08-20 06:31:02'),
(133, '15', '0000000000', '123456', 1, '2023-01-05 04:57:46', '2023-01-06 03:46:38'),
(134, '10', '5555555555', '1234', 1, '2023-01-05 05:33:44', '2024-08-20 06:31:02'),
(135, '10', '5555555555', '1234', 1, '2023-01-05 23:27:36', '2024-08-20 06:31:02'),
(136, '10', '5555555555', '1234', 1, '2023-01-05 23:48:09', '2024-08-20 06:31:02'),
(137, '6', '1111111111', '1234', 1, '2023-01-05 23:50:07', '2023-01-05 23:50:16'),
(138, '15', '0000000000', '123456', 1, '2023-01-06 00:28:57', '2023-01-06 03:46:38'),
(139, '15', '0000000000', '123456', 1, '2023-01-06 03:46:33', '2023-01-06 03:46:38'),
(140, NULL, '1234567890', '1234', 1, '2024-08-18 13:11:48', '2024-08-20 07:33:35'),
(141, NULL, '1234567890', '1234', 1, '2024-08-18 13:11:48', '2024-08-20 07:33:35'),
(142, NULL, '1234567890', '1234', 1, '2024-08-18 13:11:49', '2024-08-20 07:33:35'),
(143, NULL, '1234567890', '1234', 1, '2024-08-18 13:11:50', '2024-08-20 07:33:35'),
(144, NULL, '1234567890', '1234', 1, '2024-08-18 13:11:50', '2024-08-20 07:33:35'),
(145, NULL, '1234567890', '1234', 1, '2024-08-18 13:11:50', '2024-08-20 07:33:35'),
(146, NULL, '7806081143', '1234', 0, '2024-08-20 00:03:44', '2024-08-20 00:03:44'),
(147, NULL, '7806081143', '1234', 0, '2024-08-20 00:03:52', '2024-08-20 00:03:52'),
(148, '11', '1234567890', '1234', 1, '2024-08-20 01:56:56', '2024-08-20 07:33:35'),
(149, '11', '1234567890', '1234', 1, '2024-08-20 01:57:57', '2024-08-20 07:33:35'),
(150, '11', '1234567890', '1234', 1, '2024-08-20 01:58:12', '2024-08-20 07:33:35'),
(151, '11', '1234567890', '1234', 1, '2024-08-20 01:58:36', '2024-08-20 07:33:35'),
(152, '11', '1234567890', '1234', 1, '2024-08-20 05:49:08', '2024-08-20 07:33:35'),
(153, '11', '1234567890', '1234', 1, '2024-08-20 05:53:34', '2024-08-20 07:33:35'),
(154, '11', '1234567890', '1234', 1, '2024-08-20 05:56:27', '2024-08-20 07:33:35'),
(155, '11', '1234567890', '1234', 1, '2024-08-20 05:57:04', '2024-08-20 07:33:35'),
(156, '10', '5555555555', '1234', 1, '2024-08-20 06:00:23', '2024-08-20 06:31:02'),
(157, '10', '5555555555', '1234', 1, '2024-08-20 06:00:59', '2024-08-20 06:31:02'),
(158, '10', '5555555555', '1234', 1, '2024-08-20 06:01:16', '2024-08-20 06:31:02'),
(159, '10', '5555555555', '1234', 1, '2024-08-20 06:04:49', '2024-08-20 06:31:02'),
(160, '10', '5555555555', '1234', 1, '2024-08-20 06:30:58', '2024-08-20 06:31:02'),
(161, '11', '1234567890', '1234', 1, '2024-08-20 07:33:26', '2024-08-20 07:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `loc_latitude` varchar(255) DEFAULT NULL,
  `loc_longitude` varchar(255) DEFAULT NULL,
  `loc_address` varchar(255) DEFAULT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `device_token` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `address`, `role`, `profile_pic`, `loc_latitude`, `loc_longitude`, `loc_address`, `email_verified_at`, `remember_token`, `device_token`, `deleted_at`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Sharma', '8888888888', 'rahul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 17:10:10', 'Yes', '2023-01-03 06:10:10', '2023-01-03 06:10:10'),
(2, 'thftghf', '5654676576', 'fghfgh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 17:22:29', 'Yes', '2023-01-03 06:22:29', '2023-01-03 06:25:07'),
(3, 'nisha', '9999999999', 'nisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 17:43:26', 'Yes', '2023-01-03 06:43:26', '2023-01-03 06:44:31'),
(4, 'Sahil kumar sahu', '9911223344', 'sandeep@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 18:02:29', 'Yes', '2023-01-03 07:02:29', '2023-01-03 07:02:29'),
(5, 'dinesh', '7788778877', 'dinesh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2023-01-03 08:06:24', '2023-01-03 08:06:24'),
(6, 'Sahil kumar sahu', '1111111111', 'stock@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2023-01-03 23:27:40', '2023-01-04 01:16:15'),
(7, 'nisha', '8888877776', 'nisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 01:37:40', '2023-01-04 01:40:47'),
(8, 'nisha', '8888855555', 'nisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 01:44:24', '2023-01-04 01:44:38'),
(9, 'nisha', '8888844444', 'nisha@gmail.com', 'raipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 02:01:36', '2023-01-04 02:56:19'),
(10, 'nishaa', '5555555555', 'nisha@gmail.com', 'raipur', NULL, '633012998_profile_pic.jpg', '5765765', '6576788', 'raipur', NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 02:57:21', '2023-01-05 23:33:36'),
(11, 'suraj', '1234567890', 'suraj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2024-08-20 00:54:10', '2024-08-20 00:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approved` varchar(255) NOT NULL DEFAULT 'pending',
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'vendor',
  `category` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `loc_latitude` varchar(255) DEFAULT NULL,
  `loc_longitude` varchar(255) DEFAULT NULL,
  `loc_address` varchar(255) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `owner_mobile` varchar(255) DEFAULT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `device_token` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `approved`, `name`, `mobile`, `email`, `address`, `role`, `category`, `profile_pic`, `loc_latitude`, `loc_longitude`, `loc_address`, `owner_name`, `owner_mobile`, `email_verified_at`, `remember_token`, `device_token`, `deleted_at`, `is_active`, `status`, `created_at`, `updated_at`) VALUES
(1, 'approved', 'Nisha Yadav', '9999999999', 'nisha@gmail.com', NULL, 'vendor', 'accomodation', NULL, '31.5778331', '74.33579739999999', 'Railway Station Lahore In Out, Lahore Junction, Swami Nagar, Lahore, Pakistan', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'N', '2022-12-15 01:47:51', '2022-12-19 06:16:39'),
(2, 'approved', 'Rahul Sharma', '8888888888', 'rahul@gmail.com', NULL, 'vendor', 'food', NULL, '24.4615374', '39.6118677', 'Bilal Ibn Rabah Mosque, Abdul Muhsin Ibn Abdul Aziz, Medina Saudi Arabia', NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Y', '2022-12-15 01:48:42', '2022-12-19 23:20:29'),
(3, 'approved', 'Anjali sharma', '7777777777', 'anjali@gmail.com', NULL, 'vendor', 'transport', NULL, '37.8199286', '-122.4782551', 'Golden Gate Bridge, Golden Gate Bridge, San Francisco, CA, USA', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'N', '2022-12-15 01:49:36', '2022-12-15 01:53:45'),
(4, 'approved', 'Tina sharma', '5555555555', 'tina@gmail.com', NULL, 'vendor', 'accomodation', NULL, '28.3705684', '-81.51935879999999', 'Disney Springs, Buena Vista Drive, Lake Buena Vista, FL, USA', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-15 01:50:22', '2022-12-19 07:09:52'),
(5, 'approved', 'Garima des', '4444444444', 'garima@gmail.com', NULL, 'vendor', 'food', NULL, '41.31694479999999', '-74.1250465', 'Woodbury Common Premium Outlets, Red Apple Court, Central Valley, NY, USA', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-15 01:51:09', '2022-12-16 01:09:43'),
(6, 'approved', 'Riya', '3333333333', 'riya@gmail.com', NULL, 'vendor', 'transport', NULL, '26.8548793', '75.78710079999999', 'Durgapura Railway Station, Shanti Nagar, Mahaveer Nagar, Durgapura, Jaipur, Rajasthan, India', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-15 01:58:29', '2022-12-15 06:25:46'),
(12, 'approved', 'Nisha', '1111111111', 'admin@gmail.com', NULL, 'vendor', 'transport', NULL, '21.2560366', '81.62964439999999', 'Cross Connection - Station, At the railway Station, Station Road, Station Road, Moudhapara, Raipur, Raipur, Chhattisgarh, India', NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Y', '2022-12-16 02:19:37', '2022-12-19 23:28:20'),
(14, 'approved', 'Nisha', '2222222222', 'crm@gmail.com', NULL, 'vendor', 'transport', NULL, '27.1751448', '78.0421422', 'Taj Mahal, Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh, India', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-16 02:43:26', '2022-12-19 23:27:58'),
(15, 'approved', 'Rahul Sharma', '0000000000', 'admin@gmail.com', NULL, 'vendor', 'accomodation', NULL, '25.198765', '55.2796053', 'The Dubai Mall - Dubai - United Arab Emirates', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-16 06:21:27', '2023-01-04 07:00:50'),
(16, 'approved', 'Rahul Sharma', '7777777779', 'crm@gmail.com', NULL, 'vendor', 'accomodation', NULL, '25.198765', '55.2796053', 'The Dubai Mall - Dubai - United Arab Emirates', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-16 06:35:01', '2022-12-19 07:09:41'),
(17, 'requested', 'hari', '5656565656', 'harish@gmail.com', NULL, 'vendor', 'accomodation', NULL, '21.8913731', '83.39027689999999', 'Raigarh Railway Station Retiring Room, Drogapara Road, Agrasen Colony, Raigarh, Chhattisgarh, India', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-19 06:17:29', '2022-12-19 06:18:15'),
(18, 'approved', 'yuvi', '3434343434', 'yuvi@gmail.com', NULL, 'vendor', 'food', NULL, '23.4940978', '87.3176706', 'Durgapur Railway Station, Railway Ground Rail Colony, Durgapur, West Bengal, India', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2022-12-19 06:18:43', '2022-12-19 23:20:19'),
(19, 'pending', 'sssss', '3322332233', 'sssss@gmail.com', NULL, 'vendor', 'accomodation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Y', '2023-01-04 05:23:34', '2023-01-04 05:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquaries`
--
ALTER TABLE `enquaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secrets`
--
ALTER TABLE `secrets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `owner_name` (`owner_name`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquaries`
--
ALTER TABLE `enquaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `secrets`
--
ALTER TABLE `secrets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
