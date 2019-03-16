-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2018 pada 08.57
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kode_guru` int(3) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jumlah_jam` int(2) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kode_guru`, `nama_guru`, `jumlah_jam`, `alamat`, `telp`, `email`) VALUES
(3, 'Prishe Annadjar', 8, 'Jl. Danau Tambingan no.19', '0822 3456 1234', 'prisheaa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `kode_mapel` char(3) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `alokasi_waktu` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `kode_guru` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`kode_mapel`, `mapel`, `alokasi_waktu`, `semester`, `kode_guru`) VALUES
('A10', 'Pemgrograman Web', 8, 2, NULL),
('E15', 'Sejarah Indonesia', 6, 2, 3),
('F88', 'Rekayasa Perangkat Lunak', 6, 2, NULL),
('Q13', 'Mikrotik', 4, 2, NULL),
('R17', 'Desain grafis', 4, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'user1', 'user1'),
(2, 'user2', 'user2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `kode_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD CONSTRAINT `matapelajaran_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `guru` (`kode_guru`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
