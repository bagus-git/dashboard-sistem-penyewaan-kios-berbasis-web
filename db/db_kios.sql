-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2021 pada 20.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kios`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `nip` varchar(18) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `level` enum('admin','kepalaupt','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`nip`, `username`, `email`, `password`, `photo`, `level`) VALUES
('876541234534214567', 'admin', 'admin@gmail.com', '$2y$10$jYWk7lUH.Ub6URrwNeC.i.zIJHLvVhk0DbbdLGG8QZZp54uDk3caS', 'default.svg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kepala_upt`
--

CREATE TABLE `tb_kepala_upt` (
  `nip` varchar(18) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kepala_upt`
--

INSERT INTO `tb_kepala_upt` (`nip`, `username`, `email`, `password`, `photo`) VALUES
('Suleman', 'kepalaupt', 'kepalaupt@gmail.com', '$2y$10$L9GeXMPXXAurNLW2/nrnE.qquHgBFxW37DhOEtdqEdn2NxTgoeBsa', 'default.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kios`
--

CREATE TABLE `tb_kios` (
  `kd_lahan` int(11) NOT NULL,
  `jenis_lahan` varchar(225) NOT NULL,
  `luas` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kios`
--

INSERT INTO `tb_kios` (`kd_lahan`, `jenis_lahan`, `luas`, `harga`) VALUES
(1, 'Kios', '2', 6000000),
(2, 'Kios', '4', 8000000),
(3, 'Kios', '6', 10000000),
(4, 'Kios', '7', 12000000),
(5, 'Kios', '9', 14000000),
(6, 'Kios', '11', 16000000),
(7, 'Kios', '14', 19000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyewa`
--

CREATE TABLE `tb_penyewa` (
  `kd_penyewa` varchar(10) NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `luas` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `lama_sewa` varchar(255) NOT NULL,
  `jenis_dagangan` varchar(255) NOT NULL,
  `waktu_sewa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyewa`
--

INSERT INTO `tb_penyewa` (`kd_penyewa`, `nama_penyewa`, `jenis_kelamin`, `alamat`, `telp`, `no_ktp`, `luas`, `harga`, `lama_sewa`, `jenis_dagangan`, `waktu_sewa`) VALUES
('KDP0000001', 'SITI RAHAYU', 'perempuan', 'SAYIDAN GM2/117, 014/005 PRAWIRODIRJAN GONDOMANAN YOGYAKARTA', '085269091695', ' 347110430245000', 4, '8000000', '3', 'CRAKEN', '26-Sep-2012'),
('KDP0000002', 'RIANA DWI YANUARTI', 'perempuan', 'SAYIDAN GM2.117 014.005 PRAWIRODIRJAN GONDOMANAN YOGYAKARTA', '085269091688', '3471105501700000', 6, '10000000', '2', 'KERAJINAN', '22-Jan-2016'),
('KDP0000003', 'INA WAHYUNI', 'perempuan', 'SIDOHARJO RT 007 RW - IMOGIRI BANTUL', '085369098765', '3402105305750000', 4, '8000000', '2', 'KERAJINAN', '06-Jan-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kd_transaksi` varchar(10) NOT NULL,
  `kd_penyewa` varchar(10) NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL,
  `luas` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `lama_sewa` varchar(255) NOT NULL,
  `total_tagihan_sewa` varchar(255) NOT NULL,
  `kekurangan` varchar(255) NOT NULL,
  `jumlah_bayar` varchar(255) NOT NULL,
  `tagihan` varchar(255) NOT NULL,
  `waktu_transaksi` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kd_transaksi`, `kd_penyewa`, `nama_penyewa`, `luas`, `harga`, `lama_sewa`, `total_tagihan_sewa`, `kekurangan`, `jumlah_bayar`, `tagihan`, `waktu_transaksi`, `status`) VALUES
('KTR0000001', 'KDP0000001', 'SITI RAHAYU', '4', 8000000, '3', '24000000', '24000000', ' 8000000', '16000000', '26-Sep-2012', 'Belum Lunas'),
('KTR0000002', 'KDP0000001', 'SITI RAHAYU', '4', 8000000, ' 3', '24000000', '16000000', ' 8000000', '8000000', '26-Oct-2012', 'Belum Lunas'),
('KTR0000003', 'KDP0000001', 'SITI RAHAYU', '4', 8000000, '  3', '24000000', '8000000', ' 8000000', '0', '26-Nov-2012', 'Lunas'),
('KTR0000004', 'KDP0000002', 'RIANA DWI YANUARTI', '6', 10000000, '2', '20000000', '20000000', ' 10000000', '10000000', '22-Jan-2016', 'Belum Lunas'),
('KTR0000005', 'KDP0000002', 'RIANA DWI YANUARTI', '6', 10000000, ' 2', '20000000', '10000000', ' 5000000', '5000000', '20-Feb-2016', 'Belum Lunas'),
('KTR0000006', 'KDP0000002', 'RIANA DWI YANUARTI', '6', 10000000, '  2', '20000000', '5000000', ' 5000000', '0', '22-Mar-2016', 'Lunas'),
('KTR0000007', 'KDP0000003', 'INA WAHYUNI', '4', 8000000, '2', '16000000', '16000000', ' 6000000', '10000000', '06-Jan-2021', 'Belum Lunas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kepala_upt`
--
ALTER TABLE `tb_kepala_upt`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_kios`
--
ALTER TABLE `tb_kios`
  ADD PRIMARY KEY (`kd_lahan`);

--
-- Indeks untuk tabel `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  ADD PRIMARY KEY (`kd_penyewa`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `kd_penyewa` (`kd_penyewa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kios`
--
ALTER TABLE `tb_kios`
  MODIFY `kd_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`kd_penyewa`) REFERENCES `tb_penyewa` (`kd_penyewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
