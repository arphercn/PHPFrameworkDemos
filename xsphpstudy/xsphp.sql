-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 07 日 03:29
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xsphp`
--
CREATE DATABASE IF NOT EXISTS `xsphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `xsphp`;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `allow_1` smallint(6) NOT NULL DEFAULT '0',
  `allow_2` smallint(6) NOT NULL DEFAULT '0',
  `allow_3` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `allow_1`, `allow_2`, `allow_3`) VALUES
(1, 'meizi', 'meizi', 'a@b.com', 0, 1, 0),
(2, 'feng', 'feng', 'a@b.com', 1, 1, 0),
(3, 'admin', 'admin', 'a@b.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `sex`, `age`, `email`) VALUES
(1, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(2, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(3, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(4, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(5, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(6, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(7, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(8, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(9, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(10, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(13, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(14, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(15, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(16, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(17, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(18, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(19, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(20, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(21, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(22, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(28, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(29, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(30, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(31, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(32, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(33, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(34, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(35, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(36, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(37, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(38, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(39, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(40, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(41, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(42, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(43, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(44, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(45, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(46, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(47, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(59, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(60, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(61, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(62, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(63, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(64, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(65, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(66, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(67, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(68, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(69, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(70, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(71, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(72, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(73, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(74, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(75, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(76, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(77, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(78, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(79, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(80, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(81, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(82, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(83, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(84, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(85, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(86, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(87, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(88, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(89, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(90, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(91, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(92, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(93, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(94, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(95, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(96, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(97, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(98, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(122, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(123, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(124, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(125, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(126, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(127, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(128, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(129, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(130, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(131, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(132, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(133, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(134, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(135, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(136, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(137, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(138, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(139, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(140, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(141, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(142, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(143, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(144, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(145, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(146, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(147, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(148, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(149, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(150, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(151, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(152, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(153, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(154, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(155, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(156, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(157, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(158, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(159, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(160, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(161, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(162, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(163, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(164, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(165, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(166, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(167, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(168, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(169, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(170, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(171, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(172, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(173, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(174, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(175, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(176, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(177, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(178, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(179, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(180, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(181, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(182, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(183, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(184, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(185, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(186, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(187, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(188, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(189, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(190, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(191, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(192, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(193, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(194, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(195, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(196, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(197, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(198, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(199, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(200, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(201, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(249, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(250, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(251, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(252, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(253, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(254, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(255, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(256, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(257, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(258, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(259, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(260, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(261, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(262, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(263, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(264, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(265, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(266, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(267, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(268, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(269, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(270, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(271, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(272, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(273, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(274, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(275, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(276, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(277, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(278, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(279, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(280, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(281, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(282, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(283, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(284, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(285, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(286, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(287, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(288, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(289, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(290, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(291, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(292, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(293, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(294, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(295, 'Tom', '123456', 'nan', '19', 'Tom@qq.com'),
(296, 'Marry', '123456', 'nv', '17', 'Marry@qq.com'),
(297, 'LiLei', '123456', 'nan', '30', 'LiLei@qq.com'),
(298, 'Hello', '123456', 'nu', '28', 'Hello@qq.com'),
(299, 'Jim', '123456', 'nan', '18', 'Jim@qq.com'),
(300, 'Tom', '123456', 'nan', '19', 'Tom@qq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
