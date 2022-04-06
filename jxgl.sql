
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(40) NOT NULL COMMENT '管理员名',
  `password` varchar(40) NOT NULL COMMENT '密码',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `specialty`
-- ----------------------------
DROP TABLE IF EXISTS `specialty`;
CREATE TABLE `specialty` (
  `zno` int(11) NOT NULL AUTO_INCREMENT COMMENT '专业号',
  `zname` varchar(40) NOT NULL COMMENT '专业名',
  PRIMARY KEY (`zno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of specialty
-- ----------------------------

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `sno` int(11) NOT NULL AUTO_INCREMENT COMMENT '学号',
  `sname` varchar(40) NOT NULL COMMENT '姓名',
  `ssex` enum('男','女') NOT NULL COMMENT '性别',
  `sbirth` date DEFAULT NULL,
  `sclass` varchar(40) NOT NULL COMMENT '班级',
  `zno` int(11) NOT NULL COMMENT '专业号',
  PRIMARY KEY (`sno`),
  KEY `zno` (`zno`),
  CONSTRAINT `zno` FOREIGN KEY (`zno`) REFERENCES `specialty` (`zno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
