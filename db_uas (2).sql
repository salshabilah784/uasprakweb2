-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2023 pada 13.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama_jenis`) VALUES
(1, 'Sepatu'),
(3, 'Tas'),
(4, 'Jaket'),
(5, 'Celana'),
(8, 'Baju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_tlp` bigint(50) DEFAULT NULL,
  `jumlah_beli` varchar(45) DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `alamat`, `no_tlp`, `jumlah_beli`, `produk_id`) VALUES
(2, 'salsha', 'perempuan', 'Depok', 89675646, '2', 8),
(3, 'siti fathya', 'perempuan', 'Margonda', 8827266535, '3', 2),
(4, 'm yafie', 'laki-laki', 'cibinong', 878567537, '15', 2),
(5, 'Meuthia N', 'perempuan', 'jambi', 89529615351, '3', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(45) DEFAULT NULL,
  `harga_jual` varchar(45) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `jenis_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga_jual`, `stok`, `kode`, `jenis_produk_id`) VALUES
(2, 'Sepatu Air Jordan', '3000000', 50, 'AJ001', 1),
(4, 'Celana Levis Fullblack', '200000', 50, 'LB3003', 5),
(5, 'Denim Jacket', '150000', 75, 'DJ4004', 4),
(8, 'T-Shirt Uniqlo G', '500000', 20, 'UG002', 8),
(9, 'Tas Hermes', '5000000', 25, 'TH5005', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pelanggan_produk1_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk1_idx` (`jenis_produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`jenis_produk_id`) REFERENCES `jenis_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
