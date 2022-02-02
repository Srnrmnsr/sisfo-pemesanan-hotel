-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2022 pada 08.59
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(11) NOT NULL,
  `id_penyewa` varchar(32) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jlh_kamar` int(11) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `id_penyewa`, `tgl_masuk`, `tgl_keluar`, `jlh_kamar`, `jenis_kamar`, `harga`, `total_harga`) VALUES
(8, 'Juanda', '2022-02-09', '2022-02-11', 2, '2', '', '1500000'),
(10, 'Melati', '2022-02-10', '2022-02-11', 1, '4', '', '2000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyewa`
--

CREATE TABLE `tbl_penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyewa`
--

INSERT INTO `tbl_penyewa` (`id_penyewa`, `nama_penyewa`, `alamat`, `jenkel`, `no_ktp`, `notelp`) VALUES
(2, 'Melati', 'Suka Makmur', 'Wanita', '1207625415719276', '081972646138'),
(3, 'Budi', 'Aceh', 'Pria', '10236787345423', '082189764523'),
(4, 'Juanda', 'Toba', 'Pria', '192863572615', '082176359137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tipe_kamar`
--

CREATE TABLE `tbl_tipe_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(15) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tipe_kamar`
--

INSERT INTO `tbl_tipe_kamar` (`id_kamar`, `tipe_kamar`, `harga`) VALUES
(1, 'Ekonomi', '500000'),
(2, 'Reguler', '750000'),
(3, 'Suite', '1250000'),
(4, 'VIP', '2000000'),
(5, 'VVIP', '3000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Front Office'),
('manajer', '69b731ea8f289cf16a192ce78a37b4f0', 'manajer@gmail.com', 'Cicio', 2, 'Manajer Hotel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `tbl_tipe_kamar`
--
ALTER TABLE `tbl_tipe_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_tipe_kamar`
--
ALTER TABLE `tbl_tipe_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
