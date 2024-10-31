-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 03:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `ID_AUTHOR` int(11) NOT NULL,
  `NAMA_AUTHOR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`ID_AUTHOR`, `NAMA_AUTHOR`) VALUES
(5, 'wawak');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `ID_PESAN` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `MAIL` varchar(100) NOT NULL,
  `TOPIK` varchar(100) NOT NULL,
  `ISI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `ID_POST` int(11) NOT NULL,
  `KATEGORI` enum('technology','lifestyle') NOT NULL,
  `JUDUL` varchar(100) NOT NULL,
  `GAMBAR` varchar(255) DEFAULT NULL,
  `ISI` text NOT NULL,
  `ID_AUTHOR` int(11) DEFAULT NULL,
  `BIDANG` varchar(50) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `DILIHAT` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`ID_POST`, `KATEGORI`, `JUDUL`, `GAMBAR`, `ISI`, `ID_AUTHOR`, `BIDANG`, `TANGGAL`, `DILIHAT`) VALUES
(9, 'technology', 'ayam', '1730341179_akuntansi.jpg', 'asas', NULL, 'aaa', '2024-10-31', 0),
(10, 'technology', 'ayam', '1730341629_the last of us ai.jpg', 'asasasasasa', 5, 'aaa', '2024-10-31', 0),
(11, 'lifestyle', 'sadsdas', '1730341750_the last of us ai.jpg', 'asdadadaa', 5, 'dsaadsa', '2024-10-31', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`ID_AUTHOR`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`ID_PESAN`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`ID_POST`),
  ADD KEY `ID_AUTHOR` (`ID_AUTHOR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `ID_AUTHOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `ID_POST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`ID_AUTHOR`) REFERENCES `author` (`ID_AUTHOR`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
