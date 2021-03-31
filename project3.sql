-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 02:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, '605729fe1e713.jpg', 'We Can Ensure Your Comfortable Life', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n\r\ntypesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2021-03-21 05:11:58', '2021-03-21 05:11:58'),
(2, '60572b0456a16.jpg', 'We Can Ensure Your Comfortable Life', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n\r\ntypesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-21 05:16:20', '2021-03-21 05:16:20'),
(3, '60572b239f9ba.jpg', 'We Can Ensure Your Comfortable Life', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n\r\ntypesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-03-21 05:16:51', '2021-03-21 05:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, '60531511a8748.jpg', 'Bata', '2021-03-18 02:53:37', '2021-03-18 03:01:42'),
(2, '6053152fb1082.jpg', 'Walton', '2021-03-18 02:54:07', '2021-03-18 02:54:07'),
(3, '605315667bb5a.png', 'Pepsi', '2021-03-18 02:55:02', '2021-03-18 02:55:02'),
(4, '6053157e532c2.png', 'Sony', '2021-03-18 02:55:26', '2021-03-18 02:55:26'),
(5, '60531638eadc5.png', 'Le Reve', '2021-03-18 02:58:33', '2021-03-18 02:58:33'),
(7, '60533e27e4720.png', 'Fanta', '2021-03-18 05:48:55', '2021-03-18 05:48:55'),
(8, '60533e472ba2a.png', 'Hewlett-Packard', '2021-03-18 05:49:27', '2021-03-18 05:49:27'),
(9, '60533e5fb40a2.jpg', 'Apple', '2021-03-18 05:49:51', '2021-03-18 05:49:51'),
(10, '6053417e5e952.jpg', 'North Star', '2021-03-18 06:03:10', '2021-03-18 06:03:10'),
(11, '605341d2e4edb.png', 'Coca-Cola', '2021-03-18 06:04:34', '2021-03-18 06:04:34'),
(12, '605342547b8f0.jpeg', 'Nokia', '2021-03-18 06:06:44', '2021-03-18 06:06:44'),
(13, '605344b0eb77e.png', 'Lifebuoy', '2021-03-18 06:16:49', '2021-03-18 06:16:49'),
(14, '605344f355092.png', 'Savlon', '2021-03-18 06:17:55', '2021-03-18 06:17:55'),
(15, '605345b13f3e7.jpeg', 'Pran', '2021-03-18 06:19:55', '2021-03-18 06:21:05'),
(16, '605345f941e42.jpg', 'Milk Vita', '2021-03-18 06:22:17', '2021-03-18 06:22:17'),
(17, '6055c61f14545.jpg', '7 Up', '2021-03-20 03:53:35', '2021-03-20 03:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, '6053227730702.png', 'Fruit', '2021-03-18 03:50:47', '2021-03-18 04:20:43'),
(2, '6053229742dfc.png', 'Drink', '2021-03-18 03:51:19', '2021-03-18 04:20:49'),
(3, '605322a15230e.jpg', 'Dessert', '2021-03-18 03:51:29', '2021-03-18 03:51:29'),
(4, '6053299ca11a1.jpg', 'Vegetable', '2021-03-18 04:21:16', '2021-03-18 04:21:16'),
(5, '60558ffb4fe0a.png', 'Clothing & Accessories', '2021-03-20 00:02:35', '2021-03-20 00:02:35'),
(6, '605591d4a9a97.jpg', 'Consumer Products', '2021-03-20 00:10:28', '2021-03-20 00:10:28'),
(7, '6055c4958c3dc.png', 'Gadgets & Electronics Appliances', '2021-03-20 03:47:01', '2021-03-20 03:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `details`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@yahoo.com', 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when', 2, '2021-03-22 01:47:54', '2021-03-22 01:47:54'),
(2, 'Jack Ma', 'd@gmail.com', 'rjwrhwrdfof dwrp;rr                  ldm;lkd', 1, '2021-03-22 02:21:52', '2021-03-22 02:21:52'),
(3, 'Ajwad Maahi', 'fsf@yahoo.com', 'text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when', 2, '2021-03-22 02:26:06', '2021-03-22 02:26:06');

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
(4, '2021_03_18_072208_create_brands_table', 2),
(5, '2021_03_18_073758_create_categories_table', 2),
(6, '2021_03_20_045136_create_products_table', 3),
(7, '2021_03_21_091626_create_blogs_table', 4),
(8, '2021_03_21_092256_create_comments_table', 4),
(9, '2021_03_22_065853_create_people_table', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(12,2) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `category_id`, `quantity`, `price`, `picture`, `description`, `created_at`, `updated_at`) VALUES
(1, '1 Liter Cold Drink', 7, 2, 1, 15.00, '605583fc70d92.jpg', 'fruit-flavored carbonated soft drinks', '2021-03-19 23:11:24', '2021-03-19 23:11:24'),
(2, 'Harold Boot-style Brown', 1, 5, 2, 200.00, '605590710301b.jpg', 'Get on-trend with unsurpassed style & signature comfort of these boot-style casual shoes by Red Label. These are casual by nature', '2021-03-20 00:04:33', '2021-03-20 00:04:33'),
(3, 'Lifebuoy Soap', 13, 6, 5, 25.00, '6055921a6c80a.jpg', 'Product details of Lifebuoy Soap Bar Care 100g, Product Type: Soap Bar, Capacity: 100g, Brand: Lifebuoy', '2021-03-20 00:11:38', '2021-03-20 00:11:38'),
(4, 'Walton Refrigerator 1', 2, 7, 5, 12000.00, '6055c52d79108.jpg', '- Type: Direct Cool\r\n   - Door: Glass door\r\n   - Gross Volume: 380 Ltr\r\n   - Net Volume: 365 Ltr\r\n   - Refrigerant: R600a\r\n   - Using Latest Intelligent INVERTER technology\r\n   - Do not use Voltage stabilizer, if use warranty will be voided. \r\n​', '2021-03-20 03:49:33', '2021-03-20 03:49:33'),
(5, 'Walton Refrigerator Red', 2, 7, 10, 12000.00, '6055c5750723e.jpg', '- Type: Direct Cool\r\n   - Door: Glass door\r\n   - Gross Volume: 380 Ltr\r\n   - Net Volume: 365 Ltr\r\n   - Refrigerant: R600a\r\n   - Using Latest Intelligent INVERTER technology\r\n   - Do not use Voltage stabilizer, if use warranty will be voided. \r\n​', '2021-03-20 03:50:45', '2021-03-20 03:50:45'),
(6, '7 UP can', 17, 2, 25, 5.00, '6055c65d0f967.jpg', 'can of carbonated drink', '2021-03-20 03:54:37', '2021-03-20 03:54:37'),
(7, '1 Litre &-UP drink', 17, 2, 15, 10.00, '6055c6e9b2c83.jpg', 'One Liter Bottle Of Carbonated Drink', '2021-03-20 03:56:57', '2021-03-20 03:56:57'),
(8, 'Full Sleeve Light Blue T-Shirt', 5, 5, 30, 15.00, '6055c7ed7a372.jpg', 'comfortable to wear', '2021-03-20 04:01:17', '2021-03-20 04:01:17'),
(9, 'Pepsi Can', 3, 2, 20, 15.00, '6056dc5d61d4f.jpg', 'Pepsi is a carbonated soft drink manufactured by PepsiCo', '2021-03-20 23:40:45', '2021-03-20 23:40:45'),
(10, '250 ml Pepsi', 3, 2, 10, 18.00, '6056dcd668710.jpg', 'Pepsi is a carbonated soft drink manufactured by PepsiCo', '2021-03-20 23:42:46', '2021-03-20 23:42:46'),
(11, '2 Litre Pepsi Drink', 3, 2, 35, 80.00, '6056dd441af83.jpg', 'Pepsi is a carbonated soft drink manufactured by PepsiCo', '2021-03-20 23:44:36', '2021-03-20 23:44:36'),
(12, 'Pepsi Black Can', 3, 2, 25, 10.00, '6056dd9a4d30f.jpg', 'Pepsi is a carbonated soft drink manufactured by PepsiCo', '2021-03-20 23:46:02', '2021-03-20 23:46:02');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ajwad Maahi', 'ajwadmaahi56@gmail.com', NULL, '$2y$10$nVknfnorU.s7t6BsLL/kIeldFaOWYqaQZDalRUwwcOHL9KcdW1MYG', NULL, '2021-03-18 00:04:40', '2021-03-18 00:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
