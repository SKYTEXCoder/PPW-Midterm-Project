-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 08:36 AM
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
-- Database: `shopeasily`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` smallint(50) NOT NULL,
  `namaPenjual` varchar(500) NOT NULL,
  `namaProduk` varchar(500) NOT NULL,
  `descProduk` varchar(500) NOT NULL,
  `hargaProduk` varchar(500) NOT NULL,
  `fotoProduk` varchar(500) NOT NULL,
  `quantity` smallint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaPenjual`, `namaProduk`, `descProduk`, `hargaProduk`, `fotoProduk`, `quantity`) VALUES
(4, '', 'Airpods', 'Bagus', '172000', 'Produk_4.jpg', 5),
(5, '', 'TWS', 'gg', '172000', 'Produk_5.jpg', 3),
(6, '', 'Kursi Gaming', 'enak', '172000', 'Produk_6.jpg', 2),
(7, '', 'Razer', 'hitam', '172000', 'Produk_7.jpg', 2),
(8, '', 'dildo', 'gege', '105000', 'Produk_8.png', 24),
(9, '', 'Darrel marah', 'darel lagi marah', '10000000', 'Produk_9.png', 1),
(10, '', 'andra cewe', 'versi gemoy', '200000', 'Produk_10.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` smallint(50) NOT NULL,
  `idRole` smallint(50) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phoneNumber` int(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `idRole`, `username`, `email`, `phoneNumber`, `password`) VALUES
(1, 1, 'danar', 'danar@gmail.com', 2147483647, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
