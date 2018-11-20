/*
 Navicat Premium Data Transfer

 Source Server         : WAMP
 Source Server Type    : MySQL
 Source Server Version : 50136
 Source Host           : localhost:3306
 Source Schema         : qlbh

 Target Server Type    : MySQL
 Target Server Version : 50136
 File Encoding         : 65001

 Date: 20/11/2018 18:47:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `userPwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin');

-- ----------------------------
-- Table structure for xe
-- ----------------------------
DROP TABLE IF EXISTS `xe`;
CREATE TABLE `xe`  (
  `IDXE` int(10) NOT NULL,
  `TENXE` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MAUXE` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `DOIXE` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `XUATXU` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PHANPHOI` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `TINHTRANG` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `GIA` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`IDXE`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of xe
-- ----------------------------
INSERT INTO `xe` VALUES (1, 'HONDA CB125', 'Red', '2015', 'AN GIANG', '125cc', 'New', 22000000);
INSERT INTO `xe` VALUES (2, 'HONDA CBR250R', 'Black', '2014', 'TP HCM', '250cc', 'New', 90000000);
INSERT INTO `xe` VALUES (3, 'HONDA CBR1000RR', 'Red', '2018', 'TP HCM', '1000CC', 'New', 678000000);
INSERT INTO `xe` VALUES (4, 'DUCATI MONSTER', 'Red', '2017', 'HA NOI', '803cc', 'Old', 390000000);

SET FOREIGN_KEY_CHECKS = 1;
