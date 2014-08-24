-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- Host: mysql
-- Generation Time: Mar 07, 2012 at 04:45 PM
-- Server version: 5.1.39
-- PHP Version: 5.3.6-11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rankmylame_rank`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE IF NOT EXISTS `datas` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `Nick` varchar(50) NOT NULL,
  `Board` varchar(80) NOT NULL,
  `Link` varchar(80) NOT NULL,
  `Rate` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `Nick`, `Board`, `Link`, `Rate`) VALUES
(1, 'Xylitapz', 'g4yz3nk', 'http://www.gayzenk.com', 10),
(2, 'Xartrick', 'hax0rxss3d', 'http://www.hax0rXSS3d.com', 10),
(3, 'Tishrom', 't1shphp', 'http://www.t1shphp.com', 10),
(4, 'xyl', 'xylireverseboy', 'http://www.xylireverseboy.fr', 10),
(5, 'Unknown', 'UnknownHacking', 'http://www.unknownhcking.com', 10),
(6, 'gayz0r', 'w1n32g4y', 'http://www.win32gay.com', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
