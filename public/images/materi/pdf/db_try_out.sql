-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 12:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

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
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `id_bidang` int(11) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `materi` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bidang`, `bidang`, `foto`, `materi`, `created_at`, `updated_at`) VALUES
(6, 'Matematika', '33809-2020-01-31-06-22-55.jpg', 0, '2020-01-31 06:22:55', '2020-01-31 06:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modul`
--

CREATE TABLE `tb_modul` (
  `id` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `modul` varchar(200) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_try_out` int(11) NOT NULL,
  `soal` longtext DEFAULT NULL,
  `gambar_soal` varchar(100) DEFAULT NULL,
  `option_a` longtext DEFAULT NULL,
  `option_b` longtext DEFAULT NULL,
  `option_c` longtext DEFAULT NULL,
  `option_d` longtext DEFAULT NULL,
  `option_e` longtext DEFAULT NULL,
  `kunci` longtext NOT NULL,
  `petunjuk` varchar(10) NOT NULL,
  `pengecekan` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_try_out`
--

CREATE TABLE `tb_try_out` (
  `id_try_out` int(11) NOT NULL,
  `try_out` varchar(20) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tutorial`
--

CREATE TABLE `tb_tutorial` (
  `id` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tutorial`
--

INSERT INTO `tb_tutorial` (`id`, `id_bidang`, `judul`, `video`, `updated_at`, `created_at`) VALUES
(1, 5, 'sdsadas', '1580459518.mp4', '2020-01-31 08:31:58', '2020-01-31 08:31:58'),
(2, 5, 'asdsad', '1580459572.mp4', '2020-01-31 08:32:52', '2020-01-31 08:32:52'),
(8, 5, 'zxczxc', '1580464252.mp4', '2020-01-31 09:50:52', '2020-01-31 09:50:52'),
(9, 5, 'adasdasdasd', '1580464272.mp4', '2020-01-31 09:51:12', '2020-01-31 09:51:12'),
(10, 5, 'asdasdsa', '1580464322.mp4', '2020-01-31 09:52:02', '2020-01-31 09:52:02'),
(11, 5, 'asdasdas', '1580464482.mp4', '2020-01-31 09:54:42', '2020-01-31 09:54:42'),
(12, 5, 'asdsadas', '1580464559.mp4', '2020-01-31 09:55:59', '2020-01-31 09:55:59'),
(13, 5, 'asda', '1580464953.mp4', '2020-01-31 10:02:33', '2020-01-31 10:02:33'),
(14, 5, 'asdsadas', '1580465064.mp4', '2020-01-31 10:04:24', '2020-01-31 10:04:24'),
(15, 5, 'asdsadas', '1580465078.mp4', '2020-01-31 10:04:38', '2020-01-31 10:04:38'),
(16, 5, 'asdsadas', '1580465127.mp4', '2020-01-31 10:05:27', '2020-01-31 10:05:27');

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
(17, 'ADMIN', 'admin@admin.com', '$2y$10$YPdFavXU/JDaYjLzBQI0T.S5kRx0IlW9ev49rPPN6fQuRqqy28ATK', 'sgPBzDR1ZxuWCJX5G3p3u21t9iVSOPDQUZgyLdfDwNovgO670siNsK1Wcr2t', 'ADMIN', 'Bandung', 'PASIM', 'ALL', '08987676', '2019-11-10 08:24:16', '2019-11-10 08:24:16'),
(29, 'asdasd', 'asd@gmail.com', '$2y$10$MVbTcjp65SavNgl/tYN0Pe8nrmcj3X5aQUUW51n/QZEDa79Gb.j8q', 'NSkQvoWUpyfw0HnDoMjXQG7BAYxFc2E755MdaeXmPpH74RXGj52ACWgUnQAv', 'USER', 'asdasd', 'asd', 'SAINTEK', '089667671619', '2019-11-26 09:42:42', '2019-11-26 09:42:42'),
(31, 'anis', 'anis@gmail.com', '$2y$10$AEQ118LdDPbBw/a7SZW8V.lPfoXk.QeCgFV.Y/1P04smMoO/ttmTa', 'JXBpi6In4IQLpUyiRN2Teaap3Vh3ajPcB0upGrSvixJkUKh6YCqIq1gXctoQ', 'USER', 'asrama', 'sman1', 'SAINTEK', '082245526321', '2019-11-29 23:44:59', '2019-12-26 20:45:18'),
(32, 'rozaq', 'cek@cek.com', '$2y$10$.Y.AyGlY0nkiD6hUIw9TzeYPdfldJE7FUzEWt/VAZHQIkrgmZ9Bsy', 'CGqxs6PfLbagFvklxtoeFH30ei3Yq8qWVwY7dPVFWafTsLL4ROdgZrXr2LZH', 'USER', 'bandung', 'PASIM', 'SAINTEK', '0898989899', '2019-11-30 07:07:53', '2019-11-30 07:07:53'),
(33, 'Nurlita Anggraini', 'litaluthfi1127@gmail.com', '$2y$10$UUScefsSRvVOh0hkL2g1uOnZAkMx58aYy10um9XKR/D3CLiw.wHXe', 'iHB2Y028DY1Bjd6J3Yc5fW5RQwKAcfyRKEttcRm8r5C7bVK7Wo44ZbbrU1PN', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '082241098634', '2019-11-30 17:14:19', '2019-11-30 17:14:19'),
(34, 'Pradiva Cintia Paramitha', 'pradivacintia1209@gmail.com', '$2y$10$Pt7jX249Lq3AuKzpYeCkJu/AeE.jvqqACTO.aRcNpSN14oj9Y11bC', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '082241098634', '2019-11-30 17:15:30', '2019-11-30 17:15:30'),
(35, 'Dea Sri', 'deayuni17@gmail.com', '$2y$10$84.RvrGYtU7fNs0FdDzxGeCRoKFWELAhIXolDhMxbA3SKPvLWRnde', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0876543221421', '2019-11-30 17:17:17', '2019-11-30 17:17:17'),
(36, 'Jeni Ghina Syifa', 'jenisyifa13@gmail.com', '$2y$10$WCFnCRUXFFye6oBIWNICj.G5gaQChpXx5Z08Gm1VFp7Ma5KSwVWce', NULL, 'USER', 'Jakarta Indonesia', 'sman1', 'SAINTEK', '086888888888', '2019-11-30 17:19:42', '2019-11-30 17:19:42'),
(37, 'Emy Siauwono', 'emysiauwono02@gmail.com', '$2y$10$TqhX6PDKOLLX2owM9jHQkueyrd6SS2wOMfpknOXMk.wbqJF.Kdahu', NULL, 'USER', 'Jakarta Indonesia', 'sman1', 'SAINTEK', '086888888888', '2019-11-30 17:21:56', '2019-11-30 17:21:56'),
(38, 'Atikah Rahmaniah', 'atikahrahmaniah1107@gmail.com', '$2y$10$YX8grzZti7T1v4HeEHK8WOjyjhsA2HJnZVz.150.x2oh5hQL8GFnq', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '082824098634', '2019-11-30 17:23:11', '2019-11-30 17:23:11'),
(39, 'Sansan Santika', 'sansansantika112@gmail.com', '$2y$10$9d267DlTg6F5qRto1FihQ.jB5pG1Av55.rqnODfW.2PJmCoalsmt.', 'NLwOF30jh7QbUWsF0i8TsqhHpppWpCOgcE7tRFT9AgzEMJaiv5jsAZkqUVyi', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '08778776567', '2019-11-30 17:25:46', '2019-11-30 17:25:46'),
(40, 'Nadira Zahidah', 'nadira_zahidah@yahoo.com', '$2y$10$mRDLQm2p7m4A7PAIsFSQFumv/uHA0SG65n95a8NBypv4ffnqp2XSa', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '08778776567', '2019-11-30 17:28:00', '2019-11-30 17:28:00'),
(41, 'Siti Nurdiniyah Sari', 'sitinurdiniyahsari01@gmail.com', '$2y$10$gacz9gzHcPd1oc2.Hip98OKwk3Gpjx.1pUYU0bGI5hXtfqXGkNUBW', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '087876876876', '2019-11-30 17:29:23', '2019-11-30 17:29:23'),
(42, 'Novalin Kurnia Jacob', 'novalinkurniaj@gmail.com', '$2y$10$CShw5H5WZNcyAOrl1pzt6.yy9cu194pxwWUyB4Pvwvv4D04X09TDS', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '087876876876', '2019-11-30 17:30:59', '2019-11-30 17:30:59'),
(43, 'Wiji Rakhmawati', 'wijirakhmawati121@gmail.com', '$2y$10$n1JV4Fafnf38BHUgZCGJKecQJfZgCRgup5afS58RlXB7ZRMOuJSoW', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'ALL', '087087808708', '2019-11-30 17:32:10', '2019-11-30 17:32:10'),
(44, 'Tsabita Fiddiini', 'fiddiinitsabita@gmail.com', '$2y$10$zFZnZD4wZnvuZn/kEcqvrOHnTSGS99sGh8xuPpIoPZJFe70qXL.A2', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '087876876876', '2019-11-30 17:33:21', '2019-11-30 17:33:21'),
(45, 'Lulu Mardiah', 'lulumardiah672@gmail.com', '$2y$10$a3cGCOF1hGVvHQrqYDAwv.O/JXgfgEUIXS16XkVr.cSxqvJ7sHXea', 'RlSVLyuCc8Anx420W8MLIuFa7OYSSlszxWTpeiVbhX2uaqcu2AgF83tvuWwB', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'ALL', '087876876876', '2019-11-30 17:34:18', '2019-11-30 23:25:24'),
(46, 'Dinynda Maharani Wibowo', 'diniimaharani@gmail.com', '$2y$10$0Khmq5e74kr1hKKuimgJV.Tj9.rWCFph9HasF/vHFU7Rt04DFdGn.', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '087876876876', '2019-11-30 17:35:11', '2019-11-30 17:35:11'),
(47, 'Nabila Az Zahra', 'nabilaasrisazzahara@gmail.com', '$2y$10$QPp5mOgA9jl77wicjCNaeedsTGbsvViR7CYdqe/owtzs.P3qsMKH6', 'thi5htX6yi6JDTPSWvBeymN4FZ9MRPw7glBJIfpYM2zOXlGoRo3rWWdwguWJ', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '087876876876', '2019-11-30 17:36:11', '2019-11-30 17:36:11'),
(48, 'Fadhilah Alawiyah', 'fadhilahalawiyah11861@gmail.com', '$2y$10$i./u96YCAFEyzjt2mdz1durQCXvLDOfgKHqfhthVgxpJVHbMg6BQ6', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '087876876876', '2019-11-30 17:36:58', '2019-11-30 17:36:58'),
(49, 'Jessica Melinda', 'jessicamelinda8@gmail.com', '$2y$10$J9Iv7NaOWRwQ2C6kGAiBvul/Ce5mYKSo5AvsFqd42WTzx8iaCEDK6', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '08787878787', '2019-11-30 17:37:44', '2019-11-30 17:37:44'),
(50, 'Lestari Wilujeng', 'hatakelestari1962@gmail.com', '$2y$10$T2JuC0okcHgQ.xkmx3.Miu9olvS96gEoJq.eVXcqgDRe8wvU/wYku', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '08787878787', '2019-11-30 17:38:37', '2019-11-30 17:38:37'),
(51, 'Intan Permata Sari Suharno', 'ip9932570@gmail.com', '$2y$10$VVbymCGfHFGdt8LNun/Oa.nANV6RwFbGP5rZuX6OHp5TExI1m4nuK', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '0856457475', '2019-11-30 17:39:15', '2019-11-30 17:39:15'),
(52, 'Cristina Natalia', 'cnatalia101@gmail.com', '$2y$10$WS0pBj97XRy4NzBEvhhRd.3yHMp/jQQnZwucmfB5tLNke52aG/xgq', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '976986796', '2019-11-30 17:40:36', '2019-11-30 17:40:36'),
(53, 'Aldilla Yuliani Noer Firdaus', 'adillayulianifirdaus07@gmail.com', '$2y$10$w3SP8TpxcoFdTQvIR0O2HectWArYIP2OfIRTRG1M4C/UJGm6ZET5i', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0087886868', '2019-11-30 17:42:20', '2019-11-30 17:42:20'),
(54, 'Iqra Fatwa Alam', 'iqrafatwa01@gmail.com', '$2y$10$mtwC/F/hqRRZvhrfk7lNO.xoOgvLc.DIY/wUVd7iLWWVSIiDPovk.', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '09869867', '2019-11-30 17:43:21', '2019-11-30 17:43:21'),
(55, 'Fitria', 'Fitriaaaaaaafitri0101@gmail.com', '$2y$10$wNBYLacWHA5Uax9V9X8vJu8gRL20UVF1BLTIoCFVJyQ3ZScfB43MG', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0867686868', '2019-11-30 17:45:17', '2019-11-30 17:45:17'),
(56, 'Linda Widya Shintaningrum', 'lindawidya61@gmail.com', '$2y$10$dXgpqZrif/nsGl/KWpS2zOpKcK/iLdUP5eeVgWICI7albNQpi7Wm6', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'ALL', '07896957', '2019-11-30 17:46:21', '2019-11-30 17:46:21'),
(57, 'Asifa Huda Pramudita Putri', 'asifahudap@gmail.com', '$2y$10$NSsHl8n9XPho7wbzG3vGMuXkegcx84lB5gXSb.wWpfvkRZGgzXtny', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '08708779', '2019-11-30 17:46:58', '2019-11-30 17:46:58'),
(58, 'Agasi Hana Syafitri', 'agasihana29@gmail.com', '$2y$10$swNQ6ROYqJ8PvZgS7uFisOcsJkxGztRNihMzJnKevTEdbCrzemaI6', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '08787686', '2019-11-30 17:47:32', '2019-11-30 17:47:32'),
(59, 'Maryama Aflaha', 'aflaha.maryama@gmail.com', '$2y$10$uX/f22eeQniGNIi0ePj5PumhSqLyRkMMECk6nU.rHyh/66CCvT02W', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '088687678', '2019-11-30 17:48:11', '2019-11-30 19:14:43'),
(60, 'Nadia Afny Zuraida', 'nadiaafnyz@gmail.com', '$2y$10$3AT3snbta02sQIvn.qRoEeggYJyfSJlZoU//Tm3dUNnDKOmLf3b0S', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '68844683583', '2019-11-30 17:48:51', '2019-11-30 17:48:51'),
(61, 'Rizki Amalia', 'rizma.juwandinata@gmail.com', '$2y$10$b5tbo1pUhoykRUWvGSb53eGV5.9bW/3f1y7h5B0uQvzxzd4fvjke6', 'gNVn1eR5JBZbY3M9F8N5urzfhMmbFa0EYMLFGBCBK191UI80wvUTMGvx7vhg', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821313141', '2019-11-30 17:50:09', '2019-11-30 17:50:09'),
(63, 'Eka Alfiatun Nabila', 'ekabella442@gmail.com', '$2y$10$27FNuddtqwTMdgd/lmqpZO4g.0GLhNeOvNKsZD1httQXCzUMQtLta', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821313141', '2019-11-30 17:51:45', '2019-11-30 17:51:45'),
(64, 'Berlian Adel Nimpuna', 'berlianadelnimpuna261201@gmail.com', '$2y$10$L6qJS/gCTgMjBzMTgO8TKeaN53T9s7Ldj3MDzzF8LXvgj2jHXToHu', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '9768578845', '2019-11-30 17:52:28', '2019-11-30 19:10:05'),
(65, 'Inggit Sukmawati', 'inggit.sukmawati80@gmail.com', '$2y$10$87L57xcBwlJ08wZMr9EbtOlH3ifFhofD8vi5YJJNWBDFNV/iZyEZe', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '087768', '2019-11-30 17:53:07', '2019-11-30 17:53:07'),
(66, 'Muhammad Fahrudin', 'muhammadfahrudin0000@gmail.com', '$2y$10$FIgsNfjRtULmIwT3jDCQOuG4bJCZSt9fKFJMf1XcoONdiHoNsM8Bm', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'ALL', '54747474748', '2019-11-30 17:53:48', '2019-11-30 17:53:48'),
(67, 'Putra Rizky Wahyu Setyawan', 'putrar04maret@gmail.com', '$2y$10$A7D05X4OViYKappxkIgGD./cZ5CMCtsLJx8fhCMgJoZzPlWsmM2Oi', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'ALL', '0877887', '2019-11-30 17:54:41', '2019-11-30 17:54:41'),
(68, 'Ratu Anita Tazkya', 'tazkyatigapuluh@gmail.com', '$2y$10$b5qqAXjAUZsV/dZqxxI5d.bGWpV5WVaqzaS8sD14EIYmX/u/yqzGu', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0877867857', '2019-11-30 17:56:10', '2019-11-30 17:56:10'),
(69, 'Agustina Putri Ayu', 'agustina.110801@gmail.com', '$2y$10$h5H1IdHtN4SfkvDu5YO/u.xizRMpTMhYYDgZkGYRFozFJqD7yoY12', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0877867857', '2019-11-30 17:57:35', '2019-11-30 17:57:35'),
(70, 'Andi Hajriel Tri Agung', 'ANDIHAJRIELTRIAGUNG@gmail.com', '$2y$10$A5qILk7tVdiSk6wA75vtqe4WOMFn2Z9ve0/v.T4EhJ3gFQj2DpoTm', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', NULL, '0821388913', '2019-11-30 17:58:15', '2019-11-30 18:12:56'),
(71, 'Yowana Andan Mayoreta', 'yowana28@gmail.com', '$2y$10$Xu00Rb0kPej8JQi9ypL.OObfyR15DUdn1hFX79WNR3.5s9HKFuVTO', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '087797979', '2019-11-30 17:59:01', '2019-11-30 17:59:01'),
(72, 'Safril Astafira', 'firasafril4@gmail.com', '$2y$10$HMEVu35OZhkEmIEQCuKLXu3gUAODCH3hdor5phbZe0tJT2ti.Ef0m', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:04:16', '2019-11-30 19:12:03'),
(74, 'Farid Hamzah P', 'faridhp38@gmail.com', '$2y$10$MjT/KDwEcmPpEbDB5koO8e.ugjxJKGgGHGCt21VxuEaD9UOEKnY6i', 'zFPGNsrVHcDB3Ln0ETfQ0DIkFtVely37JEPwFnN8HMTN7PEOYlhkwJijHPGP', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '0821388913', '2019-11-30 18:05:17', '2019-11-30 18:05:17'),
(75, 'Valentina kusumaningrum', 'mas.itox@gmail.com', '$2y$10$Xx0SjG.EokokO2kucg80Xum3JRcksr1MJWeOCMARUiRug1Z8qpK.C', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:06:04', '2019-11-30 18:06:04'),
(76, 'Nafisah Julia Putri', 'nafisahjp@gmail.com', '$2y$10$ZbAVxAslB/XPm.D7vqFAyOtR4fIlDQ01qHja9.Ey5PW6ROyoWfjwW', 'OZgx3Z3R4WTVyUI2W1k7bqzMAHPI2WUKOZyqJmQibi09NzFNJGyl4sd5sizu', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:08:02', '2019-11-30 18:08:02'),
(77, 'Danendra nadhif pramana', 'nadhif900@gmail.com', '$2y$10$hstvbSfWZZYr7sQtAGG46.WnaMocWSoKPSu1bdc.5kpHznupPt.lm', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '0821388913', '2019-11-30 18:09:57', '2019-11-30 18:09:57'),
(78, 'Nur Riauldinna', 'nurriauldinna01@gmail.com', '$2y$10$kGXsSY0kNVUuS5wiwNLgmeNtaaH1hI3K3M0qznFo1B/4kms21QTmO', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:10:52', '2019-11-30 18:10:52'),
(79, 'Yuspi Maulifa', 'yuspimf@gmail.com', '$2y$10$pFe.SGNomNInYECwx1bhceZdgkHyEA.n3/ykiqCXd0hhks4lNZV/W', 'r14gwdznJwBh4ZxRVYX4cCitCMEXnX45j5g6Hw4fWTtUUwWNhOvZh16PyEol', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:11:50', '2019-11-30 23:13:13'),
(81, 'Indra Gunawan', 'Indragunawan2542@gmail.com', '$2y$10$y7H7OnPrNUP/VHocPi6GRutLb6211FfIUJNL42dLfMUzBnyIo1yPu', 'fShn0ml6vbNufJFN7BYbWbIIG1ZeK6u2Y9oGHDrAmvsBwKKJVVUP1uLDWZe8', 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:13:55', '2019-11-30 18:13:55'),
(82, 'Gumilang Firdaus', 'gumilangmf@gmail.com', '$2y$10$a.AUKuTxLQJgGRqyDtixXeV8DZy.teJcoaIksm1GkIFGOTt9KWiRS', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:14:46', '2019-11-30 18:14:46'),
(83, 'Silfia Salsabila', 'silfiasalsa16@gmail.com', '$2y$10$dAyTReuMGCu4uqhKeST1x.VGDQkb2jFgvOXKFYjSJsGnENmAjyIEK', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SOSHUM', '0821388913', '2019-11-30 18:16:09', '2019-11-30 18:16:09'),
(84, 'rifkykrismantoro', 'rifkykrismantoro@gmail.com', '$2y$10$Ill7Nil64JSIPijl5h.rFubpzhIoMCx4qyrIX9bqTddV1pEWTUdDC', NULL, 'USER', 'Jakarta Indonesia', 'SMAN 1', 'SAINTEK', '0821388913', '2019-11-30 18:21:26', '2019-12-01 01:51:25'),
(85, 'dita', 'tyodita.td@gmail.com', '$2y$10$dNYzR6nlR8bbgOmpIf0CMOIW5pbmRCvNnzrphFp28r23vVXgAh4aC', NULL, 'USER', 'asrama', 'sman1', 'SAINTEK', '08224109864', '2019-12-02 04:40:14', '2019-12-02 04:40:14'),
(86, 'ummi', 'ummikalsumlubis02@gmail.com', '$2y$10$fT2INCaRqCUj95Y1vOoMj.x0bhZYIA7fTNia43dmO66pNOHSb3Dz2', NULL, 'USER', 'asrama', 'sman1', 'SAINTEK', '082156467687', '2019-12-02 09:25:49', '2019-12-02 09:25:49'),
(87, 'tes', 'teskuy@gmail.com', '$2y$10$JIdPRkyUkf1Q5k/9Go825OyCArGoqm1eUeqQEU/YsAtHivYFrG8rq', NULL, 'USER', 'tes dong', 'SMAN 1', 'ALL', '0821388913', '2019-12-04 21:37:47', '2019-12-04 21:37:47'),
(88, 'Defi Aisah Nurahman', 'nurachmandefi8@gmail.com', '$2y$10$rDadVPNZdP.jsx/Fm.EWvesadvV4s8Cxts0SpwG0wFL4Qakqf.aca', NULL, 'USER', 'default', 'SMAN 1', 'SAINTEK', '081240168', '2020-01-01 05:02:37', '2020-01-01 05:02:37'),
(89, 'Feby Kinanti', 'febykinantisiwi279@gmail.com', '$2y$10$0.b77WlO9eBBW3qTh4Nfg.0wo0SpT55D1/bCYjRaIP6Rtkgu7OKLS', NULL, 'USER', 'default', 'SMAN 1', 'SAINTEK', '085887479014', '2020-01-01 05:10:45', '2020-01-01 05:10:45'),
(90, 'Adellia Azzahra', 'adelliaazzahra123@gmail.com', '$2y$10$fQXTj/pJm7iU1ZSNJiavRO6FHYIFsDJ8D6JTDDGYIdiiFHvKL6ovC', NULL, 'USER', 'default', 'SMAN 1', 'SAINTEK', '089687828', '2020-01-01 05:12:28', '2020-01-01 05:12:28'),
(91, 'Devi', 'devi@gmail.com', '$2y$10$8ge7LmQJsvAZ9ziXM0az4uPuG9xvokVa4FtjvKAcEeLsZzyo6Akf.', NULL, 'USER', 'default', 'SMAN 1', 'SAINTEK', '0821388913', '2020-01-01 05:52:07', '2020-01-01 05:52:07'),
(92, 'Muh', 'bambang@gmail.com', '$2y$10$N0PbExmpPF1lLr2w8zUf2uhrDPKiSYYVkcxml6Ekqh3xovKqxW/uS', NULL, 'USER', 'Ksks', 'Sma ku', 'SAINTEK', '089645121375487', '2020-01-08 19:09:41', '2020-01-08 19:09:41'),
(93, 'Abdullah Quwatan Fiddiin', 'fiddiin58@gmail.com', '$2y$10$Gv2kN9gGRJuKKLOU8gmc1uC.JyyeZZizLdfWQiYpiH9SqaXypZC3a', 'CZzsZ4wgHlp1q0eXjmf7pc2tDMkvQchf07NVWIxju0MsEApdLLihypdKH4EA', 'USER', 'Komplek BPP blok D4/19', 'SMAN 2 KS Cilegon', 'SAINTEK', '089601999922', '2020-01-17 22:30:57', '2020-01-17 22:30:57'),
(94, 'Geby', 'gebycarmenitha92@gmail.com', '$2y$10$R3mMoBwbmz9MFg0f5gUZmOGY2K59yVKNOwQubvFGEYjMix8UCvi6y', NULL, 'USER', 'Aek nabara', 'Sma n 1 raya', 'SAINTEK', '085372438333', '2020-01-19 00:27:55', '2020-01-19 00:27:55'),
(95, 'Ajeng Intan Nurillah', 'alfatihramadhan63@gmail.com', '$2y$10$l/Tobf4gemM85IVGweSVj.75BI5/M8KBmDdJumvWFQxjNE/zfeFsG', NULL, 'USER', 'Sukabumi-Jawa Barat', 'Man 2 kota sukabumi', 'SAINTEK', '085863269672', '2020-01-19 03:04:38', '2020-01-19 03:04:38'),
(96, 'Hidayatul Hasanah', 'hhidayatul63@gmail.com', '$2y$10$IdP0I/tyYt939negdHloZuvQpuNuU5dFZr0IA2Y6AJ75SFlByuIFm', NULL, 'USER', 'Mranggen Demak Jawa Tengah', 'Smk n 8 SURAKARTA', 'SOSHUM', '0895421700535', '2020-01-19 03:51:47', '2020-01-19 03:51:47'),
(98, 'Hidayatul Hasanah', 'hhidayatul54@gmail.com', '$2y$10$fRHiMzdS8a5l5k.QgT4ub.Obu6/AKMNS0RNYrAWxGKciW17qBpA8C', NULL, 'USER', 'Mranggen Demak Jawa Tengah', 'Smk n 8 SURAKARTA', 'SAINTEK', '0895421700535', '2020-01-19 03:52:41', '2020-01-19 03:52:41'),
(99, 'Amrina vl sirait', 'amrinavlsirait2706@gmail.com', '$2y$10$Vf.75WzJemkkJpkeXutSmuCmQNbCus9s6.H0k4yxHEzNtR69KLk6S', NULL, 'USER', 'Singkut', 'Sma n 2 Sarolangun', 'SAINTEK', '085366643518', '2020-01-19 07:48:34', '2020-01-19 07:48:34'),
(100, 'Afif Nurrahman', 'afifnurrahman309@gmail.com', '$2y$10$2Gv3Gq1OHuBWjokJs9yuJejfAcMMPBic9mzvP2h1UpnF8XHMvmyBW', NULL, 'USER', 'Permata biru', 'Man 1 Bandar Lampung', 'SOSHUM', '08990759740', '2020-01-19 19:17:59', '2020-01-19 19:17:59'),
(101, 'Afif', 'anarr059@gmail.com', '$2y$10$UKDqI6yLRkWwythHoWvmsOSMT3Qzf4mbgOOgQJiJAGLqGWW6SWdTa', NULL, 'USER', 'Permata Biru, Bandar Lampung', 'MAN 1 Bandar Lampung', 'SAINTEK', '08990759740', '2020-01-19 19:20:24', '2020-01-19 19:20:24'),
(102, 'Fajaruddin Ibrahim', 'fajaribrahim035@gmail.com', '$2y$10$/dOHogsV/X9d64rAkSeDhusG/1Zt1cyhrdpQj1VxcUJXStH5mw1e.', NULL, 'USER', 'Perumahan korpri blok b12 no 12 Sukarame,B.lampung', 'Man 1 B.Lampung', 'SOSHUM', '0895340115147', '2020-01-19 19:50:05', '2020-01-19 19:50:05'),
(103, 'M.Fachrul Rozy', 'rozyfachrul759@gmail.com', '$2y$10$ykKL8RArFH1ZpQlByuhlBuuFCMQC2ADk0NKMkRP/XuRqO7GLOFXw.', NULL, 'USER', 'Jl.puoau seribu', 'Man 1 Bandar Lampung', 'SOSHUM', '082297700303', '2020-01-20 00:51:56', '2020-01-20 00:51:56'),
(104, 'Andri', 'drisd5malang@gmail.com', '$2y$10$1jeeC8zmwCi1z91nU.wRj.ywwIilig4tx5WgNorOO689OE3W/VVDS', NULL, 'USER', 'Jalan danau Poso 2 G3E6', 'SMAN 10 malang', 'SAINTEK', '081333479977', '2020-01-20 05:17:48', '2020-01-20 05:17:48'),
(105, 'Wulan', 'wulanhasanah141@gmail.com', '$2y$10$9YoI.3550hwgb2FGG17DDOU4q2vznfPSQO0QfipmM.1m.kSB99OHu', NULL, 'USER', 'Supanjang', 'Sman 1 batusangkar', 'SAINTEK', '0895360657433', '2020-01-20 06:14:48', '2020-01-20 06:14:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_modul`
--
ALTER TABLE `tb_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `FK_tb_soal` (`id_bidang`);

--
-- Indexes for table `tb_try_out`
--
ALTER TABLE `tb_try_out`
  ADD PRIMARY KEY (`id_try_out`);

--
-- Indexes for table `tb_tutorial`
--
ALTER TABLE `tb_tutorial`
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
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_modul`
--
ALTER TABLE `tb_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_try_out`
--
ALTER TABLE `tb_try_out`
  MODIFY `id_try_out` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tutorial`
--
ALTER TABLE `tb_tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
