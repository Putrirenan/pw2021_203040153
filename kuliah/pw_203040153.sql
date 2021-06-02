-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040153`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nrp` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Renandra Rahadian Putri', 203040153, 'putrirenan@gmail.com', 'Teknik Informatika', 'foto1.png'),
(2, 'Dian Nurcahya Ningrum', 203040124, 'diannur@gmail.com', 'Teknik Informatika', 'foto2.png'),
(3, 'Heryani', 203040169, 'heryani@gmail.com', 'Teknik Informatika', 'foto3.png'),
(4, 'Dita Febrianty', 203040145, 'ditafeb@gmail.com', 'Teknik Informatika', 'foto4.png'),
(19, 'unpas', 203040000, 'unpas', 'unpas', '60a22ac83d2ee.png'),
(20, 'bukku', 203040000, 'bukuuku', 'bukukuu', '60a22aee19235.jpg'),
(22, 'kakak', 203040000, 'unpas', 'Teknik Informatika', '60a544009ec6c.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'saya', '$2y$10$XW2WG9mGaHmQhLYCWuI01.qDjZ763ZTjLnQpOPte3zIZxaR61QH0S'),
(4, 'admin', '$2y$10$Abw0.n64zQFz.qIz4GhlGuOAg4swZnYpCEdDVTTm.ufsvshASvKua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
