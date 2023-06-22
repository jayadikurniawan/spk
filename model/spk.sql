-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 11:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `listpekerjaan`
--

CREATE TABLE `listpekerjaan` (
  `posisi` varchar(30) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `gaji` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanggalPosting` date NOT NULL,
  `penerimaan` varchar(30) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listpekerjaan`
--

INSERT INTO `listpekerjaan` (`posisi`, `perusahaan`, `gaji`, `deskripsi`, `alamat`, `tanggalPosting`, `penerimaan`, `id`) VALUES
('bos', 'bca', '50000000', 'teller bank', 'jalan suhat', '2023-06-15', '', 1),
('supir', 'gojek', '1juta', 'adsf', 'jalan suhat', '2023-06-15', 'yes', 2),
('adasda', 'gojek', 'asdasdas', 'asddas', 'dasdasd', '2023-06-27', 'asdas', 4),
('supervisor', 'gojek', '1 juta', 'apapun', 'Jalan Watumujur II No. 12, Ket', '2023-05-29', 'gatau', 5),
('cs', 'gojek', '4 juta', 'ya gitu ah', 'watugong', '2023-06-26', 'gatau', 8),
('cleaning service', 'bca', '500ribu ', 'ya bersih2', 'di ub', '2023-06-15', 'gatau', 12),
('ghj', 'gojek', 'gfhj', 'ghj', 'ghj', '2023-06-16', '786', 678),
('hjghjhgk', 'gojek', 'hgj', 'ghj', 'ghj', '2023-06-17', '567567', 567567),
('dfg', 'gojek', 'dfg', 'dfg', 'fdg', '2023-06-09', '567567', 6576576);

-- --------------------------------------------------------

--
-- Table structure for table `listpelamar`
--

CREATE TABLE `listpelamar` (
  `pelamar` varchar(30) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `idpekerjaan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listpelamar`
--

INSERT INTO `listpelamar` (`pelamar`, `perusahaan`, `posisi`, `idpekerjaan`, `status`) VALUES
('JOKO', 'bca', 'bos', '1', 'DITOLAK'),
('azarya', 'bca', 'cleaning service', '12', 'DITOLAK'),
('joko', 'gojek', 'supir', '2', 'DITERIMA'),
('joko', 'gojek', 'adasda', '4', 'DITERIMA'),
('JOKO', 'gojek', 'supervisor', '5', 'DITOLAK'),
('JOKO', 'gojek', 'cs', '8', 'DITERIMA'),
('bhisma', 'bca', 'cleaning service', '12', 'DITERIMA'),
('bhisma', 'bca', 'bos', '1', 'DITERIMA'),
('azarya', 'bca', 'bos', '1', 'DITOLAK'),
('joko', 'gojek', 'supir', '2', 'DITERIMA'),
('joko', 'gojek', 'cs', '8', 'DITERIMA');

-- --------------------------------------------------------

--
-- Table structure for table `pemberikerja`
--

CREATE TABLE `pemberikerja` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemberikerja`
--

INSERT INTO `pemberikerja` (`username`, `password`, `email`, `telepon`, `nama`, `alamat`) VALUES
('gojek', '123', '', '', '', ''),
('bca', '123', '', '', '', ''),
('indomaret', '123', 'pwtesting07@gmail.com', '34890243', 'jayadi', 'dasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pencarikerja`
--

CREATE TABLE `pencarikerja` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `umur` int(5) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pencarikerja`
--

INSERT INTO `pencarikerja` (`username`, `password`, `email`, `telepon`, `nama`, `umur`, `alamat`, `tanggallahir`, `sex`) VALUES
('joko', '123', '', '', '', 0, '', NULL, ''),
('bhisma', '123', 'pwtesting07@gmail.com', '123123', 'adiyasa', 12, 'watugong', '2023-09-15', 'Laki-laki'),
('azarya', '123', 'azar@gmail', '12312', 'azar ya ', 2, 'suhat', '2023-06-29', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listpekerjaan`
--
ALTER TABLE `listpekerjaan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
