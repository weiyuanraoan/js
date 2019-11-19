-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2019-04-17 14:17:16
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `dept_info`
--

DROP TABLE IF EXISTS `dept_info`;
CREATE TABLE IF NOT EXISTS `dept_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(20) NOT NULL COMMENT '学院名称',
  `dept_tel` char(20) NOT NULL DEFAULT '' COMMENT '学院电话',
  PRIMARY KEY (`id`),
  UNIQUE KEY `dept_name` (`dept_name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='学院信息表';

--
-- 转存表中的数据 `dept_info`
--

INSERT INTO `dept_info` (`id`, `dept_name`, `dept_tel`) VALUES
(2, '软件学院', '12345678'),
(11, '测绘学院', '666666'),
(10, '经管学院', '55555');

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别 1男0女',
  `login_time` int(11) NOT NULL DEFAULT '0' COMMENT '登录时间',
  `login_ip` char(15) NOT NULL DEFAULT '0.0.0.0' COMMENT '登录ip',
  `dept_id` int(11) NOT NULL DEFAULT '0' COMMENT '所属学院',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `sex`, `login_time`, `login_ip`, `dept_id`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1555298479, '::1', 2),
(2, 'tom', '34b7da764b21d298ef307d04d8152dc5', 1, 1555508052, '::1', 2),
(3, 'jane', '5844a15e76563fedd11840fd6f40ea7b', 0, 0, '0.0.0.0', 10),
(4, 'tom2', 'c81e728d9d4c2f636f067f89cc14862c', 1, 0, '0.0.0.0', 11),
(5, 'mike', '18126e7bd3f84b3f3e4df094def5b7de', 1, 1555313031, '::1', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
