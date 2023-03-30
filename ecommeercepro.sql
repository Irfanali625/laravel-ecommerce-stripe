-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2023 at 05:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommeercepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(8, 'Mobile', '2023-03-20 02:13:21', '2023-03-20 02:13:21'),
(9, 'Laptop', '2023-03-20 02:13:26', '2023-03-20 02:13:26'),
(10, 'Computer', '2023-03-20 02:13:31', '2023-03-20 02:13:31'),
(11, 'Glasses', '2023-03-22 05:23:58', '2023-03-22 05:23:58'),
(13, 'Casmatic', '2023-03-25 13:51:56', '2023-03-25 13:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_17_072134_create_sessions_table', 1),
(7, '2023_03_17_105936_create_catagories_table', 2),
(8, '2023_03_20_100651_create_products_table', 3),
(9, '2023_03_23_184747_create_carts_table', 4),
(10, '2023_03_25_092205_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(2, 'user', 'user@gmail.com', '12345678', 'swat', '1', 'Laptop', '3', '540', '1679481248.jpg', '5', 'Cash on Delivery', 'Delivered', '2023-03-25 04:43:12', '2023-03-26 23:34:49'),
(7, 'user', 'user@gmail.com', '12345678', 'swat', '1', 'Laptop', '1', '180', '1679481248.jpg', '5', 'Paid', 'Delivered', '2023-03-25 12:31:02', '2023-03-26 23:38:48'),
(8, 'user', 'user@gmail.com', '12345678', 'swat', '1', 'Sunglasses', '1', '50', '1679480701.jpg', '1', 'Paid', 'Delivered', '2023-03-25 12:59:50', '2023-03-27 01:27:23'),
(9, 'user', 'user@gmail.com', '12345678', 'swat', '1', 'Test', '2', '80', '1679770416.jpeg', '7', 'Cash on Delivery', 'Delivered', '2023-03-25 13:55:45', '2023-03-29 12:06:39'),
(10, 'user', 'user@gmail.com', '12345678', 'swat', '1', 'Headphones', '2', '60', '1679481142.jpg', '4', 'Paid', 'Delivered', '2023-03-25 13:58:45', '2023-03-29 12:15:05'),
(11, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Footwear', '1', '40', '1679480874.jpg', '2', 'Cash on Delivery', 'Delivered', '2023-03-27 01:29:49', '2023-03-27 01:30:04'),
(12, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Laptop', '1', '180', '1679481248.jpg', '5', 'Cash on Delivery', 'Delivered', '2023-03-29 12:17:52', '2023-03-29 12:18:46'),
(13, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Test', '1', '40', '1679770416.jpeg', '7', 'Cash on Delivery', 'Delivered', '2023-03-29 12:27:47', '2023-03-29 12:27:56'),
(14, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Sneaker', '1', '50', '1679481030.jpg', '3', 'Cash on Delivery', 'Delivered', '2023-03-29 12:29:19', '2023-03-29 12:29:46'),
(15, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Sunglasses', '1', '50', '1679480701.jpg', '1', 'Cash on Delivery', 'Delivered', '2023-03-29 12:34:39', '2023-03-29 12:50:51'),
(16, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Laptop', '1', '180', '1679481248.jpg', '5', 'Cash on Delivery', 'Processing', '2023-03-29 12:42:02', '2023-03-29 12:42:02'),
(17, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Sunglasses', '1', '50', '1679480701.jpg', '1', 'Cash on Delivery', 'Processing', '2023-03-29 12:43:17', '2023-03-29 12:43:17'),
(18, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Sunglasses', '1', '50', '1679480701.jpg', '1', 'Cash on Delivery', 'Processing', '2023-03-29 12:44:40', '2023-03-29 12:44:40'),
(19, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Footwear', '1', '40', '1679480874.jpg', '2', 'Cash on Delivery', 'Processing', '2023-03-29 12:45:42', '2023-03-29 12:45:42'),
(20, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Test', '1', '40', '1679770416.jpeg', '7', 'Cash on Delivery', 'Processing', '2023-03-29 12:47:32', '2023-03-29 12:47:32'),
(21, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Sunglasses', '1', '50', '1679480701.jpg', '1', 'Cash on Delivery', 'Processing', '2023-03-29 12:49:02', '2023-03-29 12:49:02'),
(22, 'Irfan Swati', 'irfanswatihacker@gmail.com', '131313', 'swat', '4', 'Footwear', '1', '40', '1679480874.jpg', '2', 'Cash on Delivery', 'Processing', '2023-03-29 12:49:32', '2023-03-29 12:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `category`, `quantity`, `price`, `discount_price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sunglasses', 'Ainak is providing', 'Glasses', '20', '70', '50', '1679480701.jpg', '2023-03-22 05:25:01', '2023-03-22 05:25:01'),
(2, 'Footwear', 'Safe Trading Branded', 'Shoes', '10', '40', NULL, '1679480874.jpg', '2023-03-22 05:27:54', '2023-03-22 05:27:54'),
(3, 'Sneaker', 'Safe Trading Branded', 'Shoes', '30', '60', '50', '1679481030.jpg', '2023-03-22 05:30:30', '2023-03-22 05:30:30'),
(4, 'Headphones', 'Headphones are a pair ', 'Mobile', '10', '30', NULL, '1679481142.jpg', '2023-03-22 05:32:23', '2023-03-22 05:32:23'),
(5, 'Laptop', 'Creative Technology', 'Laptop', '5', '200', '180', '1679481248.jpg', '2023-03-22 05:34:08', '2023-03-22 05:34:08'),
(6, 'iPhone 11', 'Top-tier Global Sourcing Marketplace. From ', 'Mobile', '5', '800', NULL, '1679481382.jpg', '2023-03-22 05:36:22', '2023-03-22 05:36:22'),
(7, 'Test', 'Test', 'Casmatic', '20', '50', '40', '1679770416.jpeg', '2023-03-25 13:53:36', '2023-03-25 13:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('arxDWPycGmh1J8oNDiJ6eDLLnx8iGbLdCozctMYR', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRVlZZ2Z1T1pNNndkQ1BFZ3Z5M0RMR0lSVHdQelZGWjRKT09HRGJPaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lZXJjZVByby9wdWJsaWMvb3JkZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1680112260),
('d2qLEjMGTe6HFzYV3Oys6YXZxQI4VpOLezXyUKiw', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZU9FaGE0aFFvbmh4d0YyS2NHOHBENEdTYmUwZExTV256Z0JxT2hIVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lZXJjZVByby9wdWJsaWMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1680150463),
('Q5acymfedqjWTzfuaDadmlZPgJta2TdJC1SHiqMc', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNjhNamtKbTlWM0RHMlFMNk5md09IWE91OGFLTzQwNGlIeVRBSjFPTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lZXJjZVByby9wdWJsaWMvc2hvd19jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1680112174);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0', '12345678', 'swat', '2023-03-27 01:21:47', '$2y$10$DFPWkic8cKKEyTMKpH6eO.VdRkU9FJXiKfz3IsKB.vXngPNjVnWXO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 02:34:13', '2023-03-17 02:34:13'),
(2, 'admin', 'admin@gmail.com', '1', '87654321', 'Peshawar', '2023-03-27 01:21:47', '$2y$10$.ai1jgnlSVgqV.xcb0UUdOZVSOUmuJlJsaURLpqcp5oC//TjQBc1q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 02:35:00', '2023-03-17 02:35:00'),
(3, 'Irfan', 'irfan@gmail.com', '0', '47207420', 'Peshawar', '2023-03-27 01:21:47', '$2y$10$1LDnZXnz7MJwD9ottJ2p4OGbxlvGN2U0nwP.Q3u9/CGRtx/fIhRTK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 04:51:45', '2023-03-24 04:51:45'),
(4, 'Irfan Swati', 'irfanswatihacker@gmail.com', '0', '131313', 'swat', '2023-03-27 01:21:47', '$2y$10$202bRHEtm6.rnmXmKwTeWuD.2HD1XbZij529IOOJWhNilc2zTw/2G', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27 01:20:50', '2023-03-27 01:21:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
