-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 19 日 07:16
-- 服务器版本: 5.5.49
-- PHP 版本: 5.3.10-1ubuntu3.22

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phonelocation`
--

-- --------------------------------------------------------

--
-- 表的结构 `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `redisKey` varchar(10) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `location`
--

INSERT INTO `location` (`id`, `redisKey`, `info`) VALUES
(15, '1883453', '{"mts":"1883453","province":"\\u5c71\\u897f","catName":"\\u4e2d\\u56fd\\u79fb\\u52a8","telString":"18834531111","areaVid":"30502","ispVid":"3236139","carrier":"\\u5c71\\u897f\\u79fb\\u52a8"}'),
(16, '1888386', '{"mts":"1888386","province":"\\u91cd\\u5e86","catName":"\\u4e2d\\u56fd\\u79fb\\u52a8","telString":"18883860481","areaVid":"29404","ispVid":"3236139","carrier":"\\u91cd\\u5e86\\u79fb\\u52a8"}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
