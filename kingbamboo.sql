-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 04:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingbamboo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` bigint(20) UNSIGNED DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `password`, `create_by`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$e6XuO6H3MgsYwsx7pIZjWea5H8qLDMhojH1AsGfYkk1O6NXaKJ1jO', NULL, '1', NULL, NULL),
(4, 'Lương Văn Nam', 'LuongNam', '$2y$10$e6XuO6H3MgsYwsx7pIZjWea5H8qLDMhojH1AsGfYkk1O6NXaKJ1jO', NULL, 'ADMIN', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` double NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `url_img`, `priority`, `link`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Trang trí nhà cửa', '/images/danhmuc/ghe may.JPG', 0.1, 'trang-tri-nha-cua', 1, NULL, NULL, NULL),
(2, 'Trang trí quán cafe', '/images/danhmuc/decor_cafe.JPG', 0.2, 'trang-tri-quan-cafe', 1, NULL, NULL, NULL),
(3, 'Trang trí văn phòng', '/images/danhmuc/decor_office.jpg', 0.3, 'trang-tri-van-phong', 1, NULL, NULL, NULL),
(4, 'Khay đựng', '/images/danhmuc/khay_dung.jpeg', 0.4, 'khay-dung', 1, NULL, NULL, NULL),
(5, 'Nhà bếp', '/images/danhmuc/nha_bep.jpg', 0.5, 'nha-bep', 1, NULL, NULL, NULL),
(6, 'Túi xách', '/images/danhmuc/tuixach.jpg', 0.6, 'tui-xach', 1, NULL, NULL, NULL),
(7, 'Giỏ đựng', '/images/danhmuc/giodung.JPG', 0.7, 'gio-dung', 1, NULL, NULL, NULL);

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
-- Table structure for table `interface_color`
--

CREATE TABLE `interface_color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hd_cl_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hd_cl_text_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hd_cl_text_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hd_cl_text_contact_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_cl_background_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_cl_text_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_cl_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_cl_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interface_color`
--

INSERT INTO `interface_color` (`id`, `hd_cl_background`, `hd_cl_text_category`, `hd_cl_text_contact`, `hd_cl_text_contact_content`, `bd_cl_background_category`, `bd_cl_text_category`, `ft_cl_background`, `ft_cl_text`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 'rgb(86,61,124,1)', 1, '2022-11-09 01:21:22', '2022-11-09 01:21:22'),
(2, 'rgb(255,255,255,1)', 'rgb(0,0,0,1)', 'rgb(0,0,0,1)', 'rgb(36,36,36,1)', 'rgb(70,185,70,1)', 'rgb(255,255,255,1)', 'rgb(70,185,70,1)', 'rgb(0,0,0,1)', 1, '2022-11-09 01:33:53', '2022-11-09 01:33:53'),
(3, 'rgb(255,255,255,0.5)', 'rgb(0,0,0,1)', 'rgb(0,0,0,1)', 'rgb(36,36,36,1)', 'rgb(70,185,70,1)', 'rgb(255,255,255,1)', 'rgb(70,185,70,1)', 'rgb(0,0,0,1)', 1, '2022-11-09 04:37:57', '2022-11-09 04:37:57'),
(4, 'rgb(255,0,0,0.5)', 'rgb(40,88,82,1)', 'rgb(0,0,0,1)', 'rgb(36,36,36,1)', 'rgb(216,19,163,1)', 'rgb(255,255,255,1)', 'rgb(0,255,225,1)', 'rgb(0,0,0,1)', 1, '2022-11-09 04:43:13', '2022-11-09 04:43:13'),
(5, 'rgb(0,0,0,0.5)', 'rgb(40,88,82,1)', 'rgb(255,0,0,1)', 'rgb(0,98,255,1)', 'rgb(216,19,163,1)', 'rgb(255,255,255,1)', 'rgb(0,0,0,1)', 'rgb(0,0,0,1)', 1, '2022-11-09 07:29:37', '2022-11-09 07:29:37'),
(6, 'rgb(0,0,0,0.5)', 'rgb(40,88,82,1)', 'rgb(255,0,0,1)', 'rgb(0,98,255,1)', 'rgb(216,19,163,1)', 'rgb(200,255,0,1)', 'rgb(0,0,0,1)', 'rgb(0,0,0,1)', 1, '2022-11-09 07:51:11', '2022-11-09 07:51:11'),
(7, 'rgb(0,0,0,0.5)', 'rgb(40,88,82,1)', 'rgb(0,0,0,1)', 'rgb(0,0,0,1)', 'rgb(216,19,163,1)', 'rgb(0,0,0,1)', 'rgb(0,0,0,1)', 'rgb(255,0,0,1)', 1, '2022-11-09 07:57:59', '2022-11-09 07:57:59');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2022_11_08_150827_create_admins_table', 1),
(22, '2022_11_08_175625_create_interface_colors_table', 2),
(25, '2022_11_09_150114_create_categories_table', 3);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_create_by_foreign` (`create_by`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_link_unique` (`link`),
  ADD KEY `categories_created_by_foreign` (`created_by`),
  ADD KEY `categories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interface_color`
--
ALTER TABLE `interface_color`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interface_color_create_by_foreign` (`create_by`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interface_color`
--
ALTER TABLE `interface_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_create_by_foreign` FOREIGN KEY (`create_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `interface_color`
--
ALTER TABLE `interface_color`
  ADD CONSTRAINT `interface_color_create_by_foreign` FOREIGN KEY (`create_by`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
