/*
Navicat MySQL Data Transfer

Date: 2021-04-11 13:33:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for version
-- ----------------------------
DROP TABLE IF EXISTS `version`;
CREATE TABLE `version` (
  `id` int(10) NOT NULL,
  `program` varchar(500) DEFAULT NULL,
  `version` varchar(500) DEFAULT NULL,
  `by` varchar(500) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `detail2` varchar(500) DEFAULT NULL,
  `detail3` varchar(500) DEFAULT NULL,
  `detail4` varchar(500) DEFAULT NULL,
  `detail5` varchar(500) DEFAULT NULL,
  `detail6` varchar(500) DEFAULT NULL,
  `detail7` varchar(500) DEFAULT NULL,
  `detail8` varchar(500) DEFAULT NULL,
  `detail9` varchar(500) DEFAULT NULL,
  `detail10` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of version
-- ----------------------------

INSERT INTO `version` VALUES ('5', 'PSWH Q Covid-19 2021', 'V.1.1', '© CopyRight 2021 By Koson นักวิชาการคอมพิวเตอร์ รพ.โพนสวรรค์', 'V1.1 Start 10/4/2021', null, null, null, null, null, null, null, null, null);
