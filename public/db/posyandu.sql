-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2020 pada 07.12
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
  `nama_ayah` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` bigint(20) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `golongan_darah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang_bayi` int(11) NOT NULL,
  `berat_bayi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `babies`
--

INSERT INTO `babies` (`id`, `nama`, `nama_ibu`, `nama_ayah`, `tempat_lahir`, `tanggal_lahir`, `anak_ke`, `alamat`, `jenis_kelamin`, `golongan_darah`, `panjang_bayi`, `berat_bayi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bayi', 'Ibu', 'Ayah', 'Pasuruan', 1599023940, 4, 'Malang', 2, 'B', 50, 3, '2020-09-02 05:19:55', '2020-09-02 05:19:55', NULL),
(2, 'Qwerty', 'Rweq', 'Qwer', 'Pasuruan', 1583385660, 3, 'Malang', 2, 'AB', 50, 3, '2020-09-02 05:22:27', '2020-09-05 05:09:45', '2020-09-05 05:09:45'),
(3, 'Rasya', 'Ferdiani', 'Hendra', 'Pasuruan', 1595571660, 2, 'Pasuruan', 1, 'BT', 50, 3, '2020-09-02 06:21:53', '2020-09-03 10:25:34', '2020-09-03 10:25:34'),
(4, 'Clarissa Agiska Davindra', 'Ferdiani Megasari', 'Hendra Ervi Sudarji', 'Pasuruan', 1537233900, 1, 'Pasuruan', 1, 'BT', 50, 3, '2020-09-03 10:27:56', '2020-09-03 10:29:06', '2020-09-03 10:29:06'),
(5, 'Clarissa Agiska Davindra', 'Ferdiani Megasari', 'Hendra Ervi Sudarji', 'Pasuruan', 1537233900, 1, 'Pasuruan', 2, 'BT', 50, 3, '2020-09-03 10:30:33', '2020-09-04 02:23:09', '2020-09-04 02:23:09'),
(6, 'Zehan Arrasya Davindra', 'Ferdiani Megasari', 'Hendra Ervi Sudarji', 'Pasuruan', 1595577120, 2, 'Pasuruan', 1, 'BT', 52, 3, '2020-09-03 10:39:23', '2020-09-04 02:23:16', '2020-09-04 02:23:16'),
(7, 'Clarissa Agiska Davindra', 'Ferdiani Megasari', 'Hendra Erfi Sudarji', 'Pasuruan', 1537233900, 1, 'Pasuruan', 2, 'BT', 50, 3, '2020-09-04 02:25:11', '2020-09-04 02:25:11', NULL),
(8, 'Zehan Arrasya Davindra', 'Ferdiani Megasari', 'Hendra Erfi Sudarji', 'Pasuruan', 1595577120, 2, 'Pasuruan', 1, 'BT', 52, 3, '2020-09-04 02:26:33', '2020-09-04 02:26:33', NULL),
(9, 'Asd', 'Qwer', 'Sedfg', 'Sdrf', 1599277620, 2, 'Anvsdg', 1, 'B', 50, 3, '2020-09-05 03:47:51', '2020-09-05 03:47:51', NULL);

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2020_09_02_064813_create_babies_table', 1),
(27, '2020_09_02_072934_add_soft_delete_to_babies', 1),
(28, '2020_09_02_115439_create_progress_babies_table', 1);

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
  `panjang_bayi` int(11) NOT NULL,
  `berat_bayi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `progress_babies`
--

INSERT INTO `progress_babies` (`id`, `id_bayi`, `bulan_ke`, `panjang_bayi`, `berat_bayi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 9, 60, 4, NULL, NULL, NULL),
(2, 1, 10, 65, 5, NULL, NULL, NULL),
(3, 2, 1, 4, 30, '2020-09-03 10:07:44', '2020-09-03 10:07:44', NULL),
(4, 2, 2, 4, 30, '2020-09-03 10:09:55', '2020-09-03 10:09:55', NULL),
(5, 2, 3, 30, 5, '2020-09-03 10:10:09', '2020-09-03 10:10:09', NULL),
(6, 8, 1, 32, 5, '2020-09-05 03:30:38', '2020-09-05 03:30:38', NULL),
(7, 2, 4, 3, 60, '2020-09-05 05:07:23', '2020-09-05 05:07:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `progress_babies`
--
ALTER TABLE `progress_babies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
