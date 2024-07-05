-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2024 at 07:02 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_06_14_164232_create_tbmobil_table', 1),
(14, '2024_06_25_101413_create_tb_paket', 1),
(15, '2024_06_25_102128_create_tb_pesanan', 1),
(16, '2024_06_25_104059_create_tb_tentor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbmobil`
--

CREATE TABLE `tbmobil` (
  `id` bigint UNSIGNED NOT NULL,
  `merk_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mobil` enum('Manual','Automatic') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mobil` enum('Ready','Maintenance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` bigint UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mobil` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mobil` enum('Ready','Maintenance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `type_mobil`, `status_mobil`, `harga_paket`, `tahun`, `nopol`, `gambar`, `logo`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Peket Manual 10x', 'Manual', 'Ready', '1100000', '2018', 'M 1010 KL', 'daihatsu.png', 'daihatsu-logo.png', 'Fleksibilitas: Penyewaan mobil memungkinkan siswa untuk belajar mengemudi pada waktu yang sesuai dengan jadwal mereka tanpa harus membeli mobil sendiri.\r\n\r\nKetersediaan Kendaraan yang Tepat: Siswa dapat belajar mengemudi dengan mobil yang sesuai dengan kebutuhan mereka, baik itu mobil manual atau otomatis, atau kendaraan dengan fitur-fitur khusus yang diperlukan untuk ujian mengemudi.\r\n\r\nBiaya Efektif: Menyewa mobil seringkali lebih murah daripada membeli mobil untuk latihan mengemudi, terutama jika pengguna hanya memerlukan mobil untuk jangka waktu yang singkat.\r\n\r\nPemeliharaan dan Perawatan: Perusahaan penyewaan mobil biasanya bertanggung jawab atas pemeliharaan dan perawatan kendaraan, sehingga siswa tidak perlu khawatir tentang biaya dan tugas perawatan.\r\n\r\nKeselamatan dan Keamanan: Mobil yang disewakan untuk pengajaran mengemudi biasanya dilengkapi dengan fitur-fitur keselamatan tambahan, seperti pedal rem di sisi instruktur, yang dapat meningkatkan keamanan selama proses belajar.\r\n\r\nPengalaman yang Beragam: Siswa dapat mencoba berbagai jenis mobil, yang dapat membantu mereka menjadi pengemudi yang lebih serbaguna dan percaya diri.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', NULL, NULL),
(2, 'Paket Manual 8x', 'Manual', 'Ready', '900000', '2019', 'M 1873 LG', 'daihatsu.png', 'daihatsu-logo.png', 'Deskripsi', NULL, NULL),
(5, 'Paket Super', 'Manual', 'Ready', '343434', '2020', 'M 374384 K', 'gambar-6685162b13908png', 'logo-6685162b13912png', 'ADSF', '2024-07-03 02:13:15', '2024-07-03 02:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `snap_token` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paket_id` int NOT NULL,
  `no_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_tgl_mulai` text COLLATE utf8mb4_unicode_ci,
  `req_tentor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_pembayaran` datetime DEFAULT NULL,
  `status_bayar` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tgl_bayar` datetime DEFAULT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `nota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status_pelatihan` enum('proses','selesai','terima') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `user_id`, `snap_token`, `paket_id`, `no_transaksi`, `req_tgl_mulai`, `req_tentor`, `total`, `batas_pembayaran`, `status_bayar`, `tgl_bayar`, `tgl_pesan`, `nota`, `status_pelatihan`, `created_at`, `updated_at`) VALUES
(1, 1, 'b18cae4b-6d4a-4c1c-b75c-f9a84622446e', 1, '6686229144662', '2024-07-18 14:41:00', 'Bro Taju', '1100000', '2024-07-04 12:18:25', 'settlement', '2024-07-04 00:00:00', '2024-07-04 11:18:25', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b18cae4b-6d4a-4c1c-b75c-f9a84622446e/pdf', 'selesai', '2024-07-04 04:18:25', '2024-07-04 07:48:11'),
(2, 1, 'bd393c9c-477f-4192-8e03-1e4564ba0dcb', 5, '6686540196ad6', '2024-07-04 14:49:00', 'Bro Zenor', '343434', '2024-07-04 15:49:21', 'settlement', '2024-07-04 14:49:32', '2024-07-04 14:49:21', 'https://app.sandbox.midtrans.com/snap/v1/transactions/bd393c9c-477f-4192-8e03-1e4564ba0dcb/pdf', 'selesai', '2024-07-04 07:49:21', '2024-07-04 11:18:21'),
(3, 1, '8d1d22e9-00f5-4e89-8a53-14577c0d2d01', 2, '6686911a18bff', '2024-07-07 19:10:00', 'Bro Zenor', '900000', '2024-07-04 20:10:02', 'pending', '2024-07-04 19:10:32', '2024-07-04 19:10:02', 'https://app.sandbox.midtrans.com/snap/v1/transactions/8d1d22e9-00f5-4e89-8a53-14577c0d2d01/pdf', 'proses', '2024-07-04 12:10:02', '2024-07-04 12:10:37'),
(4, 5, 'c75ec366-3d6c-457e-8007-a585d129f912', 2, '6687965e78dd6', '2024-07-20 13:46:00', 'Bro Taju', '900000', '2024-07-05 14:44:46', 'settlement', '2024-07-05 13:45:31', '2024-07-05 13:44:46', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c75ec366-3d6c-457e-8007-a585d129f912/pdf', 'selesai', '2024-07-05 06:44:46', '2024-07-05 06:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentor`
--

CREATE TABLE `tb_tentor` (
  `id_tentor` bigint UNSIGNED NOT NULL,
  `nama_tentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `biodata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tentor`
--

INSERT INTO `tb_tentor` (`id_tentor`, `nama_tentor`, `tanggal_lahir`, `biodata`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Bro Taju', '2000-04-22', 'Saya adalah Wibu akut', '668502c0a8f92png', '2024-07-03 00:50:24', '2024-07-03 01:08:14'),
(2, 'Bro Zenor', '1988-08-19', 'Bro', '668504bfa2de2png', '2024-07-03 00:58:55', '2024-07-03 00:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `no_hp`, `alamat`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yosi Bagus Sadar R.', '089536064774', 'Kalianget Timur', 'yosi@gmail.com', NULL, '$2y$10$5zxOEZCNYQCeORT97SYi4OcM9WBzfhMMTBCGAualKIgUS5TaSxIsW', 'user', NULL, '2024-07-02 02:30:53', '2024-07-04 06:55:58'),
(2, 'Eki ni bos', '081807058847', 'satelit palapa', 'eki@gmail.com', NULL, '$2y$10$f/BISGk11jBwwdqvznVLK.2YKr3MVGNB8.BiRBKTxVZ4SLHrqaIrC', 'admin', NULL, NULL, NULL),
(3, 'Yosi', '08126371623', 'Kalianget', 'v2project2022@gmail.com', NULL, '$2y$10$xdSzANa0x5BOWqhpEJY/JurCZAVdi.rhnMupVLBMOf/ublP5HmTfu', 'user', NULL, '2024-07-02 02:41:00', '2024-07-02 02:41:00'),
(4, 'Yosi Bagus Sadar Rasuli, S.Kom', '08127968494', 'JL. AGRO WISATA NO. 509 PEKALONGAN\r\nLampung Timur', 'yossirassulli@yahoo.co.id', NULL, '$2y$10$2JlGj1h3p87QrEHcSwMkKOJXgyyr6.beNBeBh4kBqfG23bTGDL.bO', 'user', NULL, '2024-07-03 01:33:42', '2024-07-03 01:33:42'),
(5, 'Yosi Bagus Sadar Rasuli', '08127968494', 'JL. AGRO WISATA NO. 509 PEKALONGAN', 'rofiqotuljamiliyah.student@unibamadura.ac.id', NULL, '$2y$10$SL/3.aYT3Q9NCktbrdCy6ugg5FqXl7wgmkezZMb/nDkKuuJ6PRGmK', 'user', NULL, '2024-07-05 06:42:46', '2024-07-05 06:42:46');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbmobil`
--
ALTER TABLE `tbmobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tentor`
--
ALTER TABLE `tb_tentor`
  ADD PRIMARY KEY (`id_tentor`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbmobil`
--
ALTER TABLE `tbmobil`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tentor`
--
ALTER TABLE `tb_tentor`
  MODIFY `id_tentor` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
