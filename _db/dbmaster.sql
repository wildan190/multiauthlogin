-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 03:10 PM
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
-- Database: `dbmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountings`
--

CREATE TABLE `accountings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `cash` int(255) NOT NULL,
  `tools` int(255) NOT NULL,
  `equipment` int(255) NOT NULL,
  `debt` int(255) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountings`
--

INSERT INTO `accountings` (`id`, `tanggal`, `cash`, `tools`, `equipment`, `debt`, `details`, `created_at`, `updated_at`) VALUES
(8, '2022-11-28', 8000000, 1000000, 3000000, 4000000, 'None', '2022-11-28 07:37:03', '2022-11-28 07:37:03');

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
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `kd_barang`, `kategori`, `nama_barang`, `jml_barang`, `tgl_input`, `note`, `created_at`, `updated_at`) VALUES
(4, '002', 'Category 2', 'Projector', '12', '2022-11-22', 'Lorem', '2022-11-05 10:41:33', '2022-11-20 21:00:47'),
(5, '001', 'Category 1', 'CCTV', '0', '2022-02-11', 'Not Available (Out of Stock)', '2022-11-20 20:59:22', '2022-11-21 00:40:40'),
(6, '003', 'Category 1', 'Lamp', '1', '2022-11-28', 'terpakai 2', '2022-11-21 00:41:45', '2022-11-28 06:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee`, `leave_type`, `from_date`, `to_date`, `days`, `status`, `action_by`, `action_date`, `created_at`, `updated_at`) VALUES
(5, 'Muhamad Asep Wildan Muholadun', 'Vacation', '2022-11-14', '2022-11-15', '2022-11-15', 'Approve', 'Muhamad Asep Wildan Muholadun', '2022-11-14', '2022-11-13 21:48:35', '2022-11-20 23:32:31');

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
(4, '2022_09_13_061947_create_posts_table', 2),
(5, '2022_10_17_062539_create_timesheet_table', 3),
(6, '2022_10_17_075800_create_timesheet_table', 4),
(7, '2022_10_17_180726_create_timesheet_table', 5),
(8, '2022_10_26_042736_create_table_leave', 6),
(9, '2022_10_26_044052_create_table_leave', 7),
(10, '2022_10_30_042303_create_table_leave', 8),
(11, '2022_10_30_053330_create_table_leave', 9),
(12, '2022_11_01_033233_create_table_inventory', 10),
(13, '2022_11_01_035126_create_table_inventory', 11),
(14, '2022_11_02_071932_create_table_inventory', 12),
(15, '2022_11_03_032237_create_table_resignation', 13),
(16, '2022_11_07_072215_create_table_resignation', 14),
(17, '2022_11_09_062503_create_table_accounting', 15),
(18, '2022_11_28_065548_create_table_accounting', 16),
(19, '2022_11_28_130735_create_table_item', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wildan190@outlook.com', '$2y$10$jI/FIl6gP1w53XqDaJQo/uj70W6TKCh90EgQwCRs17j3h5zep2wxS', '2022-09-14 01:04:30'),
('wmuholadun3@gmail.com', '$2y$10$oIj5a7sQnewMEVUy797cEuIxuI0Rsi0ecRFX28/Utz5754B22VDRa', '2022-09-14 07:27:34'),
('usrtest@sipadv.com', '$2y$10$uUdrvyeStOQmgH530Kzxi.tZDD3/yTP9G00A48KBTqzUe.sQotPku', '2022-11-15 23:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cclient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adstype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cclient`, `adstype`, `size`, `address`, `created_at`, `updated_at`) VALUES
(6, 'PT. Xapiens Teknologi Indonesia', 'Billboard', '16x4', 'Jl. Profesor DR. Insinyur Soetami', '2022-09-14 07:35:45', '2022-10-18 01:54:02'),
(8, 'PT. Indika Energy', 'Billboard', '20x8', 'Jalan Ir. Soetami, Kampung Malangnengah, Desa Cijoropasir, Kecamatan Rangkasbitung', '2022-11-19 04:45:20', '2022-11-19 04:45:20'),
(9, 'PT. Sinar Indah Jaya', 'Billboard', '16x4', 'Jl. Profesor DR. Insinyur Soetami', '2022-11-20 20:55:16', '2022-11-20 20:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `resignations`
--

CREATE TABLE `resignations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_learn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resignations`
--

INSERT INTO `resignations` (`id`, `nama`, `reason`, `rate`, `long_learn`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Muhamad Asep Wildan Muholadun', 'None', 'Sangat Baik', 'None', 'Approve', '2022-11-13 23:36:07', '2022-11-13 23:36:07'),
(5, 'Wildan Belfiore', 'None', 'Sangat Baik', 'None', 'Approve', '2022-11-13 23:37:22', '2022-11-20 23:05:15'),
(7, 'Drajat Danu Wardana', 'Soon', 'Baik', 'I have so many Experience', 'Reject', '2022-11-21 00:45:45', '2022-11-21 00:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `nama`, `tanggal`, `proyek`, `tempat_kerja`, `waktu`, `aktivitas`, `waktu_out`, `created_at`, `updated_at`) VALUES
(14, 'Muhamad Asep Wildan Muholadun', '2022-11-22', 'Sinarmas - Videotron', 'Office - Lengkong Karya', '12:31', 'Mengedit Video Proyek', '12:31', '2022-11-21 22:31:54', '2022-11-21 22:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `favoriteColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `favoriteColor`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Test1_Wildan', 'test1@sipadv.com', 1, 'blue', 'UIMG_20221121637b173961886.jpg', NULL, '$2y$10$5TVdV2ZsACRBfb.EgbtGEuN9ssK66WDF3EnSfRVovt7qxBHemPHYO', NULL, '2022-09-05 00:21:55', '2022-11-20 23:14:17'),
(18, 'TestUser', 'usrtest@sipadv.com', 2, 'blue', '322501663054770_avatar.png', NULL, '$2y$10$KzfZ5yZHSw9kM0mIOTwXS.LMCSDd5H6yNYoRj9o8YZPIcEH5NS/au', NULL, '2022-09-13 00:39:30', '2022-09-13 00:39:30'),
(21, 'Danu Wardana', 'danu@tester.com', 2, 'Blue', '257961667186932_avatar.png', NULL, '$2y$10$ecWEZKw9JSuClGDB6M/c9Ok3oz.bt2RXJnGAJMgcooJuU9zYmLw56', NULL, '2022-10-30 20:28:52', '2022-10-30 20:28:52'),
(22, 'tes2', 'tes2@sipadv.com', 2, 'yellow', '170681669092150_avatar.png', NULL, '$2y$10$MS9Z03rJO0hWgO3IaRjsu.zE31AzmUa8EyclAMf9ds4uoYRUab3Jq', NULL, '2022-11-21 21:42:31', '2022-11-21 21:42:31'),
(23, 'Muhamad Asep Wildan Muholadun', 'wildan190@outlook.com', 1, 'Blue', 'UIMG_20221122637c609e4989d.jpg', NULL, '$2y$10$gwfbpJaNC26VyLcXhQbrneqyqtFA2mg7FpuePXHksldhIo.RGSrjO', NULL, '2022-11-21 22:21:17', '2022-11-21 22:39:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountings`
--
ALTER TABLE `accountings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resignations`
--
ALTER TABLE `resignations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
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
-- AUTO_INCREMENT for table `accountings`
--
ALTER TABLE `accountings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resignations`
--
ALTER TABLE `resignations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
