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
2018-05-16 10:57:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_action_log
#
------------------------------------------------------------

DROP TABLE IF EXISTS `ci_action_log`;

CREATE TABLE `ci_action_log`
(
  `id` int
(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '唯一标识',
  `user_name` varchar
(255) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `current_url` varchar
(800) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '当前页',
  `user_agent` varchar
(400) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '访问浏览器的头数据',
  `server_name` varchar
(200) CHARACTER
SET utf8
COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '访问地址',
  `request_uri` varchar
(800) CHARACTER
SET utf8
COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '参数',
  `ip_address` varchar
(255) CHARACTER
SET utf8
COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '访问IP',
  `position` varchar
(255) CHARACTER
SET utf8
COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '用户位置',
  `created_at` datetime NOT NULL COMMENT '发生时间',
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=479 DEFAULT CHARSET=utf8 COMMENT='系统运行日志';

LOCK TABLES `ci_action_log` WRITE;
/*!40000 ALTER TABLE `ci_action_log` DISABLE KEYS */;

INSERT INTO `ci_action_log` (`
id`,
`user_name
`, `current_url`, `user_agent`, `server_name`, `request_uri`, `ip_address`, `position`, `created_at`)
VALUES
(279,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 10:09:16'),
(280,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:16:02'),
(281,'admin','http://localhost/ci_admin/index.php/home/dashboard2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/dashboard2','::1','XXXX内网IP内网IP','2018-05-16 10:16:04'),
(282,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:16:06'),
(283,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:16:08'),
(284,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 10:16:31'),
(285,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:16:36'),
(286,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:16:52'),
(287,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:16:55'),
(288,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:17:01'),
(289,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:17:17'),
(290,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:17:29'),
(291,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 10:17:50'),
(292,'admin','http://localhost/ci_admin/index.php/home/buttons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/buttons','::1','XXXX内网IP内网IP','2018-05-16 10:17:53'),
(293,'admin','http://localhost/ci_admin/index.php/home/buttons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/buttons','::1','XXXX内网IP内网IP','2018-05-16 10:23:19'),
(294,'admin','http://localhost/ci_admin/index.php/home/buttons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/buttons','::1','XXXX内网IP内网IP','2018-05-16 10:23:42'),
(295,'admin','http://localhost/ci_admin/index.php/home/buttons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/buttons','::1','XXXX内网IP内网IP','2018-05-16 10:24:10'),
(296,'admin','http://localhost/ci_admin/index.php/home/dashboard2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/dashboard2','::1','XXXX内网IP内网IP','2018-05-16 10:25:04'),
(297,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:27:57'),
(298,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 10:28:02'),
(299,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 10:28:04'),
(300,'admin','http://localhost/ci_admin/index.php/home/form_layouts','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_layouts','::1','XXXX内网IP内网IP','2018-05-16 10:28:06'),
(301,'admin','http://localhost/ci_admin/index.php/home/glyphicons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/glyphicons','::1','XXXX内网IP内网IP','2018-05-16 10:28:08'),
(302,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 10:31:15'),
(303,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:31:20'),
(304,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:31:21'),
(305,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 10:31:26'),
(306,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 10:31:27'),
(307,'admin','http://localhost/ci_admin/index.php/home/glyphicons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/glyphicons','::1','XXXX内网IP内网IP','2018-05-16 10:31:30'),
(308,'admin','http://localhost/ci_admin/index.php/home/blank_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/blank_page','::1','XXXX内网IP内网IP','2018-05-16 10:31:32'),
(309,'admin','http://localhost/ci_admin/index.php/home/lock_screen','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lock_screen','::1','XXXX内网IP内网IP','2018-05-16 10:31:35'),
(310,'admin','http://localhost/ci_admin/index.php/home/blank_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/blank_page','::1','XXXX内网IP内网IP','2018-05-16 10:31:37'),
(311,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:34:03'),
(312,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:34:07'),
(313,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 10:34:10'),
(314,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 10:49:36'),
(315,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 10:49:40'),
(316,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 10:49:44'),
(317,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 10:49:47'),
(318,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 10:49:49'),
(319,'admin','http://localhost/ci_admin/index.php/home/font_awesome','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/font_awesome','::1','XXXX内网IP内网IP','2018-05-16 10:49:51'),
(320,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 10:53:07'),
(321,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 10:53:23'),
(322,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:00:48'),
(323,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:03:03'),
(324,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:05:56'),
(325,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:05:59'),
(326,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:06:02'),
(327,'admin','http://localhost/ci_admin/index.php/home/form_layouts','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_layouts','::1','XXXX内网IP内网IP','2018-05-16 11:06:04'),
(328,'admin','http://localhost/ci_admin/index.php/home/glyphicons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/glyphicons','::1','XXXX内网IP内网IP','2018-05-16 11:06:07'),
(329,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 11:06:09'),
(330,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 11:06:18'),
(331,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:06:31'),
(332,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:06:34'),
(333,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:06:44'),
(334,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:06:45'),
(335,'admin','http://localhost/ci_admin/index.php/home/vector_maps','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/vector_maps','::1','XXXX内网IP内网IP','2018-05-16 11:06:51'),
(336,'admin','http://localhost/ci_admin/index.php/home/vector_maps','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/vector_maps','::1','XXXX内网IP内网IP','2018-05-16 11:07:52'),
(337,'admin','http://localhost/ci_admin/index.php/home/vector_maps','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/vector_maps','::1','XXXX内网IP内网IP','2018-05-16 11:08:17'),
(338,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:09:30'),
(339,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 11:09:33'),
(340,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 11:09:47'),
(341,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:09:49'),
(342,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 11:09:52'),
(343,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 11:10:15'),
(344,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 11:10:28'),
(345,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:10:42'),
(346,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:11:32'),
(347,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:11:35'),
(348,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 11:11:37'),
(349,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:11:39'),
(350,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:11:41'),
(351,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:12:16'),
(352,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:12:17'),
(353,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:12:20'),
(354,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:12:26'),
(355,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:12:27'),
(356,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:26:07'),
(357,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:26:09'),
(358,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:26:12'),
(359,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:26:16'),
(360,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:26:18'),
(361,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:26:19'),
(362,'admin','http://localhost/ci_admin/index.php/home/sidebar_closed_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/sidebar_closed_page','::1','XXXX内网IP内网IP','2018-05-16 11:26:23'),
(363,'admin','http://localhost/ci_admin/index.php/home/sidebar_closed_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/sidebar_closed_page','::1','XXXX内网IP内网IP','2018-05-16 11:26:25'),
(364,'admin','http://localhost/ci_admin/index.php/home/blank_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/blank_page','::1','XXXX内网IP内网IP','2018-05-16 11:26:27'),
(365,'admin','http://localhost/ci_admin/index.php/home/coming_soon','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/coming_soon','::1','XXXX内网IP内网IP','2018-05-16 11:26:29'),
(366,'admin','http://localhost/ci_admin/index.php/home/blank_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/blank_page','::1','XXXX内网IP内网IP','2018-05-16 11:26:33'),
(367,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 11:26:36'),
(368,'admin','http://localhost/ci_admin/index.php/home/font_awesome','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/font_awesome','::1','XXXX内网IP内网IP','2018-05-16 11:29:23'),
(369,'admin','http://localhost/ci_admin/index.php/home/tabs','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/tabs','::1','XXXX内网IP内网IP','2018-05-16 11:29:28'),
(370,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:29:36'),
(371,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:29:37'),
(372,'admin','http://localhost/ci_admin/index.php/home/google_maps','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/google_maps','::1','XXXX内网IP内网IP','2018-05-16 11:29:43'),
(373,'admin','http://localhost/ci_admin/index.php/home/vector_maps','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/vector_maps','::1','XXXX内网IP内网IP','2018-05-16 11:29:46'),
(374,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 11:29:49'),
(375,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:40:39'),
(376,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:40:43'),
(377,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:40:45'),
(378,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 11:40:48'),
(379,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 11:42:26'),
(380,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 11:42:32'),
(381,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:42:59'),
(382,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:43:11'),
(383,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:43:16'),
(384,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:43:26'),
(385,'admin','http://localhost/ci_admin/index.php/home/form_components','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_components','::1','XXXX内网IP内网IP','2018-05-16 11:43:30'),
(386,'admin','http://localhost/ci_admin/index.php/home/lib/css/wysiwyg-color.css','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/lib/css/wysiwyg-color.css','::1','XXXX内网IP内网IP','2018-05-16 11:43:31'),
(387,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:43:46'),
(388,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:43:47'),
(389,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:45:05'),
(390,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:45:09'),
(391,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:45:48'),
(392,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:45:56'),
(393,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:46:00'),
(394,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 11:46:02'),
(395,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 11:56:27'),
(396,'admin','http://localhost/ci_admin/index.php/home/grids','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/grids','::1','XXXX内网IP内网IP','2018-05-16 11:56:54'),
(397,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:57:03'),
(398,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:58:08'),
(399,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 11:58:16'),
(400,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:58:21'),
(401,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 11:58:25'),
(402,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 11:58:26'),
(403,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 11:58:28'),
(404,'admin','http://localhost/ci_admin/index.php/home/form_layouts','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_layouts','::1','XXXX内网IP内网IP','2018-05-16 11:58:29'),
(405,'admin','http://localhost/ci_admin/index.php/home/form_layouts','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_layouts','::1','XXXX内网IP内网IP','2018-05-16 12:00:48'),
(406,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:01:01'),
(407,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:01:05'),
(408,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 12:01:07'),
(409,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 12:01:09'),
(410,'admin','http://localhost/ci_admin/index.php/home/form_wizard','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/form_wizard','::1','XXXX内网IP内网IP','2018-05-16 12:01:11'),
(411,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:01:14'),
(412,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:01:16'),
(413,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:02:09'),
(414,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:02:38'),
(415,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:02:42'),
(416,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:02:48'),
(417,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:02:50'),
(418,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:02:52'),
(419,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:02:54'),
(420,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:02:55'),
(421,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:02:58'),
(422,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:03:00'),
(423,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 12:03:02'),
(424,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 12:03:04'),
(425,'admin','http://localhost/ci_admin/index.php/home/general','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/general','::1','XXXX内网IP内网IP','2018-05-16 12:03:06'),
(426,'admin','http://localhost/ci_admin/index.php/home/tabs','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/tabs','::1','XXXX内网IP内网IP','2018-05-16 12:03:11'),
(427,'admin','http://localhost/ci_admin/index.php/home/tabs','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/tabs','::1','XXXX内网IP内网IP','2018-05-16 12:03:13'),
(428,'admin','http://localhost/ci_admin/index.php/home/tabs','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/tabs','::1','XXXX内网IP内网IP','2018-05-16 12:04:43'),
(429,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:04:45'),
(430,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:04:50'),
(431,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:04:57'),
(432,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:04:59'),
(433,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:05:01'),
(434,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:05:05'),
(435,'admin','http://localhost/ci_admin/index.php/home/calendar','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/calendar','::1','XXXX内网IP内网IP','2018-05-16 12:05:07'),
(436,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:05:09'),
(437,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:05:11'),
(438,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:05:29'),
(439,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:05:37'),
(440,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:07:53'),
(441,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:08:01'),
(442,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:08:09'),
(443,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:15:49'),
(444,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:15:56'),
(445,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 12:15:58'),
(446,'admin','http://localhost/ci_admin/index.php/home/font_awesome','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/font_awesome','::1','XXXX内网IP内网IP','2018-05-16 12:16:00'),
(447,'admin','http://localhost/ci_admin/index.php/home/google_maps','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/google_maps','::1','XXXX内网IP内网IP','2018-05-16 12:16:02'),
(448,'admin','http://localhost/ci_admin/index.php/home/font_awesome','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/font_awesome','::1','XXXX内网IP内网IP','2018-05-16 12:16:04'),
(449,'admin','http://localhost/ci_admin/index.php/home/glyphicons','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/glyphicons','::1','XXXX内网IP内网IP','2018-05-16 12:16:06'),
(450,'admin','http://localhost/ci_admin/index.php/home/blank_page','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/blank_page','::1','XXXX内网IP内网IP','2018-05-16 12:16:09'),
(451,'admin','http://localhost/ci_admin/index.php/home/profile','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/profile','::1','XXXX内网IP内网IP','2018-05-16 12:16:12'),
(452,'admin','http://localhost/ci_admin/index.php/home/invoice','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/invoice','::1','XXXX内网IP内网IP','2018-05-16 12:16:15'),
(453,'admin','http://localhost/ci_admin/index.php/home/faq','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/faq','::1','XXXX内网IP内网IP','2018-05-16 12:16:17'),
(454,'admin','http://localhost/ci_admin/index.php/home/profile','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/profile','::1','XXXX内网IP内网IP','2018-05-16 12:16:20'),
(455,'admin','http://localhost/ci_admin/index.php/home/pricing_tables','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/pricing_tables','::1','XXXX内网IP内网IP','2018-05-16 12:16:23'),
(456,'admin','http://localhost/ci_admin/index.php/home/profile','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/profile','::1','XXXX内网IP内网IP','2018-05-16 12:16:26'),
(457,'admin','http://localhost/ci_admin/index.php/home/error_505','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/error_505','::1','XXXX内网IP内网IP','2018-05-16 12:16:45'),
(458,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:20:24'),
(459,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:20:31'),
(460,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:20:59'),
(461,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:21:01'),
(462,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:21:10'),
(463,'admin','http://localhost/ci_admin/index.php/home/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/index','::1','XXXX内网IP内网IP','2018-05-16 12:21:12'),
(464,'admin','http://localhost/ci_admin/index.php/home/nestable_list','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/nestable_list','::1','XXXX内网IP内网IP','2018-05-16 12:21:15'),
(465,'admin','http://localhost/ci_admin/index.php/home/data_table','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/data_table','::1','XXXX内网IP内网IP','2018-05-16 12:21:17'),
(466,'admin','http://localhost/ci_admin/index.php/home/font_awesome','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/font_awesome','::1','XXXX内网IP内网IP','2018-05-16 12:21:19'),
(467,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:59.0) Gecko/20100101 Firefox/59.0','http://localhost/ci_admin/','home','127.0.0.1','XXXX内网IP内网IP','2018-05-16 12:21:31'),
(468,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:59.0) Gecko/20100101 Firefox/59.0','http://localhost/ci_admin/','home','127.0.0.1','XXXX内网IP内网IP','2018-05-16 12:21:43'),
(469,'admin','http://localhost/ci_admin/index.php/home/about_us','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/about_us','::1','XXXX内网IP内网IP','2018-05-16 12:21:55'),
(470,'admin','http://localhost/ci_admin/index.php/home/faq','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/faq','::1','XXXX内网IP内网IP','2018-05-16 12:22:02'),
(471,'admin','http://localhost/ci_admin/index.php/home/error_404','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/error_404','::1','XXXX内网IP内网IP','2018-05-16 12:22:05'),
(472,'admin','http://localhost/ci_admin/index.php/home/error_404','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/error_404','::1','XXXX内网IP内网IP','2018-05-16 12:29:05'),
(473,'admin','http://localhost/ci_admin/index.php/home/error_404','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home/error_404','::1','XXXX内网IP内网IP','2018-05-16 12:29:33'),
(474,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:30:57'),
(475,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:32:30'),
(476,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:44:55'),
(477,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:49:45'),
(478,'admin','http://localhost/ci_admin/index.php/home','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','http://localhost/ci_admin/','home','::1','XXXX内网IP内网IP','2018-05-16 12:49:56');

/*!40000 ALTER TABLE `ci_action_log` ENABLE KEYS */;
UNLOCK TABLES;


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
  `rules` text NOT NULL COMMENT '规则ID,all为所有',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `status` varchar
(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='分组表';

LOCK TABLES `ci_auth_group` WRITE;
/*!40000 ALTER TABLE `ci_auth_group` DISABLE KEYS */;

INSERT INTO `ci_auth_group` (`
id`,
`pid
`, `name`, `rules`, `create_at`, `update_at`, `status`)
VALUES
(1,0,'Admin','all','2018-05-15 11:33:13','2018-05-15 11:33:13','1');

/*!40000 ALTER TABLE `ci_auth_group` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `ci_auth_group_access` WRITE;
/*!40000 ALTER TABLE `ci_auth_group_access` DISABLE KEYS */;

INSERT INTO `ci_auth_group_access` (`
uid`,
`group_id
`)
VALUES
(1,1);

/*!40000 ALTER TABLE `ci_auth_group_access` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ci_login_log
#
------------------------------------------------------------

DROP TABLE IF EXISTS `ci_login_log`;

CREATE TABLE `ci_login_log`
(
  `id` int
(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar
(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `ip_address` varchar
(255) DEFAULT NULL COMMENT '用户IP',
  `user_agent` varchar
(255) DEFAULT NULL COMMENT '访问浏览器的头数据',
  `position` varchar
(255) DEFAULT NULL COMMENT '用户地理位置',
  `status` int
(1) DEFAULT NULL COMMENT '1为登录，0为登出',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

LOCK TABLES `ci_login_log` WRITE;
/*!40000 ALTER TABLE `ci_login_log` DISABLE KEYS */;

INSERT INTO `ci_login_log` (`
id`,
`user_name
`, `ip_address`, `user_agent`, `position`, `status`, `created_at`)
VALUES
(1,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-15 09:39:50'),
(2,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-15 09:40:02'),
(3,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-15 12:31:47'),
(4,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-15 12:31:52'),
(5,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',NULL,'2018-05-16 04:09:58'),
(6,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 04:11:13'),
(7,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 04:15:06'),
(8,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 04:15:11'),
(9,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 08:05:12'),
(10,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 09:40:44'),
(11,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 09:40:49'),
(12,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 10:53:07'),
(13,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 11:06:26'),
(14,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 11:06:30'),
(15,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 11:45:15'),
(16,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 11:45:47'),
(17,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 11:56:58'),
(18,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 11:57:03'),
(19,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 11:58:11'),
(20,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 11:58:16'),
(21,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 12:01:50'),
(22,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:02:08'),
(23,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 12:04:53'),
(24,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:04:57'),
(25,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 12:05:33'),
(26,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:05:37'),
(27,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 12:07:56'),
(28,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:08:01'),
(29,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 12:15:41'),
(30,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:15:49'),
(31,'admin','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:59.0) Gecko/20100101 Firefox/59.0','XXXX内网IP内网IP',1,'2018-05-16 12:21:31'),
(32,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:30:57'),
(33,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:32:30'),
(34,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',0,'2018-05-16 12:44:24'),
(35,'admin','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36','XXXX内网IP内网IP',1,'2018-05-16 12:44:55');

/*!40000 ALTER TABLE `ci_login_log` ENABLE KEYS */;
UNLOCK TABLES;


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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

LOCK TABLES `ci_sidebar` WRITE;
/*!40000 ALTER TABLE `ci_sidebar` DISABLE KEYS */;

INSERT INTO `ci_sidebar` (`
id`,
`pid
`, `sidebar_name`, `title`, `href`, `icon`, `status`, `weigh`, `ismenu`, `create_at`, `update_at`)
VALUES
(1,0,'主页',NULL,NULL,'icon-dashboard',1,99999,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(2,0,'UI 元素',NULL,NULL,'icon-book',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(3,0,'组件',NULL,NULL,'icon-cogs',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(4,0,'表单内容',NULL,NULL,'icon-tasks',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(5,0,'图标',NULL,NULL,'icon-fire',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(6,0,'地图',NULL,NULL,'icon-map-marker',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(7,0,'示例页面',NULL,NULL,'icon-file-alt',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(8,0,'额外',NULL,NULL,'icon-glass',1,NULL,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(9,1,'主页1',NULL,'home/index',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(10,1,'主页2',NULL,'home/dashboard2',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(11,2,'一般',NULL,'home/general',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(12,2,'按钮',NULL,'home/buttons',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(13,2,'标签',NULL,'home/tabs',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(14,2,'排版',NULL,'home/typography',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(15,2,'树状图',NULL,'home/tree_view',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(16,2,'嵌套列表',NULL,'home/nestable_list',NULL,1,3,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(17,3,'日历',NULL,'home/calendar',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(18,3,'数据表单',NULL,'home/data_table',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(19,3,'网格',NULL,'home/grids',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(20,3,'视觉图表',NULL,'home/visual_charts',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(21,3,'对话',NULL,'home/conversations',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(22,3,'画廊',NULL,'home/gallery',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(23,4,'表单布局',NULL,'home/form_layouts',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(24,4,'表单组件',NULL,'home/form_components',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(25,4,'表单向导',NULL,'home/form_wizard',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(26,4,'表单验证',NULL,'home/form_validation',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(27,4,'文件上传',NULL,'home/dropzone_file_upload',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(28,5,'图标',NULL,'home/font_awesome',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(29,5,'图标',NULL,'home/glyphicons',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(30,6,'谷歌地图',NULL,'home/google_maps',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(31,6,'矢量图',NULL,'home/vector_maps',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(32,7,'空白页',NULL,'home/blank_page',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(33,7,'侧栏关闭',NULL,'home/sidebar_closed_page',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(34,7,'加载',NULL,'home/coming_soon',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(35,7,'日志',NULL,'home/blog',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(36,7,'关于我们',NULL,'home/about_us',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(37,7,'联系我们',NULL,'home/contact_us',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(38,8,'锁定屏幕',NULL,'home/lock_screen',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(39,8,'简况',NULL,'home/profile',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(40,8,'发票联',NULL,'home/invoice',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(41,8,'定价表',NULL,'home/pricing_tables',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(42,8,'常见问题解答',NULL,'home/faq',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(43,8,'404 Error',NULL,'home/error_404',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(44,8,'500 Error',NULL,'home/error_505',NULL,1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(45,0,'个人测试',NULL,NULL,'icon-list-alt',1,999,1,'2018-05-03 17:31:52','2018-05-03 17:31:52'),
(46,45,'轮播图',NULL,NULL,'',1,NULL,0,'2018-05-03 17:31:52','2018-05-03 17:31:52');

/*!40000 ALTER TABLE `ci_sidebar` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
