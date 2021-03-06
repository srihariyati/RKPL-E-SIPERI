-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 01:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `no_dokter` varchar(10) NOT NULL,
  `nama_dokter` text NOT NULL,
  `bidang_spesialis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`no_dokter`, `nama_dokter`, `bidang_spesialis`) VALUES
('1001', 'drg. Ali Syech. S.Kg, Sp.PM.', 'Spesialis Penyakit Mulut'),
('2001', 'drg. Andi Angkasa. S.Kg, Sp.KG.', 'Spesialis Konservasi Mulut'),
('2002', 'drg. Sintha. S.Kg, Sp.KG.', 'Spesialis Konservasi Mulut'),
('3001', 'drg. Bambang. S.Kg, Sp.BM.', 'Spesialis Bedah Mulut'),
('3002', 'drg. Siska Nasution. S.Kg, Sp.BM.', 'Spesialis Bedah Mulut'),
('4001', 'drg. Sri Hariyati. S.Kg.', 'Dokter Gigi Umum'),
('4002', 'drg. Sausan Nabilah. S.Kg.', 'Dokter Gigi Umum'),
('403', 'drg. Ikram Muhaimin. S.Kg.', 'Dokter Gigi Umum'),
('5001', 'drg. Anita. S.Kg, Sp.RKG.', 'Spesialis Radiologi Kedokteran Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `no_pasien` varchar(10) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tgl_lhr_pasien` date NOT NULL,
  `almt_pasien` text NOT NULL,
  `nohp_pasien` text NOT NULL,
  `jk_pasien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`no_pasien`, `nama_pasien`, `tgl_lhr_pasien`, `almt_pasien`, `nohp_pasien`, `jk_pasien`) VALUES
('PS01', 'Anisa', '1998-02-02', 'Banda Aceh', '081122334455', 'Perempuan'),
('PS02', 'Luna', '1999-12-02', 'Jln. Teuku Nyak Arif No.411', '081122671811', 'Perempuan'),
('PS04', 'Sri Hariyati', '1999-11-11', 'Jalan Cot Dama- Iboih', '+6282274960237', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `data_spesialis`
--

CREATE TABLE `data_spesialis` (
  `spesialis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_spesialis`
--

INSERT INTO `data_spesialis` (`spesialis`) VALUES
('Dokter Gigi Umum'),
('Spesialis Bedah Mulut'),
('Spesialis Konservasi Mulut'),
('Spesialis Penyakit Mulut'),
('Spesialis Radiologi Kedokteran Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_perawat`
--

CREATE TABLE `login_perawat` (
  `no_pegawai` varchar(20) NOT NULL,
  `nama_perawat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_perawat`
--

INSERT INTO `login_perawat` (`no_pegawai`, `nama_perawat`, `password`) VALUES
('1918', 'Agustine', '12345'),
('a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `medik_pasien`
--

CREATE TABLE `medik_pasien` (
  `no_pasien` varchar(10) NOT NULL,
  `gol_darah` text NOT NULL,
  `tek_darah` text NOT NULL,
  `jantung` text NOT NULL,
  `diabetes` text NOT NULL,
  `hepatitis` text NOT NULL,
  `alergi_obat` text NOT NULL,
  `alergi_mkn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medik_pasien`
--

INSERT INTO `medik_pasien` (`no_pasien`, `gol_darah`, `tek_darah`, `jantung`, `diabetes`, `hepatitis`, `alergi_obat`, `alergi_mkn`) VALUES
('PS02', 'A', '90/100', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya'),
('PS04', 'B', '90/100', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan_pasien`
--

CREATE TABLE `tindakan_pasien` (
  `id_tindakan` int(255) NOT NULL,
  `no_pasien` varchar(10) NOT NULL,
  `tgl_tindakan` date NOT NULL,
  `nama_spesialis` text NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan_pasien`
--

INSERT INTO `tindakan_pasien` (`id_tindakan`, `no_pasien`, `tgl_tindakan`, `nama_spesialis`, `nama_dokter`, `tindakan`) VALUES
(1, 'PS02', '2021-11-19', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan Kesehatan Gigi'),
(3, 'PS02', '2021-11-03', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan Kesehatan Gigi'),
(9, 'PS02', '2021-12-21', 'Dokter Gigi Umum', 'drg. Sausan Nabilah. S.Kg.', 'Scalling'),
(14, 'PS02', '2021-12-10', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan'),
(15, 'PS02', '2021-12-10', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan'),
(16, 'PS02', '2021-12-10', 'Dokter Gigi Umum', 'drg. Ali Syech. S.Kg, Sp.PM.', 'Pemeriksaan'),
(17, 'PS02', '2021-12-10', 'Dokter Gigi Umum', 'drg. Ali Syech. S.Kg, Sp.PM.', 'Pemeriksaan'),
(18, 'PS02', '2021-12-23', 'Spesialis Konservasi Mulut', 'drg. Siska Nasution. S.Kg, Sp.BM.', 'tes'),
(19, 'PS04', '2021-12-22', 'Dokter Gigi Umum', 'drg. Ikram Muhaimin. S.Kg.', 'tes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`no_dokter`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `login_perawat`
--
ALTER TABLE `login_perawat`
  ADD UNIQUE KEY `no_pegawai` (`no_pegawai`);

--
-- Indexes for table `tindakan_pasien`
--
ALTER TABLE `tindakan_pasien`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tindakan_pasien`
--
ALTER TABLE `tindakan_pasien`
  MODIFY `id_tindakan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
