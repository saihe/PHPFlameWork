-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E18 日 05:03
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `affiliations`
--

CREATE TABLE IF NOT EXISTS `affiliations` (
`id` int(11) NOT NULL,
  `affiliation_type` varchar(64) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `affiliations`
--

INSERT INTO `affiliations` (`id`, `affiliation_type`, `created`, `modified`) VALUES
(1, '営業部', '2015-08-14', '2015-08-14'),
(2, '技術部', '2015-08-14', '2015-08-14'),
(3, '総務部', '2015-08-14', '2015-08-14');

-- --------------------------------------------------------

--
-- テーブルの構造 `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
`id` int(11) NOT NULL,
  `affiliation_id` varchar(64) NOT NULL,
  `person_name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `postnumber` int(11) NOT NULL,
  `address` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `birthday` date NOT NULL,
  `affiliated` date NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `persons`
--

INSERT INTO `persons` (`id`, `affiliation_id`, `person_name`, `email`, `postnumber`, `address`, `birthday`, `affiliated`, `created`, `modified`) VALUES
(1, '1', '齋藤恭平', 'saihe.kyon@gmail.omc', 1870004, '東京都', '1995-06-16', '2015-08-14', '2015-08-14', '2015-08-14'),
(2, '3', '齋藤　一郎', 'ichoro@gmail.com', 0, '東京都', '2015-08-14', '2015-08-14', '2015-08-14', '2015-08-14'),
(3, '2', '齋藤　次郎', 'jiro@gmail.com', 1111111, '東京都', '2015-08-14', '2015-08-14', '2015-08-14', '2015-08-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliations`
--
ALTER TABLE `affiliations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliations`
--
ALTER TABLE `affiliations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
