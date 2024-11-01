-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 04:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `idUser` smallint(50) NOT NULL,
  `idProduk` smallint(50) NOT NULL,
  `quantity` smallint(50) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` smallint(50) NOT NULL,
  `kategoriProduk` varchar(200) NOT NULL,
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

INSERT INTO `produk` (`idProduk`, `kategoriProduk`, `namaPenjual`, `namaProduk`, `descProduk`, `hargaProduk`, `fotoProduk`, `quantity`) VALUES
(1, 'Audio', 'dandyshop77', 'Apple Airpods Pro 2nd Generation', 'Bagus', '3400000', 'Produk_1.jpg', 5),
(4, 'Audio', 'dandyshop77', 'Razer Blackshark V2X Premium Gaming Headset', 'GAMING HEADSET TERBAGUSSSSSSSSSSSSSSSSSSSSS PLUS  PLUS', '700230', 'Produk_4.jpg', 200),
(5, 'Smartphone', 'daltakkthebestshop', 'HP Samsung', 'bagsdasdadssa', '700000', 'Produk_5.jpg', 223),
(6, '', 'daltakkthebestshop', 'Barang Bagus', 'bagus good', '900000', 'Produk_6.jpg', 57);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` smallint(50) NOT NULL,
  `idRole` smallint(50) NOT NULL,
  `namaToko` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `idRole`, `namaToko`, `username`, `email`, `phoneNumber`, `password`) VALUES
(1, 1, 'dandyshop77', 'Dandy Arya Akbar', 'dandyarya003@gmail.com', '085776698343', 'neointhematrix0O1'),
(2, 1, 'daltakkthebestshop', 'Dalta Kahfi Kustiawan', 'daltakk@gmail.com', '6285776698343', 'abonuts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idProduk` (`idProduk`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
