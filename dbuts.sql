-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2019 pada 09.51
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `no_hp_lama` varchar(100) NOT NULL,
  `no_hp_baru` varchar(100) NOT NULL,
  `tgl_perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_mhs`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_perubahan`) VALUES
(1, '161240000765', '822256576', '2147483647', '2019-11-10 07:41:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama_mhs`, `nim`, `jns_kelamin`, `alamat`, `no_hp`, `jurusan`) VALUES
(1, 'aris darussalam', '161240000480', 'laki-laki', 'Batealit', 895674433, 'Teknik Industri'),
(2, 'samuel jayadi', '161240000765', 'laki-laki', 'bangsri', 2147483647, 'Teknik Informatika'),
(5, 'kunandar', '16123000514', 'laki-laki', 'jepara', 987654, 'Teknik Sipil'),
(6, 'ilayani', '16123000567', 'perempuan', 'kudus', 12345590, 'Teknik Industri');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `log_perubahan` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW insert into log
set nim=old.nim,
no_hp_lama =old.no_hp,
no_hp_baru=new.no_hp,
tgl_perubahan=now()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
