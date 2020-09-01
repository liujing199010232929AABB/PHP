-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `php` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `php`;

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staff_id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `sex` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '性别0男1女',
  `age` tinyint(4) NOT NULL DEFAULT '25' COMMENT '年龄',
  `salary` int(6) unsigned NOT NULL DEFAULT '3000' COMMENT '工资',
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `staff` (`staff_id`, `name`, `sex`, `age`, `salary`) VALUES
(1,	'郭靖',	0,	25,	5000),
(2,	'黄蓉',	1,	23,	8000),
(3,	'洪七公',	0,	60,	2000),
(4,	'老顽童',	0,	70,	6500),
(5,	'张无忌',	0,	35,	4000),
(6,	'赵敏',	1,	30,	4000),
(7,	'宋青书',	0,	40,	8800),
(8,	'成昆',	0,	70,	9000),
(9,	'灭绝师太',	1,	58,	9999),
(10,	'欧阳克',	0,	25,	3000),
(11,	'武松',	0,	25,	3000),
(12,	'西门庆',	0,	25,	3000),
(13,	'武大郎',	0,	25,	3000),
(14,	'杨过',	0,	25,	4000),
(15,	'小龙女',	0,	25,	5000),
(16,	'金轮法王',	0,	25,	8000);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1,	'admin',	'admin@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2,	'peter',	'peter@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b');

-- 2018-04-24 02:28:20