-- phpMyAdmin SQL Dump
-- version 5.2.2-1.fc42
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2025 at 04:34 AM
-- Server version: 10.11.11-MariaDB
-- PHP Version: 8.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-26 17:46:11', '2025-06-26 17:46:11'),
(2, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2025-06-26 17:46:18', '2025-06-26 17:46:18'),
(3, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2025-06-26 18:28:17', '2025-06-26 18:28:17'),
(4, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-26 18:28:28', '2025-06-26 18:28:28'),
(5, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2025-06-27 02:39:52', '2025-06-27 02:39:52'),
(6, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2025-06-27 02:40:20', '2025-06-27 02:40:20'),
(7, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 8, '[]', NULL, '2025-06-27 02:40:32', '2025-06-27 02:40:32'),
(8, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 8, '[]', NULL, '2025-06-27 02:41:08', '2025-06-27 02:41:08'),
(9, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-27 12:54:10', '2025-06-27 12:54:10'),
(10, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-27 12:58:43', '2025-06-27 12:58:43'),
(11, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2025-06-27 12:58:57', '2025-06-27 12:58:57'),
(12, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-28 13:44:51', '2025-06-28 13:44:51'),
(13, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-28 14:20:26', '2025-06-28 14:20:26'),
(14, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2025-06-28 14:21:04', '2025-06-28 14:21:04'),
(15, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-29 07:43:03', '2025-06-29 07:43:03'),
(16, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-29 07:52:23', '2025-06-29 07:52:23'),
(17, 'auth', 'User registered', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2025-06-29 07:56:56', '2025-06-29 07:56:56'),
(18, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2025-06-29 07:56:56', '2025-06-29 07:56:56'),
(19, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2025-06-29 08:32:55', '2025-06-29 08:32:55'),
(20, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-29 08:33:10', '2025-06-29 08:33:10'),
(21, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-29 08:47:12', '2025-06-29 08:47:12'),
(22, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-29 13:00:14', '2025-06-29 13:00:14'),
(23, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-06-30 09:53:56', '2025-06-30 09:53:56'),
(24, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-07-02 04:46:15', '2025-07-02 04:46:15'),
(25, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-07-02 05:17:16', '2025-07-02 05:17:16'),
(26, 'auth', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-07-02 05:17:44', '2025-07-02 05:17:44'),
(27, 'auth', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2025-07-02 10:05:55', '2025-07-02 10:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Informatika', '2025-06-23 11:49:34', '2025-06-23 11:49:34'),
(2, 'Sistem Informasi', '2025-06-23 11:49:40', '2025-06-23 11:49:40'),
(3, 'IPA', '2025-06-24 04:34:19', '2025-06-24 04:34:19'),
(4, 'IPS', '2025-06-24 04:35:58', '2025-06-24 04:35:58'),
(5, 'Bahasa Mandarin', '2025-06-29 08:54:59', '2025-07-02 04:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `department_student`
--

CREATE TABLE `department_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_student`
--

INSERT INTO `department_student` (`id`, `department_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 4, 5, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 3, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `student_id`, `document_type`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'Photo', 'documents/vdc9IQTy6WvsE6VgQ4sQ6zIbjqeSBFr9kddfQxS6.png', '2025-06-23 12:10:17', '2025-06-23 12:10:17'),
(2, 1, 'Ijazah', 'documents/MRdr1ovVPl08e9QbTbI4FEeOkR7IeFi71zgs2mGa.png', '2025-06-23 12:10:17', '2025-06-23 12:10:17'),
(3, 1, 'Akte', 'documents/y2NImYY5p2IQXOYGNJKTUL62VOpniJH5KnJchRRx.png', '2025-06-23 12:10:17', '2025-06-23 12:10:17'),
(7, 3, 'Photo', 'documents/pgjZRj3HVH8EHA3wnIUp9tcBG4TeRFJwERdbx1nq.jpg', '2025-06-24 04:38:37', '2025-06-24 04:38:37'),
(8, 3, 'Ijazah', 'documents/epl6cHdKd4yxlYhPibcQAudjHB1LUfNzY410MkUf.png', '2025-06-24 04:38:37', '2025-06-24 04:38:37'),
(9, 3, 'Akte', 'documents/7UqFiPvJKmUoE2Hg8KeSpH1TlJkmGV3LODGUbvvl.png', '2025-06-24 04:38:37', '2025-06-24 04:38:37'),
(10, 4, 'Photo', 'documents/2tZufAsLNb6bKcll5TMUOh4q7G3EB7I7JsNV2ljz.jpg', '2025-06-24 17:59:10', '2025-06-24 17:59:10'),
(11, 4, 'Ijazah', 'documents/pvjOJVHhw5c1VuF2AiXrMTkSvZOF4hQkqrZZQ5Cr.jpg', '2025-06-24 17:59:10', '2025-06-24 17:59:10'),
(12, 4, 'Akte', 'documents/tOqlYji74iWzm7mOowu3lkmbX2cTFoFM1AhPELVz.jpg', '2025-06-24 17:59:10', '2025-06-24 17:59:10'),
(13, 5, 'Photo', 'documents/RA7FBl0VmKI1Ddrxl6fu9IFjFDwDYEiU5FyaBLLA.png', '2025-06-26 16:59:49', '2025-06-26 16:59:49'),
(14, 5, 'Ijazah', 'documents/Ctg6rejoKuIa2Mu1YQ9mAkyo84JmaZB6HbmgqRDz.png', '2025-06-26 16:59:49', '2025-06-26 16:59:49'),
(15, 5, 'Akte', 'documents/QP0pRPBQJkuR44xR2KyDnEzJerdQgzSaLb9oRPQf.png', '2025-06-26 16:59:49', '2025-06-26 16:59:49'),
(16, 6, 'Photo', 'documents/CLWAFy9WotYST7i2h3KmlsDH8gOyJFtTud7lzTN0.png', '2025-06-26 17:03:49', '2025-06-26 17:03:49'),
(17, 6, 'Ijazah', 'documents/67ahMhOBQYTZXnTaEII45srViYbhaLRjpZRK7ykX.png', '2025-06-26 17:03:49', '2025-06-26 17:03:49'),
(18, 6, 'Akte', 'documents/7imR8Bu2O3z2getxtq7qtkwFREpEnhfgBgM0RCLy.png', '2025-06-26 17:03:49', '2025-06-26 17:03:49'),
(19, 7, 'Photo', 'documents/sQw3oTlE6oUjPPz0JD2VDKmF4XSyFlrCAW1vPSN8.png', '2025-06-26 17:05:58', '2025-06-26 17:05:58'),
(20, 7, 'Ijazah', 'documents/z6LF4JMzOZdBR1pPb1pVeFU7SOmYU4Ame0TQLpKv.png', '2025-06-26 17:05:58', '2025-06-26 17:05:58'),
(21, 7, 'Akte', 'documents/GBrZMezTn0QppvbVXRVowNGkchkAlOc9WlwZRq0B.png', '2025-06-26 17:05:58', '2025-06-26 17:05:58'),
(22, 8, 'Photo', 'documents/S9R5UeVHfUUqDLdUoWcd346JgFQHyIcPsg50qzLC.png', '2025-06-29 08:24:58', '2025-06-29 08:24:58'),
(23, 8, 'Ijazah', 'documents/hSiiz13mEqs2c2eG9ZvQOtwj7OiTW2Rp1JmlFjAB.jpg', '2025-06-29 08:24:58', '2025-06-29 08:24:58'),
(24, 8, 'Akte', 'documents/eQUQBCYoPtBxhBlHZw8ZoVU0Lp1y0V5ra1Lsu869.jpg', '2025-06-29 08:24:58', '2025-06-29 08:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `activity` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_08_101826_student', 1),
(5, '2025_01_08_122200_document', 1),
(6, '2025_01_08_135006_department', 1),
(7, '2025_01_08_140823_payment', 1),
(8, '2025_01_08_142957_log_table', 1),
(9, '2025_01_08_155314_department_student', 1),
(10, '2025_01_19_182920_create_activity_log_table', 1),
(11, '2025_01_19_182921_add_event_column_to_activity_log_table', 1),
(12, '2025_01_19_182922_add_batch_uuid_column_to_activity_log_table', 1),
(13, '2025_01_19_231047_add_payment_status_to_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `payment_date` date NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `payment_date`, `amount`, `receipt_number`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-06-23', 1000000.00, 'AXXX123', '2025-06-23 15:56:44', '2025-06-23 15:56:44'),
(3, 3, '2025-06-24', 1000000.00, 'AXXX124', '2025-06-24 04:39:36', '2025-06-24 04:39:36'),
(4, 8, '2021-07-03', 3000000.00, 'AXXX125', '2025-06-29 13:02:24', '2025-06-29 13:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6d6voxqCmHS22ue8e2FSk7bWx64LmtkGbNLfejUr', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3BPbnRQWXhFU29VSllSYXc4WDBrVUtaUXBKQlZ3Snd6TGpwaWNmTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly8xOTFlLTEwMy0xOC0zNC0yNTEubmdyb2stZnJlZS5hcHAvYWRtaW4vZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1751450756),
('71tUdOPqpgXQw0bVzBSlTnKkDgVAYZy9R9i57PB0', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1hub1NjcDdoU1RLT1hnV1J0VXhDWm9iRnBZdlNycFlZM2d0M1dKdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9hNmQ2LTEwMy0xOC0zNC0yNTEubmdyb2stZnJlZS5hcHAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1751450618),
('HARKdtJKZPp9hqlEJHBJrKHvRNYnRbzhFE7stHPr', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTGljcGpZUnF5REdOcVZRVXViOUZKYlJNSnVEUGI5ZDl0Z1loYUF5cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzE6Imh0dHA6Ly92ZXJ0ZXgtb3JpZ2lucy1yYXlzLXByb3ZpbmNlLnRyeWNsb3VkZmxhcmUuY29tL2FkbWluL2RlcGFydG1lbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1751431687),
('UI8kyJpU4pmu5nxM8sEUdeJafRxkEDBY3djYg8oV', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzBtU3RLR2RSbkp0WkRRbnVBb1NUdDVIUXhWRTJnSE03WlBiTVhjSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly92ZXJ0ZXgtb3JpZ2lucy1yYXlzLXByb3ZpbmNlLnRyeWNsb3VkZmxhcmUuY29tIjt9fQ==', 1751433465);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `birth_date` date NOT NULL,
  `school_origin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Belum Dibayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `name`, `address`, `birth_date`, `school_origin`, `status`, `created_at`, `updated_at`, `payment_status`) VALUES
(1, 2, 'Rizky Gunawan', 'Merdeka', '2002-02-07', 'SMKN 3 Pontianak', 'Diterima', '2025-06-23 12:10:17', '2025-06-23 15:57:12', 'Sudah Dibayar'),
(3, 4, 'contoh1', 'Jl. Adi Sucipto', '2010-04-14', 'SMA Negeri 2', 'Ditolak', '2025-06-24 04:38:37', '2025-06-26 17:27:11', 'Sudah Dibayar'),
(4, 5, 'Acnos', 'jalan gajahmada 3 no 44', '2010-03-20', 'SMP Bruder Kanisius Pontianak', 'Diterima', '2025-06-24 17:59:10', '2025-06-24 18:00:11', 'Belum Dibayar'),
(5, 7, 'Kriz', 'Ahmad Yani', '2005-10-13', 'SMA Negeri 1 Pontianak', 'Registrasi Ulang', '2025-06-26 16:59:49', '2025-06-26 17:27:21', 'Belum Dibayar'),
(6, 8, 'Chips', 'Sudarso', '2025-06-16', 'SMA Negeri 1 Pontianak', 'Ditolak', '2025-06-26 17:03:49', '2025-06-26 17:27:26', 'Belum Dibayar'),
(7, 9, 'Rizky', 'Tamar', '2025-06-04', 'SMA Negeri 1 Pontianak', 'Diterima', '2025-06-26 17:05:58', '2025-06-26 17:27:31', 'Belum Dibayar'),
(8, 10, 'marwan suhendra', 'jl.adi sucipto', '2004-07-01', 'SMA Kemala Bhayangkari', 'Tes Minat Bakat', '2025-06-29 08:24:58', '2025-06-29 13:02:24', 'Sudah Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', NULL, '$2y$12$/HP.yFMfr6Ff5whLj/iBde2VwRS9PTUtv4FY0mOHfvU6WGjXgl1xy', NULL, '2025-06-23 11:28:07', '2025-06-23 11:28:07'),
(2, 'Rizky Gunawan', 'rzkygnw@gmail.com', 'user', NULL, '$2y$12$0HsDjauu5vycHYTXYRPe8eQ7ZMfXJYKE5VPYd2v2rTaHe/mgBkA3G', NULL, '2025-06-23 11:48:14', '2025-06-23 16:00:58'),
(3, '15225007', '15225007@bsi.ac.id', 'user', NULL, '$2y$12$jUWPVQ8KZoxrw4qc7P2s3eiYRcL7g9MBYqv0xEG3Q6r7UVTs9v6mK', NULL, '2025-06-23 16:18:51', '2025-06-23 16:18:51'),
(4, 'contoh1', 'contoh@gmail.com', 'user', NULL, '$2y$12$aAyuapQUb55Z70IJtjx0heGqtJeWSmf08VecMA130NpWtiji6eRPG', NULL, '2025-06-24 04:35:11', '2025-06-24 04:43:00'),
(5, 'Acnos', 'aragamihyakuya@gmail.com', 'user', NULL, '$2y$12$S1Nyt9M6HRU1FVzwl1/eruJbs3l7ExH4vvoRpMFeUJctZxA68UPVq', NULL, '2025-06-24 17:55:10', '2025-06-24 17:55:10'),
(6, 'Guru', 'guru@gmail.com', 'user', NULL, '$2y$12$5/k06buxFhDsAhRTjI7zveJPsudm9wzUk2GDAaa6HmVIp78.kYSVS', NULL, '2025-06-24 18:09:39', '2025-06-24 18:09:39'),
(7, 'Kriz', 'kriz9026@gmail.com', 'user', NULL, '$2y$12$BkeiQnA6Dul355LOz6d7we4VszkjbA2bIiOC.hVL5nVzCk49Ogg9G', NULL, '2025-06-26 16:56:11', '2025-06-26 16:56:11'),
(8, 'Chips', 'cipechips@gmail.com', 'user', NULL, '$2y$12$bth1jOD/h9tWpjFuy3UmZO3z09jhxH.WLMUyyBOegZ6Mdl7IP43WK', NULL, '2025-06-26 17:03:26', '2025-06-26 17:03:26'),
(9, 'Rizky', 'rizkygnw@gmail.com', 'user', NULL, '$2y$12$t4rPBtRq7E2Z/JYm/MQ4Y.ltLzt3yF8mBxSeW72kl6h7o2twpV55a', NULL, '2025-06-26 17:05:35', '2025-06-26 17:05:35'),
(10, 'marwan suhendra', 'marwansuhendra@gmail.com', 'user', NULL, '$2y$12$ChD1zd./iC4590Rfoe2eDu07knjbGgMKUL.TuA2niSuuH/lFmuvxy', NULL, '2025-06-29 07:56:56', '2025-06-29 07:56:56'),
(11, 'a\'an ilham wahid', 'ilhamwahid@gmail.com', 'user', NULL, '$2y$12$CGUuiEcthK30SEAd5d8iJu2OnzugsZCT2LFEIJPky/pcNuBblt0n6', NULL, '2025-06-29 08:50:18', '2025-06-29 08:50:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_student`
--
ALTER TABLE `department_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_student_department_id_foreign` (`department_id`),
  ADD KEY `department_student_student_id_foreign` (`student_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_student_id_foreign` (`student_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_receipt_number_unique` (`receipt_number`),
  ADD KEY `payments_student_id_foreign` (`student_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department_student`
--
ALTER TABLE `department_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department_student`
--
ALTER TABLE `department_student`
  ADD CONSTRAINT `department_student_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `department_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
