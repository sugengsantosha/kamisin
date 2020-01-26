-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2020 at 03:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nim` int(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`, `foto`) VALUES
(4, 'Firman Hidayah', 18211160, '1998-04-23', 'Teknik Industri', 'Srandakan', 'ridwan@gmail.com', '081xxx', '0'),
(5, 'Miral Achmed', 18211167, '1995-04-04', 'Teknik Mesin', '', '', '', '0'),
(6, 'Ridwan Nugroho', 1782787, '1998-08-08', 'Teknik Informatika', '', '', '', '0'),
(7, 'Ryan Dwi Septiawan', 178787, '1988-06-06', 'Sistem Informatika', '', '', '', '0'),
(8, 'Andri', 1878686, '1997-05-05', 'Teknik Jaringan', '', '', '', '0'),
(10, 'Sugeng Santoso', 18211162, '1994-03-02', 'Teknik Industri', 'Srandakan Rt 06', 'sugengsantoso@gmail.', '0818xxx', '0'),
(11, 'Sugeng Santosha', 18211169, '1994-04-04', 'Sistem Informatika', 'Srandakan', 'sugengsantosha@gmail', '081xxx', '0'),
(12, 'Adakin', 12365412, '2019-12-04', 'Teknik Informatika', 'dfghdf', 'Adakah@gmail.com', '081xxx', ''),
(13, 'SUGENG SANTOSO', 12365412, '2019-12-23', 'Teknik Informatika', 'Srandakan Rt 06', 'dakusugeng@gmail.com', '081xxx', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
