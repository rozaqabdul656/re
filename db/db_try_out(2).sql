-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 12:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_try_out`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `id_bidang` int(11) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bidang`, `bidang`, `waktu`, `status`, `updated_at`) VALUES
(1, 'Saintek', '2:0:00', 'ON', '2019-11-16 18:03:58'),
(2, 'Soshum', '2:0:00', 'ON', '2019-11-16 18:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `hasil` bigint(20) NOT NULL,
  `keterangan` longtext DEFAULT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `pelajaran` int(11) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`pelajaran`, `mapel`) VALUES
(1, 'Matematika Dasar'),
(2, 'Bahasa Indonesia'),
(3, 'TPA'),
(4, 'Fisika'),
(5, 'Kimia'),
(6, 'Biologi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `soal` longtext DEFAULT NULL,
  `gambar_soal` varchar(100) DEFAULT NULL,
  `option_a` longtext DEFAULT NULL,
  `option_b` longtext DEFAULT NULL,
  `option_c` longtext DEFAULT NULL,
  `option_d` longtext DEFAULT NULL,
  `option_e` longtext DEFAULT NULL,
  `kunci` longtext NOT NULL,
  `petunjuk` varchar(10) NOT NULL,
  `pelajaran` int(11) NOT NULL,
  `pengecekan` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `id_bidang`, `soal`, `gambar_soal`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `kunci`, `petunjuk`, `pelajaran`, `pengecekan`, `updated_at`, `created_at`) VALUES
(30, 1, 'asda', NULL, 'cek', 'cek', 'cek', 'cek', 'cek', 'A', 'A', 1, 'tidak', '2019-11-24 11:02:14', '2019-11-24 11:02:14'),
(31, 1, 'asdas', NULL, 'cekk', 'ce', 'ce', 'ce', 'ce', 'A', 'A', 2, 'tidak', '2019-11-24 11:03:08', '2019-11-24 11:03:08'),
(32, 1, 'ghgh', NULL, 'hjhj', 'asd', 'asd', 'asd', 'asd', 'A', 'A', 1, 'tidak', '2019-11-24 11:14:24', '2019-11-24 11:14:24'),
(33, 1, 'hjhh\r\nasd', NULL, 'asd', 'asd', 'asd', 'asd', 'asd', 'A', 'A', 3, 'tidak', '2019-11-24 11:16:52', '2019-11-24 11:16:52'),
(34, 1, 'asjdksajkj', NULL, 'asd', 'asd', 'sad', 'asd', 'asd', 'A', 'A', 1, 'tidak', '2019-11-24 11:17:42', '2019-11-24 11:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('ADMIN','USER','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akses` enum('SAINTEK','SOSHUM','ALL','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `level`, `alamat`, `asal_sekolah`, `akses`, `no_hp`, `created_at`, `updated_at`) VALUES
(17, 'Abdul Rozaq', 'admin@admin.com', '$2y$10$YPdFavXU/JDaYjLzBQI0T.S5kRx0IlW9ev49rPPN6fQuRqqy28ATK', '0gl3JOI912414SoR1fc21L8kEJpzc6Z6GvI91P1IpAzsGeWEUYcLhC3CWfl3', 'ADMIN', 'Bandung', 'PASIM', 'ALL', '08987676', '2019-11-10 08:24:16', '2019-11-10 08:24:16'),
(18, 'thanos', 'rozaqabdul678@gmail.com', '$2y$10$IAE181uHDblWvby0aDu7T.93Fn578O1AX6kyrdOzBshOXgotHjHoC', 'Pr9o88mOp2nUSx8zFLU7EQuIT2uQrDCx0WIUlqcKnJ7LUpKxe9f7cEKz5zGm', 'USER', 'cililin', 'SMKN 1CIHAMPELAS', NULL, '0896776627', '2019-11-10 08:40:09', '2019-11-16 01:32:47'),
(19, 'Rozaq', 'rozaqabdul677@gmail.com', '$2y$10$KiBv3Q7zc7UfYtnoyBOrz.h89C8hY5DspdC3tY5lM8r11lqn0JXDq', 's0sPvZAjrbH6e9cO1aMqGvm3q9VgLAQWe27yKQxWq2s059DFIfVOX4gz4MTH', 'USER', 'cimahi', 'KBBB', NULL, '087886523232', '2019-11-11 11:57:30', '2019-11-16 01:36:46'),
(20, 'Rozaq', 'rozaqabdul656@gmail.com', '$2y$10$fHPGhSVkwbVt4LRK6ndcbOXuWLXEFgAxTrCOBnIDBZcKw2Amt2iYq', 'lU23aSRPAUOwqIXxLl9eKlOu9GI27JStVNmUht0hb4PLWtOoqLmiqD18COux', 'USER', 'Bandung', 'UNIVERSITAS NASIONAL PASIM', 'ALL', '0897667557239', '2019-11-11 12:05:37', '2019-11-11 12:05:37');

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
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `FK_tb_hasil` (`id_bidang`),
  ADD KEY `FK_tb_hasilg` (`id`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`pelajaran`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `FK_tb_soal` (`id_bidang`),
  ADD KEY `FK_tb_soalasd` (`pelajaran`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `FK_tb_hasil` FOREIGN KEY (`id_bidang`) REFERENCES `tb_bidang` (`id_bidang`),
  ADD CONSTRAINT `FK_tb_hasilg` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD CONSTRAINT `FK_tb_soal` FOREIGN KEY (`id_bidang`) REFERENCES `tb_bidang` (`id_bidang`),
  ADD CONSTRAINT `FK_tb_soalasd` FOREIGN KEY (`pelajaran`) REFERENCES `tb_mapel` (`pelajaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
