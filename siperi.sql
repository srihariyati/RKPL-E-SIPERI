-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 03:06 PM
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
('PS02', 'Luna', '2000-04-20', 'Aceh', '081213141516', 'Perempuan');

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
('a', 'a', 'aaaaaaaa');

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
('PS02', 'A', '90/100', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan_pasien`
--

CREATE TABLE `tindakan_pasien` (
  `no_pasien` varchar(10) NOT NULL,
  `tgl_tindakan` date NOT NULL,
  `nama_spesialis` text NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan_pasien`
--

INSERT INTO `tindakan_pasien` (`no_pasien`, `tgl_tindakan`, `nama_spesialis`, `nama_dokter`, `tindakan`) VALUES
('PS02', '2021-11-22', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan Kesehatan Gigi'),
('PS02', '2021-11-22', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan Kesehatan Gigi'),
('PS02', '2021-11-22', 'Dokter Gigi Umum', 'drg. Sri Hariyati. S.Kg.', 'Pemeriksaan Kesehatan Gigi');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
