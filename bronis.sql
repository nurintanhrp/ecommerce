-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 02:14 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bronis`
--

-- --------------------------------------------------------

--
-- Table structure for table `rasa`
--

CREATE TABLE `rasa` (
  `kode` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasa`
--

INSERT INTO `rasa` (`kode`, `nama`, `deskripsi`, `harga`, `foto`) VALUES
(2, 'Rasa Cokelat', 'Brownies dengan varian rasa cokelat yang melumer di mulut', 350000, 'r-coklat.jpg'),
(3, 'Rasa Capuchino', 'Brownies dengan varian rasa capuchino yang cocok di mulut kamu', 350000, 'r-capuchino.jpg'),
(4, 'Rasa Tiramisu', 'Brownies dengan varian rasa tiramisu yang manis kayak kamu', 350000, 'r-tiramisu.jpg'),
(5, 'Rasa Greentea', 'Brownies dengan varian rasa greentea yang creamy creamy asik', 350000, 'r-greentea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topping`
--

CREATE TABLE `topping` (
  `kode` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topping`
--

INSERT INTO `topping` (`kode`, `nama`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'Topping Cokelat dan Chocochip', 'Paduan topping yang coklat bangeet, antara cokelat asli dan chococip yang renyah', 5000, 't-coklat-chocochip.jpg'),
(2, 'Topping Oreo', 'Brownies dengan topping oreo asli, pasti kamu suka!', 5000, 't-oreo.jpg'),
(3, 'Topping Coklat - Whiteball - Oreo', 'Brownies dengan tiga topping -harga sama, wow!', 5000, 't-coklat-whiteball-oreo.jpg'),
(4, 'Topping Cokelat-Milo', 'Rasakan sensasi pencampuran kedua rasa topping ini!', 5000, 't-milo-coklat.jpg'),
(5, 'Topping Keju-Milo', 'Pernah ngerasai keju dicampur milo? Sini coba yuks!', 5000, 't-milo-keju.jpg'),
(6, 'Topping Keju-Coklat-Chocochip', 'Topping paling komplit! Ada keju, ada coklat, ada chocochip juga dong!', 5000, 't-coklat-keju-chocochip.jpg'),
(7, 'Topping Keju-Coklat-Riceball', 'Tiga topping berbeda disatukan? Cek rasanya dong disini!', 5000, 't-coklat-keju-riceball.jpg'),
(8, 'Topping Keju-Coklat', 'Dua topping paling best seller, buat ngiler!', 5000, 't-keju-coklat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rasa`
--
ALTER TABLE `rasa`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rasa`
--
ALTER TABLE `rasa`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `topping`
--
ALTER TABLE `topping`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
