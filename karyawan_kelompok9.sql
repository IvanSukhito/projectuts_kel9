-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 06:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan_kelompok9`
--

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `nik` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_kerja` enum('Tetap','Tidak Tetap') NOT NULL,
  `position` varchar(10) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `responsibility` decimal(10,2) NOT NULL,
  `teamwork` decimal(10,2) NOT NULL,
  `management_time` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`nik`, `foto`, `nama`, `status_kerja`, `position`, `tgl_penilaian`, `responsibility`, `teamwork`, `management_time`, `total`, `grade`) VALUES
(212134, '456a3280ddf8d661a32bf3f89cd325cc.jpg', 'Gabriella', 'Tetap', 'pacar', '2023-10-21', '80.00', '80.00', '80.00', '80.00', 'A'),
(821382, '4e149b51d8a477ef3f2528af091df091.png', 'Gaby', 'Tetap', 'sayang', '2023-10-21', '80.00', '80.00', '80.00', '80.00', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=821383;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
