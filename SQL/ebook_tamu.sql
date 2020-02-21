-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 02:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `terakhir_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `gender`, `username`, `email`, `role`, `password`, `foto`, `terakhir_update`) VALUES
(1, 'alfin', 'L', 'alfin', 'alfin@gmail.com', 'admin', 'alfin123', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `idpaket` int(11) NOT NULL,
  `nama_pengirim` varchar(45) DEFAULT NULL,
  `instansi` varchar(45) DEFAULT NULL,
  `tipe_barang` varchar(45) NOT NULL,
  `nama_penerima` varchar(45) DEFAULT NULL,
  `admin_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`idpaket`, `nama_pengirim`, `instansi`, `tipe_barang`, `nama_penerima`, `admin_id`) VALUES
(11, 'junet', 'jakarte', 'makanan', 'pino', NULL),
(18, 'alfin', 'sragen', 'DLL', 'fajar', NULL),
(19, 'marfino', 'solo', 'makanan', 'supri', NULL),
(20, 'yudi', 'yudi', 'buku', 'saas', NULL),
(21, 'yahyo', 'trenggalek', 'makanan', 'irvan', NULL),
(22, 'ical', 'ical', 'makanan', 'ical', NULL),
(24, 'ical', 'icaly', 'buku', 'icaly', NULL),
(25, 'ical', 'gg', 'buku', 'yudi', NULL);

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
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `instansi` varchar(45) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `keperluan` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `tanggal_datang` varchar(45) DEFAULT NULL,
  `admin_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `gender`, `nama`, `instansi`, `no_telp`, `keperluan`, `foto`, `tanggal_datang`, `admin_id`) VALUES
(155, '', 'ujang', 'auto2000', '08965734333', 'MAIN', 'ujang.jpg', '02/14/2020', NULL),
(156, '', 'alfin', 'bogor', '0887223', 'magang', 'alfin.jpg', '02/14/2020', NULL),
(157, '', 'bengbeng', 'bri', '089546724', 'makan', 'bengbeng.jpg', '02/11/2020', NULL),
(158, 'L', 'buday', 'sumatera', '0486590856903', 'MINUM', 'buday.jpg', '02/14/2020', NULL);

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
  `foto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','staff','crew') COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `foto`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'ransah kalbar', 'ransah@gmail.com', NULL, 'ssss', '.jpg', NULL, NULL, '2020-02-03 21:10:34', '2020-02-03 21:10:34'),
(7, 'alfin', 'alfin@gmail.com', NULL, '$2y$10$byvAYY2eDw4dVPqLlC4T.e/I51Nbg.Uk.op.RXAv5Sf5NWy7OpDgq', NULL, NULL, NULL, '2020-02-14 00:05:23', '2020-02-14 00:05:23'),
(8, 'yudi', 'yudi@gmail.com', NULL, '$2y$10$bNMHZuBc6Eh2Z8RnmQVSEeL8pBuD5o/wb6NzKuOYIU.xfeqpf6GKa', NULL, 'admin', NULL, '2020-02-14 00:25:47', '2020-02-14 00:25:47'),
(9, 'calezy', 'calezy@gmail.com', NULL, '$2y$10$8yOLFe5rEalT8RtXjQnQaugFlWyF3FqJT2TDYrocQOZL6TEdtaEmq', NULL, 'admin', NULL, '2020-02-14 00:29:46', '2020-02-14 00:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_telp_UNIQUE` (`role`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`idpaket`),
  ADD UNIQUE KEY `no_telp_UNIQUE` (`nama_penerima`),
  ADD KEY `fk_paket_admin1_idx` (`admin_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_telp_UNIQUE` (`no_telp`),
  ADD KEY `fk_tamu_admin1_idx` (`admin_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `idpaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `fk_paket_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `fk_tamu_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
