/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : xinyouju

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2015-07-19 22:32:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for apartmentinfo
-- ----------------------------
DROP TABLE IF EXISTS `apartmentinfo`;
CREATE TABLE `apartmentinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL DEFAULT '0',
  `DepartmentAreaInfo` varchar(128) NOT NULL COMMENT '小区信息',
  `DepartmentDetails` varchar(128) NOT NULL,
  `LocalX` float(10,0) NOT NULL DEFAULT '0',
  `LocalY` float(10,0) NOT NULL DEFAULT '0',
  `MinRentTime` int(11) NOT NULL DEFAULT '0' COMMENT '最短出租时间',
  `Deposit` int(11) NOT NULL DEFAULT '0' COMMENT '押金',
  `Price` int(11) NOT NULL DEFAULT '0' COMMENT '整体出租价格',
  `Introduce` varchar(256) DEFAULT NULL,
  `Enable` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`Id`,`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for loginlog
-- ----------------------------
DROP TABLE IF EXISTS `loginlog`;
CREATE TABLE `loginlog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(16) NOT NULL,
  `UserAgent` varchar(128) DEFAULT NULL,
  `LoginIP` varchar(16) DEFAULT NULL,
  `LoginTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NewsTypeId` int(11) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `Content` text NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for newstype
-- ----------------------------
DROP TABLE IF EXISTS `newstype`;
CREATE TABLE `newstype` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NewsType` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for orderinfo
-- ----------------------------
DROP TABLE IF EXISTS `orderinfo`;
CREATE TABLE `orderinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `BuyerId` int(11) NOT NULL,
  `SellerId` int(11) NOT NULL,
  `DepartmentId` int(11) NOT NULL,
  `RoomId` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Months` int(11) NOT NULL DEFAULT '0',
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for roominfo
-- ----------------------------
DROP TABLE IF EXISTS `roominfo`;
CREATE TABLE `roominfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DepartmentId` int(11) NOT NULL,
  `RoomName` varchar(16) NOT NULL,
  `AirCondition` char(255) NOT NULL,
  `TV` char(255) NOT NULL,
  `Toilet` char(255) NOT NULL,
  `Kitchen` char(255) DEFAULT '0',
  `RoomPIC` varchar(128) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Deposit` int(11) NOT NULL,
  `MinRentTime` int(11) NOT NULL DEFAULT '0',
  `Enable` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`Id`,`DepartmentId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(16) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `NickName` varchar(16) NOT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Tel` varchar(16) DEFAULT NULL,
  `Mail` varchar(64) DEFAULT NULL,
  `IDCard` varchar(32) DEFAULT NULL,
  `RegTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
