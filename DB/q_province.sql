/*
Navicat MySQL Data Transfer

Date: 2021-04-11 13:32:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for q_province
-- ----------------------------
DROP TABLE IF EXISTS `q_province`;
CREATE TABLE `q_province` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of q_province
-- ----------------------------
INSERT INTO `q_province` VALUES ('1', 'กรุงเทพฯ');
INSERT INTO `q_province` VALUES ('2', 'นนทบุรี');
INSERT INTO `q_province` VALUES ('3', 'สมุทรปราการ');
INSERT INTO `q_province` VALUES ('4', 'ปทุมธานี');
INSERT INTO `q_province` VALUES ('5', 'นครปฐม');
INSERT INTO `q_province` VALUES ('6', 'สมุทรสาคร');
