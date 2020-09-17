-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2019 at 04:47 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040109`
--

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE `smartphone` (
  `foto` char(20) NOT NULL,
  `nama` char(42) NOT NULL,
  `tahun` year(4) NOT NULL,
  `ukuran` char(32) NOT NULL,
  `memori` char(16) NOT NULL,
  `kamera` char(16) NOT NULL,
  `harga` char(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartphone`
--

INSERT INTO `smartphone` (`foto`, `nama`, `tahun`, `ukuran`, `memori`, `kamera`, `harga`) VALUES
('s10.jpg', 'Samsung Galaxy S10', 2019, '6.1 inch', '8/128 GB', '10/2 MP', 'Rp. 12.399.000'),
('r17.jpg', 'Redmi Note 7', 2019, '6.3 inch', '4/64 GB', '13/5 MP', 'Rp. 3.245.000'),
('oppo17.jpg', 'Oppo R17 Pro', 2018, '6.4 inch', '8/128 GB', '25/20 MP', 'Rp. 8.999.000'),
('nokia5.jpg', 'Nokia 5.1 Plus', 2019, '5.8 inch', '4/64 GB', '8/5 MP', 'Rp. 2.59.000'),
('v15.jpg', 'Vivo V15', 2019, '6.53 inch', '6/64 GB', '8/12 MP', 'Rp. 3.969.000'),
('maxpro.jpg', 'ASUS Zenfone MaxPro M2', 2018, '6.26 inch', '4/64 GB', '13/5 MP', 'Rp. 3.070.000'),
('a7.jpg', 'Oppo A7', 2018, '6.2 inch', '4/32 GB', '16/2 MP', 'Rp. 2.575.000'),
('note9.jpg', 'Samsung Galaxy Note 9', 2018, '6.4 inch', '6/128 GB', '8/12 MP', 'Rp. 10.590.000'),
('p20.jpg', 'Huawei P20 Pro', 2017, '6.1 inch', '6/128 GB', '24/40 MP', 'Rp. 9.350.000'),
('pure.jpg', 'Nokia 9 PureView', 2019, '5.99 inch', '6/128 GB', '20/12 MP', 'Rp. 12.200.000'),
('rog.jpg', 'ASUS ROG Phone', 2018, '6 inch', '8/128 GB', '8/12 MP', 'Rp. 12.840.000'),
('m20.jpg', 'Samsung Galaxy M20', 2019, '6.3 inch', '3/32 GB', '8/5 MP', 'Rp. 2.629.000'),
('y7.jpg', 'Huawei Y7 Pro', 2019, '6.26 inch', '3/32 GB', '8/2 MP', 'Rp. 2.089.000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
