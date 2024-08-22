-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 10:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometoexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodations`
--

CREATE TABLE `accomodations` (
  `id` int(255) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `max_person` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `extra_person` varchar(255) DEFAULT NULL,
  `extra_person_price` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Y',
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodations`
--

INSERT INTO `accomodations` (`id`, `vendor_id`, `max_person`, `price`, `extra_person`, `extra_person_price`, `status`, `is_active`) VALUES
(1, '1', '34', '946', '49', '60477', 'Y', 'No'),
(2, '16', '2', '2000', '1', '1000', 'Y', 'Yes'),
(3, '15', '66', '366', '50', '737', 'Y', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sub-admin' COMMENT 'admin',
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '2022-12-05 03:19:26', '$2y$10$QlXxW.auPM1xIIL2XDzlZ.qlijhhZFHfnvdOsBZEylLemwF87yipS', 'admin', 'Yes', NULL, '2022-12-05 03:19:26', '2022-12-05 03:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persons_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_orders`
--

CREATE TABLE `booking_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_applied` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `coupon_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(255) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accomodation_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accomodation_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accomodation_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buisness_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buisness_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buisness_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `vendor_id`, `type`, `accomodation_type`, `accomodation_name`, `accomodation_address`, `enquiry_number`, `buisness_name`, `buisness_address`, `gst`, `buisness_city`, `featured`, `thumbnail`, `description`, `deleted_at`, `is_active`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'accomodation', 'Hotel', 'Gurukul', 'Raipur', '7788998877', NULL, NULL, '555555555', 'Raipur', 'Yes', NULL, NULL, '2023-01-04 09:56:58', 'Yes', 'Y', NULL, NULL),
(2, 2, 'food', NULL, NULL, NULL, '8899004456', 'Food Buisness', 'Raipur', '111111111111', 'Raipur', 'No', NULL, NULL, '2022-12-16 06:13:10', 'Yes', 'Y', NULL, NULL),
(3, 3, 'transport', NULL, NULL, NULL, '8877665544', 'Transport buisness', 'Raipur', NULL, 'Raipur', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(4, 4, 'accomodation', 'PG', 'Gurukul', 'Raipur', '8877665544', NULL, NULL, '56758975896', 'Raipur', 'Yes', NULL, NULL, '2023-01-04 09:57:34', 'Yes', 'Y', NULL, NULL),
(5, 5, 'food', NULL, NULL, NULL, '8899004455', 'Food Buisness', 'Raipur', '111111111111', 'Raipur', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(6, 6, 'transport', NULL, NULL, NULL, '8899004455', 'Tata buiness', 'Raipur', NULL, 'Raipur', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(7, 12, 'transport', NULL, NULL, NULL, '36456456', 'Tata buiness', 'Raipur', NULL, 'dfgdfgdg', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(8, 14, 'transport', NULL, NULL, NULL, '36456456', 'Tata buiness', 'Raipur', NULL, 'dfgdfgdf', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(9, 15, 'accomodation', 'Dharamsala', 'Gurukul', 'fghfgh', '7788998877', NULL, NULL, '56758975896', 'dfvxdgvdfgooo', 'Yes', '541517156_thumbnail.jpg', NULL, '2023-01-05 07:48:45', 'Yes', 'Y', NULL, NULL),
(10, 16, 'accomodation', 'Hotel', 'dfghdfhgdh', 'Raipur', '7788998877', NULL, NULL, '04AABCU9603R1ZV', 'Raipur', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(11, 17, 'accomodation', 'Dharamsala', 'Gurukul', 'Raipur', '7788998877', NULL, NULL, '06AAKFD9709P2ZP', 'Raipur', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL),
(12, 18, 'food', NULL, NULL, NULL, '7788998877', 'Tata buiness', 'Raipur', '06AAKFD9709P2ZP', 'Raipur', 'No', NULL, NULL, NULL, 'Yes', 'Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `is_active`, `status`) VALUES
(1, 'JEE', 'Yes', 'Y'),
(2, 'NEET', 'Yes', 'Y'),
(3, 'SSC MTS', 'Yes', 'Y'),
(4, 'SSC GDS', 'Yes', 'Y'),
(5, 'ARMY EXAM', 'Yes', 'Y'),
(6, 'SSC CHSL', 'Yes', 'Y'),
(7, 'SCHOOL EXAM', 'Yes', 'Y'),
(8, 'COLLEGE EXAM', 'Yes', 'Y');

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
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(255) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `meal_description` varchar(1000) DEFAULT NULL,
  `meal_image` varchar(255) DEFAULT NULL,
  `meal_time` varchar(255) DEFAULT NULL,
  `regular_price` varchar(255) DEFAULT NULL,
  `sales_price` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `is_active` varchar(255) DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `vendor_id`, `plan_name`, `meal_description`, `meal_image`, `meal_time`, `regular_price`, `sales_price`, `status`, `is_active`) VALUES
(1, '1', 'Helen Gilliam', 'Debitis facilis accu', '484311814_food.jpg', 'Lunch', '868', '487', 'Y', 'Yes'),
(2, '1', 'April Dixon', 'Exercitation eos vol', NULL, 'Snacks', '737', '648', 'N', 'Yes'),
(3, '15', 'Illana Sloan', 'Ullamco distinctio', '704920333_food.jpg', 'Dinner', '509', '571', 'Y', 'Yes'),
(4, '15', 'Evan Burris', 'Voluptas id dolorem', '724922387_food.jfif', 'Dinner', '578', '16', 'Y', 'Yes');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description varchar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('264521ddedef3d02b720e142be08bdd5f47fa689ebe66d8359739a10bb5e07766acc9e53ce798664', 10, 1, 'hometoexam', '[]', 0, '2023-01-04 03:00:08', '2023-01-04 03:00:08', '2024-01-04 08:30:08'),
('47b60bab193ad53d2b79c4e0b2207c6817a25e80701d77bf7f4f5ef1114e5e17686eb58a6b68ef25', 9, 1, 'hometoexam', '[]', 0, '2023-01-04 02:48:13', '2023-01-04 02:48:13', '2024-01-04 08:18:13'),
('51453f0be81a8bd17a0ebb85ab124a4b933f0111883bf1a7e643efbf343cdf4075bf6975df0144f7', 9, 1, 'hometoexam', '[]', 0, '2023-01-04 02:01:55', '2023-01-04 02:01:55', '2024-01-04 07:31:55'),
('699f1121ae2429ea80832942accb80c4f94c61dcd262075719ad163b9ad81fc2f5ccab7254942c15', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 02:44:57', '2023-01-05 02:44:57', '2024-01-05 08:14:57'),
('86e1266a12964b2d740744444cfdb441e93af327ee641585294f49d898a8ffb12e3992346ab5ab68', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 23:48:12', '2023-01-05 23:48:13', '2024-01-06 05:18:12'),
('a18042823179f082743144532dcd570b2ff8127a701dfb7069a6845735d257c302413634d9a726c7', 8, 1, 'hometoexam', '[]', 0, '2023-01-04 01:44:38', '2023-01-04 01:44:38', '2024-01-04 07:14:38'),
('a6d8c83aa02b7fa50a53c2535542137e51b3470e800a317e5e73e2502e359dcfae4c9c9075950df0', 3, 1, 'hometoexam', '[]', 0, '2023-01-04 00:32:29', '2023-01-04 00:32:29', '2024-01-04 06:02:29'),
('adcbe2032412d4cfcba1ce1999082a462828960c89a621fc1c1989c914f74c00388de009ebe6e7dc', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 05:33:47', '2023-01-05 05:33:47', '2024-01-05 11:03:47'),
('b3bb20f249b49ad114798ea8868fd73f055bfb505fd5832ec3c9cc670b443848d58df7b0470aad04', 6, 1, 'hometoexam', '[]', 0, '2023-01-05 23:50:16', '2023-01-05 23:50:16', '2024-01-06 05:20:16'),
('cd0b302f969d8319720d1d62bd3d771dabaf5b59c8fd4fb2592fd484e5cd8b0a19d413afc21da12c', 10, 1, 'hometoexam', '[]', 0, '2023-01-05 23:27:39', '2023-01-05 23:27:39', '2024-01-06 04:57:39'),
('ec263aabaad413b1e84bb72efd6639572cf07e29f2937e6424d878a431a6036688eec082ab2f0ea9', 7, 1, 'hometoexam', '[]', 0, '2023-01-04 01:40:47', '2023-01-04 01:40:47', '2024-01-04 07:10:47'),
('f615b4499b39b5293bc54dd28253cebe9339dafb6a5d77696648fbc35f11f213b4e33855f991b74b', 7, 1, 'hometoexam', '[]', 0, '2023-01-04 01:40:25', '2023-01-04 01:40:25', '2024-01-04 07:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_applied` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `coupon_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `name`, `is_active`, `status`) VALUES
(1, 'High School', 'Yes', 'Y'),
(2, 'Higher secondary', 'Yes', 'Y'),
(3, 'Under Graduate', 'Yes', 'Y'),
(4, 'Graduate', 'Yes', 'Y'),
(5, 'Post Graduate', 'Yes', 'Y'),
(6, 'Diploma', 'Yes', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `name`, `is_active`, `status`) VALUES
(1, 'Father', 'Yes', 'Y'),
(2, 'Mother', 'Yes', 'Y'),
(3, 'Brother', 'Yes', 'Y'),
(4, 'Sister', 'Yes', 'Y'),
(5, 'Cousin', 'Yes', 'Y'),
(6, 'Uncle', 'Yes', 'Y'),
(7, 'Aunty', 'Yes', 'Y'),
(8, 'Grand-Father', 'Yes', 'Y'),
(9, 'Friend', 'Yes', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_categories`
--

CREATE TABLE `review_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secrets`
--

CREATE TABLE `secrets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(32, NULL, '5555555555', '123456', 1, '2022-12-15 01:50:04', '2023-01-05 23:48:12'),
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
(127, NULL, '5555555555', '1234', 1, '2023-01-04 02:56:53', '2023-01-05 23:48:12'),
(128, NULL, '3322332233', '123456', 1, '2023-01-04 05:23:06', '2023-01-04 05:23:14'),
(129, '15', '0000000000', '123456', 1, '2023-01-04 05:38:32', '2023-01-06 03:46:38'),
(130, '15', '0000000000', '123456', 1, '2023-01-04 23:24:18', '2023-01-06 03:46:38'),
(131, '10', '5555555555', '1234', 1, '2023-01-05 02:33:05', '2023-01-05 23:48:12'),
(132, '10', '5555555555', '1234', 1, '2023-01-05 02:44:51', '2023-01-05 23:48:12'),
(133, '15', '0000000000', '123456', 1, '2023-01-05 04:57:46', '2023-01-06 03:46:38'),
(134, '10', '5555555555', '1234', 1, '2023-01-05 05:33:44', '2023-01-05 23:48:12'),
(135, '10', '5555555555', '1234', 1, '2023-01-05 23:27:36', '2023-01-05 23:48:12'),
(136, '10', '5555555555', '1234', 1, '2023-01-05 23:48:09', '2023-01-05 23:48:12'),
(137, '6', '1111111111', '1234', 1, '2023-01-05 23:50:07', '2023-01-05 23:50:16'),
(138, '15', '0000000000', '123456', 1, '2023-01-06 00:28:57', '2023-01-06 03:46:38'),
(139, '15', '0000000000', '123456', 1, '2023-01-06 03:46:33', '2023-01-06 03:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` enum('Accommodation','Foods','Transport') COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_and_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gst_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fssai_certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_reviews` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Approved','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settlements`
--

CREATE TABLE `settlements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settlement_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_refrence_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settlement_date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_refrence_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` int(255) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `transport_description` varchar(255) DEFAULT NULL,
  `transport_image` varchar(255) DEFAULT NULL,
  `regular_price` varchar(255) DEFAULT NULL,
  `sales_price` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `is_active` varchar(255) NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `vendor_id`, `plan_name`, `transport_description`, `transport_image`, `regular_price`, `sales_price`, `status`, `is_active`) VALUES
