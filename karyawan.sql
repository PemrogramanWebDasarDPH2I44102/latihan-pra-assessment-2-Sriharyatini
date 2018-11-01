-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 03:14 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `krywn`
--

CREATE TABLE `krywn` (
  `nama` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krywn`
--

INSERT INTO `krywn` (`nama`, `nip`) VALUES
('dania', '123456'),
('sri', '22222'),
('desi', '33456');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `tanggal_datang` varchar(30) NOT NULL,
  `sasaran` varchar(30) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `isi_paket` varchar(30) NOT NULL,
  `tanggal_ambil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`tanggal_datang`, `sasaran`, `penerima`, `isi_paket`, `tanggal_ambil`) VALUES
('2018-11-01', 'Dania Zalfa', 'Putri', 'Baju', '2018-11-02'),
('2018-11-28', 'Desi Manurung', 'Putri', 'Sepatu', '2018-11-30'),
('2018-11-28', 'Desi Manurung', 'Putri', 'Sepatu', '2018-11-30'),
('2018-11-01', 'Dania Zalfa', 'Putri', 'Baju', '2018-11-02'),
('2015-08-28', 'Dania Zalfa', 'Putri', 'Baju', '2016-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `nama` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `no_ktp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krywn`
--
ALTER TABLE `krywn`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
