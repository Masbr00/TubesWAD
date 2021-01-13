-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 02:49 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswad`
--

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `tabel_dokumen`
--

CREATE TABLE `tabel_dokumen` (
  `id` int(11) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pl` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rtrw` varchar(20) NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `agama` text NOT NULL,
  `nikah` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` text NOT NULL,
  `pasfoto` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `surat_pengantar` varchar(255) NOT NULL,
  `pengiriman` varchar(60) NOT NULL,
  `status_dokumen` text NOT NULL DEFAULT 'Dokumen Belum Selesai',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_dokumen`
--

INSERT INTO `tabel_dokumen` (`id`, `id_user`, `nama_lengkap`, `tgl_lahir`, `pl`, `alamat`, `rtrw`, `kelurahan`, `kecamatan`, `agama`, `nikah`, `pekerjaan`, `kewarganegaraan`, `pasfoto`, `kk`, `surat_pengantar`, `pengiriman`, `status_dokumen`, `created_at`, `updated_at`) VALUES
(21, 8, 'Tester', '2021-01-13', 'laki-laki', 'Banyuwangi', '003/001', 'Tamanbaru', 'Tamanbaru', 'Pelajar', 'Belum Menikah', 'swasta', 'wni', 'suten.png', '21454212581_KARTU_KELUARGA.jpg', 'cv.docx', 'mandiri', 'Dokumen Belum Selesai', '2021-01-13 01:38:08', '2021-01-13 02:08:09'),
(22, 4, 'Admin', '2021-01-13', 'laki-laki', 'Banyuwangi', '003/001', 'Tamanbaru', 'Tamanbaru', 'Pelajar', 'Belum Menikah', 'buruh', 'wni', 'suten.png', '21454212581_KARTU_KELUARGA.jpg', 'cv.docx', 'mandiri', 'Dokumen Belum Selesai', '2021-01-13 05:21:22', '2021-01-13 05:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pengguna',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `telp`, `alamat`, `email`, `email_verified_at`, `username`, `password`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jody Mardika', '081230873215', 'Banyuwangi', 'creepyzodiak@gmail.com', NULL, 'jodymardika', '$2y$10$Brn7SM4Wr68jYMh7vCwGmOb9iG2aTl65dmqqRHGUm6yToyx6l8ciS', 'pengguna', NULL, '2021-01-07 08:22:33', '2021-01-07 08:22:33'),
(4, 'Admin', '0000', 'N/A', 'admin@gmail.com', NULL, 'admin', '$2y$10$z9fksMsseuAYHzer7OtPn.HZKqKtD8rUjZemrbIipma82uKkpFdS6', 'admin', NULL, '2021-01-07 09:25:28', '2021-01-07 09:25:28'),
(8, 'Tester', '011', 'N/A', 'na@gmail.com', NULL, 'tester', '$2y$10$dE9QImxfMh2uFQPkNxrYReqvFNLwyzKWt3qrfKf9sPeWQ/m3gK2Cm', 'pengguna', NULL, '2021-01-13 01:32:05', '2021-01-13 01:32:05');

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
-- Indexes for table `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  ADD CONSTRAINT `cons_user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
