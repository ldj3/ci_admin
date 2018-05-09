#
************************************************************
# Sequel Pro SQL dump
# Version 4541
#
#
http:
//www.sequelpro.com/
#
https:
//github.com/sequelpro/sequelpro
#
#
Host:
localhost
(MySQL 5.7.21)
#
Database:
ci
# Generation
Time:
2018-05-09 10:38:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_administrators
#
------------------------------------------------------------

DROP TABLE IF EXISTS `ci_administrators`;

CREATE TABLE `ci_administrators`
(
  `id` int
(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar
(255) NOT NULL DEFAULT '',
  `password` varchar
(255) NOT NULL DEFAULT '',
  `phone` varchar
(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `IP` varchar
(255) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `ci_administrators` WRITE;
/*!40000 ALTER TABLE `ci_administrators` DISABLE KEYS */;

INSERT INTO `ci_administrators` (`
id`,
`name
`, `password`, `phone`, `last_login`, `IP`, `create_at`, `update_at`)
VALUES
(1,'admin','$2y$09$VYtkbrKQfZP91lhW42tr9eUOYxcQo7ilyaeTAFpoXYn/DBCPCbrrm','18200867489','2018-05-03 17:31:52',NULL,'2018-05-03 17:31:52','2018-05-03 17:31:52');

/*!40000 ALTER TABLE `ci_administrators` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ci_auth_group
#
------------------------------------------------------------

DROP TABLE IF EXISTS `ci_auth_group`;

CREATE TABLE `ci_auth_group`
(
  `id` int
(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int
(10) unsigned NOT NULL DEFAULT '0' COMMENT '父组别',
  `name` varchar
(100) NOT NULL DEFAULT '' COMMENT '组名',
  `rules` text NOT NULL COMMENT '规则ID',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `status` varchar
(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分组表';



# Dump of table ci_auth_group_access
#
------------------------------------------------------------

DROP TABLE IF EXISTS `ci_auth_group_access`;

CREATE TABLE `ci_auth_group_access`
(
  `uid` int
(10) unsigned NOT NULL COMMENT '会员ID',
  `group_id` int
(10) unsigned NOT NULL COMMENT '级别ID',
  UNIQUE KEY `uid_group_id`
(`uid`,`group_id`),
  KEY `uid`
(`uid`),
  KEY `group_id`
(`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限分组表';



# Dump of table ci_sidebar
#
------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sidebar`;

CREATE TABLE `ci_sidebar`
(
  `id` int
(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int
(11) NOT NULL COMMENT '父级菜单ID',
  `sidebar_name` varchar
(255) DEFAULT '' COMMENT '菜单名称',
  `title` varchar
(255) DEFAULT NULL COMMENT '备注',
  `href` varchar
(255) DEFAULT NULL COMMENT '地址',
  `icon` varchar
(255) DEFAULT NULL COMMENT '图标',
  `status` tinyint
(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `weigh` int
(11) DEFAULT NULL COMMENT '排序',
  `ismenu` int
(1) DEFAULT '0' COMMENT '是否菜单',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

LOCK TABLES `ci_sidebar` WRITE;
/*!40000 ALTER TABLE `ci_sidebar` DISABLE KEYS */;

INSERT INTO `ci_sidebar` (`
id`,
`pid
`, `sidebar_name`, `title`, `href`, `icon`, `status`, `weigh`, `ismenu`, `create_at`, `update_at`)
VALUES
(1,0,'Dashboard',NULL,NULL,'icon-dashboard',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(2,0,'UI Elements',NULL,NULL,'icon-book',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(3,0,'Components',NULL,NULL,'icon-cogs',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(4,0,'Form Stuff',NULL,NULL,'icon-tasks',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(5,0,'Icons',NULL,NULL,'icon-fire',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(6,0,'Maps',NULL,NULL,'icon-map-marker',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(7,0,'Sample Pages',NULL,NULL,'icon-file-alt',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(8,0,'Extra',NULL,NULL,'icon-glass',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(9,1,'Dashboard1',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(10,1,'Dashboard2',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(11,2,'General',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(12,2,'Buttons',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(13,2,'Tabs & Accordions',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(14,2,'Typography',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(15,2,'Tree View',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(16,2,'Nestable List',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(17,3,'Calendar',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(18,3,'Data Table',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(19,3,'Grids',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(20,3,'Visual Charts',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(21,3,'Conversations',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(22,3,'Gallery',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(23,4,'Form Layouts',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(24,4,'Form Components',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(25,4,'Form Wizard',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(26,4,'Form Validation',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(27,4,'Dropzone File Upload',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(28,5,'Font Awesome',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(29,5,'Glyphicons',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(30,6,'Google Maps',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(31,6,' Vector Maps',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(32,7,'Blank Page',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(33,7,'Sidebar Closed Page',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(34,7,'Coming Soon',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(35,7,'Blog',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(36,7,'About Us',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(37,7,'Contact Us',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(38,8,'Lock Screen',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(39,8,'Profile',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(40,8,'Invoice',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(41,8,'Pricing Tables',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(42,8,'FAQ',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(43,8,'404 Error',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(44,8,'500 Error',NULL,NULL,NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52');

/*!40000 ALTER TABLE `ci_sidebar` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
