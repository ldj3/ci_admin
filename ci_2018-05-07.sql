# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.21)
# Database: ci
# Generation Time: 2018-05-08 10:33:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_administrators
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_administrators`;

CREATE TABLE `ci_administrators` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `ci_administrators` WRITE;
/*!40000 ALTER TABLE `ci_administrators` DISABLE KEYS */;

INSERT INTO `ci_administrators` (`id`, `name`, `password`, `phone`, `last_login`, `IP`, `create_at`, `update_at`)
VALUES
	(1,'admin','$2y$09$VYtkbrKQfZP91lhW42tr9eUOYxcQo7ilyaeTAFpoXYn/DBCPCbrrm','18200867489','2018-05-03 17:31:52',NULL,'2018-05-03 17:31:52','2018-05-03 17:31:52');

/*!40000 ALTER TABLE `ci_administrators` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ci_auth_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_auth_group`;

CREATE TABLE `ci_auth_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父组别',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '组名',
  `rules` text NOT NULL COMMENT '规则ID',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='分组表';



# Dump of table ci_auth_group_access
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_auth_group_access`;

CREATE TABLE `ci_auth_group_access` (
  `uid` int(10) unsigned NOT NULL COMMENT '会员ID',
  `group_id` int(10) unsigned NOT NULL COMMENT '级别ID',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限分组表';



# Dump of table ci_auth_rule
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_auth_rule`;

CREATE TABLE `ci_auth_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('menu','file') NOT NULL DEFAULT 'file' COMMENT 'menu为菜单,file为权限节点',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父ID',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '规则名称',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '规则名称',
  `icon` varchar(50) NOT NULL DEFAULT '' COMMENT '图标',
  `condition` varchar(255) NOT NULL DEFAULT '' COMMENT '条件',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为菜单',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT '0' COMMENT '权重',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `pid` (`pid`),
  KEY `weigh` (`weigh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='节点表';



# Dump of table ci_sidebar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sidebar`;

CREATE TABLE `ci_sidebar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(255) NOT NULL DEFAULT '',
  `sidebar_name` varchar(255) DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `weigh` int(11) DEFAULT NULL,
  `ismenu` int(1) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

LOCK TABLES `ci_sidebar` WRITE;
/*!40000 ALTER TABLE `ci_sidebar` DISABLE KEYS */;

INSERT INTO `ci_sidebar` (`id`, `pid`, `sidebar_name`, `title`, `href`, `status`, `weigh`, `ismenu`, `create_at`, `update_at`)
VALUES
	(1,'0','Dashboard',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(2,'0','UI Elements',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(3,'0','Components',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(4,'0','Form Stuff',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(5,'0','Icons',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(6,'0','Maps',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(7,'0','Sample Pages',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(8,'0','Extra',NULL,NULL,1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(9,'1','Dashboard1',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(10,'1','Dashboard2',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(11,'2','General',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(12,'2','Buttons',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(13,'2','Tabs & Accordions',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(14,'2','Typography',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(15,'2','Tree View',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(16,'2','Nestable List',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(17,'3','Calendar',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(18,'3','Data Table',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(19,'3','Grids',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(20,'3','Visual Charts',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(21,'3','Conversations',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(22,'3','Gallery',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(23,'4','Form Layouts',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(24,'4','Form Components',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(25,'4','Form Wizard',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(26,'4','Form Validation',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(27,'4','Dropzone File Upload',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(28,'5','Font Awesome',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(29,'5','Glyphicons',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(30,'6','Google Maps',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(31,'6',' Vector Maps',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(32,'7','Blank Page',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(33,'7','Sidebar Closed Page',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(34,'7','Coming Soon',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(35,'7','Blog',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(36,'7','About Us',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(37,'7','Contact Us',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(38,'8','Lock Screen',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(39,'8','Profile',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(40,'8','Invoice',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(41,'8','Pricing Tables',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(42,'8','FAQ',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(43,'8','404 Error',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
	(44,'8','500 Error',NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52');

/*!40000 ALTER TABLE `ci_sidebar` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
