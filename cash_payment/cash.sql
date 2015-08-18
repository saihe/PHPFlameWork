-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E18 日 05:08
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cash`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cashers`
--

CREATE TABLE IF NOT EXISTS `cashers` (
`id` int(11) NOT NULL,
  `casher_name` varchar(64) NOT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cashers`
--

INSERT INTO `cashers` (`id`, `casher_name`, `tel`, `created`, `modified`) VALUES
(1, '未定', '', '2015-08-12', '2015-08-12'),
(2, '小口　金助', '000-000-000', '2015-08-12', '2015-08-12');

-- --------------------------------------------------------

--
-- テーブルの構造 `cash_infos`
--

CREATE TABLE IF NOT EXISTS `cash_infos` (
`id` int(11) NOT NULL,
  `settlement_date` date NOT NULL,
  `pay_date` date NOT NULL,
  `person` varchar(64) NOT NULL,
  `item` varchar(64) NOT NULL,
  `payment` int(11) NOT NULL,
  `casher_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `settlement_id` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `cash_infos`
--

INSERT INTO `cash_infos` (`id`, `settlement_date`, `pay_date`, `person`, `item`, `payment`, `casher_id`, `created`, `modified`, `settlement_id`) VALUES
(2, '2015-08-12', '2015-08-12', 'asdf', 'asdf', 1000, 1, '2015-08-12', '2015-08-12', '1'),
(3, '2015-08-12', '2015-08-12', 'asdf', 'aaaa', 1000, 1, '2015-08-12', '2015-08-12', '1'),
(4, '2015-08-12', '2015-08-12', 'asdf', 'ssss', 2000, 1, '2015-08-12', '2015-08-12', '1'),
(5, '2015-08-12', '2015-08-12', 'asdf', 'ffff', 321654987, 2, '2015-08-12', '2015-08-12', '2');

-- --------------------------------------------------------

--
-- テーブルの構造 `settlements`
--

CREATE TABLE IF NOT EXISTS `settlements` (
`id` int(11) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `settlements`
--

INSERT INTO `settlements` (`id`, `type`) VALUES
(1, '未'),
(2, '済'),
(3, '検討中'),
(4, '返却未'),
(5, '返却済');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashers`
--
ALTER TABLE `cashers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_infos`
--
ALTER TABLE `cash_infos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settlements`
--
ALTER TABLE `settlements`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashers`
--
ALTER TABLE `cashers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cash_infos`
--
ALTER TABLE `cash_infos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settlements`
--
ALTER TABLE `settlements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
