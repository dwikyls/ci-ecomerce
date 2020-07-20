-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2020 pada 14.49
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `ukuran` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id`, `nama`, `tipe`, `ukuran`) VALUES
(2, '37da0c544fa49d9790e47e34637d3740.jpg', '.jpg', 64.31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `status` enum('pending','sukses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`, `status`) VALUES
(27, 26, 10, 2, '20000', 'sukses');

--
-- Trigger `tbl_detail_order`
--
DELIMITER $$
CREATE TRIGGER `terserah` AFTER UPDATE ON `tbl_detail_order` FOR EACH ROW BEGIN
	UPDATE tbl_produk SET stok=stok-NEW.qty
    WHERE id =NEW.produk AND NEW.status = 'sukses';
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kasir`
--

CREATE TABLE `tbl_kasir` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(26, '2020-06-21', 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `email`, `alamat`) VALUES
(26, 'Dwiky Suhardianto', 'dwikyls@gmail.com', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `ukuran` enum('S','M','L') DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nama_produk`, `ukuran`, `harga`, `gambar`, `stok`) VALUES
(10, 'Kaos Putih Lengan Panjang', 'M', '20000', '1.jpg', 8),
(11, 'Kaos Putih', 'M', '10000', '2.jpg', 10),
(12, 'Kaos L Lawliet', 'M', '100000', '3.jpg', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `kode` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `id` varchar(5) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tb_penjualan`
--
DELIMITER $$
CREATE TRIGGER `sadsa` AFTER INSERT ON `tb_penjualan` FOR EACH ROW BEGIN
	UPDATE tbl_produk SET stok=stok+NEW.qty
    WHERE id =NEW.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','kasir','konsumen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Dwiky Suhardianto', 'admin', 'admin', 'admin'),
(2, 'konsumen', 'konsumen', 'konsumen', 'konsumen'),
(3, 'kasir', 'kasir', 'kasir', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kasir`
--
ALTER TABLE `tbl_kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_kasir`
--
ALTER TABLE `tbl_kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
