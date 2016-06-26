-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2016 at 11:38 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `id_tabs` int(11) NOT NULL,
  `nomer` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_data`),
  KEY `id_tabs` (`id_tabs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7020 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `id_tabs`, `nomer`, `content`) VALUES
(1000, 1, 1, 'Ini adalah data tabs 1'),
(2000, 1, 2, 'Ini adalah data tabs 2'),
(3000, 2, 1, 'Ini adalah data tabs 3'),
(4000, 2, 2, 'Ini adalah data tabs 4'),
(5000, 2, 3, 'Data tabs 5'),
(6000, 3, 1, 'Content Tabs 6'),
(7000, 3, 2, 'Conten tab 7'),
(7002, 2, 4, 'tes'),
(7019, 1, 3, 'Ini adalah content tab 3');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Tabs 1'),
(2, 'Tabs 2'),
(3, 'Tabs 3'),
(4, 'Tabs 4'),
(5, 'Tabs 5'),
(6, 'Tabs 6'),
(7, 'Tabs 7');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `id_data` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `sub_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sub`),
  KEY `id_data` (`id_data`),
  KEY `id_data_2` (`id_data`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id_sub`, `id_data`, `kategori`, `sub_kategori`) VALUES
(1, 1000, 'buah', 'anggur merah'),
(2, 2000, 'buah', 'rambutan jawa'),
(3, 1000, 'buah', 'anggur hijau'),
(4, 2000, 'buah', 'rambutan palembang');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_tabs`) REFERENCES `menu` (`id`);

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`id_data`) REFERENCES `data` (`id_data`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
