-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 08:20 PM
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
(1, 'Audio', 'John Doe', 'Apple Airpods Pro 2nd Generation', 'Bagus', '3400000', 'Produk_4.jpg', 5),
(2, 'Audio', 'Jane Doe', 'TWS Anker Soundcore P20i', 'bagus gays', '600450', 'Produk_5.jpg', 3),
(3, 'Peripherals', 'Danar Priyo Utomo', 'Kursi Gaming Autofull Coklat', 'enak', '1750230', 'Produk_6.jpg', 2),
(4, 'Audio', 'Danar Priyo Utomo', 'Headset Gaming Razer Blackshark V2X', 'hitam', '172000', 'Produk_7.jpg', 2),
(5, 'Smartphone', 'Dandy Arya Akbar', 'Apple iPhone 11 XR', 'gege', '9500200', 'Produk_8.jpg', 853),
(6, 'Smartphone', 'Dandy Arya Akbar', 'Apple iPhone XR', 'hp mahal', '6400000', 'Produk_9.jpg', 324),
(7, 'Smartphone', 'neointhematrix', 'OnePlus 10 Pro', 'hp eropa', '52004300', 'Produk_10.jpg', 320),
(8, 'Smartphone', 'potexshop', 'Xiaomi Poco X6 Pro', 'HP BAGUS', '3200000', 'Produk_11.jpg', 892),
(9, 'Smartphone', 'Dandy Arya Akbar', 'Samsung Galaxy A15', 'samsung bagusssssssssssssssssss', '4320500', 'Produk_13.jpg', 900);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` smallint(50) NOT NULL,
  `idRole` smallint(50) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `idRole`, `username`, `email`, `phoneNumber`, `password`) VALUES
(1, 1, 'Dandy Arya Akbar', 'dandyarya003@gmail.com', '085776698343', 'niggerupo0O1');

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
