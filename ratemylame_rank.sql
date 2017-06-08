-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 08:06 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ratemylame_rank`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE IF NOT EXISTS `datas` (
`id` mediumint(9) NOT NULL,
  `Nick` varchar(50) NOT NULL,
  `Board` varchar(80) NOT NULL,
  `Link` varchar(2048) NOT NULL,
  `Screenshot` varchar(2048) DEFAULT '',
  `up` mediumint(9) DEFAULT '0',
  `down` mediumint(9) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE IF NOT EXISTS `user_rating` (
`id` bigint(10) NOT NULL,
  `data_id` mediumint(9) NOT NULL,
  `user_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_rating`
--
ALTER TABLE `user_rating`
MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