(1, '1', 'Ulysses Albert', 'Consequatur Volupta', NULL, '996', '814', 'Y', 'Yes'),
(2, '1', 'Delilah Morton', 'Nemo consectetur qu', NULL, '923', '155', 'Y', 'Yes'),
(3, '15', 'Irene Watkins', 'Consequat Ea labori', '839880092_transport.png', '327', '377', 'Y', 'Yes'),
(4, '15', 'Amity Dejesus', 'Ut sequi consectetur', '142522240_transport.jpg', '115', '137', 'Y', 'Yes'),
(5, '15', 'Reece Shaw', 'Laudantium et ut ea', '523800636_transport.jpg', '397', '359', 'Y', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highest_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_preparation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `address`, `role`, `profile_pic`, `loc_latitude`, `loc_longitude`, `loc_address`, `highest_qualification`, `current_preparation`, `guardian_name`, `guardian_number`, `guardian_relation`, `email_verified_at`, `remember_token`, `device_token`, `deleted_at`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Sharma', '8888888888', 'rahul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 17:10:10', 'Yes', '2023-01-03 06:10:10', '2023-01-03 06:10:10'),
(2, 'thftghf', '5654676576', 'fghfgh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'rgtdgd', 'dfgdfg', 'gfgdfg', 'fgdfg', 'gfdgdfg', NULL, NULL, NULL, '2023-01-03 17:22:29', 'Yes', '2023-01-03 06:22:29', '2023-01-03 06:25:07'),
(3, 'nisha', '9999999999', 'nisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'abc', 'abc', 'abc', 'abc', NULL, NULL, NULL, '2023-01-03 17:43:26', 'Yes', '2023-01-03 06:43:26', '2023-01-03 06:44:31'),
(4, 'Sahil kumar sahu', '9911223344', 'sandeep@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 18:02:29', 'Yes', '2023-01-03 07:02:29', '2023-01-03 07:02:29'),
(5, 'dinesh', '7788778877', 'dinesh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '2023-01-03 08:06:24', '2023-01-03 08:06:24'),
(6, 'Sahil kumar sahu', '1111111111', 'stock@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'abc', 'abc', 'abc', 'abc', NULL, NULL, NULL, NULL, 'Yes', '2023-01-03 23:27:40', '2023-01-04 01:16:15'),
(7, 'nisha', '8888877776', 'nisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'abc', 'abc', 'abc', 'abc', NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 01:37:40', '2023-01-04 01:40:47'),
(8, 'nisha', '8888855555', 'nisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'abc', 'abc', 'abc', 'abc', NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 01:44:24', '2023-01-04 01:44:38'),
(9, 'nisha', '8888844444', 'nisha@gmail.com', 'raipur', NULL, NULL, NULL, NULL, NULL, 'xyz', 'xyz', 'abc', 'abc', 'xyz', NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 02:01:36', '2023-01-04 02:56:19'),
(10, 'nishaa', '5555555555', 'nisha@gmail.com', 'raipur', NULL, '633012998_profile_pic.jpg', '5765765', '6576788', 'raipur', 'xyz', 'xyz', 'abc', 'abc', 'xyz', NULL, NULL, NULL, NULL, 'Yes', '2023-01-04 02:57:21', '2023-01-05 23:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vendor',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
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
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodations`
--
ALTER TABLE `accomodations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_orders`
--
ALTER TABLE `booking_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_categories`
--
ALTER TABLE `review_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secrets`
--
ALTER TABLE `secrets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type` (`service_type`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settlements`
--
ALTER TABLE `settlements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
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
-- AUTO_INCREMENT for table `accomodations`
--
ALTER TABLE `accomodations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_orders`
--
ALTER TABLE `booking_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_categories`
--
ALTER TABLE `review_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secrets`
--
ALTER TABLE `secrets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlements`
--
ALTER TABLE `settlements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
