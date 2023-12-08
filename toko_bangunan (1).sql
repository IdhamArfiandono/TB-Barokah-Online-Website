-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 11.43
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_bangunan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Palu', 'Palu Merk Krisbow', 'Peralatan', 30000, 8, 'palu.jpg'),
(2, 'Obeng', 'Obeng Merk Krisbow', 'Peralatan', 40000, 5, 'obeng.jpg'),
(3, 'Sekop', 'Sekop Merk Krisbow', 'Peralatan', 55000, 15, 'sekop.jpg'),
(4, 'Gergaji', 'Gergaji Merk Krisbow', 'Peralatan', 100000, 9, 'gergaji.jpg'),
(5, 'Meteran', 'Meteran', 'Peralatan', 70000, 5, 'meteran1.jpg'),
(6, 'Bata Merah', 'Harga per meter', 'Bahan', 125000, 10000, 'bata.jpg'),
(8, 'Conblok', 'Harga per meter', 'Bahan', 300000, 50000, 'conblock.jpg'),
(9, 'Semen', 'Semen Tiga Roda', 'Bahan', 100000, 14, 'semen.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'kiki aldzikri', 'Jalan Madrasah II No.26, RT.4/RW.10, Duren Sawit, Duren Sawit, Jakarta timur', '2023-05-16 13:09:11', '2023-05-17 13:09:11'),
(2, 'wp3', 'jalan jalan', '2023-05-16 14:10:56', '2023-05-17 14:10:56'),
(3, '', '', '2023-05-16 14:56:52', '2023-05-17 14:56:52'),
(4, '', '', '2023-05-17 00:23:46', '2023-05-18 00:23:46'),
(5, '', '', '2023-05-17 00:29:06', '2023-05-18 00:29:06'),
(6, '', '', '2023-05-17 00:29:45', '2023-05-18 00:29:45'),
(7, '', '', '2023-05-17 00:34:25', '2023-05-18 00:34:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 4, 'Gergaji', 1, 100000, ''),
(2, 1, 2, 'Obeng', 1, 40000, ''),
(3, 2, 8, 'Conblok', 1, 300000, ''),
(4, 2, 6, 'Bata Merah', 1, 125000, ''),
(5, 2, 1, 'Palu', 1, 30000, ''),
(6, 2, 3, 'Sekop', 1, 55000, ''),
(7, 2, 4, 'Gergaji', 1, 100000, ''),
(8, 3, 3, 'Sekop', 1, 55000, ''),
(9, 3, 6, 'Bata Merah', 1, 125000, ''),
(10, 4, 1, 'Palu', 1, 30000, ''),
(11, 5, 4, 'Gergaji', 1, 100000, ''),
(12, 6, 1, 'Palu', 2, 30000, ''),
(13, 7, 9, 'Semen', 1, 100000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'hey', 'heyhey', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
