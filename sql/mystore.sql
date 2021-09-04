-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2021 pada 12.19
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-08-21-160535', 'App\\Database\\Migrations\\Penjualan', 'default', 'App', 1629562849, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) UNSIGNED NOT NULL,
  `customer` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `tgl_beli` datetime NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `customer`, `nama_produk`, `harga`, `unit`, `tgl_beli`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 'Mojo', 'Coki-Coki', '2000,-', '2', '2021-08-22 18:59:56', '4000,-', '2021-08-22 13:59:56', '2021-08-22 13:59:56'),
(2, 'Jojo', 'Yakult', '2500,-', '1', '2021-08-22 19:04:17', '2500,-', '2021-08-22 14:04:17', '2021-08-22 14:04:17'),
(3, 'Jhony', 'Sprite', '6000,-', '1', '2021-08-22 19:04:17', '6000,-', '2021-08-22 14:04:17', '2021-08-22 14:04:17'),
(4, 'Hori', 'Lolipop Candy', '1500,-', '1', '2021-08-22 19:08:04', '1500,-', '2021-08-22 14:08:04', '2021-08-22 14:08:04'),
(5, 'Miyamura', 'Yupi', '1000,-', '2', '2021-08-22 19:08:04', '2000,-', '2021-08-22 14:08:04', '2021-08-22 14:08:04'),
(6, 'Kyra', 'Kiko', '1000,-', '1', '2021-08-22 19:10:14', '1000,-', '2021-08-22 14:10:14', '2021-08-22 14:10:14'),
(10, 'Ew Ew', 'Whiskas', '10000', '1', '2021-08-23 12:41:00', '10000', '2021-08-23 00:42:00', '2021-08-23 00:42:00'),
(11, 'Fadian', 'Yupi', '500,-', '4', '2021-08-23 12:42:00', '2000,-', '2021-08-23 00:42:37', '2021-08-23 00:42:37'),
(12, 'Bagas Arya', 'Indomie Goreng', '3000,-', '2', '2021-08-24 23:28:00', '6000,-', '2021-08-24 11:28:57', '2021-08-24 11:28:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `produsen` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `slug`, `produsen`, `harga`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Ultra Milk', 'ultra-milk', 'PT Ultra Jaya Milk', '7000,-', 'milk.png', '2021-08-16 02:15:44', '2021-08-18 07:54:58'),
(2, 'Bear Brand', 'bear-brand', 'Nestle', '12000,-', 'milk2.png', '2021-08-16 02:15:44', '2021-08-18 21:23:53'),
(3, 'Indomie Ayam Bawang', 'indomie-ayam-bawang', 'Indofood', '3000,-', 'mie.png', '2021-08-16 03:48:25', '2021-08-18 21:17:23'),
(102, 'Yakult', 'yakult', '-', '2000,-', 'Yakult.jpg', '2021-08-22 07:27:07', '2021-08-22 07:27:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
