-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 11:15 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
  `Link` varchar(2048) NOT NULL,
  `Screenshot` varchar(2048) default "",
  `up` mediumint(9) default "0",
  `down` mediumint(9) default "0",
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `Nick`, `Board`, `Link`, `Screenshot`, `up`, `down`) VALUES
(1, 'Xylitol', 'Zenk', 'http://www.zenk.com', 'images/screenshots/1337.png', 0, 0),
(2, 'Xartrick', 'Zenk', 'http://www.zenk.com', 'images/screenshots/gkhXp.png', 0, 0),
(3, 'Tishrom', 'RandomBoard', 'http://www.RandomBoard.com', 'images/screenshots/gkhXp.png', 0, 0),
(4, 'Hydraze', 'Zenk', 'http://www.zenk.com', 'images/screenshots/gkhXp.png', 0, 0),
(5, 'Cabusar', 'RandomBoard', 'http://www.RandomBoard.com', 'images/screenshots/gkhXp.png', 0, 0),
(6, 'dummys', 'RandomBoard', 'http://www.RandomBoard.com', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
