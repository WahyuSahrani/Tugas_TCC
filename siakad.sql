-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 10 Jul 2018 pada 03.20
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'ed073a671e631d0f2417945c0d645754ae1a2c8a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(25) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `username`, `password`) VALUES
('175610008', 'Jamalludin, S.Kom', 'datujamal', '$2y$10$SIJrGuQMinoMaGk1hjfWMOpeWiT4g1T9lgDxGqIPqahJ.lYTp3yPS'),
('175610018', 'Endang Wahyunigsih. S.Kom., M.Cs', 'endang', '$2y$10$pbIGD3iRvsVLMwBuCvJJLemseSUDNAocSfcwwWyvkdLQ..xYUvBmi'),
('175610101', 'Siska Dewi Lestari, S.Si., M.C', 'siska', '$2y$10$3gwNDAfc1fuDAlq4DTfMAeZL.d30NUBJwBQ60eygYXtadOA47fLrC'),
('175610121', 'Riana, M.Kom', 'riana', '$2y$10$rZ./rf554XOQNTsHHq5TrurzCV.zepINpyIHOzKtzhl8CgXc.OxNS'),
('175610123', 'Jamaludin S.Kom', '175610123', '$2y$10$OHiqK8d5zVlihVhjKdFVS.OUYIYA2yyO2a2R8r9h7PjEu3cOoioqK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL,
  `kd_mk` varchar(7) NOT NULL,
  `nim` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `tahun_ajaran`, `kd_mk`, `nim`) VALUES
(81, '2017/2018', 'SI1231', '155610102'),
(82, '2017/2018', 'SI1313', '155610102'),
(83, '2017/2018', 'SI1414', '155610102'),
(84, '2017/2018', 'SI1231', '155610042'),
(85, '2017/2018', 'SI1313', '155610042'),
(86, '2017/2018', 'SI1231', '175610008'),
(87, '2017/2018', 'SI1313', '175610008'),
(88, '2017/2018', 'SI1414', '175610008'),
(92, '2017/2018', 'SI1231', '574011304'),
(93, '2017/2018', 'SI1313', '574011304'),
(94, '2017/2018', 'SI1414', '574011304'),
(95, '2017/2018', 'SI1415', '175610008');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `tlahir` date NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `tlahir`, `alamat`, `username`, `password`) VALUES
('155610042', 'Yurinigtyas Istiqomah', 'P', '1997-05-08', 'jalan mana', '155610042', '$2y$10$ui2Pzy2DjV02Vcbk15mHh.LYs34Nr3DXrji0tqTrarimijv8RVrpi'),
('155610102', 'Jamaludin', 'L', '0199-05-12', 'jalan Lanjas', 'jamaludin', '$2y$10$gvdvD7sp1XgK2EwmQNXIyuGc9nO7t7TwF1x22YkoDA7K28ionmWqa'),
('175610008', 'Wahyu Sahrani', 'L', '1995-01-01', 'jalan janti', 'wahyu', '$2y$10$7OBkngeSkmdTBZ5UF4gyleKHWILDcOdGGK50m/ofzRuQNeBus8HwK'),
('175610009', 'Inggrit Siswati Putri', 'P', '1997-01-05', 'jalan kemasan banguntapan bantul', '175610009', '$2y$10$j/MzccHBpVu6GJhllRXqkO.mnbQc3wHIzpLBSHj9RmFuwzJaWFfoe'),
('574011304', 'Bondan', 'L', '1995-01-02', 'jln anggrek II', 'bondan', '$2y$10$DoGVIo8jc24tsjuYBjIGheARZ9AYDs1WL2hI3gs/Fb3FsIXtWZKYe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kd_mk` varchar(10) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kd_mk`, `nip`, `nama_mk`, `semester`, `sks`) VALUES
('SI1231', '175610008', 'PRAKTIKUM LOGIKA DAN ALGORITMA', 1, 1),
('SI1313', '175610018', 'ANALISA SISTEM INFORMASI', 1, 2),
('SI1414', '175610008', 'DESAIN BASIS DATA', 1, 1),
('SI1415', '175610008', 'PANCASILA', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nim` char(9) NOT NULL,
  `kd_mk` varchar(7) NOT NULL,
  `nilai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nim`, `kd_mk`, `nilai`) VALUES
(1, '155610102', 'SI1231', 'A'),
(3, '155610102', 'SI1313', 'B'),
(6, '155610042', 'SI1231', 'A'),
(10, '155610042', 'SI1313', 'A'),
(12, '175610008', 'SI1313', 'B'),
(13, '175610008', 'SI1414', 'A'),
(14, '175610008', 'SI1231', 'A'),
(18, '155610102', 'SI1414', 'A'),
(19, '574011304', 'SI1231', 'A'),
(22, '175610008', 'SI1415', 'A'),
(23, '574011304', 'SI1414', 'B'),
(32, '574011304', 'SI1313', 'E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
