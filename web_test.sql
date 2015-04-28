-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2015 at 12:36 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tourism`
--

CREATE TABLE IF NOT EXISTS `data_tourism` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(20) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `deskripsi` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_tourism`
--

INSERT INTO `data_tourism` (`id`, `id_kategori`, `nama_tempat`, `alamat`, `contact`, `deskripsi`, `lat`, `lon`, `gambar`) VALUES
(1, 1, 'UPI YPTK PADANG', 'Jl.Raya Lubuk Begalung', '075199876', 'Universitas ini didirikan oleh H. Herman Nawas beserta istri dia Dr Hj Zerni Melmusni, MM Ak melalui yayasannya yaitu Yayasan Pendidikan Tinggi Komputer Padang "YPTK Padang" pada tahun 1985. Pada awal berdirinya,universitas ini masih berbentuk sekolah tinggi yang terdiri dari STMIK, AMIK, STIE dan AAMPK. Saat ini Universitas ini telah memiliki tujuh Fakultas dan dua Program Pasca Sarjana.', '-0.958419', '100.397509', 'upi.jpg'),
(2, 1, 'stkip padang', 'Jl. Gajah Mada\r\nPadang\r\nKota Padang, Sumatera Bar.', '(0751) 7053731', 'perguruan tinggi keguruan', '-0.909547', '100.367660', 'stkip.jpg'),
(3, 2, 'hotel axana', 'Jl. Bundo Kandung No. 14-16\r\nSumatera Bar. 25119', '(0751) 39888', 'hotel termewah di kota padang', '-0.954358', '100.359162', 'hotelaxana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `category` varchar(50) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`category`, `id_kategori`) VALUES
('perguruan tinggi', '1'),
('hotel', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(48) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
