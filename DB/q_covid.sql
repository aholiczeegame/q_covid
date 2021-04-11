/*
Navicat MySQL Data Transfer

Date: 2021-04-11 13:32:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for q_covid
-- ----------------------------
DROP TABLE IF EXISTS `q_covid`;
CREATE TABLE `q_covid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` varchar(13) DEFAULT NULL,
  `pname` varchar(15) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `q_address` varchar(1000) DEFAULT NULL,
  `cc` varchar(100) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `vstdate` date DEFAULT NULL,
  `vsttime` varchar(50) DEFAULT NULL,
  `q` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=211 DEFAULT CHARSET=utf8;
