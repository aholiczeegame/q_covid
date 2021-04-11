/*
Navicat MySQL Data Transfer

Source Server         : 6
Source Server Version : 50505
Source Host           : 192.168.0.6:3306
Source Database       : game_project

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-04-11 13:32:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for q_vstdate
-- ----------------------------
DROP TABLE IF EXISTS `q_vstdate`;
CREATE TABLE `q_vstdate` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vstdate` date DEFAULT NULL,
  `vsttime` varchar(5) DEFAULT NULL,
  `q_status` varchar(5) DEFAULT NULL,
  `q_num` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
