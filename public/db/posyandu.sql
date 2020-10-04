-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2020 pada 13.29
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `babies`
--

CREATE TABLE `babies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` bigint(20) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `golongan_darah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang_bayi` decimal(11,2) NOT NULL,
  `berat_bayi` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `babies`
--

INSERT INTO `babies` (`id`, `nama`, `nama_ibu`, `pekerjaan_ibu`, `nama_ayah`, `pekerjaan_ayah`, `tempat_lahir`, `tanggal_lahir`, `anak_ke`, `alamat`, `jenis_kelamin`, `golongan_darah`, `panjang_bayi`, `berat_bayi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Zehan Arrasya Davindra', 'Ferdiani Megasari', 'Swasta', 'Hendra Erfi Sudarji', 'Swasta', 'Pasuruan', 1595574840, 2, 'Pasuruan', 1, 'BT', '50.00', '2.60', '2020-10-04 11:15:32', '2020-10-04 11:15:32', NULL),
(2, 'Clarissa Agiska Davindra', 'Ferdiani Megasari', 'Swasta', 'Hendra Erfi Sudarji', 'Swasta', 'Pasuruan', 1600992900, 1, 'Pasuruan', 2, 'BT', '50.00', '3.00', '2020-10-04 11:16:36', '2020-10-04 11:18:52', '2020-10-04 11:18:52'),
(3, 'Clarissa Agiska Davindra', 'Ferdiani Megasari', 'Swasta', 'Hendra Erfi Sudarji', 'Swasta', 'Pasuruan', 1537845480, 1, 'Pasuruan', 2, 'BT', '50.00', '3.00', '2020-10-04 11:19:50', '2020-10-04 11:19:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_09_02_064813_create_babies_table', 1),
(23, '2020_09_02_072934_add_soft_delete_to_babies', 1),
(24, '2020_09_02_115439_create_progress_babies_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `progress_babies`
--

CREATE TABLE `progress_babies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `bulan_ke` int(11) NOT NULL,
  `panjang_bayi` decimal(11,2) NOT NULL,
  `berat_bayi` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@posyandu.com', 'Admin', NULL, '$2y$10$ZdHKubvmJGpyJkp1mLiyq.9VdH.3lMfaorLKkuWvORS65bkE8Iw3y', NULL, NULL, NULL),
(2, 'Staff Satu', 'staff@posyandu.com', 'Staff', NULL, '$2y$10$RrWVV1R9ohisVR7fbZDQR.Nirqt5w9Uh1WCbpNQrD1erO.Y1vZ5Xe', NULL, NULL, NULL),
(3, 'Staff', 'posyandu@posyandu.com', 'Staff2', NULL, '$2y$10$r0SWsbXb/./gEGOt5fOLiOoM72hFpyLPjTxMy105Aj.bcWHMNgroq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `babies`
--
ALTER TABLE `babies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `progress_babies`
--
ALTER TABLE `progress_babies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `babies`
--
ALTER TABLE `babies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `progress_babies`
--
ALTER TABLE `progress_babies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
