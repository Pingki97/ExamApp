-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 02:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_examhill`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapterquestions`
--

CREATE TABLE `chapterquestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapterquestions`
--

INSERT INTO `chapterquestions` (`id`, `class_id`, `chapter_id`, `question`, `ans`, `created_at`, `updated_at`) VALUES
(1, '2', '2', 'Place the choices in some meaningful order. When possible, place the choices in numerical, chronological or conceptual order. A better structured question is easier to read and respond to:\n\nDuring what period was James Downey the president of Waterloo?\n\na.) 1990-1996\nb.) 1991-1997\nc.) 1992-1998\nd.) *1993-1999', 'a', '2021-11-26 05:37:54', '2021-11-27 05:37:54'),
(3, '33', '3', 'What is the maximum possible length of an identifier?  16 32 64 None of these above', 'd', '2021-11-06 07:07:48', '2021-11-06 07:48:10'),
(4, '54', '7', '<p>What is the maximum possible length of an identifier?</p>\r\n\r\n<ol>\r\n	<li>16</li>\r\n	<li>32</li>\r\n	<li>64</li>\r\n	<li>None of these above</li>\r\n</ol>', 'b', '2021-11-06 07:37:35', '2021-11-06 07:38:35'),
(5, '6', '3', '<p>&nbsp;Who developed the Python language?</p>\r\n\r\n<ol>\r\n	<li>Zim Den</li>\r\n	<li>Guido van Rossum</li>\r\n	<li>Niene Stom</li>\r\n	<li>Wick van Rossum</li>\r\n</ol>', 'd', '2021-11-06 07:38:26', '2021-11-06 07:40:08'),
(6, '2', '2', 'Pllllllllllllllllace the choices in some meaningful order. When possible, place the choices in numerical, chronological or conceptual order. A better structured question is easier to read and respond to:\n\nDuring what period was James Downey the president of Waterloo?\n\na.) 1990-1996\nb.) 1991-1997\nc.) 1992-1998\nd.) *1993-1999', 'a', '2021-11-26 05:37:54', '2021-11-27 05:37:54'),
(7, '33', '3', 'What illllllllllls the maximum possible length of an identifier?  16 32 64 None of these above', 'c', '2021-11-06 07:07:48', '2021-11-06 07:48:10'),
(8, '54', '7', '<p>Wwwwwwhat is the maximum possible length of an identifier?</p>\r\n\r\n<ol>\r\n	<li>16</li>\r\n	<li>32</li>\r\n	<li>64</li>\r\n	<li>None of these above</li>\r\n</ol>', 'c', '2021-11-06 07:37:35', '2021-11-06 07:38:35'),
(9, '6', '3', '<p>&nbsp;Whoooooooooo developed the Python language?</p>\r\n\r\n<ol>\r\n	<li>Zim Den</li>\r\n	<li>Guido van Rossum</li>\r\n	<li>Niene Stom</li>\r\n	<li>Wick van Rossum</li>\r\n</ol>', 'd', '2021-11-06 07:38:26', '2021-11-06 07:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `chapter_name`, `class_id`, `created_at`, `updated_at`) VALUES
(2, 'cv', '33', '2021-11-01 01:42:21', '2021-11-01 01:50:46'),
(3, 'jjkwq', '29', '2021-11-01 01:48:55', '2021-11-01 01:50:51'),
(4, 'bzcch', '3', '2021-11-01 01:48:56', '2021-11-01 01:50:56'),
(5, 'hjadfjh', '28', '2021-11-01 01:48:57', '2021-11-01 01:51:02'),
(6, 'jjk', '54', '2021-11-01 01:48:58', '2021-11-01 01:48:58'),
(7, 'nbzchk', '6', '2021-11-01 01:50:41', '2021-11-01 01:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `created_at`, `updated_at`) VALUES
(2, 'os', '2021-10-30 13:07:01', '2021-10-30 13:07:01'),
(3, 'c++', '2021-10-30 13:07:01', '2021-10-30 13:07:01'),
(5, 'c', '2021-10-30 13:08:55', '2021-10-30 13:08:55'),
(6, 'vb', '2021-10-30 13:18:13', '2021-10-30 13:18:13'),
(28, 'DBMS', '2021-10-31 00:13:27', '2021-10-31 00:13:27'),
(29, 'SQL', '2021-10-31 00:15:20', '2021-10-31 00:15:20'),
(33, 'java', '2021-10-31 00:21:36', '2021-10-31 00:21:36'),
(40, 'AI', '2021-10-31 01:39:19', '2021-10-31 01:39:19'),
(54, 'oracle', '2021-10-31 07:05:10', '2021-10-31 07:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `examquestionsets`
--

CREATE TABLE `examquestionsets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examquestionsets`
--

INSERT INTO `examquestionsets` (`id`, `exam_id`, `question_id`, `question_marks`, `created_at`, `updated_at`) VALUES
(1, '10', '5', '40', '2021-11-06 11:24:46', '2021-11-06 11:54:59'),
(2, '10', '5', '45', '2021-11-06 11:24:56', '2021-11-06 11:24:56'),
(3, '3', '3', '55', '2021-11-06 11:26:55', '2021-11-06 11:28:05'),
(4, '9', '3', '52', '2021-11-06 11:35:50', '2021-11-06 11:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_timing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_pass_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_status` enum('A','I') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `class_id`, `chapter_id`, `exam_start`, `exam_end`, `exam_timing`, `exam_marks`, `exam_pass_marks`, `exam_status`, `created_at`, `updated_at`) VALUES
(1, 'aaa', '1', '2', '12', '12', '2', '56', '20', 'A', NULL, NULL),
(2, 'gjgh', '2', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'A', '2021-11-02 02:43:55', '2021-11-02 02:43:55'),
(3, 'gjgh', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'A', '2021-11-02 03:19:19', '2021-11-02 06:21:35'),
(4, 'gjgh', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'I', '2021-11-02 03:19:21', '2021-11-02 06:19:29'),
(5, 'cczDc', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'A', '2021-11-02 03:19:45', '2021-11-02 03:19:45'),
(6, 'cczDc', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'A', '2021-11-02 03:21:36', '2021-11-02 03:21:36'),
(7, 'cczDc', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'I', '2021-11-02 03:21:37', '2021-11-02 06:20:00'),
(8, 'cczDc', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'A', '2021-11-02 03:21:38', '2021-11-02 03:21:38'),
(9, 'cczDc', '54', '7', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '3:00 PM', '100', '44', 'I', '2021-11-02 03:21:39', '2021-11-02 06:21:25'),
(10, 'kj, ,k', '29', '5', '11/11/2021 12:58 PM', '11/11/2021 12:58 PM', '05:35:35', '100', '44', 'I', '2021-11-02 03:25:22', '2021-11-02 21:28:56');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_30_112043_create_classes_table', 1),
(6, '2021_10_31_094857_create_students_table', 2),
(7, '2021_10_31_134424_create_chapters_table', 3),
(8, '2021_11_01_072849_create_exams_table', 4),
(9, '2021_11_03_043234_create_chapterquestions_table', 5),
(10, '2021_11_06_135213_create_examquestionsets_table', 6),
(11, '2021_11_10_094930_create_select_options_table', 7),
(12, '2021_11_11_120206_create_results_table', 7);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `userid`, `exam_id`, `result`, `created_at`, `updated_at`) VALUES
(1, '21', '2', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `select_options`
--

CREATE TABLE `select_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ques_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `stu_name`, `stu_mobile`, `stu_email`, `stu_password`, `stu_address`, `class_id`, `created_at`, `updated_at`) VALUES
(2, 'PUJA DEY', '5678943212', 'puja@gmail.com', '12345678', 'bira8', '29', '2021-10-31 07:11:05', '2021-10-31 22:13:04'),
(3, 'PIU DEY', '7023698547', 'pingks97dtk@gmail.com', 'gbfbg', 'fdgrfghthtju', '28', '2021-10-31 07:25:21', '2021-10-31 22:27:46'),
(4, 'MISTI DAS', '8523652341', 'ping7dtk@gmail.com', '67yuhyjui', 'guma', '3', '2021-10-31 07:28:42', '2021-10-31 22:29:18'),
(5, 'mita das', '8963257458', 'pingkidas97dtk@gmail.com', 'xcv', 'fd grf gh thtj u', '1', '2021-10-31 07:34:19', '2021-10-31 07:44:34'),
(6, 'mimi das', '8963257412', 'pik@gmail.com', 'oo8h8', 'fd gr fg h tht ju', '1', '2021-10-31 07:37:35', '2021-10-31 08:00:50'),
(10, 'PUJA DEY', '7896325412', 'pua@gmail.com', 'ig', 'bira', '1', '2021-10-31 07:56:46', '2021-10-31 23:50:28'),
(11, 'LINA HALDER', '8956231478', 'l@gmail.com', '1465432', 'birajn', '33', '2021-10-31 22:02:17', '2021-11-01 00:09:23'),
(12, 'LINA HALDER', '8956231118', 'fl@gmail.com', 'tyvb bghy', 'guma', '3', '2021-10-31 22:39:32', '2021-11-01 00:09:32'),
(13, 'PUJA DEY', '8523656789', 'ping7vbdtk@gmail.com', 'AEFRGDTEHYFYTJY', 'bira', '2', '2021-10-31 22:48:41', '2021-10-31 22:48:41'),
(14, 'LINA HALDER', '8956661478', 'pucva@gmail.com', 't4', 'guma', '29', '2021-10-31 22:55:46', '2021-10-31 22:55:46'),
(15, 'MISTI DAS', '7896377412', 'ld@gmail.com', 'ytrgfrg', 'guma', '3', '2021-10-31 22:56:33', '2021-10-31 22:56:33'),
(16, 'LINA HALDER', '5465789809', 'vbl@gmail.com', 'uu', 'bira8', '6', '2021-10-31 22:58:07', '2021-10-31 22:58:07'),
(17, 'MISTI DAS', '7896523145', 'puagh@gmail.com', 'mnbm,hjkjlk', 'fdgrfghthtju', '1', '2021-11-01 00:11:19', '2021-11-01 00:11:19'),
(18, 'kiran paul', '8965475896', 'k@gmail.com', 'dfsdg', 'sffdg gfhfsa', '28', '2021-11-01 00:12:41', '2021-11-01 00:12:41'),
(19, 'PIU DEY', '8956471236', 'pusdda@gmail.com', 'wddffrr', 'cx g gf dff', '6', '2021-11-01 00:13:29', '2021-11-01 00:13:29'),
(20, 'PUJA DEY', '9658745216', 'pufffa@gmail.com', 'egt45yy4g t46', 'bmnvbjhs hvrhjfbjk jbjkrfn', '6', '2021-11-01 00:24:35', '2021-11-01 00:24:35'),
(21, 'Rana kumargh', '01234567890', 'nila@gmail.com', '$2y$10$Wwm/8CYchGoxR/Hx.8w15.ZwxwqRt5ioFSOQaI3qcwT3iD4Skw5ni', 'dytfdyt', '2', '2021-11-13 08:22:56', '2021-11-13 08:22:56');

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
-- Indexes for table `chapterquestions`
--
ALTER TABLE `chapterquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examquestionsets`
--
ALTER TABLE `examquestionsets`
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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `select_options`
--
ALTER TABLE `select_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `chapterquestions`
--
ALTER TABLE `chapterquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `examquestionsets`
--
ALTER TABLE `examquestionsets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `select_options`
--
ALTER TABLE `select_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
