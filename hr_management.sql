-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:11 AM
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
-- Database: `hr_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `attendance_date` date NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `late_time` int(11) NOT NULL,
  `leave_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `attendance_date`, `in_time`, `out_time`, `late_time`, `leave_status`, `created_at`, `updated_at`) VALUES
(1, NULL, '2022-11-03', '12:13:00', '12:17:00', 555, 0, '2022-11-02 02:12:48', '2022-11-02 03:30:28'),
(2, NULL, '2022-11-02', '12:17:00', '12:19:00', 345, 1, '2022-11-02 02:14:11', '2022-11-02 03:33:18'),
(3, 2, '2022-11-03', '21:18:00', '23:20:00', 32, 1, '2022-11-02 09:16:20', '2022-11-02 09:16:20'),
(4, 3, '2022-12-01', '23:20:00', '13:22:00', 3, 1, '2022-11-02 09:16:57', '2022-11-02 09:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `slogan`, `logo_img`, `fav_icon`, `address`, `email`, `support_email`, `mobile`, `support_number`, `social_address`, `created_at`, `updated_at`) VALUES
(2, 'Big technology company', 'best it soluation', 'company/logo/image/1667272104532.jpg', 'company/fav_icon/image/1667267774623.jpg', 'eoprtrei irtheroi er', 'pranto@gmail.com', 'jamal@gmail.com', '01991975402', '01535343767', 'dfgdfgdfg45365', '2022-11-01 08:56:14', '2022-11-01 10:08:24'),
(4, 'gfredgt', 'fdgrgtrte', 'company/logo/image/1667272187900.jpg', 'company/fav_icon/image/1667269557467.jpg', 'dfgdfghfdhdh', 'pranto@gmail.com', 'suvo@gmail.com', '01891975402', '01735343767', 'tyryetryrtuyrtyrj', '2022-11-01 09:25:57', '2022-11-01 10:09:47'),
(5, 'rtertre', 'retertert', 'company/logo/image/1667272269242.jpg', 'company/fav_icon/image/1667272269387.jpg', 'ertyetytytghgfhg', 'pranto@gmail.com', 'jamal@gmail.com', '01891975402', '01535343767', 'tghrthyrt44y4thytr', '2022-11-01 10:11:09', '2022-11-01 10:11:09'),
(6, 'dfsdgf', 'gsdfgg', 'company/logo/image/1667281885281.jpg', 'company/fav_icon/image/1667281885219.jpg', 'dfggdhedfh rgtr te', 'pranto@gmail.com', 'suvo@gmail.com', '01891975402', '01535343767', 'fdgdgsdf ggrwrts', '2022-11-01 12:51:25', '2022-11-01 12:51:25'),
(7, 'sdfsdfg', 'xcgcgfg', 'company/logo/image/1667286328703.jpg', 'company/fav_icon/image/1667286328872.jpg', 'dfdsfsdfsd', 'sabbir@gmail.com', 'jamal@gmail.com', '01891975402', '01535343767', 'sdfdfdwsfdfsdfsd', '2022-11-01 14:05:28', '2022-11-01 14:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `dept_code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Software Engnerring', 'swe305', 'rfregtetrhrthrtyh', '2022-11-01 12:42:58', '2022-11-01 12:42:58'),
(2, 'Computer Engineering', 'swe405', 'okkkkh', '2022-11-01 12:45:08', '2022-11-01 13:12:25'),
(4, 'Computer Engineering', 'CSE-605', 'Best way', '2022-11-01 13:10:55', '2022-11-01 13:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Senior Enginer', 'hthyrt uyu yrutyutr', '2022-11-01 13:49:36', '2022-11-01 14:03:18'),
(3, 'আরিফুল ইসলাম', 'dfghth trtr rtytry r', '2022-11-01 14:43:10', '2022-11-01 14:43:10'),
(4, 'Pranto', 'hgjgh guiuyiy', '2022-11-01 14:44:02', '2022-11-01 14:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `department_id`, `designation_id`, `employee_name`, `employee_code`, `email`, `mobile`, `address`, `nid`, `image`, `blood_group`, `date_of_birth`, `joining_state`, `employee_type`, `basic_salary`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Noyon', 'Emp-344', 'sabbir@gmail.com', '01991975402', 'rfertetewtewt tyry t', '56756568585', 'Employee/images/1667319120628.jpg', 'o+', '2022-11-17', 'khulna', 'Part-time', '25000', 0, '2022-11-01 22:19:16', '2022-11-02 00:14:39'),
(3, 2, 1, 'Sabbir', 'Emp-544', 'daspranto19@gmail.com', '01991975402', 'erteryrturtuyru', '56756568585', 'Employee/images/1667336015441.jpg', 'g+', '2022-11-24', 'khulna', 'full-time', '25000', 1, '2022-11-02 03:53:35', '2022-11-02 07:44:09');

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
-- Table structure for table `leave_applies`
--

CREATE TABLE `leave_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `total_leave_day` int(11) NOT NULL,
  `leaver_starts_date` date NOT NULL,
  `leaver_ends_date` date NOT NULL,
  `approved_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attached_document` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_applies`
--

INSERT INTO `leave_applies` (`id`, `employee_id`, `leave_type_id`, `total_leave_day`, `leaver_starts_date`, `leaver_ends_date`, `approved_by`, `description`, `attached_document`, `leave_status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 7, '2022-11-24', '2022-11-29', 'gfdfgfd', 'rtrtrete', 'leave-apply/documents/1667353843412.jpg', 0, '2022-11-02 08:07:22', '2022-11-02 08:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `leave_settings`
--

CREATE TABLE `leave_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_day` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_settings`
--

INSERT INTO `leave_settings` (`id`, `leave_type`, `total_day`, `description`, `created_at`, `updated_at`) VALUES
(1, 'rtert', 30, 'hghjbu uty', '2022-11-02 06:13:52', '2022-11-02 06:13:52'),
(3, 'rtertyer', 345, 'fhfgj fgfghjfghj', '2022-11-02 06:19:40', '2022-11-02 06:19:40');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_24_050947_create_sessions_table', 1),
(7, '2022_10_31_204621_create_companies_table', 2),
(8, '2022_11_01_050922_create_departments_table', 3),
(9, '2022_11_01_061940_create_designations_table', 4),
(11, '2022_11_01_080519_create_employees_table', 5),
(14, '2022_11_01_075442_create_attendances_table', 6),
(15, '2022_11_01_220956_create_leave_settings_table', 7),
(16, '2022_11_01_221025_create_leave_applies_table', 7);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QgfTQFw3hDeaYbvL7ZxZwFKE91bVj691srm0MwVi', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVWs4cGhCaUlhNG83V0kxTUJqNnJ6eDB6Z2ZwTEdyTlNnanEyZEEzRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHA6Ly9sb2NhbGhvc3QvSFItYW5kLVBheVJvbGwvaHJfbWFuYWdlbWVudC9wdWJsaWMvbWFuYWdlLWVtcGxveWVlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRzMGgwdUR1R3lRUlpRcHE4NkNYUDFldTBqVWhSdEt3QWVtaUpZdHI3ODlYNlBxLnRYN0hPRyI7fQ==', 1667358062);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Pranto', 'pranto@gmail.com', NULL, '$2y$10$s0h0uDuGyQRZQpq86CXP1eu0jUhRtKwAemiJYtr789X6Pq.tX7HOG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-01 02:27:20', '2022-11-01 02:27:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leave_applies`
--
ALTER TABLE `leave_applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_settings`
--
ALTER TABLE `leave_settings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_applies`
--
ALTER TABLE `leave_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_settings`
--
ALTER TABLE `leave_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
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
