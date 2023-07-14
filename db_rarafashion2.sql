-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 01.21
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
-- Database: `db_rarafashion2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Syifa Rahmatia', 'admin', 'f7e0b956540676a129760a3eae309294', '083892780131', 'syifarr2333@gmail.com', 'Perum DDN Blok F2 No.8 Sukahati Cibinong, Bogor.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_produk`
--

CREATE TABLE `tb_kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori_produk`
--

INSERT INTO `tb_kategori_produk` (`id`, `nama`) VALUES
(5, 'Sepatu'),
(6, 'Make Up'),
(7, 'Parfum'),
(8, 'Tas '),
(10, 'Jam Tangan'),
(13, 'Gaun'),
(22, 'mejikom ibu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-03-03', 'Digar Ananda ', 'Perum CCO Blok E5 No.11 Sukakamu, Jakarta', '088546723444', 'digarananda11@gmail.com', 2, 'Digar Ananda memesan jam tangan chanel berwarna hitam dan 1 sepatu chanel berwarna hitam. ', 17),
(2, '2023-06-18', 'Arsyla Wang', 'Perum DDN Blok F2 No.9 Cibinong, Bogor', '083892780131', 'sylawang@gmail.com', 5, 'Arsyla Wang memesan tas chanel berwarna ungu dan beberapa gaun brukat berwana putih. ', 15),
(3, '2023-02-13', 'Karina Jim', 'Perum BGA Blok D5 No.11 Sukacita, Depok', '088546723131', 'digarananda11@gmail.com', 4, 'Karina Jim memesan 2 laptop berwarna ungu dan 2 gaun brukat berwana putih. ', 20),
(4, '2023-10-09', 'Alby Galendra', 'Perum BOGA Blok F5 No.11 Sukahati, Bogor', '088546723155', 'galendraalby00@gmail.com', 2, 'Alby Galendra memesan sepatu chanel berwarna hitam dan 1 jam tangan chanel berwarna putih', 16),
(5, '2023-01-12', 'Jeno Lee', 'Daegu, Korea Selatan', '028546723221', 'leejeno23@gmail.com', 5, 'Jeno Lee memesan 3 sepatu chanel berwarna hitam dan 2 jam tangan chanel berwarna hitam', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_produk_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(5, 'TYX23', 'Sepatu', 15000000, 14500000, 60, 15, 'Cantik & Simple', 151003),
(6, 'TYX34', 'Make Up', 9000000, 8500000, 60, 10, 'Aman untuk kulit sensitif ', 200507),
(7, 'TYX33', 'Parfum', 20000000, 18500000, 100, 30, 'Non Alcohol', 170409),
(8, 'TYX43', 'Tas', 10000000, 9000000, 120, 30, 'Modis & Trendy', 170320),
(9, 'TYX44', 'Jam Tangan', 7000000, 6500000, 115, 35, 'Simple & Modis', 231003),
(10, 'TYX53', 'Gaun ', 8000000, 7500000, 200, 50, 'Mewah & Elegan ', 240187);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
