/*
Navicat MySQL Data Transfer


Date: 2021-04-11 14:10:06
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

-- ----------------------------
-- Records of q_vstdate
-- ----------------------------
INSERT INTO `q_vstdate` VALUES ('1', '2021-04-11', '2', 'N', '10');
INSERT INTO `q_vstdate` VALUES ('2', '2021-04-11', '1', 'N', '30');
INSERT INTO `q_vstdate` VALUES ('3', '2021-04-12', '1', 'Y', '29');
INSERT INTO `q_vstdate` VALUES ('4', '2021-04-13', '1', 'Y', '28');
INSERT INTO `q_vstdate` VALUES ('5', '2021-04-13', '2', 'N', null);
INSERT INTO `q_vstdate` VALUES ('6', '2021-04-12', '2', 'Y', '43');
