-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 08:07 PM
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
-- Database: `pw_tubes_203040153`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `picture`, `name`, `brand`, `description`, `price`, `category`) VALUES
(1, 'Foto1.png', 'Lemon Facial Wash active', 'Get it Glow', 'Smoothing Facial Wash', 'Rp. 148.000', 'Facial Wash'),
(2, 'foto2.png', 'Get Gold Facial Wash limited edition', 'Get it Glow', 'Smoothing Glowing Facial Wash', 'Rp. 245.000', 'Facial Wash'),
(3, 'foto3.png', 'Bestfriend Edition Package', 'Get it Glow', 'Sunscreen Triple UV Protective, Moisturizer cream', 'Rp. 299.000', 'Sunscreen, Moisturizer'),
(4, 'foto4.png', 'Charcoal Active Package', 'Get it Glow', 'Facial Wash and Balm Cleanser', 'Rp. 299.000', 'Facial wash, Cleansing'),
(5, 'foto5.png', 'Snail Truecica Package', 'Get it Glow', 'Foaming facial wash and Cream', 'Rp. 398.000', 'Facial wash, Cream'),
(6, 'foto6.png', 'Body Scrub Snail Solution', 'Get it Glow', 'Whitening Body Scrub', 'Rp. 245.000', 'Body Scrub'),
(7, 'foto7.png', 'Matcha Toner Gentle Skin', 'Get it Glow', 'Toner for gentle skin', 'Rp. 98.000', 'Toner'),
(8, 'foto8.png', 'Peach pluffy Liquid Soap', 'Get it Glow', 'Face & Body Soap', 'Rp. 89.000', 'Body Care'),
(9, 'foto9.png', 'Matcha Soft Bubble Soap', 'Get it Glow', 'Face & Body Soap', 'Rp. 89.000', 'Body Care'),
(10, 'foto10.png', 'Body Scrub Matcha slash', 'Get it Glow', 'Body Scrub', 'Rp. 245.000', 'Body Care'),
(11, 'foto11.png', 'Balm Cleansing and Cream', 'Get it Glow', 'Balm Cleansing Make Up', 'Rp. 199.000', 'Cleansing'),
(12, 'foto12.png', 'Body and Hair Package', 'Get it Glow', 'Body and Hair Care', 'Rp. 399.000', 'Body Care'),
(13, 'foto13.png', 'Safron face mist', 'Get it Glow', 'Moisture calming face mist', 'Rp. 98.000', 'Toner, Moisturizer'),
(15, 'foto14.png', 'Aqua Face Mist', 'Get it Glow', 'Moisture calming face mist aqua fresh', 'Rp. 86.000', 'Face cleaning water');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
