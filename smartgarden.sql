-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2022 at 06:00 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartgarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `username`, `foto`, `email`, `password`) VALUES
(1, 'adibfar', '', 'adibfar@gmail.com', 'adibgemin'),
(3, 'askmldhk', '', 'adibfar@gmail.com', 'mzldsuhg'),
(4, 'atfg', 'Hitam-putih8.gif', 'bayu10661@gmail.com', 'aSDGTRFYUJ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datasensor`
--

CREATE TABLE `tb_datasensor` (
  `id` int(11) NOT NULL,
  `suhuc` varchar(250) NOT NULL,
  `suhuf` varchar(250) NOT NULL,
  `lembab` varchar(250) NOT NULL,
  `soil` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datasensor`
--

INSERT INTO `tb_datasensor` (`id`, `suhuc`, `suhuf`, `lembab`, `soil`, `created_at`) VALUES
(1, '5', '6', '7', '8', '2022-11-06 04:59:45'),
(2, '7', '8', '9', '11', '2022-11-06 04:59:45'),
(3, '5', '6', '7', '8', '2023-11-09 05:09:05'),
(4, '11', '5', '15', '7', '2023-11-02 05:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id` int(11) NOT NULL,
  `min_suhu` varchar(250) NOT NULL,
  `max_suhu` varchar(250) NOT NULL,
  `min_lembab` varchar(250) NOT NULL,
  `max_lembab` varchar(250) NOT NULL,
  `min_soil` varchar(250) NOT NULL,
  `max_soil` varchar(250) NOT NULL,
  `tgl_diterima` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_datasensor`
--
ALTER TABLE `tb_datasensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_datasensor`
--
ALTER TABLE `tb_datasensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
