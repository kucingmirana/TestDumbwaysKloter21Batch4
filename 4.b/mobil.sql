-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 03:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(101, 'toyota'),
(102, 'honda'),
(103, 'daihatsu'),
(187, 'nissan'),
(213, 'Jeep'),
(322, 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand_id`, `image`, `color`, `description`, `create_time`, `update_time`, `stock`) VALUES
(6, 'brio', 102, 'brio.jpg', 'red', 'kecil', '2021-02-10 21:37:00', '2021-02-20 20:38:00', 1),
(7, 'alphard', 101, 'alphard.jpg', 'white', 'besar', '2021-02-09 21:04:00', '2021-02-20 21:04:00', 3),
(8, 'Sirion', 103, 'sirion.jpg', 'blue', 'kecil', '2021-02-19 21:11:00', '2021-02-20 21:11:00', 2),
(9, 'jazz', 102, 'jazz.jpg', 'merah', 'besar', '2021-02-18 05:14:22', '2021-02-16 08:20:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`) VALUES
(1, 'alex', 'alexandrowullur@gmail.com', 'pamulang'),
(2, 'Alexandro Ricardo Wullur', 'Isaabdillahnew@gmail.com', 'palang merah'),
(8, 'Isa Abdillah', 'Isaabdillahnew@gmail.com', 'kota tua'),
(9, 'harun', 'Harunardiansyah33@yahoo.com', 'tenjo'),
(10, 'kirana', 'kirana@gmail.com', 'permai indah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
