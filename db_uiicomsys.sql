-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2017 pada 12.27
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uiicomsys`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akademik_mhs`
--

CREATE TABLE `data_akademik_mhs` (
  `ipk` float NOT NULL,
  `sks` int(11) NOT NULL,
  `kkn` tinyint(1) NOT NULL,
  `ta` tinyint(1) NOT NULL,
  `kp` tinyint(1) NOT NULL,
  `pesantrenisasi` tinyint(1) NOT NULL,
  `lkid` tinyint(1) NOT NULL,
  `btaq` tinyint(1) NOT NULL,
  `ondi` tinyint(1) NOT NULL,
  `id_nim` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_akademik_mhs`
--

INSERT INTO `data_akademik_mhs` (`ipk`, `sks`, `kkn`, `ta`, `kp`, `pesantrenisasi`, `lkid`, `btaq`, `ondi`, `id_nim`) VALUES
(3.45, 40, 0, 0, 1, 1, 1, 1, 1, 16523124),
(4, 20, 0, 1, 0, 0, 0, 0, 0, 16523212);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dpa`
--

CREATE TABLE `dpa` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nik` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dpa`
--

INSERT INTO `dpa` (`username`, `password`, `nik`, `nama`, `jurusan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`) VALUES
('dpa', 'dpa', 12345, 'dpa', 'Teknik Informatika', 'Laki-Laki', 'Yogyakarta', '2017-11-10', 'komplek BPK', 2147483647, 'a@gmail.com'),
('lala', 'lala', 123456, 'lalalaaa', 'Teknik Industri', 'Perempuan', 'Yogyakarta', '1998-12-06', 'komplek BPK', 2147483647, 'amaliacitrak10@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nik` int(9) NOT NULL,
  `nim` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `noHP_ayah` int(13) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `noHP_ibu` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nik`, `nim`, `nama`, `jurusan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`, `nama_ayah`, `alamat_ayah`, `noHP_ayah`, `nama_ibu`, `alamat_ibu`, `noHP_ibu`) VALUES
(12345, 16523123, 'Amalia Citra', 'Teknik Informatika', 'Perempuan', 'Yogyakarta', '0000-00-00', 'Komp. BPK', 2147483647, 'amaliacitrak10@gmail.com', 'Tri Heri M', 'Komp. BPK', 123456, 'Surani', 'Komp BPK', 1234567),
(5678, 16523212, 'Dimas', 'T.Informatika', 'Laki - Laki', 'Bengkulu', '2017-12-12', 'qwer', 808, 'D@gmail.com', 'asd', 'qwe', 909, 'zxc', 'qwe', 9090);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dpa`
--
ALTER TABLE `dpa`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nim` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
